<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Tienda de Camisetas</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url ?>assets/css/styles.css">
</head>
<body>
	
	<div id="container">
		<!-- CABECERA -->
		<header id="header">
			<div id="logo">
				<img src="<?php echo base_url ?>assets/img/camiseta.png" alt="Camiseta Logo">
				<a href="<?php echo base_url ?>">
					Tienda de camisetas
				</a>
			</div>
		</header>
		
		<!-- MENU -->
		<?php $categorias = Utils::showCategorias(); ?>
		<nav id="menu">
			<ul>
				<li><a href="<?php echo base_url ?>">Inicio</a></li>
				<?php while($categoria = $categorias->fetch_object()): ?>
					<li><a href="<?php echo base_url ?>categoria/ver&id=<?php echo $categoria->id ?>"><?php echo $categoria->nombre ?></a></li>
				<?php endwhile; ?>
			</ul>
		</nav>
		
		<div id="content">