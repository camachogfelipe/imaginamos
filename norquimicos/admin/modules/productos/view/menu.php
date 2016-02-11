<?php
if (isset($_GET["id_del"])) {

    if ($_GET["confirm"] == base64_encode(md5($_GET["id_del"]))) {

        $db->doQuery("DELETE FROM productos WHERE id=" . (int) $_GET["id_del"], DELETE_QUERY);
    }
}
?>
<?php
$db->doQuery("SELECT * FROM productos ORDER BY id DESC", SELECT_QUERY);
$dataAll = $db->results;
?>
<script type="text/javascript" language="javascript">
    function confirmar() {
        var answer = confirm("¿Desea borrar el producto?");
        if (answer) {
            return true;
        } else
            return false;
    }
</script>
<!-- full width -->
<div class="widget">
    <div class="header"><span><span class="ico gray window"></span>PRODUCTOS</span>
    </div><!-- End header -->
    <div class="content">

        <div class="formEl_b">
            
                <a class="uibutton normal" href="index.php?seccion=productos&id=0">Agregar</a>
              


            <table class="display data_table2" >
                <thead>
                    <tr>
                        <th><span class="th_wrapp">Imagen de producto</span></th>                       
                        <th><span class="th_wrapp">Nombre producto</span></th>            
                        <th><span class="th_wrapp">Referencia</span></th>            
                        <th><span class="th_wrapp">Acciones</span></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $db->doQuery("SELECT * FROM productos ORDER BY id ASC", SELECT_QUERY);
                    $dataAll = $db->results;
                    for ($i = 0, $tot = count($dataAll); $i < $tot; $i++) {
                        $data = $dataAll[$i];
                        ?>
                        <tr class="odd gradeX">
                            <td class="center" width="100px">
                                <img src="../../../../imagenes/productos/<?php echo $data["img"]; ?>" height="150" />
                            </td>                         
                            <td class="center titulo" width="100px"><?php echo $data["nombre"] ?></td>                 
                            <td class="center titulo" width="100px"><?php echo $data["referencia"] ?></td>                 

                            <td class="center titulo" width="100px">
                                <a class="uibutton icon edit" href="index.php?seccion=productos&id=<?php echo $data["id"] ?>">Editar</a>
                                <a class="uibutton icon special edit " onclick="return confirmar();" href="index.php?seccion=menu&id_del=<?php echo $data["id"] ?>&confirm=<?php echo base64_encode(md5($data["id"])) ?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>

        </div>

    </div>
</div>



