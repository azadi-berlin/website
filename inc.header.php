<?php

switch ($menue) {
	case 'index':
		$s_home = '_s';
		break;
	case 'termine':
		$s_termine = '_s';
		break;
	case 'infos':
		$s_infos = '_s';
		break;
	case 'material':
		$s_material = '_s';
		break;
	case 'galerie':
		$s_galerie = '_s';
		break;
	case 'aktiv':
		$s_aktiv = '_s';
		break;
	case 'kontakt':
		$s_kontakt = '_s';
		break;
	case 'spenden':
		$s_spenden = '_s';
		break;
}

echo '<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>'.$titel.'</title>
	<meta name="description" content="'.$description.'" />
	<meta name="author" content="Azadi Berlin">
	<meta name="publisher" content="Azadi Berlin">
	<meta name="keywords" content="'.$keywords.'" />
	<meta name="robots" content="index, follow" />
	<meta property="og:title" content="'.$titel.'" />
	<meta property="og:image" content="https://www.azadi-berlin.de/images/website.png" />
	<meta property="og:type" content="website" />
	<meta property="og:site_name" content="'.$titel.'" />
	<meta property=“og:description“ content="'.$description.'" />
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="https://www.azadi-berlin.de/images/apple-touch-icon-precomposed.png" />
	<link rel="stylesheet" href="scripts/inc.header.css" />
	<link rel="stylesheet" href="scripts/global.css" />
	<link rel="stylesheet" href="scripts/'.$css.'.css" />
	<link rel="stylesheet" href="scripts/inc.footer.css" />
</head>
<body>
	<header class="header" data-scroll-to="header">
		<div class="navbar">
			<div class="logodiv">
				<a href="index.php" class="xxx" title="Startseite">
					<img class="xxx" alt="Logo Azadi Berlin" src="images/logo_header.svg" />
				</a>
			</div>
			<div class="nav-items">
				<a href="index.php" class="nav_home" title="Startseite">
				  <img src="images/nav_home'.$s_home.'.png" data-hover="images/nav_home_s.png" class="navicon nav_h" alt="Home" />
				</a>
				<a href="termine.php" class="nav_termine" title="Termine">
				  <img src="images/nav_termine'.$s_termine.'.png" data-hover="images/nav_termine_s.png" class="navicon nav_t" alt="Termine" />
				</a>
				<a href="infos.php" class="nav_infos" title="Infos">
				  <img src="images/nav_infos'.$s_infos.'.png" data-hover="images/nav_infos_s.png" class="navicon nav_i" alt="" />
				</a>
				<a href="material.php" class="nav_material" title="Material">
				  <img src="images/nav_material'.$s_material.'.png" data-hover="images/nav_material_s.png" class="navicon nav_m" alt="Infos" />
				</a>
				<a href="galerie.php" class="nav_galerie" title="Galerie">
				  <img src="images/nav_galerie'.$s_galerie.'.png" data-hover="images/nav_galerie_s.png" class="navicon nav_g" alt="Galerie" />
				</a>
				<a href="aktiv.php" class="nav_aktiv" title="Werde aktiv!">
				  <img src="images/nav_aktiv'.$s_aktiv.'.png" data-hover="images/nav_aktiv_s.png" class="navicon nav_a" alt="Werde aktiv!" />
				</a>
				<a href="kontakt.php" class="nav_kontakt" title="Kontakt">
				  <img src="images/nav_kontakt'.$s_kontakt.'.png" data-hover="images/nav_kontakt_s.png" class="navicon nav_k" alt="Kontakt" />
				</a>
				<a href="spenden.php" class="nav_spenden" title="Spenden">
				  <img src="images/nav_spenden'.$s_spenden.'.png" data-hover="images/nav_spenden_s.png" class="navicon nav_s" alt="Spenden" />
				</a>
			</div>
		</div>
	</header>';
