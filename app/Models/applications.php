<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class applications extends Model
{
    use HasFactory;
    protected $table = 'cities';
    protected $fillable = [
        'user_id',
        'job_id',
        'status',
        'cv',
        'applicant_email',
    ];

    // Relationship with User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relationship with Job
    public function job()
    {
        return $this->belongsTo(Job::class);
    }
}
