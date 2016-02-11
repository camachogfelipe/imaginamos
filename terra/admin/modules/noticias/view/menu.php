<?php
if (isset($_GET["id_del"])) {

    if ($_GET["confirm"] == base64_encode(md5($_GET["id_del"]))) {

        $db->doQuery("DELETE FROM noticias WHERE id=" . (int) $_GET["id_del"], DELETE_QUERY);
    }
}
?>
<?php
$db->doQuery("SELECT * FROM noticias ORDER BY id ASC", SELECT_QUERY);
$dataAll = $db->results;
?>
<script type="text/javascript" language="javascript">
    function confirmar() {
        var answer = confirm("¿Desea borrar la noticia?");
        if (answer) {
            return true;
        } else
            return false;
    }
</script>
<!-- full width -->
<div class="widget">
    <div class="header"><span><span class="ico gray window"></span>NOTICIAS</span>
    </div><!-- End header -->
    <div class="content">

        <div class="formEl_b">

            <a class="uibutton normal" href="index.php?seccion=noticia&id=0">Agregar nueva noticia</a>



            <table class="display" >
                <thead>
                    <tr>
                        <th><span class="th_wrapp">Imagen</span></th>
                        <th><span class="th_wrapp">T&iacute;tulo</span></th>
                        <th><span class="th_wrapp">Fecha</span></th>
                        <th><span class="th_wrapp">Posicion</span></th>
                        <th><span class="th_wrapp">Acciones</span></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $db->doQuery("SELECT * FROM noticias ORDER BY id DESC", SELECT_QUERY);
                    $dataAll = $db->results;
                    for ($i = 0, $tot = count($dataAll); $i < $tot; $i++) {
                        $data = $dataAll[$i];
                        ?>
                        <tr class="odd gradeX">
                            <td class="center" width="100px">
                                <img src="../../../../img/noticias/300_200_<?php echo $data["img"] . "?" . rand(0, 9999999); ?>" width="300" height="200" />
                            </td>                                                      
                            <td class="center titulo" width="100px"><?php echo $data["titulo"] ?></td>
                            <td class="center titulo" width="100px"><?php echo $data["fecha"] ?></td>
                            <td class="center titulo" width="100px">
                                <?php
                                if ($data["posicion"] == 1) {
                                    echo "Ganader&iacute;a y equinos";
                                } else if ($data["posicion"] == 2) {
                                    echo "Piscicultura";
                                } else {
                                    echo "Agroindustria";
                                }
                                ?>
                              </td>
                            <td class="center titulo" width="100px">
                                <a class="uibutton icon edit" href="index.php?seccion=noticia&id=<?php echo $data["id"] ?>">Editar</a>
                                <a class="uibutton icon special edit " onclick="return confirmar();" href="index.php?seccion=menu&id_del=<?php echo $data["id"] ?>&confirm=<?php echo base64_encode(md5($data["id"])) ?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>

    </div>
</div>