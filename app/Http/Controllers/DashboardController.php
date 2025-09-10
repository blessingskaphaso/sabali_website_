<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Loan;
use App\Models\Activity;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        
        // Log dashboard access
        Activity::logActivity(
            'dashboard_accessed',
            'User accessed their dashboard',
            $user->id
        );

        if ($user->role === 'admin') {
            return $this->adminDashboard();
        }
        
        return $this->clientDashboard();
    }

    private function adminDashboard()
    {
        // Admin Statistics
        $totalUsers = User::count();
        $activeLoans = Loan::where('status', 'active')->count();
        $pendingApprovals = Loan::where('status', 'pending')->count();
        $monthlyRevenue = Payment::whereMonth('created_at', now()->month)
                                ->whereYear('created_at', now()->year)
                                ->sum('amount');

        // System-wide recent activities (last 50)
        $recentActivities = Activity::with('user')
                                  ->orderBy('created_at', 'desc')
                                  ->take(50)
                                  ->get();

        return view('dashboard.index', compact(
            'totalUsers',
            'activeLoans', 
            'pendingApprovals',
            'monthlyRevenue',
            'recentActivities'
        ));
    }

    private function clientDashboard()
    {
        $user = Auth::user();
        
        // Client Statistics
        $userActiveLoans = Loan::where('user_id', $user->id)
                              ->where('status', 'active')
                              ->count();
                              
        $userCreditScore = $user->credit_score ?? 0;
        
        // Next payment info
        $nextPayment = Payment::where('user_id', $user->id)
                             ->where('status', 'pending')
                             ->orderBy('due_date')
                             ->first();
                             
        $nextPaymentAmount = $nextPayment ? $nextPayment->amount : 0;
        $nextPaymentDate = $nextPayment ? $nextPayment->due_date->format('M d, Y') : 'No pending payments';

        // User's recent activities (last 20)
        $userRecentActivities = Activity::where('user_id', $user->id)
                                      ->orderBy('created_at', 'desc')
                                      ->take(20)
                                      ->get();

        // User's loans
        $userLoans = Loan::where('user_id', $user->id)
                        ->orderBy('created_at', 'desc')
                        ->take(5)
                        ->get();

        return view('dashboard.index', compact(
            'userActiveLoans',
            'userCreditScore',
            'nextPaymentAmount',
            'nextPaymentDate',
            'userRecentActivities',
            'userLoans'
        ));
    }

    // API endpoint for real-time updates
    public function getUpdates()
    {
        $user = Auth::user();
        $lastCheck = request('last_check', now()->subMinutes(1));
        
        $data = ['hasUpdates' => false];
        
        if ($user->role === 'admin') {
            // Check for new activities since last check
            $newActivitiesCount = Activity::where('created_at', '>', $lastCheck)->count();
            $pendingApprovals = Loan::where('status', 'pending')->count();
            
            if ($newActivitiesCount > 0) {
                $data['hasUpdates'] = true;
                $data['newActivities'] = $newActivitiesCount;
                $data['pendingApprovals'] = $pendingApprovals;
            }
        } else {
            // Check for user-specific updates
            $newUserActivities = Activity::where('user_id', $user->id)
                                       ->where('created_at', '>', $lastCheck)
                                       ->count();
                                       
            if ($newUserActivities > 0) {
                $data['hasUpdates'] = true;
                $data['newActivities'] = $newUserActivities;
            }
        }
        
        return response()->json($data);
    }
}

