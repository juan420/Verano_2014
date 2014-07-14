
  
 <?php 
  session_start();
  include ('../layouts/header.php');
?>
  
  
  
    	<div class="row">
  				<center><h1> <span class="glyphicon glyphicon-th"></span>PAIS  </h1> </center>
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
								<label for="bandera">Bandera</label>
								<input type="file" id="bandera" name = "bandera">
								<p class="help-block">Carga una imagen de la bandera</p>
								
							  </div >
							  <div class="form-group">
							    <label for="idcontinente">idcontinente</label>
								<select class="form-control" id="idcontinente" name = "idcontinente">
								        <option value=""></option>
										<option value="asia">1</option>
										<option value="america">2</option>
								</select>
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