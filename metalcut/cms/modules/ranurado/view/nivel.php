<?php

$nivel=$_REQUEST['nivel'];
echo "SELECT idnivel_ranurado FROM nivel_ranurado where nivel='".$nivel."'  ORDER BY idnivel_ranurado DESC Limit 1";
$db->doQuery("SELECT idnivel_ranurado FROM nivel_ranurado where nivel='".$nivel."'  ORDER BY idnivel_ranurado DESC Limit 1", 1);
$limit = $db->results[0];
$img = $limit["idnivel_ranurado"] + 1;
$idranurado=$_REQUEST['idranurado'];
$idpadre = $_REQUEST['idpadre'];

$id=!empty($_REQUEST['id']) ? $_REQUEST['id'] : null;  
$titulo=!empty($_POST['titulo']) ? $_POST['titulo'] : null; 

$titulo = str_replace("'", "&#39;" , $titulo);
$titulo = str_replace('"', "&quot;", $titulo);

if ($nivel>0){
    $idportafoliopadre=!empty($_REQUEST['idpadre']) ? $_REQUEST['idpadre'] : 0; 
}else{
    $idportafoliopadre=0;   
}


if (empty($_REQUEST['id']) && isset($_POST['tipo'])){
    //echo $_POST['titulo'] .'ok';
    if($_POST['titulo'] == "" ){
        $Erno = 2;
    }else{
           $sql="INSERT INTO nivel_ranurado(idranurado,titulo,nivel) VALUES ('".$idranurado."','".$titulo."','".$nivel."')";
          // echo $sql;
            $db->doQuery($sql, 2);
            $Erno = 1;
    }
}else if (!empty($_REQUEST['id']) && isset($_POST['tipo'])){
    if($_POST['titulo'] == "" ) {
            $Erno = 2;
     }else{
         $sql="UPDATE nivel_ranurado SET titulo='" . $titulo . "' WHERE idnivel_ranurado=" . $id;
        // echo $sql;
         $db->doQuery($sql, 4);
         $Erno = 1;
      }
}

if (empty($id)){
    $sql="SELECT * FROM nivel_ranurado WHERE nivel='".$nivel."' and idranurado=" . $idranurado ."  ORDER BY idnivel_ranurado ASC";
   // echo $sql.'ca..';
    $db->doQuery($sql, 1);
    
    $fil = $db->rows;
}

if (!empty($id)){
   // echo "SELECT * FROM nivel_ranurado WHERE idnivel_ranurado=" . $id;
    $db->doQuery("SELECT * FROM nivel_ranurado WHERE idnivel_ranurado=" . $id, 1);
    $nivel_ranurado = $db->results[0];
}
?>

<!-- full width -->
<div class="header"><span><span class="ico gray window"></span>Nivel <?php echo $nivel ?></span>
</div><!-- End header -->
<div class="content">
		<!--<a class="uibutton icon normal answer" href="../../ranurado/view/?seccion=nivel&idranurado=<?php echo $idranurado; ?>&nivel=<?php echo $nivel ?>&idpadre=<?php echo $idpadre ?>">Atras</a>-->
    <div class="formEl_b">
        <?php if ($fil < 1) { ?>
            <fieldset>
                <legend><h1>Nuevo Nivel</h1></legend>

                <form method="post" action="" name="forminterno2" id="forminterno2" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $nivel_ranurado["idnivel_ranurado"] ?>" name="id" id="id">
                    <div class="section">                                                                                                  
                        <label>Titulo</label>
                        <div>
                            <input type="text" name="titulo" id="titulo" class="medium" value="<?php echo $nivel_ranurado["titulo"] ?>">
                            <span class="f_help">Limite de caracteres 12/<span class="titulo"></span></span>
                        </div>
                    </div>
                    <input type="hidden" value="1" name="tipo" id="tipo">
                    <br />
                    <div><a id="submitForm2"  class="uibutton large">Guardar</a></div>
                </form>
            </fieldset>
        <?php } else { 
            
            ?>
            <label></label><?php } ?>
            <br/><br/><br/>
        <fieldset>
         <?php if (empty($id)){ ?>
        <div class="tableName toolbar">
                <table class="display data_table2" >
                    <thead>
                        <tr>
                            <th><span class="th_wrapp">Titulo</span></th>
                            <th><span class="th_wrapp">Nivel</span></th>
                            <th><span class="th_wrapp">Acciones</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        for ($i = 0; $i < $fil; $i++) {
                            
                            $img = $db->results[$i];
                            ?>
                            <tr class="odd gradeX">
                                <td><?php echo $img["titulo"] ?></td>
                                <td><?php echo $img["nivel"] ?></td>
                                <td class="center titulo" width="100px">
                                    <?php if(($i+1) != $fil){ ?>
                                    <a id="<?php echo $img["idnivel_ranurado"] ?>" class="Delete uibutton special" tableToDelete="nivel_ranurado" nameField="idnivel_ranurado">Eliminar</a> 
                                    <?php } ?>
                                    <a class="uibutton icon edit" href="index.php?seccion=nivel&id=<?= $img["idnivel_ranurado"] ?>">Editar</a>
                                    <a class="uibutton icon edit" href="index.php?seccion=menu&idranurado=<?= $img["idranurado"] ?>&nivel=<?= $nivel ?>&idpadre=<?= $idportafoliopadre ?>">Opc. SubNivel</a>
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
   <script type="text/javascript">
            $(document).ready(function(){
                 $("#submitForm2").click(function(){
                     $('#forminterno2').submit();
                });
            });
        </script>