<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job_Role extends Model
{
    use HasFactory;

    protected $table = 'job_roles';
    protected $fillable = ['job_role_name'];
}
