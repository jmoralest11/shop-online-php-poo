<h1>Gestionar Categorias</h1>

<a href="<?php echo base_url ?>categoria/crear" class="button button-small">Crear categoria</a>

<table>
	<tr>
		<th>ID</th>
		<th>NOMBRE</th>
	</tr>
	<?php while($categoria = $categorias->fetch_object()): ?>
		<tr>
			<td><?php echo $categoria->id ?></td>
			<td><?php echo $categoria->nombre ?></td>
		</tr>
	<?php endwhile; ?>
</table>