<?php ob_start(); ?>

<?php
//add the button to lanch the thickbox
add_action( 'media_buttons','add_vimeo_upload_button',100);

function add_vimeo_upload_button(){

    global $pagenow,$typenow;   

    if (!in_array( $pagenow, array( 'post.php', 'post-new.php' ) ))
        return;
    echo '<a href="#TB_inline?height=155&width=300&inlineId=vimeo_upload" class="thickbox"><img src="http://i.imgur.com/5hyoa.png" alt="Upload to vimeo"></a>';
}


 
 add_filter('admin_footer','vimeo_upload_form');

function vimeo_upload_form(){
    global $pagenow,$typenow;   
    if (!in_array( $pagenow, array( 'post.php', 'post-new.php' )))
        return;
?>

<div id="vimeo_upload" style="display:none">
   <!-- para crear los post de redes sociales ============================ -->
  <form id="new_post" name="new_post" class="new_post_nota_hotspots" method="post" action="<?php echo get_template_directory_uri(); ?>/services/formulario_insertar_Nhotspots.php">        
             <input type="hidden" name="action" value="new_post">
            

          <div class="BloqueA">Título</div>
          <div class="BloqueB"><input type="text" name="titulo_nota" id="titulo_nota" size="45" value="<?php the_title(); ?>"/></div>

          <div class="BloqueA">Descripción</div>
          <div class="BloqueB"><input type="text" name="descripcion_nota" id="descripcion_nota" size="45" value="<?php echo $excerpt = Extracto($post_id);  ?>"/></div>
           <div class="BloqueB"><input type="text" name="id_imagen_s" id="id_imagen_s" size="45" value="<?php 
           the_post_thumbnail_url("normalsize"); ?>"/></div>

       
           <input class="" type="submit" name="submit" value="Aceptar"/>


   </form>
</div>


<?php
}



 /*------------------------------------------*\
    Page Metabox
  \*---------------------------------------*/


  add_action( 'add_meta_boxes', 'page_get_image' );
  function page_get_image( $post ) {
  add_meta_box( 
  'em-img-meta', // atributo ID
  '<h1 style="color:#2980b9"> Imagen Post</h1>', // Título
  'datos_imagen', // Función que muestra el HTML que aparecerá en la pantalla
  'page', // Tipo de entrada. Puede ser 'post', 'page', 'link', o 'custom_post_type'
  'normal', // Parte de la pantalla donde aparecerá. Puede ser 'normal', 'advanced', o 'side'
  'default' // Prioridad u orden en el que aparecerá. Puede ser 'high', 'core', 'default' o 'low'
  );
  }

  function datos_imagen( $post ) {
  
  $value_id_imagen_page = (get_post_meta($post->ID, 'id_imagen_page', true));

?>
<b><span style="color:#1abc9c">Mes titulo:</span></b> <br><br>
<input type="text" name="id_imagen_page" id="id_imagen_page" value="<?php echo $value_id_imagen_page; ?>" style="width: 600px;" /><br><br>






<?php }


  add_action('save_post', 'post_dato_imagen_page');
  function post_dato_imagen_page() {
  global $wpdb, $post;
  if (!$post_id) $post_id = $_POST['post_ID'];
  $var_1= $_POST['id_imagen_page'];
  update_post_meta($post_id, 'id_imagen_page', $var_1);
  }

  ?>

