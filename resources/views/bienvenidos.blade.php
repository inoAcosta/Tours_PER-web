<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pagina turistica TOURS PERU</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
        <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
        <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
        <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
        <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
        <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
        <link rel="stylesheet" href="css/">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <meta name="theme-color" content="#7952b3">

        <!-- Styles -->
        <style>
           html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}

        </style>

        <style>
            body {
                background: #4FC3F7;
                font-family: 'Nunito', sans-serif;
            }
            
        </style>

    </head>
    <body>
        
        <div class="container">
            <header class="blog-header py-3">
                <div class="row flex-nowrap justify-content-between align-items-center">
                    <div class="col-4 d-flex justify-content-end align-items-center">
                        
                        <img src="https://cdn-icons-png.flaticon.com/128/2200/2200326.png" alt="">
                        <img src="https://cdn-icons-png.flaticon.com/128/2387/2387521.png" alt="">
                        <img src="https://cdn-icons-png.flaticon.com/128/3070/3070848.png" alt="">
                        
                        
                    </div>
                    <div class="col-4 text-center">
                        <a class="display-4 fst-italic blog-header-logo" href="#">TOURS PERÚ</a>
                    </div>
                    <div class="col-4 d-flex justify-content-end align-items-center">

                        <img src="https://cdn-icons-png.flaticon.com/128/854/854894.png" alt="">
                        <img src="https://cdn-icons-png.flaticon.com/128/744/744502.png" alt="">
                        <img src="https://cdn-icons-png.flaticon.com/128/284/284495.png" alt="">

                    </div>
                </div>
            </header>

            <div class="px-3 py-2 bg-dark blog-header-logo ">
            <div class="container1">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
                </a>

                <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0">
                    <li>
                    <a href="#" class="nav-link">
                        <svg class="bi d-block mx-auto mb-1 text-black " width="24" height="28"><use xlink:href="#home"/></svg>
                        INICIO
                    </a>
                    </li>
                    <li>
                    <a href="#" class="nav-link">
                        <svg class="bi d-block mx-auto mb-1" width="24" height="28"><use xlink:href="#speedometer2"/></svg>
                        SITIOS
                    </a>
                    </li>
                    <li>
                    <a href="#" class="nav-link ">
                        <svg class="bi d-block mx-auto mb-1" width="24" height="28"><use xlink:href="#table"/></svg>
                        VIAJES
                    </a>
                    </li>
                    <li>
                    <a href="#" class="nav-link ">
                        <svg class="bi d-block mx-auto mb-1" width="24" height="28"><use xlink:href="#grid"/></svg>
                        COSTO
                    </a>
                    </li>
                    <li>
                    <a href="#" class="nav-link ">
                        <svg class="bi d-block mx-auto mb-1" width="24" height="28"><use xlink:href="#people-circle"/></svg>
                        CLIENTES
                    </a>
                    </li>
                </ul>
                </div>
            </div>
            </div>
            <div class="px-3 py-2 border-bottom mb-3">
            <div class="container d-flex flex-wrap justify-content-center">
                <form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto">
                <input type="search" class="form-control" placeholder="Buscar...." aria-label="Search">
                </form>

                <div class="text-end">
                <button type="button" class="btn btn-light text-dark me-2">INICIO</button>
                <button type="button" class="btn btn-primary">REGISTRARSE</button>
                </div>
            </div>
            </div>
            
        
    
       

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
                    margin: 2rem;
                    background-color: #6dc2f7;
                }


                .carrosel {
                    -webkit-perspective: 250px;
                    -moz-perspective: 250px;
                    width: 400px;
                    height: 200px;
                    top: 50px;
                    position: relative;
                    margin: 0 auto;
                }

                @-webkit-keyframes efeitoCarrosel {
                    from {
                        -webkit-transform: rotateY(360deg) translateZ(130px) rotateY(-360deg);
                        -moz-transform: rotateY(360deg) translateZ(130px) rotateY(-360deg);
                        z-index: 10;
                        opacity: 1
                    }

                    50% {
                        z-index: -10;
                    }

                    to {
                        -webkit-transform: rotateY(0deg) translateZ(130px) rotateY(0deg);
                        -moz-transform: rotateY(0deg) translateZ(130px) rotateY(0deg);
                        z-index: 10;
                        opacity: 1
                    }
                }

                @-moz-keyframes efeitoCarrosel {
                    from {
                        -moz-transform: rotateY(360deg) translateZ(130px) rotateY(-360deg);
                        z-index: 10;
                        opacity: 1
                    }

                    50% {
                        z-index: -10;
                    }

                    to {
                        -moz-transform: rotateY(0deg) translateZ(130px) rotateY(0deg);
                        z-index: 10;
                        opacity: 1
                    }
                }

                .caixa__card {
                    width: 90px;
                    height: 100px;
                    background-color: #442222;
                    position: absolute;
                    display: flex;
                    font-weight: bold;
                    justify-content: center;
                    align-items: center;
                    top: 35px;
                    left: 125px;
                    font-size: 9px;
                    border-radius: 8px;
                    box-shadow: 0px 0px 20px rgba(0, 0, 0, .5);
                    text-align: center;
                    -webkit-animation-name: efeitoCarrosel;
                    -moz-animation-name: efeitoCarrosel;
                    -webkit-animation-duration: 8s;
                    -moz-animation-duration: 8s;
                    -webkit-animation-iteration-count: infinite;
                    -moz-animation-iteration-count: infinite;
                    -webkit-animation-timing-function: linear;
                    -moz-animation-timing-function: linear;
                }

                .caixa__card:hover {
                    border: solid #4466cc 3px;
                    box-shadow: 0px 0px 10px #4466cc;
                }

                .caixa__card.cc__1 {
                    background: linear-gradient(-229deg, #0093E9, #80D0C7);
                    -webkit-animation-delay: -7s;
                    -moz-animation-delay: -7s;
                }

                .caixa__card.cc__2 {

                    background: linear-gradient(-229deg, #00DBDE, #FC00FF);
                    -webkit-animation-delay: -6s;
                    -moz-animation-delay: -6s;
                }

                .caixa__card.cc__3 {

                    background: linear-gradient(-229deg, #50d990, #d4d054);
                    -webkit-animation-delay: -5s;
                    -moz-animation-delay: -5s;
                }

                .caixa__card.cc__4 {
                    background: linear-gradient(-229deg, #cf91ff, #5782F5);
                    -webkit-animation-delay: -4s;
                    -moz-animation-delay: -4s;
                }

                .caixa__card.cc__5 {
                    background: linear-gradient(-229deg, #642B73, #C6426E);
                    -webkit-animation-delay: -3s;
                    -moz-animation-delay: -3s;
                }

                .caixa__card.cc__6 {
                    background: linear-gradient(-229deg, #D9AFD9, #97D9E1);
                    -webkit-animation-delay: -2s;
                    -moz-animation-delay: -2s;
                }

                .caixa__card.cc__7 {
                    background: linear-gradient(-229deg, #FBAB7E, #F7CE68);
                    -webkit-animation-delay: -1s;
                    -moz-animation-delay: -1s;
                }

                .caixa__card.cc__8 {
                    background: linear-gradient(-229deg, #1472ff, #A8EB12);
                }
            </style>

            
            <div class="conteudo">
                <div class="carrosel">
                    <div class="caixa__card cc__1">VIAJES</div>
                    <div class="caixa__card cc__2">AVENTURAS</div>
                    <div class="caixa__card cc__3">RUTAS</div>
                    <div class="caixa__card cc__4">COMIDAS</div>
                    <div class="caixa__card cc__5">HISTORIAS</div>
                    <div class="caixa__card cc__6">COSTUMBRES</div>
                    <div class="caixa__card cc__7">FOTOS</div>
                    <div class="caixa__card cc__8">
                        <img src="https://cdn-icons-png.flaticon.com/128/826/826070.png" width="40px">
                    </div>
                </div>
            </div>

        </div>


    <div class="showcase bgShowcase">
        <div class="container bgBlanco">
            <div class="section_header">
                <h3 class="text-black ">EXCURSIONES TURISTICAS TOURS PERÚ, DESDE PERÚ PARA EL MUNDO!!</h3>
            </div> 
            <!-- Post Row -->
            
            
            <div id="blog">
                <div class="">
        
                    <!-- Post Row -->
                    <div class="row post_row">
                        
                        <!-- Post -->
                        <div class="col-sm-4">
                            <div class="post">
                                <div class="img">
                                    <a href="huanuco-senorial.php">
                                        <img src="http://www.toursterranova.com/img/destinos/huanuco-senorial.jpg" alt="huanuco-senorial" class="img-responsive" />
                                    </a>
                                </div>
                                <div class="text">
                                    <h3><a class="textDestino" href="huanuco-senorial.php">Huánuco Sensorial</a></h3>
                                    
                                    <p><span class="text-black">DESDE:</span> S/. 39.00</p>
                                    <p><span class="text-black">Horario de Salida:</span><br/>02:30pm hasta 07:00pm</p>
                                </div>
                                
                                <a class="plus_wrapper" href="huanuco-senorial.php">
                                    <span>&#43;</span>
                                </a>
                            </div>
                        </div>
        
                        <!-- Post -->
                        <div class="col-sm-4">
                            <div class="post">
                                <div class="img">
                                    <a href="tingo-maria-encantador.php">
                                        <img src="http://www.toursterranova.com/img/destinos/selva-magica/tingo-maria-encantador/tingo-encantador.jpg" alt="Tingo María Encantador" class="img-responsive" />
                                    </a>
                                </div>
                                <div class="text-black">
                                    <h3><a class="textDestino" href="tingo-maria-encantador.php">Tingo Mar&iacute;a Encantador</a></h3>
                                    
                                    <p><span>DESDE:</span> S/. 85.00</p>
                                    <p><span>Horario de Salida:</span><br/> 06:30am hasta 08:30pm</p>
                                </div>
                                
                                <a class="plus_wrapper" href="tingo-maria-encantador.php">
                                    <span>&#43;</span>
                                </a>
                            </div>
                        </div>
        
                        <!-- Post -->
                        <div class="col-sm-4">
                            <div class="post">
                                <div class="img">
                                    <a href="Huayllay">
                                        <img src="http://www.toursterranova.com/img/destinos/huayllay/bosque-piedra-huayllay.jpg" alt="Bosuqe de Piedra - Huayllay" class="img-responsive" />
                                    </a>
                                </div>
                                <div class="text">
                                    <h3><a class="textDestino" href="bosque-de-piedra-de-huayllay.php">Bosque de Piedras - Huayllay</a></h3>
                                    
                                    <p><span>DESDE:</span> S/. 69.00</p>
                                    <p><span>Horario de Salida:</span><br/> 06:30am hasta 07:30pm</p>
                                </div>
                                
                                <a class="plus_wrapper" href="bosque-de-piedra-de-huayllay.php">
                                    <span>&#43;</span>
                                </a>
                            </div>
                        </div>
                        <div id="blog">
                <div class="">
        
                    <!-- Post Row -->
                    <div class="row post_row">
                        
                        <!-- Post -->
                        <div class="col-sm-4">
                            <div class="post">
                                <div class="img">
                                    <a href="huanuco-senorial.php">
                                        <img src="http://www.toursterranova.com/img/destinos/huanuco-senorial.jpg" alt="huanuco-senorial" class="img-responsive" />
                                    </a>
                                </div>
                                <div class="text">
                                    <h3><a class="textDestino" href="huanuco-senorial.php">Hu&aacute;nuco Se&ntilde;orial</a></h3>
                                    
                                    <p><span>DESDE:</span> S/. 39.00</p>
                                    <p><span>Horario de Salida:</span>
                                    </br> 09:30am hasta 02:00pm </p>
                                </div>
                                
                                <a class="plus_wrapper" href="huanuco-senorial.php">
                                    <span>&#43;</span>
                                </a>
                            </div>
                        </div>
        
                        <!-- Post -->
                        <div class="col-sm-4">
                            <div class="post">
                                <div class="img">
                                    <a href="tingo-maria-encantador.php">
                                        <img src="http://www.toursterranova.com/img/destinos/selva-magica/tingo-maria-encantador/tingo-encantador.jpg" alt="Tingo María Encantador" class="img-responsive" />
                                    </a>
                                </div>
                                <div class="text">
                                    <h3><a class="textDestino" href="tingo-maria-encantador.php">Tingo Mar&iacute;a Encantador</a></h3>
                                    
                                    <p><span>DESDE:</span> S/. 85.00</p>
                                    <p><span>Horario de Salida:</span>
                                    <br/> 06:30am hasta 08:30pm</p>
                                </div>
                                
                                <a class="plus_wrapper" href="tingo-maria-encantador.php">
                                    <span>&#43;</span>
                                </a>
                            </div>
                        </div>
        
                        <!-- Post -->
                        <div class="col-sm-4">
                            <div class="post">
                                <div class="img">
                                    <a href="Huayllay">
                                        <img src="http://www.toursterranova.com/img/destinos/huayllay/bosque-piedra-huayllay.jpg" alt="Bosuqe de Piedra - Huayllay" class="img-responsive" />
                                    </a>
                                </div>
                                <div class="text">
                                    <h3><a class="textDestino" href="bosque-de-piedra-de-huayllay.php">Bosque de Piedras - Huayllay</a></h3>
                                    
                                    <p><span>DESDE:</span> S/. 69.00</p>
                                    <p><span>Horario de Salida:</span>
                                    <br/> 06:30am hasta 07:30pm</p>
                                </div>
                                
                                <a class="plus_wrapper" href="bosque-de-piedra-de-huayllay.php">
                                    <span>&#43;</span>
                                </a>
                            </div>
                        </div>

                   </div>   
                    <div class="row post_row">
                    <!-- Post -->
                        <div class="col-sm-4">
                            <div class="post">
                                <div class="img">
                                    <a href="tours-quivilla.php">
                                        <img width="300" height="300"  src="http://www.toursterranova.com/img/destinos/quivilla/quivilla8.jpg" alt="huanuco-senorial" class="img-responsive" />
                                    </a>
                                </div>
                                <div class="text">
                                    <h3><a class="textDestino" href="tours_quivilla.php">Tours de Aventura Quivilla</a></h3>
                                    
                                    <p><span>DESDE:</span> S/. 89.00</p>
                                    <p><span>Horario de Salida:</span>
                                </div>
                                
                                <a class="plus_wrapper" href="huanuco-senorial.php">
                                    <span>&#43;</span>
                                </a>
                            </div>
                        </div>
        
                        <!-- Post -->
                        <div class="col-sm-4">
                            <div class="post">
                                <div class="img">
                                   <iframe width="300" height="300" src="https://www.youtube.com/embed/WZksKWIUCUs" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                                </div>
                               
                                
                            </div>
                        </div>
        
                        <!-- Post -->
                        <div class="col-sm-4">
                            <div class="post">
                                <div class="img">
                                    <a href="sierra-huanuco.php">
                                        <img src="http://www.toursterranova.com/img/destinos/sierra-huanuco/tantamayo.jpg" alt="Bosuqe de Piedra - Huayllay" class="img-responsive" />
                                    </a>
                                </div>
                                <div class="text">
                                    <h3><a class="textDestino" href="sierra-huanuco.php">Huánuco Arqueología y Aventura</a></h3>
                                    
                                    <p><span>DESDE:</span> S/. 549.00</p>
                                    <p><span>Hora de Salida:</span><br/> 06:00am</p>
                                    <p><span>Hora de Llegada:</span><br/> 08:00pm</p>
                                </div>
                                
                                <a class="plus_wrapper" href="bosque-de-piedra-de-huayllay.php">
                                    <span>&#43;</span>
                                </a>
                            </div>
                        </div>
              
              
              
                    </div>
        			<div class="section_header">
                        <h3>Paquetes Destacados</h3>
                    </div> 
                    <!-- Post Row -->
                    <div class="row post_row">
                        <!-- Post -->
                        <div class="col-sm-4">
                            <div class="post">
                                <div class="img">
                                    <a href="playas-de-ensueno.php">
                                        <img src="http://www.toursterranova.com/img/destinos/playas-de-ensueno.jpg" alt="playas-de-ensueño" class="img-responsive" />
                                    </a>
                                </div>
                                <div class="text">
                                    <h3><a class="textDestino" href="playas-de-ensueno.php">Playas de Ensue&ntildeo</a></h3>
                                    
                                    <p><span>DESDE:</span> S/. 00.00</p>
                                    <p><span>Duraci&oacute;n:</span></p>
                                    <p>4 D&iacute;as / 3 Noches</p>
                                </div>
                                
                                <a class="plus_wrapper" href="playas-de-ensueno.php">
                                    <span>&#43;</span>
                                </a>
                            </div>
                        </div>
        
                        <!-- Post -->
                        <div class="col-sm-4">
                            <div class="post">
                                <div class="img">
                                    <a href="cuzco-maravilloso.php">
                                        <img src="http://www.toursterranova.com/img/destinos/cusco-magico.jpg" alt="cusco mágico" class="img-responsive" />
                                    </a>
                                </div>
                                <div class="text">
                                    <h3><a class="textDestino" href="cuzco-maravilloso.php">Cuzco Maravilloso</a></h3>

                                    <p><span>DESDE:</span> S/. 00.00</p>
                                    <p><span>Duraci&oacute;n:</span></p>
                                    <p>2 D&iacute;as / 1 Noche</p>
                                </div>
                                
                                <a class="plus_wrapper" href="cuzco-maravilloso.php">
                                    <span>&#43;</span>
                                </a>
                            </div>
                        </div>
        
                        <!-- Post -->
                        <div class="col-sm-4">
                            <div class="post">
                                <div class="img">
                                    <a href="de-la-selva-central-su-magia.php">
                                        <img src="http://www.toursterranova.com/img/destinos/selva-central.jpg" alt="selva-central" class="img-responsive" />
                                    </a>
                                </div>
                                <div class="text">
                                    <h3><a class="textDestino" href="de-la-selva-central-su-magia.php">De la Selva Central su Magia</a></h3>
                                    
                                    <p><span>DESDE:</span> S/. 00.00</p>
                                    <p><span>Duraci&oacute;n:</span></p>
                                    <p>5 D&iacute;as / 4 Noches</p>
                                </div>
                                
                                <a class="plus_wrapper" href="de-la-selva-central-su-magia.php">
                                    <span>&#43;</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
                
    		</div>
 
        </div>

        </main>
        
        <footer class="px-3 py-2 bg-primary blog-header-logo text-white">
            <div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
            <div class="small-dialog-header">
                <h3>REGISTRARSE</h3>
            </div>
            <form>
                <div class="sign-in-wrapper">
                    <a href="#0" class="social_bt facebook">Iniciar conh Facebook</a>
                    <a href="#0" class="social_bt google">Iniciar con Google</a>
                    <div class="divider"><span></span></div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" id="email">
                        <i class="icon_mail_alt"></i>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" id="password" value="">
                        <i class="icon_lock_alt"></i>
                    </div>
                    <div class="clearfix add_bottom_15">
                        <div class="checkboxes float-left">
                            <input id="remember-me" type="checkbox" name="check">
                            <label for="remember-me">Recordar</label>
                        </div>
                        <div class="float-right"><a id="forgot" href="javascript:void(0);">Olvide mi contraseña?</a></div>
                    </div>
                    <div class="text-center"><input type="submit" value="INGRESAR" class="btn_login text-black"></div>
                    <div class="text-center">
                        No tengo una cuenta, registrarse? <a href="javascript:void(0);">Ingresar</a>
                    </div>
                    <div id="forgot_pw">
                        <div class="form-group">
                            <label>Por favor confirme su direccion de Email</label>
                            <input type="email" class="form-control" name="email_forgot" id="email_forgot">
                            <i class="icon_mail_alt"></i>
                        </div>
                        <p>Ingresa en tu correo y realiza la confirmación</p>
                        <div class="text-center"><input type="submit" value="REINICIAR CONTRASEÑA" class="btn_1 text-black"></div>
                    </div>
                </div>
            </form>
            <!--form -->

            <script src="//code.tidio.co/bgrk6yhylbyd5bcvkcchzfhinx9g4iqq.js" async></script>

            <!-- Start of HubSpot Embed Code -->
            <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/9478954.js"></script>
            <!-- End of HubSpot Embed Code -->	
            <!-- Common scripts -->
            <script src="js/jquery-3.5.1.min.js"></script>
            <script src="js/common_scripts_min.js"></script>
            <script src="js/functions.js"></script>
            
            <!-- Video header scripts -->
            <script src="js/modernizr.js"></script>
            <script src="js/video_header.js"></script>
            <script>
                $(document).ready(function() {

                    HeaderVideo.init({
                        container: $('.header-video'),
                        header: $('.header-video--media'),
                        videoTrigger: $("#video-trigger"),
                        autoPlayVideo: false
                    });

                });
            </script>

            <!-- Form banner -->
            <script>
                $('input.date-pick').datepicker('setDate', 'today');
                $('input.time-pick').timepicker({
                    minuteStep: 15,
                    showInpunts: false
                })
            </script>
            
            <script src="js/jquery.ddslick.js"></script>
            <script>
                $("select.ddslick").each(function() {
                    $(this).ddslick({
                        showSelectedHTML: true
                    });
                });
            </script>
            
            <!-- Check box and radio style iCheck -->
            <script>
                $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue'
                });
            </script>

        </footer>
        </div><!-- End row -->
            <div class="row">
                <div class="col-md-12">
                    <div id="social_footer">
                        
                        <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                            <li><a href="https://www.facebook.com/TingoMariaNunashTours" target="_blank">  <img src="https://cdn-icons-png.flaticon.com/128/5968/5968764.png"></a></li>
                            <li><a href="https://www.instagram.com/nunashtours/?hl=es-la" target="_blank"> <img src="https://cdn-icons-png.flaticon.com/128/3955/3955024.png"></a></li>
                            <li><a href="https://twitter.com/ToursTingo" target="_blank"> <img src="https://cdn-icons-png.flaticon.com/128/733/733579.png"></a></li>
                            <li><a href="https://www.youtube.com/channel/UCvRnFmrLkszAHNdF245FgXw" target="_blank"> <img src="https://cdn-icons-png.flaticon.com/128/3670/3670147.png"></a></li>
                        </ul>
                        <p>©Tours PERÚ 2023</p>
                    </div>
                </div>
            </div>
        </div>



    </body>

    
        

</html>
