<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mob extends Model
{
    use HasFactory;

    protected $fillable = [
        'pic', 'moroccan_partner', 'european_partner_institution', 'european_partner_pic', 
        'european_partner_country', 'european_partner_city', 'year_of_call', 'project_code', 
        'project_duration', 'total_approved_mobilities', 'outgoing_student_mobilities', 
        'outgoing_approved_admin_staff_mobilities', 'outgoing_approved_academic_mobilities', 
        'incoming_student_mob', 'incoming_admin_staff_mob', 'incoming_acad_staff_mob'
    ];
}
