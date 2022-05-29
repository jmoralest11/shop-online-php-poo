
<h1>Algunos de nuestros productos</h1>

	<?php while($product = $productos->fetch_object()): ?>
		
		<div class="product">
			<a href="<?php echo base_url ?>producto/ver&id=<?php echo $product->id ?>"><?php if($product->imagen != null): ?>
						<img src="<?php echo base_url ?>uploads/images/<?php echo $product->imagen ?>">
				<?php else: ?>
						<img src="<?php base_url ?>assets/img/camiseta.png">
				<?php endif; ?>
					<h2><?php echo $product->nombre ?></h2>
			</a>
				<p>$ <?php echo $product->precio ?></p>
				<a href="<?php echo base_url ?>carrito/add&id=<?php echo $product->id ?>" class="button">Comprar</a>
		</div>

	<?php endwhile; ?>	
		
			
		
		