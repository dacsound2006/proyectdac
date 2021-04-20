
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
                            <th>ORDEN</th>
                            <th>FECHA SOLICITUD</th>
                            <th>CLIENTE</th>
                            <th>ORIGEN</th>
                            <th>DESTNO</th>
                            <th>CONDUCTOR</th>
                            <th>VEHICULO</th>
                            <th>PLACA</th>
                            <th>DESCRIPCION</th>
                            <th>MEDIO SOLCITUD</th>
                            <th>VLR FLETE</th>
                            <th>ESCOLTA</th>
                            <th>VLR CARGUE ADD</th>
                            <th>VLR DESCARGUE ADD</th>
                            <th>VLR AJUSTES</th>
                            <th>VLR VACIO</th>
                            <th>AJUSTE STANDBY</th>                            
                            <th>USUARIO CREACION</th>
                            <th>ESTADO</th>
                          </thead>
                          <tbody></tbody> 
                          <tfoot>
                            <th>ORDEN</th>
                            <th>FECHA SOLICITUD</th>
                            <th>CLIENTE</th>
                            <th>ORIGEN</th>
                            <th>DESTNO</th>
                            <th>CONDUCTOR</th>
                            <th>VEHICULO</th>
                            <th>PLACA</th>
                            <th>DESCRIPCION</th>
                            <th>MEDIO SOLCITUD</th>
                            <th>VLR FLETE</th>
                            <th>ESCOLTA</th>
                            <th>VLR CARGUE ADD</th>
                            <th>VLR DESCARGUE ADD</th>
                            <th>VLR AJUSTES</th>
                            <th>VLR VACIO</th>
                            <th>AJUSTE STANDBY</th>                            
                            <th>USUARIO CREACION</th>
                            <th>ESTADO</th>
                          </tfoot>
                        </table>
                    </div>
                    <div class="panel-body"  style="height:750px;" id="formularioregistros">
                      <form name="formulario" id="formulario" method="POST">
                        <div class="form-group col-lg-1 col-md-1 col-sm-1 cols-xs-1">
                          <label>ORDEN</label>
                          <input type="text" name="ocarga" id="ocarga" maxlength="50"  class="form-control" disabled>
                          <input type="hidden" name="ocarga" id="ocarga">                          
                        </div>
                        <div class="form-group col-lg-1 col-md-1 col-sm-1 cols-xs-1">
                          <label>FECHA</label>
                          <input type="text" name="fsol" id="fsol"  class="form-control" disabled>                          
                        </div>
                        <div class="form-group col-lg-1 col-md-1 col-sm-1 cols-xs-1">
                          <label>ESTADO</label>
                          <input type="text" name="fsol" id="fsol"  class="form-control" disabled>                          
                        </div>
                        <div class="form-group col-lg-2 col-md-2 col-sm-2 cols-xs-2">
                          <label>COD CLIENTE</label>
                          <input type="text" name="tvehi" id="tvehi" maxlength="50" placeholder="T VEHICULO"  class="form-control" required>                          
                        </div>                        
                        <div class="form-group col-lg-2 col-md-2 col-sm-2 cols-xs-2">
                          <label>CLIENTE</label>
                          <select name="cliente" id="cliente" class="form-control" required>                                       
                          </select>                                                     
                        </div>
                        <div class="form-group col-lg-2 col-md-2 col-sm-2 cols-xs-2">
                          <label>ORIGEN</label>
                          <select name="origen" id="origen" class="form-control" required>                                       
                          </select>                             
                        </div>                        
                        <div class="form-group col-lg-2 col-md-2 col-sm-2 cols-xs-2">
                          <label>DESTINO</label>
                          <select name="destino" id="destino" class="form-control" required>                                       
                          </select>    
                        </div>
                        <div class="form-group col-lg-2 col-md-2 col-sm-2 cols-xs-2">
                          <label>ID_CONDUCTOR</label>
                          <input type="text" name="confvehi" id="confvehi" maxlength="50" placeholder="CONFIGURACION" class="form-control" disabled>                          
                        </div>   
                         <div class="form-group col-lg-2 col-md-2 col-sm-2 cols-xs-2">
                          <label>CONDUCTOR</label>
                          <select name="conducto" id="conducto" class="form-control" required>                                       
                          </select>                         
                        </div>   
                        <div class="form-group col-lg-2 col-md-2 col-sm-2 cols-xs-2">
                          <label>TIPO DE VEHICULO</label>
                          <select name="tvehiculo" id="tvehiculo" class="form-control" required>                                       
                          </select>                            
                        </div>   
                        <div class="form-group col-lg-2 col-md-2 col-sm-2 cols-xs-2">
                          <label>PLACA</label>
                          <select name="placa" id="placa" class="form-control" required>                                       
                          </select>                           
                        </div>   
                        <div class="form-group col-lg-2 col-md-2 col-sm-2 cols-xs-2">
                          <label>TIPO SERVICIO</label>
                          <select name="tservicio" id="tservicio" class="form-control" required>                                       
                          </select>                        
                        </div>   
                        <div class="form-group col-lg-2 col-md-2 col-sm-2 cols-xs-2">
                          <label>FECHA RECOGIDA</label>
                          <input type="date" name="fvensvehi" id="fvensvehi" maxlength="50" placeholder="FECHA VEC SOAT" class="form-control" required>      
                                                   
                        </div>   
                        <div class="form-group col-lg-2 col-md-2 col-sm-2 cols-xs-2">
                          <label>DIRECCION RECOGIDA</label>
                          <input type="text" name="tcuentavhi" id="tcuentavhi" maxlength="50" placeholder="TIPO/CUENTA" class="form-control" required>                          
                        </div>   
                        <div class="form-group col-lg-2 col-md-2 col-sm-2 cols-xs-2">
                          <label>DESCRIPCION SERVICIO</label>
                          <input type="text" name="bankvehi" id="bankvehi" maxlength="50" placeholder="BANCO" class="form-control" required>                          
                        </div>   
                        <div class="form-group col-lg-2 col-md-2 col-sm-2 cols-xs-2">
                          <label>MEDIO</label>
                          <select name="medio" id="medio" class="form-control" required>                                       
                          </select>                              
                        </div>   
                        <div class="form-group col-lg-2 col-md-2 col-sm-2 cols-xs-2">
                          <label>ID FLETE</label>
                          <input type="number" name="nctavehi" id="nctavehi" maxlength="50" placeholder="NUM CUENTA" class="form-control" required>                          
                        </div> 
                        <div class="form-group col-lg-2 col-md-2 col-sm-2 cols-xs-2">
                          <label>ID ESCOLTA</label>
                          <select name="escolta" id="escolta" class="form-control" required>                                       
                          </select>                          
                        </div> 
                        <div class="form-group col-lg-2 col-md-2 col-sm-2 cols-xs-2">
                          <label>MEDIO</label>
                          <input type="number" name="nctavehi" id="nctavehi" maxlength="50" placeholder="NUM CUENTA" class="form-control" required>                          
                        </div> 
                        <div class="form-group col-lg-2 col-md-2 col-sm-2 cols-xs-2">
                          <label>VLR CARGUE</label>
                          <input type="text" name="rutavehi" id="rutavehi" maxlength="50" placeholder="DOC" class="form-control" required>                          
                        </div>
                        <div class="form-group col-lg-2 col-md-2 col-sm-2 cols-xs-2">
                          <label>VLR DESCARGUE</label>
                          <input type="text" name="rutavehi" id="rutavehi" maxlength="50" placeholder="DOC" class="form-control" required>                          
                        </div>   
                        <div class="form-group col-lg-2 col-md-2 col-sm-2 cols-xs-2">
                          <label>VLR AJUSTES</label>
                          <input type="text" name="rutavehi" id="rutavehi" maxlength="50" placeholder="DOC" class="form-control" required>                          
                        </div>
                        <div class="form-group col-lg-2 col-md-2 col-sm-2 cols-xs-2">
                          <label>VLR VACIO</label>
                          <input type="text" name="rutavehi" id="rutavehi" maxlength="50" placeholder="DOC" class="form-control" required>                          
                        </div>
                        <div class="form-group col-lg-2 col-md-2 col-sm-2 cols-xs-2">
                          <label>AJUSTE STAND-BY</label>
                          <input type="text" name="rutavehi" id="rutavehi" maxlength="50" placeholder="DOC" class="form-control" required>                          
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 cols-xs-12">
                          <label>OBSERVACIONES</label>
                          <input type="text" name="rutavehi" id="rutavehi" maxlength="50" placeholder="DOC" class="form-control" required>                          
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
<script type="text/javascript" src="../script/vehiculo.js"> </script>