<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ErasmusInfo;

class ChartController extends Controller
{
    public function index()
    {
        $data = ErasmusInfo::select('mobilite_individus', 'bourses_erasmus_mundus', 'mobilite_jeunesse', 'ees_ongs_partenaire', 'projets_renforcement_capacites', 'activites_jean_monnet')->first();
        return view('chart', compact('data'));
    }
}
