<style type="text/css">
    body{
        font-family: 'Dosis', sans-serif !important;
        font-weight: 400 !important; 

    }
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
    */
    .ip-header {
        position: fixed;
        top: 0;
        z-index: 1050;
        min-height: 480px;
        width: 100%;
        height: 100%;
        background: #3A5077;
    }

    .navbar-default .navbar-nav>li>a:hover {
        color: rgb(113, 133, 166);
        background-color: transparent;
    }

    .color-white{
        color:white;
    }
    .clip-circle {
        clip-path: circle(60px at center);
    }
    img.clip-circle {
        border-radius: 50%;
    }
    .color-blue {
        color: #1E4283;
    }
    .section_item {
        margin-top: 10% !important; 
    }
    #copyright .bottomLine {                
                background-color: #1E4284;;
                color: white;
            }
            
    /*
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<!-- RECUADROS SERVICIOS  -->
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
*/
#servicios{
    width: 80%;
    margin: 0px auto;
}
.recuadro-servicio{
  margin: 0px !important;
  padding: 0px !important;
}
.recuadro-servicio .hover-bg{
   /* height: 246px;
    width:  279px; */
    overflow: hidden;
    position: relative;
    
}

.hover-bg .hover-text {
    position: absolute;
    text-align: center;
    margin: 0 auto;
    color: #ffffff;
    background: rgba(0, 0, 0, 0.66);
    padding: 25% 0;
    height: 100%;
    width: 100%;
    opacity: 0;
    transition: all 0.5s;
}
.hover-bg .hover-text>h4{
    opacity: 0;
    -webkit-transform: translateY(100%);
    transform: translateY(100%);
    transition: all 0.3s;
    letter-spacing: 3px;
}
.hover-bg:hover .hover-text>h4{
    opacity: 1;
    -webkit-backface-visibility:hidden;
    -webkit-transform: translateY(0);
    transform: translateY(0);
}
.hover-bg .hover-text>i{
    opacity: 0;
    -webkit-transform: translateY(0);
    transform: translateY(0);
    transition: all 0.3s;
}
.hover-bg:hover .hover-text>i{
    opacity: 1;
    -webkit-backface-visibility:hidden;
    -webkit-transform: translateY(100%);
    transform: translateY(100%);
}
.hover-bg:hover .hover-text{
    opacity: 1;
}
.intro-servicios{
    background: rgba(0, 0, 0, 0.66);
}
bt-25{
    margin-bottom: 25px;
}
/*
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<!-- END RECUADROS SERVICIOS  -->
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
*/
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
                <a href="index.php"><img src="./img/logo_blanco.png" alt="Logo" width="100pt"/></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right" id="navbar-collapse">
                <ul class="nav navbar-nav">

                    <li  class="leaf"><a href="../index.html" title=""><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> Principal</a></li>                    
                    <li  class="leaf"><a href="index.php" title=""><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Inicio</a></li>                    
                    <li  class="leaf"><a href="servicios.php" title="">Servicios</a></li>
                    <li  class="leaf"><a href="equipo.php" title="equipo">Equipo</a></li>                    
                    <li  class="leaf"><a href="#">Contacto</a></li>

                </ul>      </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>