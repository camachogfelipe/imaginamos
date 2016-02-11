<?php
if (isset($_GET["id_del"])) {
    if ($_GET["confirm"] == base64_encode(md5($_GET["id_del"]))) {
        $db->doQuery("SELECT * FROM banner ORDER BY id ASC", SELECT_QUERY);
        $todos = $db->results;
        if (count($todos) > 1) {
            $db->doQuery("DELETE FROM banner WHERE id=" . (int) $_GET["id_del"], DELETE_QUERY);
        } else {
            $valor = 0;
        }
    }
}
?>
<?php
$db->doQuery("SELECT * FROM banner ORDER BY id ASC", SELECT_QUERY);
$dataAll = $db->results;
?>
<script type="text/javascript" language="javascript">
    function confirmar() {
        var answer = confirm("¿Desea borrar el banner?");
        if (answer) {
            return true;
        } else
            return false;
    }
</script>
<!-- full width -->
<div class="widget">
    <div class="header"><span><span class="ico gray window"></span>HOME >> BANNER</span>
    </div><!-- End header -->
    <div class="content">

        <div class="formEl_b">
            <?php if (count($dataAll) < 5) { ?>
                <a class="uibutton normal" href="index.php?seccion=banner&id=0">Agregar nuevo banner</a>
                <?php
            }
            ?>


            <table class="display" >
                <thead>
                    <tr>
                        <th><span class="th_wrapp">Imagen</span></th>
                        <th><span class="th_wrapp">T&iacute;tulo</span></th>
                        <th><span class="th_wrapp">Acciones</span></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $db->doQuery("SELECT * FROM banner ORDER BY id ASC", SELECT_QUERY);
                    $dataAll = $db->results;
                    for ($i = 0, $tot = count($dataAll); $i < $tot; $i++) {
                        $data = $dataAll[$i];
                        ?>
                        <tr class="odd gradeX">
                            <td class="center" width="100px">
                                <img src="../../../../img/banner/1349_608_<?php echo $data["img"] . "?" . rand(0, 9999999); ?>" width="449" height="202" />
                            </td>                                                      
                            <td class="center titulo" width="100px"><?php echo $data["titulo"] ?></td>
                            <td class="center titulo" width="100px">
                                <a class="uibutton icon edit" href="index.php?seccion=banner&id=<?php echo $data["id"] ?>">Editar</a>
                                <a class="uibutton icon special edit " onclick="return confirmar();" href="index.php?seccion=menu&id_del=<?php echo $data["id"] ?>&confirm=<?php echo base64_encode(md5($data["id"])) ?>">Eliminar</a>
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
        if ($erno =="0") {
            echo '<script>setTimeout(\'alert("Debes dejar mínimo 1 banner");\',400);</script>';
               
    }
}
?>