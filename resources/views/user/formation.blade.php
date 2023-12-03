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

        .playlist-container ul li {
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
        }

        .row {
            justify-content: center;
        }

        .description {
            max-width: 700px;
        }

        .description-full {
            display: none;
        }

        .list-group-item {
            cursor: pointer;
            transition: all .2s ease;
        }

        .list-group-item:hover {
            background: #dacfcf;
            color: #444;
        }

        .warningmessage {
            color: red;
        }
    </style>

    <div class="container-fluid show_formation p-4">
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
                    <iframe class="embed-responsive-item" 
                        src="{{ $video ? $video->lien : $form->trailer }}"
                        allowfullscreen>
                    </iframe>
                </div>
                <div class="d-flex" style="justify-content: space-between; align-items: center">
                    <h3 class="mt-3">{{ $video ? $video->title : $form->nom }}</h3>   
                    <span class="text" style="font-size: 13px !important">après avoir terminé la formation, vous obtiendrez un certificat <img width="20px" src="{{ asset('assets/imgs/cert.png') }}" alt=""></span>  
                </div>
                <hr>
                <h2 class="mt-3">Description:</h2>
                <p class="description">
                    <!-- Display a shortened version of the description -->
                    {{ substr($video ? $video->description : $form->description, 0, 400) }}
                    <!-- Hidden full description -->
                    <span class="description-full">{{ $video ? $video->description : $form->description }}</span>
                    <!-- Read more button -->
                    <button class="btn btn-link read-more-btn" style="color: #064789 !important" onclick="toggleDescription()">Read More</button>
                </p>
            </div>

            <!-- Playlist Section (Centered, Scrollable, Sticky-top) -->
            <div class="col-md-4 w-100">
                @auth
                    <div>
                        <h3>Trailer</h3>
                        <div class="playlist-container my-3">
                            <ul class="list-group">
                                <!-- Sample Playlist Items -->
                                <a href="{{ route('formation.for', $form->id) }}" style="color: #064789; text-decoration: none">
                                    <li class="list-group-item fw-bold">
                                        <i class='bx bx-caret-right'></i>
                                        trailer title
                                    </li>
                                    <!-- Add more playlist items as needed -->
                                </a>
                            </ul>
                        </div>
                    </div>
                    <div class="sticky-top Locked">
                        <h3>Playlist</h3>
                        <div class="playlist-container">
                            <ul class="list-group">
                                <span class="text text-danger fw-bold my-2 {{ auth()->user()->statutp === '0' ? "warningmessage" : '' }}"></span>
                                <!-- Sample Playlist Items -->
                                <?php  
                                    $pay = auth()->user()->statutp === '0' && auth()->user()->usertype === 'user'
                                ?>
                                @foreach ($form->playlists as $video)
                                @if($pay)
                                <a style="color: red;text-decoration: none">
                                    @else
                                    <a href="/for/{{ $form->id }}?vid={{ $video->id }}" style="color: #064789; text-decoration: none">
                                @endif
                                        <li class="list-group-item" onclick="showWarningMessage()">
                                            @if($pay)
                                                    <i class='bx bxs-lock-alt'></i>
                                            @endif
                                            {{ $video->title }}
                                        </li>
                                    </a>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @if($pay)
                        <button class="btn btn-primary w-100 text-light my-5" style="background: #064789;border: none;text-transform: uppercase;">
                            Obtenez cette formation
                        </button>
                    @endif
                @endauth
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js (required for Bootstrap components) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script>
        function toggleDescription() {
            // Toggle visibility of the full description
            var descriptionFull = $('.description-full');
            descriptionFull.toggle();

            // Toggle button text
            var buttonText = $('.read-more-btn');
            buttonText.text(descriptionFull.is(':visible') ? 'Read Less' : 'Read More');
        }

        function showWarningMessage() {
            // Show the warning message
            $('.warningmessage').html('<i class="bx bxs-info-circle"></i> Contact us to get this formation <a style="text-decorition: underline;" class="text-danger" href="/formation">contact us</a>');
        }
    </script>

@endsection
