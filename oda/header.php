<header>
    <div class="row text-center header-info-contacto">
        <div class="col-md-4 text-right text-white ma-top-10">
            <i class="fa fa-phone"></i> Tel. +52 (55) 55 26 54 90
        </div>
        <div class="col-md-8 text-left text-white ma-top-10">
            <i class="fa fa-envelope"></i> E-mail. info@adealba.com
        </div>
    </div>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" data-spy="affix" data-offset-top="0">

        <div class="container-fluid">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="../img/logos-index/oda.png" alt="Logo" style="margin-top: -29px; width: 150px; height: auto;"/>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="first ">
                        <a href="index.php" title="" class="<?php echo($lugar_actual = "index" ? 'active' : '' ); ?>"><i class="fa fa-home"></i></a>
                    </li>
                    <li class=" <?php echo($lugar_actual = "servicios" ? 'active' : '' ); ?>"><a href="servicios.php" title="">Servicios</a></li>
                    <li class=" <?php echo($lugar_actual = "flota" ? 'active' : '' ); ?>"><a href="flota.php">Flota</a></li>
                    <li class="last  <?php echo($lugar_actual = "contacto" ? 'active' : '' ); ?>"><a href="contacto.php">Contacto</a></li>
                </ul>
            </div>

            <!-- /.navbar-collapse -->

        </div>
        <!-- /.container-fluid -->
    </nav>
</header>
<!--preloader-->
<div class="ip-header">
    <div class="ip-logo">
        <img class="img-responsive preloaderLogo center-block" alt="Preloader"
             src="http://grupobecm.com/odalba/sites/default/files/bus.png"></div>

    <div class="ip-loader">
        
        <svg class="ip-inner" width="60px" height="60px" viewBox="0 0 80 80">
        <path class="ip-loader-circlebg"
              d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
        <path id="ip-loader-circle" class="ip-loader-circle"
              d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
        </svg>
        
        <img class="ip-inner ip-loader-circle" src="img/loader.gif" />
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
                <img class="img-responsive center-block" src="/odalba/sites/all/themes/md_phoenix/img/xsep.png"
                     alt="close image" data-toggle="tooltip" title="Close">
            </a>
        </div>
    </div>
</div>
<!--end OVERLAY FOR THE PORTFOLIO MENU // DONT' DELETE IF YOU PLAN TO USE THIS OPTION-->