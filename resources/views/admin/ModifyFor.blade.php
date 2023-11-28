@extends('admin.admin')
@section('A-content')
<form method="POST" action="{{ route('formation.update', $f->id) }}">
  @csrf
  @method('put')

  <div class="form-group">
    <label for="image">Chemin d'image:</label>
    <input type="text" name="image" id="image" class="form-control" value="{{ $f->image }}" required>
  </div>
  
  <div class="form-group">
    <label for="nom">Nom:</label>
    <input type="text" name="nom" id="nom" class="form-control" value="{{ $f->nom }}" required>
  </div>

  <div class="form-group">
    <label for="description">Description:</label>
    <textarea name="description" id="description" class="form-control" required>{{ $f->description }}</textarea>
  </div>

  <div class="form-group">
    <label for="lien">Lien:</label>
    <input type="text" name="lien" id="lien" class="form-control" value="{{ $f->lien }}" required>
  </div>

  <button type="submit" class="btn btn-primary">Modifier</button>
  <a href="{{ route('formation.index') }}" class="btn btn-primary">Annuler</a>
</form>
@endsection