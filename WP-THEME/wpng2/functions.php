<?php ob_start(); ?>
<?php

if (function_exists('add_theme_support'))
{
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('customsize', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');
    add_image_size('normalsize', 1024, 768, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');
    add_image_size('minsize', 1024, 600, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');
    add_image_size('thumbsize', 250, 420, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

}




//featured images
add_theme_support( 'post-thumbnails' ); 
add_post_type_support( 'page', 'excerpt' );


 

// METABOX CARTELERA
include 'options/cartelera/metaboxes.php';



/*------------------------------------*\
   CUSTOM POST TYPE REDES
\*------------------------------------*/
function custom_post_type_redes() {
$labels = array(
  'name'               => _x( 'Redes', 'Post Type General Name', 'text_domain' ),
  'singular_name'      => _x( 'Redes', 'Post Type Singular Name', 'text_domain' ),
  'menu_name'          => __( 'Redes', 'text_domain' ),
  'parent_item_colon'  => __( 'ARedes padre', 'text_domain' ),
  'all_items'          => __( 'Redes', 'text_domain' ),
  'view_item'          => __( 'Ver post', 'text_domain' ),
  'add_new_item'       => __( 'Añadir post Nuevo', 'text_domain' ),
  'add_new'            => __( 'Añadir', 'text_domain' ),
  'edit_item'          => __( 'Editar post', 'text_domain' ),
  'update_item'        => __( 'Actualizar', 'text_domain' ),
  'search_items'       => __( 'Buscar posts', 'text_domain' ),
  'not_found'          => __( 'posts no encontrados', 'text_domain' ),
  'not_found_in_trash' => __( 'posts no encontrados en Papelera', 'text_domain' ),
  );

$rewrite = array(
  'slug'                => 'Redes',
  'with_front'          => true,
  'pages'               => true,
  'feeds'               => true,
  );

$args = array(
  'label'               => __( 'Redes', 'text_domain' ),
  'description'         => __( 'Información de Redes', 'text_domain' ),
  'labels'              => $labels,
  'supports'            => array( 'title', 'editor', 'thumbnail'),
  'taxonomies'          => array( 'category', 'post_tag' ),
  'hierarchical'        => false,
  'public'              => true,
  'show_ui'             => true,
  'show_in_menu'        => true,
  'show_in_nav_menus'   => true,
  'show_in_admin_bar'   => true,
  'menu_position'       => 4,
  'menu_icon'           => 'dashicons-smiley',/*site_url().'/wp-content/plugins/my_plugin/images/logo.png',*/
  'can_export'          => true,
  'has_archive'         => 'Redes',
  'exclude_from_search' => false,
  'query_var'           => 'Redes',
  'rewrite'             => $rewrite,
  'capability_type'     => 'post',
  );

register_post_type('Redes', $args);
}

add_action('init', 'custom_post_type_redes', 0);


/*------------------------------------*\
   EXCERT
\*------------------------------------*/

function  Extracto ($post_id){
    $the_post = get_post($post_id); //Gets post ID
    $the_excerpt = $the_post->post_content; //Gets post_content to be used as a basis for the excerpt
    $excerpt_length = 30; //Sets excerpt length by word count
    $the_excerpt = strip_tags(strip_shortcodes($the_excerpt)); //Strips tags and images
    $words = explode(' ', $the_excerpt, $excerpt_length + 1);

    if(count($words) > $excerpt_length) :
        array_pop($words);
        array_push($words, '…');
        $the_excerpt = implode(' ', $words);
    endif;

    $the_excerpt =  $the_excerpt;

    return $the_excerpt;
}



 

?>