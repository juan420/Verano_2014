
  <?php 
  session_start();
  include ('../layouts/header.php');
?>
  
  
  
  
     
    	<div class="row">
  				<center><h1> <span class="glyphicon glyphicon-th"></span>Agregar posicion </h1> </center>
    	</div>
		<div class="row">
        	<div class="col-md-3">
            	
        	</div>
            <div class="col-md-6">
						    <form class="registro">
							  <div class="form-group">
								<label for="nombre">posicion</label>
								<input type="continente" class="form-control" id="nombre" name = "nombre" placeholder="Ingresa posicion">
							  </div>
							  <div>
							  
							  <div class="form-group">
								<label for="abreviatura">abreviatura</label>
								<input type="continente" class="form-control" id="abreviatura" name = "abreviatura" placeholder="Ingresa abreviatura">
							  </div>
							  <button type="submit" class="btn btn-default">Enviar</button>
							  </div>
							  
							</form>
				
        	</div>
			<div class="col-md-2">
            		
        	</div>
        </div>
        
	<?php include ('../layouts/footer.php'); ?>