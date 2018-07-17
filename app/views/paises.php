<section class="paises container">
    <div class="row text-center">
        <p class="titulo">111 Países </p>
        <p class="descricao">
            Essa é a lista com todos os países que planejamos visitar e que já visitamos. A cada novo país visitado, 
            uma nova bandeira é disponível, podendo assim, acessar detalhes de nossas aventuras em tal país! 
        </p>
    </div>
	<div class="row">
    
        <p class="col-12 divisor"><i class="fas fa-angle-right"></i> Países visitados</p>
        <?php foreach ($paises['ativos'] as $key => $value) : ?>
            <a href="<?php echo site_url()."paises/".$value['Slug']; ?>" class="pais col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 text-center">
                <img src="<?php echo base_url(); ?>img/flags/<?php echo $value['HashBandeira']; ?>" class="<?php echo $value['TotalLugares']; ?>" alt="" />
                <div class="nome"><?php echo $value['Pais']; ?></div>
            </a>
        <?php endforeach; ?>
    </div>
    <div class="row">
        <p class="col-12 divisor"><i class="fas fa-angle-right"></i> Países que ainda vamos visitar</p>
        <?php foreach ($paises['inativos'] as $key => $value) : ?>
            <div class="pais col-6 col-sm-4 col-md-3 col-lg-3 col-xl-2 text-center">
                <img src="<?php echo base_url(); ?>img/flags/<?php echo $value['HashBandeira']; ?>" class="<?php echo $value['TotalLugares']; ?>" alt="" />
                <div class="nome"><?php echo $value['Pais']; ?></div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
