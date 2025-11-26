<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'mechanic_id',
        'problem_type',
        'additional_notes',
        'customer_latitude',
        'customer_longitude',
        'customer_location',
        'status',
        'accepted_at',
        'completed_at'
    ];

    protected $casts = [
        'customer_latitude' => 'decimal:7',
        'customer_longitude' => 'decimal:7',
        'accepted_at' => 'datetime',
        'completed_at' => 'datetime'
    ];

    // Relationships
    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }

    public function mechanic()
    {
        return $this->belongsTo(Mechanic::class, 'mechanic_id');
    }
}