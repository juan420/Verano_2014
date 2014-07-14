
  <?php 
  session_start();
  include ('../layouts/header.php');
?>



  
  
  
   
    	<div class="row">
  				<center><h1> <span class="glyphicon glyphicon-th"></span>Prueba1<center>
    	</div>
		<br />
		<div class="row">
        	<div class="col-md-3">
            	
        	</div>
            <div class="col-md-6" >
            
			
			<form class="registro">
			    
				<div class="form-group">
					<label class="col-lg-3 control-label">nombre</label>
					<div class="col-lg-9">
						<input type="text" class="form-control" name="nombre" />
					</div>
				</div>
				
				
				
				<div class="form-group">
					<label class="col-lg-3 control-label">portada</label>
					<div class="col-lg-9">
						<input type="text" class="form-control" name="portada" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label">fecha</label>
					<div class="col-lg-9">
						<input type="text" class="form-control" name="fecha" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label">volumen</label>
					<div class="col-lg-9">
						<input type="text" class="form-control" name="volumen" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label">Titulo</label>
					<div class="col-lg-9">
						<input type="text" class="form-control" name="titulo" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label">Subtitulo</label>
					<div class="col-lg-9">
						<input type="text" class="form-control" name="subtitulo" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label">numero</label>
					<div class="col-lg-9">
						<input type="text" class="form-control" name="numero" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label">Clave</label>
					<div class="col-lg-9">
						<input type="text" class="form-control" name="clave" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label">Directorio</label>
					<div class="col-lg-9">
						<input type="text" class="form-control" name="directorio" />
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label">Editorial</label>
					<div class="col-lg-9">
						<input type="text" class="form-control" name="editorial" />
					</div>
				</div>
				
				 <div class="form-group">
                <div class='input-group date' id='datetimepicker2'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
                </div>
			</form>
                            
				
        	</div>
			<div class="col-md-2">
            		
        	</div>
        </div>
		
		
	
 
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->

 <?php include ('../layouts/footer.php'); ?>
  