<?php
//Disable admin bar.
add_filter('show_admin_bar', '__return_false');

include('classes/customize.php');
//add_action( 'wp_head', 'makari_customize_css');
add_action('customize_register', array('Makari_Customize','register'));
add_action( 'customize_preview_init', array('Makari_Customize','live_preview'));