<?php
if (isset($_GET["id"]) && isset($_GET["activo"])) {
//    if ($_GET["confirm"] == base64_encode(md5($_GET["id"]))) {     
            $db->doQuery("UPDATE usuarios SET activo=".$_GET["activo"]." WHERE id=" . (int) $_GET["id"], UPDATE_QUERY);
//        } 
}

if (isset($_GET["id_del"])){
    
    $db->doQuery("DELETE FROM usuarios WHERE id=".(int)$_GET["id_del"], DELETE_QUERY);
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
        <div class="header"><span><span class="ico gray window"></span>SOLICITUDES</span>
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
                        <th><span class="th_wrapp">Mensaje</span></th> 
                        <th><span class="th_wrapp">Aprobado/En espera</span></th>
                        <th><span class="th_wrapp">Eliminar</span></th> 
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $db->doQuery("SELECT * FROM usuarios ORDER BY id DESC", SELECT_QUERY);
                    $dataAll = $db->results;
                    for ($i = 0, $tot = count($dataAll); $i < $tot; $i++) {
                        $data = $dataAll[$i];
                        ?>
                        <tr class="odd gradeX">
                                                                           
                            <td class="center titulo" width="100px"><?php echo utf8_decode(utf8_encode($data["nombres"])) ?></td>
                            <td class="center titulo" width="80px"><?php echo utf8_decode($data["empresa"]) ?></td>
                            <td class="center titulo" width="100px"><?php echo utf8_decode($data["correo"]) ?></td>
                            <td class="center titulo" width="50px"><?php echo $data["telefono"] ?></td>
                            <td class="center titulo" width="100px"><?php echo $data["mensaje"] ?></td>
                            <td class="center titulo" width="120px"><?php
                            
                            if($data["activo"] == 1){
                                
                                ?>
                                
                                <a class="uibutton icon edit" href="index.php?seccion=menu&id=<?php echo $data["id"] ?>&activo=0">Aprobado</a>
                                
                                <?php
                            }else{
                                
                                ?>
                                
                                <a class="uibutton icon special edit" href="index.php?seccion=menu&id=<?php echo $data["id"]?>&activo=1">En espera</a>
                                
                                <?php
                            }
                                 
                                    
                                    ?></td> 
                            <td class="center titulo" width="80px"><a class="uibutton special" href="index.php?seccion=menu&id_del=<?php echo $data["id"]?>">x Eliminar</a></td>
                           
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