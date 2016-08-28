<?php 

function printThemePath() {
   echo get_site_url() . '/wp-content/themes/' . get_template();
}

add_theme_support( 'post-thumbnails' );

register_nav_menus( array(
    'primary' => __( 'Primary Menu' ), 
) );

require_once('wp_bootstrap_navwalker.php');


add_filter( 'acf/fields/wysiwyg/toolbars' , 'my_toolbars'  );
function my_toolbars( $toolbars )
{
	// Uncomment to view format of $toolbars
	/*
	echo '< pre >';
		print_r($toolbars);
	echo '< /pre >';
	die;
	*/

	// Add a new toolbar called "Very Simple"
	// - this toolbar has only 1 row of buttons
	$toolbars['Very Simple' ] = array();
	$toolbars['Very Simple' ][1] = array('bold' , 'italic' , 'underline' );

	// Edit the "Full" toolbar and remove 'code'
	// - delet from array code from http://stackoverflow.com/questions/7225070/php-array-delete-by-value-not-key
	if( ($key = array_search('code' , $toolbars['Full' ][2])) !== false )
	{
	    unset( $toolbars['Full' ][2][$key] );
	}

	// remove the 'Basic' toolbar completely
	unset( $toolbars['Basic' ] );

	// return $toolbars - IMPORTANT!
	return $toolbars;
}




function create_custom_post_types() {
    register_post_type( 'speaker',
        array(
            'labels' => array(
                'name' => __( 'Speaker' ),
                'singular_name' => __( 'Speaker' )
            ),
            'public' => true,
            'map_meta_cap'=> true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'speaker' ),
            'supports' => array( 'title', 'editor', 'comments', 'author', 'custom-fields', 'thumbnail', 'custom-fields', 'post-templates'),
        )
    );
    
    register_post_type( 'collection_object',
        array(
            'labels' => array(
                'name' => __( 'Collection Object' ),
                'singular_name' => __( 'Collection Object' )
            ),
            'public' => true,
            'map_meta_cap'=> true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'collection_object' ),
            'supports' => array( 'title', 'editor', 'comments', 'author', 'custom-fields', 'thumbnail', 'custom-fields', 'post-templates'),
        )
    );
     
}
add_action( 'init', 'create_custom_post_types' );

function add_taxonomies_to_pages() {
 register_taxonomy_for_object_type( 'category', 'page' );
 }
add_action( 'init', 'add_taxonomies_to_pages' );







add_action('acf/input/admin_head', 'my_acf_admin_head');

function my_acf_admin_head() {
    
    ?>
    <script type="text/javascript">
    (function($) {
        
        $(document).ready(function(){
            
            $('.acf-field-57aa3fa82e551 .acf-input').append( $('#postdivrich') );
            
        });
        
    })(jQuery);    
    </script>
    <style type="text/css">
        .acf-field #wp-content-editor-tools {
            background: transparent;
            padding-top: 0;
        }
    </style>
    <?php  
}



if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}






?>