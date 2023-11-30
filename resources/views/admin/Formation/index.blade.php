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
                                                    <th><b>#</b></th>
                                                    <th><b>Image</b></th>
                                                    <th><b>Titre</b></th>
                                                    <th><b>Discription</b></th>
                                                    <th><b>Duree</b></th>
                                                    <th><b>Date de Creation</b></th>
                                                    <th><b>Operation</b></th>
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
                                                            <td><b>{{ $key + 1 }}</b></td>
                                                            <td><a href="{{ $one->image }}"><img src="{{ $one->image }}" width="50px" alt=""></a></td>
                                                            <td>{{ $one->nom }}</td>
                                                            <td class="For_maxWidth">{{ $one->description }}</td>
                                                            <td>{{ $one->lien }}h</td>
                                                            <td>{{ $one->created_at->format('Y/m/d') }}</td>
                                                            <td class="d-flex align-center justify-center">
                                                                <a title="View" href="#"><i class='bx bx-play-circle'></i></a>
                                                                <a title="Edit" class="mx-3" href="{{ route('formation.edit', $one->id) }}"><i class='bx bxs-message-square-edit'></i></a>
                                                                <form method="POST" action="{{ route('formation.destroy', $one->id) }}" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')">
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
                                        
                                        {{ $formations->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
@endsection