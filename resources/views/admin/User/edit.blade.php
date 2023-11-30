@extends('admin.dash_master')

@section('title', 'Modifier Utilisateur')

@section('content')
    <div class="container my-5">
        <h2>Modifier Utilisateur</h2>
        <form method="POST" action="{{ route('user.update', ['user' => $user->id]) }}">
            @csrf
            @method('PUT') <!-- Assuming you're using the PUT method for updates -->

            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" value="{{ old('nom', explode(' ', $user->name)[0]) }}">
                @error('nom')
                    <div class="form-text text-danger" style="font-size: 14px">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="prenom" class="form-label">Prenom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" value="{{ old('prenom', explode(' ', $user->name)[1]) }}">
                @error('prenom')
                    <div class="form-text text-danger" style="font-size: 14px">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}">
                @error('email')
                    <div class="form-text text-danger" style="font-size: 14px">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password" value="{{ old('password', $user->password) }}">
                @error('password')
                    <div class="form-text text-danger" style="font-size: 14px">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
@endsection
