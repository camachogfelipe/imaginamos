<?php
if (isset($_GET["id_del"])) {
    if ($_GET["confirm"] == base64_encode(md5($_GET["id_del"]))) {
        $db->doQuery("SELECT * FROM footer", SELECT_QUERY);
        $todos = $db->results;
        if (count($todos) > 1) {
            $db->doQuery("DELETE FROM footer WHERE id=" . (int) $_GET["id_del"], DELETE_QUERY);
        } else {
            $valor = 0;
        }
    }
}
?>
<?php
$db->doQuery("SELECT * FROM footer ORDER BY id ASC", SELECT_QUERY);
$dataAll = $db->results;
?>
<script type="text/javascript" language="javascript">
    function confirmar() {
        var answer = confirm("¿Desea borrar el contacto?");
        if (answer) {
            return true;
        } else
            return false;
    }
</script>
<!-- full width -->
<div class="widget">
    <div class="header"><span><span class="ico gray window"></span>HOME >> FOOTER >> TODAS LAS P&Aacute;GINAS</span>
    </div><!-- End header -->
    <div class="content">
        <div class="formEl_b">
            <a class="uibutton normal" href="index.php?seccion=contacto&id=0">Agregar nuevo contacto</a>
            <table class="display" >
                <thead>
                    <tr>
                        <th><span class="th_wrapp">Ciudad</span></th>
                        <th><span class="th_wrapp">Direcci&oacute;n</span></th>
                        <th><span class="th_wrapp">Tel&eacute;fono</span></th>
                        <th><span class="th_wrapp">Fax</span></th>
                        <th><span class="th_wrapp">Correo</span></th>
                        <th><span class="th_wrapp">Acciones</span></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $db->doQuery("SELECT * FROM footer ORDER BY id ASC", SELECT_QUERY);
                    $dataAll = $db->results;
                    for ($i = 0, $tot = count($dataAll); $i < $tot; $i++) {
                        $data = $dataAll[$i];
                        ?>
                        <tr class="odd gradeX">
                               <td class="center titulo" width="100px"><?php echo $data["titulo"] ?></td>
                               <td class="center titulo" width="100px"><?php echo $data["direccion"] ?></td>
                               <td class="center titulo" width="100px"><?php echo $data["telefono"] ?></td>
                               <td class="center titulo" width="100px"><?php echo $data["fax"] ?></td>
                               <td class="center titulo" width="100px"><?php echo $data["correo"] ?></td>
                            <td class="center titulo" width="100px">
                                <a class="uibutton icon edit" href="index.php?seccion=contacto&id=<?php echo $data["id"] ?>">Editar</a>
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
        ?><script>showError('Mínimo un contacto',3000);</script>
        <?php
    }
}
?>