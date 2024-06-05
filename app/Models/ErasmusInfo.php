<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ErasmusInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'mobilite_individus',
        'bourses_erasmus_mundus',
        'mobilite_jeunesse',
        'ees_ongs_partenaire',
        'projets_renforcement_capacites',
        'activites_jean_monnet',
    ];
}
