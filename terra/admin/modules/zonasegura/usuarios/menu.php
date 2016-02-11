<script type="text/javascript" language="javascript">
    function confirmar() {
        var answer = confirm("�Desea borrar?");
        if (answer) {
            return true;
        } else
            return false;
    }
</script>
<!-- full width -->
<div class="widget">
        <div class="header"><span><span class="ico gray window"></span>SOLICITUDES</span>
    </div><!-- End header -->
    <div class="content">

        <div class="formEl_b">
            <table class="display" >
                <thead>
                    <tr>
                        <th><span class="th_wrapp">Nombre</span></th>
                        <th><span class="th_wrapp">Empresa</span></th>
                        <th><span class="th_wrapp">Correo electr&oacute;nico</span></th>
                        <th><span class="th_wrapp">Tel&eacute;fono</span></th>
                        <th><span class="th_wrapp">Archivos</span></th> 
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $db->doQuery("SELECT * FROM usuarios WHERE activo='1' ORDER BY id DESC", SELECT_QUERY);
                    $dataAll = $db->results;
                    for ($i = 0, $tot = count($dataAll); $i < $tot; $i++) {
                        $data = $dataAll[$i];
                        ?>
                        <tr class="odd gradeX">
                                                                           
                            <td class="center titulo" width="100px"><?php echo utf8_decode(utf8_encode($data["nombres"])) ?></td>
                            <td class="center titulo" width="80px"><?php echo utf8_decode($data["empresa"]) ?></td>
                            <td class="center titulo" width="100px"><?php echo utf8_decode($data["correo"]) ?></td>
                            <td class="center titulo" width="50px"><?php echo $data["telefono"] ?></td>
                            <td class="center titulo" width="120px">
                            	<a class="uibutton icon edit" href="<?= $result[0]['config_path'] ?>modules/zonasegura/usuarios/pdf/index.php?seccion=archivos&idu=<?= $data["id"] ?>">Archivos</a>
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
    if ($erno == "0") {
        echo '<script>setTimeout(\'alert("Debes dejar mínimo 1 banner");\',400);</script>';
    }
}
?>