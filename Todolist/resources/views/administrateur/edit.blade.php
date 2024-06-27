@extends('layouts.app')

@section('content')
<h1>Modifier la Tâche</h1>
<form action="{{ route('taches.update', $tache->IDTache) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label>Titre</label>
        <input type="text" name="titre" value="{{ $tache->titre }}" required>
    </div>
    <div>
        <label>Description</label>
        <textarea name="description">{{ $tache->description }}</textarea>
    </div>
    <div>
        <label>Date Limite</label>
        <input type="date" name="due_date" value="{{ $tache->due_date }}">
    </div>
    <div>
        <label>Projet</label>
        <select name="IDProjet" required>
            @foreach ($projets as $projet)
            <option value="{{ $projet->IDProjet }}" {{ $projet->IDProjet == $tache->IDProjet ? 'selected' : '' }}>{{ $projet->NomProjet }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit">Modifier</button>
</form>
@endsection

<!-- resources/views/admin/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">Modifier l'administrateur</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.update', $admin->id) }}">
                        @csrf
                        @method('PUT')

                        <!-- Nom -->
                        <div class="form-group">
                            <label for="NomUser">Nom</label>
                            <input type="text" name="NomUser" id="NomUser" class="form-control @error('NomUser') is-invalid @enderror" value="{{ old('NomUser', $admin->user->NomUser) }}" required>
                            @error('NomUser')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <!-- Prénom -->
                        <div class="form-group">
                            <label for="Prenom">Prénom</label>
                            <input type="text" name="Prenom" id="Prenom" class="form-control @error('Prenom') is-invalid @enderror" value="{{ old('Prenom', $admin->user->Prenom) }}" required>
                            @error('Prenom')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="email" name="Email" id="Email" class="form-control @error('Email') is-invalid @enderror" value="{{ old('Email', $admin->user->Email) }}" required>
                            @error('Email')
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
                                <option value="membre" {{ old('Role', $admin->Role) == 'membre' ? 'selected' : '' }}>Membre</option>
                                <option value="chef_equipe" {{ old('Role', $admin->Role) == 'chef_equipe' ? 'selected' : '' }}>Chef d'équipe</option>
                                <option value="coordonnateur" {{ old('Role', $admin->Role) == 'coordonnateur' ? 'selected' : '' }}>Coordinateur</option>
                                <option value="chef_projet" {{ old('Role', $admin->Role) == 'chef_projet' ? 'selected' : '' }}>Chef de projet</option>
                            </select>
                            @error('Role')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <!-- Bouton de soumission -->
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection