<?php 

//=========================INCIO del if del AJAXX===============================================================================================================================================================
if ($_POST) { 
    # code...
//Varaibles y archivos de conexion externos
include("../config/testconexion.php");



//=========================LISTA DE CONDICIONALES IF===============================================================================================================================================================
    
     //////////////////Funcion para guardar una nueva sucursal 
     if ($_POST['action']==='obtenerOpcion'){
        $opcionEstadistica=$_POST['opcionEstadistica'];
        
        if ($opcionEstadistica==1){ //carga al select los comercios
            $sql="SELECT id_comercio_detalle,nombreSucursal FROM todasSucursales ";
            $result=mysqli_query($conexionbd,$sql);
            $cadena="<option value='0'>Selecciona Opcion</option>";
            while ($ver=mysqli_fetch_row($result)) {
                                                    $cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[1]).'</option>';
                                                    }
            echo  $cadena;
        }
        else if ($opcionEstadistica==2){ //carga al select los Municipios
            $sql="SELECT id_municipio,municipio FROM todasUbicaciones ";
            $result=mysqli_query($conexionbd,$sql);
            $cadena="<option value='0'>Selecciona Opcion</option>";
            while ($ver=mysqli_fetch_row($result)) {
                                                    $cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[1]).'</option>';
                                                    }
            echo  $cadena;
        }
        
        else if ($opcionEstadistica==3){ //carga al select los Departamentos
            $sql="SELECT id_departamento,departamento FROM todosDepartamentos ";
            $result=mysqli_query($conexionbd,$sql);
            $cadena="<option value='0'>Selecciona Opcion</option>";
            while ($ver=mysqli_fetch_row($result)) {
                                                    $cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[1]).'</option>';
                                                    }
            echo  $cadena;
        }

        else if ($opcionEstadistica==4){ //carga al select las Regiones
            $sql="SELECT id_region,region FROM region ";
            $result=mysqli_query($conexionbd,$sql);
            $cadena="<option value='0'>Selecciona Opcion</option>";
            while ($ver=mysqli_fetch_row($result)) {
                                                    $cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[1]).'</option>';
                                                    }
            echo  $cadena;
        }

    } //////////////////////

    //////////////////Funcion para guardar una nueva sucursal 
    if ($_POST['action']==='obtenerTablaDatosQuejas'){
        
        $opcionQuejasPor=$_POST['opcionQuejasPor'];
        $opcionFiltro=$_POST['opcionFiltro'];

        if ($opcionQuejasPor==1){

            $sql="SELECT fechaQueja,asuntoQueja,descripcionQueja, nombreSucursal,municipio,departamento,region FROM todasQuejas where id_comercio_detalle=$opcionFiltro";
            $result=mysqli_query($conexionbd,$sql);
            $num_rows = mysqli_num_rows($result);

            
           
        }

        if ($opcionQuejasPor==2){
            $sql="SELECT fechaQueja,asuntoQueja,descripcionQueja, nombreSucursal,municipio,departamento,region FROM todasQuejas where id_municipio=$opcionFiltro";
            $result=mysqli_query($conexionbd,$sql);
            $num_rows = mysqli_num_rows($result);
            
        }
        if ($opcionQuejasPor==3){
            $sql="SELECT fechaQueja,asuntoQueja,descripcionQueja, nombreSucursal,municipio,departamento,region FROM todasQuejas where id_departamento=$opcionFiltro";
            $result=mysqli_query($conexionbd,$sql);
            $num_rows = mysqli_num_rows($result);
            
        }

        if ($opcionQuejasPor==4){
            $sql="SELECT fechaQueja,asuntoQueja,descripcionQueja, nombreSucursal,municipio,departamento,region FROM todasQuejas where id_region=$opcionFiltro";
            $result=mysqli_query($conexionbd,$sql);
            $num_rows = mysqli_num_rows($result);
            
        }
        $cadena="";
            if ($num_rows > 0) {
            while ($ver = mysqli_fetch_assoc($result)) {
            // while ($ver=mysqli_fetch_row($result)) {
                 //$cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[1]).'</option>';
                    $cadena="$cadena.<tr>";
                    $cadena=$cadena.'<td class="text-center">'.$ver['fechaQueja'].'</td>';
                    $cadena=$cadena.'<td class="text-center">'.$ver['asuntoQueja'].'</td>';
                    $cadena=$cadena.'<td class="text-center">'.$ver['descripcionQueja'].'</td>';
                    $cadena=$cadena.'<td class="text-center">'.$ver['nombreSucursal'].'</td>';
                    $cadena=$cadena.'<td class="text-center">'.utf8_encode($ver['municipio']).'</td>';
                    $cadena=$cadena.'<td class="text-center">'.$ver['departamento'].'</td>';
                    $cadena=$cadena.'<td class="text-center">'.$ver['region'].'</td>';
                    $cadena="$cadena.</tr>";
                }
            }else{
                echo $cadena="notData";
            } 
        echo  $cadena;

    } ////////////////////////////fin del if 

    //////////////////Funcion para guardar una COMISION de EMPLEADOS 
    if ($_POST['action']==='obtenerSucursalesporRegion'){
        $opcionRegion=$_POST['opcionRegion'];
        
        
            $sql="SELECT id_comercio_detalle,nombreSucursal FROM todosComerciosporRegion where id_region = '$opcionRegion' ";
            $result=mysqli_query($conexionbd,$sql);
            $cadena="<option value='0'>Selecciona Opcion</option>";
            while ($ver=mysqli_fetch_row($result)) {
                                                    $cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[1]).'</option>';
                                                    }
            echo  $cadena;
       
    

    } ////////////////////////////fin del if 

 //////////////////Funcion para guardar una nueva sucursal 
    if ($_POST['action']==='obtenerTablaQuejasporRegion'){
        
    
    $selectOpcionQuejasporRegion=$_POST['selectOpcionQuejasporRegion'];//region
    $selectFiltroQuejasporRegion=$_POST['selectFiltroQuejasporRegion'];//comercio o sucursal
    $selectAnioQuejasporRegion=$_POST['selectAnioQuejasporRegion'];//anio



        $sql="SELECT * FROM quejas LEFT JOIN comercio_detalle AS Sucursal ON quejas.comercio_detalle_id_comercio_detalle=Sucursal.id_comercio_detalle
        INNER JOIN comercio ON Sucursal.comercio_id_comercio=comercio.id_comercio
        INNER JOIN municipio ON Sucursal.municipio_id_municipio=municipio.id_municipio
        INNER JOIN departamento ON municipio.departamento_id_departamento=departamento.id_departamento
        INNER JOIN region ON departamento.region_id_region=region.id_region 
        where id_comercio_detalle= $selectFiltroQuejasporRegion AND id_region = $selectOpcionQuejasporRegion AND YEAR(fechaQueja) = $selectAnioQuejasporRegion";
        $result=mysqli_query($conexionbd,$sql);
        $num_rows = mysqli_num_rows($result);
        

    $cadena="";
        if ($num_rows > 0) {
        while ($ver = mysqli_fetch_assoc($result)) {
        // while ($ver=mysqli_fetch_row($result)) {
             //$cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[1]).'</option>';
                $cadena="$cadena.<tr>";
                $cadena=$cadena.'<td class="text-center">'.$ver['fechaQueja'].'</td>';
                $cadena=$cadena.'<td class="text-center">'.$ver['asuntoQueja'].'</td>';
                $cadena=$cadena.'<td class="text-center">'.$ver['descripcionQueja'].'</td>';
                $cadena=$cadena.'<td class="text-center">'.$ver['nombreSucursal'].'</td>';
                $cadena=$cadena.'<td class="text-center">'.utf8_encode($ver['municipio']).'</td>';
                $cadena=$cadena.'<td class="text-center">'.$ver['departamento'].'</td>';
                $cadena=$cadena.'<td class="text-center">'.$ver['region'].'</td>';
                $cadena="$cadena.</tr>";
            }
        }else{
            echo $cadena="notData";
        } 
    echo  $cadena;

} ////////////////////////////fin del if 

 //////////////////Funcion para guardar una nueva sucursal 
 if ($_POST['action']==='obtenerTablaSinQuejasporRegion'){
        
    
    $selectOpcionRegionSinQuejas=$_POST['selectOpcionRegionSinQuejas'];//region
   



        $sql="SELECT nombreSucursal,tipoSucursal,municipio,departamento,region FROM quejas RIGHT JOIN comercio_detalle AS Sucursal ON quejas.comercio_detalle_id_comercio_detalle=Sucursal.id_comercio_detalle
        INNER JOIN comercio ON Sucursal.comercio_id_comercio=comercio.id_comercio
        INNER JOIN municipio ON Sucursal.municipio_id_municipio=municipio.id_municipio
        INNER JOIN departamento ON municipio.departamento_id_departamento=departamento.id_departamento
        INNER JOIN region ON departamento.region_id_region=region.id_region WHERE id_region = $selectOpcionRegionSinQuejas  AND  id_quejas is NULL ;";
        $result=mysqli_query($conexionbd,$sql);
        $num_rows = mysqli_num_rows($result);
        

    $cadena="";
        if ($num_rows > 0) {
        while ($ver = mysqli_fetch_assoc($result)) {
        // while ($ver=mysqli_fetch_row($result)) {
             //$cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[1]).'</option>';
                $cadena="$cadena.<tr>";
                $cadena=$cadena.'<td class="text-center">'.$ver['nombreSucursal'].'</td>';
                $cadena=$cadena.'<td class="text-center">'.$ver['tipoSucursal'].'</td>';
                $cadena=$cadena.'<td class="text-center">'.utf8_encode($ver['municipio']).'</td>';
                $cadena=$cadena.'<td class="text-center">'.$ver['departamento'].'</td>';
                $cadena=$cadena.'<td class="text-center">'.$ver['region'].'</td>';
                $cadena="$cadena.</tr>";
            }
        }else{
            echo $cadena="notData";
        } 
    echo  $cadena;

} ////////////////////////////fin del if 

 //////////////////Funcion para guardar una nueva sucursal 
 if ($_POST['action']==='obtenerTablaDatosQuejasRangoFecha'){
        
    
    $fechaInicial=$_POST['fechaInicial'];//region
    $fechaFinal=$_POST['fechaFinal'];//region



    $sql="SELECT Date(fechaQueja) as Fecha,asuntoQueja,descripcionQueja, nombreSucursal,municipio,departamento,region 
    FROM todasQuejas where fechaQueja >= ' $fechaInicial' and fechaQueja < ADDDATE('$fechaFinal',1)  ORDER BY fechaQueja ASC";
        $result=mysqli_query($conexionbd,$sql);
        $num_rows = mysqli_num_rows($result);
        

    $cadena="";
        if ($num_rows > 0) {
        while ($ver = mysqli_fetch_assoc($result)) {
        // while ($ver=mysqli_fetch_row($result)) {
             //$cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[1]).'</option>';
            $cadena="$cadena.<tr>";
            $cadena=$cadena.'<td class="text-center">'.$ver['Fecha'].'</td>';
            $cadena=$cadena.'<td class="text-center">'.$ver['asuntoQueja'].'</td>';
            $cadena=$cadena.'<td class="text-center">'.$ver['descripcionQueja'].'</td>';
            $cadena=$cadena.'<td class="text-center">'.$ver['nombreSucursal'].'</td>';
            $cadena=$cadena.'<td class="text-center">'.utf8_encode($ver['municipio']).'</td>';
            $cadena=$cadena.'<td class="text-center">'.$ver['departamento'].'</td>';
            $cadena=$cadena.'<td class="text-center">'.$ver['region'].'</td>';
            $cadena="$cadena.</tr>";
            }
        }else{
            echo $cadena="notData";
        } 
    echo  $cadena;

} ////////////////////////////fin del if 


    
} //=========================fin del if del AJAXX===============================================================================================================================================================

//===================fin del archivo ajaxKARDEX
?>