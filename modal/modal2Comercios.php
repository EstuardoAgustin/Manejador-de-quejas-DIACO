<!-- Modal de la ventana nuevo Sueldo para ver tipos de sieldo -->
                        <div id="modalComercio" class="modal modal-edu-general fullwidth-popup-InformationproModal fade " role="dialog">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header header-color-modal bg-color-2">
                                        <h4 class="modal-title">Comercio</h4>
                                        <div class="modal-close-area modal-close-df">
                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                            <!-- Checkout Form -->
                                            <form class="form-horizontal" method="post" id="formNuevoComercio" name="formNuevoComercio">
                                                    <!-- Step Form Header -->
                                                
                                                    <!-- End Step Form Header -->
                                        
                                                    <!-- Step Form Content -->
                                                    <div id="stepFormContent">
                                                            <!-- Customer Info -->
                                                            <div id="" class="active">  <!-- asigna un id al bloque donde estan los campos de nuevo proveedor-->
                                                                
                                                                <!-- Billing Form -->
                                                                <div class="row">
                                                                         
                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="review-content-section">
                                                                                <!--/////////////////////////////////////// INICIO Fila1 de dos cajas de texto -->
                                                                                <div class="row">
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group-inner">
                                                                                            <label>Nombre Comercio</label> 
                                                                                            
                                                                                            <div class="form-group">
                                                                                                <input name="idComercio" id="idComercio" type="hidden"   class="form-control"  disabled>
                                                                                                <input type="text" class="form-control form__input"  name="nombreComercio" id="nombreComercio" placeholder="Nombre Comercio" required
                                                                                                data-msg="Ingrese Nombre ."
                                                                                                minlength="1" maxlength="50"
                                                                                                title="Nombre  Tamaño máximo: 50 Caracteres"
                                                                                                data-error-class="u-has-error"
                                                                                                data-success-class="u-has-success">
                                                                                            </div><!-- se asignan identificadores y detalles al campo de texto de la direccion comercial del proveedor -->  
                                                                                        </div>
                                                                                    </div>

                                                                                    <!-- Segund Columna  -->
                                                                                    <div id="fila1" name="fila1" class="col-lg-6" >
                                                                                        <div class="form-group-inner">
                                                                                            <label id="labelDireccion" >Direccion</label> <!-- etiqueta del campo de texto  donde se ingresa la direccion comercial del proveedor -->
                                                                                            
                                                                                            <div class="form-group ">
                                                                                                <input name="Direccion" id="Direccion" type="text" class="form-control " placeholder="Direccion"    required
                                                                                                data-msg="Direccion Comercio."
                                                                                                minlength="1" maxlength="75"
                                                                                                title="Tamaño máximo: 750 Caracteres"
                                                                                                data-error-class="u-has-error"
                                                                                                data-success-class="u-has-success"  >
                                                                                            </div> <!-- se asignan identificadores y detalles al campo de texto de la descripcion del proveedor -->
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- //// FIN de la Fila de 2 columnas con dos campos -->
                                                                                <!--///////////////////////////////////////INICIO Fila1 de dos cajas de texto -->
                                                                                <div class="row" id="fila2">
                                                                                    <div class="col-lg-6">
                                                                                        <div class="chosen-select-single mg-b-20">
                                                                                            <label id="labelnitComercio">NIT Comercio</label> <!-- etiqueta del campo de texto  donde se ingresa la direccion comercial del proveedor -->
                                                                                            
                                                                                            <div class="form-group">
                                                                                                <input name="nitComercio" id="nitComercio" type="number" class="form-control" placeholder="NIT Comercio"  required
                                                                                                minlength="3" maxlength="15"
                                                                                                pattern="[0-9]{3,15}"  title="Identificacion. Tamaño máximo: 15"
                                                                                                placeholder="Ingrese No. de Identificacion" >
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-lg-6">
                                                                                        <div class="chosen-select-single mg-b-20">
                                                                                            <label  id="labeltelefonoComercio" >Telefono</label> <!-- etiqueta del campo de texto  donde se ingresa la direccion comercial del proveedor -->
                                                                                            
                                                                                            <div class="form-group res-mg-t-15">
                                                                                                <input name="telefonoComercio" id="telefonoComercio" type="text" class="form-control " placeholder="Telefono"    required
                                                                                                data-msg="Contraseña Usuario."
                                                                                                minlength="1" maxlength="10"
                                                                                                title="Tamaño máximo: 10 Caracteres"
                                                                                                data-error-class="u-has-error"
                                                                                                data-success-class="u-has-success"  >
                                                                                            </div>
                                                                                        </div>  
                                                                                    </div>
                                                                                </div>  <!-- //// FIN de la Fila de 2 columnas con dos campos -->

                                                                                

                                                                                 <!--///////////////////////////////////////INICIO Fila1 de dos cajas de texto -->
                                                                                 <div class="row" id="fila3">
                                                                                    <div class="col-lg-6">
                                                                                        <div class="chosen-select-single mg-b-20">
                                                                                            <label id="labelemail">Correo Electronico</label> <!-- etiqueta del campo de texto  donde se ingresa la direccion comercial del proveedor -->
                                                                                            
                                                                                            <div class="form-group ">
                                                                                                <input name="email" id="email" type="email" class="form-control " placeholder="Correo Electronico" 
                                                                                                    placeholder="Ingrese Correo Electronico"   >
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-lg-6">
                                                                                        <div class="chosen-select-single mg-b-20">
                                                                                            <label id="labelmunicipio">Municpio de Ubicacion</label> <!-- etiqueta del campo de texto  donde se ingresa la direccion comercial del proveedor -->
                                                                                            
                                                                                            <div class="form-group res-mg-t-15">
                                                                                            <select name="municipio" id="municipio" class="form-control" required>
                                                                                            <?php
                                                                                                $sql= "SELECT id_municipio,municipio FROM  todasUbicaciones ";
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
                                                                                    </div>
                                                                                </div>  <!-- //// FIN de la Fila de 2 columnas con dos campos -->

                                                                                 




                                                                            </div> <!-- //// FIN del Conentedor de las filas -->
                                                                        </div> <!-- //// FIN de la COLUMNA Global -->
                                                                        
                                                            
                                                                </div><!-- //// FIN de la Fila GLOBAL -->
                                                                
                                                                        <div class="form-group-inner">
                                                                            <div class="login-btn-inner">
                                                                                <div class="row">
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group-inner">
                                                                                           <!-- ESPACIO vacio para alinear a la derecha a los botones -->
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group-inner pull-right col-lg-3">
                                                                                                <button type='Submit' class='pull-right btn btn-custon-rounded-three btn-success justify-content-sm-center align-items-sm-center' name ="guardarComercio" id="guardarComercio">Guardar</button> 
                                                                                                <button type='Submit' class='pull-right btn btn-custon-rounded-three btn-success' name ="editarComercio" id="editarComercio">Editar</button> 
                                                                                        </div>  
                                                                                        <div class="form-group-inner pull-right col-lg-3">
                                                                                                <button type='button' data-dismiss="modal" href="#" class='pull-right btn btn-custon-rounded-three btn-danger justify-content-sm-center align-items-sm-center'>Cancelar</button> 
                                                                                        </div>  
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                            </div><!-- //// FIN del DIV -->
                                                        </div><!-- //// FIN del DIV stepFormContent-->
                                                   
                                            </form><!-- //// FIN del FORM-->
                                        </div><!-- //// FIN del DIV modal-body-->
                                    
                                    <div class="modal-footer info-md">


                                    
                                    </div>
                                </div>
                            </div>
                        </div>
