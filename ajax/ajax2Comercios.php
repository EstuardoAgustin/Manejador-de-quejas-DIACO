<?php 

//=========================INCIO del if del AJAXX===============================================================================================================================================================
if ($_POST) { 
    # code...
//Varaibles y archivos de conexion externos
include("../config/testconexion.php");



//=========================LISTA DE CONDICIONALES IF===============================================================================================================================================================
    
    //////////////////Funcion para guardar una nueva sucursal 
    if ($_POST['action']==='guardarNuevoComercio'){
        $data2 = array();

        // $idUsuario=$_POST['idUsuario'];


        $idComercio=$_POST['idComercio'];
        $nombreComercio=$_POST['nombreComercio'];
        $Direccion=$_POST['Direccion'];
        $nitComercio=$_POST['nitComercio'];
        $Telefono=$_POST['Telefono'];
        $email=$_POST['email'];
        $municipio=$_POST['municipio'];
        $CRUDoption=1; // indica que la opcion del procedimeitno sera 1 de insertar 



        
        
        $queryNuevoUsuario="call CRUDcomercios($nitComercio, '$nombreComercio', '$Direccion', '$Telefono', '$email', $municipio, $CRUDoption);";

            $resultado=mysqli_query($conexionbd,$queryNuevoUsuario);
            
            if($resultado){
        
                $data2='successful';
            
            }
            else {
            
            
                $data2='error';
            }
            echo json_encode($data2); //devuelve el resultado
            exit;
    

    } ////////////////////////////fin del if 
    //////////////////Funcion para guardar una COMISION de EMPLEADOS usadoo DIACO
    if ($_POST['action']==='guardarSucursal'){
        $data2 = array();

        
        $idSucursal=0;
        $nombreSucursal=$_POST['nombreSucursal'];
        $Direccion=$_POST['DireccionSucursal'];
        $nitComercio=$_POST['nitComercioCentral'];
        $Telefono=$_POST['TelefonoSucursal'];
        $email=$_POST['emailSucursal'];
        $municipio=$_POST['municipioSucursal'];
        $tipoSucursal=$_POST['tipoSucursal'];
        
        $optionCRUD=1;
        
        

        $queryComisionEmpleado="call CRUDsucursal($nitComercio,  $idSucursal, '$nombreSucursal', '$Direccion',  '$Telefono', '$email', $municipio, '$tipoSucursal', $optionCRUD);";

            $resultado=mysqli_query($conexionbd,$queryComisionEmpleado);
            
            if($resultado){
        
                $data2='successful';
            
            }
            else {
            
            
                $data2='error';
            }
            echo json_encode($data2); //devuelve el resultado
            exit;
    

    } ////////////////////////////fin del if 


    
    //Editar TIPO Sueldo empleado 
    if ($_POST['action'] == "obtener_datosComercio" ) {
        # code...
        $data2 = array();
        $ID_Comercio=$_POST['ID_Comercio'];
        $nitComercio=0;
        $nombreComercio="0";
        $Direccion="0";
        $Telefono="0";
        $email="0";
        $municipio=0;
        $CRUDoption=2;
        //call CRUDcomercios($nitComercio, '$nombreComercio', '$Direccion', '$Telefono', '$email', $municipio, $CRUDoption);
        if (!empty($_POST['ID_Comercio'])) {
            # code...
            $data = array();
            $ID_Comercio = $_POST['ID_Comercio'];
            $query_select = mysqli_query($conexionbd,"SELECT * FROM comercio where id_comercio=$ID_Comercio");
            $num_rows = mysqli_num_rows($query_select);
        
                if ($num_rows > 0) {
                    # code...
                    $data=mysqli_fetch_assoc($query_select);
                    echo  json_encode($data, JSON_UNESCAPED_UNICODE);
                }else{
                    echo "error";
                }
        
            exit;
        }
    
    
    }
    ////////////////
    
    //Editar TIPO COMISION empleado 
    if ($_POST['action'] == "editarDatosComercio" ) {
        # code...
        $data2 = array();
        $idComercio=$_POST['idComercio'];
        $nombreComercio =$_POST['nombreComercio'];
        $Direccion="0";
        $Telefono="0";
        $email="0";
        $municipio=0;
        $CRUDoption=2;
        //call CRUDcomercios($idComercio, '$nombreComercio', '$Direccion', '$Telefono', '$email', $municipio, $CRUDoption);
        
        if (!empty($_POST['idComercio'])) {
            # code...
            $sqlvalidarID= "SELECT * FROM comercio where id_comercio =  $idComercio";
            $res1=mysqli_query($conexionbd,$sqlvalidarID);
                        while ($data=mysqli_fetch_row($res1)){
                                                        $contador = $data[0];
                                                        }
                        if ($contador > 0)   {
                                            $queryUPDATE="CALL CRUDcomercios($idComercio, '$nombreComercio', '$Direccion', '$Telefono', '$email', $municipio, $CRUDoption)";
                                           
                                            $resultado=mysqli_query($conexionbd,$queryUPDATE);
                                            if($resultado){
                                                $data2='successful';
                                            }
                                            else {
                                                $data2='error';
                                                }
                                            }
                                     else{
                                            $data2 = 'error';
                                         }
                                            
                                         echo json_encode($data2); //devuelve el resultado
                                         exit;
        
            exit;
        }
    
    
    }
    /////////////
     // Obtener datos Sucursal
    if ($_POST['action'] == "obtener_datosSucursal" ) {
        # code...
       
        
        if (!empty($_POST['ID_Sucursal'])) {
            # code...
       
            $data = array();
            $ID_Sucursal = $_POST['ID_Sucursal'];
            $query_select = mysqli_query($conexionbd,"SELECT * FROM comercio_detalle where id_comercio_detalle=$ID_Sucursal");
            $num_rows = mysqli_num_rows($query_select);
        
                if ($num_rows > 0) {
                    # code...
                    $data=mysqli_fetch_assoc($query_select);
                    echo  json_encode($data, JSON_UNESCAPED_UNICODE);
                }else{
                    echo "error";
                }
        
            exit;
        }
    
    
    }
    /////////////
     //Editar TIPO COMISION empleado 
    if ($_POST['action'] == "editarDatosSucursal" ) {
        # code...
        $data2 = array();
        $idSucursal=$_POST['idSucursal'];
        $nombreSucursal=$_POST['nombreSucursal'];
        $DireccionSucursal=$_POST['DireccionSucursal'];
        $nitComercioCentral=$_POST['nitComercioCentral'];
        $TelefonoSucursal=$_POST['TelefonoSucursal'];
        $emailSucursal=$_POST['emailSucursal'];
        $municipioSucursal=$_POST['municipioSucursal'];
        $tipoSucursal=$_POST['tipoSucursal'];

        $CRUDoption=2;
        //call CRUDcomercios($idComercio, '$nombreComercio', '$Direccion', '$Telefono', '$email', $municipio, $CRUDoption);
        
        if (!empty($_POST['idSucursal'])) {
            # code...
            $sqlvalidarID= "SELECT * FROM comercio_detalle where id_comercio_detalle =  $idSucursal";
            $res1=mysqli_query($conexionbd,$sqlvalidarID);
                        while ($data=mysqli_fetch_row($res1)){
                                                        $contador = $data[0];
                                                        }
                        if ($contador > 0)   {
                                            $queryUPDATE="CALL CRUDsucursal($nitComercioCentral,  $idSucursal, '$nombreSucursal', '$DireccionSucursal',  '$TelefonoSucursal', '$emailSucursal', $municipioSucursal, '$tipoSucursal', $CRUDoption)";
                                        
                                            $resultado=mysqli_query($conexionbd,$queryUPDATE);
                                            if($resultado){
                                                $data2='successful';
                                            }
                                            else {
                                                $data2='error';
                                                }
                                            }
                                    else{
                                            $data2 = 'error';
                                        }
                                            
                                         echo json_encode($data2); //devuelve el resultado
                                        exit;
        
            exit;
        }
    
    
    }
    /////////////
    //////////// Validar  Duplicado  USADO
    if ($_POST['action'] == "validarNIT" ) {
        # code...
     
        if(empty($_POST['nitComercio']) )//CONDIConal para que los campos no esten vacios
        {
            echo 'error';
        }else{
                    $nitComercio =$_POST['nitComercio'];
                    $data2 = array();
                    
                    $QueryMySQL="SELECT id_comercio FROM todosComercios where id_comercio='$nitComercio';";
                     $resultado=mysqli_query($conexionbd,$QueryMySQL);
                    
                     $numFILAS =mysqli_num_rows($resultado);
                        if ($numFILAS>0){
                                            $data2='repetido';
                                        }else{//condicional que nos indica si hay valores den el temporal
                                                $data2='unico';
                                                //echo "error response";
                                             }
                               
                                echo json_encode($data2); //devuelve el resultado
                                mysqli_close($conexionbd);
                                exit;
                    
                     
                     
         exit; }
    }/////////// fin Validar
} //=========================fin del if del AJAXX===============================================================================================================================================================

//===================fin del archivo ajaxKARDEX
?>