<?php 

function printThemePath() {
   echo get_site_url() . '/wp-content/themes/' . get_template();
}

add_theme_support( 'post-thumbnails' );


?>