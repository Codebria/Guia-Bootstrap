<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css">
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
</head>
<body>
	<div class="row">
	<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container-fluid">
			<div class="container">
			    <!-- menu oculto que se muestra cuando la pantalla es pequeña -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-qrcode"></span> Logo</a>
			    </div>

			    <!-- links y menu colapsado -->
			    <div class="collapse navbar-collapse" id="navbar-collapse-1">
			      <ul class="nav navbar-nav">
			        <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span> Inicio<span class="sr-only">(current)</span></a></li>
			        <li><a href="#"><span class="glyphicon glyphicon-send"></span> contactos</a></li>
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
			          <ul class="dropdown-menu">
			            <li><a href="#"> <span class="glyphicon glyphicon-film"></span> link sub1</a></li>
			            <li><a href="#">link sub1</a></li>
			            <li><a href="#">link sub1</a></li>
			            <li role="separator" class="divider"></li>
			            <li><a href="#">link sub2</a></li>
			            <li role="separator" class="divider"></li>
			            <li><a href="#">link sub2</a></li>
			          </ul>
			        </li>
			      </ul>
			      <form class="navbar-form navbar-left">
			        <div class="form-group">
			          <input type="text" class="form-control" placeholder="Escribe tu busqueda">
			        </div>
			        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span> Buscar</button>
			      </form>
			      <ul class="nav navbar-nav navbar-right">
			        <li><a href="#"><span class="glyphicon glyphicon-apple"></span> Link</a></li>
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
			          <ul class="dropdown-menu">
			            <li><a href="#"><span class="glyphicon glyphicon-thumbs-up"></span> link sub3</a></li>
			            <li><a href="#">link sub3</a></li>
			            <li><a href="#">link sub3</a></li>
			            <li role="separator" class="divider"></li>
			            <li><a href="#">link sub3</a></li>
			          </ul>
			        </li>
			      </ul>
			    </div><!-- /.navbar-collapse -->
		    </div>
	  </div><!-- /.container-fluid -->
	</nav>
	</div>
	<br>
	<br>
	<br>
	<!--inico del contenido-->
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
				<h3>formulario basico</h3>
					<form>
					  <div class="form-group">
					    <label for="exampleInputEmail1">Email address</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Password</label>
					    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputFile">File input</label>
					    <input type="file" id="exampleInputFile">
					    <p class="help-block">Example block-level help text here.</p>
					  </div>
					  <div class="checkbox">
					    <label>
					      <input type="checkbox"> Check me out
					    </label>
					  </div>
					  <button type="submit" class="btn btn-default">Submit</button>
					</form>
				</div>	
				<div class="col-md-8">
					<h3>formulario en linea</h3>
						<form class="form-inline">
						  <div class="form-group">
						    <label for="exampleInputName2">Name</label>
						    <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail2">Email</label>
						    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
						  </div>
						  <button type="submit" class="btn btn-default">Send invitation</button>
						</form>
					<hr>
						<form class="form-inline">
						  <div class="form-group">
						    <label class="sr-only" for="exampleInputEmail3">Email address</label>
						    <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
						  </div>
						  <div class="form-group">
						    <label class="sr-only" for="exampleInputPassword3">Password</label>
						    <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
						  </div>
						  <div class="checkbox">
						    <label>
						      <input type="checkbox"> Remember me
						    </label>
						  </div>
						  <button type="submit" class="btn btn-primary">Sign in</button>
						</form>
					<hr>
						FORMULARIO HORIZONTAL
						<form class="form-horizontal">
						  <div class="form-group">
						    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
						    <div class="col-sm-10">
						      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
						    <div class="col-sm-10">
						      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
						    </div>
						  </div>
						  <div class="form-group">
						    <div class="col-sm-offset-2 col-sm-10">
						      <div class="checkbox">
						        <label>
						          <input type="checkbox"> Recordarme
						        </label>
						      </div>
						    </div>
						  </div>
						  <div class="form-group">
						    <div class="col-sm-offset-2 col-sm-10">
						      <button type="submit" class="btn btn-default">logear</button>
						    </div>
						  </div>
						</form>
					<hr>
						<div class="checkbox">
						  <label>
						    <input type="checkbox" value="">
						    opciones
						  </label>
						</div>
						<div class="checkbox disabled">
						  <label>
						    <input type="checkbox" value="" disabled>
						    opciones
						  </label>
						</div>

						<div class="radio">
						  <label>
						    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
						    opciones radio
						  </label>
						</div>
						<div class="radio">
						  <label>
						    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
						    opciones radio
						  </label>
						</div>
						<div class="radio disabled">
						  <label>
						    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
						    opciones radio
						  </label>
						</div>
					<hr>
					seleccion
						<select class="form-control">
						  <option>1</option>
						  <option>2</option>
						  <option>3</option>
						  <option>4</option>
						  <option>5</option>
						</select>
					<hr>
					<textarea name="" id="" cols="auto" rows="10"></textarea>
				</div>	
			</div>
			<div class="row">
				<div class="col-md-12">
				<br>
				<br>
				
					BOTONES Y COLORES
					<!-- Standard button -->
					<button type="button" class="btn btn-default">Default</button>

					<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
					<button type="button" class="btn btn-primary">Primary</button>

					<!-- Indicates a successful or positive action -->
					<button type="button" class="btn btn-success">Success</button>

					<!-- Contextual button for informational alert messages -->
					<button type="button" class="btn btn-info">Info</button>

					<!-- Indicates caution should be taken with this action -->
					<button type="button" class="btn btn-warning">Warning</button>

					<!-- Indicates a dangerous or potentially negative action -->
					<button type="button" class="btn btn-danger">Danger</button>

					<!-- Deemphasize a button by making it look like a link while maintaining button behavior -->
					<button type="button" class="btn btn-link">Link</button>
				</div>
			</div>	
		</div>
	</div>
	<!-- fin de contenido-->
</body>
</html>