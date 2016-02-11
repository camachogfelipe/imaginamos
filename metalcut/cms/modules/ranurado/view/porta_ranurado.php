<?php

$db->doQuery("SELECT idporta_ranurado FROM porta_ranurado  ORDER BY idporta_ranurado DESC Limit 1", 1);
$limit = $db->results[0];
$img = $_POST['idporta_ranurado'];
//echo $img.'-->ok';
$id=!empty($_REQUEST['id']) ? $_REQUEST['id'] : null;  
$idranurado=!empty($_POST['idranurado']) ? $_POST['idranurado'] : null; 
$ref=!empty($_POST['ref']) ? $_POST['ref'] : null;
$diam_corte=!empty($_POST['diam_corte']) ? $_POST['diam_corte'] : null; 
$diam_espigo=!empty($_POST['diam_espigo']) ? $_POST['diam_espigo'] : null; 
$long_total=!empty($_POST['long_total']) ? $_POST['long_total'] : null; 
$n_insertos=!empty($_POST['n_insertos']) ? $_POST['n_insertos'] : null; 
$inserto=!empty($_POST['inserto']) ? $_POST['inserto'] : null; 
$valor=!empty($_POST['valor']) ? $_POST['valor'] : null; 

if (empty($_REQUEST['id']) && isset($_POST['tipo'])){
    if ( $_POST['ref'] == "" && $_POST['diam_corte'] == "" && $_POST['n_insertos'] == "" && $_POST['long_total'] == "" && $_POST['diam_espigo'] == "" && $_POST['inserto'] == "" && $_POST['valor'] == "" ){
        $Erno = 2;
    }else{
	            
                    $sql="INSERT INTO porta_ranurado(
                         idranurado,
                         ref,
                         diam_corte,
                         long_total,	
                         diam_espigo,
                         inserto,
                         n_insertos,
                         valor
                         ) VALUES (
                         '".$idranurado."',
                         '".$ref."',
                         '".$diam_corte."',	
                         '".$long_total."',	
                         '".$diam_espigo."',
                         '".$inserto."',   
                         '".$n_insertos."',
                         '".$valor."' )";
                   // echo $sql;
                     $db->doQuery($sql, 2);
                     $Erno = 1;
            
          }
}else if (!empty($_REQUEST['id']) && isset($_POST['tipo'])){
    if($_POST['idporta_ranurado'] == "" && $_POST['ref'] == "" && $_POST['diam_corte'] == "" && $_POST['n_insertos'] == "" && $_POST['long_total'] == "" && $_POST['diam_espigo'] == "" && $_POST['inserto'] == "" && $_POST['valor'] == "" ) {
            $Erno = 2;
     }else{
         $sql="UPDATE porta_ranurado SET 
             ref='".$ref."',
             diam_corte='".$diam_corte."',
             long_total='".$long_total."',	
             diam_espigo='".$diam_espigo."',
             inserto='".$inserto."',
             n_insertos='".$n_insertos."',
             valor='".$valor."' WHERE idporta_ranurado='".$id."'";
         // echo $sql;
         $db->doQuery($sql, 4); 
    }
}


if (empty($id)){
    $db->doQuery("SELECT * FROM porta_ranurado ORDER BY idporta_ranurado ASC", 1);
    $fil = $db->rows;
}

if (!empty($id)){
 //   echo "SELECT * FROM idporta_ranurado WHERE idporta_ranurado=" . $id;
    $db->doQuery("SELECT * FROM porta_ranurado WHERE idporta_ranurado='" . $id."'", 1);
    $porta_ranurado = $db->results[0];
}

?>

<!-- full width -->

