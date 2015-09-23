<?php include_once '../w1/sources/header.php'; ?>
<style type="text/css">
    .black-overlay{
        background: none;
    }
    .black-overlay-logos{
        text-align: center;
        top: 100%;
        padding-top: -100px;
        margin-bottom: 20px;
        width: 100%;
        height: 100%;
        z-index: 0;
    }
    .logo-individual-home:hover, .black-overlay-logos:hover{

    }

    body.front .affix-top {
        background: rgba(39, 95, 198, 0.55);
    }
    .affix {
        background-color: #478CFF;
        padding-top: 60px;
        padding-bottom: 10px;
    }

    #copyright .bottomLine {                
        background-color: #1E4284;;
        color: white;
    }
    // #DF2A2F

    .carousel-caption {
        position: absolute;
        right: 15%;
        bottom: 50%;
        left: 15%;
        z-index: 10;
        padding-top: 57px;
        padding-bottom: 20px;
        color: #fff;
        text-align: center;
        text-shadow: 0 1px 2px rgba(0,0,0,.6);
    }
    .carousel-caption h3{
        font-size: 80pt;
    }
    .carousel-caption p {
        color: #050A30;
        text-shadow: 2px 2px 7px #000;
        font-size: 25pt;
        font-weight: 500;
    }
    div#about {
        background-color: rgba(240, 248, 255, 0);
    }


    #owl-demo .item{
        margin: 3px;
    }
    #owl-demo .item img{
        display: block;
        width: 100%;
        height: auto;
    }

    .navbar-nav.navbar-right:last-child {
       // margin-right: 30%;
    }
    .navbar-default .navbar-nav>li>a {
        color: rgb(255, 255, 255);
    }
/*
    .navbar-nav.navbar-right:last-child {
        left: 50%;
        position: absolute;
        top: 100%;
        margin-top: -25px;
        background-color: #3668A7;
        margin-left: -200px;
    }
    */
   .navbar-nav.navbar-right {
    left: 50%;
    position: absolute;
    top: 100%;
    margin-top: -40px;
    background-color: #3668A7;
    margin-left: -200px;  
    border-bottom: #143061;
    border-bottom-style: solid;
    border-bottom-width: 5px;
}
</style>
<header>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" data-spy="affix" data-offset-top="0">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- logo del header-->
                <a href="index.php"><img src="./img/logo.png" alt="Logo" width="100pt"/></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse " id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li  class="first leaf"><a href="#" title=""> <span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
                    <li  class="leaf"><a href="#" title="">Inicio</a></li>                    
                    <li  class="leaf"><a href="#" title="">Servicios</a></li>
                    <li  class="leaf"><a href="#" title="">Equipo</a></li>                    
                    <li  class="leaf"><a href="#">Contacto</a></li>
                    <li  class="last leaf"><a href="#" title=""> <span class="glyphicon glyphicon-search" aria-hidden="true"></span></a></li>
                </ul>      </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>

<!--preloader-->
<div class="ip-header">
    <div class="ip-logo">
        <img class="img-responsive preloaderLogo center-block" alt="Preloader" src="http://grupobecm.com/odalba/sites/default/files/bus.png">  </div>

    <div class="ip-loader">
        <svg class="ip-inner" width="60px" height="60px" viewBox="0 0 80 80">
        <path class="ip-loader-circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
        <path id="ip-loader-circle" class="ip-loader-circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
        </svg>
    </div>
</div>
<!--end preloader-->

<!--OVERLAY FOR THE PORTFOLIO MENU // DONT' DELETE IF YOU PLAN TO USE THIS OPTION-->
<div class="container overlay overlay-slidedown">

    <div class="row">

        <div class="overlay-section"></div>

        <div class="col-md-12 ">
            <a class="overlay-close">
                <br><br>
                <img class="img-responsive center-block" src="/odalba/sites/all/themes/md_phoenix/img/xsep.png" alt="close image"  data-toggle="tooltip" title="Close">
            </a>
        </div>
    </div>
</div>
<!--end OVERLAY FOR THE PORTFOLIO MENU // DONT' DELETE IF YOU PLAN TO USE THIS OPTION-->

