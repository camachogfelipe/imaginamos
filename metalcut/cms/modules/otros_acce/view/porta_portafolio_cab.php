<?php

$idportafolio_cab=$_REQUEST['idportafolio_cab'];

$db->doQuery("SELECT idporta_portafolio_cab FROM porta_portafolio_cab where idportafolio_cab='".$idportafolio_cab."' ORDER BY idporta_portafolio_cab DESC Limit 1", 1);
$limit = $db->results[0];
$img = $_POST['idporta_portafolio_cab'];
//echo $img.'-->ok';
$id=!empty($_REQUEST['id']) ? $_REQUEST['id'] : null;  
//$idportafolio_cab=!empty($_POST['idportafolio_cab']) ? $_POST['idportafolio_cab'] : null; 
$ncolum=!empty($_REQUEST['ncolum']) ? $_REQUEST['ncolum'] : null;
$nivel=!empty($_REQUEST['nivel']) ? $_REQUEST['nivel'] : null;
$col1=!empty($_POST['col1']) ? $_POST['col1'] : null;
$col2=!empty($_POST['col2']) ? $_POST['col2'] : null; 
$col3=!empty($_POST['col3']) ? $_POST['col3'] : null; 
$col4=!empty($_POST['col4']) ? $_POST['col4'] : null; 
$col5=!empty($_POST['col5']) ? $_POST['col5'] : null; 
$col6=!empty($_POST['col6']) ? $_POST['col6'] : null; 
$col7=!empty($_POST['col7']) ? $_POST['col7'] : null; 
$col8=!empty($_POST['col8']) ? $_POST['col8'] : null; 
$col9=!empty($_POST['col9']) ? $_POST['col9'] : null; 
$col10=!empty($_POST['col10']) ? $_POST['col10'] : null; 
$valor=!empty($_POST['valor']) ? $_POST['valor'] : null; 

if (empty($_REQUEST['id']) && isset($_POST['tipo'])){
    if ( $_POST['col1'] == "" && $_POST['valor'] == ""  ){
        $Erno = 2;
    }else{
	            
                    $sql="INSERT INTO porta_portafolio_cab(
                         idportafolio_cab,
                         col1,
                         col2,
                         col3,	
                         col4,	
                         col5,
                         col6,
                         col7,
                         col8,
                         col9,
                         col10,
                         valor
                         ) VALUES (
                         '".$idportafolio_cab."',
                         '".$col1."',
                         '".$col2."',	
                         '".$col3."',	
                         '".$col4."',	
                         '".$col5."',
                         '".$col6."',   
                         '".$col7."',
                         '".$col8."',
                         '".$col9."',
                         '".$col10."',
                         '".$valor."')";
                   // echo $sql;
                     $db->doQuery($sql, 2);
                     $Erno = 1;
            
          }
}else if (!empty($_REQUEST['id']) && isset($_POST['tipo'])){
    if($_POST['idporta_portafolio_cab'] == "" && $_POST['col1'] == "" && $_POST['valor'] == "" ) {
            $Erno = 2;
     }else{
         $sql="UPDATE porta_portafolio_cab SET 
             col1='".$col1."',
             col2='".$col2."',
             col3='".$col3."',	
             col4='".$col4."',	
             col5='".$col5."',
             col6='".$col6."',
             col7='".$col7."',
             col8='".$col8."',
             col9='".$col9."',
             col10='".$col10."',
             valor='".$valor."' WHERE idporta_portafolio_cab='".$id."'";
         // echo $sql;
         $db->doQuery($sql, 4); 
    }
}

$db->doQuery("select * from portafolio_cab where idportafolio_cab='".$idportafolio_cab."' ", 1);
$cols = $db->results[0];
//print_r($cols);

//echo "aca --> select * from portafolio_cab where idportafolio_cab='".$idportafolio_cab."' ";

if (empty($id)){
    $db->doQuery("SELECT * FROM porta_portafolio_cab WHERE idportafolio_cab='".$idportafolio_cab."' ORDER BY idporta_portafolio_cab ASC", 1);
   // echo "SELECT * FROM porta_portafolio_cab WHERE idportafolio_cab='".$idportafolio_cab."' ORDER BY idporta_portafolio_cab ASC";
    $fil = $db->rows;
}

