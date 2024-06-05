<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mob2 extends Model
{
    use HasFactory;

    protected $fillable = [
        'pic',
        'moroccan_partner',
        'university_institution',
        'country',
        'city',
        'year_of_call',
        'project_code',
        'mobility',
        'mobility_type',
        'mobility_nature',
        'diploma',
        'discipline',
        'mobility_duration',
        'mobility_location',
        'first_name',
        'last_name',
        'nationality',
        'age',
        'gender',
        'institution',
        'staff_responsibility',
        'staff_department',
        'email',
        'telephone',
        'mobility_start_date',
        'mobility_end_date',
        'mobility_description',
        'challenges_faced',
        'other_comments',
    ];
}
