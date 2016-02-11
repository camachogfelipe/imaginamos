<?php
$db->doQuery("SELECT idporta_cilindrado FROM porta_cilindrado  ORDER BY idporta_cilindrado DESC Limit 1", 1);
$limit = $db->results[0];
$img = $_POST['idporta_cilindrado'];
//echo $img.'-->ok';
$id = !empty($_REQUEST['id']) ? $_REQUEST['id'] : null;
$idcilindrado = !empty($_POST['idcilindrado']) ? $_POST['idcilindrado'] : null;
$ref = !empty($_POST['ref']) ? $_POST['ref'] : null;
$fig = !empty($_POST['fig']) ? $_POST['fig'] : null;
$tamano = !empty($_POST['tamano']) ? $_POST['tamano'] : null;
$longitud = !empty($_POST['longitud']) ? $_POST['longitud'] : null;
$valor = !empty($_POST['valor']) ? $_POST['valor'] : null;
$idmaterial = !empty($_POST['idmaterial']) ? $_POST['idmaterial'] : null;
$idgeometria = !empty($_POST['idgeometria']) ? $_POST['idgeometria'] : null;

if (empty($_REQUEST['id']) && isset($_POST['tipo'])) {
    if ($_POST['ref'] == "" && $_POST['tamano'] == "" && $_POST['longitud'] == "" && $_POST['valor'] == "" && $_POST['idmaterial'] == "") {
        $Erno = 2;
    } else {
//        $sql = "INSERT INTO porta_cilindrado(
//                         idcilindrado,
//                         ref,
//												 figura,
//                         tamano,
//                         longitud,
//                         valor,
//                         idmaterial
//                         ) VALUES (
//                         '" . $idcilindrado . "',
//                         '" . $ref . "',
//                         '" . $tamano . "',	
//                         '" . $longitud . "',
//                          '" . $valor . "',
//                              '" . $idmaterial . "')";
                              $sql = "INSERT INTO porta_cilindrado(
                         idcilindrado,
                         ref,
												 figura,
                         tamano,
                         longitud,
                         valor,
                         idgeometria
                         ) VALUES (
                         '" . $idcilindrado . "',
                         '" . $ref . "',
                         '" . $tamano . "',	
                         '" . $longitud . "',
                          '" . $valor . "',
                              '" . $idgeometria . "')";
        //echo $sql;
        $db->doQuery($sql, 2);
        $Erno = 1;
    }
} else if (!empty($_REQUEST['id']) && isset($_POST['tipo'])) {
    if ($_POST['idporta_cilindrado'] == "" && $_POST['ref'] == "" && $_POST['fig'] == "" && $_POST['tamano'] == "" && $_POST['longitud'] == "" && $_POST['valor'] == "" && $_POST['idmaterial'] == "") {
        $Erno = 2;
    } else {
//        $sql = "UPDATE porta_cilindrado SET 
//             ref='" . $ref . "',
//             tamano='" . $tamano . "',
//             longitud='" . $longitud . "',
//             valor='" . $valor . "',
//             idmaterial='" . $idmaterial . "'
//             WHERE idporta_cilindrado='" . $id . "'";
        $sql = "UPDATE porta_cilindrado SET 
             ref='" . $ref . "',
						 figura='" . $fig . "',
             tamano='" . $tamano . "',
             longitud='" . $longitud . "',
             valor='" . $valor . "',
             idgeometria='" . $idgeometria . "'
             WHERE idporta_cilindrado='" . $id . "'";
        //  echo $sql;
        $db->doQuery($sql, 4);
    }
}


if (empty($id)) {
    $db->doQuery("SELECT * FROM porta_cilindrado ORDER BY idporta_cilindrado ASC", 1);
    $fil = $db->rows;
}

if (!empty($id)) {
    //   echo "SELECT * FROM idporta_cilindrado WHERE idporta_cilindrado=" . $id;
    $db->doQuery("SELECT * FROM porta_cilindrado WHERE idporta_cilindrado='" . $id . "'", 1);
    $porta_cilindrado = $db->results[0];
}
?>

