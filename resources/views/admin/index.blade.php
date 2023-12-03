@extends('admin.dash_master')

@section('title', 'Dashboard')

@section('style')
    <style>
        .link_href {
            color: #054789;
        }
        .link_href.second {
            color: #FF9800;
        }
        .link_href:hover {
            text-decoration: underline;
        }
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header">
                    <div class="icon icon-warning">
                        <span class="material-icons">equalizer</span>
                    </div>
                </div>
                <div class="card-content">
                    <p class="category"><strong>Utilisateur</strong></p>
                    <h3 class="card-title">{{ $users->count() }}</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons text-info">info</i>
                        <a href="#pablo">Total des utilisateurs </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header">
                    <div class="icon icon-rose">
                        <span class="material-icons">shopping_cart</span>

                    </div>
                </div>
                <div class="card-content">
                    <p class="category"><strong>Formations</strong></p>
                    <h3 class="card-title">{{ $formations->count() }}</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons">local_offer</i>  Total Des Formation
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header">
                    <div class="icon icon-success">
                        <span class="material-icons">
                            attach_money
                        </span>
                    </div>
                </div>
                <div class="card-content">
                    <p class="category"><strong>Revenue</strong></p>
                    <h3 class="card-title">$23,100</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons">date_range</i> Weekly sales
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header">
                    <div class="icon icon-info">
                    
<span class="material-icons">
follow_the_signs
</span>
                    </div>
                </div>
                <div class="card-content">
                    <p class="category"><strong>Followers</strong></p>
                    <h3 class="card-title">+245</h3>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons">update</i> Just Updated
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="card" style="min-height: 485px">
                <div class="card-header card-header-text">
                    <div class="d-flex" style="justify-content: space-between">
                        <h4 class="card-title">5 Formation récents ajoutés.</h4>
                        <a href="{{ route('formation.create') }}" class="btn text-light" style="background: #FF9800">+ Formation</a>
                    </div>
                    <p class="category">pour voir tous les Formation avec des informations, <a class="link_href second" href="{{ route('formation.index') }}">cliquez ici</a></p>
                </div>
                <div class="card-content table-responsive">
                    <table class="table table-hover">
                        <thead class="text-primary">
                            <tr>
                                <th style="color: #FF9800;font-weight: bold">#</th>
                                <th style="color: #FF9800;font-weight: bold">Nom</th>
                                <th style="color: #FF9800;font-weight: bold">description</th>
                                <th style="color: #FF9800;font-weight: bold">playlist</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($formations->count() <= 0)
                                <tr>
                                    <td colspan="9" class="text-center alert-danger">vous n'avez aucun Formation à afficher</td>
                                </tr>
                            @else
                                @foreach ($formations as $key => $one)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td class="For_maxWidth">{{ $one->nom }}</td>
                                        <td class="For_maxWidth">{{ $one->description }}</td>
                                        <td>{{ $one->playlists->count() }}</td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="card" style="min-height: 485px">
                <div class="card-header card-header-text">
                    <div class="d-flex" style="justify-content: space-between">
                        <h4 class="card-title">5 Utilisateurs récents ajoutés.</h4>
                        <a href="{{ route('user.create') }}" class="btn text-light" style="background: #054789">+ Utilisateur</a>
                    </div>
                    <p class="category">pour voir tous les utilisateurs avec des informations, <a class="link_href" href="{{ route('user.index') }}">cliquez ici</a></p>
                </div>
                <div class="card-content table-responsive">
                    <table class="table table-hover">
                        <thead class="text-primary">
                            <tr>
                                <th style="color: #054789;font-weight: bold">#</th>
                                <th style="color: #054789;font-weight: bold">Prenom</th>
                                <th style="color: #054789;font-weight: bold">Email</th>
                                <th style="color: #054789;font-weight: bold">password</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($users->count() <= 0)
                                <tr>
                                    <td colspan="9" class="text-center alert-danger">vous n'avez aucun utilisateur à afficher</td>
                                </tr>
                            @else
                                @foreach ($users as $key => $one)
                                    @if ($key < 6)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $one->name }}</td>
                                            <td>{{ $one->email }}</td>
                                            <td>{{ $one->password }}</td>
                                        </tr>
                                    @else
                                        @break
                                    @endif
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection