<?php
if (isset($_GET["id_del"])) {

    if ($_GET["confirm"] == base64_encode(md5($_GET["id_del"]))) {

        $db->doQuery("DELETE FROM bullet_contactenos WHERE id=" . (int) $_GET["id_del"], DELETE_QUERY);
    }
}
?>
<?php
$db->doQuery("SELECT * FROM bullet_contactenos WHERE servicio=1 ORDER BY id DESC", SELECT_QUERY);
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
    <div class="header"><span><span class="ico gray window"></span>SERVICIOS >> GANADR&Iacute;A Y EQUINOS >> CONTENIDO</span>
    </div><!-- End header -->
    <div class="content">

        <div class="formEl_b">
            <?php if (count($dataAll) < 4) { ?>
                <a class="uibutton normal" href="index.php?seccion=servicios&id=0">Agregar nuevo contenido</a>
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
                    $db->doQuery("SELECT * FROM bullet_contactenos WHERE servicio=1 ORDER BY id DESC", SELECT_QUERY);
                    $dataAll = $db->results;
                    for ($i = 0, $tot = count($dataAll); $i < $tot; $i++) {
                        $data = $dataAll[$i];
                        ?>
                        <tr class="odd gradeX">                                                                                 
                            <td class="center titulo" width="100px"><?php echo $data["bullet"] ?></td>
                            <td class="center titulo" width="100px">
                                <a class="uibutton icon edit" href="index.php?seccion=servicios&id=<?php echo $data["id"] ?>">Editar</a>
                                <a class="uibutton icon special edit " onclick="return confirmar();" href="index.php?seccion=lista&id_del=<?php echo $data["id"] ?>&confirm=<?php echo base64_encode(md5($data["id"])) ?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>

    </div>
</div>