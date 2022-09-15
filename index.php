<!DOCTYPE html>
<html>

<head>
	<title>Edificio 0.8</title>
	<meta charset="utf-8"><!--meta name viewport-->
	<link href="styles.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@200;400&display=swap" rel="stylesheet"><!-- Bootstrap (CSS only) --><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css"><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
	<header id="header">
		<?php include("nav_bs.html") ?>
	</header>

	<section id="nosotros"class="sec_padding">
		<div id="mark_sty">Edificio Rama Serka</div>
		<div id="fotos_entrada">
			<div class="sty_img_box" id="img1"><img class="img_pres"></div>
			<div class="sty_img_box" id="img2"><img class="img_pres"></div>
		</div>
		<div id="txt_present" class="h4">
			<p>Somos una empresa familiar con décadas de trayectoria en el rubro de la locación. Queremos que te sientas a gusto en tu próximo hogar, por eso nos ponemos a disposición para asistirte en la búsqueda de tu próxima vivienda.</p>
			<p>En Edificio "Rama-Serka" ofrecemos un ambiente ordenado, agradable, seguro y práctico para nuestros clientes, un conjunto de cualidades al servicio de los huéspedes que hacen al disfrute de su estadía.</p>
		</div>
	</section>

	<section id="servicios"class="sec_padding"><h2>Servicios</h2>
		<div id="deps"><a href="pags/deps.php">
			<div><h3>Departamentos</h3></div>
			<div id="img_deps" class="img_servicios"></div>
		</a></div>
		<div id="cochs"><a href="pags/coch.php">
			<div><h3>Cocheras</h3></div>
			<div id="img_cochs" class="img_servicios"></div>
		</a></div>
		<div id="local"><a href="pags/local.php">
			<div><h3>Local</h3></div>
			<div id="img_local" class="img_servicios"></div>
		</a></div>
	</section>

	<section id="ubicacion"class="sec_padding"><h2>Donde estamos</h2>
		<div id="mapa"class="divs_ubicacion"><h3>En el mapa:</h3>
				<div id="div_frame_mapa"><iframe id="frame_mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d751.2736935507031!2d-71.30049831189172!3d-41.1324569885912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x961a7b70728b2a4f%3A0x660120e62d69e254!2s12%20de%20Octubre%20665%2C%20San%20Carlos%20de%20Bariloche%2C%20R%C3%ADo%20Negro!5e0!3m2!1ses-419!2sar!4v1630955143227!5m2!1ses-419!2sar" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
			</div>
		<div id="distancias"class="divs_ubicacion">
			<div><h3>Distancias cercanas</h3></div>
			<?php include("accordion_dist.html");?>
 		</div>
	</section>

	<section id="contacto" class="sec_padding">
		<h2 id="tit_contacto" class="txt_center">Contactanos</h2>
		<div class="row div_center">
			<div class="col-lg-4 div_contacto"><h3 class="h5 txt_center">Teléfono fijo</h3><h3 class="txt_center">+54 0294 000 0000</h3></div>
			<div class="col-lg-4 div_contacto"><h3 class="h5 txt_center">Teléfono móvil</h3><h3 class="txt_center">+54 294 (15) 111 1111</h3></div>
			<div class="col-lg-4 div_contacto"><h3 class="h5 txt_center">Correo electrónico</h3><h3 class="text- txt_center">ejemplo@servidor.com</h3></div>
		</div>
	</section>

	<footer id="pie">
		<div class="txt_center">Hecho por Lautaro-RN, 2022</div>
	</footer>

</body>

</html>