
  
 <?php 
  session_start();
  include ('../layouts/header.php');
?>
  
  
  
    	<div class="row">
  				<center><h1> <span class="glyphicon glyphicon-th"></span>Integrante  </h1> </center>
    	</div>
		<div class="row">
        	<div class="col-md-3">
            	
        	</div>
            <div class="col-md-6">
						    <form class="registro">
							  <div class="form-group">
								<label for="nombre">Nombre</label>
								<input type="" class="form-control" id="nombre" name = "nombre" placeholder="Ingresa nombre">
							  </div>
							  
							  
							  <div class="form-group">
								<label for="apellido">apellido</label>
								<input type="" class="form-control" id="apellido" name = "apellido" placeholder="Ingresa apellido">
							  </div>
							   <div class="form-group">
								<label for="peso">peso</label>
								<input type="" class="form-control" id="peso" name = "peso" placeholder="Ingresa peso">
							  </div>
							    <div class="form-group">
								<label for="estatura">estatura </label>
								<input type="" class="form-control" id="estatura" name = "estatura" placeholder="Ingresa estatura">
							  </div>
							 
							  <div class="form-group">
								<label for="bandera">foto</label>
								<input type="file" id="bandera" name = "bandera">
								<p class="help-block">Carga una foto</p>
								
							  </div >
							   <div class="form-group">
								<label for="edad">edad</label>
								<input type="" class="form-control" id="edad" name = "edad" placeholder="Ingresa edad">
							  </div>
							   <div class="form-group">
								<label for="idequipo">equipo</label>
								<input type="" class="form-control" id="idequipo" name = "idequipo" placeholder="Ingresa equipo">
							  </div>
							  
							  

							  <div>
							  <button type="submit" class="btn btn-default">Enviar</button>
							  </div>
							</form>
				
        	</div>
			<div class="col-md-2">
            		
        	</div>
        </div>
        
	  <?php include ('../layouts/footer.php'); ?>