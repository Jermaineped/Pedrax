<?php
/* enqueue script for parent theme stylesheeet */        
function pedrax_register_styles() {
 
 // enqueue style
 wp_enqueue_style( 'pedrax-style', get_template_directory_uri().'/style.css', array(), '1.0', 'all');                       
}
add_action( 'wp_enqueue_scripts', 'pedrax_register_styles' );