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
    tablaVerComercios = $('#tablaVerComercios').DataTable({  // incializa la
        "columnDefs":[{
        "targets": -1,
        "data":null,
        // incia 3 botones del dataTable 
        "defaultContent": "<div class='text-center'><div class='button-style-three'> <button type='button' class='btn btn-custon-rounded-three btn-danger btnVerComercio'>Ver / Editar</button>  </div></div>"  
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
    //------------fin inicializacion de la estructura de DataTable que lista los
    //incializa la tabla con la libreria DataTable que lista todos 
    tablaVerSucursales = $('#tablaVerSucursales').DataTable({  // incializa la
        "columnDefs":[{
        "targets": -1,
        "data":null,
        // incia 3 botones del dataTable 
        "defaultContent": "<div class='text-center'><div class='button-style-three'>  <button  type='button' class='btn btn-custon-rounded-three btn-danger btnVerSucursal'>Ver / Editar</button>  </div></div>"  
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
        $("#verComercios").click(function(){
            const $contenedordivComercios= document.querySelector("#divtodosComercios"); //selecciona el elemento del modal y lo pasa a una variable local
            $contenedordivComercios.style.display = "block"; // muestra el boton guardar
            const $contenedordivSucursales = document.querySelector("#divSucursales"); //selecciona el elemento del modal y lo pasa a una variable local
            $contenedordivSucursales.style.display = "none"; // muestra el boton guardar
           
    
        });
      // BOTON Mostrar Tipo de Empleado
      $("#verSucursales").click(function(){
        const $contenedordivComercios= document.querySelector("#divtodosComercios"); //selecciona el elemento del modal y lo pasa a una variable local
        $contenedordivComercios.style.display = "none"; // muestra el boton guardar
        const $contenedordivSucursales = document.querySelector("#divSucursales"); //selecciona el elemento del modal y lo pasa a una variable local
        $contenedordivSucursales.style.display = "block"; // muestra el boton guardar
       

    });
    //------------fin inicializacion de la estructura de DataTable que lista los

     // BOTON nuevo  MOdal
     $("#nuevoComercio").click(function(){
        const $botonGuardar = document.querySelector("#guardarComercio"); //selecciona el elemento del modal y lo pasa a una variable local
        $botonGuardar.style.display = "block"; //  muestra el boton guardar
        const $botonEditar = document.querySelector("#editarComercio"); //selecciona el elemento del modal y lo pasa a una variable local
        $botonEditar.style.display = "none"; // NO muestra el boton guardar
                            //mostrar div oculsto en btnVerEditar
                            $("#Direccion").removeAttr('disabled');
                            $("#nitComercio").removeAttr('disabled');
                            $("#telefonoComercio").removeAttr('disabled');
                            $("#email").removeAttr('disabled');
                            $("#municipio").removeAttr('disabled');
                            
                    


        $(".modal-header").css("background-color","#0cd5ac");//cambia de colo el header del modal
        $(".modal-header").css("color","white"); //cambia el color de texto del header a blanco 
        $(".modal-title").text("Nuevo Comercio");//titulo del header
        $("#formNuevoComercio").trigger("reset"); //vacia los campos
        $("#modalComercio").modal("show"); //al cl
        action="validarNIT"; //le da un valor globar a la variable que se usara en el submit del formulario modal nuevoProveedor
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
            
           
            

            
            if(action == 'validarNIT'){ 
                idComercio = $.trim($("#idComercio").val()); // toma el valor que contenga los inputs 
                nombreComercio = $.trim($("#nombreComercio").val()); // toma el valor que contenga los inputs del formulario con el idnombreComercial y lo ingresa a una variable 
                Direccion = $.trim($("#Direccion").val());// toma el valor que contenga los inputs del formulario con el id proveedorNIT y lo ingresa a una variable 
                nitComercio = $.trim($("#nitComercio").val());
                Telefono = $.trim($("#Telefono").val());
                email = $.trim($("#email").val());
                municipio = $.trim($("#municipio").val());
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
             else if(action == 'editarDatosComercio') { // de lo contrario 
                idComercio = $.trim($("#idComercio").val()); // toma el valor que contenga los inputs 
                nombreComercio = $.trim($("#nombreComercio").val()); // toma el valor que contenga los inputs del formulario con el idnombreComercial y lo ingresa a una variable 
               
                $.ajax({ //AJAX aqui se indica que vamos a hacer con los datos obtenidos del formulario
                    type: "POST",
                    url: "ajax/ajax2Comercios.php", //indica el Ajax donde se procesara los parametros enviados 
                    //data: parametros,
                    data: { action:action,
                            idComercio:idComercio,
                            nombreComercio:nombreComercio
                            
                        },
            
                        dataType: 'json', //indica que el valor que devuelve el ajax es json para poder manipular en js
                        beforeSend: function(objeto){},
                        success: function(data2){
                                console.log("imprimir Resultado de Editar"); 
                                
                                            
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
                                            title: "Editado Exitosamente",
                                            icon: 'success',
                                            timer: 2000
                                            }).then(function() {
                                            //window.location = "2Sucursales.php";
                                            });
                    
                                            console.log("Editado Correctamente"); 
                                            var url = '2Comercios.php';    
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
             else if(action == 'editarDatosSucursal') { // de lo contrario 
                $.ajax({ //AJAX aqui se indica que vamos a hacer con los datos obtenidos del formulario
                    type: "POST",
                    url: "ajax/ajax2Comercios.php", //indica el Ajax donde se procesara los parametros enviados 
                    //data: parametros,
                    data: { action:action,
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
                                console.log("imprimir Resultado de Editar"); 
                                
                                            
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
                                            title: "Editado Exitosamente",
                                            icon: 'success',
                                            timer: 2000
                                            }).then(function() {
                                            //window.location = "2Sucursales.php";
                                            });
                    
                                            console.log("Editado Correctamente"); 
                                            var url = '2Comercios.php';    
                                            $(location).attr('href',url); //redirecciona al formulario verProveedores
                                    
                                        }
                            }
                    });
             }
        event.preventDefault();
        });
        
       ///////////// BOTON ver TipoEmpleado
        $(document).on("click", ".btnVerComercio", function(){
            fila = $(this).closest("tr");
            ID_Comercio = parseInt(fila.find('td:eq(0)').text());
            nombreComercio = fila.find('td:eq(1)').text();
            action = "obtener_datosComercio";

            const $botonGuardar = document.querySelector("#guardarComercio"); //selecciona el elemento del modal y lo pasa a una variable local
            $botonGuardar.style.display = "none"; //  muestra el boton guardar
            const $botonEditar = document.querySelector("#editarComercio"); //selecciona el elemento del modal y lo pasa a una variable local
            $botonEditar.style.display = "block"; // NO muestra el boton guardar
           
            $("#formNuevoComercio").trigger("reset"); //vacia los campos 
           
            $.ajax({ //ajax que va obtener valores de tabla de proveedor con id
                url: './ajax/ajax2Comercios.php', //al documento php ajax al cual iran los datos y de donde retornara valores de la consulta
                type: "POST",
                async: true,
                data: {action:action, ID_Comercio:ID_Comercio }, //envia valores al ajax action y el id
                
                success: function(response){ //recibe una respuesta con una array json
                console.log("Respuesta Datos Obtenidos USUARIO");
                console.log(action);
                
                    if (response != 'error') {
                            console.log(response); // imprimimos en consola para saber el array que nos devuelve
                            var data2 = JSON.parse(response); //parsea a fotmato el array del ajax en json
                             $('#idComercio').val(data2.id_comercio);
                             $('#nombreComercio').val(data2.nombreComercio); // carga el valor de data2.nombre en un input del modal nuevo_proveedor el cual tenga el id nombreComercial y los de abajo tambien
                            
                            
                           
                            $("#Direccion").attr("disabled",true);
                            $("#nitComercio").attr("disabled",true);
                            $("#telefonoComercio").attr("disabled",true);
                            $("#email").attr("disabled",true);
                            $("#municipio").attr("disabled",true);
                            
                            

                            $(".modal-header").css("background-color","#21c87a");//cambia de colo el header del modal
                            $(".modal-header").css("color","white"); //cambia el color de texto del header a blanco 
                            $(".modal-title").text("Mantenimiento Comercio");//titulo del header
                           
                            $("#modalComercio").modal("show"); //al clickear el boton nuevo proveedor lanza el modal que tiene el id Modal_Nuevo_Proveedor el cual es una clase alojada en /modal/editarProveedor llamada desde el archivo verProveedor
                            action = "editarDatosComercio";//setea el valor nuevo de accion en este caso editar privilegio
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
        $(document).on("click", ".btnVerSucursal", function(){

            fila = $(this).closest("tr");
            ID_Sucursal = parseInt(fila.find('td:eq(0)').text());
            nombreSucursal= fila.find('td:eq(1)').text();
            action = "obtener_datosSucursal";

            const $botonGuardar = document.querySelector("#guardarSucursal"); //selecciona el elemento del modal y lo pasa a una variable local
            $botonGuardar.style.display = "none"; //  muestra el boton guardar
            const $botonEditar = document.querySelector("#editarSucursal"); //selecciona el elemento del modal y lo pasa a una variable local
            $botonEditar.style.display = "block"; // NO muestra el boton guardar
           
            $("#formNuevaSucursal").trigger("reset"); //vacia los campos 
           
            $.ajax({ //ajax que va obtener valores de tabla de proveedor con id
                url: './ajax/ajax2Comercios.php', //al documento php ajax al cual iran los datos y de donde retornara valores de la consulta
                type: "POST",
                async: true,
                data: {action:action, ID_Sucursal:ID_Sucursal }, //envia valores al ajax action y el id
                
                success: function(response){ //recibe una respuesta con una array json
                console.log("Respuesta Datos Obtenidos");
                console.log(action);
                
                    if (response != 'error') {
                            console.log(response); // imprimimos en consola para saber el array que nos devuelve
                            var data2 = JSON.parse(response); //parsea a fotmato el array del ajax en json
                            $('#idSucursal').val(data2.id_comercio_detalle);
                            $('#nombreSucursal').val(data2.nombreSucursal); // carga el valor de data2.nombre en un input del modal nuevo_proveedor el cual tenga el id nombreComercial y los de abajo tambien
                            $("#DireccionSucursal").val(data2.direccionSucursal);
                            $("#nitComercioCentral").val(data2.comercio_id_comercio);
                            $("#TelefonoSucursal").val(data2.telefonoSucursal);
                            $("#emailSucursal").val(data2.correoSucursal);
                            $("#municipioSucursal").val(data2.municipio_id_municipio);
                            $("#tipoSucursal").val(data2.tipoSucursal);
                            
                            

                            $(".modal-header").css("background-color","#21c87a");//cambia de colo el header del modal
                            $(".modal-header").css("color","white"); //cambia el color de texto del header a blanco 
                            $(".modal-title").text("Mantenimiento Sucursal");//titulo del header
                           
                            $("#modalSucursal").modal("show"); //al clickear el boton nuevo proveedor lanza el modal que tiene el id Modal_Nuevo_Proveedor el cual es una clase alojada en /modal/editarProveedor llamada desde el archivo verProveedor
                            action = "editarDatosSucursal";//setea el valor nuevo de accion en este caso editar privilegio
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

       
        //////////

        
        ////FIN FUNCIONES
    

}); // End Ready  //FIN DEL READY de la carga de la pagina 

