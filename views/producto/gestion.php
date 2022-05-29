<h1>Gestión de productos</h1>

<a href="<?php echo base_url ?>producto/crear" class="button button-small">Crear producto</a>

<!-- Creación del producto -->
<?php if(isset($_SESSION['producto']) && $_SESSION['producto'] == 'completed'): ?>
	<strong class="alert_green">El producto se ha creado correctamente!</strong>
<?php elseif(isset($_SESSION['producto']) && $_SESSION['producto'] == 'failed'): ?>
	<strong class="alert_red">El registro NO se ha creado correctamente</strong>
<?php endif; ?>

<!-- Eliminación del producto -->
<?php if(isset($_SESSION['delete']) && $_SESSION['delete'] == 'completed'): ?>
	<strong class="alert_green">El producto se ha borrado correctamente!</strong>
<?php elseif(isset($_SESSION['delete']) && $_SESSION['delete'] == 'failed'): ?>
	<strong class="alert_red">El registro NO se ha borrado</strong>
<?php endif; ?>

<?php 
	Utils::deleteSession('producto');
?>

<?php 
	Utils::deleteSession('delete');
?>

<table>
	<tr>
		<th>ID</th>
		<th>NOMBRE</th>
		<th>PRECIO</th>
		<th>STOCK</th>
		<th>ACCIONES</th>
	</tr>
	<?php while($producto = $productos->fetch_object()): ?>
		<tr>
			<td><?php echo $producto->id ?></td>
			<td><?php echo $producto->nombre ?></td>
			<td><?php echo $producto->precio ?></td>
			<td><?php echo $producto->stock ?></td>
			<td>
				<a class="button button-gestion" href="<?php echo base_url ?>producto/editar&id=<?php echo $producto->id ?>">Editar</a>
				<a class="button button-gestion button-red" href="<?php echo base_url ?>producto/eliminar&id=<?php echo $producto->id ?>">Eliminar</a>
			</td>
		</tr>
	<?php endwhile; ?>
</table>