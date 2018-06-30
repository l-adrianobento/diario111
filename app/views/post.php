<section class="full-post container">
	<div class="row no-gutters justify-content-center">
		<div class="post col-12 col-sm-12 col-md-12 col-lg-11 col-xl-10">
			<?php if(isset($post) && $post): ?>
				<div class="titulo"><?php echo $post['Pais']; ?></div>
				<div class="subtitulo"><?php echo $post['Localidade']; ?></div>
				<div class="data">Postado em <?php echo $post['DtCreated']; ?></div>
				<div class="texto">
					<?php echo $post['TxtPost']; ?>						
				</div>
				<div class="colaborador">Por <?php echo $post['Colaborador']; ?></div>
			<?php else: ?>
				<p class="nao-encontrado">Post n���o encontrado! :/	
			<?php endif; ?>
		</div>
	</div>
</section>