<?php 

 /*------------------------------------------*\
     SINGLE FUNCTIONS CARTELERA
  \*---------------------------------------*/


  add_action( 'add_meta_boxes', 'single_pst_notas' );
  function single_pst_notas( $post ) {
  add_meta_box( 
  'em-img-meta', // atributo ID
  '<h1 style="color:#2980b9" >Datos de Cartelera</h1>', // Título
  'datos_cartelera', // Función que muestra el HTML que aparecerá en la pantalla
  'post', // Tipo de entrada. Puede ser 'post', 'page', 'link', o 'custom_post_type'
  'normal', // Parte de la pantalla donde aparecerá. Puede ser 'normal', 'advanced', o 'side'
  'default' // Prioridad u orden en el que aparecerá. Puede ser 'high', 'core', 'default' o 'low'
  );
  }

  function datos_cartelera( $post ) {
  $value_mes_titulo = (get_post_meta($post->ID, 'id_mes_titulo', true));
  $value_id_imagen_normalsize = (get_post_meta($post->ID, 'id_img_normalsize', true));
  $value_id_imagen_minsize = (get_post_meta($post->ID, 'id_img_minsize', true));
  $value_id_imagen_thumbsize = (get_post_meta($post->ID, 'id_img_thumbsize', true));
  $value_id_lugar = (get_post_meta($post->ID, 'id_lugar', true));
  $value_id_hora = (get_post_meta($post->ID, 'id_hora', true));
  $value_id_mes = (get_post_meta($post->ID, 'id_mes', true));
  $value_id_dia = (get_post_meta($post->ID, 'id_dia', true));
  $value_id_mensualidad = (get_post_meta($post->ID, 'id_mensualidad', true));
  $value_id_tipo_bloque = (get_post_meta($post->ID, 'id_tipo_bloque', true));
  $value_id_tamano_bloque = (get_post_meta($post->ID, 'id_tamano_bloque', true));
  $value_id_post_sin_imagen = (get_post_meta($post->ID, 'id_post_sin_imagen', true));

  $value_id_post_fecha = (get_post_meta($post->ID, 'id_post_fecha', true));
  $value_id_post_author = (get_post_meta($post->ID, 'id_post_author', true));






?>


<div style="display: none;">
<b><span style="color:#1abc9c">Mes titulo:</span></b> <br><br>
<input type="text" name="id_mes_titulo" id="id_mes_titulo" value="<?php echo $value_mes_titulo; ?>" style="width: 600px;" /><br><br>


<b><span style="color:#1abc9c">Imagen Thumb Completa 1024px por 768px</span></b> <br><br>
<input type="text" name="id_img_normalsize" id="id_img_normalsize" value="<?php the_post_thumbnail_url("normalsize"); ?>" style="width: 600px;" /><br><br>


<b><span style="color:#1abc9c">Imagen minsize 1024px por 600px:</span></b> <br><br>
<input type="text" name="id_img_minsize" id="id_img_minsize" value="<?php the_post_thumbnail_url("minsize"); ?>" style="width: 600px;" /><br><br>


<b><span style="color:#1abc9c">Imagen thumbsize 250px por 420px:</span></b> <br><br>
<input type="text" name="id_img_thumbsize" id="id_img_thumbsize" value="<?php the_post_thumbnail_url("thumbsize"); ?>" style="width: 600px;" /><br><br>




<?php $author_id=$post->post_author; ?>
<b><span style="color:#1abc9c">Autor:</span></b> <br><br>
<input type="text" name="id_post_author" id="id_post_author" value="<?php the_author_meta( 'display_name' , $author_id ); ?>" style="width: 200px;" /><br><br>



<b><span style="color:#1abc9c">Post Sin Imagen:</span></b> <br><br>
<select name="id_post_sin_imagen" id="id_post_sin_imagen">
  <option  value=""     <?php selected($value_id_post_sin_imagen, 'No' ); ?>>No</option>
  <option  value="PostSinImagen-Amarillo" <?php selected($value_id_post_sin_imagen, 'PostSinImagen-Amarillo' ); ?>>Color Amarillo</option>
  <option  value="PostSinImagen-Azul" <?php selected($value_id_post_sin_imagen, 'PostSinImagen-Azul' ); ?>>Color Azul</option>
  <option  value="PostSinImagen-Verde" <?php selected($value_id_post_sin_imagen, 'PostSinImagen-Verde' ); ?>>Color Verde</option>
  <option  value="PostSinImagen-Rosa" <?php selected($value_id_post_sin_imagen, 'PostSinImagen-Rosa' ); ?>>Color Rosa</option>
</select>
<br><br>



<b><span style="color:#1abc9c">Lugar:</span></b> <br><br>
<input type="text" name="id_lugar" id="id_lugar" value="<?php echo $value_id_lugar; ?>" style="width: 200px;" /><br><br>


<b><span style="color:#1abc9c">Mes:</span></b> <br><br>
<select name="id_mes" id="id_mes">
  <option  value="" <?php selected($value_id_mes, '' ); ?>>---</option>
  <option  value="ENE" <?php selected($value_id_mes, 'ENE' ); ?>>Enero</option>
  <option  value="FEB" <?php selected($value_id_mes, 'FEB' ); ?>>Febrero</option>
  <option  value="MAR" <?php selected($value_id_mes, 'MAR' ); ?>>Marzo</option>
  <option  value="ABR" <?php selected($value_id_mes, 'ABR' ); ?>>Abril</option>
  <option  value="MAY" <?php selected($value_id_mes, 'MAY' ); ?>>Mayo</option>
  <option  value="JUN" <?php selected($value_id_mes, 'JUN' ); ?>>Junio</option>
  <option  value="JUL" <?php selected($value_id_mes, 'JUL' ); ?>>Julio</option>
  <option  value="AGO" <?php selected($value_id_mes, 'AGO' ); ?>>Agosto</option>
  <option  value="SEP" <?php selected($value_id_mes, 'SEP' ); ?>>Septiembre</option>
  <option  value="OCT" <?php selected($value_id_mes, 'OCT' ); ?>>Octubre</option>
  <option  value="NOV" <?php selected($value_id_mes, 'NOV' ); ?>>Noviembre</option>
  <option  value="DIC" <?php selected($value_id_mes, 'DIC' ); ?>>Diciembre</option> 
</select>
<br><br>



<b><span style="color:#1abc9c">Día:</span></b> <br><br>
<select name="id_dia" id="id_dia">
  <option  value="" <?php selected($value_id_dia, '' ); ?>>--</option>
  <option  value="01" <?php selected($value_id_dia, '01' ); ?>>01</option>
  <option  value="02" <?php selected($value_id_dia, '02' ); ?>>02</option>
  <option  value="03" <?php selected($value_id_dia, '03' ); ?>>03</option>
  <option  value="04" <?php selected($value_id_dia, '04' ); ?>>04</option>
  <option  value="05" <?php selected($value_id_dia, '05' ); ?>>05</option>
  <option  value="06" <?php selected($value_id_dia, '06' ); ?>>06</option>
  <option  value="07" <?php selected($value_id_dia, '07' ); ?>>07</option>
  <option  value="08" <?php selected($value_id_dia, '08' ); ?>>08</option>
  <option  value="09" <?php selected($value_id_dia, '09' ); ?>>09</option>
  <option  value="10" <?php selected($value_id_dia, '10' ); ?>>10</option>
  <option  value="11" <?php selected($value_id_dia, '11' ); ?>>11</option>
  <option  value="12" <?php selected($value_id_dia, '12' ); ?>>12</option>
  <option  value="13" <?php selected($value_id_dia, '13' ); ?>>13</option>
  <option  value="14" <?php selected($value_id_dia, '14' ); ?>>14</option>
  <option  value="15" <?php selected($value_id_dia, '15' ); ?>>15</option>
  <option  value="16" <?php selected($value_id_dia, '16' ); ?>>16</option>
  <option  value="17" <?php selected($value_id_dia, '17' ); ?>>17</option>
  <option  value="18" <?php selected($value_id_dia, '18' ); ?>>18</option>
  <option  value="19" <?php selected($value_id_dia, '19' ); ?>>19</option>
  <option  value="20" <?php selected($value_id_dia, '20' ); ?>>20</option>
  <option  value="21" <?php selected($value_id_dia, '21' ); ?>>21</option>
  <option  value="22" <?php selected($value_id_dia, '22' ); ?>>22</option>
  <option  value="23" <?php selected($value_id_dia, '23' ); ?>>23</option>
  <option  value="24" <?php selected($value_id_dia, '24' ); ?>>24</option>
  <option  value="25" <?php selected($value_id_dia, '25' ); ?>>25</option>
  <option  value="26" <?php selected($value_id_dia, '26' ); ?>>26</option>
  <option  value="27" <?php selected($value_id_dia, '27' ); ?>>27</option>
  <option  value="28" <?php selected($value_id_dia, '28' ); ?>>28</option>
  <option  value="29" <?php selected($value_id_dia, '29' ); ?>>29</option>
  <option  value="30" <?php selected($value_id_dia, '30' ); ?>>30</option>
  <option  value="31" <?php selected($value_id_dia, '31' ); ?>>31</option>
</select>
<br><br>



<b><span style="color:#1abc9c">Hora:</span></b> <br><br>
<input type="text" name="id_hora" id="id_hora" value="<?php echo $value_id_hora; ?>" style="width: 100px;" /><br><br>



</div> <!-- Display none -->



<b><span style="color:#1abc9c">Fecha </span></b> <br><br>
<input type="text" name="id_post_fecha" id="id_post_fecha" value="<?php echo get_the_date('j F Y'); ?>" style="width: 200px;" /><br><br>


<b><span style="color:#1abc9c">Mes</span></b> <br><br>
<input type="text" name="id_post_fecha_mes" id="id_post_fecha_mes" value="<?php echo get_the_date('M'); ?>" style="width: 200px;" /><br><br>


<b><span style="color:#1abc9c">Día</span></b> <br><br>
<input type="text" name="id_post_fecha_dia" id="id_post_fecha_dia" value="<?php echo get_the_date('j'); ?>" style="width: 200px;" /><br><br>




<b><span style="color:#1abc9c">Tamaño de Bloque:</span></b> <br><br>
<select name="id_tamano_bloque" id="id_tamano_bloque">
  <option  value=""     <?php selected($value_id_tamano_bloque, 'Normal' ); ?>>Normal</option>
  <option  value="Bloque_GrandeF" <?php selected($value_id_tamano_bloque, 'Bloque_GrandeF' ); ?>>Grande</option>
</select>
<br><br>




<b><span style="color:#1abc9c">Extracto:</span></b> <br><br>
<input type="text" name="id_post_extracto" id="id_post_extracto" value="<?php echo $excerpt = Extracto($post_id);  ?>" style="width: 600px;" /><br><br>



<b><span style="color:#1abc9c">Categoría</span></b> <br><br>
<?php 
$category = get_the_category(); 
$name = $category[0]->cat_name;
 $cat_id = get_cat_ID( $name );
?>
<input type="text" name="id_post_categoria" id="id_post_categoria" value="<?php    echo $name;  ?>" style="width: 200px;" /><br><br>






 
  

<?php }


  add_action('save_post', 'post_dato_mes_titulo');
  function post_dato_mes_titulo() {
  global $wpdb, $post;
  if (!$post_id) $post_id = $_POST['post_ID'];
  $var_1= $_POST['id_mes_titulo'];
  update_post_meta($post_id, 'id_mes_titulo', $var_1);
  }
 
  add_action('save_post', 'post_dato_imagen_normalsize');
  function post_dato_imagen_normalsize() {
  global $wpdb, $post;
  if (!$post_id) $post_id = $_POST['post_ID'];
  $var_1= $_POST['id_img_normalsize'];
  update_post_meta($post_id, 'id_img_normalsize', $var_1);
  }

  add_action('save_post', 'post_dato_imagen_minsize');
  function post_dato_imagen_minsize() {
  global $wpdb, $post;
  if (!$post_id) $post_id = $_POST['post_ID'];
  $var_1= $_POST['id_img_minsize'];
  update_post_meta($post_id, 'id_img_minsize', $var_1);
  }

  add_action('save_post', 'post_dato_imagen_thumbsize');
  function post_dato_imagen_thumbsize() {
  global $wpdb, $post;
  if (!$post_id) $post_id = $_POST['post_ID'];
  $var_1= $_POST['id_img_thumbsize'];
  update_post_meta($post_id, 'id_img_thumbsize', $var_1);
  }
 
  add_action('save_post', 'post_dato_id_lugar');
  function post_dato_id_lugar() {
  global $wpdb, $post;
  if (!$post_id) $post_id = $_POST['post_ID'];
  $var_1= $_POST['id_lugar'];
  update_post_meta($post_id, 'id_lugar', $var_1);
  }

  add_action('save_post', 'post_dato_id_hora');
  function post_dato_id_hora() {
  global $wpdb, $post;
  if (!$post_id) $post_id = $_POST['post_ID'];
  $var_hora = $_POST['id_hora'];
  update_post_meta($post_id, 'id_hora', $var_hora);
  }

  add_action('save_post', 'post_dato_id_mes');
  function post_dato_id_mes() {
  global $wpdb, $post;
  if (!$post_id) $post_id = $_POST['post_ID'];
  $var_1 = $_POST['id_mes'];
  update_post_meta($post_id, 'id_mes', $var_1);
  }

   add_action('save_post', 'post_dato_id_dia');
  function post_dato_id_dia() {
  global $wpdb, $post;
  if (!$post_id) $post_id = $_POST['post_ID'];
  $var_1 = $_POST['id_dia'];
  update_post_meta($post_id, 'id_dia', $var_1);
  }

  add_action('save_post', 'post_dato_id_mensualidad');
  function post_dato_id_mensualidad() {
  global $wpdb, $post;
  if (!$post_id) $post_id = $_POST['post_ID'];
  $var_1 = $_POST['id_mensualidad'];
  update_post_meta($post_id, 'id_mensualidad', $var_1);
  }

  add_action('save_post', 'post_dato_id_tipo_bloque');
  function post_dato_id_tipo_bloque() {
  global $wpdb, $post;
  if (!$post_id) $post_id = $_POST['post_ID'];
  $var_1 = $_POST['id_tipo_bloque'];
  update_post_meta($post_id, 'id_tipo_bloque', $var_1);
  }

   add_action('save_post', 'post_dato_id_post_sin_imagen');
  function post_dato_id_post_sin_imagen() {
  global $wpdb, $post;
  if (!$post_id) $post_id = $_POST['post_ID'];
  $var_1 = $_POST['id_post_sin_imagen'];
  update_post_meta($post_id, 'id_post_sin_imagen', $var_1);
  }


   add_action('save_post', 'post_dato_id_post_fecha');
  function post_dato_id_post_fecha() {
  global $wpdb, $post;
  if (!$post_id) $post_id = $_POST['post_ID'];
  $var_1 = $_POST['id_post_fecha'];
  update_post_meta($post_id, 'id_post_fecha', $var_1);
  }


  add_action('save_post', 'post_dato_id_post_fecha_dia');
  function post_dato_id_post_fecha_dia() {
  global $wpdb, $post;
  if (!$post_id) $post_id = $_POST['post_ID'];
  $var_1 = $_POST['id_post_fecha_dia'];
  update_post_meta($post_id, 'id_post_fecha_dia', $var_1);
  }


  add_action('save_post', 'post_dato_id_post_fecha_mes');
  function post_dato_id_post_fecha_mes() {
  global $wpdb, $post;
  if (!$post_id) $post_id = $_POST['post_ID'];
  $var_1 = $_POST['id_post_fecha_mes'];
  update_post_meta($post_id, 'id_post_fecha_mes', $var_1);
  }

  add_action('save_post', 'post_dato_id_author');
  function post_dato_id_author() {
  global $wpdb, $post;
  if (!$post_id) $post_id = $_POST['post_ID'];
  $var_1 = $_POST['id_post_author'];
  update_post_meta($post_id, 'id_post_author', $var_1);
  }


  add_action('save_post', 'post_dato_id_tamano_bloque');
  function post_dato_id_tamano_bloque() {
  global $wpdb, $post;
  if (!$post_id) $post_id = $_POST['post_ID'];
  $var_1 = $_POST['id_tamano_bloque'];
  update_post_meta($post_id, 'id_tamano_bloque', $var_1);
  }


  add_action('save_post', 'post_extracto');
  function post_extracto() {
  global $wpdb, $post;
  if (!$post_id) $post_id = $_POST['post_ID'];
  $var_1 = $_POST['id_post_extracto'];
  update_post_meta($post_id, 'id_post_extracto', $var_1);
  }

   add_action('save_post', 'post_categoria_func');
  function post_categoria_func() {
  global $wpdb, $post;
  if (!$post_id) $post_id = $_POST['post_ID'];
  $var_1 = $_POST['id_post_categoria'];
  update_post_meta($post_id, 'id_post_categoria', $var_1);
  }

 



