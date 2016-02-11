<?php
if (isset($_GET["ide"])) {
    $id1 = $_GET["ide"];
} else {
    $id1 = 0;
}

if (isset($_POST["id"])) {
    $id1 = $_POST["id"];
    if ($id1 == 0) {
        //Primero creamos el campo en la bd
        $db->doQuery("INSERT INTO ingredientes (id,id_recetas) VALUES (NULL," . GetData("bandera") . ")", INSERT_QUERY);

        $id1 = $db->getLastId();
        $db->doQuery("UPDATE ingredientes SET ingrediente ='" . GetData("ingrediente") . "'  WHERE id=" . $id1, 4);
        $val = 1;
    } else {
        $db->doQuery("UPDATE ingredientes SET ingrediente ='" . GetData("ingrediente") . "'  WHERE id=" . $id1, 4);
        //subimos la imagen 
        $val = 2;
    }
}
if (isset($_GET["id_del"])) {
    if ($_GET["confirm"] == base64_encode(md5($_GET["id_del"]))) {
        $db->doQuery("SELECT * FROM ingredientes", 1);
        $todo = $db->results;
        if (count($todo) > 1) {
            $db->doQuery("DELETE FROM ingredientes WHERE id=" . (int) $_GET["id_del"], DELETE_QUERY);
            $val = 3;
        } else {
            $val = 7;
        }
    }
}
?>
<?php
// Consultamos la img actual del banner
//echo "SELECT * FROM cata_nombres WHERE id=" . $id;

$db->doQuery("SELECT * FROM ingredientes WHERE id=" . $id1, 1);
$oficina = $db->results[0];
?>
<div class="widget" >
    <div class="header">
        <span>
            <span class="ico gray window"></span>
            RECETAS >> INGREDIENTES
        </span>
    </div>
    <div class="content">
        <div class="formEl_b">
            <!--Inicio del contenido del modulo-->
            <a class="uibutton icon normal answer" href="index.php?seccion=menu">Atr&aacute;s</a>
            <a class="uibutton  confirm answer" href="index.php?seccion=ingredientes&id=<?php echo $_GET["id"]?>">Nuevo ingrediente</a><br><br>
            
            <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">
                <input type="hidden" value="<?php echo $id1 ?>" name="id" id="id">                               
                <input type="hidden" value="<?php echo $_GET["id"] ?>" name="bandera" id="bandera">                               

                <div style="margin-top: 21px;">
                    <label>Agregar ingredientes</label>
                    <div>
                        <input type="text" id="titulo1" class=" large validate[required]" name="ingrediente" data-validation-placeholder="" PlaceHolder="Agregar ingrediente" style="margin-left: 200px;margin-top: -25px;" value="<?php echo $oficina["ingrediente"] ?>" />
                        <!--<span class="f_help" style="margin-left: 200px;"> Limite caracteres 30  / <span class="titulo1"></span></span>-->
                    </div>
                </div>

            </form>
            </fieldset>

        </div>
        <div class="bt_enviar"><a id="submitForm" onclick="$('#forminterno').submit();" class="uibutton normal large">Guardar</a></div><br><br>


        <div class="tableName toolbar">
            <table class="display data_table2" >
                <thead>
                    <tr>                        
                        <th><span class="th_wrapp">Ingrediente</span></th>     
                        <th><span class="th_wrapp">Acciones</span></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $db->doQuery("SELECT * FROM ingredientes WHERE id_recetas=" . $_GET["id"] . "  ORDER BY id DESC", SELECT_QUERY);
                    $dataAll = $db->results;
                    for ($i = 0, $tot = count($dataAll); $i < $tot; $i++) {
                        $data = $dataAll[$i];
                        ?>
                        <tr class="odd gradeX">
                            <td class="center titulo" width="100px"><?php echo $data["ingrediente"] ?></td>                 
                            <td class="center titulo" width="100px">
                                <a class="uibutton icon edit" href="index.php?seccion=ingredientes&ide=<?php echo $data["id"] ?>&id=<?php echo $_GET["id"] ?>">Editar</a>
                                <a class="uibutton icon special edit " onclick="return confirmar();" href="index.php?seccion=ingredientes&id=<?php echo $_GET["id"] ?>&id_del=<?php echo $data["id"] ?>&confirm=<?php echo base64_encode(md5($data["id"])) ?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>

    </div>
</div>


<!--Fin del Contenido del Modulo-->
</div>
<script type="text/javascript" language="javascript">
    //$('#titulo1').limit('30', '.titulo1');
    $('#texto_eng').limit('60', '.texto_eng');
</script>

<?php
if (isset($val)) {
    if ($val == 1) {
        ?><script>showSuccess('Agregado correctamente',3000);</script>
        <?php
    }
    if ($val == 2) {
        ?><script>showSuccess('Editado correctamente',3000);</script>
        <?php
    }
    if ($val == 3) {
        ?><script>showError('Eliminado correctamente',3000);</script>
        <?php
    }
    if ($val == 7) {
        ?><script>showError('Mínimo 1 ingrediente',3000);</script>
        <?php
    }
}
?>
