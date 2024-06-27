<!-- resources/views/auth/register.blade.php -->

<form method="POST" action="{{ route('register') }}">
    @csrf

    <div>
        <label for="NomUser">Nom</label>
        <input id="NomUser" type="text" name="NomUser" value="{{ old('nom') }}" required autofocus>
        @error('NomUser')
        <span>{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label for="Prenom">Prénom</label>
        <input id="Prenom" type="text" name="Prenom" value="{{ old('prenom') }}" required autofocus>
        @error('Prenom')
        <span>{{ $message }}</span>
        @enderror
    </div>

    <!-- <div>
        <label for="departement">Département</label>
        <input id="departement" type="text" name="departement" value="{{ old('departement') }}" required>
        @error('departement')
        <span>{{ $message }}</span>
        @enderror
    </div> -->

    <div>
        <label for="Email">Adresse Email</label>
        <input id="Email" type="email" name="Email" value="{{ old('email') }}" required>
        @error('Email')
        <span>{{ $message }}</span>
        @enderror
    </div>

    <!-- <div>
        <label for="telephone">Téléphone</label>
        <input id="telephone" type="text" name="telephone" value="{{ old('telephone') }}" required>
        @error('telephone')
        <span>{{ $message }}</span>
        @enderror
    </div> -->

    <!-- <div>
        <label for="adresse">Adresse</label>
        <input id="adresse" type="text" name="adresse" value="{{ old('adresse') }}" required>
        @error('adresse')
        <span>{{ $message }}</span>
        @enderror
    </div> -->

    <div>
        <label for="Mot_de_passe">Mot de passe</label>
        <input id="Mot_de_passe" type="password" name="Mot_de_passe" required autocomplete="new-password">
        @error('Mot_de_passe')
        <span>{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label for="Mot_de_passe_confirmation">Confirmer le mot de passe</label>
        <input id="Mot_de_passe_confirmation" type="password" name="Mot_de_passe_confirmation" required>
    </div>

    <div>
        <label for="IDRole">Rôle</label>
        <!-- <input type="number" id="IDRole" name="IDRole" required> -->
        <select name="Role" id="Role" required>
            <option value="Membre equipe">Membre equipe</option>
            <option value="Chef equipe">Chef equipe</option>
            <option value="Coordonnateur">Coordonnateur</option>
            <option value="Chef projet">Chef projet</option>
        </select>
    </div>

    <button type="submit">S'inscrire</button>
</form>