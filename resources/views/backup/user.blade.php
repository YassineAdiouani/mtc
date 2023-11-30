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
            <th>email</th>
            <th>Lien</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($u as $us)
        <tr>
            <td>{{$us->nom}}</td>
            <td>{{$us->email}}</td>
            <td><a href="{{$us->lien}}">{{$us->lien}}</a></td>
            <td>
            <a href="{{ route('user.edit', $for->id) }}">Modifier</a>|
                <form method="POST" action="{{ route('user.destroy', $us->id) }}" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-link text-danger" onclick="return confirm('voulez vous supprimer cet utilisateur?')">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$u->links()}}
@endsection