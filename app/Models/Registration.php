<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'first_name',
        'last_name',
        'email',
        'mobile',
        'organisation',
        'role',
        'business_nature',
        'organisation_type',
        'address',
        'postcode',
        'city',
        'state',
        'country',
        'participant_type',
        'interest',
        'hear_about',
        'referral_source',
        'consent',
        'registered_at',
    ];

    protected $casts = [
        'consent' => 'boolean',
        'registered_at' => 'datetime',
    ];

    public function getFullNameAttribute(): string
    {
        return trim("{$this->first_name} {$this->last_name}");
    }
}
