<?php
if (isset($_GET['id'])) {

    $id = $_GET['id'];
}

$db->doQuery("SELECT * FROM cms_industrias_categorias WHERE idcms_industrias_categorias='" . $id . "'", 1);
$cateinfo = $db->results[0];

//Creamos el nuevo objeto "Database"
$db1 = new Database();
//Conectamos
$db1->connect();
$db1->doQuery("SELECT * FROM cms_industrias_subcategotias WHERE id_indsutrias_categorias='" . $id. "'", 1);
$fil = $db1->rows;

?>

<!-- full width -->
 <div class="header"><span><span class="ico gray window"></span>Categoria</span>
    </div><!-- End header -->
    <div class="content">

        <div class="formEl_b">



            <fieldset>

                <legend><h1>Categoria <?php echo $cateinfo["tiulo_industrias_categorias"] ?></h1></legend>

                <form id="formindu" name="formindu" method="post" action="../controller/save.php" enctype="multipart/form-data">

                    <div class="imu_info" id="info"></div>


                    <div class="section">                                                                                                  
                        <label>Titulo</label>
                        <span style="color: red;"></span>
                        <div>
                            <input type="text" name="titulo" id="titulo" class="medium" value="<?php echo $cateinfo["tiulo_industrias_categorias"] ?>">
                            <span class="f_help">Limite de caracteres 35/<span class="titulo"></span></span>
                        </div>
                    </div>


                    <div class="section">
                            <label>Descripcion </label>
                            <span style="color: red;"></span>
                            <div>
                                <textarea name="des" id="des" class="large"><?php echo $cateinfo["des_industrias_categorias"] ?></textarea>
                                <span class="f_help">
                                    Limite de caracteres 250/
                                    <span class="des"></span></span>
                            </div>
                        </div>


                    <p>&nbsp;</p> 
                    <div>
                        <input type="hidden" name="id" value="<?php echo $cateinfo["idcms_industrias_categorias"] ?>"/>
                        <input type="submit" value="Guardar" class="uibutton" id="submitForm"/>
                        <a class="uibutton icon normal answer" href="index.php">Atr&aacute;s</a> 
                    </div>
                    <p>&nbsp;</p>    
                                                                         
                </form>                                
            </fieldset>

            <br/>
            <br/>

            <fieldset>

                <legend><h1>Subcategorias</h1></legend>
                <form id="form" name="form" method="post" action="../controller/addsub.php" enctype="multipart/form-data">

                    <div class="imu_info" id="infe"></div>

                    <?php if($fil < 7) {?>
                    <div class="section">
                        <label>Titulo</label>
                        <span style="color: red;"></span>
                        <div>
                            <input type="text" name="titulop" id="titulop" class="medium" value="">
                            <span class="f_help">Limite de caracteres 22/<span class="titulop"></span></span>
                        </div>
                    </div>
                    <p>&nbsp;</p> 
                    <div>
                        <input type="hidden" name="id" value="<?php echo $cateinfo["idcms_industrias_categorias"] ?>" />
                        <input type="submit" value="Guardar" class="uibutton" id="submitForm1" />
                    </div>
                    <p>&nbsp;</p>  
                    <?php }else{ ?>
                        
                    <label>Ya existen Las 7 subcategorias permitidas</label>
                    
                    <?php } ?>

                </form>


                <div class="tableName toolbar">
                    <table class="display data_table2" >
                        <thead>
                            <tr>
                                <th><div class="th_wrapp">Titulo Subcategorias</div></th>
                                <th><div class="th_wrapp">Acciones</div></th>
                        </tr>
                        </thead>
                        <tbody>
                                <?php

                                for ($i = 0; $i <= $fil - 1; $i++) {
                                    $sub = $db1->results[$i];
                                 ?>
                                <tr class="odd gradeX">
                                    <td class="center" width="70px"><?php echo $sub["titulo_industrias_subcategorias"] ?></td>
                                    <td class="center" width="100px">
                                        <a id="<?php echo $sub["idcms_industrias_subcategotias"] ?>" class="Delete uibutton special" tableToDelete="cms_industrias_subcategotias" nameField="idcms_industrias_subcategotias">Eliminar</a>
                                        <a class="uibutton"   href="index.php?seccion=editsub&id=<?php echo $sub["idcms_industrias_subcategotias"] ?>&cat=<?php echo $cateinfo["idcms_industrias_categorias"] ?>">Editar</a>

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
