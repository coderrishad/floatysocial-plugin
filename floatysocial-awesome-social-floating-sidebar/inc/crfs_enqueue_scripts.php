<?php

//* Including script for backend
function crfs_enqueue_script_backend(){

    // Including css
    wp_enqueue_style( 'crfs_backend_style', plugins_url('assets/css/crfs_backend_style.css', __DIR__));

    // Including Js
    wp_enqueue_script( 'crfs_wp-color-picker-alpha', plugins_url( 'assets/js/wp-color-picker-alpha.min.js', __DIR__ ), array( 'wp-color-picker' ), '3.0.0', true );
    
    // Including Js
    wp_enqueue_script( 'crfs_admin_main', plugins_url( 'assets/js/crfs_admin_main.js', __DIR__ ), array(), '1.0.0', true );

}
add_action( 'admin_enqueue_scripts', 'crfs_enqueue_script_backend' );


//* Including script for frontend
function crfs_enqueue_script_frontend(){

   // Including css
    wp_enqueue_style( 'crfs_style', plugins_url( 'assets/css/crfs_frontend_style.css', __DIR__ ));

    // Including Fontawesome
    wp_enqueue_style( 'crfs_fontawesome', plugins_url( 'assets/font-awesome/css/all.min.css', __DIR__ ) );

}
add_action( 'wp_enqueue_scripts', 'crfs_enqueue_script_frontend' );





