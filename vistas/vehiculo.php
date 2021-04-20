
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
                            <th>CODIGO VEHICULO</th>
                            <th>"PLACA"</th>
                            <th>"MARCA"</th>
                            <th>TIPO VEHICULO</th>
                            <th>TIPO CARROCERIA</th>
                            <th>PLACA DEL REMOLQUE</th>
                            <th>PESO VACIO REMOLQUE</th>
                            <th>"CONFIGURACION"</th>
                            <th>PESO VACIO </th>
                            <th>ID COMPAÑÍA SEGUROS</th>
                            <th>NO. POLIZA SOAT</th>
                            <th>COMPAÑÍA DE SEGUROS</th>
                            <th>FECHA VENC SOAT</th>
                            <th>TIPO DE PAGO EN DIAS</th>
                            <th>"TIPO/CUENTA"</th>
                            <th>"BANCO"</th>
                            <th>NUMERO CUENTA</th>
                            <th>DOCS</th>
                            <th>FECHA_ACTUALIZACION</th>
                            <th>DUEÑO VEHI</th>
                            <th>CONDUC VEHI</th>
                            <th>AUTOR PAGO</th>
                            <th>OPERAD GPS</th>
                            <th>ÁG WEB GPS</th>
                            <th>USER GPS</th>
                            <th>CLAVE GPS</th>
                            <th>OBSERVACION</th>
                            <th>ESTADO VEHICULO</th>
                          </thead>
                          <tbody></tbody> 
                          <tfoot>
                            <th>CODIGO VEHICULO</th>
                            <th>"PLACA"</th>
                            <th>"MARCA"</th>
                            <th>TIPO VEHICULO</th>
                            <th>TIPO CARROCERIA</th>
                            <th>PLACA DEL REMOLQUE</th>
                            <th>PESO VACIO REMOLQUE</th>
                            <th>"CONFIGURACION"</th>
                            <th>PESO VACIO </th>
                            <th>ID COMPAÑÍA SEGUROS</th>
                            <th>NO. POLIZA SOAT</th>
                            <th>COMPAÑÍA DE SEGUROS</th>
                            <th>FECHA VENC SOAT</th>
                            <th>TIPO DE PAGO EN DIAS</th>
                            <th>"TIPO/CUENTA"</th>
                            <th>"BANCO"</th>
                            <th>NUMERO CUENTA</th>
                            <th>DOCS</th>
                            <th>FECHA_ACTUALIZACION</th>
                            <th>DUEÑO VEHI</th>
                            <th>CONDUC VEHI</th>
                            <th>AUTOR PAGO</th>
                            <th>OPERAD GPS</th>
                            <th>ÁG WEB GPS</th>
                            <th>USER GPS</th>
                            <th>CLAVE GPS</th>
                            <th>OBSERVACION</th>
                            <th>ESTADO VEHICULO</th>                      
                          </tfoot>
                        </table>
                    </div>
                    <div class="panel-body"  style="height:750px;" id="formularioregistros">
                      <form name="formulario" id="formulario" method="POST">
                        <div class="form-group col-lg-3 col-md-3 col-sm-3 cols-xs-3">
                          <label>PLACA</label>
                          <input type="text" name="placavehi" id="placavehi" maxlength="50" placeholder="placa"  class="form-control" required>
                          <input type="hidden" name="codvehi" id="codvehi">                          
                        </div>
                        <div class="form-group col-lg-3 col-md-3 col-sm-3 cols-xs-3">
                          <label>MARCA</label>
                          <select name="marcveh" id="marcveh" class="form-control" >                            
                          </select>                       
                        </div>
                        <div class="form-group col-lg-2 col-md-2 col-sm-2 cols-xs-2">
                          <label>TIPO VEHICULO</label>
                          <select name="tvehiculo" id="tvehiculo" class="form-control" >
                            <option values=""></option>
                            <option values="camabaja">cama baja</option>
                            <option values="dobletroque">doble troque</option>    
                            <option values="minimula">minimula</option>                          
                            <option values="mula">mula</option>                          
                            <option values="sencillo">sencillo</option>                          
                            <option values="turbo">turbo</option>  
                          </select>                                    
                        </div>                        
                        <div class="form-group col-lg-2 col-md-2 col-sm-2 cols-xs-2">
                          <label>TIPO CARROCERIA</label>
                          <select name="tcarrocveh" id="tcarrocveh" class="form-control" >
                            <option values=""></option>
                            <option values="contenedor">Contenedor</option>
                            <option values="estaca">Estaca</option>    
                            <option values="furgon">Furgon</option>                          
                            <option values="plancha">Plancha</option>                          
                          </select>                        
                        </div>
                        <div class="form-group col-lg-3 col-md-3 col-sm-3 cols-xs-3">
                          <label>PLACA REMOLQUE</label>
                          <input type="text" name="placaremvehi" id="placaremvehi" maxlength="50" placeholder="PLACA REMOLQUE" class="form-control" required>                          
                        </div>                        
                        <div class="form-group col-lg-3 col-md-3 col-sm-3 cols-xs-3">
                          <label>PESO VACIO REMOLQUE</label>
                          <input type="number" name="pesremvehi" id="pesremvehi" maxlength="50" placeholder="PESO VACIO REMOLQUE" class="form-control" required>                          
                        </div>
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 cols-xs-12">
                          <label>CONFIGURACION</label>
                          <input type="text" name="confvehi" id="confvehi" maxlength="50" placeholder="CONFIGURACION" class="form-control" required>                          
                        </div>   
                         <div class="form-group col-lg-3 col-md-3 col-sm-3 cols-xs-3">
                          <label>PESO VACIO</label>
                          <input type="number" name="pesovvehi" id="pesovvehi" maxlength="50" placeholder="PESO VACIO" class="form-control" required>                          
                        </div>   
                        <div class="form-group col-lg-3 col-md-3 col-sm-3 cols-xs-3">
                          <label>NO. POLIZA SOAT</label>
                          <input type="number" name="npolvehi" id="npolvehi" maxlength="50" placeholder="NO. POLIZA SOAT" class="form-control" required>                          
                        </div>   
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 cols-xs-12">
                          <label>SEGUROS</label>
                          <input type="text" name="segvehi" id="segvehi" maxlength="50" placeholder="SEGUROS" class="form-control" required>                          
                        </div>   
                        <div class="form-group col-lg-3 col-md-3 col-sm-3 cols-xs-3">
                          <label>FECHA VEC SOAT</label>
                          <input type="date" name="fvensvehi" id="fvensvehi" maxlength="50" placeholder="FECHA VEC SOAT" class="form-control" required>                          
                        </div>   
                        <div class="form-group col-lg-3 col-md-3 col-sm-3 cols-xs-3">
                          <label>TIPO DE PAGO EN DIAS</label>
                          <input type="text" name="tpagdvehi" id="tpagdvehi" maxlength="50" placeholder="TIPO DE PAGO EN DIAS" class="form-control" required>                          
                        </div>   
                        <div class="form-group col-lg-3 col-md-3 col-sm-3 cols-xs-3">
                          <label>TIPO/CUENTA</label>
                          <select name="tcuentavhi" id="tcuentavhi" class="form-control" >
                            <option values=""></option>
                            <option values="contenedor">Ahorros</option>
                            <option values="estaca">Corriente</option>                                  
                          </select>    

                        </div>   
                        <div class="form-group col-lg-3 col-md-3 col-sm-3 cols-xs-3">
                          <label>BANCO</label>                              
                          <select name="bankvehi" id="bankvehi" class="form-control" >
                            <option values=""></option>                          
                          </select>     

                        </div>   
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 cols-xs-12">
                          <label>NUM CUENTA</label>
                          <input type="number" name="nctavehi" id="nctavehi" maxlength="50" placeholder="NUM CUENTA" class="form-control" required>                          
                        </div>   
                       
                        <div class="form-group col-lg-6 col-md-6 col-sm-6 cols-xs-12">
                          <label>DOC</label>
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