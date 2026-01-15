<?php

namespace App\Models\Traits;

use App\Models\Activity;

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