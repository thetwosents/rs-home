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

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<!-- <div class="wrapper"> -->

			<!-- header -->
			<header class="header clear" role="banner">

				<div class="container">
					<div class="row middle-xs">
						<!-- logo -->
						<!-- /logo -->
						<div class="col-xs-12 col-md-3">
							<img src="http://localhost:8888/rewardstyle/wp-content/uploads/2018/08/logo.png" class="logo-img">
						</div>
						<div class="col-xs-12 col-md-9 center-xs end-md">
							<div class="box">
								<!-- nav -->
								<nav class="nav" role="navigation">
									<?php 

									$args = array('menu' => 'Header' );

									wp_nav_menu($args); ?>
								</nav>
								<!-- /nav -->
							</div>
						</div>
					</div>
				</div>

			</header>
			<!-- /header -->
