<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class citie extends Model
{
    use HasFactory;

    protected $table = 'countries';
    protected $fillable = ['country_id,city_name'];
}