/*------------------------------------------*\
     REGISTRAMOS LOS CAMPOS EN WP REST API
\*-------------------------------------------*/


// MES TITULO  
add_action( 'rest_api_init', 'slug_register_mes_titulo' );
function slug_register_mes_titulo() {
    register_rest_field( 'post',
        'mes_titulo_meta',
        array(
            'get_callback'    => 'slug_get_mes_titulo',
            'update_callback' => 'slug_update_mes_titulo',
            'schema'          => null,
        )
    );
}

function slug_get_mes_titulo( $post, $field_name, $request ) {
     return get_post_meta($post['id'], 'id_mes_titulo', true);
}


function slug_update_mes_titulo( $value, $object, $field_name ) {
    if ( ! $value || ! is_string( $value ) ) { return; }
    return update_post_meta( $object->ID, $field_name, strip_tags( $value ) );
}


/*------------------------------------------*\
     REGISTRAMOS imagen_normalsize
\*-------------------------------------------*/
add_action( 'rest_api_init', 'slug_register_imagen_normalsize' );
function slug_register_imagen_normalsize() {
    register_rest_field( 'post',
        'imagen_normalsize',
        array(
            'get_callback'    => 'slug_get_imagen_normalsize',
            'update_callback' => 'slug_update_imagen_normalsize',
            'schema'          => null,
        )
    );
}

