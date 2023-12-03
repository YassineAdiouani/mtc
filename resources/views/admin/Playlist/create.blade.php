@extends('admin.dash_master')

@section('title', 'Ajouter Formation')

@section('content')
    <div class="container my-5">
        <h2>Ajouter Playlist</h2>
        <form method="POST" action="{{ route('playlist.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titre</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                @error('title')
                    <div class="form-text text-danger" style="font-size: 14px">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea style="resize: none" class="form-control" name="description" id="description" cols="30" rows="10">{{ old('description') }}</textarea>
                @error('description')
                    <div class="form-text text-danger" style="font-size: 14px">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="formation_id" class="form-label">formation</label>
                <select class="form-control" id="formation_id" name="formation_id">
                    <option hidden>--Choisir votre formation--</option>
                    @foreach ($formations as $form)
                        <option value="{{ $form->id }}">{{ $form->nom }}</option>
                    @endforeach
                </select>
                @error('formation_id')
                    <div class="form-text text-danger" style="font-size: 14px">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="lien" class="form-label">Video</label>
                <input type="file" accept="video/*" class="form-control" id="lien" name="lien" value="{{ old('lien') }}">
                @error('lien')
                    <div class="form-text text-danger" style="font-size: 14px">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
