    
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>AREQUIPA LOCAL | Tienda delivery de abarrotes en Arequipa</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        

    </head>
    

        <style>
            * {
                    font-family: "Verdana", sans-serif;
                    -moz-box-sizing: border-box;
                    box-sizing: border-box;
                    letter-spacing: 0px;
                    -webkit-font-smoothing: antialiased;
                    -moz-osx-font-smoothing: grayscale;
                    scroll-behavior: smooth;
                    margin: 0;
                    color: #fff;
                }

                body {
                    margin: 8rem;
                    background-color: #00bfff;
                    
                }
            
            </style>
    <body>

            <nav class="navbar navbar-expand-md navbar-dark container-fluid text-center bg-primary pt-5 pb-5">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        TOURS <strong class="text-secondary">PERÚ</strong>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <a href="/principal" class="nav-link ">
                                <button type="button" class="btn btn-primary text-dark me-5"><a href="/principal" class="nav-link text-black"><b>INGRESAR</button></a>
                                
                            </a>
                           
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                            ...............
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
            

    @yield('content')
    <div class="container-fluid text-center bg-warning pt-5 pb-5">
        <img src="https://cdn-icons-png.flaticon.com/128/2200/2200326.png" alt="">
        <img src="https://cdn-icons-png.flaticon.com/128/2387/2387521.png" alt="">
        <img src="https://cdn-icons-png.flaticon.com/128/854/854894.png" alt="">
        <img src="https://cdn-icons-png.flaticon.com/128/284/284495.png" alt=""><br>

        <br><b><p class="">BIENVENIDOS A HUÁNUCO... A LA CIUDAD MEJOR CLIMA DEL MUNDO, CONOZCA A SUS ZONAS TURISTICAS Y SUS COSTUMBRES SÉ PARTE DE ESTA HERMOSA FAMILIA HUANUQUEÑA 2023🥰🥰</p>
        

        <br><ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
            <li><a href="" target="_blank"><img width="40px" height="60px" src="https://cdn-icons-png.flaticon.com/128/5968/5968764.png"></a></li>
            <li><a href="" target="_blank"><img width="40px" height="60px" src="https://cdn-icons-png.flaticon.com/128/3955/3955024.png"></a></li>
            <li><a href="" target="_blank"><img width="40px" height="60px" src="https://cdn-icons-png.flaticon.com/128/733/733579.png"></a></li>
            <li><a href="" target="_blank"><img width="40px" height="60px" src="https://cdn-icons-png.flaticon.com/128/3670/3670147.png"></a></li>
        </ul>
        <p>&copy; Todos los derechos reservados | toursperu.com | 2023</p>
        
        
    </div>
        <style>
        .bg-warning{
            background: #ffd700 !important;
            border-radius: 10px;
            width: 600px;
            height: 450px;
            

        }
        </style>
        <style>
        .bg-primary{
            background: #340166 !important;
            border-radius: 10px;
            width: 600px;
            height: 80px;

        }
        </style>
    </body>
</html>