<!-- ////////////////////// fin de modal comercio -->

<!-- Modal de Nueva comision que los empleados pueden tener  -->
                        <div id="modalNuevoComisionEmpleado" class="modal modal-edu-general fullwidth-popup-InformationproModal fade " role="dialog">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header header-color-modal bg-color-2">
                                        <h4 class="modal-title">Sucursal</h4>
                                        <div class="modal-close-area modal-close-df">
                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                       <!-- Checkout Form -->
                                            <form class="form-horizontal" method="post" id="form_modalComisionEmpleado" name="form_modalComisionEmpleado">
                                                    <!-- Step Form Header -->
                                                
                                                    <!-- End Step Form Header -->
                                        
                                                    <!-- Step Form Content -->
                                                    <div id="stepFormContent">
                                                            <!-- Customer Info -->
                                                            <div id="newComisionEmpleado" class="active">  <!-- asigna un id al bloque donde estan los campos de nuevo proveedor-->
                                                                
                                                                <!-- Billing Form -->
                                                                <div class="row">
                                                                         
                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="review-content-section">
                                                                                <div class="row">
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group-inner">
                                                                                            <label>Comision Empleado</label>
                                                                                            <input  type="hidden" name="idComisionEmpleado" id="idComisionEmpleado" disabled > <!-- se asignan identificadores -->
                                                                                            <input type="text" name="comisionEmpleado" id="comisionEmpleado"  class="form-control form__input" placeholder="Comision Sueldo de Empleado" required
                                                                                                minlength="1" maxlength="50"
                                                                                                pattern="^[0-9]+(\.[0-9]{1,2})?$"  title="Solo numeros. Tamaño mínimo: 0.01 "
                                                                                                data-error-class="u-has-error"
                                                                                                data-success-class="u-has-success"> <!-- se asignan identificadores y detalles al campo de texto -->  
                                                                                        </div>
                                                                                        
                                                                                        
                                                                                        
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group-inner">
                                                                                            <label >Descripcion Comision</label>
                                                                                            <textarea class="form-control form__input" type="text" name="descripcionComisionEmpleado" id="descripcionComisionEmpleado" 
                                                                                            data-msg="ingrese una descripcion de la Comision."
                                                                                            maxlength="150"
                                                                                            pattern="[0-9]{0,150}"  title="Números. Tamaño máximo: 150"
                                                                                            data-error-class="u-has-error"
                                                                                            placeholder="Descripcion"
                                                                                            data-success-class="u-has-success"></textarea><!-- se asignan identificadores y detalles al campo de texto de la descripcion del proveedor -->
                                                                                            
                                                                                        </div>
                                                                                        
                                                                                        
                                                                                        
                                                                                        
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">
                                                                                    
                                                                                    <div class="col-lg-12">
                                                                                        <div class="chosen-select-single mg-b-20">
                                                                                                <label>Estado</label>
                                                                                                <select name="estadoComisionEmpleado" id="estadoComisionEmpleado" class="select2_demo_3 form-control">
                                                                                                    <option value="ACTIVO" selected="true">ACTIVO</option>
                                                                                                    <option value="INACTIVO">INACTIVO</option>
                                                                                                </select>
                                                                                        </div>  
                                                                                    </div>
                                                                                </div>
                                                                                
                                                                                

                                                                            </div>
                                                                        </div>
                                                                        
                                                            
                                                                </div>
                                                                <div class="modal-footer info-md">

                                                                    <div class="form-group-inner">
                                                                        <div class="login-btn-inner">
                                                                            <div class="row">
                                                                                <div class="col-lg-9"></div>
                                                                                <div class="col-lg-3">
                                                                                    <div class="login-horizental cancel-wp pull-left form-bc-ele">
                                                                                    <button type='button' data-dismiss="modal" href="#" class='pull-left btn btn-custon-rounded-three btn-danger justify-content-sm-center align-items-sm-center'>Cancelar</button>
                                                                                    <button type='button' class='pull-left btn btn-custon-rounded-three btn-success justify-content-sm-center align-items-sm-center' name ="guardarComisionEmpleado"id="guardarComisionEmpleado">Guardar</button> 
                                                                                    <button type='button' class='pull-left btn btn-custon-rounded-three btn-success' name ="editarComisionEmpleado"id="editarComisionEmpleado">Editar</button> 
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    </div>

                                                            </div>
                                                        </div>
                                                   
                                            </form>
                                    </div>
                                    
                                   
                                </div>
                            </div>
                        </div>
                    