<!-- full width -->
<div class="header"><span><span class="ico gray window"></span>Porta Herramienta</span>
</div><!-- End header -->
<div class="content">
<?php if (!empty($_REQUEST['id'])) { ?>
        <a class="uibutton icon normal answer" href="index.php?seccion=porta_cilindrado">Atras</a>
    <?php } else { ?>
        <a class="uibutton icon normal answer" href="index.php?seccion=menu">Atras</a>
    <?php } ?>

    <div class="formEl_b">
    <?php //if ($fil < 99) { ?>
        <fieldset>
            <legend><h1>Cilindrado y Refrentado</h1></legend>
            <form method="post" action="" name="forminterno2" id="forminterno2" enctype="multipart/form-data">
                <input type="hidden" value="<?php echo $porta_cilindrado["idporta_cilindrado"] ?>" name="id" id="id">
                <input type="hidden" value="<?php echo $_REQUEST['idcilindrado'] ?>" name="idcilindrado" id="idcilindrado">
                <input type="hidden" value="1" name="tipo" id="tipo">

                <div class="section">                                                                                                  
                    <label>REF</label>
                    <div>
                        <input type="text" name="ref" id="ref" class="medium" value="<?php echo $porta_cilindrado["ref"] ?>">
                        <span class="f_help">Limite de caracteres 23/<span class="ref"></span></span>
                    </div>
                </div>
                <div class="section">                                                                                                  
                    <label>FIGURA</label>
                    <div>
                        <input type="text" name="fig" id="fig" class="medium" value="<?php echo $porta_cilindrado["figura"] ?>">
                        <span class="f_help">Limite de caracteres 23/<span class="ref"></span></span>
                    </div>
                </div>
                <div class="section">                                                                                                  
                    <label>Tama&#241;o</label>
                    <div>
                        <input type="text" name="tamano" id="tamano" class="medium" value="<?php echo $porta_cilindrado["tamano"] ?>">
                        <span class="f_help">Limite de caracteres 23/<span class="tamano"></span></span>
                    </div>
                </div>
                <div class="section">                                                                                                  
                    <label>Longitud</label>
                    <div>
                        <input type="text" name="longitud" id="longitud" class="medium" value="<?php echo $porta_cilindrado["longitud"] ?>">
                        <span class="f_help">Limite de caracteres 23/<span class="longitud"></span></span>
                    </div>
                </div>
                <div class="section">                                                                                                  
                    <label>Valor</label>
                    <div>
                        <input type="text" maxlength="10" name="valor" id="valor" class="medium" value="<?php echo $porta_cilindrado["valor"] ?>">
                        <span class="f_help">Limite de caracteres 10/<span class="valor"></span></span>
                    </div>
                </div>
                <!--                   <div class="section">                                                                                                  
                                        <label>Material</label>
                                        <div>
<?php
$sqlTI = "select idmateriales from materiales order by idmateriales asc";
$db->doQuery($sqlTI, 1);
$cTI = $db->rows;
?>
                                          <select id="idmaterial" name="idmaterial">
                <?php if ($cTI == 1) { ?>
                                                          <option value="<?php echo $porta_cilindrado["idmaterial"] ?>"><?php echo $porta_cilindrado["idmaterial"] ?></option>
                <?php } else { ?>
                                                      <option value="">-Seleccione-</option>
                    <?php
                    for ($i = 0; $i < $cTI; $i++) {
                        $dTI = $db->results[$i];
                        ?>
                                                                     <option value="<?php echo $dTI["idmateriales"] ?>"
                        <?php
                        if ($porta_cilindrado["idmaterial"] == $dTI["idmateriales"])
                            echo "selected='selected'";
                        ?> ><?php echo $dTI["idmateriales"] ?></option>
                        <?php
                    }
                }
                ?>
                                          </select>
                                        <span class="f_help">Limite de caracteres 2/<span class="idmaterial"></span></span>
                                        </div>
                                     </div>-->
                <div class="section">                                                                                                  
                    <label>Geometr&iacute;a</label>
                    <div>
