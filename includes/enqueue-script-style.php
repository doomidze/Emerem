<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


// wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap', array() , null, 'all');
wp_enqueue_style('bootstrap' , get_template_directory_uri() . '/assets/css/bootstrap.min.css', false, null, 'all');
wp_enqueue_style('font-awesome' , get_template_directory_uri() . '/assets/css/font-awesome.min.css', false, null, 'all');
wp_enqueue_style('styles', get_template_directory_uri() . '/style.css', array() , null, 'all');

wp_enqueue_script( 'estore-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );
wp_enqueue_script('main' , get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);

//add_action( 'wp_enqueue_styles', 'estore_styles' );
function estore_styles() {
	//wp_enqueue_style('flexslider', get_template_directory_uri() . '/assets/css/flexslider.css', array() , null, 'all');
	//wp_enqueue_style('countdown', get_template_directory_uri() . '/assets/css/jquery.countdown.css', array() , null, 'all');
	//wp_enqueue_style('slick', get_template_directory_uri() . '/assets/css/slick-theme.css', array() , null, 'all');
	//wp_enqueue_style('slick-theme', get_template_directory_uri() . '/assets/css/slick.css', array() , null, 'all');
	// wp_enqueue_style('popuo-box', get_template_directory_uri() . '/assets/css/popuo-box.css', array() , null, 'all');
	wp_enqueue_style('magnific-popup' , get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), null, true);
	//wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:400,400i,700,700i&amp;subset=cyrillic', array() , null, 'all');
	wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap', array() , null, 'all');
	wp_enqueue_style('bootstrap' , 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css', array(), null, true);
}

//add_action( 'wp_enqueue_scripts', 'estore_scripts' );
function estore_scripts() {
	//wp_enqueue_script('jquery' , '//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js', array() , null, 'all');
	//wp_enqueue_script('jquery' , get_template_directory_uri() . '/assets/js/jquery-1.12.1.min.js', array('jquery'), null, true);
	wp_enqueue_script( 'estore-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'estore-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );

	//wp_enqueue_script('imagezoom' , get_template_directory_uri() . '/assets/js/imagezoom.js', array('jquery'), null, true);
	//wp_enqueue_script('countdown' , get_template_directory_uri() . '/assets/js/jquery.countdown.js', array('jquery'), null, true);
	wp_enqueue_script('easyResponsiveTabs' , get_template_directory_uri() . '/assets/js/easyResponsiveTabs.js', array('jquery'), null, true);
	//wp_enqueue_script('flexisel' , get_template_directory_uri() . '/assets/js/jquery.flexisel.js', array('jquery'), null, true);
	//wp_enqueue_script('flexslider' , get_template_directory_uri() . '/assets/js/jquery.flexslider.js', array('jquery'), null, true);
	wp_enqueue_script('magnific-popup' , get_template_directory_uri() . '/assets/js/jquery.magnific-popup.js', array('jquery'), null, true);
	//wp_enqueue_script('wmuSlider' , get_template_directory_uri() . '/assets/js/jquery.wmuSlider.js', array('jquery'), null, true);
	//wp_enqueue_script('minicart' , get_template_directory_uri() . '/assets/js/minicart.js', array('jquery'), null, true);
	//wp_enqueue_script('easyTabs' , get_template_directory_uri() . '/assets/js/easyResponsiveTabs.js', array('jquery'), null, true);
	//wp_enqueue_script('ajax-search' , get_template_directory_uri() . '/assets/js/ajax-search.js', array('jquery'), null, true);
	
	//wp_enqueue_script('slick' , get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), null, true);
	wp_enqueue_script('main' , get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
	//wp_enqueue_script('bootstrap' , 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css', array('jquery'), null, true);
	// wp_localize_script('ajax-search', 'search_form' , array(
	// 	'url' => admin_url( 'admin-ajax.php' ),
	// 	'nonce' => wp_create_nonce('search-nonce')
	// ));
	wp_enqueue_script('script' , get_template_directory_uri() . '/assets/js/script.js', array('jquery'), null);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_dequeue_style( 'wcqi-css' );
}
