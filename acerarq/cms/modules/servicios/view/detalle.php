<?php
$cat = $_GET["cat"];
$id = $_GET["id"];
if (isset($_POST["id1"])) {
    $titulo = $_POST["titu"];
    $texto = $_POST["texto"];
    if ($titulo == "" || $texto == "" ) {
        $Erno = 2;
    } else {
            $titulo = str_replace("'", "&#39;" , $titulo);
            $titulo = str_replace('"', "&quot;", $titulo);
            $texto = str_replace("'", "&#39;" , $texto);
            $texto = str_replace('"', "&quot;", $texto);
            $db->doQuery("INSERT INTO servicios_obras(idsubcategoria_obras,titulo,texto) VALUES ('".$id."','" . $titulo . "','" .$texto. "')", 2);
            $Erno = 1;        
    }
}
$cData = "SELECT * FROM servicios_obras WHERE idsubcategoria_obras=".$id;
$db->doQuery($cData, 1);
$fil = count($db->results);
?>
<!-- full width -->
<div class="header">
    <span>
        <span class="ico gray window"></span>Servicios</span>
</div>

<div class="content">
    <div class="formEl_b">
        <!--Inicio del contenido del modulo-->
        <a class="uibutton icon normal answer" href="index.php?seccion=servicios&cat=<?php echo $cat ?>">Atr&aacute;s</a>
        <?php if($fil < 1){ ?>
        <fieldset>
            <form method="post" action="" name="forminterno2" id="forminterno2" enctype="multipart/form-data">
                <input type="hidden" value="1" name="id1" id="id">                
                <div class="section">                                                                                                  
                    <label>Titulo</label>
                    <div>
                        <input type="text" name="titu" id="titu3" class="medium" value="">
                        <span class="f_help">Limite de caracteres 17/<span class="titu3"></span></span>
                    </div>
                </div>
                <div class="section">
                    <label>Texto</label>
                    <div>
                        <textarea name="texto" id="texto" class="large"></textarea>
                    </div>
                </div>
            </form>
            <p>&nbsp;</p>

            <div><a id="submitForm2" onclick="$('#forminterno2').submit();" class="uibutton normal large">Guardar</a></div>

        </fieldset>
        <?php }else{ ?>
        <label>Ya existen el Detalle permitido</label><?php } ?>
        <p>&nbsp;</p>
        <fieldset>
            <div class="tableName toolbar">
                <table class="display data_table2" >
                    <thead>
                        <tr>
                            <th><div class="th_wrapp">Titulo</div></th>	
                            <th><div class="th_wrapp">Acciones</div></th>
                    </tr>
                    </thead>
                    <tbody>
                            <?php                            
                            for ($i = 0; $i < $fil ; $i++) {
                                $data = $db->results[$i];
                                ?>
                            <tr class="odd gradeX">                                
                                <td class="center" width="300px"><?php echo $data["titulo"] ?></td> 
                                <td class="center" width="150px">
                                    <a class="uibutton"   href="index.php?seccion=detalleEdit&cat=<?php echo $cat; ?>&sub=<?php echo $id ?>&id=<?php echo $data["idservicios_obras"] ?>">Editar</a>
                                    <a id="<?php echo $data["idservicios_obras"] ?>" class="Delete uibutton special" tableToDelete="servicios_obras" nameField="idservicios_obras">Eliminar</a>
                                </td>  
                            </tr>
<?php } ?>
                    </tbody>
                </table>
            </div>
        </fieldset>
    </div>
</div>

<!--Fin del Contenido del Modulo-->
<?php
if (isset($Erno)) {
    if (intval($Erno)) {
        $valor = $Erno;
        if ($valor == 2) {
            ?><script>showError('Faltan datos ',3000);</script>
            <?php
        } elseif ($valor == 1) {
            ?><script>showSuccess('Información ingresada',8000)</script>
            <?php
        } elseif ($valor == 3) {
            ?><script>showError('Error al ingresar los datos',8000)</script>
            <?php
        } elseif ($valor == 4) {
            ?><script>showError('No se puede ingresar destacado',8000)</script>
            <?php
        } elseif ($valor == 5) {
            ?><script>showError('No selecciono imagen',8000)</script>
            <?php
        }
    }
}
?>