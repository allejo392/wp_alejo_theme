<?php
	function enqueue_styles() {
	  wp_enqueue_style( 'stylesheet', get_template_directory_uri() . '/style.css');
	  wp_enqueue_style( 'stylesheet','https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800|Oswald:400,700');
	}
	add_action( 'wp_enqueue_scripts', 'enqueue_styles' );