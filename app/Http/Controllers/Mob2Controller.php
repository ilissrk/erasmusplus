<?php

namespace App\Http\Controllers;

use App\Models\Mob2;
use Illuminate\Http\Request;

class Mob2Controller extends Controller
{
    public function index()
    {
        $mobs2 = Mob2::all();
        return view('mobs2.index', compact('mobs2'));
    }

    public function create()
    {
        return view('mobs2.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'pic' => 'required|string|max:255',
            'moroccan_partner' => 'required|string|max:255',
            // ajoutez les autres validations ici
        ]);

        Mob2::create($request->all());
        return redirect()->route('mobs2.index')->with('success', 'Mob created successfully.');
    }

    public function show(Mob2 $mob2)
    {
        return view('mobs2.show', compact('mob2'));
    }

    public function edit(Mob2 $mob2)
    {
        return view('mobs2.edit', compact('mob2'));
    }

    public function update(Request $request, Mob2 $mob2)
    {
        $request->validate([
            'pic' => 'required|string|max:255',
            'moroccan_partner' => 'required|string|max:255',
            // ajoutez les autres validations ici
        ]);

        $mob->update($request->all());
        return redirect()->route('mobs2.index')->with('success', 'Mob updated successfully.');
    }

    public function destroy(Mob2 $mob2)
    {
        $mob2->delete();
        return redirect()->route('mobs2.index')->with('success', 'Mob deleted successfully.');
    }
    public function search(Request $request)
    {
        $search = $request->input('search');
        
        // Rechercher dans les champs pertinents
        $mobs2 = Mob2::where('pic', 'LIKE', "%{$search}%")
                    ->orWhere('moroccan_partner', 'LIKE', "%{$search}%")
                    // Ajoutez d'autres champs ici si nécessaire
                    ->get();

        return view('mobs2.index', compact('mobs2'));
    }
}
