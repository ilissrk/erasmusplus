<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    use HasFactory;

    protected $fillable = [
    'institutionName', 'status', 'city', 'region', 'postalAddress', 'website',
    'facebook', 'twitter', 'legalRepresentative', 'internationalOffice',
    'icmContact', 'cbheContact', 'jeanMonnetContact', 'intraAfriqueContact',
    'universityEstablishments', 'formations', 'courses',
];
}
 