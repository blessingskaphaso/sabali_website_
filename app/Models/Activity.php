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