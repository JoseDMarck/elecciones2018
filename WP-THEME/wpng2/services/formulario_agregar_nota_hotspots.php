<!-- HEADER NOTAS ============================== -->
	<div class="ContenedorAddNotas">
			
			<div class="subcontenedor">
					<div class="titulo_header">
							<div class="imagenTitulo"></div>

							<div class="btn_cerrar_nota"></div>
					</div>

					
				
				<div class="InformacionDatos">
					<form id="new_post" name="new_post" class="new_post_nota_hotspots" method="post" action="<?php echo get_template_directory_uri(); ?>/formulario_insertar_Nhotspots.php"> 
					
					<div class="BloqueA">Título</div>
					<div class="BloqueB"><input type="text" name="titulo_nota" id="titulo_nota" size="45" id="input-title"/></div>


					<div class="BloqueC">Ubucación: Notas generales</div>



					<div style="clear: both;"></div>
					<div class="contenedorTexto">

						<textarea class="flexcroll_txt" name="contenido_nota" id="contenido_nota"></textarea>
						
					</div><!-- ContenedorTextos -->



					<div style="clear: both;"></div>

					<div class="Contenedor_Etiquetas">
					<div class="BloqueD">Etiquetas</div>
				 
					

					<div class="BloqueG">
						 <input type="hidden" name="action" value="new_post">
						 <input class="" type="submit" name="submit" value="Aceptar"/>
					</div>


					<div class="BloqueF">
						<select name="tipo_nota"  id="tipo_nota">
 							<option value="publish">Publica</option>
  							<option value="private">Privada</option>
						</select>

					</div>

					</div><!-- Contenedor_Etiquetas -->


					<div style="clear: both;"></div>
					
					 




					</form>
				</div>


				



			</div><!--subcontenedor-->
			

	</div><!-- ContenedorAddNotas -->
