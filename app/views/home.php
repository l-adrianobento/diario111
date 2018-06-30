<section class="posts container">
	<?php if(isset($posts) && $posts) : ?>
		<div class="between-rows row no-gutters justify-content-between">
			<?php foreach ($posts as $key => $value) : ?>
				<a href="<?php echo site_url()."post/".$value['Slug']; ?>" class="post col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
					<div class="titulo"><?php echo $value['Pais']; ?></div>
					<div class="subtitulo"><?php echo $value['Localidade']; ?></div>
					<img src="<?php echo base_url(); ?>img/<?php echo $value['HashImagemCapa']; ?>" alt="" />
					<div class="data">Postado em <?php echo $value['DtCreated']; ?></div>
				</a>
			<?php endforeach; ?>
		</div>
	<?php else : ?>
        <p class="nao-encontrado">Nenhum post encontrado! :/	
    <?php endif; ?>
</section>
