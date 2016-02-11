<?php
if (isset($_GET["id_del"])) {
    if ($_GET["confirm"] == base64_encode(md5($_GET["id_del"]))) {     
            $db->doQuery("DELETE FROM formulario WHERE id=" . (int) $_GET["id_del"], DELETE_QUERY);
        } 
}
?>
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
    <div class="header"><span><span class="ico gray window"></span>CONT&Aacute;CTENOS >> FORMULARIO</span>
    </div><!-- End header -->
    <div class="content">

        <div class="formEl_b">         
            <a class="uibutton icon confirm answer" href="../solicitudes.php">Descargar solicitudes</a>

            <table class="display" >
                <thead>
                    <tr>
                        <th><span class="th_wrapp">Nombre</span></th>
                        <th><span class="th_wrapp">Empresa</span></th>
                        <th><span class="th_wrapp">Correo electr&oacute;nico</span></th>
                        <th><span class="th_wrapp">Tel&eacute;fono</span></th>                      
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $db->doQuery("SELECT * FROM formulario ORDER BY Ud DESC", SELECT_QUERY);
                    $dataAll = $db->results;
                    for ($i = 0, $tot = count($dataAll); $i < $tot; $i++) {
                        $data = $dataAll[$i];
                        ?>
                        <tr class="odd gradeX">
                                                                           
                            <td class="center titulo" width="100px"><?php echo utf8_decode($data["nombre"]) ?></td>
                            <td class="center titulo" width="100px"><?php echo utf8_decode($data["empresa"]) ?></td>
                            <td class="center titulo" width="100px"><?php echo utf8_decode($data["email"]) ?></td>
                            <td class="center titulo" width="100px"><?php echo $data["telefono"] ?></td>                           
                           
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