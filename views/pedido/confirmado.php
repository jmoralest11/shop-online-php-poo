<?php if(isset($_SESSION['pedido']) && $_SESSION['pedido'] == "completed"): ?>

	<h1>Tú pedido se ha confirmado</h1>

	<p>Tú pedido ha sido guardado con éxito, una vez que realices la transferencia bancaria a la cuenta 738294728923ADD con el coste del pedido, será procesado y enviado.</p>

	<br>

	<?php if(isset($pedido)): ?>
		<h3>Datos del pedido</h3>

		<!-- Me mantiene los saltos de linea que se le pongan -->
	
		Número de pedido: <?php echo $pedido->id ?> <br>
		Total a pagar: <?php echo $pedido->coste ?> <br>
		Productos: 

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

<?php elseif(isset($_SESSION['pedido']) && $_SESSION['pedido'] != "completed"): ?>

	<p>Tú pedido no ha podido procesarce</p>

<?php endif; ?>