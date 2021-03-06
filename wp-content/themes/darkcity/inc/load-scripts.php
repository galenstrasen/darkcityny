<?php

// Enqueue Scripts & Styles
// http://codex.wordpress.org/Function_Reference/wp_enqueue_script

function tmbr_load_scripts() {
	
	//wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/vendor/morphing/modernizr.custom.js',  array('jquery'), '', false );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.min.js',  array('jquery'), '', true );
	wp_enqueue_script( 'magnific', get_template_directory_uri() . '/assets/vendor/magnific-popup/magnific-popup.js',  array('jquery'), '', true );
	wp_enqueue_script( 'owlbeta', get_template_directory_uri() . '/assets/vendor/owl-beta/owl.carousel.js',  array('jquery'), '', true );
	wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/assets/vendor/waypoints/waypoints.min.js',  array('jquery'), '', true );
	//wp_enqueue_script( 'highcharts', 'http://code.highcharts.com/highcharts.js',  array('jquery'), '', false );
	//wp_enqueue_script( 'leaflet', 'http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js',  '', '', true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js',  array('jquery'), '', true );
	

	
	wp_enqueue_style ( 'bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', array(), '', 'all' )	;
	wp_enqueue_style ( 'magnific', get_template_directory_uri() . '/assets/vendor/magnific-popup/magnific-popup.css',  array(), '', 'all' );
	wp_enqueue_style ( 'owl-beta', get_template_directory_uri() . '/assets/vendor/owl-beta/assets/owl.carousel.css', array(), '', 'all' )	;
	//wp_enqueue_style ( 'leaflet', 'http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css', array(), '', 'all' )	;
	wp_enqueue_style ( 'font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css', array(), '', 'all' )	;
	
	wp_enqueue_style ( 'theme', get_stylesheet_uri(), array(), '', 'all' )	;

	}

add_action( 'wp_enqueue_scripts', 'tmbr_load_scripts' );






// CONDITIONAL SCRIPTS
function cond_IE() { ?>

    <!--[if gte IE 6]>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/wp-content/themes/tmbr/css/ie.css" />
	<![endif]-->

<?php }

add_action( 'wp_head', 'cond_IE' );

?>