<?php $lugar_actual = "flota|"; ?>
<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->

    <head>

        <title>Inicio | Grupo Omnibus de Alba</title>
        <?php include './head.php'; ?>

        <style>
            .intro-container h1{
                letter-spacing: 1px;
            }
            .intro-container {
                width: 90%;
                margin-top: 7%;
            }
            .mg-
        </style>

    </head>
    <body class="html front not-logged-in no-sidebars page-node page-node- page-node-65 page-type-page-builder spb-enabled i18n-es"
          id="bigWrapper" data-spy="scroll" data-target=".navbar-default" data-offset="100">
        <div id="page-wrapper">
            <div id="page">
                <div id="top"></div>
                <?php include './header.php'; ?>

                <div class="region region-content">
                    <div id="spb-main-wrapper"><!-- #spb-main-wrapper -->
                        <div id="md-pagebuilder" class="md-pagebuilder">
                            <div class="md-panel-primary">
                                <div id="mdpb-live-content">
                                    <div class="md-section-wrapper desktop">
                                        <div id="header-banner" class="md-section spb-section-1">
                                            <div class="container-fluid">
                                                <div class="row spb-row-11">
                                                    <div class="spb-column spb-column-111 col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                        <div class="content">
                                                            <div id="block-phoenix-config-phoenix-banner"
                                                                 class="block block-phoenix-config">

                                                                <div class="container  animaper anim ">


                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="about" class="md-section spb-section-4 white" >
                                            <div class="container">
                                                <div class="row ">
                                                    <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12 sectionIntro">
                                                        <div class="sublayout-column">
                                                            <div class="mdpb-subrow sub-row-4211">


                                                                <div class="col-md-6 img-flota-ind">
                                                                    <img src="http://lorempixel.com/400/500/">
                                                                </div>
                                                                <div class="col-md-6 info-flota-ind text-center" >
                                                                    <h1>Viaggio <span class="text-theme">900</span></h1>
                                                                    <hr class="text-theme">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                                    <h3 class="text-theme">Características</h3>
                                                                    <ul>
                                                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </li>
                                                                        <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                                                        <li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</li>
                                                                        <li>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
                                                                    </ul>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div  class="md-section spb-section-2">
                                            <div class="row parallax-window text-center" data-parallax="scroll" data-image-src="img/flota-ind-sloga.jpg" style="height: 300px;">
                                                <div class="container-fluid ours-history">
                                                    <div class="col-md-8 col-md-offset-2" style="margin-top: -70px;">
                                                        <div class="slider multiple-items text-center">
                                                            <div>
                                                                <img data-lazy="http://lorempixel.com/200/200/"/>
                                                            </div>

                                                            <div>
                                                                <img data-lazy="http://lorempixel.com/200/201/"/>
                                                            </div>

                                                            <div>
                                                                <img data-lazy="http://lorempixel.com/200/202/"/>
                                                            </div>

                                                            <div>
                                                                <img data-lazy="http://lorempixel.com/200/203/"/>
                                                            </div>

                                                            <div>
                                                                <img data-lazy="http://lorempixel.com/200/204/"/>
                                                            </div>

                                                            <div>
                                                                <img data-lazy="http://lorempixel.com/202/200/"/>
                                                            </div>

                                                            <div>
                                                                <img data-lazy="http://lorempixel.com/201/200/"/>
                                                            </div>

                                                            <div>
                                                                <img data-lazy="http://lorempixel.com/204/200/"/>
                                                            </div>

                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- /.md-primary-panel -->
                        </div>
                        <!-- /.md-pagebuilder -->
                    </div>
                    <!-- /#spb-main-wrapper -->
                </div>
                <?php include './footer.php'; ?>
            </div>
        </div>
        <?php include './scripts.php'; ?>
        <script type="text/javascript">
            $('.multiple-items').slick({
                lazyLoad: 'ondemand',
                slidesToShow: 4,
                infinite: true,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000
            });
        </script>
    </body>
</html>
<script>
    $.backstretch([
        "img/bg-03.jpg"
    ], {duration: 3000, fade: 750});
</script>