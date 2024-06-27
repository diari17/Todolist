<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use Illuminate\Http\Request;

class EquipeController extends Controller
{
    public function index()
    {
        $equipes = Equipe::all();
        return view('equipes.index', compact('equipes'));
    }

    public function create()
    {
        // Logique pour créer une nouvelle équipe
    }

    public function store(Request $request)
    {
        // Logique pour enregistrer une nouvelle équipe
    }

    public function edit($id)
    {
        // Logique pour éditer une équipe existante
    }

    public function update(Request $request, $id)
    {
        // Logique pour mettre à jour une équipe
    }

    public function destroy($id)
    {
        // Logique pour supprimer une équipe
    }
}
