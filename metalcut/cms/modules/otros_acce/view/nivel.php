<?php

$nivel=$_REQUEST['nivel'];
$db->doQuery("SELECT idnivel_portafolio FROM nivel_portafolio where nivel='".$nivel."'  ORDER BY idnivel_portafolio DESC Limit 1", 1);
$limit = $db->results[0];
$img = $limit["idnivel_portafolio"] + 1;
$idportafolio=$_REQUEST['idportafolio'];





$id=!empty($_REQUEST['id']) ? $_REQUEST['id'] : null;  
$titulo=!empty($_POST['titulo']) ? $_POST['titulo'] : null; 

$titulo = str_replace("'", "&#39;" , $titulo);
$titulo = str_replace('"', "&quot;", $titulo);

$idportafoliopadre=!empty($_REQUEST['idpadre']) ? $_REQUEST['idpadre'] : 1; 




$db->doQuery("SELECT * FROM portafolio where idportafolio='".$idportafoliopadre."' ORDER BY idportafolio ASC", 1);
$atras = $db->results[0];
$atras_id = $atras['idportafolio']; 
$atras_padre = $atras['idportafoliopadre']; 
$atras_nivel = $atras['nivel']; 



if (empty($_REQUEST['id']) && isset($_POST['tipo'])){
    //echo $_POST['titulo'] .'ok';
    if($_POST['titulo'] == "" ){
        $Erno = 2;
    }else{
           $sql="INSERT INTO nivel_portafolio(idportafolio,titulo,nivel) VALUES ('".$idportafolio."','".$titulo."','".$nivel."')";
          // echo $sql;
            $db->doQuery($sql, 2);
            $Erno = 1;
    }
}else if (!empty($_REQUEST['id']) && isset($_POST['tipo'])){
    if($_POST['titulo'] == "" ) {
            $Erno = 2;
     }else{
         $sql="UPDATE nivel_portafolio SET titulo='" . $titulo . "' WHERE idnivel_portafolio=" . $id;
        // echo $sql;
         $db->doQuery($sql, 4);
         $Erno = 1;
      }
}

if (empty($id)){
    $sql="SELECT * FROM nivel_portafolio where  nivel='".$nivel."' and  idportafolio=" . $idportafoliopadre ." ORDER BY idnivel_portafolio ASC";
   // echo $sql.'ca..';
    $db->doQuery($sql, 1);
    
    $fil = $db->rows;
}

if (!empty($id)){
   // echo "SELECT * FROM nivel_portafolio WHERE idnivel_portafolio=" . $id;
    $db->doQuery("SELECT * FROM nivel_portafolio WHERE nivel='".$nivel."' and  idnivel_portafolio=" .$id, 1);
    $nivel_portafolio = $db->results[0];
}
?>

<!-- full width -->
<div class="header"><span><span class="ico gray window"></span>Nivel <?php echo $nivel ?></span>


 <?php if (empty($id)) { ?>
 
 
    <a style="float:right; margin-top:6px; margin-right:5px;" class="uibutton icon normal answer" href="index.php?seccion=menu&nivel=<?= $atras_nivel; ?>&name=<?= $_REQUEST['name']; ?>&idpadre=<?= $atras_padre; ?>">Atras</a>


 <?php }else{ ?>
 <a style="float:right; margin-top:6px; margin-right:5px;" class="uibutton icon normal answer" href="index.php?seccion=nivel&nivel=<?= $_REQUEST['nivel']; ?>&idpadre=<?= $_REQUEST['idpadre']; ?>">Atras</a>
  <?php } ?>
  
</div><!-- End header -->
<div class="content">

    <div class="formEl_b">
        <?php if ($fil < 1) { ?>
            <fieldset>
                <legend><h1>Nuevo Nivel</h1></legend>

                <form method="post" action="" name="forminterno2" id="forminterno2" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $nivel_portafolio["idnivel_portafolio"] ?>" name="id" id="id">
                    <div class="section">                                                                                                  
                        <label>Titulo</label>
                        <div>
                            <input type="text" name="titulo" id="titulo" class="medium" value="<?php echo $nivel_portafolio["titulo"] ?>">
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
                                    <a id="<?php echo $img["idnivel_portafolio"] ?>" class="Delete uibutton special" tableToDelete="nivel_portafolio" nameField="idnivel_portafolio">Eliminar</a> 
                                    <?php } ?>
                                    <a class="uibutton icon edit" href="index.php?seccion=nivel&idpadre=<?= $idportafoliopadre ?>&nivel=<?= $_REQUEST['nivel'] ?>&id=<?= $img["idnivel_portafolio"] ?>">Editar</a>
                                    <a class="uibutton icon edit" href="index.php?seccion=menu&nivel=<?= $nivel ?>&idpadre=<?= $idportafoliopadre ?>">Opc. SubNivel</a>
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