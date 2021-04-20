
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
                             <th></th>
                             <th> CLIENTE</th>   
                             <th> ID</th>
                             <th> NOMBRE</th>
                             <th> CARGO</th>
                             <th> MAIL</th>
                             <th> TIPO</th>
                             <th> TELEFONO1</th>
                             <th> TELEFONO2</th>
                             <th> TELEFONO3</th>
                             <th> CELULAR1</th>
                             <th> CELULAR2</th>
                             <th> PAG_WEB</th>
                                                     
                             <th> OBSERVACION</th>
                             <th> ESTADO</th>                               
                          </thead>
                          <tbody></tbody> 
                          <tfoot>
                          <th></th>
                             <th> CLIENTE</th>   
                             <th> ID</th>
                             <th> NOMBRE</th>
                             <th> CARGO</th>
                             <th> MAIL</th>
                             <th> TIPO</th>
                             <th> TELEFONO1</th>
                             <th> TELEFONO2</th>
                             <th> TELEFONO3</th>
                             <th> CELULAR1</th>
                             <th> CELULAR2</th>
                             <th> PAG_WEB</th>                                                     
                             <th> OBSERVACION</th>
                             <th> ESTADO</th>                                  
                          </tfoot>
                        </table>
                    </div>
                    <div class="panel-body"  style="height:750px;" id="formularioregistros">
                    <form name="formulario" id="formulario" method="POST">
                    <div class="form-group col-lg-2 col-md-2 col-sm-2 cols-xs-4">
                        <label>CLIENTE</label>
                          <select name="clicontacto" id="clicontacto" class="form-control">                                       
                          </select>      
                        </div>
                        <div class="form-group col-lg-5 col-md-6 col-sm-6 cols-xs-12">
                          <label>NOMBRE</label>
                          <input type="text" name="nombcli" id="nombcli" maxlength="50" placeholder="NOMBRE" class="form-control" required>                          
                        </div>
                        <div class="form-group col-lg-5 col-md-6 col-sm-6 cols-xs-12">
                          <label>CARGO	</label>
                          <input type="text" name="dircli" id="dircli" maxlength="50" placeholder="CARGO" class="form-control" required>                          
                        </div>   
                         <div class="form-group col-lg-3 col-md-3 col-sm-3 cols-xs-4">
                          <label>MAIL	</label>
                          <input type="text" name="telcli" id="telcli" maxlength="50" placeholder="MAIL	" class="form-control" required>                          
                        </div>                       
                        <div class="form-group col-lg-2 col-md-2 col-sm-2 cols-xs-4">
                          <label>TIPO	</label>
                          <select name="tcontacto" id="tcontacto" class="form-control" >
                            <option values=""></option>
                            <option values="administrativo">Administrativo</option>
                            <option values="contable">Contable</option>    
                            <option values="comercial">Comvercial</option>                          
                            <option values="facturacion">Facturacion</option>                          
                            <option values="operacion">Operacion</option>                          
                            <option values="seguridad">Seguridad</option>                          
                          </select>                         
                        </div> 
                        <div class="form-group col-lg-2 col-md-2 col-sm-2 cols-xs-4">
                          <label>TELEFONO1	</label>
                          <input type="number" name="telcli" id="telcli" maxlength="50" placeholder="TELEFONO1	" class="form-control" required>                          
                        </div> 
                        <div class="form-group col-lg-2 col-md-2 col-sm-2 cols-xs-4">
                          <label>TELEFONO2	</label>
                          <input type="number" name="telcli" id="telcli" maxlength="50" placeholder="TELEFONO2	" class="form-control" required>                          
                        </div> 
                        <div class="form-group col-lg-2 col-md-2 col-sm-2 cols-xs-4">
                          <label>TELEFONO3	</label>
                          <input type="number" name="telcli" id="telcli" maxlength="50" placeholder="TELEFONO3	" class="form-control" required>                          
                        </div> 
                        <div class="form-group col-lg-2 col-md-2 col-sm-2 cols-xs-4">
                          <label>CELULAR1	</label>
                          <input type="number" name="telcli" id="telcli" maxlength="50" placeholder="CELULAR1	" class="form-control" required>                          
                        </div> 
                        <div class="form-group col-lg-2 col-md-2 col-sm-2 cols-xs-4">
                          <label>CELULAR2	</label>
                          <input type="number" name="telcli" id="telcli" maxlength="50" placeholder="CELULAR2	" class="form-control" required>                          
                        </div>                                                                                                                                              
                        <div class="form-group col-lg-4 col-md-4 col-sm-4 cols-xs-4">
                          <label>PAG_WEB</label>
                          <input type="text" name="pweb" id="pweb" maxlength="50" placeholder="PAGINA_WEB" class="form-control" required>                          
                        </div>   
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 cols-xs-12">
                          <label>OBSERVA</label>
                          <input type="text" name="obscli" id="obscli" maxlength="50" placeholder="OBSERVACION" class="form-control" required>                          
                        </div>

                        <div class="form-group col-lg-12 col-md-12 col-sm-12 cols-xs-12">
                          
                          <button class="btn btn-primary" type="submit" name="btnGuardar" id="btnGuardar" ><i class="fa fa-save"></i>Guardar</button>    
                          <button class="btn btn-danger" onclick="cancelarform()" type="button" ><i class="fa fa-arrow-circle-left"></i>Cancelar</button>                   
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
<script type="text/javascript" src="../script/contactos.js"> </script>