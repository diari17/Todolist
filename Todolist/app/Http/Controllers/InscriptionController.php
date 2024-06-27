<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class InscriptionController extends Controller
{
    //
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function traiterInscription(Request $request)
    {
        // Valider les données du formulaire
        $validated = $request->validate([
            'NomUser' => 'required|string|max:255',
            'Prenom' => 'required|string|max:255',
            'Email' => 'required|string|email|max:255|unique:users',
            // 'telephone' => 'required|string|max:15',
            // 'adresse' => 'required|string|max:255',
            'Mot_de_passe' => 'required|string|min:8|confirmed',
            'IDRole' => 'required|integer|exists:roles,id',
        ]);

        // Créer un nouvel utilisateur et enregistrer dans la base de données
        $user = User::create([
            // 'name' => $request->input('prenom') . ' ' . $request->input('nom'),
            'NomUser' => $request->input('NomUser'),
            'Prenom' => $request->input('Prenom'),
            // 'departement' => $request->departement,
            'Email' => $request->input('Email'),
            // 'telephone' => $request->telephone,
            // 'adresse' => $request->adresse,
            'Mot_de_passe' => Hash::make($request->input('Mot_de_passe')),
            'IDRole' => $request->input('IDRole'),
        ]);

        // Rediriger vers la page de connexion avec un message de succès
        return redirect()->route('connexion')->with('success', 'Inscription réussie. Veuillez vous connecter.');
    }
}
