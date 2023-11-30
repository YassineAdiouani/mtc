<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<title>MTC</title>
<!-- Your HTML code here -->
<style>
	.cn{
		margin-top:5%;
		margin-bottom:3%;
	}
</style>
<header>
	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="navbar-brand" href="/">
						<x-application-logo/>
					</a>
				</li>
			</ul>
			<ul class="navbar-nav ml-auto">			
				<li class="nav-item">
					<a class="nav-link" href="{{route('home')}}">DashBoard</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{route('formation.index')}}">formation</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Admin-{{ Auth::user()->name }}
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a>
						<form method="POST" action="{{ route('logout') }}">
							@csrf
							<button type="submit" class="dropdown-item">Log Out</button>
						</form>
					</div>
				</li>
			</ul>
		</div>
	</nav>
</header>

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
  
      <div class="cn">
		@yield('A-content')
		@yield('formation')
		@yield('edit-formation')
	  </div>
    </div>
  </div> 
<div>
	

</div>

</div>