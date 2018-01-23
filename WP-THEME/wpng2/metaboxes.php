<?php
ob_start();
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
  $value_id_post_sin_imagen = (get_post_meta($post->ID, 'id_post_sin_imagen', true));
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


</div>



<b><span style="color:#1abc9c">Lugar:</span></b> <br><br>
<input type="text" name="id_lugar" id="id_lugar" value="<?php echo $value_id_lugar; ?>" style="width: 200px;" /><br><br>




<b><span style="color:#1abc9c">Mes:</span></b> <br><br>
<select name="id_mes" id="id_mes">
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


<b><span style="color:#1abc9c">Mensualidad:</span></b> <br><br>
<input type="text" name="id_mensualidad" id="id_mensualidad" value="<?php echo  $value_id_mensualidad; ?>" style="width: 200px;" /><br><br>
 
<b><span style="color:#1abc9c">Tipo de Bloque:</span></b> <br><br>
<select name="id_tipo_bloque" id="id_tipo_bloque">
  <option  value=""     <?php selected($value_id_tipo_bloque, 'Normal' ); ?>>Normal</option>
  <option  value="Full" <?php selected($value_id_tipo_bloque, 'Full' ); ?>>Full</option>
  <option  value="Bloque_A" <?php selected($value_id_tipo_bloque, 'Bloque_A' ); ?>>BloqueA</option>
  <option  value="Bloque_B" <?php selected($value_id_tipo_bloque, 'Bloque_B' ); ?>>BloqueB</option>
</select>
<br><br>

<b><span style="color:#1abc9c">Post Sin Imagen:</span></b> <br><br>
<select name="id_post_sin_imagen" id="id_post_sin_imagen">
  <option  value=""     <?php selected($value_id_post_sin_imagen, 'No' ); ?>>No</option>
  <option  value="PostSinImagen" <?php selected($value_id_post_sin_imagen, 'PostSinImagen' ); ?>>Si</option>
</select>
<br><br>

<?php

}


  add_action('save_post', 'post_dato_mes_titulo');
  function post_dato_mes_titulo() {
  global $wpdb, $post $post_id;
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