
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.82.0">
    <title>Invitación</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css"; />

    

    <!-- Bootstrap core CSS -->
    {{-- <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"> --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,600,700,900&display=swap" rel="stylesheet">
        <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">


    
    <!-- Custom styles for this template -->
    <link href="{{asset('css/cover.css')}}" rel="stylesheet">
  </head>
  <body>
    <?php

      $url = '../storage/app/public/img/';
      // $url = 'storage/img/';

    ?>
    
        <div class="container text-center p-0 mr-0">
          {{-- <header class="mb-auto">
              <div>
              <h3 class="float-md-start mb-0">Nuesta Boda</h3>
              <nav class="nav nav-masthead justify-content-center float-md-end">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                  <a class="nav-link" href="#">Features</a>
                  <a class="nav-link" href="#">Contact</a>
              </nav>
              </div>
          </header> --}}

          <div id="imagePrincipal">
            {{-- <img src="{{ asset($url.'BODA_VIDEOCLIP/2016.jpeg') }}" alt="" id="imgFirst" > --}}
            <img src="{{ asset($url.'portada.jpg') }}" alt="" id="imgFirst" >
          </div>
          
          <div style="margin-top: -27vh;" class="text-white">
            <h2 style="font-family: 'Dancing Script', cursive;font-size: 2.3em;" >Mayra Yazmin</h2>
            <h3 style="font-family: 'Dancing Script', cursive;font-size: 2em;" >&amp;</h3>
            <h2 style="font-family: 'Dancing Script', cursive;font-size: 2.3em;" >David Rodriguez</h2>
            <h1 class="ml3" >Nos casamos</h1>
          </div>

          
          <div class="card" >
            <div class="row ">
              <div class="col">
                <div class="card-body p-1" style="background-color: #FAF8F8">
                  
                  {{-- <h5 class="card-title">Card title</h5> --}}
                  <div class="card-title animate__animated animate__fadeInRight animate__delay color-textGrey mt-5">

                    <h1 class="ml5 ">
                      <span class="text-wrapper">
                        <span class="letters letters-left">Juan</span>
                        <span class="letters ampersand">&amp;</span>
                        <span class="letters letters-right">Andrea</span>
                      </span>
                    </h1>
                    
                    <p class="lead ml3">Estan invitado a nuestra gran ceremonia</p>

                  </div>

                  <div class="portada" >
                    <div id="cuenta"></div>
                  </div>

                  <div class="row justify-content-center information animate__animated animate__fadeInRight animate__delay">

                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 ">
                      <div class="cont ">
                        <div class="hexagon ">
                          <div class="shape">
                            <img src="{{asset($url.'iglesia.jpg')}}">
                            <div class="cont-text">
                              <div class="my-4">
                                <i class="fas fa-church fa-2x"></i>
                                {{-- <i class="fas fa-glass-cheers fa-2x circle-icon"></i> --}}
                                <h3 class="my-2">Ceremonia</h3>
                                <p style="line-height: 1">La ceremonia será el</p>
                                <p style="line-height: 1">12 de JUNIO 2021</p>
                                <p style="line-height: 1">Privada pase de la Laguna</p>
                                <p style="line-height: 1">col. Laguna de la puerta #603, Tamps</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                      <div class="cont">
                        <div class="hexagon ">
                          <div class="shape">
                            <img src="{{asset($url.'brindis.jpg')}}" alt="">
                            <div class="cont-text">
                              <div class="my-4">
                                <i class="fas fa-glass-cheers fa-2x circle-icon"></i>
                                <h3 class="my-2">Recepción</h3>
                                <p style="line-height: 1">12 de JUNIO 2021</p>
                                <p style="line-height: 1">Salon de eventos Caracol</p>
                                <p style="line-height: 1">Fundadores 89506, Cd Madero Tamps</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                      <div class="cont">
                        <div class="hexagon ">
                          <div class="shape">
                            <img src="{{asset($url.'evento.jpg')}}" alt="">
                            <div class="cont-text">
                              <div class="my-4">
                                <i class="fas fa-user-tie fa-2x "></i>
                                <h3 class="my-2">Dress code</h3>
                                <p style="line-height: 1">Formal</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                  </div>

                  <div class="row justify-content-center pictures mb-5 animate__animated animate__fadeInRight animate__delay">
                    <div class="col-6 pictures-section my-3">
                      <img src="{{ asset($url.'BODA_VIDEOCLIP/1.jpeg') }}" alt="">
                    </div>
                    <div class="col-6 pictures-section my-3">
                      <img src="{{ asset($url.'BODA_VIDEOCLIP/OC_19.jpg') }}" alt="">
                    </div>
                    <div class="col-6 pictures-section my-3">
                      <img src="{{ asset($url.'BODA_VIDEOCLIP/2.jpg') }}" alt="">
                    </div>
                    <div class="col-6 pictures-section my-3">
                      <img src="{{ asset($url.'BODA_VIDEOCLIP/2016.jpeg') }}" alt="">
                    </div>
                  </div>

                  <div class="confirm mb-5 text-center color-textGrey">
                    <h3>Confirma tu asistencia</h3>
                    <p>Por favor confirma tu asitencia</p>
                    <a type="button" class="btn" href="https://api.whatsapp.com/send?phone=8127476423&text=Hola,%20soy%20Juan%20y%20confirmo%20nuestra%20asistencia%20a%20tú%20gran%20ceremonia!" target="_blank">CONFRIRMAR ASISTENCIA</a>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          {{-- <main class="px-3 mt-5 animate__animated animate__fadeInRight animate__delay">
              <h1 class="animate__animated animate__lightSpeedInRight">Nos casamos</h1>

              <h1 class="ml5">
                <span class="text-wrapper">
                  <span class="letters letters-left">Juan</span>
                  <span class="letters ampersand">&amp;</span>
                  <span class="letters letters-right">Andrea</span>
                </span>
              </h1>
              
              <p class="lead">Estas invitado a nuestra gran ceremonia</p>
              <p class="lead">
              <a href="#" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Queremos que seas parte de nuestra ceremonia</a>
              </p>
          </main> --}}
          {{-- <footer class="mt-auto text-white-50">
              <p>Cover template for <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>, by <a href="https://twitter.com/mdo" class="text-white">@mdo</a>.</p>
          </footer> --}}

        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
        <script>
          // Wrap every letter in a span
          var textWrapper = document.querySelector('.ml3');
          textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

          anime.timeline({loop: false})
            .add({
              targets: '.ml3 .letter',
              opacity: [0,1],
              easing: "easeInOutQuad",
              duration: 1500,
              delay: (el, i) => 150 * (i+1)
          });

          anime.timeline({loop: false})
          .add({
            targets: '.ml5 .line',
            opacity: [0.5,1],
            scaleX: [0, 1],
            easing: "easeInOutExpo",
            duration: 2700
          }).add({
            targets: '.ml5 .ampersand',
            opacity: [0,1],
            scaleY: [0.5, 1],
            easing: "easeOutExpo",
            duration: 600,
            offset: '-=600'
          }).add({
            targets: '.ml5 .letters-left',
            opacity: [0,1],
            translateX: ["0.5em", 0],
            easing: "easeOutExpo",
            duration: 600,
            offset: '-=300'
          }).add({
            targets: '.ml5 .letters-right',
            opacity: [0,1],
            translateX: ["-0.5em", 0],
            easing: "easeOutExpo",
            duration: 1000,
            offset: '-=200'
          });

        </script>

        <script src="{{ asset('js/simplyCountdown.min.js') }}"></script>
        <script src="{{ asset('js/countdown.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  </body>
</html>
