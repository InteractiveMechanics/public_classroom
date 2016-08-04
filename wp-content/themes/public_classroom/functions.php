<?php 

function printThemePath() {
   echo get_site_url() . '/wp-content/themes/' . get_template();
}

add_theme_support( 'post-thumbnails' );

register_nav_menus( array(
    'primary' => __( 'Primary Menu' ), 
) );

require_once('wp_bootstrap_navwalker.php');


?>