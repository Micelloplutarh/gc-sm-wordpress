<?php 
    // <!-- <link rel="stylesheet" href="/css/style_header.css">
    // <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,500;0,700;1,600&display=swap" rel="stylesheet"> -->


add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'header', get_template_directory_uri() . "/assets/css/style_header.css" );
	wp_enqueue_style( 'main', get_template_directory_uri() . "/assets/css/style_main.css" );
	wp_enqueue_style( 'footer', get_template_directory_uri() . "/assets/css/style_footer.css" );
	wp_enqueue_style( 'how-we-work', get_template_directory_uri() . "/assets/css/style_how_we_work.css" );
	wp_enqueue_style( 'contacts', get_template_directory_uri() . "/assets/css/style-contacts.css" );
	wp_enqueue_style( 'abouts', get_template_directory_uri() . "/assets/css/style_about.css" );
	wp_enqueue_style( 'fonts', "https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,500;0,700;0,900;1,600&display=swap" );


    wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), 'null', true );
	wp_enqueue_script( 'slider', get_template_directory_uri() . '/assets/js/slider.js', array('jquery'), 'null', true );



});


add_theme_support('post-thumbnails');
add_theme_support('title-tag ');
add_theme_support('custom-logo');

?>