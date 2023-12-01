@extends('user.user_master')
@section('content')
    <style>
        /* Custom CSS for the page */
        

        .video-container {
            max-width: 700px;
        }

        .playlist-container {
            max-height: 300px;
            overflow-y: auto;
        }
        .playlist-container ul li{
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
        }
        .row{
            justify-content: center;
        }
        .description{
            max-height: 400px;
            max-width: 700px;
        }
        .list-group-item {
            cursor: pointer;
            transition: all .2s ease; 
        }
        .list-group-item:hover {
            background: #dacfcf;
            color: #444;
        }
        /* .Locked::before {
            position: absolute;
            content: '';
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.527);
        } */
    </style>


<div class="container-fluid show_formation">
    <!-- Header -->
    <div class="row mb-4">
        <div class="col-md-12 text-center">
            <h1>Vos formations</h1>
        </div>
    </div>

    <div class="row">
        <!-- Video Section (Centered) -->
        <div class="col-md-8 video-container">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Gl4tnKLiboI" allowfullscreen></iframe>
            </div>
            <h3 class="mt-3">Main Video Title</h3>
            <hr>
            <h2 class="mt-3">Description de la formation</h3>
            <p class="description">What is Lorem Ipsum?
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                 when an unknown printer took a galley of type and scrambled it to make a 
                 type specimen book. It has survived not only five centuries, but also the 
                 leap into electronic typesetting, remaining essentially unchanged. 
                 It was popularised in the 1960s with the release of Letraset sheets containing 
                 Lorem Ipsum passages, and more recently with desktop publishing software like Aldus 
                 PageMaker including versions of Lorem Ipsum
                 What is Lorem Ipsum?
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                 when an unknown printer took a galley of type and scrambled it to make a 
                 type specimen book. It has survived not only five centuries, but also the 
                 leap into electronic typesetting, remaining essentially unchanged. 
                 It was popularised in the 1960s with the release of Letraset sheets containing 
                 Lorem Ipsum passages, and more recently with desktop publishing software like Aldus 
                 PageMaker including versions of Lorem Ipsum.
                 What is Lorem Ipsum?
                 Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                 Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                  when an unknown printer took a galley of type and scrambled it to make a 
                  type specimen book. It has survived not only five centuries, but also the 
                  leap into electronic typesetting, remaining essentially unchanged. 
                  It was popularised in the 1960s with the release of Letraset sheets containing 
                  Lorem Ipsum passages, and more recently with desktop publishing software like Aldus 
                  PageMaker including versions of Lorem Ipsum
                  What is Lorem Ipsum?
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                  Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                   when an unknown printer took a galley of type and scrambled it to make a 
                   type specimen book. It has survived not only five centuries, but also the 
                   leap into electronic typesetting, remaining essentially unchanged. 
                   It was popularised in the 1960s with the release of Letraset sheets containing 
                   Lorem Ipsum passages, and more recently with desktop publishing software like Aldus 
                   PageMaker including versions of Lorem Ipsum
                   What is Lorem Ipsum?
                   Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                   Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a 
                    type specimen book. It has survived not only five centuries, but also the 
                    leap into electronic typesetting, remaining essentially unchanged. 
                    It was popularised in the 1960s with the release of Letraset sheets containing 
                    Lorem Ipsum passages, and more recently with desktop publishing software like Aldus 
                    PageMaker including versions of Lorem Ipsum</p>
        </div>

        <!-- Playlist Section (Centered, Scrollable, Sticky-top) -->
        <div class="col-md-4 w-100">
            @auth
                <div>
                    <h3>Trailer</h3>
                    <div class="playlist-container my-3">
                        <ul class="list-group">
                            <!-- Sample Playlist Items -->
                            <li class="list-group-item fw-bold">trailer title</li>
                            <!-- Add more playlist items as needed -->
                        </ul>
                    </div>
                </div>
                    <div class="sticky-top Locked">
                        <h3>Playlist</h3>
                        <div class="playlist-container">
                            <ul class="list-group" >
                                <!-- Sample Playlist Items -->
                                <li class="list-group-item">
                                    @if(auth()->user()->statutp != 0 || auth()->user()->usertype == "admin")
                                        <i class='bx bxs-lock-alt'></i>                   
                                    @endif
                                Video 1: Title</li>
                                <li class="list-group-item"><i class='bx bxs-lock-alt'></i> Video 2: Title</li>
                                <li class="list-group-item"><i class='bx bxs-lock-alt'></i> Video 3: Title</li>
                                <li class="list-group-item"><i class='bx bxs-lock-alt'></i> Video 4: Title</li>
                                <li class="list-group-item"><i class='bx bxs-lock-alt'></i> Video 5: Title</li>
                                <li class="list-group-item"><i class='bx bxs-lock-alt'></i> Video 6: Title</li>
                                <li class="list-group-item"><i class='bx bxs-lock-alt'></i> Video 7: Title</li>
                                <li class="list-group-item"><i class='bx bxs-lock-alt'></i> Video 8: Title</li>
                                <li class="list-group-item"><i class='bx bxs-lock-alt'></i> Video 9: Title</li>
                                <li class="list-group-item"><i class='bx bxs-lock-alt'></i> Video 10: Title</li>
                                <li class="list-group-item"><i class='bx bxs-lock-alt'></i> Video 11: Title</li>
                                <li class="list-group-item"><i class='bx bxs-lock-alt'></i> Video 12: Title</li>
                                <!-- Add more playlist items as needed -->
                            </ul>
                        </div>
                    </div>
            @endauth
        </div>
    </div>
</div>

<!-- Bootstrap JS and Popper.js (required for Bootstrap components) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


@endsection