<!-- Modal de Nueva comision que los empleados pueden tener  -->
<div id="modalSucursal" class="modal modal-edu-general fullwidth-popup-InformationproModal fade " role="dialog">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header header-color-modal bg-color-2">
                                        <h4 class="modal-title">Sucursal</h4>
                                        <div class="modal-close-area modal-close-df">
                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                            <!-- Checkout Form -->
                                            <form class="form-horizontal" method="post" id="formNuevaSucursal" name="formNuevaSucursal">
                                                    <!-- Step Form Header -->
                                                
                                                    <!-- End Step Form Header -->
                                        
                                                    <!-- Step Form Content -->
                                                    <div id="stepFormContent">
                                                            <!-- Customer Info -->
                                                            <div id="" class="active">  <!-- asigna un id al bloque donde estan los campos de nuevo proveedor-->
                                                                
                                                                <!-- Billing Form -->
                                                                <div class="row">
                                                                         
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="review-content-section">
                                                                                <!--/////////////////////////////////////// INICIO Fila1 de dos cajas de texto -->
                                                                                <div class="row">
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group-inner">
                                                                                            <label>Nombre Sucursal</label> 
                                                                                            <span class="text-danger">*</span>
                                                                                            <div class="form-group">
                                                                                                <input name="idSucursal" id="idSucursal" type="hidden"   class="form-control" placeholder="id "   disabled>
                                                                                                <input type="text" class="form-control form__input"  name="nombreSucursal" id="nombreSucursal" placeholder="Nombre Sucursal" required
                                                                                                data-msg="Ingrese Nombre ."
                                                                                                minlength="1" maxlength="50"
                                                                                                title="Nombre  Tamaño máximo: 50 Caracteres"
                                                                                                data-error-class="u-has-error"
                                                                                                data-success-class="u-has-success">
                                                                                            </div><!-- se asignan identificadores y detalles al campo de texto de la direccion comercial del proveedor -->  
                                                                                        </div>
                                                                                    </div>

                                                                                    <!-- Segund Columna  -->
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group-inner">
                                                                                            <label >Direccion</label> <!-- etiqueta del campo de texto  donde se ingresa la direccion comercial del proveedor -->
                                                                                            <span class="text-danger">*</span>
                                                                                            <div class="form-group ">
                                                                                                <input name="DireccionSucursal" id="DireccionSucursal" type="text" class="form-control " placeholder="Direccion"    required
                                                                                                data-msg="Direccion Comercio."
                                                                                                minlength="1" maxlength="75"
                                                                                                title="Tamaño máximo: 750 Caracteres"
                                                                                                data-error-class="u-has-error"
                                                                                                data-success-class="u-has-success"  >
                                                                                            </div> <!-- se asignan identificadores y detalles al campo de texto de la descripcion del proveedor -->
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- //// FIN de la Fila de 2 columnas con dos campos -->
                                                                                <!--///////////////////////////////////////INICIO Fila1 de dos cajas de texto -->
                                                                                <div class="row">
                                                                                    <div class="col-lg-6">
                                                                                        <div class="chosen-select-single mg-b-20">
                                                                                            <label>Comercio Central</label> <!-- etiqueta del campo de texto  donde se ingresa la direccion comercial del proveedor -->
                                                                                            <span class="text-danger">*</span>
                                                                                            <div class="form-group">
                                                                                            <select name="nitComercioCentral" id="nitComercioCentral" class="form-control" required>
                                                                                                <?php
                                                                                                    $sql= "SELECT id_comercio,nombreComercio FROM  todosComercios ";
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
                                                                                    </div>

                                                                                    <div class="col-lg-6">
                                                                                        <div class="chosen-select-single mg-b-20">
                                                                                            <label >Telefono</label> <!-- etiqueta del campo de texto  donde se ingresa la direccion comercial del proveedor -->
                                                                                            <span class="text-danger">*</span>
                                                                                            <div class="form-group res-mg-t-15">
                                                                                                <input name="TelefonoSucursal" id="TelefonoSucursal" type="text" class="form-control " placeholder="Telefono"    required
                                                                                                data-msg="Contraseña Usuario."
                                                                                                minlength="1" maxlength="10"
                                                                                                title="Tamaño máximo: 10 Caracteres"
                                                                                                data-error-class="u-has-error"
                                                                                                data-success-class="u-has-success"  >
                                                                                            </div>
                                                                                        </div>  
                                                                                    </div>
                                                                                </div>  <!-- //// FIN de la Fila de 2 columnas con dos campos -->

                                                                                

                                                                                 <!--///////////////////////////////////////INICIO Fila1 de dos cajas de texto -->
                                                                                 <div class="row">
                                                                                    <div class="col-lg-6">
                                                                                        <div class="chosen-select-single mg-b-20">
                                                                                            <label >Correo Electronico</label> <!-- etiqueta del campo de texto  donde se ingresa la direccion comercial del proveedor -->
                                                                                            <span class="h10 ">(opcional)</span>
                                                                                            <div class="form-group ">
                                                                                                <input name="emailSucursal" id="emailSucursal" type="email" class="form-control " placeholder="Correo Electronico" 
                                                                                                    placeholder="Ingrese Correo Electronico"   >
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-lg-6">
                                                                                        <div class="chosen-select-single mg-b-20">
                                                                                            <label >Municpio de Ubicacion</label> <!-- etiqueta del campo de texto  donde se ingresa la direccion comercial del proveedor -->
                                                                                            <span class="text-danger">*</span>
                                                                                            <div class="form-group res-mg-t-15">
                                                                                            <select name="municipioSucursal" id="municipioSucursal" class="form-control" required>
                                                                                            <?php
                                                                                                $sql= "SELECT id_municipio,municipio FROM  todasUbicaciones ";
                                                                                                $res=mysqli_query($conexionbd,$sql);
                                                                                                while ($data=mysqli_fetch_row($res))
                                                                                                        {
                                                                                                            $dato1 = $data[0];
                                                                                                            $dato2 = $data[1];
                                                                                                           
                                                                                                ?>
                                                                                                            <option value="<?php echo $dato1; ?>" > <?php echo $dato2; ?>  </option>
                                                                                                <?php 	} ?>
                                                                                            </select>
                                                                                            </div>
                                                                                        </div>  
                                                                                    </div>
                                                                                </div>  <!-- //// FIN de la Fila de 2 columnas con dos campos -->


                                                                                <!--///////////////////////////////////////INICIO Fila1 de dos cajas de texto -->
                                                                                <div class="row">
                                                                                    <div class="col-lg-6">
                                                                                        <div class="chosen-select-single mg-b-20">
                                                                                            <label >Tipo Sucursal</label> <!-- etiqueta del campo de texto  donde se ingresa la direccion comercial del proveedor -->
                                                                                            <span class="text-danger">*</span>
                                                                                            <div class="form-group res-mg-t-15">
                                                                                            <select name="tipoSucursal" id="tipoSucursal" class="form-control" required>
                                                                                                <option value="SUCURSAL" > SUCURSAL  </option>            
                                                                                                <option value="CENTRAL" > CENTRAL  </option>
                                                                                            </select>
                                                                                            </div>
                                                                                        </div>  
                                                                                    </div>

                                                                                    <div class="col-lg-6">
                                                                                        
                                                                                    </div>
                                                                                </div>  <!-- //// FIN de la Fila de 2 columnas con dos campos -->
                                                                                 




                                                                            </div> <!-- //// FIN del Conentedor de las filas -->
                                                                        </div> <!-- //// FIN de la COLUMNA Global -->
                                                                        
                                                            
                                                                </div><!-- //// FIN de la Fila GLOBAL -->
                                                                
                                                                        <div class="form-group-inner">
                                                                            <div class="login-btn-inner">
                                                                                <div class="row">
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group-inner">
                                                                                           <!-- ESPACIO vacio para alinear a la derecha a los botones -->
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-6">
                                                                                        <div class="form-group-inner pull-right col-lg-3">
                                                                                                <button type='Submit' class='pull-right btn btn-custon-rounded-three btn-success justify-content-sm-center align-items-sm-center' name ="guardarSucursal" id="guardarSucursal">Guardar</button> 
                                                                                                <button type='Submit' class='pull-right btn btn-custon-rounded-three btn-success' name ="editarSucursal" id="editarSucursal">Editar</button> 
                                                                                        </div>  
                                                                                        <div class="form-group-inner pull-right col-lg-3">
                                                                                                <button type='button' data-dismiss="modal" href="#" class='pull-right btn btn-custon-rounded-three btn-danger justify-content-sm-center align-items-sm-center'>Cancelar</button> 
                                                                                        </div>  
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                            </div><!-- //// FIN del DIV -->
                                                        </div><!-- //// FIN del DIV stepFormContent-->
                                                   
                                            </form><!-- //// FIN del FORM-->
                                        </div><!-- //// FIN del DIV modal-body-->
                                    
                                    <div class="modal-footer info-md">


                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                           
                        </div>