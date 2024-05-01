<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rank extends Model
{
    use HasFactory;

    protected $fillable = [
        'state',
        'quota',
        'college',
        'course',
        'course_fee',
        'nri_fee',
        'bond_years',
        'bond_penalty', 
        'stripend_year',
        'category', 
        'round',
        'rank',
    ];

}
