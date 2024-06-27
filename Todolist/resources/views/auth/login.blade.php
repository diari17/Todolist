<!-- resources/views/auth/login.blade.php -->

<form method="POST" action="{{ route('login') }}">
    @csrf

    <div>
        <label for="Email">Adresse email</label>
        <input id="Email" type="email" name="Email" value="{{ old('Email') }}" required autofocus>
        @error('email')
        <span>{{ $message }}</span>
        @enderror
    </div>

    <div>
        <label for="Mot_de_passe">Mot de passe</label>
        <input id="Mot_de_passe" type="password" name="Mot_de_passe" required autocomplete="current-password">
        @error('password')
        <span>{{ $message }}</span>
        @enderror
    </div>

    <div>
        <input type="checkbox" name="remember" id="remember">
        <label for="remember">Se souvenir de moi</label>
    </div>

    <button type="submit">Se connecter</button>
</form>