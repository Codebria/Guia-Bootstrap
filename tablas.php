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
				<div class="col-md-6">
					<table class="table">
						<caption>Título de tabla.</caption>
						<thead>
							<tr>
								<th>#</th><th>Nombres</th><th>Apellidos</th><th>Usuario</th>
							</tr> 
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th><td>Mark</td><td>Otto</td><td>@mdo</td>
							</tr>
							<tr>
								<th scope="row">2</th><td>Jacob</td><td>Thornton</td><td>@fat</td>
							</tr>
							<tr>
								<th scope="row">3</th><td>Larry</td><td>the Bird</td><td>@twitter</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-md-6">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>N°</th><th>Nombres</th><th>Apellidos</th><th>Usuario</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th><td>Mark</td><td>Otto</td><td>@mdo</td>
							</tr>
							<tr>
								<th scope="row">2</th><td>Jacob</td><td>Thornton</td><td>@fat</td>
							</tr>
							<tr>
								<th scope="row">3</th><td>Larry</td><td>the Bird</td><td>@twitter</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-md-6">
					<div class="bs-example" data-example-id="simple-responsive-table"> 
						 
								<div class="table-responsive"> 
								<table class="table table-bordered"> 
								<thead> 
									<tr> 
									<th>#</th> 
									<th>Cabecera de Tabla</th> 
									<th>Cabecera de Tabla</th> 
									<th>Cabecera de Tabla</th> 
									<th>Cabecera de Tabla</th> 
									<th>Cabecera de Tabla</th> 
									<th>Cabecera de Tabla</th> 
									</tr> 
								</thead> 
								<tbody> 
								<tr> <th scope="row">1</th> 
									<td>Celda de Tabla</td> 
									<td>Celda de Tabla</td> 
									<td>Celda de Tabla</td> 
									<td>Celda de Tabla</td> 
									<td>Celda de Tabla</td> 
									<td>Celda de Tabla</td> 
								</tr> 
								<tr> 
									<th scope="row">2</th> 
									<td>Celda de Tabla</td> 
									<td>Celda de Tabla</td> 
									<td>Celda de Tabla</td> 
									<td>Celda de Tabla</td> 
									<td>Celda de Tabla</td> 
									<td>Celda de Tabla</td> 
								</tr> 
								<tr> 
									<th scope="row">3</th> 
									<td>Celda de Tabla</td> 
									<td>Celda de Tabla</td> 
									<td>Celda de Tabla</td> 
									<td>Celda de Tabla</td> 
									<td>Celda de Tabla</td> 
									<td>Celda de Tabla</td> 
								</tr> 
								</tbody> 
								</table> 
								</div> 
								</div>
				</div>
				<div class="col-md-6">
					<div class="bs-example" data-example-id="contextual-table"> 
						<table class="table"> 
						<thead> 
							<tr> 
								<th>#</th> 
								<th>Cabecera de Columna</th> 
								<th>Cabecera de Columna</th> 
								<th>Cabecera de Columna</th> 
							</tr> 
						</thead> 
						<tbody> 
						<tr class="active"> 
							<th scope="row">1</th>
								<td>Contenido de colum</td> 
								<td>Contenido de colum</td> 
								<td>Contenido de colum</td> 
							</tr> 
							<tr> 
							<th scope="row">2</th> 
								<td>Contenido de colum</td> 
								<td>Contenido de colum</td> 
								<td>Contenido de colum</td> 
							</tr> 
							<tr class="success"> 
								<th scope="row">3</th> 
								<td>Contenido de colum</td> 
								<td>Contenido de colum</td> 
								<td>Contenido de colum</td> 
							</tr> 
							<tr> 
							<th scope="row">4</th> 
								<td>Contenido de colum</td> 
								<td>Contenido de colum</td> 
								<td>Contenido de colum</td> 
							</tr> 
							<tr class="info"> 
							<th scope="row">5</th> 
								<td>Contenido de colum</td> 
								<td>Contenido de colum</td> 
								<td>Contenido de colum</td> 
							</tr> 
							<tr> 
							<th scope="row">6</th> 
								<td>Contenido de colum</td> 
								<td>Contenido de colum</td> 
								<td>Contenido de colum</td> 
							</tr> 
							<tr class="warning"> 
							<th scope="row">7</th> 
								<td>Contenido de colum</td> 
								<td>Contenido de colum</td> 
								<td>Contenido de colum</td> 
							</tr> 
							<tr> 
							<th scope="row">8</th> 
								<td>Contenido de colum</td> 
								<td>Contenido de colum</td> 
								<td>Contenido de colum</td> 
							</tr> 
							<tr class="danger"> 
							<th scope="row">9</th> 
								<td>Contenido de colum</td> 
								<td>Contenido de colum</td> 
								<td>Contenido de colum</td> 
							</tr> 
							</tbody> 
							</table> 
					</div>
				</div>
				
			</div>

		</div>
	</div>
	<!-- fin de contenido-->
</body>
</html>