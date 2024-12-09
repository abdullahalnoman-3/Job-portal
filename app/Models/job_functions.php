<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job_functions extends Model
{
    use HasFactory;
    protected $table = 'job_functions';
    protected $fillable = ['name'];
}
