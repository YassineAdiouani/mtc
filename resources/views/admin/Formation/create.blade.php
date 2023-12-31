@extends('admin.dash_master')

@section('title', 'Ajouter Formation')

@section('content')
    <div class="container my-5">
        <h2>Ajouter Formation</h2>
        <form method="POST" action="{{ route('formation.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nom" class="form-label">Titre</label>
                <input type="text" class="form-control" id="nom" name="nom" value="{{ old('nom') }}">
                @error('nom')
                    <div class="form-text text-danger" style="font-size: 14px">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="Necessites" class="form-label">Nécessités (niveau)</label>
                <textarea style="resize: none" class="form-control" name="Necessites" id="Necessites" cols="15" rows="5">{{ old('Necessites') }}</textarea>
                @error('Necessites')
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
                <label for="duree" class="form-label">Durée (heurs)</label>
                <input type="number" min="0" max="10" class="form-control" id="duree" name="duree" value="{{ old('duree') }}">
                @error('duree')
                    <div class="form-text text-danger" style="font-size: 14px">{{ $message }}</div>
                @enderror
            </div>

            
            <div class="mb-3">
                <label for="price" class="form-label">price (dh)</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ old('price') }}">
                @error('price')
                    <div class="form-text text-danger" style="font-size: 14px">{{ $message }}</div>
                @enderror
            </div>

            
            <div class="mb-3">
                <label for="trailer" class="form-label">Trailer Video</label>
                <input type="file" class="form-control" id="trailer" name="trailer" value="{{ old('trailer') }}">
                @error('trailer')
                    <div class="form-text text-danger" style="font-size: 14px">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" accept="image/*" class="form-control" id="image" name="image" onchange="previewImage()">
                <div class="mt-2 border-2 border-dark" id="image-preview"></div>
                @error('image')
                    <div class="form-text text-danger" style="font-size: 14px">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script>
        function previewImage() {
            var input = document.getElementById('image');
            var preview = document.getElementById('image-preview');

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    preview.innerHTML = '<img src="' + e.target.result + '" class="img-thumbnail" width="200px" alt="Image Preview">';
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                preview.innerHTML = '';
            }
        }
    </script>
@endsection
