<section class="paises container">
	<div class="row">
        <?php foreach ($paises as $key => $value) : ?>
            <?php if($value['TotalLugares']) : ?>
                <a href="<?php echo site_url()."paises/".$value['Slug']; ?>" class="pais col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 text-center">
                    <img src="<?php echo base_url(); ?>img/flags/<?php echo $value['HashBandeira']; ?>" class="<?php echo $value['TotalLugares']; ?>" alt="" />
                    <div class="nome"><?php echo $value['Pais']; ?></div>
                </a>
            <?php else : ?>
                <div class="pais col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 text-center">
                    <img src="<?php echo base_url(); ?>img/flags/<?php echo $value['HashBandeira']; ?>" class="<?php echo $value['TotalLugares']; ?>" alt="" />
                    <div class="nome"><?php echo $value['Pais']; ?></div>
                </div>
            <?php endif; ?>
		<?php endforeach; ?>
    </div>
</section>
