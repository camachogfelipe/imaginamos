<?php include 'header.php' ?>
	<section class="contactenos">
		<div class="cont_l">
			<img src="../img/test.jpg" alt="" width="400" height="400" />
		</div>
		<div class="cont_d">
			<form action="">
				<label for="nombre">Nombre:</label>
				<input type="text" id="nombre" value="">
				<label for="correo">Correo electrónico:</label>
				<input type="email" id="correo" value="">
				<label for="ciudad">Ciudad:</label>
				<input type="text" id="ciudad" value="">
				<label for="sector">Sector:</label>
				<select name="sector" id="sector" class="newstyle">
					<option value="">Sector 1</option>
					<option value="">Sector 2</option>
					<option value="">Sector 3</option>
				</select>
				<label for="mensaje">Mensaje:</label>
				<textarea name="mensaje" id="mensaje" cols="38" rows="6"></textarea>
				<a href="#" ><button class="btn btn-2 btn-2e icon-arrow-right cont envi">&nbsp; Enviar &nbsp;</button></a>
			</form>
		</div>
	</section>
<?php include 'footer.php' ?>