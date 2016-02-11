<?php
if (isset($_GET["id_del"])) {
    if ($_GET["confirm"] == base64_encode(md5($_GET["id_del"]))) {
        $db->doQuery("DELETE FROM imagenes WHERE id=" . (int) $_GET["id_del"], DELETE_QUERY);
    }
}
?>
<?php
// Validamos si hizo post y desea subir una imagen
if (isset($_POST["id"])) {
    $id = $_POST["id"];
    if ($id == 0) {
        //Primero creamos el campo en la bd
        $db->doQuery("INSERT INTO imagenes (id,id_lineas_img) VALUES (NULL," . GetData("band") . ")", INSERT_QUERY);
        $id = $db->getLastId();
        $retorno = ClassFile::UploadImagenFile("img", "../../../../imagenes/marcas", "marcas_" . $id, "80_76_marcas_" . $id, 80, 76);
        if ($retorno["Status"] == "Uploader") {
            //  echo $retorno["NameFile"];
            $db->doQuery("UPDATE imagenes SET img='" . $retorno["NameFile"] . "' WHERE id=" . $id, 4);
            $val = 1;
        } else {
            //  echo $retorno["Error"];
            $val = 2;
        }
    }
}
?>
<script type="text/javascript" language="javascript">
    function confirmar() {
        var answer = confirm("¿Desea borrar marca?");
        if (answer) {
            return true;
        } else
            return false;
    }
</script>

<!-- full width -->
<div class="widget">
    <div class="header">
        <span>
            <span class="ico gray window"></span>
            LINEAS DE NEGOCIO
        </span>
    </div>
    <div class="content">
        <div class="formEl_b">
             <a class="uibutton icon normal answer" href="index.php?seccion=subcat&id=<?php echo  $_GET["band"] ?>">Atr&aacute;s</a>
            <fieldset>
                <h3>Agregando</h3>
                <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">
                    <input type="hidden" value="0" name="id" id="id">
                    <input type="hidden" value="<?php echo  $_GET["id"] ?>" name="band" id="band">
                    <div style="margin-left: 200px;margin-top: 44px;">
                        <label style="position: absolute;margin-left: -201px;">Imagen marcas</label>
                        <label style="color:red;">Subir imagen ( 80px  x  76px )</label><br><br>
                        <div>
                            <input type="file" name="img" id="img" />
                        </div>
                    </div>       

                     <div><a id="submitForm" onclick="$('#forminterno').submit();" class="uibutton normal large">Guardar</a></div>
                </form>
            </fieldset>
            <p>&nbsp;</p>      

        </div>
        <fieldset>

            <br><br>      

            <table class="display" >
                <thead>
                    <tr>                        
                        <th><span class="th_wrapp">Marcas</span></th>                                            
                        <th><span class="th_wrapp">Acciones</span></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $db->doQuery("SELECT * FROM imagenes WHERE id_lineas_img=" . $_GET["id"] . " ORDER BY id DESC", SELECT_QUERY);
                    $dataAll = $db->results;
                    for ($i = 0, $tot = count($dataAll); $i < $tot; $i++) {
                        $data = $dataAll[$i];
                        ?>
                        <tr class="odd gradeX">
                            <td class="center" width="100px">
                                <img src="../../../../imagenes/marcas/80_76_<?php echo  $data["img"] . "?" . rand(0, 9999999); ?>" height="150" />
                            </td>               
                            <td class="center titulo" width="100px">
                                <a class="uibutton icon special edit " onclick="return confirmar();" href="index.php?seccion=fin&band=<?php echo  $_GET["band"] ?>&id=<?php echo  $_GET["id"] ?>&id_del=<?php echo  $data["id"] ?>&confirm=<?php echo  base64_encode(md5($data["id"])) ?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </fieldset>
    </div>  
    <!--Fin del Contenido del Modulo-->
</div>
<script>
    cambiar(<?php echo  $oficina["id_tipos"] ?>);
</script>
<?php
if (isset($val)) {
    $erno = $val;
    if (intval($erno)) {
        if ($erno == 1) {
            echo '<script>setTimeout(\'alert("Agregado correctamente");\',400);</script>';
        }
        if ($erno == 2) {
            echo '<script>setTimeout(\'alert("Destacado editado correctamente");\',400);</script>';
        }
        if ($erno == 3) {
            echo '<script>setTimeout(\'alert("");\',400);</script>';
        }
    }
}
?>
<script type="text/javascript" language="javascript">
    $('#titulos').limit("50", ".titulos");
   
</script>