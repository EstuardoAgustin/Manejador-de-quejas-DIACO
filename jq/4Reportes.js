$(document).ready(function(){
    //===================VARIABLES ========================
    console.log("esta funcionando JS de Mantenimiento Sueldo correctamente");
    var fila; //captura valores de la fila para editar, ver, ver asesores asociado
    var idProveedor=0; // incializa la variable del id del Proveedor como variable global para ser utilizada en mas opciones
    var idAsesor=0;// incializa la variable del id del Asesor como variable global para ser utilizada en la opcion obtener datos y actualizar
    var action="nohayaccion";// incializa
    // boton editar  Proveedor
    //================FIN VARIABLES
    //================INICIO FUNCIONES
    //incializa la tabla con la libreria DataTable que lista todos 
    tablaVerTodasQuejas = $('#tablaVerTodasQuejas').DataTable({  // incializa la
        
        
        //Para cambiar el lenguaje a español
    "language": {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast":"Último",
                "sNext":"Siguiente",
                "sPrevious": "Anterior"
            },
            "sProcessing":"Procesando...",
        }
    });
    //------------fin inicializacion de la estructura de DataTable que lista los
    //incializa la tabla con la libreria DataTable que lista todos 
    tablaVerSucursales = $('#tablaVerSucursales').DataTable({  // incializa la
        "columnDefs":[{
        "targets": -1,
        "data":null,
        // incia 3 botones del dataTable 
        "defaultContent": "<div class='text-center'><div class='button-style-three'> <button type='button' class='btn btn-custon-rounded-three btn-success btnVerUsuario'>Ver</button> <button  type='button' class='btn btn-custon-rounded-three btn-danger btnDesactivarUsuario'>Editar</button>  </div></div>"  
        }],
        
        //Para cambiar el lenguaje a español
    "language": {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast":"Último",
                "sNext":"Siguiente",
                "sPrevious": "Anterior"
            },
            "sProcessing":"Procesando...",
        }
    });
    //---
    // BOTON Mostrar Tipo de Empleado
        $("#verEstadisticas").click(function(){
            const $contenedordivEstadisticas= document.querySelector("#divEstadisticas"); //selecciona el elemento del modal y lo pasa a una variable local
            $contenedordivEstadisticas.style.display = "block"; // muestra el boton guardar
            
            const $contenedordivQuejasporRegion = document.querySelector("#divQuejasporRegion"); //selecciona el elemento del modal y lo pasa a una variable local
            $contenedordivQuejasporRegion.style.display = "none"; // muestra el boton guardar
            
            const $contenedordivSinQuejas = document.querySelector("#divSinQuejas"); //selecciona el elemento del modal y lo pasa a una variable local
            $contenedordivSinQuejas.style.display = "none"; // muestra el boton guardar

            const $contenedordivQuejasporFechas = document.querySelector("#divQuejasporFechas"); //selecciona el elemento del modal y lo pasa a una variable local
            $contenedordivQuejasporFechas.style.display = "none"; // muestra el boton guardar
           
    
        });
      // BOTON Mostrar Tipo de Empleado
        $("#verQuejasRegion").click(function(){
            const $contenedordivEstadisticas= document.querySelector("#divEstadisticas"); //selecciona el elemento del modal y lo pasa a una variable local
            $contenedordivEstadisticas.style.display = "none"; // muestra el boton guardar
            
            const $contenedordivQuejasporRegion = document.querySelector("#divQuejasporRegion"); //selecciona el elemento del modal y lo pasa a una variable local
            $contenedordivQuejasporRegion.style.display = "block"; // muestra el boton guardar
            
            const $contenedordivSinQuejas = document.querySelector("#divSinQuejas"); //selecciona el elemento del modal y lo pasa a una variable local
            $contenedordivSinQuejas.style.display = "none"; // muestra el boton guardar

            const $contenedordivQuejasporFechas = document.querySelector("#divQuejasporFechas"); //selecciona el elemento del modal y lo pasa a una variable local
            $contenedordivQuejasporFechas.style.display = "none"; // muestra el boton guardar
        });
        // BOTON Mostrar Tipo de Empleado
        $("#verSinQuejas").click(function(){
            const $contenedordivEstadisticas= document.querySelector("#divEstadisticas"); //selecciona el elemento del modal y lo pasa a una variable local
            $contenedordivEstadisticas.style.display = "none"; // muestra el boton guardar
            
            const $contenedordivQuejasporRegion = document.querySelector("#divQuejasporRegion"); //selecciona el elemento del modal y lo pasa a una variable local
            $contenedordivQuejasporRegion.style.display = "none"; // muestra el boton guardar
            
            const $contenedordivSinQuejas = document.querySelector("#divSinQuejas"); //selecciona el elemento del modal y lo pasa a una variable local
            $contenedordivSinQuejas.style.display = "block"; // muestra el boton guardar

            const $contenedordivQuejasporFechas = document.querySelector("#divQuejasporFechas"); //selecciona el elemento del modal y lo pasa a una variable local
            $contenedordivQuejasporFechas.style.display = "none"; // muestra el boton guardar
        });
        // BOTON Mostrar Tipo de Empleado
        $("#verQuejasFechas").click(function(){
            const $contenedordivEstadisticas= document.querySelector("#divEstadisticas"); //selecciona el elemento del modal y lo pasa a una variable local
            $contenedordivEstadisticas.style.display = "none"; // muestra el boton guardar
            
            const $contenedordivQuejasporRegion = document.querySelector("#divQuejasporRegion"); //selecciona el elemento del modal y lo pasa a una variable local
            $contenedordivQuejasporRegion.style.display = "none"; // muestra el boton guardar
            
            const $contenedordivSinQuejas = document.querySelector("#divSinQuejas"); //selecciona el elemento del modal y lo pasa a una variable local
            $contenedordivSinQuejas.style.display = "none"; // muestra el boton guardar

            const $contenedordivQuejasporFechas = document.querySelector("#divQuejasporFechas"); //selecciona el elemento del modal y lo pasa a una variable local
            $contenedordivQuejasporFechas.style.display = "block"; // muestra el boton guardar
        });

            $('#selectOpcionEstadistica').change(function(){
                action = "obtenerOpcion";
                opcionEstadistica = $.trim($("#selectOpcionEstadistica").val());
                
                cargarListaSeleccion();
                
            });

            $('#selectFiltroConsulta').change(function(){
                const $btnGenerarEstadistica= document.querySelector("#generarEstadistica"); 
                $btnGenerarEstadistica.style.display = "block"; 
            });

            $('#selectOpcionQuejasporRegion').change(function(){
                action = "obtenerSucursalesporRegion";
                opcionRegion = $.trim($("#selectOpcionQuejasporRegion").val());
                
                cargarListaRegion();
                
            });
            $('#selectOpcionRegionSinQuejas').change(function(){
                
                const $btngenerarSinQuejasporRegion= document.querySelector("#generarSinQuejasporRegion"); 
                $btngenerarSinQuejasporRegion.style.display = "block"; 
            });
            $('#selectFiltroQuejasporRegion').change(function(){
                
                const $btngenerarQuejasporRegion= document.querySelector("#generarQuejasporRegion"); 
                $btngenerarQuejasporRegion.style.display = "block"; 
            });

            $('#fechaFinal').change(function(){
                fechaInicio = $.trim($("#fechaIncio").val()); 
                const $btngenerarReporteRangoFecha= document.querySelector("#generarReporteRangoFecha"); 
                $btngenerarReporteRangoFecha.style.display = "block"; 
            });
    //------------fin inicializacion de la estructura de DataTable que lista los

     // BOTON nuevo  MOdal
     $("#generarEstadistica").click(function(){
                action = "obtenerTablaDatosQuejas";
                opcionQuejasPor = $.trim($("#selectOpcionEstadistica").val());
                opcionFiltro = $.trim($("#selectFiltroConsulta").val());
                cargarTablaListaQuejas();
    });

    // BOTON nuevo  MOdal
    $("#generarReporteRangoFecha").click(function(){
        action = "obtenerTablaDatosQuejasRangoFecha";
        fechaInicial = $.trim($("#fechaIncio").val());
        fechaFinal = $.trim($("#fechaFinal").val());
        cargarTablaListaRangoFechaQuejas();
});
// BOTON nuevo  MOdal
    $("#generarQuejasporRegion").click(function(){
        action = "obtenerTablaQuejasporRegion";
        selectOpcionQuejasporRegion = $.trim($("#selectOpcionQuejasporRegion").val());
        selectFiltroQuejasporRegion = $.trim($("#selectFiltroQuejasporRegion").val());
        selectAnioQuejasporRegion = $.trim($("#selectAnioQuejasporRegion").val());
        cargarTablaListaQuejasporRegion();
    });

    // BOTON nuevo  MOdal
    $("#generarSinQuejasporRegion").click(function(){
        action = "obtenerTablaSinQuejasporRegion";
        selectOpcionRegionSinQuejas = $.trim($("#selectOpcionRegionSinQuejas").val());
       
        cargarTablaListaSinQuejasporRegion();
    });
    // BOTON nuevo  MOdal
    $("#nuevaSucursal").click(function(){
        const $botonGuardar = document.querySelector("#guardarSucursal"); //selecciona el elemento del modal y lo pasa a una variable local
        $botonGuardar.style.display = "block"; //  muestra el boton guardar
        const $botonEditar = document.querySelector("#editarSucursal"); //selecciona el elemento del modal y lo pasa a una variable local
        $botonEditar.style.display = "none"; // NO muestra el boton guardar
        $(".modal-header").css("background-color","#0cd5ac");//cambia de colo el header del modal
        $(".modal-header").css("color","white"); //cambia el color de texto del header a blanco 
        $(".modal-title").text("Nueva Sucursal");//titulo del header
        $("#formRoles").trigger("reset"); //vacia los campos
        $("#modalSucursal").modal("show"); //al cl
        action="guardarSucursal"; //le da un valor globar a la variable que se usara en el submit del formulario modal nuevoProveedor
    });

      // BOTON Mostrar Tipo de Empleado
        $("#formNuevoComercio").submit(function( event ) { 
            
            idComercio = $.trim($("#idComercio").val()); // toma el valor que contenga los inputs 
            nombreComercio = $.trim($("#nombreComercio").val()); // toma el valor que contenga los inputs del formulario con el idnombreComercial y lo ingresa a una variable 
            Direccion = $.trim($("#Direccion").val());// toma el valor que contenga los inputs del formulario con el id proveedorNIT y lo ingresa a una variable 
            nitComercio = $.trim($("#nitComercio").val());
            Telefono = $.trim($("#Telefono").val());
            email = $.trim($("#email").val());
            municipio = $.trim($("#municipio").val());
            

            
            if(action == 'validarNIT'){ 
                /////AJAX que valida si el SKU es repetido o es unico
                $.ajax({ //aqui se indica que vamos a hacer con los datos obtenidos del formulario
                    type: "POST",
                    url: "ajax/ajax2Comercios.php", //indica el Ajax donde se procesara los parametros enviados 
                    //data: parametros,
                    data: { action:action,
                            nitComercio:nitComercio
                           },
            
                        dataType: 'json', //indica que el valor que devuelve el ajax es json para poder manipular en js
                        beforeSend: function(objeto){},
                        success: function(data2){
                                            console.log(data2);
                                if(data2 == 'repetido'){ // en caso de que el valor de data2 que viene del ajaxProveedore sea replica es porque la comparacion con BD ya existia el dato y no se pudo ejecutar la consulta 
                                        Swal.fire({
                                        title: "NIT Repetido - Ingresar Otro", //titulo del modal
                                        icon: 'error', //tipo de advertencia modal
                                        timer: 3000                     
                                        });
                                        nitCliente = $("#noIdentificacionUsuario").val('');
                                       
                                    }
                            
                                else if(data2 == 'unico') { // de lo contrario el msj sera usuario guardado 
                                    console.log("NIT Unico Procedemos a ingresar Prod"); 
                                    action="guardarNuevoComercio";
                                          //<<<<<<<<<<<<AJAX GUARDA PRODUCTO
                                             ////AJAX que Guarda el Producto
              
                                        $.ajax({ //AJAX aqui se indica que vamos a hacer con los datos obtenidos del formulario
                                            type: "POST",
                                            url: "ajax/ajax2Comercios.php", //indica el Ajax donde se procesara los parametros enviados 
                                            
                                            data:   { 
                                                    action:action,
                                                    idComercio:idComercio,
                                                    nombreComercio:nombreComercio,
                                                    Direccion:Direccion,
                                                    nitComercio:nitComercio,
                                                    Telefono:Telefono,
                                                    email:email,
                                                    municipio:municipio
                                                    },
                                    
                                                dataType: 'json', //indica que el valor que devuelve el ajax es json para poder manipular en js
                                                beforeSend: function(objeto){},
                                                success: function(data2){
                                                        console.log("imprimir Resultado de Guardar el Comercio"); 
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
                                                                        title: "Guardado Exitosamente",
                                                                        icon: 'success',
                                                                        timer: 2000
                                                                        }).then(function() {
                                                                        //window.location = "2Sucursales.php";
                                                                        console.log("IngD"); 
                                                                        var url = '2Comercios.php';    
                                                                        $(location).attr('href',url); //redirecciona al formulario verProveedores
                                                                        });
                                                
                                                                    
                                                            
                                                                }
                                                    }
                                            });////FIN del AJAX que guarda el producto
                                           
                                        }
                            }
                    });/////FIN AJAX que valida si el SKU es repetido o es unico

               
              
             }//fin de la condicional que selecciona si va guardar o editar cno el submit
             else if(action == 'editarProducto') { // de lo contrario 
                $.ajax({ //AJAX aqui se indica que vamos a hacer con los datos obtenidos del formulario
                    type: "POST",
                    url: "ajax/ajax8Productos.php", //indica el Ajax donde se procesara los parametros enviados 
                    //data: parametros,
                    data: { action:action,
                            idProducto:idProducto,
                            nombreProducto:nombreProducto,
                            skuProducto:skuProducto,
                            tipoProducto:tipoProducto,
                            marcaProducto:marcaProducto,
                            presentacionProducto:presentacionProducto,
                            estadoProducto:estadoProducto,
                            id_Categoria:id_Categoria,
                            descripcionProducto:descripcionProducto,
                            imagenProducto:imagenProducto,
                            precioCostoProducto:precioCostoProducto,
                            precioVentaProducto:precioVentaProducto,
                            precioPromoProducto:precioPromoProducto,
                            stockMinProducto:stockMinProducto
                            
                        },
            
                        dataType: 'json', //indica que el valor que devuelve el ajax es json para poder manipular en js
                        beforeSend: function(objeto){},
                        success: function(data2){
                                console.log("imprimir Resultado de Editar el pRODUCTto"); 
                                
                                            
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
                                            title: "Producto Editado Exitosamente",
                                            icon: 'success',
                                            timer: 2000
                                            }).then(function() {
                                            //window.location = "2Sucursales.php";
                                            });
                    
                                            console.log("Producto Editado Correctamente"); 
                                            var url = '8Productos.php';    
                                            $(location).attr('href',url); //redirecciona al formulario verProveedores
                                    
                                        }
                            }
                    });
             }
        event.preventDefault();
        });
      
        // BOTON Mostrar Tipo de Empleado
        $("#formNuevaSucursal").submit(function( event ) { 
            
            idSucursal = $.trim($("#idSucursal").val()); // toma el valor que contenga los inputs 
            nombreSucursal = $.trim($("#nombreSucursal").val()); // toma el valor que contenga los inputs del formulario con el idnombreComercial y lo ingresa a una variable 
            DireccionSucursal = $.trim($("#DireccionSucursal").val());// toma el valor que contenga los inputs del formulario con el id proveedorNIT y lo ingresa a una variable 
            nitComercioCentral = $.trim($("#nitComercioCentral").val());
            TelefonoSucursal = $.trim($("#TelefonoSucursal").val());
            emailSucursal = $.trim($("#emailSucursal").val());
            municipioSucursal = $.trim($("#municipioSucursal").val());
            tipoSucursal = $.trim($("#tipoSucursal").val());

            
            if(action == 'guardarSucursal'){ 
                                            
                                            //<<<<<<<<<<<<AJAX GUARDA PRODUCTO
                                                ////AJAX que Guarda el Producto

                                        $.ajax({ //AJAX aqui se indica que vamos a hacer con los datos obtenidos del formulario
                                            type: "POST",
                                            url: "ajax/ajax2Comercios.php", //indica el Ajax donde se procesara los parametros enviados 
                                            
                                            data:   { 
                                                    action:action,
                                                    idSucursal:idSucursal,
                                                    nombreSucursal:nombreSucursal,
                                                    DireccionSucursal:DireccionSucursal,
                                                    nitComercioCentral:nitComercioCentral,
                                                    TelefonoSucursal:TelefonoSucursal,
                                                    emailSucursal:emailSucursal,
                                                    municipioSucursal:municipioSucursal,
                                                    tipoSucursal:tipoSucursal
                                                    
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
                                                                        title: "Guardado Exitosamente",
                                                                        icon: 'success',
                                                                        timer: 2000
                                                                        }).then(function() {
                                                                        var url = '2Comercios.php';    
                                                                        $(location).attr('href',url); //redirecciona al formulario verProveedores
                                                                        });
                                                
                                                                    
                                                            
                                                                }
                                                    }
                                            });////FIN del AJAX que guarda el producto
             }//fin de la condicional que selecciona si va guardar o editar cno el submit
             else if(action == 'editarSucursal') { // de lo contrario 
                $.ajax({ //AJAX aqui se indica que vamos a hacer con los datos obtenidos del formulario
                    type: "POST",
                    url: "ajax/ajax8Productos.php", //indica el Ajax donde se procesara los parametros enviados 
                    //data: parametros,
                    data: {  action:action,
                        idSucursal:idSucursal,
                        nombreSucursal:nombreSucursal,
                        DireccionSucursal:DireccionSucursal,
                        nitComercioCentral:nitComercioCentral,
                        TelefonoSucursal:TelefonoSucursal,
                        emailSucursal:emailSucursal,
                        municipioSucursal:municipioSucursal,
                        tipoSucursal:tipoSucursal
                            
                        },
            
                        dataType: 'json', //indica que el valor que devuelve el ajax es json para poder manipular en js
                        beforeSend: function(objeto){},
                        success: function(data2){
                                console.log("imprimir Resultado de Editar el pRODUCTto"); 
                                
                                            
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
                                            title: "Producto Editado Exitosamente",
                                            icon: 'success',
                                            timer: 2000
                                            }).then(function() {
                                            //window.location = "2Sucursales.php";
                                            });
                    
                                            console.log("Producto Editado Correctamente"); 
                                            var url = '8Productos.php';    
                                            $(location).attr('href',url); //redirecciona al formulario verProveedores
                                    
                                        }
                            }
                    });
             }
        event.preventDefault();
        });
        
       ///////////// BOTON ver TipoEmpleado
        $(document).on("click", ".btnVerUsuario", function(){
            fila = $(this).closest("tr");
            ID_Usuario = parseInt(fila.find('td:eq(0)').text());
            nombreUsuario = fila.find('td:eq(1)').text();
            estadoUsuario= fila.find('td:eq(3)').text();
            
            action = "obtener_datosUsuario";
           
            $("#modalVerUsuario").trigger("reset"); //vacia los campos 
           
            $.ajax({ //ajax que va obtener valores de tabla de proveedor con id
                url: './ajax/ajax5NuevoUsuario.php', //al documento php ajax al cual iran los datos y de donde retornara valores de la consulta
                type: "POST",
                async: true,
                data: {action:action, ID_Usuario:ID_Usuario }, //envia valores al ajax action y el id
                
                success: function(response){ //recibe una respuesta con una array json
                console.log("Respuesta Datos Obtenidos USUARIO");
                console.log(action);
                
                    if (response != 'error') {
                            console.log(response); // imprimimos en consola para saber el array que nos devuelve
                            var data2 = JSON.parse(response); //parsea a fotmato el array del ajax en json
                             $('#idUsuario').val(data2.idUsuario);
                             $('#priNombreUsuario').val(data2.priNombreUsuario); // carga el valor de data2.nombre en un input del modal nuevo_proveedor el cual tenga el id nombreComercial y los de abajo tambien
                             $('#nombreUsuario').val(data2.usuario); // carga en el inpunt del modal con el id proveedorNIT lo que obtuvo de vuelta de la funcion obtener_datos del ajaxProveedore
                             $('#segNombreUsuario').val(data2.segNombreUsuario);
                             $('#passUsuario').val(data2.passUsuario);
                             $('#priApellidoUsuario').val(data2.priApellidoUsuario);
                             $('#descripcionUsuario').val(data2.descripcionUsuario);
                             $('#segApellidoUsuario').val(data2.segNombreUsuario);
                             $('#estadoUsuario').val(data2.estadoUsuario);
                             $('#noIdentificacionUsuario').val(data2.identificacionUsuario);
                             $('#id_sueldoUsuario').val(data2.SueldoEmpleado_idSueldoEmpleado);
                             $('#sexoUsuario').val(data2.sexoUsuario);
                             $('#id_comisionUsuario').val(data2.ComisionEmpleado_idComisionEmpleado);
                             $('#direccionUsuario').val(data2.direccionUsuario);
                             $('#id_privilegiosUsuario').val(data2.TipoEmpleado_idTipoEmpleado);
                             $('#telUsuario').val(data2.telefonoUsuario);
                             $('#id_horarioUsuario').val(data2.Horario_idHorario);
                             $('#emailUsuario').val(data2.correoUsuario);
                             $('#id_sucursalUsuario').val(data2.Sucursal_idSucursal);
                             $('#nacimientoUsuario').val(data2.fechaNacUsuario);
                             

                            
                            
                            $(".modal-header").css("background-color","#21c87a");//cambia de colo el header del modal
                            $(".modal-header").css("color","white"); //cambia el color de texto del header a blanco 
                            $(".modal-title").text("Usuario");//titulo del header
                           
                            $("#modalVerUsuario").modal("show"); //al clickear el boton nuevo proveedor lanza el modal que tiene el id Modal_Nuevo_Proveedor el cual es una clase alojada en /modal/editarProveedor llamada desde el archivo verProveedor
                            action = "editarDatosUsuario";//setea el valor nuevo de accion en este caso editar privilegio
                            console.log(action);
                            
                    }else{
                    
                    console.log("No existen datos")
                    
                        }
                

                },
                error: function(error){
                console.log(error);
                }
                
                    });

        });
        /////////////////////////////////
        
        
       ///////////// BOTON ver Editar Privilegios
        $(document).on("click", ".btnDesactivarComision", function(){

            fila = $(this).closest("tr");
            idTipoEmpleado = parseInt(fila.find('td:eq(0)').text());
            rolTipoEmpleado = fila.find('td:eq(1)').text();
            action = "obtener_datosTipoEmpleado";

            const $botonGuardar = document.querySelector("#guardarTipoEmpleado"); //selecciona el elemento del modal y lo pasa a una variable local
            $botonGuardar.style.display = "none"; //  muestra el boton guardar
            const $botonEditar = document.querySelector("#editarTipoEmpleado"); //selecciona el elemento del modal y lo pasa a una variable local
            $botonEditar.style.display = "none"; // NO muestra el boton guardar
            const $estadobloquePrivilegios = document.querySelector("#bloquePrivilegios"); //selecciona el elemento del modal y lo pasa a una variable local
            $estadobloquePrivilegios.style.display = "block"; // muestra el boton guardar
            action = "obtener_datosTipoEmpleado";

            $.ajax({ //ajax que va obtener valores de tabla de proveedor con id
                url: './ajax/ajax3TipoEmpleado.php', //al documento php ajax al cual iran los datos y de donde retornara valores de la consulta
                type: "POST",
                async: true,
                data: {action:action, idTipoEmpleado:idTipoEmpleado }, //envia valores al ajax action y el id
                
                success: function(response){ //recibe una respuesta con una array json
                console.log("Respuesta Datos Obtenidos");
                console.log(action);
                
                    if (response != 'error') {
                            console.log(response); // imprimimos en consola para saber el array que nos devuelve
                            var data2 = JSON.parse(response); //parsea a fotmato el array del ajax en json
                                              
                            $("#1").prop('checked', true);
                            $('#idTipoEmpleado' ).val(data2.idTipoEmpleado); // carga el valor de data2.nombre en un input del modal nuevo_proveedor el cual tenga el id nombreComercial y los de abajo tambien
                            $('#roltipoEmpleado').val(data2.rolTipoEmpleado); // carga en el inpunt del modal con el id proveedorNIT lo que obtuvo de vuelta de la funcion obtener_datos del ajaxProveedore
                            $('#descripcionTipoEmpleado').val(data2.descripcionTipoEmpleado);
                            $('#estadoTipoEmpleado').val(data2.estadoTipoEmpleado);
                            $('#privilegioGrupoID').val(data2.grupoPrivilegioTipoEmpleado);

                            $(".modal-header").css("background-color","#0cd5ac");//cambia de colo el header del modal
                            $(".modal-header").css("color","white"); //cambia el color de texto del header a blanco 
                            $(".modal-title").text("Ver Privilegios");//titulo del header
                            $("#modalNuevoTipoEmpleado").modal("show"); //al clickear el boton nuevo proveedor lanza el modal que tiene el id Modal_Nuevo_Proveedor el cual es una clase alojada en /modal/editarProveedor llamada desde el archivo verProveedor
                           
                            console.log("Muestra Datos Tipo Empleado");
                            action = "editarPrivilegiosTipoEmpleado";//setea el valor nuevo de accion en este caso editar privilegio
                            console.log(action);
                    }else{
                    
                    console.log("No existen datos")
                    
                        }
                

                },
                error: function(error){
                                    console.log(error);
                                    }
                
            }); 

        });

        // BOTON Editar nuevo TipoEmpleado
        $("#editarSueldoEmpleado").click(function(){
            IDsueldoEmpleado = $.trim($("#idSueldoEmpleado").val()); // toma el valor
            sueldoEmpleado = $.trim($("#sueldoEmpleado").val()); // toma el valor que contenga los inputs del formulario con el idnombreComercial y lo ingresa a una variable 
            descripcionSueldoEmpleado = $.trim($("#descripcionSueldoEmpleado").val());// toma el valor que con
            estadoSueldoEmpleado = $.trim($("#estadoSueldoEmpleado").val());
            //condicional que edita los datos de empleado
            if (action=='editarDatosSueldoEmpleado'){
                $.ajax({ //aqui se indica que vamos a hacer con los datos obtenidos del formulario
                    type: "POST",
                    url: "ajax/ajax4MantenimientoSueldo.php", //indica el Ajax donde se procesara los parametros enviados 
                    //data: parametros,
                    data: { action:action,
                            IDsueldoEmpleado:IDsueldoEmpleado,
                            sueldoEmpleado:sueldoEmpleado,
                            descripcionSueldoEmpleado:descripcionSueldoEmpleado,
                            estadoSueldoEmpleado:estadoSueldoEmpleado
                           },
            
                        dataType: 'json', //indica que el valor que devuelve el ajax es json para poder manipular en js
                        beforeSend: function(objeto){},
                        success: function(data2){
                                console.log("Resultado de Editar Sueldo EMPLEADO"); 
                                
                                            
                                if(data2 == 'error'){ // en caso de que el valor de data2 que viene del ajaxProveedore sea replica es porque la comparacion con BD ya existia el dato y no se pudo ejecutar la consulta 
                                        Swal.fire({
                                        title: "Error al Actaulizar en BD", //titulo del modal
                                        icon: 'error', //tipo de advertencia modal
                                        timer: 3000                     
                                        });
                                        console.log("rechazado Error");   // // imprime en consola para el desarrolador ver el valro que esta obteniendo 
                                    }
                            
                                else if(data2 == 'successful') { // de lo contrario el msj sera usuario guardado 
                                    Swal.fire({
                                            title: "Tipo Sueldo Actualizado Exitosamente",
                                            icon: 'success',
                                            timer: 2000
                                            }).then(function() {
                                            //window.location = "2Sucursales.php";
                                            });
                    
                                            console.log("Tipo de Empleado Actualizado Correctamente"); 
                                            var url = '4MantenimientoSueldo.php';    
                                            $(location).attr('href',url); //redirecciona al formulario verProveedores
                                        
                                        }
                            }
                    });
            }
            //de lo contrario si es otra accion realizara lo siguiente
           
           
            
        });
        //////////
        function cargarListaSeleccion(){
            $.ajax({
                        type:"POST",
                        url:"ajax/ajax4Reportes.php",
                        data:{      action:action,
                                    opcionEstadistica:opcionEstadistica
                                },
                        success:function(r){
                            $('#selectFiltroConsulta').html(r);
                        }
                        });
                    }
        //////////
        //////////
        function cargarListaRegion(){
            $.ajax({
                        type:"POST",
                        url:"ajax/ajax4Reportes.php",
                        data:{      action:action,
                                    opcionRegion:opcionRegion
                                },
                        success:function(r){
                            $('#selectFiltroQuejasporRegion').html(r);
                        }
                        });
                    }
        //////////
        function cargarTablaListaQuejas(){
            $.ajax({
                        type:"POST",
                        url:"ajax/ajax4Reportes.php",
                        data:{      action:action,
                                    opcionQuejasPor:opcionQuejasPor,
                                    opcionFiltro:opcionFiltro
                                },
                        success:function(r){
                            $('#cuerpoTablaQueja').html(r);
                        }
                        });
                    }

        function cargarTablaListaQuejasporRegion(){
            $.ajax({
                        type:"POST",
                        url:"ajax/ajax4Reportes.php",
                        data:{      action:action,
                                    selectOpcionQuejasporRegion:selectOpcionQuejasporRegion,
                                    selectFiltroQuejasporRegion:selectFiltroQuejasporRegion,
                                    selectAnioQuejasporRegion:selectAnioQuejasporRegion
                                },
                        success:function(r){
                            $('#cuerpoTablaQuejaporRegion').html(r);
                        }
                        });
                    }

        ////
        function cargarTablaListaSinQuejasporRegion(){
            $.ajax({
                        type:"POST",
                        url:"ajax/ajax4Reportes.php",
                        data:{      action:action,
                                    selectOpcionRegionSinQuejas:selectOpcionRegionSinQuejas,
                                    
                                },
                        success:function(r){
                            $('#cuerpoTablaSINQuejaporRegion').html(r);
                        }
                        });
                    }

                     ////
        function cargarTablaListaRangoFechaQuejas(){
            $.ajax({
                        type:"POST",
                        url:"ajax/ajax4Reportes.php",
                        data:{      
                                    action:action,
                                    fechaInicial:fechaInicial,
                                    fechaFinal:fechaFinal
                                    
                                },
                        success:function(r){
                            $('#cuerpoTablaQuejaRangoFecha').html(r);
                        }
                        });
                    }
        ////FIN FUNCIONES
    

}); // End Ready  //FIN DEL READY de la carga de la pagina 

