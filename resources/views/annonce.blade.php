@extends('master')
@section('contenu')
<link rel="stylesheet" href="/css/annonce.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<div class="carousel-container">
  <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="5000">
    <ol class="carousel-indicators">
      <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExample" data-slide-to="1"></li>
      <li data-target="#carouselExample" data-slide-to="2"></li>
      <li data-target="#carouselExample" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/slider/image4.png" class="d-block w-100" alt="Slider Image 4">
        <div class="carousel-caption">
          <h3>Titre de l'image 4</h3>
          <p>Description de l'image 4</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/slider/image2.jpg" class="d-block w-100" alt="Slider Image 1">
        <div class="carousel-caption">
          <h3>Titre de l'image 1</h3>
          <p>Description de l'image 1</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/slider/image1.jpg" class="d-block w-100" alt="Slider Image 2">
        <div class="carousel-caption">
          <h3>Titre de l'image 2</h3>
          <p>Description de l'image 2</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/slider/image3.jpg" class="d-block w-100" alt="Slider Image 3">
        <div class="carousel-caption">
          <h3>Titre de l'image 3</h3>
          <p>Description de l'image 3</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<!-- end of slider -->
<section id="announcement" class="py-5">
    <div class="container">
      <h2 class="text-center mb-4">Annonces</h2>
      <div class="row">
        <div class="col-md-6">
          <div class="card mb-4">
            <img src="announcement1.jpg" class="card-img-top" alt="Announcement 1">
            <div class="card-body">
              <h5 class="card-title">Nouvelle formation disponible</h5>
              <p class="card-text">Découvrez notre nouvelle formation en développement web avancé.</p>
              <a href="#" class="btn btn-primary">En savoir plus</a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card mb-4">
            <img src="announcement2.jpg" class="card-img-top" alt="Announcement 2">
            <div class="card-body">
              <h5 class="card-title">Programme d'études à l'étranger</h5>
              <p class="card-text">Participez à notre programme d'études à l'étranger et explorez de nouvelles cultures.</p>
              <a href="#" class="btn btn-primary">En savoir plus</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>  

@endsection