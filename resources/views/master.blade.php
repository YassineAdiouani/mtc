<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/css/master.css">
    <title>E-cursus - @yield('title')</title>
    <header class="cont">        
		<nav style="box-shadow: 0 2px 10px rgba(0,0,0,.3) ;
		background-color:whitesmoke;
		position:fixed;top:0;left: 0;width:100%;
		z-index:100" class="navbar navbar-expand-lg navbar-light ">
			<div class="container-fluid">
				<a class="navbar-brand" href="/">
					MTC
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item me-4">
							<a class="nav-link active" aria-current="page" href="/">Accueil</a>
						</li>
						<li class="nav-item me-4">
							<a class="nav-link" href="/">Contact</a>
						</li>
						@if (Route::has('login'))
                        @auth
                            <li class="nav-item me-4"><a class="nav-link" href="{{ url('/home') }}" class="button">Mon compte</a></li>
                        @else
                            <li class="nav-item me-4"><a class="nav-link" href="{{ route('login') }}" class="button">Log in</a>
                            @if (Route::has('register'))
                                <li class="nav-item me-4"><a class="nav-link" href="{{ route('register') }}"class="button">Register</a></li>
                            @endif
                        @endauth
                    @endif
					</ul>
				</div>
			</div>
		</nav>
    </header>


</head>
<body>
    <div  style="margin-top:40px;" class="body">
        @yield('contenu')
    </div>
</body>
</html>

    
