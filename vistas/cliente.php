
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
                             <th> FECHA</th>
                             <th> T CLIENTE</th>
                             <th> T_ID</th>
                             <th> ID CLIENTE</th>
                             <th> DIG_VERIF</th>
                             <th> T EMPRESA</th>
                             <th> CLIENTE</th>
                             <th> DIRECCION</th>
                             <th> TELEFONO</th>
                             <th> CIUDAD</th>
                             <th> PAG_WEB</th>
                             <th> CORTE FACT</th>
                             <th> DIAS_DE_PAGO</th>
                             <th> DIAS_DE_FACT</th>
                             <th> impBOG|</th>
                             <th> impTRANS</th>
                             <th> MIN NEG</th>                             
                             <th> PORCENTAGE</th>
                             <th> LAPSO REPORTE</th>
                             <th> OBSERVACION</th>
                             <th> ESTADO</th>                               
                          </thead>
                          <tbody></tbody> 
                          <tfoot>
                             <th></th>
                             <th> FECHA</th>
                             <th> T CLIENTE</th>
                             <th> T_ID</th>
                             <th> ID CLIENTE</th>
                             <th> DIG_VERIF</th>
                             <th> T EMPRESA</th>
                             <th> CLIENTE</th>
                             <th> DIRECCION</th>
                             <th> TELEFONO</th>
                             <th> CIUDAD</th>
                             <th> PAG_WEB</th>
                             <th> CORTE FACT</th>
                             <th> DIAS_DE_PAGO</th>
                             <th> DIAS_DE_FACT</th>
                             <th> impBODEGAGE</th>
                             <th> impTRANSPORTE</th>
                             <th> MIN NEGOCIACION</th>                             
                             <th> PORCENTAGE</th>
                             <th> LAPSO REPORTE</th>
                             <th> OBSERVACION</th>
                             <th> ESTADO</th>                               
                          </tfoot>
                        </table>
                    </div>
                    <div class="panel-body"  style="height:750px;" id="formularioregistros">
                    <form name="formulario" id="formulario" method="POST">
                        <div class="form-group col-lg-2 col-md-2 col-sm-2 cols-xs-3">
                          <label>TIPO CLIENTE</label>
                          <select name="tcli" id="tcli" class="form-control" required>  
                            <option values="juridico">Juridico</option>
                            <option values="natural">natural</option>                            
                          </select>                                             
                          <input type="hidden" name="codcli" id="codcli">                          
                        </div>
                        <div class="form-group col-lg-2 col-md-2 col-sm-2 cols-xs-3">
                          <label>TIPO ID	</label>
                          <select name="tidenti" id="tidenti" class="form-control" >
                            <option values="CC">CC</option>
                            <option values="Nit">Nit</option>    
                            <option values="Pasaporte">Pasaporte</option>                          
                          </select>                         
                        </div>
                        <div class="form-group col-lg-3 col-md-3 col-sm-3 cols-xs-4">
                          <label>ID_CLIENTE	</label>
                          <input type="number" name="idcli" id="idcli" maxlength="50" placeholder="IDENTIFICACION_CLIENTE	"  class="form-control" required>                          
                        </div>                        
                        <div class="form-group col-lg-2 col-md-2 col-sm-2 cols-xs-2">
                          <label>DIG_VERIF</label>
                          <input type="number" name="difvercli" id="difvercli" maxlength="50" placeholder="DIG_VERIF"  class="form-control" required>                          
                        </div>
                        <div class="form-group col-lg-2 col-md-2 col-sm-2 cols-xs-2">
                          <label>TIPO EMPRESA</label>
                          <select name="tempre" id="tempre" class="form-control" >
                            <option values="LTDA">LTDA</option>
                            <option values="SA">SA</option>    
                            <option values="SAS">SAS</option>                          
                          </select>                     
                                           
                        </div>                        
                        <div class="form-group col-lg-5 col-md-6 col-sm-6 cols-xs-12">
                          <label>NOMB CLIENTE</label>
                          <input type="text" name="nombcli" id="nombcli" maxlength="50" placeholder="NOMBRE CLIENTE" class="form-control" required>                          
                        </div>
                        <div class="form-group col-lg-5 col-md-6 col-sm-6 cols-xs-12">
                          <label>DIRECCION	</label>
                          <input type="text" name="dircli" id="dircli" maxlength="50" placeholder="DIRECCION" class="form-control" required>                          
                        </div>   
                         <div class="form-group col-lg-2 col-md-2 col-sm-2 cols-xs-4">
                          <label>TELEFONO	</label>
                          <input type="number" name="telcli" id="telcli" maxlength="50" placeholder="TELEFONO	" class="form-control" required>                          
                        </div>                       

                        <div class="form-group col-lg-2 col-md-2 col-sm-2 cols-xs-4">
                          <label>CIUDAD</label>
                          <select name="ciudad" id="ciudad" class="form-control" required>                                       
                          </select>      

                        </div>
                        <div class="form-group col-lg-4 col-md-4 col-sm-4 cols-xs-4">
                          <label>PAG_WEB</label>
                          <input type="text" name="pweb" id="pweb" maxlength="50" placeholder="PAGINA_WEB" class="form-control" required>                          
                        </div>   
                        <div class="form-group col-lg-1 col-md-1 col-sm-1 cols-xs-">
                          <label>CORTE_FACT	</label>
                          <input type="number" name="cortefact" id="cortefact" maxlength="50" placeholder="CORTE_FACTURACION_DIAS	" class="form-control" required>                          
                        </div>   
                        <div class="form-group col-lg-1 col-md-1 col-sm-1 cols-xs-">
                          <label>DIAS PAGO</label>
                          <input type="number" name="dpago" id="dpago" maxlength="50" placeholder="DIAS_DE_PAGO" class="form-control" required>                          
                        </div>                       
                        <div class="form-group col-lg-1 col-md-1 col-sm-1 cols-xs-">
                          <label>impBODEGAGE	</label>
                          <input type="text" name="impbog" id="impbog" maxlength="50" placeholder="impBODEGAGE" class="form-control" required>                          
                        </div>   
                        <div class="form-group col-lg-1 col-md-1 col-sm-1 cols-xs-">
                          <label>impTRANS</label>
                          <input type="text" name="imptrans" id="imptrans" maxlength="50" placeholder="impTRANSPORTE" class="form-control" required>                          
                        </div>   
                       
                        <div class="form-group col-lg-1 col-md-1 col-sm-1 cols-xs-">
                          <label>MIN NEGO</label>
                          <input type="text" name="minneg" id="minneg" maxlength="50" placeholder="MIN NEGOCIACION" class="form-control" required>                          
                        </div>   
                        <div class="form-group col-lg-1 col-md-1 col-sm-1 cols-xs-">
                          <label>% ANTICIPO</label>
                          <input type="number" name="porc" id="porc" maxlength="50" placeholder="PORCENTAGE" class="form-control" required>                          
                        </div>
                        <div class="form-group col-lg-1 col-md-1 col-sm-1 cols-xs-">
                          <label>LAPSO REPORT</label>
                          <input type="text" name="reportcli" id="reportcli" maxlength="50" placeholder="LASPTO DE REPORTE" class="form-control" required>                          
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
<script type="text/javascript" src="../script/cliente.js"> </script>