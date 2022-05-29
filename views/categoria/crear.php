<h1>Crear categoria</h1>

<form action="<?php echo base_url ?>categoria/save" method="POST">

	<label for="nombre">Nombre:</label>
	<input type="text" name="nombre" required="">

	<input type="submit" value="Guardar">
	
</form>