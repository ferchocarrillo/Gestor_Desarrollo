<!DOCTYPE html>
<!--
Landing page based on Pratt: http://blacktie.co/demo/pratt/
-->
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Adminlte-laravel - {{ trans('adminlte_lang::message.landingdescription') }} ">
    <meta name="author" content="Sergi Tur Badenas - acacha.org">

    <meta property="og:title" content="Adminlte-laravel" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Adminlte-laravel - {{ trans('adminlte_lang::message.landingdescription') }}" />
    <meta property="og:url" content="http://demo.adminlte.acacha.org/" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x600.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x314.png" />
    <meta property="og:sitename" content="demo.adminlte.acacha.org" />
    <meta property="og:url" content="https://demo.adminlte.acacha.org" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@acachawiki" />
    <meta name="twitter:creator" content="@acacha1" />

    <title>{{ trans('adminlte_lang::message.landingdescriptionpratt') }}</title>

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/all-landing.css') }}" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

</head>

<body data-spy="scroll" data-target="#navigation" data-offset="50">

<div id="app" v-cloak>
    <!-- Fixed navbar -->
    <div id="navigation" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#home"><b>Inicio</b></a>
                <a href="#desc" class="navbar-brand">{{ trans('adminlte_lang::message.description') }}<b></b></a>
                <a href="#showcase" class="navbar-brand">{{ trans('adminlte_lang::message.showcase') }}<b></b></a>
                <a href="#contact"  class="navbar-brand">{{ trans('adminlte_lang::message.contact') }}<b></b> </a>

            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">





                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">{{ trans('adminlte_lang::message.login') }}</a></li>
                        <li><a href="{{ url('/register') }}">{{ trans('adminlte_lang::message.register') }}</a></li>
                    @else
                        <li><a href="/home">{{ Auth::user()->name }}</a></li>
                    @endif
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>


    <section id="home" name="home">
        <div id="headerwrap">
            <div class="container">
                <div class="row centered">
                    <div class="col-lg-12">
                        <h1  >Gestor <b><a href="#">Area de Desarrollo</a></b></h1>
                        <h3> <a href="https://mentius.com.co/"><img src="img\isotipo-slogan.png" alt="logo mentius" width="15%"></a> {{ trans('adminlte_lang::message.laravelpackage') }}
                           </h3>

                    </div>



                    <center> <img class="img-responsive" src="{{ asset('img/app-bg.gif') }}" alt=""> </center>



                </div>
            </div> <!--/ .container -->
        </div><!--/ #headerwrap -->
    </section>

    <section id="desc" name="desc">
        <!-- INTRO WRAP -->
        <div id="intro">
            <div class="container">
                <div class="row centered">
                    <h1 class="mensaje2">{{ trans('adminlte_lang::message.designed') }}</h1>
                    <br>
                    <br>
                    <div class="col-lg-4">
                        <img src="{{ asset('img\1.gif') }}" alt="" width="250px">
                        <h3 class="mensaje1">{{ trans('adminlte_lang::message.community') }}</h3>
                        <p class="parrafo1"> <a href="#footerwrap">{{ trans('adminlte_lang::message.githubproject') }}</a>, Trabajaremos juntos</a></p>
                    </div>
                    <div class="col-lg-4">
                        <img src="{{ asset('/img/2.gif') }}" alt="" width="250px">
                        <h3  class="mensaje1" >{{ trans('adminlte_lang::message.schedule') }}</h3>
                        <p class="parrafo1">Cuentanos tus ideas, Las haremos realidad!!</p>
                    </div>
                    <div class="col-lg-4">
                        <img src="{{ asset('img\light_ai_design_by_gleb.gif') }}" alt="" height="250"  width="350px">
                        <h3 class="mensaje1">{{ trans('adminlte_lang::message.monitoring') }}</h3>
                        <p class="parrafo1">Transformando nuestro negocio con el diseño de productos y servicios.</p>
                    </div>
                </div>
                <br>

            </div> <!--/ .container -->
        </div><!--/ #introwrap -->

        <!-- FEATURES WRAP -->
        <div id="features">
            <div class="container">
                <div class="row">
                    <h1 class="mensaje3">{{ trans('adminlte_lang::message.whatnew') }}</h1>
                    <br>
                    <br>
                    <div class="col-lg-6 centered">
                        <img class="centered" src="{{ asset('/img/14.gif') }}" alt="" style="border-radius:3em">
                    </div>

                    <div class="col-lg-6">
                        <h3 class="mensaje1">{{ trans('adminlte_lang::message.features') }}</h3>
                        <br>
                        <!-- ACCORDION -->
                        <div class="accordion ac" id="accordion2">
                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                                        {{ trans('adminlte_lang::message.design') }}
                                    </a>
                                </div><!-- /accordion-heading -->
                                <div id="collapseOne" class="accordion-body collapse in">
                                    <div class="accordion-inner">
                                        <p class="parrafo1" >Nuestra labor mas importante, es la de crear soluciones para todos los involucrados en la industia, haciendo de nuestra empresa la proveedora de mejoras a todo nivel.</p>
                                    </div><!-- /accordion-inner -->
                                </div><!-- /collapse -->
                            </div><!-- /accordion-group -->
                            <br>

                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                                        {{ trans('adminlte_lang::message.retina') }}
                                    </a>
                                </div>
                                <div id="collapseTwo" class="accordion-body collapse">
                                    <div class="accordion-inner">
                                        <p>Siempre atentos a las mejoras que apliquen a nuestra industria, para hacerlas realidad, creando nuestras propias soluciones.</p>
                                    </div><!-- /accordion-inner -->
                                </div><!-- /collapse -->
                            </div><!-- /accordion-group -->
                            <br>

                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                                        {{ trans('adminlte_lang::message.support') }}
                                    </a>
                                </div>
                                <div id="collapseThree" class="accordion-body collapse">
                                    <div class="accordion-inner">
                                        <p>Atendemos las necesidades de la empresa asi como las de nuestros clientes, encamiados al crecimiento de todos.</p>
                                    </div><!-- /accordion-inner -->
                                </div><!-- /collapse -->
                            </div><!-- /accordion-group -->
                            <br>

                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
                                        {{ trans('adminlte_lang::message.responsive') }}
                                    </a>
                                </div>
                                <div id="collapseFour" class="accordion-body collapse">
                                    <div class="accordion-inner">
                                        <p>El futuro de las tecnologias aplicadas el negocio, mejoramos los procesos de modernizacion tecnoligica, supernando el rezago respecto al mundo en general.</p>
                                    </div><!-- /accordion-inner -->
                                </div><!-- /collapse -->
                            </div><!-- /accordion-group -->
                            <br>
                        </div><!-- Accordion -->
                    </div>
                </div>
            </div><!--/ .container -->
        </div><!--/ #features -->
    </section>

    <section id="showcase" name="showcase">
        <div id="showcase">
            <div class="container">
                <div class="row">
                    <h1 class="mensaje3">{{ trans('adminlte_lang::message.screenshots') }}</h1>
                    <br>
                    <div class="col-lg-8 col-lg-offset-2">
                        <div id="carousel-example-generic" class="carousel slide">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <a href="http://192.168.3.209/"><img src="{{ asset('/img/desarrollo1.png') }}" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href="http://192.168.3.201/"><img src="{{ asset('/img/desarrrollo2.png') }}" alt=""></a>
                                </div>
                                <div class="item">
                                   <a href="http://192.168.3.213/"><img src="{{ asset('/img/desarrollo3.png') }}" alt=""  ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <br>
            </div><!-- /container -->
        </div>
    </section>

    <section id="contact" name="contact">
        <div id="footerwrap">
            <div class="container">
                <div class="col-lg-5">
                   <strong><h3>{{ trans('adminlte_lang::message.address') }}</h3></strong>
                    <p>
                      <strong>Sede Niza,<br/></strong>
                        Av Suba # 127D - 61<br/>
                        Bogota<br/>
                        Colombia
                    </p>

                    <p>
                       <strong> Sede Santa María del Lago,<br/></strong>
                        Carrera 73 A # 77 A - 44<br/>
                        Bogota<br/>
                        Colombia
                    </p>

                </div>

                <div class="col-lg-7">
                    <h3>{{ trans('adminlte_lang::message.dropus') }}</h3>
                    <br>
                    <form role="form" action="{{ url('/landing')}}" method="post" enctype="plain">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="nombre">{{ trans('adminlte_lang::message.yourname') }}</label>
                            <input type="text" name="nombre" class="form-control" id="nombre" placeholder="{{ trans('adminlte_lang::message.yourname') }}">
                        </div>
                        <div class="form-group">
                            <label for="correo">{{ trans('adminlte_lang::message.emailaddress') }}</label>
                            <input type="mail" name="correo" class="form-control" id="correo" placeholder="{{ trans('adminlte_lang::message.enteremail') }}">
                        </div>
                        <div class="form-group">
                            <label>{{ trans('adminlte_lang::message.yourtext') }}</label>
                            <textarea class="form-control"  id="sugerencia" name="sugerencia" rows="3"></textarea>
                        </div>
                        <br>
                        <input type="checkbox" class="form-check-input" id="conditions" name="conditions" value="1" required>
                        <label class="form-check-label" for="conditions">Aceptar <a href="/politica">Condiciones de uso</a></label>
                        <br>
                        <button type="submit" class="btn btn-large btn-success">{{ trans('adminlte_lang::message.submit') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <canvas></canvas>

    <footer>
        <div id="c">
            <div class="container">
                <p>
                    {{-- <a href="https://github.com/acacha/adminlte-laravel"></a><b>admin-lte-laravel</b></a>. {{ trans('adminlte_lang::message.descriptionpackage') }}.<br/> --}}
                     <strong>Copyright &copy; 2021 <a href="http://Mentius.com.co">Mentius.com.co</a>.{{--</strong> {{ trans('adminlte_lang::message.createdby') }} <a href="http://acacha.org/sergitur">Sergi Tur Badenas</a>. {{ trans('adminlte_lang::message.seecode') }} <a href="https://github.com/acacha/adminlte-laravel">Github</a> --}}
                    <br/>
                    Proyecto Elaborado Por {{ trans('adminlte_lang::message.diseñadoPor') }}  <a href="#"></a>
                    <br/>
                    {{-- Pratt Landing Page PROVA {{ trans('adminlte_lang::message.createdby') }} <a href="http://www.blacktie.co">BLACKTIE.CO</a> --}}
                </p>

            </div>
        </div>
    </footer>

</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ url (mix('/js/app-landing.js')) }}"></script>
<script>
    $('.carousel').carousel({
        interval: 3500
    })
