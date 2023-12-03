<!doctype html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>MTC-F @yield('title')
        </title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('assets/dashboard/css/bootstrap.min.css') }}">
        <!----css3---->
        <link rel="stylesheet" href="{{ asset('assets/dashboard/css/custom.css') }}">
        <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
        @yield('style')
    </head>
    <body>
        @yield('scripts')
        <div class="wrapper">
    <div class="body-overlay"></div>
            <!-- Sidebar  -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <img width="110px" style="overflow: hidden" src="{{ asset('assets/imgs/MTC.png') }}" alt="">
                </div>
                <ul class="list-unstyled components">
                <li  class="{{ request()->route()->getName() == 'home' ? 'active' : '' }}">
                        <a href="{{ route('home') }}" class="dashboard"><i class="material-icons">dashboard</i><span>Dashboard</span></a>
                    </li>
            
                <div class="small-screen navbar-display">
                    <li class="dropdown d-lg-none d-md-block d-xl-none d-sm-block">
                        <a href="#homeSubmenu0" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="material-icons">notifications</i><span> 4 notification</span></a>
                        <ul class="collapse list-unstyled menu" id="homeSubmenu0">
                                        <li>
                                        <a href="#">ded have 5 new messages</a>
                                        </li>
                                        <li>
                                            <a href="#">You're now friend with Mike</a>
                                        </li>
                                        <li>
                                            <a href="#">Wish Mary on her birthday!</a>
                                        </li>
                                        <li>
                                            <a href="#">5 warnings in Server Console</a>
                                        </li>
                        </ul>
                    </li>
                    
                    <li  class="d-lg-none d-md-block d-xl-none d-sm-block">
                        <a href="#"><i class="material-icons">apps</i><span>apps</span></a>
                    </li>
                    
                     <li  class="d-lg-none d-md-block d-xl-none d-sm-block">
                        <a href="#"><i class="material-icons">person</i><span>user</span></a>
                    </li>
                    
                    <li  class="d-lg-none d-md-block d-xl-none d-sm-block">
                        <a href="#"><i class="material-icons">settings</i><span>setting</span></a>
                    </li>
                    </div>
                
                
                    <li class="dropdown">
                        <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="material-icons">border_color</i><span>utilisateurs</span></a>
                        <ul class="collapse list-unstyled menu" id="homeSubmenu1">
                            <li class="">
                                <a href="{{ route('user.index') }}">Liste utilisateurs</a>
                            </li>
                            <li>
                                <a href="{{ route('user.create') }}">Ajouter des utilisateurs</a>
                            </li>
                        </ul>
                    </li>
                    

                    <li class="dropdown">
                        <a href="#pageSubmenu5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <i class="material-icons">extension</i><span>Formation</span></a>
                        <ul class="collapse list-unstyled menu" id="pageSubmenu5">
                            <li class="{{ request()->route()->getName() == '/formation' ? 'active' : '' }}">
                                <a href="{{ route('formation.index') }}">Liste des Formations</a>
                            </li>
                            <li>
                                <a href="{{ route('formation.create') }}">Ajouter des Formations</a>
                            </li>
                            <li>
                                <a href="{{ route('playlist.create') }}">Ajouter Videos de formation</a>
                            </li>
                        </ul>
                    </li>
{{-- 
                    <li class="dropdown">
                        <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="material-icons">apps</i><span>widgets</span></a>
                        <ul class="collapse list-unstyled menu" id="pageSubmenu2">
                            <li>
                                <a href="#">Page 1</a>
                            </li>
                            <li>
                                <a href="#">Page 2</a>
                            </li>
                            <li>
                                <a href="#">Page 3</a>
                            </li>
                        </ul>
                    </li>
                    
                     <li class="dropdown">
                        <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="material-icons">equalizer</i>
                    
                        
                        <span>chart</span></a>
                        <ul class="collapse list-unstyled menu" id="pageSubmenu3">
                            <li>
                                <a href="#">Page 1</a>
                            </li>
                            <li>
                                <a href="#">Page 2</a>
                            </li>
                            <li>
                                <a href="#">Page 3</a>
                            </li>
                        </ul>
                    </li>
                      <li class="dropdown">
                        <a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="material-icons">extension</i><span>ui element</span></a>
                        <ul class="collapse list-unstyled menu" id="pageSubmenu4">
                            <li>
                                <a href="#">Page 1</a>
                            </li>
                            <li>
                                <a href="#">Page 2</a>
                            </li>
                            <li>
                                <a href="#">Page 3</a>
                            </li>
                        </ul>
                    </li>
                    
                   
                   
                   
                   <li class="dropdown">
                        <a href="#pageSubmenu6" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="material-icons">grid_on</i><span>tables</span></a>
                        <ul class="collapse list-unstyled menu" id="pageSubmenu6">
                            <li>
                                <a href="#">Page 1</a>
                            </li>
                            <li>
                                <a href="#">Page 2</a>
                            </li>
                            <li>
                                <a href="#">Page 3</a>
                            </li>
                        </ul>
                    </li>
                   
                   
                     <li class="dropdown">
                        <a href="#pageSubmenu7" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="material-icons">content_copy</i><span>Pages</span></a>
                        <ul class="collapse list-unstyled menu" id="pageSubmenu7">
                            <li>
                                <a href="#">Page 1</a>
                            </li>
                            <li>
                                <a href="#">Page 2</a>
                            </li>
                            <li>
                                <a href="#">Page 3</a>
                            </li>
                        </ul>
                    </li>
                   
                   <li class="">
                        <a href="#"><i class="material-icons">date_range</i><span>copy</span></a>
                    </li>
                    
                     <li  class="">
                        <a href="#"><i class="material-icons">library_books</i><span>Calender</span></a>
                    </li>
                    --}}
                   
                </ul>
    
               
            </nav>
            
            
    
            <!-- Page Content  -->
            <div id="content">
            
            <div class="top-navbar">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
    
                        <button type="button" id="sidebarCollapse" class="d-xl-block d-lg-block d-md-mone d-none">
                            <span class="material-icons">arrow_back_ios</span>
                        </button>
                        
                        <a class="navbar-brand" href="#"> Dashboard - Users </a>
                        
                        <button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="material-icons">more_vert</span>
                        </button>
    
                        <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none" id="navbarSupportedContent">
                            <ul class="nav navbar-nav ml-auto">   
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home') }}">
                                    <span class="material-icons">apps</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('profile.edit') }}">
                                    <span class="material-icons">person</span>
                                    </a>
                                </li>
                                <li class="dropdown nav-item active">
                                    <a href="#" class="nav-link" data-toggle="dropdown">
                                        <span class="material-icons">settings</span>
                                       {{-- <span class="notification">4</span> --}}
                                   </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="/">retour à la page d'accueil</a>
                                        </li>
                                        <li>
                                            <form action="{{ route('logout') }}" method="post">
                                                @csrf
                                                <button style="border: none;outline:none"><a style="color: red">Se déconnecter</a></button>
                                            </form>
                                        </li>
                                      
                                    </ul>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="#">
                                    <span class="material-icons">settings</span>
                                    </a>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
                
                
                <div class="main-content">
                
                @yield('content')
                 
                        <footer class="footer">
                    <div class="container-fluid">
                      <div class="row">
                      <div class="col-md-6">
                        <nav class="d-flex">
                            <ul class="m-0 p-0">
                                <li>
                                    <a href="#">
                                        Formation
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        MTC Accueil
                                    </a>
                                </li>
                            </ul>
                        </nav>
                       
                    </div>
                    <div class="col-md-6">
                     <p class="copyright d-flex justify-content-end"> &copy 2023 MTC {{ " Admin Dashboard " }}
                        </p>
                    </div>
                      </div>
                        </div>
                </footer>
        </div>
            </div>
        </div>
            <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{ asset('assets/dashboard/js/jquery-3.3.1.slim.min.js') }}"></script>
        <script src="{{ asset('assets/dashboard/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/dashboard/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/dashboard/js/jquery-3.3.1.min.js') }}"></script>


        <script type="text/javascript">
        $(document).ready(function () {
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                    $('#content').toggleClass('active');
                });
                
                $('.more-button,.body-overlay').on('click', function () {
                    $('#sidebar,.body-overlay').toggleClass('show-nav');
                });
                
            });
    </script>
    </body>
</html>


