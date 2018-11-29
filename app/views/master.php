<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<title>Diário 111</title>

		<!-- JQuery -->
		<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-3.3.1.min.js"></script>

		<!-- Moment JS -->
		<script type="text/javascript" src="<?php echo base_url(); ?>js/moment.js"></script>

		<!-- Arquivo javascript -->
		<script type="text/javascript" src="<?php echo base_url(); ?>js/script.js"></script>

		<!-- bootstrap -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap/bootstrap.min.css">
		<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap/bootstrap.bundle.min.js"></script>

		<!-- Arquivo de estilo -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/fontawesome/css/fontawesome-all.css">

	</head>
	<body>

		<header>
			<nav class="navbar navbar-expand-md navbar-light">
				<a class="navbar-brand" href="<?php echo site_url(); ?>">Diário 111 <i class="fas fa-map-marker-alt"></i></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Destinos
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<?php foreach ($menu as $key => $value) : ?>
									<li class="dropdown-submenu" aria-labelledby="navbarDropdown"><a class="dropdown-item dropdown-toggle"><?php echo $key; ?></a>
										<ul class="dropdown-menu">
											<?php foreach ($value as $post_item) : ?>
												<li><a class="dropdown-item" href="<?php echo site_url()."post/".$post_item['Slug']; ?>"><?php echo $post_item['Localidade']; ?></a></li>
											<?php endforeach; ?>
										</ul>
									</li>
								<?php endforeach; ?>
							</ul>
						</li>
						<li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url()."paises"; ?>" role="button" aria-haspopup="true" aria-expanded="false">
							Países
							</a>
                        </li>
						<li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url()."sobre"; ?>" role="button" aria-haspopup="true" aria-expanded="false">
							Sobre nós
							</a>
                        </li>
					</ul>
				</div>
			</nav>
		</header>

        <?php
            if(is_file(dirname(__FILE__)."/".$conteudo))
                require_once($conteudo);
            else
                echo $conteudo;
        ?>

		<footer class="row justify-content-end">
			<div class="col-9 col-sm-8 col-md-6 col-lg-4 col-xl-4 dados text-center">
				<div class="row nomes">
					<div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 nome">
						<a href="https://www.facebook.com/diego.vinicius.12" target="_blanck">Diego Vinicius</a>
					</div>
					<div class="col-0 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center ponto">
						&middot;
					</div>
					<div class="col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 nome">
						<a href="https://www.facebook.com/lucas.buguinha" target="_blanck">Lucas Bento</a>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<p>Diário 111 &copy; 2018</p>
					</div>
				</div>
			</div>
			<div class="col-3 col-sm-2 col-md-3 col-lg-4 col-xl-4 dados text-right">
				<a href="https://www.instagram.com/odiario111" target="_blank"><i class="fab fa-instagram"></i></a>
			</div>
		</footer>



	</body>
</html>