function slug_get_imagen_normalsize( $post, $field_name, $request ) {
     return get_post_meta($post['id'], 'id_img_normalsize', true);
}


function slug_update_imagen_normalsize( $value, $object, $field_name ) {
    if ( ! $value || ! is_string( $value ) ) { return; }
    return update_post_meta( $object->ID, $field_name, strip_tags( $value ) );
}


/*------------------------------------------*\
     REGISTRAMOS imagen_minsize
\*-------------------------------------------*/
add_action( 'rest_api_init', 'slug_register_imagen_minsize' );
function slug_register_imagen_minsize() {
    register_rest_field( 'post',
        'imagen_minsize',
        array(
            'get_callback'    => 'slug_get_imagen_minsize',
            'update_callback' => 'slug_update_imagen_minsize',
            'schema'          => null,
        )
    );
}

function slug_get_imagen_minsize( $post, $field_name, $request ) {
     return get_post_meta($post['id'], 'id_img_minsize', true);
}


function slug_update_imagen_minsize( $value, $object, $field_name ) {
    if ( ! $value || ! is_string( $value ) ) { return; }
    return update_post_meta( $object->ID, $field_name, strip_tags( $value ) );
}



/*------------------------------------------*\
     REGISTRAMOS thumbsize
\*-------------------------------------------*/
add_action( 'rest_api_init', 'slug_register_imagen_thumbsize' );
function slug_register_imagen_thumbsize() {
    register_rest_field( 'post',
        'imagen_thumbsize',
        array(
            'get_callback'    => 'slug_get_imagen_thumbsize',
            'update_callback' => 'slug_update_imagen_thumbsize',
            'schema'          => null,
        )
    );
}

