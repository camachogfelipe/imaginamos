<?php
$db->doQuery("SELECT * FROM cms_industrias_categorias WHERE tipo_industrias_categorias=1", 1);
$info = $db->results[0];
?>

<!-- full width -->

    <div class="header"><span><span class="ico gray window"></span>Industrias</span>
    </div><!-- End header -->
    <div class="content">

        <div class="formEl_b">



            <fieldset>

                <legend><h1>Industrias Descripcion</h1></legend>

                <form id="form" name="form" method="post" action="add.php">

                    <div class="imu_info" id="info"></div>
                        <div class="section">                                                                                                  
                            <label>Titulo</label>
                            <span style="color: red;"></span>
                            <div>
                                <input type="text" name="titulo" id="titulo" class="medium" value="<?php echo $info["tiulo_industrias_categorias"] ?>">
                                <span class="f_help">Limite de caracteres 50/<span class="titulo"></span></span>
                            </div>
                        </div>
                             <div class="section">
                            <label>Descripcion </label>
                            <span style="color: red;"></span>
                            <div>
                                <textarea name="des" id="des" class="large"><?php echo $info["des_industrias_categorias"] ?></textarea>
                                <span class="f_help">
                                    Limite de caracteres 560/
                                    <span class="des"></span></span>
                            </div>
                        </div>

                        <p>&nbsp;</p> 
                        <div>
                            <input type="hidden" name="id" value="<?php echo $info["idcms_industrias_categorias"] ?>" />
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
            document.forms["form"].submit();
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