
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
                             <th> ID CONDUCTOR</th>
                             <th> CEDULA</th>
                             <th> NOMBRE</th>
                             <th> DIRECCION</th>
                             <th> TELEFONO</th>
                             <th> CIUDAD</th>
                             <th> # LICENCIA</th>
                             <th> F VENCIMI</th>
                             <th> CIUDAD</th>
                             <th> ESTADO</th>
                             
                          </thead>
                          <tbody></tbody> 
                          <tfoot>                          
                             <th> ID CONDUCTOR</th>
                             <th> CEDULA</th>
                             <th> NOMBRE</th>
                             <th> DIRECCION</th>
                             <th> TELEFONO</th>
                             <th> CIUDAD</th>
                             <th> # LICENCIA</th>
                             <th> F VENCIMI</th>
                             <th> CIUDAD</th>
                             <th> ESTADO</th>                                                        
                          </tfoot>
                        </table>
                    </div>
                    <div class="panel-body"  style="height:750px;" id="formularioregistros">
                      <form name="formulario" id="formulario" method="POST">
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 cols-xs-12">
                          <label>CEDULA</label>
                          <input type="text" name="cedconduc" id="cedconduc" maxlength="50" placeholder="cedula"  class="form-control" required>
                          <input type="hidden" name="idconduc" id="idconduc">                          
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 cols-xs-12">
                          <label>NOMBRE</label>
                          <input type="text" name="nomconduc" id="nomconduc" maxlength="50" placeholder="NOMBRE" class="form-control" required>                          
                        </div>                           
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 cols-xs-12">
                          <label>DIRECCION</label>
                          <input type="text" name="dirconduc" id="dirconduc" maxlength="50" placeholder="DIRECCION"  class="form-control" required>                          
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 cols-xs-12">
                          <label>TELEFONO</label>
                          <input type="text" name="telconduc" id="telconduc" maxlength="50" placeholder="TELEFONOS" class="form-control" required>                          
                        </div>                        
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 cols-xs-12">
                          <label>CIUDAD</label>
                          <input type="number" name="ciuconduc" id="ciuconduc" maxlength="50" placeholder="CIUDAD" class="form-control" required>                          
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 cols-xs-12">
                          <label># LICENCIA</label>
                          <input type="text" name="licconduc" id="licconduc" maxlength="50" placeholder="CONFIGURACION" class="form-control" required>                          
                        </div>   
                         <div class="form-group col-lg-6 col-md-6 col-sm-6 cols-xs-12">
                          <label>F VENCIMIE</label>
                          <input type="number" name="fechaven" id="fechaven" maxlength="50" placeholder="FECHA VENCIM" class="form-control" required>                          
                        </div>   
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 cols-xs-12">
                          <label>CIUDAD</label>
                          <input type="number" name="ciulicconduc" id="ciulicconduc" maxlength="50" placeholder="CIUDAD" class="form-control" required>                          
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
<script type="text/javascript" src="../script/conductores.js"> </script>