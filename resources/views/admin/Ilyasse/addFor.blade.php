@extends('admin.admin')
@section('A-content')
<form method="POST" action="{{ route('formation.store') }}">
  @csrf
  <div class="form-group">
    <label for="image">chemin d'image:</label>
    <input type="text" name="image" id="image" class="form-control" required>
  </div>
  <div class="form-group">
    <label for="nom">Nom:</label>
    <input type="text" name="nom" id="nom" class="form-control" required>
  </div>

  <div class="form-group">
    <label for="description">Description:</label>
    <textarea name="description" id="description" class="form-control" required></textarea>
  </div>

  <div class="form-group">
    <label for="lien">Lien:</label>
    <input type="text" name="lien" id="lien" class="form-control" required>
  </div>

  <button type="submit" class="btn btn-primary">Ajouter</button>
  <a href="{{route('formation.index')}}" class="btn btn-primary">annuler</a>
</form>
@endsection