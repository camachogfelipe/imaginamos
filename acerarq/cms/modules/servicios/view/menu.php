<?php
$db->doQuery("SELECT * FROM categoria_obras ORDER BY idcategoria_obras ASC",1);
$fil = $db->rows;
?>

<!-- full width -->
<div class="header">
    <span><span class="ico gray window"></span>Servicios</span>
</div>

<div class="content">
    <div class="formEl_b">
        <!--Inicio del contenido del modulo-->
        <fieldset>
            <table class="display" >
            <thead>
                <tr>
                    <th><span class="th_wrapp">Titulo</span></th>
                    <th><span class="th_wrapp">Obras</span></th>
                    <th><span class="th_wrapp">Servicios</span></th>
                </tr>
            </thead>
            <tbody>
                    <?php for($i = 0 ; $i < $fil ; $i++){ 
                        $data = $db->results[$i]; ?>
                    <tr class="odd gradeX">
                        <td class="center" width="150px">
                            <?php echo $data["titulo"]; ?>
                        </td>
                        <td><a class="uibutton icon add"  href="index.php?seccion=obras&cat=<?php echo $data["idcategoria_obras"] ?>">Editar</a><br/>                                    
                        <td><a class="uibutton icon add"  href="index.php?seccion=servicios&cat=<?php echo $data["idcategoria_obras"] ?>">Servicios</a><br/>                                                            
                    </tr>
                    <?php } ?>
            </tbody>
        </table>
        </fieldset>
        <p>&nbsp;</p>
    </div>
</div>

<!--Fin del Contenido del Modulo-->
<?php
if (isset($Erno)) {
    if (intval($Erno)) {
        $valor = $Erno;
        if ($valor == 2) {
            ?><script>showError('Faltan datos ',3000);</script>
            <?php
        } elseif ($valor == 1) {
            ?><script>showSuccess('Información ingresada',8000)</script>
            <?php
        } elseif ($valor == 3) {
            ?><script>showError('Error al ingresar los datos',8000)</script>
            <?php
        } elseif ($valor == 4) {
            ?><script>showError('No se puede ingresar destacado',8000)</script>
            <?php
        } elseif ($valor == 5) {
            ?><script>showError('No selecciono imagen',8000)</script>
            <?php
        }
    }
}
?>