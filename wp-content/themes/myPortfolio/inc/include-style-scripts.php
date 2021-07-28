<?php

add_action( 'wp_enqueue_scripts', 'my_scripts_method' );

//var_dump(get_template_directory_uri());

function my_scripts_method()
{
  wp_enqueue_style( 'app-styles', get_template_directory_uri() . '/css/app.css' );

  wp_enqueue_script('vendor', get_template_directory_uri() . '/js/chunk-vendors.js', [], '1.0.0', true);
  wp_enqueue_script('app', get_template_directory_uri() . '/js/app.js', [], '1.0.0', true);
}
