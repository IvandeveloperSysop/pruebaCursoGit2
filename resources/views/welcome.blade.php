
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.82.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Nuestra Boda</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css"; />

    

    <!-- Bootstrap core CSS -->
    {{-- <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"> --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Roboto:wght@300&family=Hind+Siliguri:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,600,700,900&display=swap" rel="stylesheet">
    <!-- Favicons -->
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>


    
    <!-- Custom styles for this template -->
    <link href="{{asset('css/cover.css')}}" rel="stylesheet">
  </head>
  <body>
    <?php

      $url = '../storage/app/public/img/';
      // $url = 'storage/img/';

    ?>
    
        <div class="container text-center ">
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
          <div class="row">
            <div class="col p-0">
                <div class="card" style="padding: 0" >
                <div class="card-body p-1" style="background-color: #FAF8F8">
                  <h1 class="ml3 mt-5 mb-3" >Nos casamos</h1>
                  
                  <div id="imagePrincipal" class="animate__animated animate__fadeIn animate__delay-2s">
                    {{-- <img src="{{ asset($url.'BODA_VIDEOCLIP/2016.jpeg') }}" alt="" id="imgFirst" > --}}
                    <img src="{{ asset($url.'portada.jpg') }}" id="imgFirst" >
                  </div>
                  <input type="hidden" id="token" value="{{ $users->token }}">
                  <div  class="text-dark mt-2">
                    
                    <h4 class="ml6 mt-4">
                      {{-- style="margin-top: -16vh" --}}
                      <span class="text-wrapper">
                        <span class="letters letters-left mb-3" style="font-family: 'Dancing Script', cursive;font-size: 1.5em;">Mayra Yazmin</span><br>
                        <span class="letters ampersand mb-3" style="font-family: 'Dancing Script', cursive;font-size: 1em;" >&amp;</span><br>
                        <span class="letters letters-right" style="font-family: 'Dancing Script', cursive;font-size: 1.5em;">David Rodriguez</span>
                      </span>
                    </h4>
                    
                  </div>
                  {{-- <h5 class="card-title">Card title</h5> --}}
                  <div class="card-title animate__animated animate__fadeInRight animate__delay color-textGrey mt-5">

                    <p class="ml5">
                      <span class="">
                        <span class="letters letters-left " style="display: block;font-size: 40px">Hola</span>
                        {{-- <span class="letters ampersand">&amp;</span> --}}
                        <span class="letters letters-right ">{{ $users->name }}</span>
                      </span>
                    </p>
                    
                    <div id="persons" class="animate__animated animate__fadeInRight animate__delay-2s">

                      @if ($users->persons > 1)
                        <p class="lead">Estan invitados a nuestra gran ceremonia</p>
                        <h3 class="mt-5">Invitación para <br> {{ $users->persons }} personas</h3>
                      @else
                        <p class="lead ">Estas invitado a nuestra gran ceremonia</p>
                        <h3 class="mt-5">Invitación para <br> {{ $users->persons }} persona</h3>
                      @endif
                    </div>

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
                      <img src="{{ asset($url.'BODA_VIDEOCLIP/1_2.jpeg') }}" alt="">
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

                  @if ($users->status != 1)
                    <div class="confirm mb-5 text-center color-textGrey" id="confirmAsist">
                      <h3>Confirma tu asistencia</h3>
                      <p>Por favor confirma tu asitencia</p>
                      <a type="button" class="btn"  onclick="confirmIvitacion()">CONFRIRMAR ASISTENCIA</a>

                    </div>
                    <div style="display: none">
                      <a href="https://api.whatsapp.com/send?phone=528331416353&text=Hola,%20soy%20{{$users->name}}%20y%20confirmo%20nuestra%20asistencia%20a%20tú%20gran%20ceremonia!" target="_blank" id="whatRedirect">wha</a>
                    </div>
                     {{-- target="_blank" --}}
                  @else
                    <div class="confirm mb-5 text-center">
                      <h3>Recibimos tu confirmación a nuestro gran evento</h3>
                      <p>Los esperamos con ansias</p>
                    </div>
                  @endif
                  
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
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script>
          urlG = '/boda/public/';
          // urlG = '/';
        </script>


        <script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
        <script src="{{ asset('js/simplyCountdown.min.js') }}"></script>
        <script src="{{ asset('js/countdown.js') }}"></script>
        <script>
          
          function confirmIvitacion(){

            token = document.getElementById('token').value;

            Swal.fire({
              text: "Deseas confirmar tu asitencia?",
              icon: 'success',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Si, deseo confirmar!'
            }).then((result) => {
              if (result.isConfirmed) {
                $.ajax({
                  url: urlG + 'confirmStatus/' + token,
                  data: { "_token": $("meta[name='csrf-token']").attr("content") },
                  type : 'POST',
                  dataType: 'json',
                  success: function(respuesta) {
                      // console.log(respuesta);
                      if(respuesta.result == 'ok'){
                        document.getElementById('confirmAsist').innerHTML = ' <h3>Recibimos tu confirmación a nuestro gran evento</h3><p>Los esperamos con ansias</p>';
                        Swal.fire({
                          position: 'top-end',
                          icon: 'success',
                          title: 'Se confirmo tu asitencia',
                          showConfirmButton: false,
                          timer: 1500
                        });
                        document.getElementById('whatRedirect').click();
                      }else{
                        console.log(respuesta);
                      }
                  },
                  error: function(err) {
                      console.log(err);
                  }
                });
              }
            });


          }


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

          anime.timeline({loop: false})
          .add({
            targets: '.ml6 .line',
            opacity: [0.5,1],
            scaleX: [0, 1],
            easing: "easeInOutExpo",
            duration: 2700
          }).add({
            targets: '.ml6 .letters-left',
            opacity: [0,1],
            translateX: ["0.5em", 0],
            easing: "easeOutExpo",
            duration: 900,
            offset: '-=300'
          }).add({
            targets: '.ml6 .ampersand',
            opacity: [0,1],
            scaleY: [0.5, 1],
            easing: "easeOutExpo",
            duration: 1000,
            offset: '-=600'
          }).add({
            targets: '.ml6 .letters-right',
            opacity: [0,1],
            translateX: ["-0.5em", 0],
            easing: "easeOutExpo",
            duration: 1200,
            offset: '-=200'
          });

          // .add({
          //   targets: '.ml5 .ampersand',
          //   opacity: [0,1],
          //   scaleY: [0.5, 1],
          //   easing: "easeOutExpo",
          //   duration: 600,
          //   offset: '-=600'
          // })

        </script>
  </body>
</html>
