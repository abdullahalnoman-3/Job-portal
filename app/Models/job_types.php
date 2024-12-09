<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job_types extends Model
{
    use HasFactory;
    protected $table = 'job_types';
    protected $fillable = ['job_type_name'];
}
