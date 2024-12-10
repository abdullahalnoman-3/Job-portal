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
        'company_name', 'company_website', 'job_tags',
    ];
    public function citie()
        {
            return $this->belongsTo(citie::class, 'city_id');
        }
    public function countrye()
        {
            return $this->belongsTo(countrie::class, 'country_id');
        }
    public function jobtypes()
        {
            return $this->belongsTo(job_types::class, 'job_type_id');
        }

}