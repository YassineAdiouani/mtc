@extends('admin.admin')
@section('A-content')
<div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">
                <span data-feather="home"></span>
                Tableau de bord <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="users"></span>
                Utilisateurs
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="settings"></span>
                Paramètres
              </a>
            </li>
          </ul>
        </div>
      </nav>
  
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Tableau de bord</h1>
        </div>
  
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Utilisateurs</h5>
                <p class="card-text">Gérez les utilisateurs de votre application.</p>
                <a href="#" class="btn btn-primary">Accéder</a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Paramètres</h5>
                <p class="card-text">Personnalisez les paramètres de votre application.</p>
                <a href="#" class="btn btn-primary">Accéder</a>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>

@endsection