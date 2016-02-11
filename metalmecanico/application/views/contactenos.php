<?php include 'header.php' ?>
<?
    if($this->uri->segment(3) == "ok"){
	?>
	<script>
		alert('Gracias por contactarse con nosotros.');
	</script>
	<?	
	}
    ?>
	<div class="main_content">
		<h1>CONTÁCTENOS</h1>
		<div class="wrap-contact">
			<div class="contact">
				<img src="../application/modules/contacto/assets/images/<?=$contacto[0]->imagen?>" width="500" height="230">
			</div>
			<div class="contact1">
                            <form action="../enviar_contacto" method="post">
					<div class="con-input">
						<input type="text" name="nombre" id="nombre" placeholder="* Nombre completo" required><br/>
						<input type="email" name="correo" id="correo" placeholder="* Correo electrónico" required><br/>
					</div>
					<div class="con-input">
						<input type="text" name="telefono" id="telefono" placeholder="* Teléfono" required><br/>
						<input type="text" name="asunto" id="asunto" placeholder="* Asunto" required><br/>
					</div>
					<textarea name='mensaje' placeholder="Comentario"></textarea>
					<div style="float:left;font-size: 12px;">*Campos obligatorios</div><div style="float:right;font-size:15px;"><button class="btn btn-3 btn-3e vermas">Enviar</button></div>
				</form>
			</div>
		</div><!-- end wrap-contact -->
	</div><!-- end main_content -->
<?php include 'footer.php' ?>