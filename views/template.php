<!DOCTYPE html>
<html>
	<head>
		<title>Projeto - Rede_Social</title>
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/template.css">
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/app_template.js"></script>
	</head>
		<div class="no_suppot">
			<h4>Este dispositivo não suporta este sistema</h4>
		</div>
		<header class="header">
			<div class="header_main">
				<div class="header_left">
					<div class="header_left_logo">
						<img src="<?php echo BASE_URL; ?>assets/images/facebook_logo.png" alt="">
					</div>
					<input type="text" placeholder="Amigos">
					<div class="bg_img">
						<a href="#"><img src="<?php echo BASE_URL; ?>assets/images/lupa.png" alt=""></a>
					</div>
				</div>
				
			</div>
		</header>

		<div class="container">
			<?php $this->loadViewInTemplate($viewName,$viewData);?>
			<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
		</div>

	</body>
</html>