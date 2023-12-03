<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
        crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MTC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
        crossorigin="anonymous">
    <link rel="stylesheet" href="/css/master.css">
    <style>
        /* Your existing styles */
        /* Additional styles for the fixed navbar */
        .navbar.fixed {
            position: fixed;
            top: 0;
            width: 100%;
			background-color: whitesmoke;
			z-index: 100;
			transition: all ease 0.7	s;
			scroll-behavior: smooth;
        }
    </style>
</head>

<body>

    <header class="cont">
        <div class="contact-bar">
            {{-- contact@mtc-maroc.com | +212808519585 |Lun — Ven: 9:00 — 17:00 --}}
            <ul class="social-icons-1">
                <li><a href="#" target="_blank"><i class='bx bxs-envelope'></i> contact@mtc-maroc.com</a></li>
                <li><a href="#" target="_blank"><i class='bx bxs-phone'></i> +212808519585</a></li>
                <li><a href="#" target="_blank"><i class='bx bxs-time-five' ></i> Lun — Ven: 9:00 — 17:00</a></li>
            </ul>
            <!-- Icônes sociales -->
            <ul class="social-icons">
                <li><a href="https://api.whatsapp.com/send/?phone=2120703108883&text=Bonjour%2C%20je%20suis%20intéressé%20par%20votre%20service" target="_blank">
                    <i class='bx bxl-whatsapp' ></i></a></li>
                <li><a href="#" target="_blank"><i class='bx bxl-facebook' ></i></i></a></li>
                <li><a href="#" target="_blank"><i class='bx bxl-instagram'></i></i></a></li>
                <li><a href="#" target="_blank"><i class='bx bxl-linkedin'></i></a></li>
            </ul>
        </div>

        <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light">
            <a href="/">
                <x-application-logo/> 
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item me-4">
                        <a class="nav-link active" aria-current="page" href="/">Accueil</a>
                    </li>
                    @if (Route::has('login'))
                    @auth
                        @if(auth()->user()->usertype != 'admin')
                            <li class="nav-item me-4">
                                <a class="nav-link" href="/contact">Contact</a>
                            </li>
                        @endif
                    @endauth
                    @auth
                        <li class="nav-item me-4">
                            @if(auth()->user()->usertype == 'admin')
                                <a class="nav-link" href="{{ url('/home') }}" class="button">Dashboard</a>
                            @else
                                <a class="nav-link" href="{{ route('mesformations') }}" class="button">Mes Formation</a>
                            @endif
                        </li>
                        <li class="nav-item me-4">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="btn text-light" style="background: #054789" type="submit">Log Out</button>
                            </form>
                        </li>
                    @else
                        <li class="nav-item me-4"><a class="nav-link" href="{{ route('login') }}" class="button">Log in</a></li>
                        @if (Route::has('register'))
                            <li class="nav-item me-4"><a class="nav-link" href="{{ route('register') }}" class="button">Register</a></li>
                        @endif
                    @endauth
                @endif

                </ul>
            </div>
        </nav>
    </header>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var navbar = document.getElementById("main-navbar");

            window.addEventListener("scroll", function () {
                if (window.scrollY > 60) {
                    navbar.classList.add("fixed");
                } else {
                    navbar.classList.remove("fixed");
                }
            });
        });
    </script>

    <div class="body">
        @yield('contenu')
        @yield('contact')
        @yield('formation')
    </div>

    <div class="container footer p-4">
        <div class="text text-center w-100 fw-normal">© All rights reserved | MTC 2023-2024 | <a href="#" style="text-decoration: none">Privacy and policy</a> | <a href="#" style="text-decoration: none">Condition and Teams</a></div>
    </div>

    <script>
        window.__lc = window.__lc || {};
        window.__lc.license = 16759470;
        ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
    </script>
    <noscript><a href="https://www.livechat.com/chat-with/16759470/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
    <!-- End of LiveChat code -->
    
    
    {{-- whatsapp --}}
    
    <div class="whatsapp">
        <style>
        .float{
            position:fixed;
            width:60px;
            height:60px;
            bottom:17px;
            left:10px;
            background-color:#25d366;
            color:#FFF;
            border-radius:50px;
            text-align:center;
          font-size:30px;
            box-shadow: 2px 2px 3px #999;
          z-index:100;
        }
        .float:hover {
            color: none;
            text-decoration: none;
        }
        .my-float{
            margin-top:16px;
        }
        </style>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <a style="text-decoration: none" href="https://api.whatsapp.com/send/?phone=2120703108883&text&type=phone_number&app_absent=0" class="float" target="_blank">
            <i class="fa fa-whatsapp my-float"></i>
        </a>
    </div>
</body>

</html>
