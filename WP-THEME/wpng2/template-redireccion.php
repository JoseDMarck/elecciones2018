<?php /* Template Name: Redes */  ?>
<!DOCTYPE html>
<html>
<head>
 <meta property="og:url"                content="<?php the_permalink(); ?>" />
<meta property="og:type"               content="article" />
<meta property="og:title"              content="<?php the_title(); ?>" />
<meta property="og:description"        content="<?php echo $excerpt = Extracto($post_id);  ?>" />
<meta property="og:image"              content="<?php echo $value_id_imagen_page = (get_post_meta($post->ID, 'id_imagen_page', true));?>" />

</head>


<body>
 <div class="Loading">
 
 <?php
 //http://michoacantrespuntocero.com/cultura30/posts-redes/2a-exposicion-de-altares-de-michoacanos-ilustres/ 
$valor_url_post = get_permalink();
$quitar = array("posts-redes/");
$url_final = str_replace($quitar, "publicaciones/", $valor_url_post);
//echo $url_final
?>
	
	<div class="titulo_loading">
		<img src="<?php echo get_template_directory_uri();?>/template_assets/images/491.gif">
	</div><!--titulo-->

</div>

</body>
 
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/template_assets/css/style.css">
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/template_assets/js/jquery.1.9.1.min.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($) {  
	window.setTimeout(function(){ window.location = "<?php echo $url_final ?>"; },1000);
});
</script>

</html>


	 



 