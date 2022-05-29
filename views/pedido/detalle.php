<h1>Detalle del pedido</h1>

<?php if(isset($pedido)): ?>

	<?php if(isset($_SESSION['admin'])): ?>

		<h3>Cambiar estado del pedido</h3>

		<form action="<?php echo base_url ?>pedido/estado" method="POST">
			<input type="hidden" value="<?php echo $pedido->id ?>" name="pedido_id">
			<select name="estado">
				<option value="confirm" <?php echo $pedido->estado == "confirm" ? 'selected' : '' ?>>Pendiente</option>
				<option value="preparation" <?php echo $pedido->estado == "preparation" ? 'selected' : '' ?>>En preparación</option>
				<option value="ready" <?php echo $pedido->estado == "ready" ? 'selected' : '' ?>>Preparado para enviar</option>
				<option value="sended" <?php echo $pedido->estado == "sended" ? 'selected' : '' ?>>Enviado</option>
			</select>
			<input type="submit" value="Cambiar estado">
		</form>
		<br>

	<?php endif; ?>

	<h3>Dirección de envio</h3>

	Provincia: <?php echo $pedido->provincia ?> <br>
	Localidad: <?php echo $pedido->localidad ?> <br>
	Dirección: <?php echo $pedido->direccion ?> <br><br>

	<h3>Datos del pedido</h3>

	Estado: <?php echo Utils::showStatus($pedido->estado) ?> <br>
	Número de pedido: <?php echo $pedido->id ?> <br>
	Total a pagar: <?php echo $pedido->coste ?> <br>
	Productos: <br><br>

	<table>
		<tr>
			<th>Imagen</th>
			<th>Nombre</th>
			<th>Precio</th>
			<th>Unidades</th>
		</tr>
		<?php while($producto = $productos->fetch_object()): ?>			
			<tr>
				<td>
					<?php if($producto->imagen != null): ?>
						<img src="<?php echo base_url ?>uploads/images/<?php echo $producto->imagen ?>" class="img_carrito">
					<?php else: ?>
						<img src="<?php echo base_url ?>assets/img/camiseta.png" class="img_carrito">
					<?php endif; ?>
				</td>
				<td><a href="<?php echo base_url ?>producto/ver&id=<?php echo $producto->id ?>"><?php echo $producto->nombre ?></a></td>
				<td><?php echo $producto->precio ?></td>
				<td><?php echo $producto->unidades ?></td>
			</tr>				
		<?php endwhile; ?>

	</table>

<?php endif; ?>