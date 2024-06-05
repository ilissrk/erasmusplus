<?php

namespace App\Http\Controllers;

use App\Models\ErasmusInfo;
use Illuminate\Http\Request;

class ErasmusInfoController extends Controller
{

 public function chartData()
    {
        $data = ErasmusInfo::select('mobilite_individus', 'bourses_erasmus_mundus', 'mobilite_jeunesse', 'ees_ongs_partenaire', 'projets_renforcement_capacites', 'activites_jean_monnet')->get();

        return response()->json($data);
    }


    {
        $erasmusInfos = ErasmusInfo::all();
        return view('chiffres.index', compact('erasmusInfos'));
        
    }

    public function create()
    {
        return view('chiffres.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'mobilite_individus' => 'required',
            'bourses_erasmus_mundus' => 'required',
            'mobilite_jeunesse' => 'required',
            'ees_ongs_partenaire' => 'required',
            'projets_renforcement_capacites' => 'required',
            'activites_jean_monnet' => 'required',
        ]);

        ErasmusInfo::create($request->all());

        return redirect()->route('chiffres.index')
            ->with('success', 'Information enregistrée avec succès.');
    }

    public function show(ErasmusInfo $erasmusInfo)
    {
        return view('chiffres.show', compact('erasmusInfo'));
    }

    public function edit(ErasmusInfo $erasmusInfo)
    {
        return view('chiffres.edit', compact('erasmusInfo'));
    }

    public function update(Request $request, ErasmusInfo $erasmusInfo)
    {
        $request->validate([
            'mobilite_individus' => 'required',
            'bourses_erasmus_mundus' => 'required',
            'mobilite_jeunesse' => 'required',
            'ees_ongs_partenaire' => 'required',
            'projets_renforcement_capacites' => 'required',
            'activites_jean_monnet' => 'required',
        ]);

        $erasmusInfo->update($request->all());

        return redirect()->route('chiffres.index')
            ->with('success', 'Information mise à jour avec succès.');
    }

    public function destroy(ErasmusInfo $erasmusInfo)
    {
        $erasmusInfo->delete();

        return redirect()->route('chiffres.index')
            ->with('success', 'Information supprimée avec succès.');
    }
}
