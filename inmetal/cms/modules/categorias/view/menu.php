<?php
$db->doQuery("SELECT * FROM cms_industrias_categorias  WHERE tipo_industrias_categorias =0 ORDER BY idcms_industrias_categorias DESC", 1);
$fil = $db->rows;
?>

<!-- full width -->
    <div class="header"><span><span class="ico gray window"></span>Industrias</span>
    </div><!-- End header -->
    <div class="content">

        <div class="formEl_b">
            <fieldset>

                <legend><h1>Informacion Categorias</h1></legend>

                <form id="formindu" name="formindu" method="post" action="../controller/add.php" enctype="multipart/form-data" >

                    <div class="imu_info" id="info"></div>


                    <div class="section">                                                                                                  
                        <label>Titulo</label>
                        <span style="color: red;"></span>
                        <div>
                            <input type="text" name="titulo" id="titulo" class="medium" value="">
                            <span class="f_help">Limite de caracteres 35/<span class="titulo"></span></span>
                        </div>
                    </div>


                    <div class="section">
                            <label>Descripcion </label>
                            <span style="color: red;"></span>
                            <div>
                                <textarea name="des" id="des" class="large"></textarea>
                                <span class="f_help">
                                    Limite de caracteres 250/
                                    <span class="des"></span></span>
                            </div>
                        </div>


                    <p>&nbsp;</p> 
                    <div><input type="submit" value="Guardar" class="uibutton" id="submitForm"/></div>
                    <p>&nbsp;</p>                                                               
                </form>

                <p>&nbsp;</p> 
                <p>&nbsp;</p>

                <div class="tableName toolbar">
                    <table class="display data_table2" >
                        <thead>
                            <tr>
                                <th><div class="th_wrapp">Título categoria</div></th>	
                        <th><div class="th_wrapp">Descripcion</div></th>	
                        <th><div class="th_wrapp">Acciones</div></th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                            for ($i = 0; $i <= $fil - 1; $i++) {
                                $cateinfo = $db->results[$i];
                                ?>
                                <tr class="odd gradeX">
                                    <td class="center" width="70px"><?php echo $cateinfo["tiulo_industrias_categorias"] ?></td>
                                    <td class="center" width="70px"><?php echo substr($cateinfo["des_industrias_categorias"],0,80)  ?></td>
                                    <td class="center" width="100px">
                                        <a id="<?php echo $cateinfo["idcms_industrias_categorias"] ?>" class="Delete uibutton special" tableToDelete="cms_industrias_categorias" nameField="idcms_industrias_categorias">Eliminar</a>
                                        <a class="uibutton"   href="index.php?seccion=edit&id=<?php echo $cateinfo["idcms_industrias_categorias"] ?>">Editar</a>
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

        $("#submitForm").click(function(e){
            e.preventDefault();
                loading('Checking');
            $('#preloader').html('Guardando...');
            document.forms["formindu"].submit();
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