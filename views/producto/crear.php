<?php if(isset($edit) && isset($pro) && is_object($pro)): ?>
	<h1>Editar producto <?php echo $pro->nombre ?></h1>
	<?php $url_action = base_url."producto/save&id=".$pro->id; ?>
<?php else: ?>
	<h1>Crear nuevos productos</h1>
	<?php $url_action = base_url."producto/save"; ?>
<?php endif; ?>

<div id="form_container">	
	<form method="POST" action="<?php echo $url_action ?>" enctype="multipart/form-data">
		<label for="nombre">Nombre</label>
		<input type="text" name="nombre" value="<?php echo isset($pro) && is_object($pro) ? $pro->nombre : ''; ?>">
	
		<label for="descripcion">Descripcion</label>
		<textarea name="descripcion"><?php echo isset($pro) && is_object($pro) ? $pro->descripcion : ''; ?></textarea>
	
		<label for="precio">Precio</label>
		<input type="text" name="precio" value="<?php echo isset($pro) && is_object($pro) ? $pro->precio : ''; ?>">
	
		<label for="stock">Stock</label>
		<input type="number" name="stock" value="<?php echo isset($pro) && is_object($pro) ? $pro->stock : ''; ?>">
	
		<label for="categoria">Categoria</label>
		<?php $categorias = Utils::showCategorias(); ?>
		<select name="categoria">
			<?php while($categoria = $categorias->fetch_object()): ?>
				<option value="<?php echo $categoria->id ?>"<?php echo isset($pro) && is_object($pro) && $categoria->id == $pro->categoria_id ? 'selected' : ''; ?>> <?php echo $categoria->nombre ?> </option>
			<?php endwhile; ?>
		</select>
	
		<label for="imagen">Imagen</label>
		<?php if(isset($pro) && is_object($pro) && !empty($pro->imagen)): ?>
			<img src="<?php echo base_url ?>uploads/images/<?php echo $pro->imagen ?>" class="thumb">
		<?php endif; ?>
		<input type="file" name="imagen">

		<input type="submit" value="Guardar">
	</form>
</div>