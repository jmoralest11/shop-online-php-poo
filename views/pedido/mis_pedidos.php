<?php if(isset($gestion)): ?>

	<h1>Gestionar pedidos</h1>	

<?php else: ?> 
	
	<h1>Mis pedidos</h1>

<?php endif; ?>

<table>

	<tr>
		<th>No Pedido</th>
		<th>Coste</th>
		<th>Fecha</th>
		<th>Estado</th>
	</tr>

	<?php while($pedido = $pedidos->fetch_object()): ?>			
		<tr>
			<td><a href="<?php echo base_url ?>pedido/detalle&id=<?php echo $pedido->id ?>"><?php echo $pedido->id ?></a></td>
			<td><?php echo $pedido->coste ?></td>
			<td><?php echo $pedido->fecha ?></td>
			<td><?php echo Utils::showStatus($pedido->estado) ?></td>
		</tr>
	<?php endwhile; ?>

</table>