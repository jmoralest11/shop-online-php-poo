<?php if(isset($pro)): ?>

	<h1><?php echo $pro->nombre ?></h1>

	<div id="detail-product">

		<div class="image"><?php if($pro->imagen != null): ?>
					<img src="<?php echo base_url ?>uploads/images/<?php echo $pro->imagen ?>">
			<?php else: ?>
					<img src="<?php base_url ?>assets/img/camiseta.png">
			<?php endif; ?>
		</div>
						
		<div class="data">
			<p class="description"><?php echo $pro->descripcion ?></p>
			<p class="price">$ <?php echo $pro->precio ?></p>
			<a href="<?php echo base_url ?>carrito/add&id=<?php echo $pro->id ?>" class="button">Comprar</a>
		</div>

	</div>

<?php else: ?>

	<h1>La categoría no existe</h1>

<?php endif; ?>