function slug_get_imagen_thumbsize( $post, $field_name, $request ) {
     return get_post_meta($post['id'], 'id_img_thumbsize', true);
}


function slug_update_imagen_thumbsize( $value, $object, $field_name ) {
    if ( ! $value || ! is_string( $value ) ) { return; }
    return update_post_meta( $object->ID, $field_name, strip_tags( $value ) );
}


/*------------------------------------------*\
     REGISTRAMOS ID LUGAR
\*-------------------------------------------*/
add_action( 'rest_api_init', 'slug_register_id_lugar' );
function slug_register_id_lugar() {
    register_rest_field( 'post',
        'Lugar',
        array(
            'get_callback'    => 'slug_get_lugar',
            'update_callback' => 'slug_update_lugar',
            'schema'          => null,
        )
    );
}

function slug_get_lugar( $post, $field_name, $request ) {
     return get_post_meta($post['id'], 'id_lugar', true);
}


function slug_update_lugar( $value, $object, $field_name ) {
    if ( ! $value || ! is_string( $value ) ) { return; }
    return update_post_meta( $object->ID, $field_name, strip_tags( $value ) );
}


/*------------------------------------------*\
     REGISTRAMOS ID HORA
\*-------------------------------------------*/
add_action( 'rest_api_init', 'slug_register_id_hora' );
function slug_register_id_hora() {
    register_rest_field( 'post',
        'Hora',
        array(
            'get_callback'    => 'slug_get_hora',
            'update_callback' => 'slug_update_hora',
            'schema'          => null,
        )
    );
}

