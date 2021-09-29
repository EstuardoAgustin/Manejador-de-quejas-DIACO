<?php
    session_start();
    //include('login/session.php');
    if(!isset($_SESSION['id'])){
        header("location:index.php");
        die();
    }
    include("config/testconexion.php");
    include('menus/menuizq.php');
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>DIACO | Reportes</title>
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
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="css/form/all-type-forms.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/educate-custon-icon.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- dropzone CSS
		============================================ -->
    <link rel="stylesheet" href="css/dropzone/dropzone.css">
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
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- modals CSS
		============================================ -->
    <link rel="stylesheet" href="css/modals.css">
</head>

<body>

    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="#"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
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
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">REPORTES Y ESTADISTICA  </a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                
                            <form class="form-horizontal" method="post" id="formReportes" name="formReportes"><!-- le asigna un identificador al formulario para generar un post y enviar los datos  -->
                                 
                      
                                  <!-- Step Form Content -->
                                  <div id="stepFormContent">
                                    <!-- Customer Info -->
                                    <div id="bloqueComercios" class="active"> <!-- asigna un id al bloque donde estan los campos de nuevo Cliente proveedor-->
                                      
                                      <!-- Billing Form -->
                                      <div class="row">
                                        <div class="col-md-3">
                                          <!-- Input primer bloque donde selecciona el proveedor al cual asignara el asesor que se ingreseara-->
                                          <div class="js-form-message mb-6">
                                              <label class="main-sparkline12-hd">  <!-- etiqueta del campo de texto  donde se almacena el nombre comercial del proveedor -->
                                                Estadisticas
                                              </label>
                      
                                              <div class="js-focus-state input-group form">
                                              <button type="button" class="btn btn-custon-rounded-three btn-primary" name="verEstadisticas" id="verEstadisticas">Ver Estadisticas</button>
                                              </div>
                                          </div>
                                          <!-- End Input -->
                                        </div>
                                        
                                        <div class="col-md-3">
                                          <!-- Input primer bloque donde selecciona el proveedor al cual asignara el asesor que se ingreseara-->
                                          <div class="js-form-message mb-6">
                                              <label class="main-sparkline12-hd">  <!-- etiqueta del campo de texto  donde se almacena el nombre comercial del proveedor -->
                                                Quejas por Region
                                                
                                              </label>
                      
                                              <div class="js-focus-state input-group form">
                                              <button type="button" class="btn btn-custon-rounded-two btn-primary" name="verQuejasRegion" id="verQuejasRegion">Ver Quejas</button>
                                              </div>
                                          </div>
                                          <!-- End Input -->
                                        </div>
                                        
                                        <div class="col-md-3">
                                          <!-- Input primer bloque donde selecciona el proveedor al cual asignara el asesor que se ingreseara-->
                                          <div class="js-form-message mb-6">
                                              <label class="main-sparkline12-hd">  <!-- etiqueta del campo de texto  donde se almacena el nombre comercial del proveedor -->
                                                Comercios sin Quejas
                                                
                                              </label>
                      
                                              <div class="js-focus-state input-group form">
                                              <button type="button" class="btn btn-custon-rounded-two btn-primary" name="verSinQuejas" id="verSinQuejas">Ver Comercios</button>
                                              </div>
                                          </div>
                                          <!-- End Input -->
                                        </div>

                                        <div class="col-md-3">
                                          <!-- Input primer bloque donde selecciona el proveedor al cual asignara el asesor que se ingreseara-->
                                          <div class="js-form-message mb-6">
                                              <label class="main-sparkline12-hd">  <!-- etiqueta del campo de texto  donde se almacena el nombre comercial del proveedor -->
                                                Quejas por Fechas
                                                
                                              </label>
                      
                                              <div class="js-focus-state input-group form">
                                              <button type="button" class="btn btn-custon-rounded-two btn-primary" name="verQuejasFechas" id="verQuejasFechas">Ver por Fechas</button>
                                              </div>
                                          </div>
                                          <!-- End Input -->
                                        </div>
                                       
                      
                                      </div>

                                      <!-- BLOQUE donde esta la tabla de sueldo  -->
                                      <div class="row" id="divEstadisticas" style="display: block">
                                          <div id="myTabContent" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 responsive-mode tab-content-center table-responsive-md justify-center" >
                                              <!-- Billing Form -->
                                              <div class="row">
                                                <div class="col-md-4">
                                                  <!-- Input primer bloque donde selecciona el proveedor al cual asignara el asesor que se ingreseara-->
                                                  <div class="js-form-message mb-6">
                                                      <label class="h6 small d-block text-uppercase">  <!-- etiqueta del campo de texto  donde se almacena el nombre comercial del proveedor -->
                                                        Quejas por :
                                                        <span class="text-danger">*</span>
                                                      </label>
                                                      <div class="js-focus-state input-group form">
                                                        <select name="selectOpcionEstadistica" id="selectOpcionEstadistica" class="form-control" required>
                                                          <option value="">Selecciona Opcion</option>
                                                          <option value="1">Comercio</option>
                                                          <option value="2">Municipio</option>
                                                          <option value="3">Departamento</option>
                                                          <option value="4">Region</option>
                                                        </select>
                                                        
                                                        <br>
                                                        <label class="h6 small d-block text-uppercase">  <!-- etiqueta del campo de texto  donde se almacena el nombre comercial del proveedor -->
                                                        Selecciona :
                                                        <span class="text-danger">*</span>
                                                      </label>
                                                        <select name="selectFiltroConsulta" id="selectFiltroConsulta" class="form-control" required>
                                                          
                                                          </select>

                                                      </div>  
                                                      
                                                      <br>
                                                      
                                                      <div class="js-form-message mb-6">
                                                      <button type="button" class="btn btn-custon-rounded-three btn-success" name="generarEstadistica" id="generarEstadistica"  style="display: none">Generar Estadistica</button>
                                                      </div>
                                                  </div>
                                                      
                                                  <!-- End Input -->
                                                </div>
                                              </div>
                                              <br>
                                                <table class="table  table-condensed table-hover table-responsive-md  justify-center " id="tablaVerTodasQuejas">
                                                <thead >
                                                    <tr class="bgcolor btn-facebook">									
                                                        <th class="text-center">Fecha Queja</th>
                                                        <th class="text-center">Asunto</th>
                                                        <th class="text-center">Descripcion</th>
                                                        <th class="text-center">Sucursal</th>
                                                        <th class="text-center">Municipio</th>
                                                        <th class="text-center">Departamento</th>
                                                        <th class="text-center">Region</th>
                                                        
                                                      </tr>
                                                </thead>
                                                
                                                <tbody id="cuerpoTablaQueja">
                                                  <?php 
                                                  $query_select = mysqli_query($conexionbd,"SELECT fechaQueja, asuntoQueja,descripcionQueja , nombreSucursal, municipio, departamento,region FROM todasQuejas");
                                                  $num_rows = mysqli_num_rows($query_select);
                                                  ?>
                                                  <?php
                                                    if ($num_rows > 0) {
                                                          # code...
                                                          
                                                          while ($row = mysqli_fetch_assoc($query_select)) {
                                                          
                                                        
                                                      ?>          
                                                            
                                                              <tr>
                                                              <td class="text-center"><?php echo $row['fechaQueja']?></td>
                                                              <td class="text-center"><?php echo $row['asuntoQueja'];?></td>
                                                              <td class="text-center"><?php echo $row['descripcionQueja']?></td>
                                                              <td class="text-center"><?php echo $row['nombreSucursal'];?></td>
                                                              <td class="text-center"><?php echo utf8_encode($row['municipio'])?></td>
                                                              <td class="text-center"><?php echo $row['departamento'];?></td>
                                                              <td class="text-center"><?php echo $row['region']?></td>
                                                              
                                                              </tr>
                                                      <?php }
                                                      }else{
                                                          echo "notData";
                                                      } 
                                                    ?>
                                                </tbody>
                                              </table>
                                            </div>                                  
                                      </div>
                                  
                                      <!-- BLOQUE donde esta la tabla de   -->
                                      <div class="row" id="divQuejasporRegion" style="display: none">
                                        <div id="myTabContent" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 responsive-mode tab-content-center table-responsive-md justify-center" >
                                              <!-- Billing Form -->
                                              <div class="row">
                                                <div class="col-md-4">
                                                  <!-- Input primer bloque donde selecciona el proveedor al cual asignara el asesor que se ingreseara-->
                                                  <div class="js-form-message mb-6">
                                                      <label class="h6 small d-block text-uppercase">  <!-- etiqueta del campo de texto  donde se almacena el nombre comercial del proveedor -->
                                                        Quejas por Region:
                                                        <span class="text-danger">*</span>
                                                      </label>
                                                      <div class="js-focus-state input-group form">
                                                        <select name="selectOpcionQuejasporRegion" id="selectOpcionQuejasporRegion" class="form-control" required>
                                                          
                                                          <option value="0">Selecciona Opcion</option>
                                                              <?php
                                                                $sql= "SELECT id_region,region FROM  region ";
                                                                $res=mysqli_query($conexionbd,$sql);
                                                                while ($data=mysqli_fetch_row($res))
                                                                        {
                                                                            $dato1 = $data[0];
                                                                            $dato2 = $data[1];
                                                                          
                                                              ?>
                                                                          <option value="<?php echo $dato1; ?>" > <?php echo $dato2; ?>  </option>
                                                              <?php 	} ?>
                                                        </select>
                                                        
                                                        <br>
                                                        <label class="h6 small d-block text-uppercase">  <!-- etiqueta del campo de texto  donde se almacena el nombre comercial del proveedor -->
                                                        Selecciona Comercio:
                                                        <span class="text-danger">*</span>
                                                        </label>
                                                        <select name="selectFiltroQuejasporRegion" id="selectFiltroQuejasporRegion" class="form-control" required>
                                                          
                                                          </select>
                                                          
                                                          <br>
                                                        <label class="h6 small d-block text-uppercase">  <!-- etiqueta del campo de texto  donde se almacena el nombre comercial del proveedor -->
                                                        Año :
                                                        <span class="text-danger">*</span>
                                                        </label>
                                                        <select name="selectAnioQuejasporRegion" id="selectAnioQuejasporRegion" class="form-control" required>
                                                        <option value="2015">2015</option>
                                                        <option value="2016">2016</option>
                                                        <option value="2017">2017</option>
                                                        <option value="2018">2018</option>
                                                        <option value="2019">2019</option>
                                                        <option value="2020" >2020</option>
                                                        <option value="2021" selected="selected">2021</option>
                                                        <option value="2022">2022</option>
                                                        <option value="2023">2023</option>
                                                        <option value="2024">2024</option>
                                                        <option value="2025">2025</option>
                                                          </select>
                                                      </div>  
                                                      <br>
                                                      
                                                      <br>
                                                      
                                                      <div class="js-form-message mb-6">
                                                      <button type="button" class="btn btn-custon-rounded-three btn-success" name="generarQuejasporRegion" id="generarQuejasporRegion"  style="display: none">Generar Reportes</button>
                                                      </div>
                                                  </div>
                                                      
                                                  <!-- End Input -->
                                                </div>
                                              </div>
                                              <br>
                                                <table class="table  table-condensed table-hover table-responsive-md  justify-center " id="tablaVerTodasQuejas">
                                                <thead >
                                                    <tr class="bgcolor btn-facebook">									
                                                        <th class="text-center">Fecha Queja</th>
                                                        <th class="text-center">Asunto</th>
                                                        <th class="text-center">Descripcion</th>
                                                        <th class="text-center">Sucursal</th>
                                                        <th class="text-center">Municipio</th>
                                                        <th class="text-center">Departamento</th>
                                                        <th class="text-center">Region</th>
                                                        
                                                      </tr>
                                                </thead>
                                                
                                                <tbody id="cuerpoTablaQuejaporRegion">
                                                
                                                </tbody>
                                              </table>
                                            </div>
                                      </div>
                                   <!-- fin de bloque -->

                                   <!-- BLOQUE donde esta la tabla de   -->
                                   <div class="row" id="divSinQuejas" style="display: none">
                                      <div id="myTabContent" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 responsive-mode tab-content-center table-responsive-md justify-center" >
                                              <!-- Billing Form -->
                                              <div class="row">
                                                <div class="col-md-4">
                                                  <!-- Input primer bloque donde selecciona el proveedor al cual asignara el asesor que se ingreseara-->
                                                  <div class="js-form-message mb-6">
                                                      <label class="h6 small d-block text-uppercase">  <!-- etiqueta del campo de texto  donde se almacena el nombre comercial del proveedor -->
                                                        Comercios SIN Quejas por region :
                                                        <span class="text-danger">*</span>
                                                      </label>
                                                      <div class="js-focus-state input-group form">
                                                        <select name="selectOpcionRegionSinQuejas" id="selectOpcionRegionSinQuejas" class="form-control" required>
                                                          <option value="0">Selecciona Opcion</option>
                                                       
                                                          <?php
                                                                $sql= "SELECT id_region,region FROM  region ";
                                                                $res=mysqli_query($conexionbd,$sql);
                                                                while ($data=mysqli_fetch_row($res))
                                                                        {
                                                                            $dato1 = $data[0];
                                                                            $dato2 = $data[1];
                                                                          
                                                              ?>
                                                                          <option value="<?php echo $dato1; ?>" > <?php echo $dato2; ?>  </option>
                                                              <?php 	} ?>
                                                        </select>
                                                        <br>
                                                       
                                                        </div>  
                                                        <br>
                                                      
                                                      
                                                   
                                                      <br>
                                                      
                                                      <div class="js-form-message mb-6">
                                                      <button type="button" class="btn btn-custon-rounded-three btn-success" name="generarSinQuejasporRegion" id="generarSinQuejasporRegion"  style="display: none">Generar Reportes Comercio Sin quejas</button>
                                                      </div>
                                                  </div>
                                                      
                                                  <!-- End Input -->
                                                </div>
                                              </div>
                                              <br>
                                                <table class="table  table-condensed table-hover table-responsive-md  justify-center " id="tablaVerTodasQuejas">
                                                <thead >
                                                    <tr class="bgcolor btn-facebook">									
                                                        <th class="text-center">Nombre Comercio</th>
                                                        <th class="text-center">Tipo</th>
                                                        <th class="text-center">Municipio</th>
                                                        <th class="text-center">Departamento</th>
                                                        <th class="text-center">Region</th>
                                                        
                                                      </tr>
                                                </thead>
                                                
                                                <tbody id="cuerpoTablaSINQuejaporRegion">
                                                
                                                </tbody>
                                              </table>
                                            </div>
                                      </div>
                                   <!-- fin de bloque -->
                                   <!-- BLOQUE donde esta la tabla de   -->
                                   <div class="row" id="divQuejasporFechas" style="display: none">
                                        <div id="myTabContent" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 responsive-mode tab-content-center table-responsive-md justify-center" >
                                              <!-- Billing Form -->
                                              <div class="row">
                                                <div class="col-md-4">
                                                  <!-- Input primer bloque donde selecciona el proveedor al cual asignara el asesor que se ingreseara-->
                                                  <div class="js-form-message mb-6">
                                                      <label class="h6 small d-block text-uppercase">  <!-- etiqueta del campo de texto  donde se almacena el nombre comercial del proveedor -->
                                                        Rango de fecha Incial :
                                                        <span class="text-danger">*</span>
                                                      </label>
                                                      <div class="js-focus-state input-group form">
                                                      <input name="fechaIncio" id="fechaIncio" type="date" class="form-control " placeholder="Fecha Incio" required>
                                                        <br>
                                                        <label class="h6 small d-block text-uppercase">  <!-- etiqueta del campo de texto  donde se almacena el nombre comercial del proveedor -->
                                                        Rango de Fecha Final :
                                                        <span class="text-danger">*</span>
                                                      </label>
                                                      <input name="fechaFinal" id="fechaFinal" type="date" class="form-control " placeholder="Fecha Final" required>
                                                      </div>  
                                                      
                                                     
                                                      <br>
                                                      
                                                      <div class="js-form-message mb-6">
                                                      <button type="button" class="btn btn-custon-rounded-three btn-success" name="generarReporteRangoFecha" id="generarReporteRangoFecha"  style="display: none">Generar Reporte</button>
                                                      </div>
                                                  </div>
                                                      
                                                  <!-- End Input -->
                                                </div>
                                              </div>
                                              <br>
                                                <table class="table  table-condensed table-hover table-responsive-md  justify-center " id="tablaVerTodasQuejas">
                                                <thead >
                                                    <tr class="bgcolor btn-facebook">									
                                                        <th class="text-center">Fecha Queja</th>
                                                        <th class="text-center">Asunto</th>
                                                        <th class="text-center">Descripcion</th>
                                                        <th class="text-center">Sucursal</th>
                                                        <th class="text-center">Municipio</th>
                                                        <th class="text-center">Departamento</th>
                                                        <th class="text-center">Region</th>
                                                        
                                                      </tr>
                                                </thead>
                                                
                                                <tbody id="cuerpoTablaQuejaRangoFecha">
                                                
                                                </tbody>
                                              </table>
                                            </div>
                                      </div>
                                   <!-- fin de bloque -->

                                </div>
                                  
                            </form>

                                
                         
                                
                                
                                

                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
       <?php
        include('menus/footer.php');
       ?>
       <!-- ========== LLama a ventanas Modales ========== -->
        <?php
            
             include("modal/modal2Comercios.php") ;// modal que permite Guardar el usuario
        ?>

    </div>

    <!-- Variables para Jquery del proyecto=============================== -->
     <!-- Aqui se llaman a los archivos jquery con la funcion ready para poder ejecutar los archivos ajax  -->
    <!-- <script src="js/vendor/jquery-1.12.4.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="jq/4Reportes.js">  </script> 
 
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
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- maskedinput JS
		============================================ -->
    <script src="js/jquery.maskedinput.min.js"></script>
    <script src="js/masking-active.js"></script>
    <!-- datepicker JS
		============================================ -->
    <script src="js/datepicker/jquery-ui.min.js"></script>
    <script src="js/datepicker/datepicker-active.js"></script>
    <!-- form validate JS
		============================================ -->
    <script src="js/form-validation/jquery.form.min.js"></script>
    <script src="js/form-validation/jquery.validate.min.js"></script>
    <script src="js/form-validation/form-active.js"></script>
    <!-- dropzone JS
		============================================ -->
    <script src="js/dropzone/dropzone.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="js/tab.js"></script>
      <!-- icheck JS
		============================================ -->
    <script src="js/icheck/icheck.min.js"></script>
    <script src="js/icheck/icheck-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
    <!-- tawk chat JS
		============================================ -->
    <script src="js/tawk-chat.js"></script>
    
<!-- data table JS
		============================================ -->
    

    <!-- Libreria DataTables para talbas -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.22/datatables.min.css"/>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>-->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.22/datatables.min.js"></script>
 
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>

</html>
