
<?php
  require 'header.php';
?>

<!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        
        <!-- Main content -->
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                          <h1 class="box-title">Tabla <button class="btn btn-success" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button></h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <table  id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                         <thead>                                                        
                          <th>ID PERSONAL</th>
                          <th>CEDULA</th>
                          <th>NOMBRE</th>
                          <th>DIRECCION</th>
                          <th>TELEFONO</th>
                          <th>CIUDAD</th>
                          <th>FECHA INGRESO</th>
                          <th>ESTADO </th>
                          <th>N.RO LICENCIA</th>
                          <th>FECHA VENCIMIENTO</th>
                          <th>CIUDAD LICENCIA</th>
                          <th>ASIGNACION</th>
                          <th>TIPO/CUENTA</th>
                          <th>BANCO</th>
                          <th>NUMEROC CUENTA</th>
                          <th>OBSERVACIONES_ADICIONALES</th>
                          <th>HOJA DE DATOS CARPETA NOR. DONDE SE guardan los documentos</th>
                        </thead>
                        <tbody></tbody> 
                        <tfoot>
                          <th>ID PERSONAL</th>
                          <th>CEDULA</th>
                          <th>NOMBRE</th>
                          <th>DIRECCION</th>
                          <th>TELEFONO</th>
                          <th>CIUDAD</th>
                          <th>FECHA INGRESO</th>
                          <th>ESTADO </th>
                          <th>N.RO LICENCIA</th>
                          <th>FECHA VENCIMIENTO</th>
                          <th>CIUDAD LICENCIA</th>
                          <th>ASIGNACION</th>
                          <th>TIPO/CUENTA</th>
                          <th>BANCO</th>
                          <th>NUMEROC CUENTA</th>
                          <th>OBSERVACIONES_ADICIONALES</th>
                          <th>HOJA DE DATOS CARPETA NOR. DONDE SE guardan los documentos</th>                      
                         </tfoot>
                      </table>
                    </div>
                    <div class="panel-body"  style="height:750px;" id="formularioregistros">
                      <form name="formulario" id="formulario" method="POST">
                        <div class="form-group col-lg-2 col-md-2 col-sm-2 cols-xs-2">
                          <label>TIPO DOCUMENTO</label>
                          <select name="tidenti" id="tidenti" class="form-control" >
                            <option values="CC">CC</option> 
                            <option values="Pasaporte">Pasaporte</option>                          
                          </select>     
                        </div>   
                        <div class="form-group col-lg-2 col-md-2 col-sm-2 cols-xs-2">
                          <label>CEDULA</label>
                          <input type="text" name="cedpers" id="cedpers" maxlength="50" placeholder="cedula"  class="form-control" required>                         
                          <input type="hidden" name="idpers" id="idpers">                          
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 cols-xs-12">
                          <label>NOMBRE</label>
                          <input type="text" name="nompers" id="nompers" maxlength="50" placeholder="NOMBRE" class="form-control" required>                          
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 cols-xs-12">
                          <label>DIRECCION</label>
                          <input type="text" name="dirpers" id="dirpers" maxlength="50" placeholder="DIRECCION"  class="form-control" required>                          
                        </div>                        
                        <div class="form-group col-lg-3 col-md-3 col-sm-3 cols-xs-3">
                          <label>TELEFONO</label>
                          <input type="text" name="telpers" id="telpers" maxlength="50" placeholder="TELEFONO"  class="form-control" required>                          
                        </div>
                        <div class="form-group col-lg-3 col-md-3 col-sm-3 cols-xs-3">
                          <label>CIUDAD</label>   
                          <select name="ciudpers" id="ciudpers" class="form-control" >                            
                          </select>                   
                        </div>                    
                        <div class="form-group col-lg-4 col-md-4 col-sm-4 cols-xs-4">
                          <label>N.RO LICENCIA</label>
                          <input type="number" name="liccondpers" id="liccondpers" maxlength="50" placeholder="N.RO LICENCIA" class="form-control" required>                          
                        </div>
                        <div class="form-group col-lg-3 col-md-3 col-sm-3 cols-xs-3">
                          <label>FECHA VENCIMIENTO</label>
                          <input type="date" name="fechavenpers" id="fechavenpers" maxlength="50" placeholder="FECHA VENCIMIENTO" class="form-control" required>                          
                        </div>   
                         <div class="form-group col-lg-3 col-md-3 col-sm-3 cols-xs-3">
                          <label>CIUDAD LICENCIA</label>                         
                          <select name="ciulicpers" id="ciulicpers" class="form-control" >                         
                          </select>                          
                        </div>   
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 cols-xs-12">
                          <label>ASIGNACION</label>
                          <input type="number" name="asignpers" id="asignpers" maxlength="50" placeholder="ASIGNACION" class="form-control" required>                          
                        </div>   
                        <div class="form-group col-lg-3 col-md-3 col-sm-3 cols-xs-3">
                          <label>TIPO/CUENTA</label>    
                          <select name="tctapers" id="tctapers" class="form-control" >
                            <option values="ahorros">Ahorros</option> 
                            <option values="corriente">Corriente</option>                             
                          </select>                            
                        </div>   
                        <div class="form-group col-lg-3 col-md-3 col-sm-3 cols-xs-3">
                          <label>BANCO</label>  
                          <select name="bancpers" id="bancpers" class="form-control" >
                       
                          </select>                              
                        </div>   
                        <div class="form-group col-lg-3 col-md-3 col-sm-3 cols-xs-3">
                          <label>NUMEROC CUENTA</label>
                          <input type="text" name="numctapers" id="numctapers" maxlength="50" placeholder="NUMEROC CUENTA" class="form-control" required>                          
                        </div>   
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 cols-xs-12">
                          <label>OBSERVACIONES_ADICIONALES</label>
                          <input type="text" name="obspers" id="obspers" maxlength="50" placeholder="OBSERVACIONES_ADICIONALES" class="form-control" required>                          
                        </div>   
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 cols-xs-12">
                          <label>HOJA DE DATOS</label>
                          <input type="text" name="hvpers" id="hvpers" maxlength="50" placeholder="HOJA DE DATOS" class="form-control" required>                          
                        </div>   

                        <div class="form-group col-lg-12 col-md-12 col-sm-12 cols-xs-12">                          
                          <button class="btn btn-primary" type="submit" name="btnGuardar" id="btnGuardar" ><i class="fa fa-save"></i>Guardar</button>    
                          <button class="btn btn-danger" onclick="cancelarform();" type="button"><i class="fa fa-arrow-circle-left"></i>Cancelar</button>                   
                        </div>
                      </form>  
                    </div>                    
                    <!--Fin centro -->
                  </div><!-- /.box -->
              </div><!-- /.col -->
          </div><!-- /.row -->
      </section><!-- /.content -->

    </div><!-- /.content-wrapper -->
  <!--Fin-Contenido-->

  
<?php
  require 'footer.php';
?>
<script type="text/javascript" src="../script/personal.js"> </script>