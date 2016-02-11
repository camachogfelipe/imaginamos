<?php
$db->doQuery("SELECT * FROM cms_home WHERE idcms_home=2 ", 1);
$info = $db->results[0];
?>

<!-- full width -->

    <div class="header"><span><span class="ico gray window"></span>Home</span>
    </div><!-- End header -->
    <div class="content">

        <div class="formEl_b">



            <fieldset>

                <legend><h1>Imagen <?php echo $info["titulo_home"] ?> </h1></legend>

                <form id="formimg" name="formimg" method="post" action="add.php"  enctype="multipart/form-data">

                    <div class="imu_info" id="info"></div>
                        <div class="section">                                                                                                  
                            <label>Titulo</label>
                            <span style="color: red;"></span>
                            <div>
                                <input type="text" name="titulo" id="titulo" class="medium" value="<?php echo $info["titulo_home"] ?>">
                                <span class="f_help">Limite de caracteres 18/<span class="titulo"></span></span>
                            </div>
                        </div>
                         <div class="section">                                                                                                  
                            <label>Subtitulo</label>
                            <span style="color: red;"></span>
                            <div>
                                <input type="text" name="subtitulo" id="subtitulo" class="medium" value="<?php echo $info["titulo_home"] ?>">
                                <span class="f_help">Limite de caracteres 22/<span class="subtitulo"></span></span>
                            </div>
                        </div>
                       <div class="section">
                        <label>Imagen actual 
                            <small> Imagen a color </small>
                        </label>
                        <div>
                            <img src="../../../../images/<?php echo $info["imagen_home"] ?>" width="132" /><br/>
                            <span style="color: red;">Imagen de 381 x 392</span>
                            <div>
                                <input type="file" name="img" id="img" />
                            </div>
                        </div>
                    </div>
                     <div class="section">
                        <label>Imagen actual 
                            <small> Imagen blanco y negro </small>
                        </label>
                        <div>
                            <img src="../../../../images/<?php echo $info["imagenbn_home"] ?>" width="132" /><br/>
                            <span style="color: red;">Imagen de 381 x 392</span>
                            <div>
                                <input type="file" name="imgbn" id="imgbn" />
                            </div>
                        </div>
                    </div>
                        <div class="section">
                            <label>Link
                                <small> Url </small>
                            </label>
                            <span style="color: red;"></span>
                            <div>
                                <input type="text" name="link" id="link" class="medium" value="<?php echo $info["link_home"] ?>">
                            </div>
                        </div>
                        <p>&nbsp;</p> 
                        <div>
                            <input type="hidden" name="id" value="<?php echo $info["idcms_home"] ?>" />
                            <input type="submit" value="Guardar" class="uibutton" id="submitForm" />
                        </div>
                        <p>&nbsp;</p>                                                               
                    </form>
            </fieldset>
        </div>

    </div>
 <script type="text/javascript">
    $(document).ready(function(){

        $("#submitForm").click(function(e){
            e.preventDefault();
                loading('Checking');
            $('#preloader').html('Guardando...');
            document.forms["formimg"].submit();
        });
    });
</script>
<?php
if(isset($_GET['Erno'])){
	if(intval($_GET['Erno'])){
		$valor=$_GET['Erno'];
		if($valor == 2){
			?><script>showError('Faltan datos ',3000);</script>
		<?php
		}elseif($valor == 1){
			?><script>showSuccess('Información ingresada',8000)</script>
			<?php
		}elseif($valor == 3){
			?><script>showError('Error al ingresar los datos',8000)</script>
			<?php
		}elseif($valor == 4){
			?><script>showError('No se puede ingresar destacado',8000)</script>
			<?php
		}elseif($valor == 5){
			?><script>showError('No selecciono imagen',8000)</script>
			<?php
		}
	}
	
}
?>