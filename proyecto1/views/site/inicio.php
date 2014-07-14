<?php 
  session_start();
  include ('../layouts/header.php');
?>


    

      <div class="masthead">
        <h3 class="text-muted"><img src="../images/fondo - Copy - Copy.png"/></h3>
        <ul class="nav nav-justified">
          <li class="active"><a href="#">Home</a></li>
          <li><a class="various fancybox.iframe" href="revista_1.php"role="button"> Llenar formulario </a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Downloads</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>

      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>Noticias</h1>
        <p class="lead">
       
        </p>
        <p>
		
		
		
		<a class="various fancybox.iframe" href="revista_1.php"role="button"> Llenar formulario </a>
		
        <br />
		<a class="fancybox-thumb" rel="fancybox-thumb" href="../images/fifa2 - Copy.jpg" title="Ayvalık, Turkey (Nejdet Düzen)">
			<img src="../images/fifa2.jpg" alt="" />
		</a>
		
		
		
		<a class="fancybox-thumb" rel="fancybox-thumb" href="../images/fifa3.jpg" title="Ayvalık, Turkey (Nejdet Düzen)">
			<img src="../images/fifa4.jpg" alt="" />
		</a>
		
		<a class="fancybox-thumb" rel="fancybox-thumb" href="../images/fifa2 - Copy.jpg" title="Ayvalık, Turkey (Nejdet Düzen)">
			<img src="../images/fifa2.jpg" alt="" />
		</a>
		
		<a class="fancybox-thumb" rel="fancybox-thumb" href="../images/fifa3.jpg" title="Ayvalık, Turkey (Nejdet Düzen)">
			<img src="../images/fifa4.jpg" alt="" />
		</a>
		
		
		
		
		
		</p>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-2">
          <h2>Safari bug warning!</h2>
          <p class="text-danger">As of v7.0.1, Safari exhibits a bug in which resizing your browser horizontally causes rendering errors in the justified nav that are cleared upon refreshing.</p>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-lg-8">
          <div class="row">
  				<h1>________ <span class="glyphicon glyphicon-th"></span>Prueba1
    	</div>
		<br />
		<div class="row">
        	<div class="col-md-1">
            	
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
        <div class="col-lg-2">
          <h2>Heading</h2>
          <p>facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
          <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div>

      <!-- Site footer -->
      <div class="footer">
        <p>&copy; Company 2014</p>
      </div>

    
<?php include ('../layouts/footer.php'); ?>