function slug_get_hora( $post, $field_name, $request ) {
     return get_post_meta($post['id'], 'id_hora', true);
}


function slug_update_hora( $value, $object, $field_name ) {
    if ( ! $value || ! is_string( $value ) ) { return; }
    return update_post_meta( $object->ID, $field_name, strip_tags( $value ) );
}



/*------------------------------------------*\
     REGISTRAMOS ID HORA
\*-------------------------------------------*/
add_action( 'rest_api_init', 'slug_register_id_mes' );
function slug_register_id_mes() {
    register_rest_field( 'post',
        'Mes',
        array(
            'get_callback'    => 'slug_get_mes',
            'update_callback' => 'slug_update_mes',
            'schema'          => null,
        )
    );
}

function slug_get_mes( $post, $field_name, $request ) {
     return get_post_meta($post['id'], 'id_mes', true);
}


function slug_update_mes( $value, $object, $field_name ) {
    if ( ! $value || ! is_string( $value ) ) { return; }
    return update_post_meta( $object->ID, $field_name, strip_tags( $value ) );
}



/*------------------------------------------*\
     REGISTRAMOS ID DÍA
\*-------------------------------------------*/
add_action( 'rest_api_init', 'slug_register_id_dia' );
function slug_register_id_dia() {
    register_rest_field( 'post',
        'Dia',
        array(
            'get_callback'    => 'slug_get_dia',
            'update_callback' => 'slug_update_dia',
            'schema'          => null,
        )
    );
}

