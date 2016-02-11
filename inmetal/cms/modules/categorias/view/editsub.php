<?php
if (isset($_GET['id'])) {

    $id= $_GET['id'];
}
if (isset($_GET['cat'])) {

    $cat= $_GET['cat'];
}
$db->doQuery("SELECT * FROM cms_industrias_subcategotias WHERE idcms_industrias_subcategotias ='".$id."'", 1);
$subinfo = $db->results[0];
?>

<!-- full width -->

    <div class="header"><span><span class="ico gray window"></span>Subcategorias</span>
    </div><!-- End header -->
    <div class="content">

        <div class="formEl_b">



            <fieldset>

                <legend><h1>Subcategoria  <?php echo $subinfo["titulo_industrias_subcategorias"] ?></h1></legend>


                     <form id="form" name="form" method="post" action="../controller/savesub.php" enctype="multipart/form-data">

                    <div class="imu_info" id="infe"></div>
                    


                    <div class="section">
                        <label>Titulo</label>
                        <span style="color: red;"></span>
                        <div>
                            <input type="text" name="titulop" id="titulop" class="medium" value="<?php echo $subinfo["titulo_industrias_subcategorias"] ?>">
                            <span class="f_help">Limite de caracteres 22/<span class="titulop"></span></span>
                        </div>
                    </div>
                    <p>&nbsp;</p> 
                    <div>
                        <input type="hidden" name="id" value="<?php echo $subinfo["idcms_industrias_subcategotias"] ?>" />
                         <input type="hidden" name="cat" value="<?php echo $cat ?>" />
                        <input type="submit" value="Guardar" class="uibutton" id="submitForm1" />
                        <a class="uibutton icon normal answer" href="index.php?seccion=edit&id=<?php echo $cat ?>">Atr&aacute;s</a> 
                    </div>
                    <p>&nbsp;</p>  

                </form>

            </fieldset>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <fieldset>

                <legend><h1>Productos</h1></legend>
                <form id="formpro" name="formpro" method="post" action="../controller/addpro.php" enctype="multipart/form-data">

                    <div class="imu_info1" id="infe1"></div>
                      <?php
                        $db->doQuery("SELECT * FROM cms_industrias_productos WHERE id_industrias_subcategorias='".$id."'", 1);
                        $proinfo = $db->results;
                        $fil = $db->rows;
                        if ($fil < 10) {
                            ?>
                    
                     <div class="section">                                                                                                  
                        <label>Nombre</label>
                        <span style="color: red;"></span>
                        <div>
                            <input type="text" name="nombre" id="nombre" class="medium" value="">
                            <span class="f_help">Limite de caracteres 26/<span class="nombre"></span></span>
                        </div>
                    </div>
                    <div class="section">                                                                                                  
                        <label>Titulo</label>
                        <span style="color: red;"></span>
                        <div>
                            <input type="text" name="titulopro" id="titulopro" class="medium" value="">
                            <span class="f_help">Limite de caracteres 20/<span class="titulopro"></span></span>
                        </div>
                    </div>
                    <div class="section">                                                                                                  
                        <label>Subtitulo</label>
                        <span style="color: red;"></span>
                        <div>
                            <input type="text" name="subtitulo" id="subtitulo" class="medium" value="">
                            <span class="f_help">Limite de caracteres 20/<span class="subtitulo"></span></span>
                        </div>
                    </div>
                    <div class="section">
                            <label>Descripcion </label>
                            <span style="color: red;"></span>
                            <div>
                                <textarea name="despro" id="despro" class="large"></textarea>
                                <span class="f_help">
                                    Limite de caracteres 158/
                                    <span class="despro"></span></span>
                            </div>
                        </div>
                      <div class="section">
                            <label>Imagen
                                <small> Imagen Grande </small>
                            </label>
                            <span style="color: red;">Imagen de 346 x 398</span>
                            <div>
                                <input type="file" name="img1" id="img1" />
                            </div>
                        </div>
                     <div class="section">
                            <label>Imagen
                            <small> Imagen Pequeña </small>
                            </label>
                            <span style="color: red;">Imagen de 199 x 199</span>
                            <div>
                                <input type="file" name="img2" id="img2" />
                            </div>
                        </div>
                      <div class="section">
                             <label>Imagen
                            <small> Imagen Pequeña </small>
                            </label>
                            <span style="color: red;">Imagen de 199 x 199</span>
                            <div>
                                <input type="file" name="img3" id="img3" />
                            </div>
                        </div>
                      <div class="section">
                             <label>Imagen
                            <small> Imagen Pequeña </small>
                            </label>
                            <span style="color: red;">Imagen de 199 x 199</span>
                            <div>
                                <input type="file" name="img4" id="img4" />
                            </div>
                        </div>

                        <p>&nbsp;</p> 
                        <div>
                            <input type="hidden" name="id" value="<?php echo $subinfo["idcms_industrias_subcategotias"] ?>" />
                            <input type="submit" value="Guardar" class="uibutton" />
                        </div>
                        <p>&nbsp;</p>  

                    </form>
                <?php } else { ?>
                    <label>Ya existen los 10 productos permitidos</label><?php } ?>

                <div class="tableName toolbar">
                    <table class="display data_table2" >
                        <thead>
                            <tr>
                                <th><div class="th_wrapp">Nombre</div></th>
                                <th><div class="th_wrapp">Imagen Grande</div></th>	
                                <th><div class="th_wrapp">Acciones</div></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            for ($i = 0; $i <= $fil - 1; $i++) {
                                $img = $db->results[$i];
                                ?>
                                <tr class="odd gradeX">
                                    <td class="center" width="70px"><?php echo $proinfo[$i]["nombre_industrias_subcategorias"] ?></td>
                                    <td class="center" width="70px"><img src="../../../../images/<?php echo $proinfo[$i]["img1_industrias_productos"] ?>" width="232" /></td>
                                    <td class="center" width="100px">
                                        <a id="<?php echo $proinfo[$i]["idcms_industrias_productos"] ?>" class="Delete uibutton special" tableToDelete="cms_industrias_productos" nameField="idcms_industrias_productos">Eliminar</a>
                                        <a class="uibutton"   href="index.php?seccion=editpro&id=<?php echo $proinfo[$i]["idcms_industrias_productos"] ?>&sub=<?php echo $subinfo["idcms_industrias_subcategotias"] ?>">Editar</a>

                                    </td>  
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
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