<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandingPageEnquiry extends Model
{
    use HasFactory;

     protected $fillable = [
        'name',
        'phone',
        'branch',
        'budget',
        'neet_score',
    ];
}
