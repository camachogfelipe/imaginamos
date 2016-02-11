<?php
$id = (int) $_GET["id"];
if (isset($_POST["id"])) {
    $texto = $_POST["texto"];
    if ($texto == "") {
        $Erno = 2;
    } else {        
            $texto = str_replace("'", "&#39;" , $texto);
            $texto = str_replace('"', "&quot;", $texto);
            $db->doQuery("INSERT INTO caracteristicas_sirius(texto) VALUES ('".$texto."')", 2);
            $Erno = 1;        
    }
}
$cData = "SELECT * FROM caracteristicas_sirius ORDER BY idcaracteristicas_sirius  ASC";
$db->doQuery($cData, 1);
$fil = count($db->results);
?>
<!-- full width -->
<div class="header">
    <span>
        <span class="ico gray window"></span>Carateristicas</span>
</div>

<div class="content">
    <div class="formEl_b">
        <!--Inicio del contenido del modulo-->
        <a class="uibutton icon normal answer" href="index.php">Atr&aacute;s</a>
        <?php if ($fil < 9) { ?>
        <fieldset>
            <legend>Nuevo Item</legend>
            <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">
                <input type="hidden" value="1" name="id" id="id">                  
                <div class="section">
                    <label>Texto</label>
                    <div>
                        <textarea name="texto" id="texto1" class="large"></textarea>
                        <span class="f_help">Limite de caracteres 85/<span class="texto1"></span></span>
                    </div>
                </div> 
            </form>
            <p>&nbsp;</p>

            <div><a id="submitForm" onclick="$('#forminterno').submit();" class="uibutton normal large">Guardar</a></div>

        </fieldset>
        <?php } else { ?>
            <label>Ya existen las 9 Items permitidos</label><?php } ?>
        <p>&nbsp;</p>
        <fieldset>
            <div class="tableName toolbar">
                <table class="display data_table2" >
                    <thead>
                        <tr>
                            <th><div class="th_wrapp">Texto</div></th>	
                            <th><div class="th_wrapp">Acciones</div></th>
                    </tr>
                    </thead>
                    <tbody>
                            <?php                            
                            for ($i = 0; $i < $fil ; $i++) {
                                $data = $db->results[$i];
                                ?>
                            <tr class="odd gradeX">                                
                                <td class="center" width="70px"><?php echo $data["texto"] ?></td>                                
                                <td class="center" width="100px">
                                    <a class="uibutton"   href="index.php?seccion=editcaracteristicas&id=<?php echo $data["idcaracteristicas_sirius"] ?>">Editar</a>
                                    <?php if($fil > 1){ ?>
                                    <a id="<?php echo $data["idcaracteristicas_sirius"] ?>" class="Delete uibutton special" tableToDelete="caracteristicas_sirius" nameField="idcaracteristicas_sirius">Eliminar</a>
                                    <?php } ?>
                                </td>  
                            </tr>
<?php } ?>
                    </tbody>
                </table>
            </div>
        </fieldset>
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