if (!empty($id)){
 //   echo "SELECT * FROM idporta_portafolio_cab WHERE idporta_portafolio_cab=" . $id;
    $db->doQuery("SELECT * FROM porta_portafolio_cab WHERE idportafolio_cab='".$idportafolio_cab."'", 1);
    $porta_portafolio_cab = $db->results[0];
}



?>

<!-- full width -->
<div class="header"><span><span class="ico gray window"></span>Porta Herramienta</span>
</div><!-- End header -->
<div class="content">
    <?php if (!empty($_REQUEST['id'])){ ?>
    <a class="uibutton icon normal answer" hcol1="index.php?seccion=porta_portafolio_cab">Atras</a>
    <?php }else{ ?>
    <a class="uibutton icon normal answer" hcol1="index.php?seccion=menu">Atras</a>
     <?php } ?>
               
    <div class="formEl_b">
        <?php //if ($fil < 99) { ?>
            <fieldset>
                <legend><h1>Productos</h1></legend>
                <form method="post" action="" name="forminterno2" id="forminterno2" enctype="multipart/form-data">
                   <input type="hidden" value="<?php echo $porta_portafolio_cab["idporta_portafolio_cab"] ?>" name="id" id="id">
                   <input type="hidden" value="<?php echo $_REQUEST['idportafolio_cab']?>" name="idportafolio_cab" id="idportafolio_cab">
                   <input type="hidden" value="<?php echo $ncolum ?>" name="ncolum" id="ncolum">
                   <input type="hidden" value="1" name="tipo" id="tipo">
                   
                    <div class="section" id="sec1">                                                                                                  
                        <label><?php echo $cols['col1'] ?></label>
                        <div>
                            <input type="text" name="col1" id="col1" class="medium" value="<?php echo $porta_portafolio_cab["col1"] ?>">
                            <span class="f_help">Limite de caracteres 23/<span class="col1"></span></span>
                        </div>
                    </div>
                    <div class="section" id="sec2">                                                                                                  
                        <label><?php echo $cols['col2'] ?></label>
                        <div>
                            <input type="text" name="col2" id="col2" class="medium" value="<?php echo $porta_portafolio_cab["col2"] ?>">
                            <span class="f_help">Limite de caracteres 23/<span class="col2"></span></span>
                        </div>
                    </div>
                    <div class="section" id="sec3">                                                                                                  
                        <label><?php echo $cols['col3'] ?></label>
                        <div>
                            <input type="text" name="col3" id="col3" class="medium" value="<?php echo $porta_portafolio_cab["col3"] ?>">
                            <span class="f_help">Limite de caracteres 23/<span class="nivel3"></span></span>
                        </div>
                    </div>
                    <div class="section" id="sec4">                                                                                                  
                        <label><?php echo $cols['col4'] ?></label>
                        <div>
                            <input type="text" name="col4" id="col4" class="medium" value="<?php echo $porta_portafolio_cab["col4"] ?>">
                            <span class="f_help">Limite de caracteres 23/<span class="col4"></span></span>
                        </div>
                    </div>
                    <div class="section" id="sec5">                                                                                                  
                        <label><?php echo $cols['col5'] ?></label>
                        <div>
                            <input type="text" name="col5" id="col5" class="medium" value="<?php echo $porta_portafolio_cab["col5"] ?>">
                            <span class="f_help">Limite de caracteres 23/<span class="col5"></span></span>
                        </div>
                    </div>
                    <div class="section" id="sec6">                                                                                                  
                        <label><?php echo $cols['col6'] ?></label>
                        <div>
                            <input type="text" name="col6" id="col6" class="medium" value="<?php echo $porta_portafolio_cab["col6"] ?>">
                            <span class="f_help">Limite de caracteres 23/<span class="col6"></span></span>
                        </div>
                    </div>
                    <div class="section" id="sec7">                                                                                                  
                        <label><?php echo $cols['col7'] ?></label>
                        <div>
                            <input type="text" name="col7" id="col7" class="medium" value="<?php echo $porta_portafolio_cab["col7"] ?>">
                            <span class="f_help">Limite de caracteres 23/<span class="col7"></span></span>
                        </div>
                    </div>
                    <div class="section" id="sec8">                                                                                                  
                        <label><?php echo $cols['col8'] ?></label>
                        <div>
                            <input type="text" name="col8" id="col8" class="medium" value="<?php echo $porta_portafolio_cab["col8"] ?>">
                            <span class="f_help">Limite de caracteres 23/<span class="col8"></span></span>
                        </div>
                    </div>
                    <div class="section" id="sec9">                                                                                                  
                        <label><?php echo $cols['col9'] ?></label>
                        <div>
                            <input type="text" name="col9" id="col9" class="medium" value="<?php echo $porta_portafolio_cab["col9"] ?>">
                            <span class="f_help">Limite de caracteres 23/<span class="col9"></span></span>
                        </div>
                    </div>
                    <div class="section" id="sec10">                                                                                                  
                        <label><?php echo $cols['col10'] ?></label>
                        <div>
                            <input type="text" name="col10" id="col10" class="medium" value="<?php echo $porta_portafolio_cab["col10"] ?>">
                            <span class="f_help">Limite de caracteres 23/<span class="col10"></span></span>
                        </div>
                    </div>

                   <div class="section">                                                                                                  
                    <label>Valor</label>
                    <div>
                    <input type="text" name="valor" id="valor" class="medium" value="<?php echo $porta_portafolio_cab["valor"] ?>">
                    <span class="f_help">Limite de caracteres 10/<span class="valor"></span></span>
                    </div>
                    </div>
                    <br />
                    <div>
                        <a id="submitForm2"  class="uibutton large">Guardar</a>
                        <a href="index.php?seccion=archivo&idportafolio_cab=<?php echo $_REQUEST['idportafolio_cab'] ?>&nivel=<?= $nivel ?>&ncolum=<?php echo $ncolum ?>" id="submitForm2"  class="uibutton large">Archivo Plano</a>
                    </div>
                </form>
            </fieldset>
        <?php// } else { 
            
            ?>
            <label></label><?php //} ?>
            <br/><br/><br/>
        <fieldset>
         <?php if (empty($id)){ ?>
        <div class="tableName toolbar">
                <table class="display data_table2" >
                    <thead>
                        <tr>
                            <th><span class="th_wrapp">Col1</span></th>
                            <th><span class="th_wrapp">Col2</span></th>
                            <th><span class="th_wrapp">Col3</span></th>
                            <th><span class="th_wrapp">Col4</span></th>
                            <th><span class="th_wrapp">Col5</span></th>
                            <th><span class="th_wrapp">Col6</span></th>
                            <th><span class="th_wrapp">Col7</span></th>
                            <th><span class="th_wrapp">Valor</span></th>  
                            <th><span class="th_wrapp">Acciones</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //$db->doQuery("SELECT * FROM porta_portafolio_cab order by idporta_portafolio_cab asc", 1);                      
                        for ($i = 0; $i < $fil; $i++) {
                            
                            $img = $db->results[$i];
                            
                            ?>
                            <tr class="odd gradeX">
                                <td><?php echo $img["col1"] ?></td>
                                <td><?php echo $img["col2"] ?></td>
                                <td><?php echo $img["col3"] ?></td>
                                <td><?php echo $img["col4"] ?></td>
                                <td><?php echo $img["col5"] ?></td>
                                <td><?php echo $img["col6"] ?></td>
                                <td><?php echo $img["col7"] ?></td>
                                <td><?php echo $img["valor"] ?></td>
                                <td class="center idporta_portafolio_cab" width="100px">
                                    <?php if(($i+1) != $fil){ ?>
                                    <a id="<?php echo $img["idporta_portafolio_cab"] ?>" class="Delete uibutton special" tableToDelete="porta_portafolio_cab" nameField="idporta_portafolio_cab">Eliminar</a> 
                                    <?php } ?>
                                    <a class="uibutton icon edit" hcol1="index.php?seccion=porta_portafolio_cab&idportafolio_cab=<?php echo $_REQUEST['idportafolio_cab'] ?>&id=<?= $img["idporta_portafolio_cab"] ?>">Editar</a>
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
        } elseif ($valor == 6) {
            ?><script>showError('Ya existe este codigo',8000)</script>
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
        
<script>
    $(document).ready(function() {
     var n= parseInt($("#ncolum").val());
     var y=n+1
    // alert(n+'--'+y)
     for (i=1;i<=n;i++){
         jQuery("#sec"+i).css('display', ''); 
     }
     for (i=y;i<=10;i++){
         jQuery("#sec"+i).css('display', 'none'); 
     }
 });
</script>