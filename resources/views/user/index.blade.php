@extends('master')
@section('contenu')
<div class="row mb-4 mt-3">
  <div class="col-lg-10 mx-auto ">
      <h2 class="fs-1">Tous les Formations.</h2>
      <p class="mb-0">Explorez des formations transformantes adaptées pour améliorer vos compétences et votre carrière.</p>
  </div>
</div>

<div class="row d-flex align-center justify-centent-center w-100" style="justify-content: center">
  @if(!empty($formations))
    @foreach($formations as $for)
        <div class="col-sm-6 col-lg-4 col-xl-3 m-4">
            <div class="card shadow h-100">
                <!-- Image -->
                <img width="90px" src="{{ $for->image }}" class="card-img-top" alt="course image">
                <!-- Card body -->
                <div class="card-body pb-0">
                    <!-- Badge and favorite -->
                    <div class="d-flex justify-content-between mb-2">
                        <a href="" class="badge bg-purple bg-opacity-10 text-dark" style="text-decoration: none;color:#8f6dcf; background: #f0ecf9">All level</a>
                        <a href="" class="h6 mb-0"><i class='bx bxs-heart' ></i></a>
                    </div>
                    <!-- Title -->
                    <h5 class="card-title fw-normal text-danger"><a href="#" style="color: #000; text-decoration: none">{{$for->nom}}</a></h5>
                    <p class="mb-2 text-truncate-2" style="    color: #414141;
                    display: -webkit-box;
                    -webkit-line-clamp: 2;
                    -webkit-box-orient: vertical;
                    overflow: hidden;
                    height: 3.4em;
                    white-space: normal;">{{$for->description}}</p>
                </div>
                <!-- Card footer -->
                <div class="card-footer pt-4 pb-3" style="background: #fff">
                    <div class="d-flex justify-content-between">
                        <span class="h6 fw-normal mb-0 text-primary"><i class='bx bxs-time'></i>12h 56m</span>
                        {{-- <span class="h6 fw-normal mb-0 text-primary"><i class='bx bxs-spreadsheet'></i>15 lectures</span> --}}
                        <a href="{{ route('formation.for', $for->id) }}" style="background: #064789; border: none" class="btn btn-primary">Info</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
  @else
      <div class="container" style="display: flex; justify-content: space-around">
          <div class="alert alert-danger text-center w-50">
              Aucun cours disponible pour l'instant.
          </div>
      </div>
  @endif
</div>
<div class="container mt-3 w-100">
  {{ $formations->links() }}
</div>
@endsection