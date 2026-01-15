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