// Activity Model for tracking all company activities
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class Activity extends Model
{
    protected $fillable = [
        'user_id',
        'activity_type',
        'description',
        'metadata',
        'ip_address',
        'user_agent'
    ];

    protected $casts = [
        'metadata' => 'json',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Static method to log activities
    public static function logActivity(
        string $activityType, 
        string $description, 
        int $userId = null, 
        array $metadata = []
    ): self {
        return self::create([
            'user_id' => $userId ?? Auth::id(),
            'activity_type' => $activityType,
            'description' => $description,
            'metadata' => $metadata,
            'ip_address' => Request::ip(),
            'user_agent' => Request::userAgent()
        ]);
    }

    // Get appropriate icon for activity type
    public function getIcon(): string
    {
        $icons = [
            'user_login' => '🔐',
            'user_logout' => '🚪',
            'user_registered' => '👤',
            'loan_applied' => '📝',
            'loan_approved' => '✅',
            'loan_rejected' => '❌',
            'loan_disbursed' => '💰',
            'payment_made' => '💳',
            'payment_received' => '💰',
            'payment_overdue' => '⚠️',
            'document_uploaded' => '📄',
            'profile_updated' => '✏️',
            'password_changed' => '🔑',
            'dashboard_accessed' => '🏠',
            'report_generated' => '📊',
            'system_backup' => '💾',
            'system_maintenance' => '🔧',
            'email_sent' => '📧',
            'sms_sent' => '📱',
            'default' => '📋'
        ];

        return $icons[$this->activity_type] ?? $icons['default'];
    }

    // Get status color for activity
    public function getStatusColor(): string
    {
        $colors = [
            'loan_approved' => 'border-green-400',
            'loan_rejected' => 'border-red-400', 
            'payment_made' => 'border-green-400',
            'payment_overdue' => 'border-red-400',
            'user_login' => 'border-blue-400',
            'user_logout' => 'border-gray-400',
            'system_maintenance' => 'border-yellow-400',
            'default' => 'border-gray-300'
        ];

        return $colors[$this->activity_type] ?? $colors['default'];
    }

    // Scope for filtering activities by date range
    public function scopeDateRange($query, $startDate, $endDate)
    {
        return $query->whereBetween('created_at', [$startDate, $endDate]);
    }

    // Scope for filtering by activity type
    public function scopeOfType($query, $type)
    {
        return $query->where('activity_type', $type);
    }

    // Scope for user activities
    public function scopeForUser($query, $userId)
    {
        return $query->where('user_id', $userId);
    }
}

// Activity Tracking Middleware
<?php

namespace App\Http\Middleware;

use App\Models\Activity;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrackActivity
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        // Track specific routes and actions
        $this->trackRouteActivity($request);

        return $response;
    }

    private function trackRouteActivity(Request $request)
    {
        $route = $request->route();
        if (!$route) return;

        $routeName = $route->getName();
        $method = $request->method();
        
        // Define trackable routes
        $trackableRoutes = [
            'loans.store' => ['type' => 'loan_applied', 'description' => 'New loan application submitted'],
            'payments.store' => ['type' => 'payment_made', 'description' => 'Payment made'],
            'profile.update' => ['type' => 'profile_updated', 'description' => 'Profile information updated'],
            'documents.upload' => ['type' => 'document_uploaded', 'description' => 'Document uploaded'],
        ];

        if (isset($trackableRoutes[$routeName]) && Auth::check()) {
            $config = $trackableRoutes[$routeName];
            Activity::logActivity(
                $config['type'],
                $config['description'],
                Auth::id(),
                ['route' => $routeName, 'method' => $method]
            );
        }
    }
}

// Event Listeners for automatic activity tracking
<?php

namespace App\Listeners;

use App\Models\Activity;
use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Logout;
use Illuminate\Auth\Events\Registered;

class ActivityEventListener
{
    public function handleUserLogin(Login $event)
    {
        Activity::logActivity(
            'user_login',
            'User logged into the system',
            $event->user->id
        );
    }

    public function handleUserLogout(Logout $event)
    {
        Activity::logActivity(
            'user_logout', 
            'User logged out of the system',
            $event->user->id ?? null
        );
    }

    public function handleUserRegistered(Registered $event)
    {
        Activity::logActivity(
            'user_registered',
            'New user account created: ' . $event->user->name,
            $event->user->id
        );
    }
}

// Loan Model extensions for activity tracking
trait LogsLoanActivities
{
    protected static function bootLogsLoanActivities()
    {
        static::created(function ($loan) {
            Activity::logActivity(
                'loan_applied',
                "Loan application submitted for {$loan->amount}",
                $loan->user_id,
                ['loan_id' => $loan->id, 'amount' => $loan->amount]
            );
        });

        static::updated(function ($loan) {
            if ($loan->wasChanged('status')) {
                $status = $loan->status;
                $descriptions = [
                    'approved' => "Loan application approved for {$loan->amount}",
                    'rejected' => "Loan application rejected",
                    'disbursed' => "Loan funds disbursed for {$loan->amount}",
                    'completed' => "Loan fully repaid and completed",
                    'defaulted' => "Loan marked as defaulted"
                ];

                Activity::logActivity(
                    "loan_{$status}",
                    $descriptions[$status] ?? "Loan status updated to {$status}",
                    $loan->user_id,
                    ['loan_id' => $loan->id, 'old_status' => $loan->getOriginal('status'), 'new_status' => $status]
                );
            }
        });
    }
}

// Payment Model extensions for activity tracking
trait LogsPaymentActivities
{
    protected static function bootLogsPaymentActivities()
    {
        static::created(function ($payment) {
            Activity::logActivity(
                'payment_made',
                "Payment of {$payment->amount} made for loan #{$payment->loan_id}",
                $payment->user_id,
                ['payment_id' => $payment->id, 'amount' => $payment->amount, 'loan_id' => $payment->loan_id]
            );
        });

        static::updated(function ($payment) {
            if ($payment->wasChanged('status') && $payment->status === 'overdue') {
                Activity::logActivity(
                    'payment_overdue',
                    "Payment of {$payment->amount} is now overdue",
                    $payment->user_id,
                    ['payment_id' => $payment->id, 'amount' => $payment->amount, 'due_date' => $payment->due_date]
                );
            }
        });
    }
}

// Migration for activities table
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
            $table->string('activity_type', 50)->index();
            $table->text('description');
            $table->json('metadata')->nullable();
            $table->ipAddress('ip_address')->nullable();
            $table->text('user_agent')->nullable();
            $table->timestamps();

            // Indexes for performance
            $table->index(['user_id', 'created_at']);
            $table->index(['activity_type', 'created_at']);
            $table->index('created_at');
        });
    }

    public function down()
    {
        Schema::dropIfExists('activities');
    }
};

