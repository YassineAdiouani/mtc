@extends('admin.dash_master')

@section('title', 'Ajouter Utilisateur')

@section('content')
    <div class="container my-5">
        <h2>Ajouter Utilisateur</h2>
        <form method="POST" action="{{ route('user.store') }}">
            @csrf
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom">
                @error('nom')
                    <div class="form-text text-danger" style="font-size: 14px">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="prenom" class="form-label">Prenom</label>
                <input type="text" class="form-control" id="prenom" name="prenom">
                @error('prenom')
                    <div class="form-text text-danger" style="font-size: 14px">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email">
                @error('email')
                    <div class="form-text text-danger" style="font-size: 14px">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password">
                @error('password')
                    <div class="form-text text-danger" style="font-size: 14px">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Formation</label>
                <select class="form-control" name="Formation" id="Formation">
                    <option value="Formation">Formation1</option>
                    <option value="Formation">Formation2</option>
                    <option value="Formation">Formation3</option>
                </select>
                @error('password')
                    <div class="form-text text-danger" style="font-size: 14px">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
