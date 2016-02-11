<?php
if (!isset($_GET["id"])) {
    echo "<script>window.location.href='index.php?seccion=menu'</script>";
    exit;
} else {
    $db->doQuery("SELECT * FROM recetas WHERE id=" . $_GET["id"], SELECT_QUERY);
    $mas1 = $db->results;
    if (count($mas1) == 0) {
        echo "<script>window.location.href='index.php?seccion=menu'</script>";
        exit;
    }
}
$id = $_GET["id"];
if (isset($_GET["id_del"])) {
    if ($_GET["confirm"] == base64_encode(md5($_GET["id_del"]))) {
        $db->doQuery("SELECT * FROM recetas_preparacion WHERE id_receta=".$id, SELECT_QUERY);
        $todos = $db->results;
        if (count($todos) > 1) {
            $db->doQuery("DELETE FROM recetas_preparacion WHERE id=" . (int) $_GET["id_del"], DELETE_QUERY);
             $valor = 1;
        } else {
            $valor = 0;
        }
    }
}
?>
<?php
$db->doQuery("SELECT * FROM recetas_preparacion WHERE id_receta=".$id, SELECT_QUERY);
$dataAll = $db->results;
?>
<script type="text/javascript" language="javascript">
    function confirmar() {
        var answer = confirm("¿Desea borrar el paso de la receta?");
        if (answer) {
            return true;
        } else
            return false;
    }
</script>
<!-- full width -->
<div class="widget">
    <div class="header"><span><span class="ico gray window"></span>RECETAS  >> PASOS</span>
    </div><!-- End header -->
    <div class="content">

        <div class="formEl_b">
            <a class="uibutton confirm" href="index.php?seccion=menu">Atr&aacute;s</a><br><br>
            <h3>AGREGANDO PASOS PARA " <?php echo utf8_encode($mas1[0]["titulo"]) ?> "</h3><br><br>
            <a class="uibutton normal" href="index.php?seccion=add&id=<?php echo $id?>&ids=0">Agregar nuevo paso</a>
            <table class="display" >
                <thead>
                    <tr>                        
                        <th><span class="th_wrapp">Posici&oacute;n del paso</span></th>                         
                        <th><span class="th_wrapp">Descripci&oacute;n</span></th>                         
                        <th><span class="th_wrapp">Acciones</span></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $db->doQuery("SELECT * FROM recetas_preparacion WHERE id_receta=".$id." ORDER BY id DESC", SELECT_QUERY);
                    $dataAll = $db->results;
                    for ($i = 0, $tot = count($dataAll); $i < $tot; $i++) {
                        $data = $dataAll[$i];
                        ?>
                        <tr class="odd gradeX">                                                                              
                            <td class="center titulo" width="100px">Paso n&uacute;mero <?php echo $i+1 ?></td>                            
                            <td class="center titulo" width="100px"><?php echo $data["pasos"] ?></td>                            
                            <td class="center titulo" width="100px">      
                                
                                <a class="uibutton icon edit edit" href="index.php?seccion=add&id=<?php echo $id?>&ids=<?php echo $data["id"] ?>">Editar</a><br>
                                <a class="uibutton icon special edit " onclick="return confirmar();" href="index.php?seccion=subproductos&id=<?php echo $_GET["id"]?>&id_del=<?php echo $data["id"] ?>&confirm=<?php echo base64_encode(md5($data["id"])) ?>">Eliminar</a>
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
        ?><script>showError('Mínimo un subproducto',3000);</script>
        <?php
    }
    if ($valor == 1) {
        ?><script>showSuccess('Eliminado correctamente',3000);</script>
        <?php
    }
}
?>