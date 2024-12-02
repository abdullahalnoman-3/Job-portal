<?php

namespace App\Models;

use App\Models\Job;
use App\Models\SaveJob;
use App\Models\Application;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
    protected $fillable = [
        'full_name',
        'email',
        'mobile',
        'password',
        'otp',
        'role',
        'profile_picture',
        'company_name',
        'company_website',
        'gender'
    ];

    protected $attributes = [
        'otp' => '0'
    ];

    public function isAdmin(): bool
    {
        return $this->role === 'admin';
    }

    public function isEmployer(): bool
    {
        return $this->role === 'employer';
    }

    public function isUser(): bool
    {
        return $this->role === 'user';
    }

    public function job(): HasMany
    {
        return  $this->hasMany(Job::class);
    }

    public function application(): HasMany
    {
        return  $this->hasMany(Application::class);
    }
    
    public function saveJob(): HasMany
    {
        return  $this->hasMany(SaveJob::class);
    }
}
