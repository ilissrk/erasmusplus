<?php

namespace App\Http\Controllers;

use App\Models\Mob;
use Illuminate\Http\Request;

class MobController extends Controller
{
    public function index()
    {
        $mobs = Mob::all();
        return view('mobs.index', compact('mobs'));
    }

    public function create()
    {
        return view('mobs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'pic' => 'required|string|max:255',
            'moroccan_partner' => 'required|string|max:255',
            // ajoutez les autres validations ici
        ]);

        Mob::create($request->all());
        return redirect()->route('mobs.index')->with('success', 'Mob created successfully.');
    }

    public function show(Mob $mob)
    {
        return view('mobs.show', compact('mob'));
    }

    public function edit(Mob $mob)
    {
        return view('mobs.edit', compact('mob'));
    }

    public function update(Request $request, Mob $mob)
    {
        $request->validate([
            'pic' => 'required|string|max:255',
            'moroccan_partner' => 'required|string|max:255',
            // ajoutez les autres validations ici
        ]);

        $mob->update($request->all());
        return redirect()->route('mobs.index')->with('success', 'Mob updated successfully.');
    }

    public function destroy(Mob $mob)
    {
        $mob->delete();
        return redirect()->route('mobs.index')->with('success', 'Mob deleted successfully.');
    }
    public function search(Request $request)
    {
        $search = $request->input('search');
        
        // Rechercher dans les champs pertinents
        $mobs = Mob::where('pic', 'LIKE', "%{$search}%")
                    ->orWhere('moroccan_partner', 'LIKE', "%{$search}%")
                    // Ajoutez d'autres champs ici si nécessaire
                    ->get();

        return view('mobs.index', compact('mobs'));
    }
}
