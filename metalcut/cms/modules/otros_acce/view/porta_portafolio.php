<?php 
$nivel=$_REQUEST['nivel'];
$idportafolio=$_REQUEST['idportafolio'];

$sql_c1="select * from portafolio_cab where idportafolio=" .$idportafolio;
$db->doQuery($sql_c1,1);
$porta_cab= $db->results[0];
$ccab=$db->rows;
$nco=0;
 for ($i = 0; $i < $ccab; $i++) {
     $cab = $db->results[$i];
     if (!empty($cab['col1'])) $nco++;
     if (!empty($cab['col2'])) $nco++;
     if (!empty($cab['col3'])) $nco++;
     if (!empty($cab['col4'])) $nco++;
     if (!empty($cab['col5'])) $nco++;
     if (!empty($cab['col6'])) $nco++;
     if (!empty($cab['col7'])) $nco++;
     if (!empty($cab['col8'])) $nco++;
     if (!empty($cab['col9'])) $nco++;
     if (!empty($cab['col10'])) $nco++;
 }
 //echo $nco.'-->';
?>
<script>

</script>
</script>
<div class="header"><span><span class="ico gray window"></span>Nivel <?php echo $nivel ?></span>
</div><!-- End header -->
<div class="content">
    <div class="formEl_b">
            <fieldset>
                <legend><h1>PortaHerramienta</h1></legend>
                <form method="post" action="" name="forminterno2" id="forminterno2" enctype="multipart/form-data">
                    <input type="hidden" value="<?php echo $nivel ?>" name="nivel" id="nivel">
                    <input type="hidden" value="<?php echo $idportafolio ?>" name="idportafolio" id="idportafolio">
                    <input type="hidden" value="<?php echo $nco; ?>" name="col" id="col">
                    <div class="section">                                                                                                  
                        <label>Cantidad de Columnas</label>
                        <div>
                            <select id="colum" name="colum">
                                <option> Seleccione </option>
                                <option value="1" <?php if ($nco==1) echo "selected" ?> >1</option>
                                <option value="2" <?php if ($nco==2) echo "selected" ?>>2</option>
                                <option value="3" <?php if ($nco==3) echo "selected" ?>>3</option>
                                <option value="4" <?php if ($nco==4) echo "selected" ?>>4</option>
                                <option value="5" <?php if ($nco==5) echo "selected" ?>>5</option>
                                <option value="6" <?php if ($nco==6) echo "selected" ?>>6</option>
                                <option value="7" <?php if ($nco==7) echo "selected" ?>>7</option>
                            </select>
                        </div>
                    </div>
                    <input type="hidden" value="1" name="tipo" id="tipo">
                    <br />
                </form>
            </fieldset>
    </div>
</div>
<script>
    $(document).ready(function() {
     var ncol=$("#col").val();
     
     if (ncol>0){
         alert('Ya asigno # de columnas')
         var nivel=$("#nivel").val();
         var idportafolio=$("#idportafolio").val();
         $(location).attr('href','index.php?seccion=cab_porta&nivel='+nivel+'&idportafilio='+idportafolio+'&ncolum='+ncol);
     }
   });
   
    $( "#colum" ).change(function() {
        var nivel=$("#nivel").val();
        var idportafolio=$("#idportafolio").val();
        var ncolumna=$('#colum option:selected').val();
       // $(location).attr("index.php?seccion=cab_porta", { nivel: nivel, idportafolio:idportafolio, ncolum:ncolumna });
        $(location).attr('href','index.php?seccion=cab_porta&nivel='+nivel+'&idportafilio='+idportafolio+'&ncolum='+ncolumna);
        
    });
    
</script>
    