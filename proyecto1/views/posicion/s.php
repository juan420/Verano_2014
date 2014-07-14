
 <?php 
  session_start();
  include ('../layouts/header.php');
?>
  
  
  
  
     
    	<div class="row">
  				<center><h1> <span class="glyphicon glyphicon-th"></span>Estadio   </h1> </center>
    	</div>
		<div class="row">
        	<div class="col-md-3">
            	
        	</div>
            <div class="col-md-6">
						    <form class="registro">
							  <div class="form-group">
								<label for="nombre">Estadio</label>
								<input type="email" class="form-control" id="nombre" name = "nombre" placeholder="nombre de estadio">
							  </div>
							 
							  
							  <div class="form-group">
							    <label for="idcontinente">Ciudad</label>
								<select class="form-control" id="idcontiene" name = "idcontinente">
								        <option value=""></option>
										<option value="asia">Asia</option>
										<option value="america">America</option>
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
	