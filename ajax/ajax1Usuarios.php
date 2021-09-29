<?php 

//=========================INCIO del if del AJAXX===============================================================================================================================================================
if ($_POST) { 
    # code...
//Varaibles y archivos de conexion externos
include("../config/testconexion.php");



//=========================LISTA DE CONDICIONALES IF===============================================================================================================================================================
    
    //////////////////Funcion para guardar una nueva sucursal 
    if ($_POST['action']==='guardarNuevoUsuario'){
        $data2 = array();

        // $idUsuario=$_POST['idUsuario'];


        $idUsuario=$_POST['idUsuario'];
        $priNombreUsuario=$_POST['priNombreUsuario'];
        $nombreUsuario=$_POST['nombreUsuario'];
        $noIdentificacionUsuario=$_POST['noIdentificacionUsuario'];
        $passUsuario=$_POST['passUsuario'];
        $emailUsuario=$_POST['emailUsuario'];
        $estadoUsuario=$_POST['estadoUsuario'];
        $id_rolUsuario=$_POST['id_rolUsuario'];



        

        $queryNuevoUsuario="call CRUDusuarios($noIdentificacionUsuario, '$priNombreUsuario', '$nombreUsuario', '$passUsuario', '$estadoUsuario', '$emailUsuario', $id_rolUsuario, 1);";

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
    //////////////////Funcion para guardar una COMISION de EMPLEADOS 
    if ($_POST['action']==='guardarRol'){
        $data2 = array();

        $idRol=0;
        $nombreRol=$_POST['nombreRol'];
        $estadoRol=$_POST['estadoRol'];
        $optionCRUD=1;
        

        $queryComisionEmpleado="Call CRUDrol($idRol,'$nombreRol','$estadoRol',$optionCRUD) ";

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
    if ($_POST['action'] == "editarDatosUsuario" ) {
        # code...
        $data2 = array();
        $idUsuario=$_POST['idUsuario'];
        $priNombreUsuario=$_POST['priNombreUsuario'];
        $nombreUsuario=$_POST['nombreUsuario'];
        $emailUsuario=$_POST['emailUsuario'];
        $estadoUsuario=$_POST['estadoUsuario'];
        $id_rolUsuario=$_POST['id_rolUsuario'];
        $crudOption=2; // opcion de actualizacion procedimiento
        $passUsuario="0";

        
        
        if(!empty($_POST['idUsuario'])) {
            # code...
            $sqlvalidarID= "SELECT * FROM usuario where usu_id =  $idUsuario";
            $res1=mysqli_query($conexionbd,$sqlvalidarID);
                        while ($data=mysqli_fetch_row($res1)){
                                                        $contador = $data[0];
                                                        }
                        if ($contador > 0)   {
                                            $queryUPDATE="CALL CRUDusuarios($idUsuario, '$priNombreUsuario', '$nombreUsuario', '$passUsuario', '$estadoUsuario', '$emailUsuario', $id_rolUsuario, $crudOption) ";
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
    ////////////////
    
    /////////////
     // Obtener datos Sucursal
     if ($_POST['action'] == "obtener_datosUsuario" ) {
        # code...
       
        
        if (!empty($_POST['DPI_Usuario'])) {
            # code...
       
            $data = array();
            $DPI_Usuario = $_POST['DPI_Usuario'];
            $query_select = mysqli_query($conexionbd,"SELECT * FROM usuario where usu_id=$DPI_Usuario");
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
    //////////// Validar  Duplicado 
    if ($_POST['action'] == "validarDPI" ) {
        # code...
     
        if(empty($_POST['noIdentificacionUsuario']) )//CONDIConal para que los campos no esten vacios
        {
            echo 'error';
        }else{
                    $noIdentificacionUsuario =$_POST['noIdentificacionUsuario'];
                    $data2 = array();
                    
                    $QueryMySQL="SELECT usu_id FROM todoUsuarios where usu_id='$noIdentificacionUsuario';";
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