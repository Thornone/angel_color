<?php
@session_start();

#if ( !isset($_SESSION['userId']) ){
#	header("Location: index.php");
#	die;
#}

#include 'db.php';

if ( isset($_GET['m']) ){
	switch($_GET['m']) {

		/* clientes */
		case "clientes":
			$paginaPHP = "php/clientes.php";
		break;
		case "clientesAgregar":
			$paginaPHP = "php/clientesAgregar.php";
		break;
		case "clientesEditar":
			$paginaPHP = "php/clientesEditar.php";
		break;
		case "servicios":
			$paginaPHP = "php/servicios.php";
		break;
		case "serviciosAgregar":
			$paginaPHP = "php/serviciosAgregar.php";
		break;
		case "serviciosEditar":
			$paginaPHP = "php/serviciosEditar.php";
		break;
		case "ventas":
			$paginaPHP = "php/ventas.php";
		break;
		case "ventasAgregar":
			$paginaPHP = "php/ventasAgregar.php";
		break;
		case "ventasEditar":
			$paginaPHP = "php/ventasEditar.php";
		break;
		case "proveedores":
			$paginaPHP = "php/proveedores.php";
		break;
		case "proveedoresAgregar":
			$paginaPHP = "php/proveedoresAgregar.php";
		break;
		case "proveedoresEditar":
			$paginaPHP = "php/proveedoresEditar.php";
		break;
		case "stock":
			$paginaPHP = "php/stock.php";
		break;
		case "stockAgregar":
			$paginaPHP = "php/stockAgregar.php";
		break;
		case "stockEditar":
			$paginaPHP = "php/stockEditar4.php";
		break;
		case "activos":
			$paginaPHP = "php/activos.php";
		break;
		case "activosAgregar":
			$paginaPHP = "php/activosAgregar.php";
		break;
		case "activosEditar":
			$paginaPHP = "php/activosEditar.php";
		break;
		case "usuarios":
			$paginaPHP = "php/usuarios.php";
		break;
		case "usuariosAgregar":
			$paginaPHP = "php/usuariosAgregar.php";
		break;
		case "usuariosEditar":
			$paginaPHP = "php/usuariosEditar.php";
		break;
		case "calendario":
			$paginaPHP = "php/calendario.php";
		break;
		case "requisicion":
			$paginaPHP = "php/requisicion.php";
		break;
		case "listareq":
			$paginaPHP = "php/listareq.php";
		break;



	}
} else {
	$paginaPHP = "php/index.php";
}

$errorMsg = "";

?>
<!DOCTYPE html>
<html lang="en" class="app">
<head> <meta charset="utf-8" />
<title>Angel Color</title>
<meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link rel="stylesheet" href="css/app.v1.css" type="text/css" />
<script src="js/app.v1.js"></script>
<!--[if lt IE 9]>
<script src="js/ie/html5shiv.js"></script>
<script src="js/ie/respond.min.js"></script>
<script src="js/ie/excanvas.js"></script>
<![endif]-->
</head>
<body class="">
	<section class="vbox">
		<header class="bg-black dk header navbar navbar-fixed-top-xs">
			<div class="navbar-header aside-md">
				<a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html"> <i class="fa fa-bars"></i> </a>
				<a href="#" class="navbar-brand" data-toggle="fullscreen">Angel Color</a>
				<a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".nav-user"> <i class="fa fa-cog"></i> </a>
			</div>
			<ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="thumb-sm avatar pull-left"> <img src="images/avatar_default.jpg"> </span> admin <b class="caret"></b> </a>
					<ul class="dropdown-menu animated fadeInRight"> <span class="arrow top"></span> 
						<li class="divider"></li>
						<li> <a href="cerrar.php">Salir</a> </li>
					</ul>
				</li>
			</ul>
		</header>
		<section>
			<section class="hbox stretch">
				<!-- .aside -->
				<aside class="bg-black lter aside-md hidden-print hidden-xs" id="nav">
					<section class="vbox">
						<section class="w-f scrollable"> 
							<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 540px;">
								<div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333" style="overflow: hidden; width: auto; height: 540px;"> <!-- nav --> 
									<nav class="nav-primary hidden-xs"> 
										<ul class="nav"> 
											<li class=""> 
												<a href="admin.php?m=clientes" class="active"> <i class="fa fa-users icon"> <b class="bg-danger"></b> </i> 
													<span class="pull-right"> <i class="fa fa-angle-down text"></i> <i class="text-active"></i> </span> 
													<span>Clientes</span> 
												</a> 
											</li> 
											<li> 
												<a href="admin.php?m=servicios"> <i class="fa fa-columns icon"> <b class="bg-warning"></b> </i> 
													<span class="pull-right"> <i class="text"></i> <i class="fa fa-angle-up text-active"></i> </span> 
													<span>Servicios</span> 
												</a> 
											</li> 
											<li> 
												<a href="admin.php?m=ventas"> <i class="fa fa-usd icon"> <b class="bg-success"></b> </i> 
												<span class="pull-right"> <i class="text"></i> <i class="fa fa-angle-up text-active"></i> </span> 
												<span>Ventas</span> </a> 
											</li> 
											<li> <a href="admin.php?m=proveedores"> <i class="fa fa-tags icon"> <b class="bg-info"></b> </i> <span>Proveedores</span> </a> </li> 
											<li> <a href="admin.php?m=stock"> <b class="badge bg-danger pull-right">3</b> <i class="fa fa-file-text icon"> <b class="bg-primary"></b> </i> <span>Stock</span> </a> </li> 
											<li> <a href="admin.php?m=activos"> <i class="fa fa-ticket icon"> <b class="bg-primary dker"></b> </i> <span>Activos Fijos</span> </a> </li> 
											<li> <a href="admin.php?m=calendario"> <i class="fa fa-calendar icon"> <b class="bg-danger"></b> </i> <span>Calendario</span> </a> </li> 
											<li> <a href="admin.php?m=usuarios"> <i class="fa fa-plus-square icon"> <b class="bg-warning"></b> </i> <span>Usuarios</span> </a> </li> 
										</ul> 
									</nav> <!-- / nav --> 
								</div>
								<div class="slimScrollBar" style="width: 5px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 0px; height: 540px; background: rgb(51, 51, 51);"></div>
								<div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; right: 0px; background: rgb(51, 51, 51);"></div>
							</div> 
						</section>
						<footer class="footer lt hidden-xs bg-black"> 
							<button  type="button" href="#nav" data-toggle="class:nav-xs" class="pull-right btn-icon btn btn-default btn-block"> 
								<i class="fa fa-angle-left text"></i> <i class="fa fa-angle-right text-active"></i> 
							</button> 
						</footer>
					</section>
				</aside>
				<!-- /.aside -->
				<section id="content">
					<section class="vbox">
						<!--<header class="header bg-white b-b b-light"> <p>Layout with black color</p> </header>-->
						<section class="scrollable wrapper w-f">
							<?php include $paginaPHP; ?>
						</section>
						<footer class="footer bg-white b-t b-light text-right">
							<p><a href="http://nuevolaredo.f403.mx">F403.MX Nuevo Laredo</a></p>
						</footer>
					</section>
					<a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen, open" data-target="#nav,html"></a>
				</section>
			</section>
		</section>
	</section>

	<script src="js/app.plugin.js"></script>
</body>
</html>