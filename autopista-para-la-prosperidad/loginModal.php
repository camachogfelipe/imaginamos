
<div class="modBoxLogin clearfix">

	<div class="tabBtn sel">USUARIO</div>
	<a href="registro.php" class="tabBtn">REGISTRO</a>
	<div class="tabCont clearfix">
            <form action="login.php" class="logBox" method="post">
			<input type="text" name="correo" placeholder="USUARIO" class="validate[required]">
			<input type="password" name="password" placeholder="CONTRASEÑA" class="validate[required]">
                        <input type="hidden" name="log">
			<input type="submit" value="IR">
		</form>
		<div class="olvidoBox">
			<a href="contrasenamodal.php" id="modalclave" class="cBoxSuc fancybox.ajax olvido">OLVIDÓ SU CONTRASEÑA?</a>

		</div>
	</div>
</div>
<script>
$('.logBox').validationEngine();
</script>