<div class="region region-content">
    <div id="spb-main-wrapper"><!-- #spb-main-wrapper -->
        <div id="md-pagebuilder" class="md-pagebuilder">
            <div class="md-panel-primary">
                <div id="mdpb-live-content">
                    <div class="md-section-wrapper desktop">
                        <!-- primera carta -->
                        <div id="header-banner" class="md-section spb-section-1">
                            <div class="container-fluid">
                                <div class="row spb-row-11">

                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                        <!-- Indicators -->
                                        <ol class="carousel-indicators">
                                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                            <li data-target="#myCarousel" data-slide-to="1"></li>
                                            <li data-target="#myCarousel" data-slide-to="2"></li>
                                            <li data-target="#myCarousel" data-slide-to="3"></li>
                                        </ol>

                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner" role="listbox">



                                            <div class="item active">
                                                <img src="img/1.jpg" width="100%">
                                                <div class="carousel-caption">
                                                    <h3>Obnibus de Merida</h3>
                                                    <p> La empresa de transportación tipo "charter" con mayor prestigio y trayectoria en México.   </p>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <img src="img/1.jpg" width="100%" >
                                                <div class="carousel-caption">
                                                    <h3>Obnibus de Merida</h3>
                                                    <p> La empresa de transportación tipo "charter" con mayor prestigio y trayectoria en México.   </p>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <img src="img/1.jpg" width="100%" >
                                                <div class="carousel-caption">
                                                    <h3>Obnibus de Merida</h3>
                                                    <p> La empresa de transportación tipo "charter" con mayor prestigio y trayectoria en México.   </p>
                                                </div>
                                            </div>

                                            <div class="item">
                                                <img src="img/1.jpg" width="100%">
                                                <div class="carousel-caption">
                                                    <h3>Obnibus de Merida</h3>
                                                    <p> La empresa de transportación tipo "charter" con mayor prestigio y trayectoria en México.   </p>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- Left and right controls -->
                                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <!-- fin primera carta-->                               
                        <div id="about" class="md-section spb-section-4">
                            <div class="container">

                                <div class="row spb-row-42">
                                    <div class="spb-column spb-column-421 col-lg-12 col-md-12 col-sm-12 col-xs-12 sectionIntro">
                                        <div class="sublayout-column">
                                            <div class="mdpb-subrow sub-row-4211">
                                                <div class="spb-column spb-column-42111 col-xs-12 col-lg-8 col-md-8 col-sm-10 col-md-offset-2 text-center">
                                                    <img src="img/icono_estrella.png" alt="Logo" />
                                                    <h2>Grupo obnibus de merida</h2>
                                                    <div class="spb-custom-phoenix-paragraph">
                                                        <div style="text-align: center;" class="">
                                                            <p style="color:rgb(76, 76, 76)"  data-scroll-reveal="enter bottom move 10px over 1s after 0.2s" >Más de 45 años “haciendo camino”, nos han perfeccionado para poder ofrecer el servicio de autotransporte turístico más especializado y de vanguardia dentro de nuestro país.</p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                                                               
                            </div>
                        </div>
                        <!-- fin segunda seccion -->

                        <div  class="md-section spb-section-1" id="compromiso-banner">
                            <div class="container-fluid" >
                                <div class="row spb-row-11">
                                    <div class="spb-column spb-column-111 col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                        <div class="content">
                                            <div id="block-phoenix-config-phoenix-banner" class="block block-phoenix-config" style="min-height: 600pt">
                                                <style>
                                                    .section_item{
                                                        margin-top: 20%;
                                                    }
                                                </style>


                                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                                <!--/* Intro  */-->
                                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                                <section id="intro">

                                                    <div class="container section_item" >
                                                        <div class="row ">

                                                            <div class="col-md-12 text-center">
                                                                <h1>Compromiso</h1>
                                                            </div>
                                                            <div class="col-md-6 col-md-offset-3 text-center">
                                                                <p>
                                                                    La empresa de transportación tipo "charter" con mayor prestigio y trayectoria en México.                
                                                                </p>
                                                            </div>

                                                            <div class="col-md-6 col-md-offset-3 text-center">
                                                                <a class="btn btn-default">presentacion</a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </section>
                                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                                <!--/* END Intro  */-->
                                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->       



                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- fin tercera seccion-->

                        <div id="about" class="md-section spb-section-4">
                            <div class="container">

                                <div class="row spb-row-42">
                                    <div class="spb-column spb-column-421 col-lg-12 col-md-12 col-sm-12 col-xs-12 sectionIntro">
                                        <div class="sublayout-column">
                                            <div class="mdpb-subrow sub-row-4211">
                                                <div class="spb-column spb-column-42111 col-xs-12 col-lg-8 col-md-8 col-sm-10 col-md-offset-2 text-center">
                                                    <img src="img/icono_pista.png" alt="Logo" />
                                                    <h2>Especialización</h2>
                                                    <div class="spb-custom-phoenix-paragraph">
                                                        <div style="text-align: center;" class="">
                                                            <p style="color:rgb(76, 76, 76)"  data-scroll-reveal="enter bottom move 10px over 1s after 0.2s" >Más de 45 años “haciendo camino”, nos han perfeccionado para poder ofrecer el servicio de autotransporte turístico más especializado y de vanguardia dentro de nuestro país.</p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                                                               
                            </div>
                        </div>
                        <!-- fin cuarta seccion -->

                        <div id="profesionalismo-banner" class="md-section spb-section-1">
                            <div class="container-fluid">
                                <div class="row spb-row-11">
                                    <div class="spb-column spb-column-111 col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                        <div class="content">
                                            <div id="block-phoenix-config-phoenix-banner" class="block block-phoenix-config" style="min-height: 600pt">
                                                <style>
                                                    .section_item{
                                                        margin-top: 25%;
                                                    }
                                                </style>


                                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                                <!--/* Intro  */-->
                                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                                <section id="intro">

                                                    <div class="container section_item" >
                                                        <div class="row ">

                                                            <div class="col-md-12 text-center">
                                                                <h1>Profesionalismo</h1>
                                                            </div>
                                                            <div class="col-md-6 col-md-offset-3 text-center">
                                                                <p>
                                                                    La empresa de transportación tipo "charter" con mayor prestigio y trayectoria en México.                
                                                                </p>
                                                            </div>

                                                            <div class="col-md-6 col-md-offset-3 text-center">
                                                                <a class="btn btn-default">presentacion</a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </section>
                                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                                <!--/* END Intro  */-->
                                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->       



                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- fin quinta seccion-->

                        <div id="about" class="md-section spb-section-4">
                            <div class="container">

                                <div class="row spb-row-42">
                                    <div class="spb-column spb-column-421 col-lg-12 col-md-12 col-sm-12 col-xs-12 sectionIntro">
                                        <div class="sublayout-column">
                                            <div class="mdpb-subrow sub-row-4211">
                                                <div class="spb-column spb-column-42111 col-xs-12 col-lg-10 col-md-8 col-sm-10 col-md-offset-2 text-center">
                                                    <div id="owl-demo">

                                                        <div class="item"><img src="img/2.jpg" alt="Owl Image"></div>
                                                        <div class="item"><img src="img/3.jpg" alt="Owl Image"></div>
                                                        <div class="item"><img src="img/4.jpg" alt="Owl Image"></div>
                                                        <div class="item"><img src="img/5.jpg" alt="Owl Image"></div>
                                                        <div class="item"><img src="img/6.jpg" alt="Owl Image"></div>
                                                        <div class="item"><img src="img/7.jpg" alt="Owl Image"></div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                                                               
                            </div>
                            <!-- fin cuarta seccion-->




                        </div>
                    </div><!-- /.md-primary-panel -->
                </div><!-- /.md-pagebuilder -->
            </div><!-- /#spb-main-wrapper -->  
        </div>

        <section id="footer" class="dark">
            <div class="topLine">
                <div class="container">
                    <div class="row">
                        <div class="region region-footer">
                            <div id="block-phoenix-config-footer-info" class="block block-phoenix-config col-md-12 footerText">

                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="contact-icon">
                                            <h4 data-scroll-reveal="enter left move 10px over 1s after 0.2s" style="    margin-top: 30px;">Contacto</h4>   
                                            <p><i class="glyphicon glyphicon-home"></i> Telefono : +52-00-00-00-00</p>
                                            <p><i class="glyphicon glyphicon-home"></i> email : <a href="">odalba@mail.com</a></p>
                                            <p><i class="glyphicon glyphicon-home"></i> Direcci&oacute;n : </p>

                                        </div>
                                    </div>

                                    <div class="col-md-4">

                                        <div class="contact-icon">
                                            <h4 data-scroll-reveal="enter left move 10px over 1s after 0.2s" style="    margin-top: 30px;">Equipo</h4>   
                                            <div class="row">
                                                <div class="col-xs-4">
                                                    <a href="#" class="thumbnail">
                                                        <img src="http://placehold.it/350x150" class="img-responsive">
                                                    </a>
                                                </div>
                                                <div class="col-xs-4">
                                                    <a href="#" class="thumbnail">
                                                        <img src="http://placehold.it/350x150" class="img-responsive">
                                                    </a>
                                                </div>
                                                <div class="col-xs-4">
                                                    <a href="#" class="thumbnail">
                                                        <img src="http://placehold.it/350x150" class="img-responsive">
                                                    </a>
                                                </div>
                                                <div class="col-xs-4">
                                                    <a href="#" class="thumbnail">
                                                        <img src="http://placehold.it/350x150" class="img-responsive">
                                                    </a>
                                                </div>
                                                <div class="col-xs-4">
                                                    <a href="#" class="thumbnail">
                                                        <img src="http://placehold.it/350x150" class="img-responsive">
                                                    </a>
                                                </div>
                                                <div class="col-xs-4">
                                                    <a href="#" class="thumbnail">
                                                        <img src="http://placehold.it/350x150" class="img-responsive">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">

                                        <div class="contact-icon">
                                            <p>
                                            </p>
                                            <p>
                                                <img src="img/logo_blanco.png"/>    
                                            </p>
                                            <p>
                                                fundados en 1968, somos pioneros en la transportaci&oacute;n
                                                turística por lo que contamos con la trayectoria m&aacute;s amplia y con 
                                                mayor prestigio en M&eacute;xico.
                                            </p>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section id="copyright" class="dark">

            <div class="bottomLine">
                <strong data-scroll-reveal="enter left move 10px over 1s after 0.2s">Todos los derechos reservados. </strong>Aviso de privacidad
            </div>
        </section>
    </div></div>    <script>
        $.backstretch('img/fondo.jpg');
        $("#compromiso-banner").backstretch('./img/compromiso.jpg');
        $("#profesionalismo-banner").backstretch('./img/profesionalismo.jpg');

        $(document).ready(function () {

            $("#owl-demo").owlCarousel({
                autoPlay: 3000, //Set AutoPlay to 3 seconds
                responsive: true,
                items: 3,
                itemsDesktop: [1199, 3],
                itemsDesktopSmall: [979, 3]

            });

        });

</script>

<?php include_once '../w1/sources/footer.php'; ?>