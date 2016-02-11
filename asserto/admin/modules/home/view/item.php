<?php 

if(isset($_REQUEST["idhome"])){
  $db->doQuery("SELECT * FROM home as h inner join texto_home as t on h.idhome=t.idhome WHERE h.idhome=".(int)$_REQUEST["idhome"], SELECT_QUERY);
  $id = $db->results[0]["idhome"];
  $imagen = $db->results[0]["imagen"];
  $texto = $db->results;

}

$db->doQuery("SELECT texto FROM texto_home WHERE idhome=".(int)$_REQUEST["idhome"], SELECT_QUERY);
$result = $db->results;
$suma = 0;

for($j=0;$j<count($result);$j++){
    
    $suma = $suma + strlen($result[$j]["texto"]);
}


    if(isset($_POST["idinsert"])){
      $nombre_c = GetData("texto", "");

  if( (int)$_POST["idinsert"]>0 ){
    $insert=$db->doQuery("INSERT INTO texto_home (idhome,texto) VALUES ( '".(int)$_POST["idinsert"]."','".mysql_real_escape_string($nombre_c)."');", INSERT_QUERY);
//    $insert = "INSERT INTO texto_home (idhome,texto) VALUES ( '".$id."','".$nombre_c."');";
//    echo $insert;
//    exit;
    $idinsertado=$db->getLastId();
    if($insert){
     echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n Realizada',3000) }, 1500);</script>";
    }else{
    echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
    }
  }
  
    //Codigo Para Subir Imagenes 
    $retorno = ClassFIle::UploadImagenFile("img", "../imagenes", "original_" . $idinsertado, "redimension_" . $idinsertado, 114, 196);
    if ($retorno["Status"]=="Uploader"){
    $db->doQuery("UPDATE home SET imagen='".$retorno["NameFile"]."' WHERE idhome=".$idinsertado, UPDATE_QUERY);
        // echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n de Imagen Realizada',3000) }, 1500);</script>";
    }
    
}
// Validamos si desea eliminar el registro
if( isset($_GET["id_del"]) && isset($_GET["confirm"]) ){
  if($_GET["confirm"] == base64_encode(md5($_GET["id_del"]))){
    $db->doQuery("DELETE FROM texto_home WHERE idtexto=".(int)$_GET["id_del"], DELETE_QUERY);
  }
}
    
// Obtenemos las datos
$db->doQuery("SELECT * FROM home as h inner join texto_home as t on h.idhome=t.idhome WHERE h.idhome=".(int)$_REQUEST["idhome"], SELECT_QUERY);
$dataAll = $db->results;

?>

<script>
  function confirmar(){
    if(confirm("Esta seguro que desea realizar esta acción ?")){
      return true;
    }
    return false;
  }
</script>
<!-- Estilos Autogenerados. -->
<style>
  .delete_cus{
    width: 20px;
    height: 20px;
    background-image: url('icon_del_cus.png');
    cursor: pointer;
    position: absolute;
    top: 5px;
    right:-5px;
    z-index: 99;
  }
.SI-FILES-STYLIZED label.cabinet
{
    width: 79px;
    height: 22px;
    background: url(../../../../js/btn-choose-file.gif) 0 0 no-repeat;

    display: block;
    overflow: hidden;
    cursor: pointer;
}

.SI-FILES-STYLIZED label.cabinet input.file
{
    position: relative;
    height: 100%;
    width: auto;
    opacity: 0;
    -moz-opacity: 0;
    filter:progid:DXImageTransform.Microsoft.Alpha(opacity=0);
}  

</style>

<div class="widget">

    <div class ="content">

        <div class="formEl_b">

            <fieldset>
                
                <?php 
                    echo "<h3>Home Item</h3>";
                 ?>
                
                <?php if($suma<=348){
                    
                    
                ?>
                <form class="forminterno" enctype="multipart/form-data" id="forminterno" name="forminterno" action="index.php?seccion=item&idhome=1" method="post" style="width: 900px;">
                    <input type="hidden" name="idinsert" id="id" value="<?php echo $id?>" />
                    
                    
                      
                            <img src="../imagenes/<?php echo $imagen; ?>" width="80"><br><br> 
                            
                            <div class="section">
                               <label>Agregar Item</label><br>
            <div style="margin-left:0% !important">
              
              <textarea style="border-radius: 5px; width: 300px; height: 200px ; " class="validate[required] large" name="texto" id="texto" ></textarea>
              <span class="f_help"> L&iacute;mite de car&aacute;cteres: 348 / <span class="texto"></span></span>
              <script type="text/javascript">
              $("#texto").limit("348",".texto");
              </script>
            </div>
          </div><br/>
          
          <div>
              <a class="uibutton icon edit right" href="javascript:void(0);" onclick="$('#forminterno').submit();">Guardar</a>
              
              <a class="uibutton special" href="index.php?seccion=banner">Volver</a>
             
            </div>
          </div>
          <p>&nbsp;</p>
                    
                </form>
                
                <?php }?>
                
            </fieldset>
            
            <div class="tableName">
        <table class="display data_table2">
          <thead>
            <tr>
              <th><span class="th_wrapp">Item</span></th>
              <th><span class="th_wrapp">Acciones</span></th>
            </tr>
          </thead>
          <tbody>
            <?php for( $i=0,$tot=count($dataAll) ; $i<$tot ; $i++ ) { $data=$dataAll; ?>
            <tr class="odd gradeX">
              <td class="center" width="150px"><?php echo $data[$i]["texto"]?></td>
              <td class="center " width="100px">
                <a class="uibutton icon edit" href="index.php?seccion=editItem&idtexto=<?php echo $data[$i]["idtexto"]?>">Editar</a><br/>
                <a class="uibutton special" onclick="return confirmar();" href="index.php?seccion=item&id_del=<?= $data[$i]["idtexto"]?>&confirm=<?= base64_encode(md5($data[$i]["idtexto"])) ?>&idhome=<?php echo $data[$i]["idhome"]; ?>">x Eliminar</a>
                
              </td>
            </tr>
            
            <?php } ?>
          </tbody>
        </table>
      </div>

        </div>
  <!--aquÃ­ indicamos cual formulario ha de ser validado.-->
<script>
$(".forminterno").validationEngine();

</script>
<script type="text/javascript" language="javascript">
SI.Files.stylizeAll();
</script>
<script>
//Espacio para otros ckeditors.
   //CKEDITOR.replace( "texto" );
</script>
  <!--Fin del Contenido del Modulo-->
    </div>
