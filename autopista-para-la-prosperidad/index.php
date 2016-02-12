<?php $m = 'home'; ?>
<?php include('header.php') ?>

<div class="mainContent">
	<div class="mainSlider">
		<div class="imgsBox">
			<?php pintar_banner_imagen(); ?>
		</div>
		<div class="txtsBox">
			
			<?php pintar_banner_texto(); ?>
		</div>
		<div class="navL"></div>
		<div class="navR"></div>
		<div class="navBox">
			<!-- buttons by js -->
		</div>
	</div>

	<div class="destBox clearfix">
		<div class="colLeft">
			<!-- <h1 class="line"><span>REDES SOCIALES</span></h1> -->
			<h1>REDES SOCIALES</h1>
			<div class="tabBtn sel">SIGUENOS EN:</div>
			<div class="tabCont">
					<a href="https://www.facebook.com/pages/Agencia-Nacional-de-Infraestructura-ANI/153642678122164?ref=stream" class="smIcon"><span class="fb"></span>/ANI Colombia</a>
					<a href="https://twitter.com/ANI_Colombia" class="smIcon"><span class="tw"></span>@ANI_Colombia</a>
			</div>
		</div>

		<div class="colRight">
			<!-- <h1 class="line"><span>INGRESO</span></h1> -->
			<h1>INGRESO</h1>
			<div class="tabBtn sel">USUARIO</div>
			<a href="registro.php" class="tabBtn">REGISTRO</a>
			<div class="tabCont">
                            <form action="login.php" class="logBox" method="post">
                                <input type="text" name="correo" placeholder="USUARIO" class="validate[required]">
                                <input type="password" name="password" placeholder="CONTRASEÑA" class="validate[required]">
                                     <input type="submit" value="IR">
				</form>
				 <a href="contrasenamodal.php" id="modalclave" class="cBoxRec fancybox.ajax olvido">OLVIDÓ SU CONTRASEÑA?</a>
                                 <a href="confirmacuentamodal.php" id="modalconfirmar" class="cBoxSuc fancybox.ajax"></a>
                                 <a href="recuperarclavemodal.php" id="modalrecuperarclave" class="cBoxSuc fancybox.ajax"></a>
                                 <a href="correoinvalidomodal.php" id="modalcooreoinvalido" class="cBoxSuc fancybox.ajax"></a>
			</div>
		</div>

	</div>

	<div class="dest2Box clearfix">
		<div class="col">
			<div class="tit tweetIcon">TWEETS <span></span></div>
			<div class="contBox" id="tweetBox">

			</div>
		</div>
		<div class="col mid">
			<div class="tit">LINK SECOP</div>
			<div class="contBox">
				<ul class="links">
					<?php linksecopdestacados();?>
				</ul>
			</div>
		</div>
		<div class="col">
			<div class="tit">CONTACTO OFICIAL</div>
			<div class="contBox">
				<ul class="links">
					<?php correosdestacados();?>
				</ul>
			</div>
		</div>
	</div>

	<div class="dest3Box">
		<img src="img/logosHome.png" height="96" width="976" alt="logos">
	</div>
</div>
<?php  ?>
<?php include('footer.php') ?>
<?php if(isset($_GET['ok1'])){ ?>
<script>
              var correo = '<?php echo $correo; ?>';
     $.post('activarcuenta.php', { correo: correo } , function(datos) {
         //alert(datos);
                $('#modalrecuperarclave').click();
            });
                
            
</script>
<?php }?>

<?php if(isset($_GET['Erno'])){ ?>
<script>
              var correo = '<?php echo $correo; ?>';
     $.post('activarcuenta.php', { correo: correo } , function(datos) {
         //alert(datos);
                $('#modalcooreoinvalido').click();
            });
                
            
</script>
<?php }?>

<?php if(isset($_GET['confirm'])){
    $correo = base64_decode($_GET['confirm']); ?>
<script>
    var correo = '<?php echo $correo; ?>';
     $.post('activarcuenta.php', { correo: correo } , function(datos) {
         //alert(datos);
                $('#modalconfirmar').click();
            });
</script>
<?php }?>
<script>
$('.logBox').validationEngine();
</script>