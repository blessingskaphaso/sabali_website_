<?php

namespace App\Models;

use App\Models\Traits\LogsPaymentActivities;
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