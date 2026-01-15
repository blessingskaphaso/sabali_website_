<?php

namespace App\Models;

use App\Models\Traits\LogsLoanActivities;
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