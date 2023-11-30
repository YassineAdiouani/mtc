@extends('admin.dash_master')

@section('title', 'Dashboard')

@section('content')
    <div class="row d-none">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="card card-stats">
                                    <div class="card-header">
                                        <div class="icon icon-warning">
                                           <span class="material-icons">equalizer</span>
                                        </div>
                                    </div>
                                    <div class="card-content">
                                        <p class="category"><strong>Visits</strong></p>
                                        <h3 class="card-title">70,340</h3>
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats">
                                            <i class="material-icons text-info">info</i>
                                            <a href="#pablo">See detailed report</a>
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
                                        <p class="category"><strong>Orders</strong></p>
                                        <h3 class="card-title">102</h3>
                                    </div>
                                    <div class="card-footer">
                                        <div class="stats">
                                            <i class="material-icons">local_offer</i> Product-wise sales
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
                        
                        @if (session('success'))
                            <div class="alert alert-success">
                                {!! session('success') !!}
                            </div>
                        @endif
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
                                                    <th>Mot de passe</th>
                                                    <th>Status</th>
                                                    <th>Operation</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if ($users->count() <= 0)
                                                    <tr>
                                                        <td colspan="9" class="text-center alert-danger">vous n'avez aucun utilisateur à afficher</td>
                                                    </tr>
                                                @else
                                                    @foreach ($users as $key => $one)
                                                        <tr>
                                                            <td>{{ $key + 1 }}</td>
                                                            <td>{{ $one->name }}</td>
                                                            <td>{{ $one->email }}</td>
                                                            <td>{{ $one->password }}</td>
                                                            <td>{{ $one->usertype }}</td>
                                                            <td class="d-flex align-center justify-center">
                                                                <a class="mx-3" href="{{ route('user.edit', $one->id) }}"><i class='bx bxs-message-square-edit'></i></a>
                                                                <form method="POST" action="{{ route('user.destroy', $one->id) }}" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" style="border: none; outline: none; background: transparent; line-height: 1.1;">
                                                                        <i class='bx bx-trash'></i>
                                                                    </button>
                                                                </form>                                                                                                                                
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                        
                                        {{ $users->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
@endsection