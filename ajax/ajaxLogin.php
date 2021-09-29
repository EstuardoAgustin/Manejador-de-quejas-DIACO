<?php 

//=========================INCIO del if del AJAXX===============================================================================================================================================================
if ($_POST) { 
    # code...
//Varaibles y archivos de conexion externos
include("../config/conexion.php");



//=========================LISTA DE CONDICIONALES IF===============================================================================================================================================================
//////CARGAR

if ($_POST['action']==='login'){
    session_start();

     $data2 = array();

     //SELECT idUsuario,usuario,ciudadSucursal,passUsuario FROM usuario inner join sucursal on usuario.Sucursal_idSucursal=sucursal.idSucursal where usuario
     $result = mysqli_query($conexionbd,"SELECT * FROM usuario where usuario='" . $_POST["nombreUsuario"] . "' and usuarioContrasena = '". $_POST["passUsuario"]."'");
     $row  = mysqli_fetch_array($result);
     if(is_array($row)) {
     $_SESSION["id"] = $row['usu_id'];
     $_SESSION["username"] = $row['usuario'];
     
     $_SESSION["name"] = $row['usuarioNombre'];
     $_SESSION["usuarioEstatus"] = $row['usuarioEstatus'];
     $_SESSION["rol"] = $row['rol_idrol'];
     $data2= $row['usuario'];
     } else {
     // $message = "Invalid Username or Password!";
      $data2='error';
     }
 
    
        echo json_encode($data2); //devuelve el resultado
        exit;
   

} //fin del if que consulta datos del asesor 

//////CARGAR Datos Select

if ($_POST['action']==='obtenerMunicipios'){
            $departamentoID=$_POST['departamentoID'];

            $sql="SELECT id_municipio,municipio FROM todasUbicaciones where id_departamento= $departamentoID ";
            $result=mysqli_query($conexionbd,$sql);
            $cadena="";
            $cadena="<option value='0'>Selecciona Opcion</option>";
            //$cadena="<select name='selectMunicipioQ' id='selectMunicipioQ' class= 'form-control' required>";
            while ($ver=mysqli_fetch_row($result)) {
                $cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[1]).'</option>';
            }

            //echo  $cadena."</select>";
            echo  $cadena;

} //fin del if 

if ($_POST['action']==='obtenerComerciosMunicipio'){
    $municipioID=$_POST['municipioID'];

    $sql="SELECT DISTINCT(id_comercio),nombreComercio,municipio_id_municipio FROM todasSucursales where municipio_id_municipio= $municipioID ";
    $result=mysqli_query($conexionbd,$sql);
    $cadena="";
    $cadena="<option value='0'>Selecciona Opcion</option>";
    // $cadena="<select name='selectComercioQueja' id='selectComercioQueja' class= 'form-control' required>";
    while ($ver=mysqli_fetch_row($result)) {
        $cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[1]).'</option>';
    }

    echo  $cadena;

} //fin del if 

///listar sucursales comercio
if ($_POST['action']==='obtenerSucursalesComercio'){
    $comercioID=$_POST['comercioID'];
    $municipioID=$_POST['municipioID'];
    
    $sql="SELECT id_comercio_detalle, nombreSucursal, tipoSucursal,  municipio_id_municipio,id_comercio 
        FROM todasSucursales where municipio_id_municipio=$municipioID AND id_comercio =$comercioID;";
    $result=mysqli_query($conexionbd,$sql);
    $cadena="";
    //$cadena="<select name='sucursalQueja' id='sucursalQueja' class= 'form-control' required>";
   
    while ($ver=mysqli_fetch_row($result)) {
        $cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[1]).'-'.utf8_encode($ver[2]).'</option>';
    }

    echo  $cadena;

} //fin del if 
/////CARGAR


if ($_POST['action']==='guardarQueja'){
    $data2 = array();
    $selectdepartamentoQueja=$_POST['selectdepartamentoQueja'];
    $selectMunicipioQueja=$_POST['selectMunicipioQueja'];
    $selectComercioQueja=$_POST['selectComercioQueja'];
    $selectSucursalQueja=$_POST['selectSucursalQueja'];
    $asunto=$_POST['asunto'];
    $descripcionQueja=$_POST['descripcionQueja'];
    
    $optionCRUD=1;
    
    

    $queryMYSQL="call INSERTqueja('$asunto', '$descripcionQueja', $selectSucursalQueja, $optionCRUD);";

        $resultado=mysqli_query($conexionbd,$queryMYSQL);
        
        if($resultado){
    
            $data2='successful';
        
        }
        else {
        
        
            $data2='error';
        }
        echo json_encode($data2); //devuelve el resultado
        exit;


} ////////////////////////////fin del if 





//=========================FIN DE LISTA DE CONDICIONALES IF===============================================================================================================================================================
} //=========================fin del if del AJAXX===============================================================================================================================================================

//===================fin del archivo ajaxKARDEX
?>