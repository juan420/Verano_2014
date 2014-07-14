
  <?php 
  session_start();
  include ('../layouts/header.php');
?>
  
  
  
  
     
    	<div class="row">
  				<center><h1> <span class="glyphicon glyphicon-th"></span>Agregar continente  </h1> </center>
    	</div>
		<div class="row">
        	<div class="col-md-3">
            	
        	</div>
            <div class="col-md-6">
						    <form class="registro">
							  <div class="form-group">
								<label for="nombre">Continente</label>
								<input type="continente" class="form-control" id="nombre" name = "nombre" placeholder="Ingresa continente">
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