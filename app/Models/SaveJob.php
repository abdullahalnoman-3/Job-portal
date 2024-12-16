<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaveJob extends Model
{
    use HasFactory;
    protected $table = 'save_jobs';

    protected $fillable = ['user_id', 'job_id'];


    public function job()
    {
        return $this->belongsTo(Job::class, 'job_id', 'id');
    }
}
