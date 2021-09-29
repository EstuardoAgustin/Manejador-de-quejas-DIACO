<?php    
//include('login/session.php');
include("config/testconexion.php");

?>

<!doctype html>
<html class="" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login | DIACO</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
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
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
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
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="css/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
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
	<div class="error-pagewrap" style="background-image: url(img/Fondo.jpg);">
		<div class="error-page-int" style="background-image: url(img/fondoLogin.jpg);">
			<div claejasss="text-center m-b-md custom-login" >
				<h3>Manejador de Quejas</h3>
				
			</div>
 
                              
                                                                                
            <!-- //// FIN de la Fila de 2 columnas con dos campos -->
        <div class="content-error">
          <div class="hpanel" > 
                          <div class="panel-body">
                                      <!--/////////////////////////////////////// INICIO Fila1 de dos cajas de texto -->
                                    <div class="row">
                                          <div class="col-md-6">
                                            <!-- Input primer bloque donde selecciona el proveedor al cual asignara el asesor que se ingreseara-->
                                            <div class="js-form-message mb-6">
                                                <div class="js-focus-state input-group form">
                                                  <button type="button" class="btn btn-custon-rounded-three btn-primary"  name="verQuejas" id="verQuejas">Registrar Quejas</button>
                                                </div>
                                            </div>
                                            <!-- End Input -->
                                          </div>
                                          <div class="col-md-6">
                                            <!-- Input primer bloque donde selecciona el proveedor al cual asignara el asesor que se ingreseara-->
                                            <div class="js-form-message mb-6">
                                                <div class="js-focus-state input-group form">
                                                <button type="button" class="btn btn-custon-rounded-two btn-primary" name="verIniciodeSesion" id="verIniciodeSesion">Ingresar al Sistema</button>
                                                </div>
                                            </div>
                                            <!-- End Input -->
                                          </div>
                                      </div>
                            </div>
                  </div>
        </div>

      <div id="bloqueLogin" class="content-error" style="display: none">
				<div class="hpanel" > 
                    <div class="panel-body">
                        <form action="" method = "post" id="loginForm">
                            <div class="form-group">
                                <label class="control-label" for="username">Usuario</label>
                                <input type="text"  title="Please enter you username" placeholder="Usuario" required="" value="" name="username" id="username" class="form-control">
                                <span class="help-block small">Usuario unico del sistema</span>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                                <span class="help-block small">Tu Contraseña</span>
                            </div>
                            
                                                                                              
                            <!-- <button name="login" id="login" type = "submit" class="btn btn-success btn-block loginbtn" style="color: #ffffff; background-color: #0cd5ac;border-color: #0cd5ac " >Login</button> -->
                            <button name="loginbtn" id="loginbtn" type = "button" class="btn btn-success btn-block loginbtn" style="color: #ffffff; background-color: #0cd5ac;border-color: #0cd5ac " >Inciar Sesion</button>
                        </form>
                    </div>
                </div>
			</div>


      <div id="bloqueQuejas" class="content-error" style="display: block">
				<div class="hpanel" > 
                    <div class="panel-body">
                        <form  method = "post" id="FormQuejas">
                            <div class="form-group">
                                <label class="control-label" for="username">Departamento</label>
                                        <span class="text-danger">*</span>
                                        <div class="form-group res-mg-t-15">  
                                          <select name="selectdepartamentoQueja" id="selectdepartamentoQueja" class="form-control" required>
                                            <option value="0">Selecciona Opcion</option>
                                              <?php
                                                $sql= "SELECT id_departamento,departamento FROM  todosDepartamentos ";
                                                $res=mysqli_query($conexionbd,$sql);
                                                while ($data=mysqli_fetch_row($res))
                                                        {
                                                            $dato1 = $data[0];
                                                            $dato2 = utf8_encode($data[1]);
                                                          
                                              ?>
                                                          <option value="<?php echo $dato1; ?>" > <?php echo $dato2; ?>  </option>
                                              <?php 	} ?>
                                          </select>
                                        </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label" >Municipio</label>
                                <span class="text-danger">*</span>
                                  <div id="divselectMunicipios" class="form-group res-mg-t-15">
                                  
                                    <select name="selectMunicipioQueja" id="selectMunicipioQueja" class="form-control" required>
                                    
                                    </select>
                                  
                                  </div>
                            </div>
                                      <div class="form-group">
                                        <label class="control-label" for="Municipio2">Comercio</label>
                                        <span class="text-danger">*</span>
                                        <div id="divselectComercio" class="form-group res-mg-t-15">
                                          
                                          <select name="selectComercioQueja" id="selectComercioQueja" class="form-control" required>
                                          
                                          </select>
                                        </div>
                                      </div>
                            <div class="form-group">
                                <label class="control-label" for="Municipio3">Sucursal</label>
                                        <span class="text-danger">*</span>
                                        <div id="divselectSucursal" class="form-group res-mg-t-15">
                                          <select name="selectSucursalQueja" id="selectSucursalQueja" class="form-control" required>
                                          
                                          </select>
                                        </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label" >Asunto</label>
                                <input type="text"  title="Please enter you username" placeholder="Asunto Queja"  name="asunto" id="asunto" class="form-control" required>
                                
                            </div>
                            <div class="form-group">
                                <label class="control-label" >Descripcion Queja</label>
                                <textarea class="form-control" id="descripcionQueja" rows="3" required></textarea>
                                
                            </div>
                            
                                                                                              
                            <!-- <button name="login" id="login" type = "submit" class="btn btn-success btn-block loginbtn" style="color: #ffffff; background-color: #0cd5ac;border-color: #0cd5ac " >Login</button> -->
                            <button name="btnGuardarQueja" id="btnGuardarQueja" type = "submit" class="btn btn-success btn-block loginbtn" style="color: #ffffff; background-color: #0cd5ac;border-color: #0cd5ac " >Registrar Queja</button>
                        </form>
                    </div>
                </div>
			</div>


			<div class="text-center login-footer">
				<p>Copyright © 2021. <a href="#">estuardoagustin.com</a></p>
			</div>
		</div>   
    </div>
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>

    <script type="text/javascript">
          $(document).ready(function(){
              // $('#selectdepartamentoQueja').val(1);
              // recargarLista();
              // BOTON Mostrar Tipo de Empleado
              $("#verIniciodeSesion").click(function(){
                  const $contenedordivLogin= document.querySelector("#bloqueLogin"); //selecciona el elemento del modal y lo pasa a una variable local
                  $contenedordivLogin.style.display = "block"; // muestra el boton guardar
                  const $contenedordivQuejas = document.querySelector("#bloqueQuejas"); //selecciona el elemento del modal y lo pasa a una variable local
                  $contenedordivQuejas.style.display = "none"; // muestra el boton guardar
                });
                $("#verQuejas").click(function(){
                  const $contenedordivLogin= document.querySelector("#bloqueLogin"); //selecciona el elemento del modal y lo pasa a una variable local
                  $contenedordivLogin.style.display = "none"; // muestra el boton guardar
                  const $contenedordivQuejas = document.querySelector("#bloqueQuejas"); //selecciona el elemento del modal y lo pasa a una variable local
                  $contenedordivQuejas.style.display = "block"; // muestra el boton guardar
                });


              $('#selectdepartamentoQueja').change(function(){
                action = "obtenerMunicipios";
                departamentoID = $.trim($("#selectdepartamentoQueja").val());
                $('#selectMunicipioQueja').html('');
                $('#selectComercioQueja').html('');
                $('#selectSucursalQueja').html('');
                cargarListaMunicipiosDepartamento();
              });
              
              $('#selectMunicipioQueja').change(function(){
                action = "obtenerComerciosMunicipio";
                municipioID = $.trim($("#selectMunicipioQueja").val());
                
                $('#selectComercioQueja').html('');
                $('#selectSucursalQueja').html('');
                cargarListaComerciosMunicipio();
              });

              $('#selectComercioQueja').change(function(){
                action = "obtenerSucursalesComercio";
                comercioID = $.trim($("#selectComercioQueja").val());
                municipioID = $.trim($("#selectMunicipioQueja").val());
                
                $('#selectSucursalQueja').html('');
                cargarListaSucursalesComercio();
              });

              $("#loginbtn").click(function(){
                    nombreUsuario = $.trim($("#username").val()); 
                    passUsuario = $.trim($("#password").val());
                    action = "login";
                    $.ajax({ //aqui se indica que vamos a hacer con los datos obtenidos del formulario
                            type: "POST",
                            url: "ajax/ajaxLogin.php", //indica el Ajax donde se procesara los parametros enviados 
                            //data: parametros,
                            data: {action:action,
                                  nombreUsuario:nombreUsuario,
                                  passUsuario:passUsuario
                                  },
                            dataType: 'json', //indica que el valor que devuelve el ajax es json para poder manipular en js
                            beforeSend: function(objeto){},
                            success: function(data2){
                                if(data2 == 'error'){ // en caso de que el valor de data2 que viene del ajaxProveedore sea replica es porque la comparacion con BD ya existia el dato y no se pudo ejecutar la consulta 
                                    Swal.fire({
                                    title: "Error Usuario/Contraseña Incorrecto", //titulo del modal
                                    icon: 'error', //tipo de advertencia modal
                                    });
                                    console.log("rechazado");   // // imprime en consola para el desarrolador ver el valro que esta obteniendo 
                                  }
                          
                            else if(data2 == nombreUsuario) // en caso de ser actualizado la respuesta del ajaxProveedor entonces la opcion completada fue un UPDATE en la BD
                            {
                              Swal.fire({
                                title: "Bienvenido: "+data2,
                                icon: 'success',
                                timer: 2000   
                                }).then(function() {
                                  window.location = "principal.php";
                                });
                            }
                          }
                      });
                  });// fin boton login
            

              
              $("#FormQuejas").submit(function( event ) { 
                selectdepartamentoQueja = $.trim($("#selectdepartamentoQueja").val()); // toma el valor que contenga los inputs 
                selectMunicipioQueja = $.trim($("#selectMunicipioQueja").val()); // toma el valor que contenga los inputs del formulario con el idnombreComercial y lo ingresa a una variable 
                selectComercioQueja = $.trim($("#selectComercioQueja").val());// toma el valor que contenga los inputs del formulario con el id proveedorNIT y lo ingresa a una variable 
                selectSucursalQueja = $.trim($("#selectSucursalQueja").val());
                asunto = $.trim($("#asunto").val());
                descripcionQueja = $.trim($("#descripcionQueja").val());
                action="guardarQueja";
                if(action == 'guardarQueja'){ 
                                                
                                                //<<<<<<<<<<<<AJAX GUARDA PRODUCTO
                                                    ////AJAX que Guarda el Producto

                                            $.ajax({ //AJAX aqui se indica que vamos a hacer con los datos obtenidos del formulario
                                                type: "POST",
                                                url: "ajax/ajaxLogin.php", //indica el Ajax donde se procesara los parametros enviados 
                                                
                                                data:   { 
                                                        action:action,
                                                        selectdepartamentoQueja:selectdepartamentoQueja,
                                                        selectMunicipioQueja:selectMunicipioQueja,
                                                        selectComercioQueja:selectComercioQueja,
                                                        selectSucursalQueja:selectSucursalQueja,
                                                        asunto:asunto,
                                                        descripcionQueja:descripcionQueja
                                                        },
                                        
                                                    dataType: 'json', //indica que el valor que devuelve el ajax es json para poder manipular en js
                                                    beforeSend: function(objeto){},
                                                    success: function(data2){
                                                            console.log("imprimir Resultado de Guardar "); 
                                                            console.log(data2);
                                                                        
                                                            if(data2 == 'error'){ // en caso de que el valor de data2 que viene del ajaxProveedore sea replica es porque la comparacion con BD ya existia el dato y no se pudo ejecutar la consulta 
                                                                    Swal.fire({
                                                                    title: "Error al ingresar a BD", //titulo del modal
                                                                    icon: 'error', //tipo de advertencia modal
                                                                    timer: 3000                     
                                                                    });
                                                                    console.log("rechazado Error");   // // imprime en consola para el desarrolador ver el valro que esta obteniendo 
                                                                }
                                                        
                                                            else if(data2 == 'successful') { // de lo contrario el msj sera usuario guardado 
                                                                    Swal.fire({
                                                                            title: "Queja Registrada Exitosamente",
                                                                            icon: 'success',
                                                                            timer: 2000
                                                                            }).then(function() {
                                                                            var url = 'index.php';    
                                                                            $(location).attr('href',url); //redirecciona al formulario verProveedores
                                                                            });
                                                    
                                                                        
                                                                
                                                                    }
                                                        }
                                                });////FIN del AJAX que guarda el producto
                  }//fin de la condicional que selecciona si va guardar o editar cno el submit
                  event.preventDefault();
            });
        //////////////////////////////////
                }) // fin document ready

            // funciones Jquery
            function cargarListaMunicipiosDepartamento(){
              $.ajax({
                  type:"POST",
                  url:"ajax/ajaxLogin.php",
                  data:{  action:action,
                          departamentoID:departamentoID                                          
                      },
                  success:function(r){
                    $('#selectMunicipioQueja').html(r);
                  }
                });
              };

            function cargarListaComerciosMunicipio(){
              $.ajax({
                type:"POST",
                url:"ajax/ajaxLogin.php",
                data:{  action:action,
                        municipioID:municipioID                                          
                    },
                success:function(r){
                  $('#selectComercioQueja').html(r);
                }
              });
            }

            function cargarListaSucursalesComercio(){
              $.ajax({
                type:"POST",
                url:"ajax/ajaxLogin.php",
                data:{  action:action,
                        comercioID:comercioID,
                        municipioID:municipioID                                          
                    },
                success:function(r){
                  $('#selectSucursalQueja').html(r);
                }
              });
            }

         
    </script>
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
   
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>

</html>

<?php
//}


?>