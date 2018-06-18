<section class="posts container">
	<div class="between-rows row no-gutters justify-content-between">
		<?php foreach ($posts as $key => $value) : ?>
			<a href="<?php echo site_url()."post/".$value['Slug']; ?>" class="post col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
				<div class="titulo"><?php echo $value['Pais']; ?></div>
				<div class="subtitulo"><?php echo $value['Localidade']; ?></div>
				<img src="<?php echo base_url(); ?>img/<?php echo $value['HashImagemCapa']; ?>" alt="" />
				<!-- <div class="data">Postado em 18 de Junho 2018</div> -->
			</a>
		<?php endforeach; ?>
	</div>
</section>
