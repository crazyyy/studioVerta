<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

	<!-- dns prefetch -->
	<link href="//www.google-analytics.com" rel="dns-prefetch">

	<!-- meta -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<!-- icons -->
	<link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">
	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

	<!-- css + javascript -->
	<?php wp_head(); ?>
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body <?php body_class(); ?>>

<div class="wrapper">

	<header class="header">
		<div class="header-inner">
			<a class="logo" href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""></a>
			
			<?php wpeHeadNav(); ?>

			<div class="h-contacts">
				<a href="callto:lisvitaSV" class="h-skype">lisvitaSV</a>
				<a href="mailto:lisvita@mail.ru" class="h-email">lisvita@mail.ru</a>
			</div>

			<div class="h-phone">
				<p><span>+7 (495) </span>256-08-77</p>
				<a href="#" class="eModal-2">Обратный звонок</a>
			</div>

			<nav>
				<?php wpeSubHeadNav(); ?>
				<a class="link-sr eModal-1" href="#">Отправить заявку</a>
			</nav>
			<div class="hm-bottom">
				<?php get_template_part('head-slider'); ?>
				<div class="form-request">
					<?php echo do_shortcode( '[contact-form-7 id="25" title="Header contact"]' ); ?>
				</div><!-- .form-request -->
			</div><!-- .hm-bottom -->		
		</div><!-- .header-inner -->
	</header><!-- .header-->
	<main class="content">
		<div class="c-center">