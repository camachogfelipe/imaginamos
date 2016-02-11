<?php
if (isset($_GET["id_del"])) {

    if ($_GET["confirm"] == base64_encode(md5($_GET["id_del"]))) {

        $db->doQuery("DELETE FROM slide_english WHERE id=" . (int) $_GET["id_del"], DELETE_QUERY);
    }
}
?>
<?php
$db->doQuery("SELECT * FROM slide_english ORDER BY id ASC", SELECT_QUERY);
$dataAll = $db->results;
?>
<!-- full width -->
<div class="widget">
    <div class="header"><span><span class="ico gray window"></span>ENGLISH >> BANNER</span>
    </div><!-- End header -->
    <div class="content">

        <div class="formEl_b">
            <?php if (count($dataAll) < 10) { ?>
                <a class="uibutton normal" href="index.php?seccion=banner&id=0">Agregar</a>
                <?php
            }
            ?>


            <table class="display" >
                <thead>
                    <tr>
                        <th><span class="th_wrapp">Imagen</span></th>                                
                        <th><span class="th_wrapp">Acciones</span></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $db->doQuery("SELECT * FROM slide_english ORDER BY id ASC", SELECT_QUERY);
                    $dataAll = $db->results;
                    for ($i = 0, $tot = count($dataAll); $i < $tot; $i++) {
                        $data = $dataAll[$i];
                        ?>
                        <tr class="odd gradeX">
                            <td class="center" width="100px">
                                <img src="../../../../imagenes/english/980_380_<?php echo  $data["img"] . "?" . rand(0, 9999999); ?>" height="150" />
                            </td> 
                            <td class="center titulo" width="100px">
                                <a class="uibutton icon edit" href="index.php?seccion=banner&id=<?php echo  $data["id"] ?>">Editar</a>
                                <a class="uibutton icon special edit " onclick="return confirmar();" href="index.php?seccion=menu&id_del=<?php echo  $data["id"] ?>&confirm=<?php echo  base64_encode(md5($data["id"])) ?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>

        </div>

    </div>
</div>