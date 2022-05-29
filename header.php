<!DOCTYPE html>
<!-- <html lang="cs"> -->
<html <?php language_attributes(); ?>>

<head>
        <?php
        $codeset = "UTF8"; setlocale(LC_ALL, "cs_CZ.UTF-8", "Czech", "cs_CZ");
        //date_default_timezone_set("Europe/Prague"); //způsobuje chybu - posun o hodinu resp. den dopředu!!!
        ?>
	<!-- <meta charset="UTF-8"> -->

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Dům Kultury Ostrov</title>
	<meta name="author" content="">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link rel="shortcut icon" href="favicon.ico">

	<!-- CSS -->
	<link rel="stylesheet" href="<?php echo get_theme_file_uri('/normalize.css') ?>">
	<link rel="stylesheet" href="<?php echo get_theme_file_uri('/style.css') ?>">
	<link rel="stylesheet" href="<?php echo get_theme_file_uri('/responsive.css') ?>">

	<!-- Tiny Slider -->
	<link rel="stylesheet" type="text/css" href="tiny-slider/tiny-slider.css"/>
	<script type="text/javascript" src="tiny-slider/tiny-slider.js"></script>

	<!-- JS -->
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="script.js"></script>

    <?php wp_head(); ?>

</head>

<body>

<!-- Header -->

<header>

	<div class="header-banner">
		<div class="wrapper">
			<div class="phone">+420 724 509 287</div>
			<a href="mailto:ic@dk-ostrov.cz" class="mail">ic@dk-ostrov.cz</a>
			<div class="social-links">
				<div class="icons">
					<a href="#" class="messanger"></a>
					<a href="#" class="facebook"></a>
					<a href="#" class="instagram"></a>
				</div>
				<a href="#" class="icostrov">ICOstrov</a>
			</div>
		</div>
	</div>

	<!--  -->

	<div class="header-main">
		<!-- <a href="/" class="logo"> -->
            <a  class="logo" href="<?php echo get_home_url(get_current_blog_id()).'/'; ?>"><img src="<?php echo get_theme_file_uri('/img/logo.svg') ?>" alt="">
			<!-- <img src="img/logo.svg" alt=""> -->
			<span>Mírové nám. 733, Ostrov u K.V.</span>
		</a>

		<div class="menu-wrapper">

			<div class="menu-wrapper-responsive">
				<nav class="main-menu">
					<a href="<?php echo get_home_url(get_current_blog_id()); ?>" class="current"><span class="ico-akce"></span><span>Akce</span></a>
					<a href="<?php echo get_category_link(get_cat_ID('Kino')); ?>"><span class="ico-kino"></span><span>Kino</span></a>
					<a href="#"><span class="ico-sluzby"></span><span>Služby</span></a>
					<a href="#"><span class="ico-kluby"></span><span>Kluby</span></a>
					<a href="#"><span class="ico-kontakty"></span><span>Kontakty</span></a>
					<a href="#"><span class="ico-o-nas"></span><span>O nás</span></a>
				</nav>
			</div>

			<nav class="sub-menu">
				<a href="<?php echo get_category_link(get_cat_ID('Divadlo')); ?>"><span class="ico-divadlo"></span><span>Divadlo</span></a>
				<a href="<?php echo get_category_link(get_cat_ID('Koncerty')); ?>"><span class="ico-koncerty"></span><span>Koncerty</span></a>
				<a href="<?php echo get_category_link(get_cat_ID('Výstavy')); ?>"><span class="ico-vystavy"></span><span>Výstavy</span></a>
				<a href="#"><span class="ico-rozvoj"></span><span>Osobní rozvoj</span></a>
				<a href="<?php echo get_category_link(get_cat_ID('Pro děti')); ?>"><span class="ico-deti"></span><span>Pro děti</span></a>
				<a href="#"><span class="ico-kalendar"></span><span>Kalendář</span></a>
			</nav>

			<div class="header-info">
				<p>Upozorňujeme VŠECHNY DIVÁKY, KTEŘÍ SI ZAKOUPILI NEBO ZAKOUPÍ VSTUPENKU NA KONCERT 4 TENOŘI V ZÁMECKÉHO PARKU 30. ČERVENCE, ŽE VSTUPENKY JSOU NEADRESNÉ – TO ZNAME- NÁ, ŽE SEDADLA A ŘADY NEJSOU ČÍSLOVANÉ. ROZLIŠUJEME POUZE 3 SEKTORY PODLE VÝŠE VSTUPNÉHO. A = VIP ŽIDLE, B = ŽIDLE, C = LAVICE.</p>
			</div>

		</div>

		<div class="category-image"><span class="ico-akce"></span></div>

		<div id="menu-opener"><span></span><div class="menu-text">Menu</div></div>
	</div>

</header>