</script>

<script>// Soltar chispas al rebotar, no crear estrellas con set timeout
    var canvas = document.querySelector("canvas"),
        c = canvas.getContext("2d");
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;

    var unAltura = canvas.height/8,
        unAncho = canvas.width/8;


    function crearFondo(){
      c.shadowBlur = 0;
      c.fillStyle = "rgba(0, 0, 0, .4)";
      c.fillRect(0, 0, canvas.width, canvas.height);

      c.fillStyle="rgb(42,71,87)";
      c.beginPath();
      c.moveTo(0, unAltura * 6);
      c.lineTo(unAncho * 4, unAltura * 0.7);
      c.lineTo(unAncho * 8, unAltura * 6);
      c.lineTo(0, unAltura * 6);
      c.fill();
      c.closePath();

      c.fillStyle ="rgb(32,55,67)";
      c.beginPath();
      c.moveTo(0, unAltura * 8);
      c.lineTo(0, unAltura * 5);
      c.lineTo(unAncho * 1.5, unAltura * 2);
      c.lineTo(unAncho * 4, unAltura * 6);
      c.lineTo(unAncho * 6.5, unAltura * 2);
      c.lineTo(unAncho*8 , unAltura * 5);
      c.lineTo(unAncho*8, unAltura * 8);
      c.lineTo(0, unAltura * 8 );
      c.fill();
      c.closePath();

      c.fillStyle="rgb(26,44,54)";
      c.beginPath();
      c.moveTo(0, unAltura * 8);
      c.lineTo(0, unAltura * 6);
      c.lineTo(unAncho*1.3, unAltura *4);
      c.lineTo(unAncho*2.6, unAltura * 6);
      c.lineTo(unAncho*3.9, unAltura *4);
      c.lineTo(unAncho*5.2, unAltura * 6);
      c.lineTo(unAncho*6.5, unAltura *4);
      c.lineTo(unAncho*8, unAltura * 6);
      c.lineTo(unAncho*8, unAltura *8);
      c.fill();
    };


    // Propiedades fijas
    var velInicialX = 3,
        velInicialY = 0.1,
        cocienteRebote = 0.6,
        gravedad = 0.1,
        estrellas ={},
        indiceEstrellas = 0;

    function Estrella(){
      this.radio = 5 + (Math.random() * 10);
      this.inicialX = this.radio + (Math.random() * (canvas.width - (this.radio*2)));
      this.inicialY = -100 + (Math.random() * - 500);
      this.x = this.inicialX;
      this.y = this.inicialY;
      this.velX = velInicialX;
      this.velY = velInicialY;
      this.life = 0;
      this.maxLife = 4;
      indiceEstrellas++;
      estrellas[indiceEstrellas] = this;
      this.id = indiceEstrellas;
    };

    Estrella.prototype.actualizar = function (){

      // Tiempo de vida
      if (this.life >= this.maxLife || this.radio <1.5){
          delete estrellas[this.id];
      }

      // Rebote en las paredes
      if (this.x + this.velX > canvas.width- this.radio ||
          this.x + this.velX < this.radio){
        this.velX = -this.velX;
      }

      // Rebote en el suelo
      if (this.y + this.velY + this.radio > canvas.height ){
        this.velY = - this.velY * cocienteRebote;
        this.velX = this.velX * (cocienteRebote + 0.3);
        this.radio = this.radio * cocienteRebote;
        this.life++;
        // Llamar a funcion que suelte chispas
        for (var i = Math.round(Math.random() * 6); i<7; i++){
          // new Chispas(this.x, this.y);
        }
      }

      this.x += this.velX;
      this.y += this.velY;
      this.velY += gravedad;
    };

    Estrella.prototype.dibujar = function (){/*sombra de cada bola*/
      c.beginPath();
      c.fillStyle="white";
      c.shadowBlur = 20;
      c.shadowColor = "white";
      c.arc(this.x,this.y, this.radio, 0, Math.PI * 2, false);
      c.fill();
      this.actualizar();
    }

    function Chispas(inicialX, inicialY){
      this.x = inicialX;
      this.y = inicialY;
    };


    setInterval(()=>{new Estrella()}, 2000);

    function animacion (){
      crearFondo();
      for (var i in estrellas){
        estrellas[i].dibujar();
      }
      requestAnimationFrame(animacion);
      // console.table(estrellas);
    }
    animacion();
    </script>
</body>
</html>
