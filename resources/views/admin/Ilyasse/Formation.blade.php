@extends('admin.admin')
@section('A-content')
<style>
    .table {
        width: auto;
        border-collapse: collapse;
        margin-bottom: 20px;
        margin-left:5%;
        margin-top:20px;
    }

    .table th, .table td {
        padding: 5px;
        text-align: left;
        border: 1px solid #ccc;
    }

    .table th {
        padding: 15px;
        background-color: #f2f2f2;
        font-weight: bold;
    }

    .table tbody tr:hover {
        background-color: #f9f9f9;
    }
    .tt{
        display:flex;
        justify-content:center;
        margin-top:5px;
    }
</style>

<h3 class="tt">liste des formations</h3>
<a href="{{route('formation.create')}}">ajouter une formation</a>
<table class="table">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Description</th>
            <th>Lien</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($f as $for)
        <tr>
            <td>{{$for->nom}}</td>
            <td>{{$for->description}}</td>
            <td><a href="{{$for->lien}}">{{$for->lien}}</a></td>
            <td>
            <a href="{{ route('formation.edit', $for->id) }}">Modifier</a>|
                <form method="POST" action="{{ route('formation.destroy', $for->id) }}" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-link text-danger" onclick="return confirm('voulez vous supprimer cette formation?')">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$f->links()}}
@endsection