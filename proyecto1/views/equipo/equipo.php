
  
 <?php 
  session_start();
 
      include ('../../libs/adodb5/adodb-pager.inc.php');
      include ('../../libs/adodb5/adodb.inc.php');
      include ('../../models/Conexion.php');
      include ('../../models/Modelo.php');
      include ('../../models/Equipo.php');
      include ('../../controllers/EquipoController.php');
      include ('../../libs/Er.php');
	  include ('../layouts/header.php');
  
  if(isset($_POST['nombre'])){
  echo "<pre>";
  print_r($_POST);
  echo "</pre>";
  
  
  
  
  }
?>
  
  
  
    	<div class="row">
  				<center><h1> <span class="glyphicon glyphicon-th"></span>Equipo  </h1> </center>
    	</div>
		<div class="row">
        	<div class="col-md-3">
            	
        	</div>
            <div class="col-md-6">
						    <form class="registro"  method ="POST">
							  <div class="form-group">
								<label for="nombre">Nombre</label>
								<input type="" class="form-control" id="nombre" name = "nombre" placeholder="Ingresa nombre del equipo">
							  </div>
							  
							 <div class="form-group">
							    <label for="idpais">idpais</label>
								<select class="form-control" id="idpais" name = "idpais">
								        <option value=""></option>
										<option value="2">1/option>
										<option value="1">2</option>
								</select>
							  </div>
							 
							  <div class="form-group">
								<label for="escudo">Escudo/label>
								<input type="file" id="escudo" name = "escudo">
								<p class="help-block">Carga una imagen del escudo</p>
								
							  </div >
							  
							  <div>
							  <button type="submit" class="btn btn-default">Enviar</button>
							  </div>
							</form>
				
        	</div>
			<div class="col-md-2">
            		
        	</div>
        </div>
        
	  <?php include ('../layouts/footer.php'); ?>