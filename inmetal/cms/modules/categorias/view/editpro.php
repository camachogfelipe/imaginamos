<?php
if (isset($_GET['id'])) {

    $id= $_GET['id'];
}
if (isset($_GET['sub'])) {

    $sub= $_GET['sub'];
}

$db->doQuery("SELECT * FROM cms_industrias_productos WHERE idcms_industrias_productos ='".$id."'", 1);
$proinfo = $db->results[0];
?>

<!-- full width -->

    <div class="header"><span><span class="ico gray window"></span>Productos</span>
    </div><!-- End header -->
    <div class="content">

        <div class="formEl_b">



            <fieldset>

                <legend><h1>Producto  <?php echo $proinfo["nombre_industrias_subcategorias"] ?></h1></legend>


                     <form id="form" name="form" method="post" action="../controller/savepro.php" enctype="multipart/form-data">

                    <div class="imu_info" id="infe"></div>
                   
                     <div class="section">                                                                                                  
                        <label>Nombre</label>
                        <span style="color: red;"></span>
                        <div>
                            <input type="text" name="nombre" id="nombre" class="medium" value="<?php echo $proinfo["nombre_industrias_subcategorias"] ?>">
                            <span class="f_help">Limite de caracteres 26/<span class="nombre"></span></span>
                        </div>
                    </div>
                    <div class="section">                                                                                                  
                        <label>Titulo</label>
                        <span style="color: red;"></span>
                        <div>
                            <input type="text" name="titulopro" id="titulopro" class="medium" value="<?php echo $proinfo["titulo_industrias_productos"] ?>">
                            <span class="f_help">Limite de caracteres 20/<span class="titulopro"></span></span>
                        </div>
                    </div>
                    <div class="section">                                                                                                  
                        <label>Subtitulo</label>
                        <span style="color: red;"></span>
                        <div>
                            <input type="text" name="subtitulo" id="subtitulo" class="medium" value="<?php echo $proinfo["subtitulo_industrias_productos"] ?>">
                            <span class="f_help">Limite de caracteres 20/<span class="subtitulo"></span></span>
                        </div>
                    </div>
                    <div class="section">
                            <label>Descripcion </label>
                            <span style="color: red;"></span>
                            <div>
                                <textarea name="despro" id="despro" class="large"><?php echo $proinfo["des_industrias_productos"] ?></textarea>
                                <span class="f_help">
                                    Limite de caracteres 158/
                                    <span class="despro"></span></span>
                            </div>
                        </div>
                      <div class="section">
                            <label>Imagen
                                <small> Imagen Grande </small>
                            </label>
                            <div>
                            <img src="../../../../images/<?php echo $proinfo["img1_industrias_productos"]; ?>" width="290" /><br/>
                            <span style="color: red;">Imagen de 290 x 218</span>
                                <div>
                                    <input type="file" name="img1" id="img1" />
                                </div>
                            </div>
                      </div>
                     <div class="section">
                            <label>Imagen
                            <small> Imagen Pequeña </small>
                            </label>
                            <div>
                            <img src="../../../../images/<?php echo $proinfo["img2_industrias_productos"]; ?>" width="290" /><br/>
                            <span style="color: red;">Imagen de 199 x 199</span>
                                <div>
                                    <input type="file" name="img2" id="img2" />
                                </div>
                            </div>
                      </div>
                      <div class="section">
                            <label>Imagen
                            <small> Imagen Pequeña </small>
                            </label>
                            <div>
                            <img src="../../../../images/<?php echo $proinfo["img3_industrias_productos"]; ?>" width="290" /><br/>
                            <span style="color: red;">Imagen de 199 x 199</span>
                                <div>
                                    <input type="file" name="img3" id="img3" />
                                </div>
                            </div>
                      </div>
                     <div class="section">
                            <label>Imagen
                            <small> Imagen Pequeña </small>
                            </label>
                            <div>
                            <img src="../../../../images/<?php echo $proinfo["img4_industrias_productos"]; ?>" width="290" /><br/>
                            <span style="color: red;">Imagen de 199 x 199</span>
                                <div>
                                    <input type="file" name="img4" id="img4" />
                                </div>
                            </div>
                      </div>
                        <p>&nbsp;</p> 
                        <div>
                            <input type="hidden" name="id" value="<?php echo $proinfo["idcms_industrias_productos"] ?>" />
                             <input type="hidden" name="sub" value="<?php echo $sub ?>" />
                            <input type="submit" value="Guardar" class="uibutton" />
                            <a class="uibutton icon normal answer" href="index.php?seccion=editsub&id=<?php echo $sub ?>">Atr&aacute;s</a>
                        </div>
                        <p>&nbsp;</p>  

                    </form>
            </fieldset>
        </div>
    </div>
 <script type="text/javascript">
    $(document).ready(function(){
        $("#submitForm1").click(function(e){
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