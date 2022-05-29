<h1>Carrito de la compra</h1>


<?php if(isset($_SESSION['carrito']) && count($_SESSION['carrito']) >= 1): ?>
<table>
	<tr>
		<th>Imagen</th>
		<th>Nombre</th>
		<th>Precio</th>
		<th>Unidades</th>
		<th>Eliminar</th>
	</tr>
	<?php 
		foreach($carrito as $indice => $elemento): 
		$producto = $elemento['producto'];
	?>
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
			<!-- El elemento no es un objeto, es un array y se accede al valor por medio de [], si fuera un objeto se accede por medio de (->) -->
			<td>
				<?php echo $elemento['unidades'] ?>
				<div class="updown-unidades">
					<a href="<?php echo base_url ?>carrito/up&indice=<?php echo $indice ?>" class="button">+</a>
					<a href="<?php echo base_url ?>carrito/down&indice=<?php echo $indice ?>" class="button">-</a>	
				</div>
			</td>
			<td><a href="<?php echo base_url ?>carrito/remove&indice=<?php echo $indice ?>" class="button button-carrito button-red">Quitar</a></td>
		</tr>
	<?php endforeach; ?>
</table>

<br>

<div class="delete-carrito">
	<a href="<?php echo base_url ?>carrito/delete_all" class="button button-delete button-red">Vaciar carrito</a>
</div>

<div class="total-carrito">
	<?php $stats = Utils::statsCarrito() ?>
	<h3>Precio total: $ <?php echo $stats['total'] ?></h3>
	<a href="<?php echo base_url ?>pedido/hacer" class="button button-pedido">Hacer pedido</a>
</div>

<?php else: ?>
	<p>El carrito está vacio, añade algun producto</p>
<?php endif; ?>