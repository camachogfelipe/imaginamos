<?php

$db->doQuery("SELECT idbienvenida FROM bienvenida  ORDER BY idbienvenida DESC Limit 1", 1);
$limit = $db->results[0];
$img = $limit["idbienvenida"] + 1;

$id=!empty($_REQUEST['id']) ? $_REQUEST['id'] : null;  
$titulo=!empty($_POST['titulo']) ? $_POST['titulo'] : null; 
$texto=!empty($_POST['texto']) ? $_POST['texto'] : null; 

$titulo = str_replace("'", "&#39;" , $titulo);
$titulo = str_replace('"', "&quot;", $titulo);
$texto = str_replace("'", "&#39;" , $texto);
$texto = str_replace('"', "&quot;", $texto);


if (empty($_REQUEST['id']) && isset($_POST['tipo'])){
    //echo $_POST['titulo'] .'ok';
    if($_POST['titulo'] == "" && $_POST['texto']=="" ){
        $Erno = 2;
    }else{
           $sql="INSERT INTO bienvenida(titulo,texto) VALUES ('".$titulo."','".$texto."')";
           //echo $sql;
            $db->doQuery($sql, 2);
            $Erno = 1;
    }
}else if (!empty($_REQUEST['id']) && isset($_POST['tipo'])){
    if($_POST['titulo'] == "" && $_POST['texto']=="") {
            $Erno = 2;
     }else{
         $sql="UPDATE bienvenida SET titulo='" . $titulo . "', texto='".$texto."' WHERE idbienvenida=" . $id;
        // echo $sql;
         $db->doQuery($sql, 4);
         $Erno = 1;
      }
}

if (empty($id)){
    $sql="SELECT * FROM bienvenida ORDER BY idbienvenida ASC";
    //echo $sql.'ca..';
    $db->doQuery($sql, 1);
    
    $fil = $db->rows;
}

if (!empty($id)){
   // echo "SELECT * FROM bienvenida WHERE idbienvenida=" . $id;
    $db->doQuery("SELECT * FROM bienvenida WHERE idbienvenida=" . $id, 1);
    $bienvenida = $db->results[0];
}
?>

<!-- full width -->
<div class="header"><span><span class="ico gray window"></span>Bienvenida</span>
</div><!-- End header -->
<div class="content">

    <div class="formEl_b">
        <?php if ($fil < 1) { ?>
            <fieldset>
                <legend><h1>Nuevo Bienvenida</h1></legend>

                <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $bienvenida["idbienvenida"] ?>" name="id" id="id">
                    <div class="section">                                                                                                  
                        <label>Titulo</label>
                        <div>
                            <input type="text" name="titulo" id="titulo" class="medium" value="<?php echo $bienvenida["titulo"] ?>">
                            <span class="f_help">Limite de caracteres 12/<span class="titulo"></span></span>
                        </div>
                    </div>
                   <div class="section">                                                                                                  
                        <label>Texto</label>
                        <div>
                            <textarea name="texto" id="texto" class="large"><?php echo $bienvenida["texto"] ?></textarea>
                            <span class="f_help">Limite de caracteres 255/<span class="texto"></span></span>
                        </div>
                    </div>
                    <input type="hidden" value="1" name="tipo" id="tipo">
                    <br />
                    <div><a id="submitForm"  class="uibutton large">Guardar</a></div>
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
                            <th><span class="th_wrapp">Texto</span></th>
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
                                <td><?php echo $img["texto"] ?></td>
                                <td class="center titulo" width="100px">
                                    <?php if(($i+1) != $fil){ ?>
                                    <a id="<?php echo $img["idbienvenida"] ?>" class="Delete uibutton special" tableToDelete="bienvenida" nameField="idbienvenida">Eliminar</a> 
                                    <?php } ?>
                                    <a class="uibutton icon edit" href="index.php?seccion=menu&id=<?= $img["idbienvenida"] ?>">Editar</a>
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