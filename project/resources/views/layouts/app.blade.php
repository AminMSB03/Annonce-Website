<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <title>Document</title>
</head>
<body>
    <nav>
        <h1 class="logo">Rekrute</h1>
        <div class="list">
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li><a href="{{ route('Annonces') }}">Annonces</a></li>
            </ul>
            <ul>
                @if(auth()->user())
                    <li>
                        {{ auth()->user()->username }}
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="button">
                                logout
                            </button>
                        </form>
                    </li>
                @else
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @endif
                
            </ul>
        </div>
    </nav>
    @yield('content')

<div class="footer-basic">
    
        <ul class="footer-list">
            <li class="list-item"><a href="#">Home</a></li>
            <li class="list-item"><a href="#">Services</a></li>
            <li class="list-item"><a href="#">About</a></li>
            <li class="list-item"><a href="#">Terms</a></li>
            <li class="list-item"><a href="#">Privacy Policy</a></li>
        </ul>
        <p class="copyright">Rekrute © 2022</p>
        
</div>

<script src="js/main.js"></script>
</body>
</html>