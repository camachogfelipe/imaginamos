<?php
if (isset($_GET["id_del"])) {
    if ($_GET["confirm"] == base64_encode(md5($_GET["id_del"]))) {
        $db->doQuery("SELECT * FROM recetas", SELECT_QUERY);
        $todos = $db->results;
        if (count($todos) > 1) {
            $db->doQuery("DELETE FROM recetas WHERE id=" . (int) $_GET["id_del"], DELETE_QUERY);
        } else {
            $valor = 0;
        }
    }
}
?>
<?php
$db->doQuery("SELECT * FROM  recetas ORDER BY id ASC", SELECT_QUERY);
$dataAll = $db->results;
?>
<script type="text/javascript" language="javascript">
    function confirmar() {
        var answer = confirm("¿Desea borrar la receta?");
        if (answer) {
            return true;
        } else
            return false;
    }
</script>
<!-- full width -->
<div class="widget">
    <div class="header"><span><span class="ico gray window"></span>RECETAS</span>
    </div><!-- End header -->
    <div class="content">

        <div class="formEl_b">

            <a class="uibutton normal" href="index.php?seccion=productos&id=0">Agregar nueva receta</a>



            <table class="display" >
                <thead>
                    <tr>
                        <th><span class="th_wrapp">Imagen grande</span></th>
                        <th><span class="th_wrapp">Imagen peque&ntilde;a</span></th>
                        <th><span class="th_wrapp">T&iacute;tulo</span></th>                                                                          
                        <th><span class="th_wrapp">Agregar pasos</span></th>                                                                          
                        <th><span class="th_wrapp">Acciones</span></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $db->doQuery("SELECT * FROM recetas ORDER BY id DESC", SELECT_QUERY);
                    $dataAll = $db->results;
                    for ($i = 0, $tot = count($dataAll); $i < $tot; $i++) {
                        $data = $dataAll[$i];
                        ?>
                        <tr class="odd gradeX">
                            <td class="center" width="100px">
                                <img src="../../../../img/recetas/350_300_<?php echo $data["img"] . "?" . rand(0, 9999999); ?>" width="175" height="150" />
                            </td>                                                      
                            <td class="center" width="100px">
                                <img src="../../../../img/recetas/162_152_<?php echo $data["thumb"] . "?" . rand(0, 9999999); ?>" width="162" height="152" />
                            </td>                                                      
                            <td class="center titulo" width="100px"><?php echo $data["titulo"] ?></td> 
                            <td class="center titulo" width="100px">
                                <a class="uibutton icon confirm edit" href="index.php?seccion=subproductos&id=<?php echo $data["id"] ?>">Ver pasos</a><br>
                                <a class="uibutton icon confirm edit" href="index.php?seccion=ingredientes&id=<?php echo $data["id"] ?>">Agregar ingredientes</a><br>
                            </td>
                            <td class="center titulo" width="100px">                                
                                <a class="uibutton icon edit edit" href="index.php?seccion=productos&id=<?php echo $data["id"] ?>">Editar</a><br>
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
    if ($valor == 0) {
        ?><script>showError('Mínimo un producto',3000);</script>
        <?php
    }
}
?>