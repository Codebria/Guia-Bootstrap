<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Carrusel de imágenes</title>
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
	<!--inico del carrusel-->
	<div class="row">
		<div class="container">
			<div class="row">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				  <!-- Indicadores -->
				  <ol class="carousel-indicators">
				    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
				  </ol>

				  <!-- Wrapper para carrusel -->
				  <div class="carousel-inner" role="listbox">
				    <div class="item active">
				      <img src="assets/img/foto1.jpg" alt="...">
				      <div class="carousel-caption">
				     
				      </div>
				    </div>
				    <div class="item">
				      <img src="assets/img/foto2.jpg" alt="...">
				      <div class="carousel-caption">
				         <h3>slide label</h3> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> 
				      </div>
				    </div>
				    <div class="item">
				      <img src="assets/img/foto31.jpg" alt="..." style="margin: auto;">
				      <div class="carousel-caption">
				         <h3>slide label</h3> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> 
				      </div>
				    </div>
				    
				    <div class="item">
				      <img src="assets/img/foto4.jpg" alt="..." style="margin: auto;">
				      <div class="carousel-caption">
				         <h3>slide label</h3> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> 
				      </div>
				    </div>
				  </div>

				  <!-- Controles -->
				  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
			</div>	



	</div>
	<!-- fin de carrusel-->
</body>
</html>