<div class="header"><span><span class="ico gray window"></span>Porta Herramienta</span> </div>
<!-- End header -->
<div class="content"> <a class="uibutton icon normal answer" href="index.php?seccion=porta_ranurado&idranurado=<?php echo $_REQUEST["idranurado"] ?>">Atras</a> 
	<a href="index.php?seccion=img_ranurado&tipo=<?php echo $_GET['idranurado'] ?>&nivel=<?php echo $_GET['nivel'] ?>"  class="uibutton large">Imagen Porta Herramienta</a>
  <div class="formEl_b">
    <?php //if ($fil < 99) { ?>
    <fieldset>
      <legend>
      <h1>Ranurado y Corte</h1>
      </legend>
      <form method="post" action="" name="forminterno2" id="forminterno2" enctype="multipart/form-data">
        <input type="hidden" value="<?php echo $porta_ranurado["idporta_ranurado"] ?>" name="id" id="id">
        <input type="hidden" value="<?php echo $_REQUEST['idranurado']?>" name="idranurado" id="idranurado">
        <input type="hidden" value="1" name="tipo" id="tipo">
        <div class="section">
          <label>REF</label>
          <div>
            <input type="text" name="ref" id="ref" class="medium" value="<?php echo $porta_ranurado["ref"] ?>">
            <span class="f_help">Limite de caracteres 23/<span class="ref"></span></span> </div>
        </div>
        <div class="section">
          <label>Diam Corte</label>
          <div>
            <input type="text" name="diam_corte" id="diam_corte" class="medium" value="<?php echo $porta_ranurado["diam_corte"] ?>">
            <span class="f_help">Limite de caracteres 23/<span class="diam_corte"></span></span> </div>
        </div>
        <div class="section">
          <label>Diam Espigo</label>
          <div>
            <input type="text" name="diam_espigo" id="diam_espigo" class="medium" value="<?php echo $porta_ranurado["diam_espigo"] ?>">
            <span class="f_help">Limite de caracteres 23/<span class="diam_espigo"></span></span> </div>
        </div>
        <div class="section">
          <label>Long Total</label>
          <div>
            <input type="text" name="long_total" id="long_total" class="medium" value="<?php echo $porta_ranurado["long_total"] ?>">
            <span class="f_help">Limite de caracteres 23/<span class="long_total"></span></span> </div>
        </div>
        <div class="section">
          <label>No Insertos</label>
          <div>
            <input type="text" name="n_insertos" id="n_insertos" class="medium" value="<?php echo $porta_ranurado["n_insertos"] ?>">
            <span class="f_help">Limite de caracteres 23/<span class="n_insertos"></span></span> </div>
        </div>
        <div class="section">
          <label>Inserto</label>
          <div>
            <input type="text" name="inserto" id="inserto" class="medium" value="<?php echo $porta_ranurado["inserto"] ?>">
            <span class="f_help">Limite de caracteres 23/<span class="inserto"></span></span> </div>
        </div>
        <div class="section">
          <label>Valor</label>
          <div>
            <input type="text" name="valor" id="valor" class="medium" value="<?php echo $porta_ranurado["valor"] ?>">
            <span class="f_help">Limite de caracteres 10/<span class="valor"></span></span> </div>
        </div>
        <br />
        <div> <a id="submitForm2"  class="uibutton large">Guardar</a> <a href="index.php?seccion=archivo&idranurado=<?php echo $_REQUEST["idranurado"] ?>" id="submitForm2"  class="uibutton large">Archivo Plano</a> </div>
      </form>
    </fieldset>
    <?php// } else { 
            
            ?>
    <label></label>
    <?php //} ?>
    <br/>
    <br/>
    <br/>
    <fieldset>
      <?php if (empty($id)){ ?>
      <div class="tableName toolbar">
        <table class="display data_table2" >
          <thead>
            <tr>
              <th><span class="th_wrapp">REF</span></th>
              <th><span class="th_wrapp">Diam Corte</span></th>
              <th><span class="th_wrapp">Diam Espigo</span></th>
              <th><span class="th_wrapp">Long Total</span></th>
              <th><span class="th_wrapp">No Inserto</span></th>
              <th><span class="th_wrapp">Inserto</span></th>
              <th><span class="th_wrapp">valor</span></th>
              <th><span class="th_wrapp">Acciones</span></th>
            </tr>
          </thead>
          <tbody>
            <?php
                        $db->doQuery("SELECT * FROM porta_ranurado order by idporta_ranurado asc", 1);                      
                        for ($i = 0; $i < $fil; $i++) {
                            
                            $img = $db->results[$i];
                            
                            ?>
            <tr class="odd gradeX">
              <td><?php echo $img["ref"] ?></td>
              <td><?php echo $img["diam_corte"] ?></td>
              <td><?php echo $img["diam_espigo"] ?></td>
              <td><?php echo $img["long_total"] ?></td>
              <td><?php echo $img["n_insertos"] ?></td>
              <td><?php echo $img["inserto"] ?></td>
              <td><?php echo $img["valor"] ?></td>
              <td class="center idporta_ranurado" width="100px"><?php if(($i+1) != $fil){ ?>
                <a id="<?php echo $img["idporta_ranurado"] ?>" class="Delete uibutton special" tableToDelete="porta_ranurado" nameField="idporta_ranurado">Eliminar</a>
                <?php } ?>
                <a class="uibutton icon edit" href="index.php?seccion=porta_ranurado&idranurado=<?php echo $_REQUEST['idranurado'] ?>&id=<?= $img["idporta_ranurado"] ?>">Editar</a></td>
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
            ?>
<script>showError('Faltan datos ',3000);</script>
<?php
        } elseif ($valor == 1) {
            ?>
<script>showSuccess('Información ingresada',8000)</script>
<?php
        } elseif ($valor == 3) {
            ?>
<script>showError('Error al ingresar los datos',8000)</script>
<?php
        } elseif ($valor == 4) {
            ?>
<script>showError('No se puede ingresar destacado',8000)</script>
<?php
        } elseif ($valor == 5) {
            ?>
<script>showError('No selecciono imagen',8000)</script>
<?php
        } elseif ($valor == 6) {
            ?>
<script>showError('Ya existe este codigo',8000)</script>
<?php
        }
    }
}
?>
<script type="text/javascript">
            $(document).ready(function(){              
                 $("#submitForm2").click(function(){
                     $('#forminterno2').submit();
                });
            });
        </script>