<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' : '; } ?><?php bloginfo( 'name' ); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jarallax/1.10.3/jarallax.css">
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" rel="stylesheet">

		<!-- Flexbox -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css" type="text/css" >
		<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css" type="text/css">
		<!-- End Flexbox -->

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<!-- <div class="wrapper"> -->

			<div class="topbar">
				<div class="container">
					<div class="row middle-xs end-xs">
						<div class="col-xs-12 col-md-12">
						<?php do_action('wpml_add_language_selector'); ?>
							<nav>
								<ul>
									<li><a href="">LikeToKnow.it</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>

			<!-- header -->
			<header class="header clear" role="banner">
				<div class="menu-toggle">
					<i class="fas fa-bars"></i>
				</div>
				<div class="container">
					<div class="row middle-xs center-xs">
						<!-- logo -->
						<!-- /logo -->
						<div class="col-xs-12 col-md-3">
							<a href="<?php echo site_url(); ?>"><img src="https://socialrevoltdesigns.com/demo/rewardstyle/wp-content/uploads/2018/08/logo.png" class="logo-img"></a>
						</div>
						<div class="col-xs-12 col-md-9 center-xs end-md">
							<div class="box">
								<nav class="nav" role="navigation">
									<?php 

									$args = array('menu' => 'Header' );

									wp_nav_menu($args); ?>
								</nav>
							</div>
						</div>
					</div>
				</div>

			</header>
			<!-- /header -->
