<?php

namespace App\Models\Traits;

use App\Models\Activity;

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