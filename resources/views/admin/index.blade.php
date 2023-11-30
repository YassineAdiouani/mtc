@extends('admin.dash_master')

@section('title', 'Dashboard')

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
                    <h3 class="card-title">{{ $users }}</h3>
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
                    <h3 class="card-title">{{ $formations }}</h3>
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
    
    
    <div class="row ">
        <div class="col-lg-12 col-md-12">
            <div class="card" style="min-height: 485px">
                <div class="card-header card-header-text">
                    <h4 class="card-title">Statistiques et promotions des utilisateurs</h4>
                    <p class="category">De là, vous pouvez modifier la validité de chaque utilisateur</p>
                </div>
                <div class="card-content table-responsive">
                    <table class="table table-hover">
                        <thead class="text-primary">
                            <tr>
                                <th>#</th>
                                <th>Nom & Prenom</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @if ($users->count() <= 0)
                                <tr>
                                    <td colspan="9" class="text-center alert-danger">vous n'avez aucun utilisateur à afficher</td>
                                </tr>
                            @else --}}
                                {{-- @foreach ($users as $key => $one) --}}
                                    {{-- <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $one->name }}</td>
                                        <td>{{ $one->email }}</td>
                                        <td>{{ $one->usertype }}</td>
                                        <td class="d-flex align-center justify-center">
                                            <a class="mx-3" href="#"><i class='bx bxs-message-square-edit'></i></a>
                                            <a href="#"><i class='bx bx-trash'></i></a>
                                        </td>
                                    </tr> --}}
                                {{-- @endforeach
                            @endif --}}
                        </tbody>
                    </table>
                    {{-- {{ $users->links() }}  --}}
                </div>
            </div>
        </div>
    </div>
@endsection