<?php

namespace App\Http\Controllers;

use App\Models\Tache;
use App\Models\Projet;
use Illuminate\Http\Request;

class TacheController extends Controller
{
    public function index()
    {
        $taches = Tache::all();
        return view('taches.index', compact('taches'));
    }

    public function create()
    {
        $projets = Projet::all();
        return view('taches.create', compact('projets'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'nullable|string',
            'due_date' => 'nullable|date',
            'IDProjet' => 'required|exists:projets,IDProjet',
        ]);

        Tache::create($validated);

        return redirect()->route('taches.index')->with('success', 'Tâche ajoutée avec succès.');
    }

    public function edit($id)
    {
        $tache = Tache::findOrFail($id);
        $projets = Projet::all();
        return view('taches.edit', compact('tache', 'projets'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'nullable|string',
            'due_date' => 'nullable|date',
            'IDProjet' => 'required|exists:projets,IDProjet',
        ]);

        $tache = Tache::findOrFail($id);
        $tache->update($validated);

        return redirect()->route('taches.index')->with('success', 'Tâche mise à jour avec succès.');
    }

    public function destroy($id)
    {
        $tache = Tache::findOrFail($id);
        $tache->delete();

        return redirect()->route('taches.index')->with('success', 'Tâche supprimée avec succès.');
    }
}
