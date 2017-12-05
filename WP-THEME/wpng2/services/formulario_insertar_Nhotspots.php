<?php 

include "../../../../wp-load.php";
 
/*---------------------------------------------------------------------------------------------*\
   AJAX INSERTAR AUDIO
\*---------------------------------------------------------------------------------------------*/


if( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['action'] ) &&  $_POST['action'] == "new_post") {
 
     
// Do some minor form validation to make sure there is content
    if (isset ($_POST['titulo_nota'])) {
        $titulo_nota =  $_POST['titulo_nota'];
    } 

    if (isset ($_POST['descripcion_nota'])) {
        $descripcion_nota =  $_POST['descripcion_nota'];
    } 

    if (isset ($_POST['id_imagen_s'])) {
        $id_imagen =  $_POST['id_imagen_s'];
    } 

    
    //$tags = $_POST['post_tags'];


 
    // ADD THE FORM INPUT TO $new_post ARRAY
    $new_post = array(
    'post_title'    =>   $titulo_nota,
    'post_status'   =>   'publish',           // Choose: publish, preview, future, draft, etc.
    'post_type' =>   'page',  //'post',page' or use a custom post type if you want to
    'post_content' => $descripcion_nota,
    'page_template'  => 'template-redireccion.php',
    'post_parent' => 767

    );
 
    //SAVE THE POST
    $pid = wp_insert_post($new_post);

    
    require_once(ABSPATH . "wp-admin" . '/includes/image.php');
    require_once(ABSPATH . "wp-admin" . '/includes/file.php');
    require_once(ABSPATH . "wp-admin" . '/includes/media.php');
    
    if ($_FILES['thumbnail']['tmp_name']!="") {
        foreach ($_FILES as $file => $array) {
            if ($_FILES[$file]['error'] !== UPLOAD_ERR_OK) {
                return "upload error : " . $_FILES[$file]['error'];
            }
            $attach_id = media_handle_upload( $file, $new_post );
        }   
    }
     
    if ($attach_id > 0){
        //and if you want to set that image as Post  then use:
        update_post_meta($pid,'_thumbnail_id',$attach_id);

    } 

    add_post_meta( $pid , "id_imagen_page", "$id_imagen");
    /*add_post_meta( $pid , "id_nombre", "$nombre");
    add_post_meta( $pid , "id_ciudad", "$ciudad");
    add_post_meta( $pid , "id_correo", "$correo");
    add_post_meta( $pid , "id_telefono", "$telefono");
    add_post_meta( $pid , "id_descripcion", "$descripcion");*/

  if ( $pid ) {
    $id_imagen = NULL;
    //wp_redirect( home_url() );
        /*$nombre = NULL;
        $correo = NULL;
        $ciudad = NULL;
        $tema = NULL;
        $titulo = NULL;
        $descripcion = NULL;*/


     ?>
    


    <?php
    echo "Los datos se enviaron correctamente...";
    exit;
    }
    
     
 
} // END THE IF STATEMENT THAT STARTED THE WHOLE FORM


 
//POST THE POST YO
do_action('wp_insert_post', 'wp_insert_post');

?>