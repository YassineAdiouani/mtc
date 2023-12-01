<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Your YouTube Template</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Your Custom CSS (if any) -->
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <style>
        /* Custom CSS for the page */
        body {
            background-color: #f8f9fa; /* Background color */
            display: flex;
            align-items: center;
            justify-content: center;
            height: auto;
            padding-top: 20px
        }

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
    </style>
</head>
<body>

<div class="container-fluid">
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
                 PageMaker including versions of Lorem Ipsum</p>
        </div>

        <!-- Playlist Section (Centered, Scrollable, Sticky-top) -->
        <div class="col-md-4 w-100">
            <div class="sticky-top">
                <h3>Playlist</h3>
                <div class="playlist-container">
                    <ul class="list-group">
                        <!-- Sample Playlist Items -->
                        <li class="list-group-item">Video 1: Title</li>
                        <li class="list-group-item">Video 2: Title</li>
                        <li class="list-group-item">Video 3: Title</li>
                        <li class="list-group-item">Video 4: Title</li>
                        <li class="list-group-item">Video 5: Title</li>
                        <li class="list-group-item">Video 6: Title</li>
                        <li class="list-group-item">Video 7: Title</li>
                        <li class="list-group-item">Video 8: Title</li>
                        <li class="list-group-item">Video 9: Title</li>
                        <li class="list-group-item">Video 10: Title</li>
                        <li class="list-group-item">Video 11: Title</li>
                        <li class="list-group-item">Video 12: Title</li>
                        <!-- Add more playlist items as needed -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS and Popper.js (required for Bootstrap components) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!-- Your Custom JS (if any) -->
<!-- <script src="script.js"></script> -->
</body>
</html>