<?php
$sqlTI = "select idgeometria from geometria order by idgeometria asc";
$db->doQuery($sqlTI, 1);
$cTI = $db->rows;
?>
                        <select id="idgeometria" name="idgeometria">
                        <?php if ($cTI == 1) { ?>
                                <option value="<?php echo $porta_cilindrado["idgeometria"] ?>"><?php echo $porta_cilindrado["idgeometria"] ?></option>
                            <?php } else { ?>
                                <option value="">-Seleccione-</option>
                                <?php
                                for ($i = 0; $i < $cTI; $i++) {
                                    $dTI = $db->results[$i];
                                    ?>
                                    <option value="<?php echo $dTI["idgeometria"] ?>"
                                    <?php
                                    if ($porta_cilindrado["idgeometria"] == $dTI["idgeometria"])
                                        echo "selected='selected'";
                                    ?> ><?php echo $dTI["idgeometria"] ?></option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
                        <span class="f_help">Limite de caracteres 2/<span class="idmaterial"></span></span>
                    </div>
                </div>
                <br />
                <div>
                    <a id="submitForm2"  class="uibutton large">Guardar</a>
                    <a href="index.php?seccion=archivo&idcilindrado=1" id="submitForm2"  class="uibutton large">Archivo Plano</a>
                </div>
            </form>
        </fieldset>
<?php // } else { 
?>
        <label></label><?php //}  ?>
        <br/><br/><br/>
        <fieldset>
        <?php if (empty($id)) { ?>
                <div class="tableName toolbar">
                    <table class="display data_table2" >
                        <thead>
                            <tr>
                                <th><span class="th_wrapp">REF</span></th>
                                <th><span class="th_wrapp">Figura</span></th>
                                <th><span class="th_wrapp">Tama&#241;o</span></th>
                                <th><span class="th_wrapp">Longitud</span></th>
                                <th><span class="th_wrapp">Geometr&iacute;a</span></th>
                                <th><span class="th_wrapp">Valor</span></th>
                                <th><span class="th_wrapp">Acciones</span></th>
                            </tr>
                        </thead>
                        <tbody>
    <?php
    $db->doQuery("SELECT * FROM porta_cilindrado order by idporta_cilindrado asc", 1);
    for ($i = 0; $i < $fil; $i++) {

        $img = $db->results[$i];
        ?>
                                <tr class="odd gradeX">
                                    <td><?php echo $img["ref"] ?></td>
                                    <td><?php echo $img["figura"] ?></td>
                                    <td><?php echo $img["tamano"] ?></td>
                                    <td><?php echo $img["longitud"] ?></td>
                                    <td><?php echo $img["idgeometria"] ?></td>
                                    <td><?php echo $img["valor"] ?></td>
                                    <td class="center idporta_cilindrado" width="100px">
                                        <a id="<?php echo $img["idporta_cilindrado"] ?>" class="Delete uibutton special" tableToDelete="porta_cilindrado" nameField="idporta_cilindrado">Eliminar</a> 
                                        <a class="uibutton icon edit" href="index.php?seccion=porta_cilindrado&idcilindrado=<?php echo $_REQUEST['idcilindrado'] ?>&id=<?= $img["idporta_cilindrado"] ?>">Editar</a>
                                    </td>
                                </tr>
                                    <?php } ?>
                        </tbody>
                    </table>

                </div>
                            <?php
                        }
                        ?>
        </fieldset>
    </div>

</div>
            <?php
            if (isset($Erno)) {
                if (intval($Erno)) {
                    $valor = $Erno;
                    if ($valor == 2) {
                        ?><script>showError('Faltan datos ', 3000);</script>
            <?php
        } elseif ($valor == 1) {
            ?><script>showSuccess('Información ingresada', 8000)</script>
            <?php
        } elseif ($valor == 3) {
            ?><script>showError('Error al ingresar los datos', 8000)</script>
            <?php
        } elseif ($valor == 4) {
            ?><script>showError('No se puede ingresar destacado', 8000)</script>
            <?php
        } elseif ($valor == 5) {
            ?><script>showError('No selecciono imagen', 8000)</script>
            <?php
        } elseif ($valor == 6) {
            ?><script>showError('Ya existe este codigo', 8000)</script>
            <?php
        }
    }
}
?>
<script type="text/javascript">
    $(document).ready(function() {
        $("#submitForm2").click(function() {
            $('#forminterno2').submit();
        });
    });
</script>