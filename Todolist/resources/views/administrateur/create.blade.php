<!-- @extends('layouts.app')

@section('content')
<h1>Ajouter une Tâche</h1>
<form action="{{ route('taches.store') }}" method="POST">
    @csrf
    <div>
        <label>Titre</label>
        <input type="text" name="titre" required>
    </div>
    <div>
        <label>Description</label>
        <textarea name="description"></textarea>
    </div>
    <div>
        <label>Date Limite</label>
        <input type="date" name="due_date">
    </div>
    <div>
        <label>Projet</label>
        <select name="IDProjet" required>
            @foreach ($projets as $projet)
            <option value="{{ $projet->IDProjet }}">{{ $projet->NomProjet }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit">Ajouter</button>
</form>
@endsection

 -->

<!-- resources/views/admin/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">Ajouter un administrateur</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.store') }}">
                        @csrf

                        <!-- Nom -->
                        <div class="form-group">
                            <label for="NomUser">Nom</label>
                            <input type="text" name="NomUser" id="NomUser" class="form-control @error('NomUser') is-invalid @enderror" value="{{ old('NomUser') }}" required>
                            @error('NomUser')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <!-- Prénom -->
                        <div class="form-group">
                            <label for="Prenom">Prénom</label>
                            <input type="text" name="Prenom" id="Prenom" class="form-control @error('Prenom') is-invalid @enderror" value="{{ old('Prenom') }}" required>
                            @error('Prenom')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="email" name="Email" id="Email" class="form-control @error('Email') is-invalid @enderror" value="{{ old('Email') }}" required>
                            @error('Email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <!-- Mot de passe -->
                        <div class="form-group">
                            <label for="Mot_de_passe">Mot de passe</label>
                            <input type="password" name="Mot_de_passe" id="Mot_de_passe" class="form-control @error('Mot_de_passe') is-invalid @enderror" required>
                            @error('Mot_de_passe')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <!-- Rôle -->
                        <div class="form-group">
                            <label for="Role">Rôle</label>
                            <select name="Role" id="Role" class="form-control @error('Role') is-invalid @enderror" required>
                                <option value="">Sélectionner un rôle</option>
                                <option value="membre" {{ old('Role') == 'membre' ? 'selected' : '' }}>Membre</option>
                                <option value="chef_equipe" {{ old('Role') == 'chef_equipe' ? 'selected' : '' }}>Chef d'équipe</option>
                                <option value="coordonnateur" {{ old('Role') == 'coordonnateur' ? 'selected' : '' }}>Coordinateur</option>
                                <option value="chef_projet" {{ old('Role') == 'chef_projet' ? 'selected' : '' }}>Chef de projet</option>
                            </select>
                            @error('Role')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <!-- Bouton de soumission -->
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection