<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $table = 'jobs'; 


    protected $fillable = [
        'job_title', 'job_type_id',  
        'job_role_id', 'job_tags',     
        'job_function_id', 'min_salary',   
        'max_salary', 'remark',   
        'vacancies', 'work_mode_id',   
        'experience_level_id', 'country_id',   
        'city_id', 'description',   
        'user_id', 'contact_email',   
    ];
}