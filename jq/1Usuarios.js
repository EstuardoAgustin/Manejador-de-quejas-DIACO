$(document).ready(function(){
    //===================VARIABLES ========================
    console.log("esta funcionando JS de Mantenimiento Sueldo correctamente");
    var fila; //captura valores de la fila para editar, ver, ver asesores asociado
    
    var action="nohayaccion";// incializa
    // boton editar  Proveedor
    //================FIN VARIABLES
    //================INICIO FUNCIONES
    //incializa la tabla con la libreria DataTable que lista todos 
    tablaVerUsuarios = $('#tablaVerUsuarios').DataTable({  // incializa la
        "columnDefs":[{
        "targets": -1,
        "data":null,
        // incia 3 botones del dataTable 
        "defaultContent": "<div class='text-center'><div class='button-style-three'> <button type='button' class='btn btn-custon-rounded-three btn-danger btnVerUsuario'>Ver / Editar</button> </div></div>"  
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
    tablaRoles = $('#tablaRoles').DataTable({  // incializa la
        
        
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
        $("#verUsuarios").click(function(){
            const $contenedordivUsuarios= document.querySelector("#divtodosUsuarios"); //selecciona el elemento del modal y lo pasa a una variable local
            $contenedordivUsuarios.style.display = "block"; // muestra el boton guardar
            const $contenedordivRoles = document.querySelector("#divRoles"); //selecciona el elemento del modal y lo pasa a una variable local
            $contenedordivRoles.style.display = "none"; // muestra el boton guardar
           
    
        });
      // BOTON Mostrar Tipo de Empleado
      $("#verRoles").click(function(){
        const $contenedordivUsuarios= document.querySelector("#divtodosUsuarios"); //selecciona el elemento del modal y lo pasa a una variable local
        $contenedordivUsuarios.style.display = "none"; // muestra el boton guardar
        const $contenedordivRoles = document.querySelector("#divRoles"); //selecciona el elemento del modal y lo pasa a una variable local
        $contenedordivRoles.style.display = "block"; // muestra el boton guardar
       

    });
    //------------fin inicializacion de la estructura de DataTable que lista los

     // BOTON nuevo  MOdal
     $("#nuevoUsuario").click(function(){
        const $botonGuardar = document.querySelector("#guardarUsuario"); //selecciona el elemento del modal y lo pasa a una variable local
        $botonGuardar.style.display = "block"; //  muestra el boton guardar
        const $botonEditar = document.querySelector("#editarUsuario"); //selecciona el elemento del modal y lo pasa a una variable local
        $botonEditar.style.display = "none"; // NO muestra el boton guardar

       

        $(".modal-header").css("background-color","#0cd5ac");//cambia de colo el header del modal
        $(".modal-header").css("color","white"); //cambia el color de texto del header a blanco 
        $(".modal-title").text("Nuevo Usuario");//titulo del header
        $("#formNuevoUsuario").trigger("reset"); //vacia los campos
        $("#modalVerUsuario").modal("show"); //al cl

          //habilitamos campos qeu no se Actualizan 
          $("#noIdentificacionUsuario").removeAttr('disabled');
          $("#passUsuario").removeAttr('disabled');
        action="validarDPI"; //le da un valor globar a la variable que se usara en el submit del formulario modal nuevoProveedor
    });

    // BOTON nuevo  MOdal
    $("#nuevoRol").click(function(){
        const $botonGuardar = document.querySelector("#guardarRol"); //selecciona el elemento del modal y lo pasa a una variable local
        $botonGuardar.style.display = "block"; //  muestra el boton guardar
        const $botonEditar = document.querySelector("#editarRol"); //selecciona el elemento del modal y lo pasa a una variable local
        $botonEditar.style.display = "none"; // NO muestra el boton guardar
        $(".modal-header").css("background-color","#0cd5ac");//cambia de colo el header del modal
        $(".modal-header").css("color","white"); //cambia el color de texto del header a blanco 
        $(".modal-title").text("Nuevo Rol");//titulo del header
        $("#formRoles").trigger("reset"); //vacia los campos
        $("#modalRoles").modal("show"); //al cl
        action="guardarRol"; //le da un valor globar a la variable que se usara en el submit del formulario modal nuevoProveedor
    });

      // BOTON Mostrar Tipo de Empleado
        $("#formNuevoUsuario").submit(function( event ) { 
            
            idUsuario = $.trim($("#idUsuario").val()); // toma el valor que contenga los inputs 
            priNombreUsuario = $.trim($("#priNombreUsuario").val()); // toma el valor que contenga los inputs del formulario con el idnombreComercial y lo ingresa a una variable 
            nombreUsuario = $.trim($("#nombreUsuario").val());// toma el valor que contenga los inputs del formulario con el id proveedorNIT y lo ingresa a una variable 
            noIdentificacionUsuario = $.trim($("#noIdentificacionUsuario").val());
            passUsuario = $.trim($("#passUsuario").val());
            emailUsuario = $.trim($("#emailUsuario").val());
            estadoUsuario = $.trim($("#estadoUsuario").val());
            id_rolUsuario = $.trim($("#id_rolUsuario").val());

            
            if(action == 'validarDPI'){ 
                /////AJAX que valida si el SKU es repetido o es unico
                $.ajax({ //aqui se indica que vamos a hacer con los datos obtenidos del formulario
                    type: "POST",
                    url: "ajax/ajax1Usuarios.php", //indica el Ajax donde se procesara los parametros enviados 
                    //data: parametros,
                    data: { action:action,
                            noIdentificacionUsuario:noIdentificacionUsuario
                           },
            
                        dataType: 'json', //indica que el valor que devuelve el ajax es json para poder manipular en js
                        beforeSend: function(objeto){},
                        success: function(data2){
                                            console.log(data2);
                                if(data2 == 'repetido'){ // en caso de que el valor de data2 que viene del ajaxProveedore sea replica es porque la comparacion con BD ya existia el dato y no se pudo ejecutar la consulta 
                                        Swal.fire({
                                        title: "DPI Repetido - Ingresar Otro", //titulo del modal
                                        icon: 'error', //tipo de advertencia modal
                                        timer: 3000                     
                                        });
                                        nitCliente = $("#noIdentificacionUsuario").val('');
                                       
                                    }
                            
                                else if(data2 == 'unico') { // de lo contrario el msj sera usuario guardado 
                                    console.log("DPI Unico Procedemos a ingresar Prod"); 
                                    action="guardarNuevoUsuario";
                                          //<<<<<<<<<<<<AJAX GUARDA PRODUCTO
                                             ////AJAX que Guarda el Producto
              
                                        $.ajax({ //AJAX aqui se indica que vamos a hacer con los datos obtenidos del formulario
                                            type: "POST",
                                            url: "ajax/ajax1Usuarios.php", //indica el Ajax donde se procesara los parametros enviados 
                                            
                                            data:   { 
                                                    action:action,
                                                    idUsuario:idUsuario,
                                                    priNombreUsuario:priNombreUsuario,
                                                    nombreUsuario:nombreUsuario,
                                                    noIdentificacionUsuario:noIdentificacionUsuario,
                                                    passUsuario:passUsuario,
                                                    emailUsuario:emailUsuario,
                                                    estadoUsuario:estadoUsuario,
                                                    id_rolUsuario:id_rolUsuario
                                                    },
                                    
                                                dataType: 'json', //indica que el valor que devuelve el ajax es json para poder manipular en js
                                                beforeSend: function(objeto){},
                                                success: function(data2){
                                                        console.log("imprimir Resultado de Guardar el Cliente"); 
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
                                                                        var url = '1Usuarios.php';    
                                                                        $(location).attr('href',url); //redirecciona al formulario verProveedores
                                                                        });
                                                
                                                                    
                                                            
                                                                }
                                                    }
                                            });////FIN del AJAX que guarda el producto
                                           
                                        }
                            }
                    });/////FIN AJAX que valida si el SKU es repetido o es unico

               
              
             }//fin de la condicional que selecciona si va guardar o editar cno el submit
             else if(action == 'editarDatosUsuario') { // de lo contrario 
                $.ajax({ //AJAX aqui se indica que vamos a hacer con los datos obtenidos del formulario
                    type: "POST",
                    url: "ajax/ajax1Usuarios.php", //indica el Ajax donde se procesara los parametros enviados 
                    //data: parametros,
                    data: { action:action,
                            idUsuario:idUsuario,
                            priNombreUsuario:priNombreUsuario,
                            nombreUsuario:nombreUsuario,
                            emailUsuario:emailUsuario,
                            estadoUsuario:estadoUsuario,
                            id_rolUsuario:id_rolUsuario
                            
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
                                            title: " Editado Exitosamente",
                                            icon: 'success',
                                            timer: 2000
                                            }).then(function() {
                                            //window.location = "2Sucursales.php";
                                            });
                    
                                            console.log("Producto Editado Correctamente"); 
                                            var url = '1Usuarios.php';    
                                            $(location).attr('href',url); //redirecciona al formulario verProveedores
                                    
                                        }
                            }
                    });
             }
        event.preventDefault();
        });
      
        // BOTON Mostrar Tipo de Empleado
        $("#formRoles").submit(function( event ) { 
            
            idRol = $.trim($("#idRol").val()); // toma el valor que contenga los inputs 
            nombreRol = $.trim($("#nombreRol").val()); // toma el valor que contenga los inputs del formulario con el idnombreComercial y lo ingresa a una variable 
            estadoRol = $.trim($("#estadoRol").val());// toma el valor que contenga los inputs del formulario con el id proveedorNIT y lo ingresa a una variable 
           

            
            if(action == 'guardarRol'){ 
                                            
                                            //<<<<<<<<<<<<AJAX GUARDA PRODUCTO
                                                ////AJAX que Guarda el Producto

                                        $.ajax({ //AJAX aqui se indica que vamos a hacer con los datos obtenidos del formulario
                                            type: "POST",
                                            url: "ajax/ajax1Usuarios.php", //indica el Ajax donde se procesara los parametros enviados 
                                            
                                            data:   { 
                                                    action:action,
                                                    idRol:idRol,
                                                    nombreRol:nombreRol,
                                                    estadoRol:estadoRol
                                                    
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
                                                                        var url = '1Usuarios.php';    
                                                                        $(location).attr('href',url); //redirecciona al formulario verProveedores
                                                                        });
                                                
                                                                    
                                                            
                                                                }
                                                    }
                                            });////FIN del AJAX que guarda el producto
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
        
       ///////////// BOTON ver TipoEmpleado
        $(document).on("click", ".btnVerUsuario", function(){
           
            fila = $(this).closest("tr");
            DPI_Usuario = parseInt(fila.find('td:eq(0)').text());
            nombreUsuario = fila.find('td:eq(1)').text();
            action = "obtener_datosUsuario";
            const $botonGuardar = document.querySelector("#guardarUsuario"); //selecciona el elemento del modal y lo pasa a una variable local
            $botonGuardar.style.display = "none"; //  muestra el boton guardar
            const $botonEditar = document.querySelector("#editarUsuario"); //selecciona el elemento del modal y lo pasa a una variable local
            $botonEditar.style.display = "block"; // NO muestra el boton guardar


            $("#modalVerUsuario").trigger("reset"); //vacia los campos 
           
            $.ajax({ //ajax que va obtener valores de tabla de proveedor con id
                url: './ajax/ajax1Usuarios.php', //al documento php ajax al cual iran los datos y de donde retornara valores de la consulta
                type: "POST",
                async: true,
                data: {action:action, DPI_Usuario:DPI_Usuario }, //envia valores al ajax action y el id
                
                success: function(response){ //recibe una respuesta con una array json
                console.log("Respuesta Datos Obtenidos USUARIO");
                console.log(action);
                
                    if (response != 'error') {
                            console.log(response); // imprimimos en consola para saber el array que nos devuelve
                            var data2 = JSON.parse(response); //parsea a fotmato el array del ajax en json
                            $('#idUsuario').val(data2.usu_id);
                            $('#priNombreUsuario').val(data2.usuarioNombre); // carga el valor de data2.nombre en un input del modal nuevo_proveedor el cual tenga el id nombreComercial y los de abajo tambien
                            $('#nombreUsuario').val(data2.usuario); // carga en el inpunt del modal con el id proveedorNIT lo que obtuvo de vuelta de la funcion obtener_datos del ajaxProveedore
                            $('#noIdentificacionUsuario').val(data2.usu_id);
                            $('#emailUsuario').val(data2.usuarioEmail);
                            $('#estadoUsuario').val(data2.usuarioEstatus);
                            $('#id_rolUsuario').val(data2.rol_idrol);
                            
                            //deshabilitamos campos qeu no se Actualizan 
                            $("#noIdentificacionUsuario").attr("disabled",true);
                            $("#passUsuario").attr("disabled",true);

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

        

        
        ////FIN FUNCIONES
    

}); // End Ready  //FIN DEL READY de la carga de la pagina 

