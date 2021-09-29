<?php
    session_start();
    //include('login/session.php');
    if(!isset($_SESSION['id'])){
        header("location:index.php");
        die();
    }
   include('menus/menuizq.php');
   //include('menus/menusup.php');
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>DIACO</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/educate-custon-icon.css">
    
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive 44f834CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
   

    <!-- Start Welcome area -->
    <br>
    <div class="all-content-wrapper">
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="principal.php"><img class="main-logo" src="#" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
   
        <?php
              include('menus/menusup.php');
        ?>
        <div class="header-advance-area">
           
           <!-- Mobile Menu start -->
           
           <!-- Mobile Menu end -->
        </div>
        <div class="widget-program-box mg-tb-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel widget-int-shape responsive-mg-b-30">
                            <div class="panel-body">
                                <div class="text-center content-box">
                                    <h2 class="m-b-xs"> USUARIOS </h2>
                                    <p class="font-bold text-success">Registro de Usuario</p>
                                    <div class="m icon-box">
                                        <i class="educate-icon educate-star-half"></i>
                                    </div>
                                    <p class="small mg-t-box">
                                        Usted podra registrar usuarios para el uso del Sistema
                                    </p>
                                    <button class="btn btn-success widget-btn-1 btn-sm" onclick="window.location.href='1Usuarios.php'">ir a Usuario</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel widget-int-shape responsive-mg-b-30">
                            <div class="panel-body">
                                <div class="text-center content-box">
                                    <h2 class="m-b-xs">COMERCIOS</h2>
                                    <p class="font-bold text-info">Mantenimiento Comercios</p>
                                    <div class="m icon-box">
                                        <i class="educate-icon educate-miscellanous"></i>
                                    </div>
                                    <p class="small mg-t-box">
                                        Podra ver y registrar a los comercios y sucursales 
                                    </p>
                                    <button class="btn btn-info widget-btn-2 btn-sm" onclick="window.location.href='2Comercios.php'">ir a Comercios</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel widget-int-shape responsive-mg-b-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                            <div class="panel-body">
                                <div class="text-center content-box">
                                    <h2 class="m-b-xs">UBICACIONES</h2>
                                    <p class="font-bold text-warning">Mantenimiento de ubicaciones</p>
                                    <div class="m icon-box">
                                        <i class="educate-icon educate-interface"></i>
                                    </div>
                                    <p class="small mg-t-box">
                                        Podra listar las regiones, Departamentos y municipios donde estan ubicados los comercios
                                    </p>
                                    <button class="btn btn-warning widget-btn-3 btn-sm"onclick="window.location.href='3Ubicaciones.php'">ir a Ubicaciones</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel widget-int-shape res-tablet-mg-t-30 dk-res-t-pro-30">
                            <div class="panel-body">
                                <div class="text-center content-box">
                                    <h2 class="m-b-xs">REPORTES</h2>
                                    <p class="font-bold text-danger" >Compra de Productos</p>
                                    <div class="m icon-box">
                                        <i class="educate-icon educate-charts"></i>
                                    </div>
                                    <p class="small mg-t-box">
                                        podra generas estadisticas de las quejas realizadas por los consumidores
                                    </p>
                                    <button class="btn btn-danger widget-btn-4 btn-sm" onclick="window.location.href='4Reportes.php'">ir a Reportes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="widget-program-bg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel shadow-inner hbggreen bg-1 responsive-mg-b-30">
                            <div class="panel-body">
                                <div class="text-center content-bg-pro">
                                    <h3>Usuarios del Sistema</h3>
                                    <p class="text-big font-light">
                                        5
                                    </p>
                                    <small>
												
											</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel shadow-inner hbgblue bg-2 responsive-mg-b-30">
                            <div class="panel-body">
                                <div class="text-center content-bg-pro">
                                    <h3>Comercios Registrados</h3>
                                    <p class="text-big font-light">
                                        30
                                    </p>
                                    <small>
											
											</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel shadow-inner hbgyellow bg-3 responsive-mg-b-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                            <div class="panel-body">
                                <div class="text-center content-bg-pro">
                                    <h3>Ubicaciones</h3>
                                    <p class="text-big font-light">
                                    <?php echo $_SESSION['name'];?>
                                    </p>
                                    <small>
											
											</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel shadow-inner hbgred bg-4 res-tablet-mg-t-30 dk-res-t-pro-30">
                            <div class="panel-body">
                                <div class="text-center content-bg-pro">
                                    <h3>Quejas</h3>
                                    <p class="text-big font-light">
                                       50
                                    </p>
                                    <small>
												
											</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="product-sales-area mg-tb-30">
            <div class="container-fluid">
                
            </div>
        </div>
        <!--bloque de html  -->
        
        <!-- Fin Bloque html -->
       <!-- Inicio Bloque Html  perfil angela dominic facebook--> 
      
        <!-- Fin Bloque html -->
        <div class="product-sales-area mg-tb-30">
            
        </div>

        <!-- Inicio  Bloque html -->
        
        <!-- Fin Bloque html -->

        <?php
  
   include('menus/footer.php');
  
        ?>
        
    </div>

    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    
		
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
   
</body>

</html>