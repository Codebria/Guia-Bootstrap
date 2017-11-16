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
					BOTONES
					<!-- Standard button --> <button type="button" class="btn btn-default">Default</button> <!-- Provides extra visual weight and identifies the primary action in a set of buttons --> <button type="button" class="btn btn-primary">Primary</button> <!-- Indicates a successful or positive action --> <button type="button" class="btn btn-success">Success</button> <!-- Contextual button for informational alert messages --> <button type="button" class="btn btn-info">Info</button> <!-- Indicates caution should be taken with this action --> <button type="button" class="btn btn-warning">Warning</button> <!-- Indicates a dangerous or potentially negative action --> <button type="button" class="btn btn-danger">Danger</button> <!-- Deemphasize a button by making it look like a link while maintaining button behavior --> <button type="button" class="btn btn-link">Link</button>

					TAMAÑOS DE BOTONES
					<p> <button type="button" class="btn btn-primary btn-lg">Large button</button> <button type="button" class="btn btn-default btn-lg">Large button</button> </p> <p> <button type="button" class="btn btn-primary">Default button</button> <button type="button" class="btn btn-default">Default button</button> </p> <p> <button type="button" class="btn btn-primary btn-sm">Small button</button> <button type="button" class="btn btn-default btn-sm">Small button</button> </p> <p> <button type="button" class="btn btn-primary btn-xs">Extra small button</button> <button type="button" class="btn btn-default btn-xs">Extra small button</button> </p>
					BLOQUE PARA BOTONES
					<button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button> <button type="button" class="btn btn-default btn-lg btn-block">Block level button</button>

					BOTONES ACTIVOS
					<button type="button" class="btn btn-primary btn-lg active">Primary button</button> <button type="button" class="btn btn-default btn-lg active">Button</button>

					ROLES PARA BOTONES
					<a href="#" class="btn btn-primary btn-lg active" role="button">Primary link</a> <a href="#" class="btn btn-default btn-lg active" role="button">Link</a>
					 DESACTIVAR BOTONES
					<button type="button" class="btn btn-lg btn-primary" disabled="disabled">Primary button</button> <button type="button" class="btn btn-default btn-lg" disabled="disabled">Button</button>

					DESACTIVAR BOTONES LINK
					<a href="#" class="btn btn-primary btn-lg disabled" role="button">Primary link</a> <a href="#" class="btn btn-default btn-lg disabled" role="button">Link</a>

					IMÁGENES RESPONSIVAS
					<img src="..." class="img-responsive" alt="Responsive image">

					 CUADROS PARA IMÁGENES
					<img src="..." alt="..." class="img-rounded"> <img src="..." alt="..." class="img-circle"> <img src="..." alt="..." class="img-thumbnail">

					 COLORES PARA TEXTOS DANGER PRIMARY
					<p class="text-muted">...</p> <p class="text-primary">...</p> <p class="text-success">...</p> <p class="text-info">...</p> <p class="text-warning">...</p> <p class="text-danger">...</p>

					<p class="bg-primary">...</p> <p class="bg-success">...</p> <p class="bg-info">...</p> <p class="bg-warning">...</p> <p class="bg-danger">...</p>


					TIPOGRAFIA
					@font-family-sans-serif: "Helvetica Neue", Helvetica, Arial, sans-serif; @font-family-serif: Georgia, "Times New Roman", Times, serif; @font-family-monospace: Menlo, Monaco, Consolas, "Courier New", monospace; @font-family-base: @font-family-sans-serif; @font-size-base: 14px; @font-size-large: ceil((@font-size-base * 1.25)); // ~18px @font-size-small: ceil((@font-size-base * 0.85)); // ~12px @font-size-h1: floor((@font-size-base * 2.6)); // ~36px @font-size-h2: floor((@font-size-base * 2.15)); // ~30px @font-size-h3: ceil((@font-size-base * 1.7)); // ~24px @font-size-h4: ceil((@font-size-base * 1.25)); // ~18px @font-size-h5: @font-size-base; @font-size-h6: ceil((@font-size-base * 0.85)); // ~12px @line-height-base: 1.428571429; // 20/14 @line-height-computed: floor((@font-size-base * @line-height-base)); // ~20px @headings-font-family: inherit; @headings-font-weight: 500; @headings-line-height: 1.1; @headings-color: inherit;


			</div>



	</div>
	<!-- fin de contenido-->
</body>
</html>