function slug_get_dia( $post, $field_name, $request ) {
     return get_post_meta($post['id'], 'id_dia', true);
}


function slug_update_dia( $value, $object, $field_name ) {
    if ( ! $value || ! is_string( $value ) ) { return; }
    return update_post_meta( $object->ID, $field_name, strip_tags( $value ) );
}


/*------------------------------------------*\
     REGISTRAMOS ID MENSUALIDAD
\*-------------------------------------------*/
add_action( 'rest_api_init', 'slug_register_id_mensualidad' );
function slug_register_id_mensualidad() {
    register_rest_field( 'post',
        'mensualidad',
        array(
            'get_callback'    => 'slug_get_mensualidad',
            'update_callback' => 'slug_update_mensualidad',
            'schema'          => null,
        )
    );
}

function slug_get_mensualidad( $post, $field_name, $request ) {
     return get_post_meta($post['id'], 'id_mensualidad', true);
}


function slug_update_mensualidad( $value, $object, $field_name ) {
    if ( ! $value || ! is_string( $value ) ) { return; }
    return update_post_meta( $object->ID, $field_name, strip_tags( $value ) );
}


/*------------------------------------------*\
     REGISTRAMOS ID TIPO DE BLOQUE
\*-------------------------------------------*/
add_action( 'rest_api_init', 'slug_register_id_tipo_bloque' );
function slug_register_id_tipo_bloque() {
    register_rest_field( 'post',
        'tipo_bloque',
        array(
            'get_callback'    => 'slug_get_tipo_bloque',
            'update_callback' => 'slug_update_tipo_bloque',
            'schema'          => null,
        )
    );
}

function slug_get_tipo_bloque( $post, $field_name, $request ) {
     return get_post_meta($post['id'], 'id_tipo_bloque', true);
}


function slug_update_tipo_bloque( $value, $object, $field_name ) {
    if ( ! $value || ! is_string( $value ) ) { return; }
    return update_post_meta( $object->ID, $field_name, strip_tags( $value ) );
}



/*------------------------------------------*\
     REGISTRAMOS ID TIPO DE IMAGEN SIN POST
\*-------------------------------------------*/
add_action( 'rest_api_init', 'slug_register_id_imagen_post' );
function slug_register_id_imagen_post() {
    register_rest_field( 'post',
        'imagen_sin_post',
        array(
            'get_callback'    => 'slug_get_tipo_imagen_sin_post',
            'update_callback' => 'slug_update_imagen_sin_post',
            'schema'          => null,
        )
    );
}

function slug_get_tipo_imagen_sin_post( $post, $field_name, $request ) {
     return get_post_meta($post['id'], 'id_post_sin_imagen', true);
}


function slug_update_imagen_sin_post( $value, $object, $field_name ) {
    if ( ! $value || ! is_string( $value ) ) { return; }
    return update_post_meta( $object->ID, $field_name, strip_tags( $value ) );
}


/*------------------------------------------*\
     REGISTRAMOS ID FECHA
\*-------------------------------------------*/
add_action( 'rest_api_init', 'slug_register_id_fecha' );
function slug_register_id_fecha() {
    register_rest_field( 'post',
        'post_fecha',
        array(
            'get_callback'    => 'slug_get_fecha',
            'update_callback' => 'slug_update_fecha',
            'schema'          => null,
        )
    );
}

function slug_get_fecha( $post, $field_name, $request ) {
     return get_post_meta($post['id'], 'id_post_fecha', true);
}


function slug_update_fecha( $value, $object, $field_name ) {
    if ( ! $value || ! is_string( $value ) ) { return; }
    return update_post_meta( $object->ID, $field_name, strip_tags( $value ) );
}


/*------------------------------------------*\
     REGISTRAMOS ID FECHA DÍA
\*-------------------------------------------*/
add_action( 'rest_api_init', 'slug_register_id_fecha_dia' );
function slug_register_id_fecha_dia() {
    register_rest_field( 'post',
        'post_fecha_dia',
        array(
            'get_callback'    => 'slug_get_fecha_dia',
            'update_callback' => 'slug_update_fecha_dia',
            'schema'          => null,
        )
    );
}

