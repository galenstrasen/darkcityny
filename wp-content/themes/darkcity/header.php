<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php wp_title(''); ?></title>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="<?php bloginfo( 'template_url' ); ?>/favicon.ico">
	<meta name="google-site-verification" content="4BQoTYC_bqUhsPAAMD-QIfeEk1qWdU3wz7d-hSK3Y8M" />



	<?php wp_head(); ?>

<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />

</head>

<body <?php body_class(); ?> >
<?php get_template_part('partials/analytics');
get_template_part( 'partials/preloader' ); ?>
<div class="js-sitewrap site-wrap">
<header id="header" class="navbar-fixed-top">

	<div class="contact-links tar">
		<a href="mailto:andy@darkcityny.com" class="email"><i class="fa fa-envelope-o fa-fw"></i> Email Us</a> <span class="phone"><i class="fa fa-phone fa-fw"></i> (646)623.2313</span>
	</div><!-- /contact-links -->

	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="tac logo-wrap">

					<a href="/" class="logo"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/darkcity-logo.png" width="175" alt="Dark City Studios" /></a>

					<div class="ham-wrap">
						<div class="hamburg">
							<span class="top-bar bar"></span>
							<span class="middle-bar bar"></span>
							<span class="bottom-bar bar"></span>
						</div>
					</div>

					<!-- #MAYBE PUT NAV IN OWN COL-12 DIV? -->
					<?php wp_nav_menu( array( 'theme_location' => 'main-menu','menu_class' => 'header-menu', 'container_class' => 'menu-main-menu-wrapper') ); ?>

				</div><!-- /logo-wrap -->

			</div><!-- /col -->

		</div><!-- /row -->

	</div><!-- /container -->
</header><!-- #header -->