// Add role column to users table if not exists
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'role')) {
                $table->string('role')->default('client')->after('email');
            }
            if (!Schema::hasColumn('users', 'credit_score')) {
                $table->integer('credit_score')->nullable()->after('role');
            }
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['role', 'credit_score']);
        });
    }
};

// Extend Loan model
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Loan extends Model
{
    use LogsLoanActivities;

    protected $fillable = [
        'user_id',
        'amount',
        'interest_rate',
        'term_months',
        'status',
        'purpose',
        'approved_at',
        'disbursed_at',
        'next_payment_date'
    ];

    protected $casts = [
        'amount' => 'decimal:2',
        'interest_rate' => 'decimal:2',
        'approved_at' => 'datetime',
        'disbursed_at' => 'datetime',
        'next_payment_date' => 'date'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }

    public function getStatusClass(): string
    {
        $classes = [
            'pending' => 'bg-yellow-100 text-yellow-800',
            'approved' => 'bg-blue-100 text-blue-800',
            'active' => 'bg-green-100 text-green-800',
            'completed' => 'bg-gray-100 text-gray-800',
            'rejected' => 'bg-red-100 text-red-800',
            'defaulted' => 'bg-red-100 text-red-800'
        ];

        return $classes[$this->status] ?? 'bg-gray-100 text-gray-800';
    }

    public function calculateMonthlyPayment(): float
    {
        if ($this->term_months <= 0) return 0;
        
        $monthlyRate = ($this->interest_rate / 100) / 12;
        $numPayments = $this->term_months;
        
        if ($monthlyRate == 0) {
            return $this->amount / $numPayments;
        }
        
        $monthlyPayment = $this->amount * 
            ($monthlyRate * pow(1 + $monthlyRate, $numPayments)) / 
            (pow(1 + $monthlyRate, $numPayments) - 1);
            
        return round($monthlyPayment, 2);
    }
}

// Payment model
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    use LogsPaymentActivities;

    protected $fillable = [
        'user_id',
        'loan_id',
        'amount',
        'due_date',
        'paid_date',
        'status',
        'payment_method',
        'transaction_id'
    ];

    protected $casts = [
        'amount' => 'decimal:2',
        'due_date' => 'date',
        'paid_date' => 'datetime'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function loan(): BelongsTo
    {
        return $this->belongsTo(Loan::class);
    }

    public function isOverdue(): bool
    {
        return $this->status === 'pending' && $this->due_date->isPast();
    }
}

// Routes additions for web.php
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/api/dashboard/updates', [DashboardController::class, 'getUpdates']);
    
    // Admin routes
    Route::middleware(['role:admin'])->prefix('admin')->group(function () {
        Route::get('/activities', [ActivityController::class, 'index'])->name('admin.activities');
        Route::get('/users', [UserController::class, 'index'])->name('admin.users');
        Route::get('/loans', [LoanController::class, 'adminIndex'])->name('admin.loans');
        Route::get('/loans/pending', [LoanController::class, 'pending'])->name('admin.loans.pending');
        Route::post('/loans/{loan}/approve', [LoanController::class, 'approve'])->name('admin.loans.approve');
        Route::post('/loans/{loan}/reject', [LoanController::class, 'reject'])->name('admin.loans.reject');
        Route::get('/reports', [ReportController::class, 'index'])->name('admin.reports');
    });
    
    // Client routes
    Route::middleware(['role:client'])->group(function () {
        Route::get('/loans', [LoanController::class, 'userIndex'])->name('loans.index');
        Route::get('/loans/apply', [LoanController::class, 'create'])->name('loans.create');
        Route::post('/loans', [LoanController::class, 'store'])->name('loans.store');
        Route::get('/payments', [PaymentController::class, 'index'])->name('payments.index');
        Route::post('/payments', [PaymentController::class, 'store'])->name('payments.store');
        Route::get('/activities', [ActivityController::class, 'userActivities'])->name('user.activities');
    });
});

// Role middleware
<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, string $role)
    {
        if (!Auth::check() || Auth::user()->role !== $role) {
            abort(403, 'Unauthorized access.');
        }

        return $next($request);
    }
}

// Register middleware in app/Http/Kernel.php
protected $routeMiddleware = [
    // ... other middleware
    'role' => \App\Http\Middleware\RoleMiddleware::class,
    'track.activity' => \App\Http\Middleware\TrackActivity::class,
];

// EventServiceProvider registration
<?php

namespace App\Providers;

use App\Listeners\ActivityEventListener;
use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Logout;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        Login::class => [
            [ActivityEventListener::class, 'handleUserLogin'],
        ],
        Logout::class => [
            [ActivityEventListener::class, 'handleUserLogout'],
        ],
        Registered::class => [
            [ActivityEventListener::class, 'handleUserRegistered'],
        ],
    ];
}