function slug_get_fecha_dia( $post, $field_name, $request ) {
     return get_post_meta($post['id'], 'id_post_fecha_dia', true);
}


function slug_update_fecha_dia( $value, $object, $field_name ) {
    if ( ! $value || ! is_string( $value ) ) { return; }
    return update_post_meta( $object->ID, $field_name, strip_tags( $value ) );
}



/*------------------------------------------*\
     REGISTRAMOS ID FECHA MES
\*-------------------------------------------*/
add_action( 'rest_api_init', 'slug_register_id_fecha_mes' );
function slug_register_id_fecha_mes() {
    register_rest_field( 'post',
        'post_fecha_mes',
        array(
            'get_callback'    => 'slug_get_fecha_mes',
            'update_callback' => 'slug_update_fecha_mes',
            'schema'          => null,
        )
    );
}

function slug_get_fecha_mes( $post, $field_name, $request ) {
     return get_post_meta($post['id'], 'id_post_fecha_mes', true);
}


function slug_update_fecha_mes( $value, $object, $field_name ) {
    if ( ! $value || ! is_string( $value ) ) { return; }
    return update_post_meta( $object->ID, $field_name, strip_tags( $value ) );
}



/*------------------------------------------*\
     REGISTRAMOS ID AUTHOR
\*-------------------------------------------*/
add_action( 'rest_api_init', 'slug_register_id_author' );
function slug_register_id_author() {
    register_rest_field( 'post',
        'post_author',
        array(
            'get_callback'    => 'slug_get_author',
            'update_callback' => 'slug_update_author',
            'schema'          => null,
        )
    );
}

function slug_get_author( $post, $field_name, $request ) {
     return get_post_meta($post['id'], 'id_post_author', true);
}


function slug_update_author( $value, $object, $field_name ) {
    if ( ! $value || ! is_string( $value ) ) { return; }
    return update_post_meta( $object->ID, $field_name, strip_tags( $value ) );
}


/*------------------------------------------*\
     REGISTRAMOS ID TAMAÑO BLOQUE 
\*-------------------------------------------*/
add_action( 'rest_api_init', 'slug_register_id_tamano_bloque' );
function slug_register_id_tamano_bloque() {
    register_rest_field( 'post',
        'tamano_bloque',
        array(
            'get_callback'    => 'slug_get_tamano_bloque',
            'update_callback' => 'slug_update_tamano_bloque',
            'schema'          => null,
        )
    );
}

function slug_get_tamano_bloque( $post, $field_name, $request ) {
     return get_post_meta($post['id'], 'id_tamano_bloque', true);
}


function slug_update_tamano_bloque( $value, $object, $field_name ) {
    if ( ! $value || ! is_string( $value ) ) { return; }
    return update_post_meta( $object->ID, $field_name, strip_tags( $value ) );
}


/*------------------------------------------*\
     REGISTRAMOS POST EXTRACTO 
\*-------------------------------------------*/
add_action( 'rest_api_init', 'slug_register_id_post_extracto' );
function slug_register_id_post_extracto() {
    register_rest_field( 'post',
        'custom_extracto',
        array(
            'get_callback'    => 'slug_get_post_extracto',
            'update_callback' => 'slug_update_post_extracto',
            'schema'          => null,
        )
    );
}

function slug_get_post_extracto( $post, $field_name, $request ) {
     return get_post_meta($post['id'], 'id_post_extracto', true);
}


function slug_update_post_extracto( $value, $object, $field_name ) {
    if ( ! $value || ! is_string( $value ) ) { return; }
    return update_post_meta( $object->ID, $field_name, strip_tags( $value ) );
}


/*------------------------------------------*\
     REGISTRAMOS POST CATEGORIA
\*-------------------------------------------*/
add_action( 'rest_api_init', 'slug_register_id_post_categoria' );
function slug_register_id_post_categoria() {
    register_rest_field( 'post',
        'post_categoria',
        array(
            'get_callback'    => 'slug_get_post_categoria',
            'update_callback' => 'slug_update_post_categoria',
            'schema'          => null,
        )
    );
}

function slug_get_post_categoria( $post, $field_name, $request ) {
     return get_post_meta($post['id'], 'id_post_categoria', true);
}


function slug_update_post_categoria( $value, $object, $field_name ) {
    if ( ! $value || ! is_string( $value ) ) { return; }
    return update_post_meta( $object->ID, $field_name, strip_tags( $value ) );
}



//
?>

