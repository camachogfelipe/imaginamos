<?php
if (isset($_GET["id_del"])) {

    if ($_GET["confirm"] == base64_encode(md5($_GET["id_del"]))) {
        $db->doQuery("SELECT * FROM bullet_contactenos WHERE posicion=2 ORDER BY id DESC", SELECT_QUERY);
        $dataAll1 = $db->results;
        if (count($dataAll1) > 1) {
            $db->doQuery("DELETE FROM bullet_contactenos WHERE id=" . (int) $_GET["id_del"], DELETE_QUERY);
        } else {
            $valor = 0;
        }
    }
}
?>
<?php
$db->doQuery("SELECT * FROM bullet_contactenos WHERE posicion=2 ORDER BY id DESC", SELECT_QUERY);
$dataAll = $db->results;
?>
<script type="text/javascript" language="javascript">
    function confirmar() {
        var answer = confirm("¿Desea borrar el item?");
        if (answer) {
            return true;
        } else
            return false;
    }
</script>
<!-- full width -->
<div class="widget">
    <div class="header"><span><span class="ico gray window"></span>CONT&Aacute;CTENOS</span>
    </div><!-- End header -->
    <div class="content">
        <a class="uibutton confirm" href="index.php">Atr&aacute;s</a><br><br>
        <div class="formEl_b">
            <?php if (count($dataAll) < 4) { ?>
                <a class="uibutton normal" href="index.php?seccion=servicios2&id=0">Agregar nuevo contenido</a>
                <?php
            }
            ?>


            <table class="display" >
                <thead>
                    <tr>                        
                        <th><span class="th_wrapp">T&iacute;tulo</span></th>
                        <th><span class="th_wrapp">Acciones</span></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $db->doQuery("SELECT * FROM bullet_contactenos WHERE posicion=2 ORDER BY id DESC", SELECT_QUERY);
                    $dataAll = $db->results;
                    for ($i = 0, $tot = count($dataAll); $i < $tot; $i++) {
                        $data = $dataAll[$i];
                        ?>
                        <tr class="odd gradeX">                                                                                 
                            <td class="center titulo" width="100px"><?php echo $data["bullet"] ?></td>
                            <td class="center titulo" width="100px">
                                <a class="uibutton icon edit" href="index.php?seccion=servicios2&id=<?php echo $data["id"] ?>">Editar</a>
                                <a class="uibutton icon special edit " onclick="return confirmar();" href="index.php?seccion=lista2&id_del=<?php echo $data["id"] ?>&confirm=<?php echo base64_encode(md5($data["id"])) ?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>

    </div>
</div>
<?php
if (isset($valor)) {
    $erno = $valor;
    if ($erno == 0) {
        echo '<script>setTimeout(\'alert("Mínimo 1 item");\',400);</script>';
    }
}
?>