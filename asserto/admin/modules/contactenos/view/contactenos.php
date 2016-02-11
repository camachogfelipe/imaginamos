<?php 

//traer datos editar

  $db->doQuery("SELECT * FROM imagen_contactenos where idimagen= 1", SELECT_QUERY);
  $id = $db->results[0]["idimagen"];
  $imagen = $db->results[0]["imagen"];
//  $texto = $db->results[0]["texto1"];
  

    if(isset($_REQUEST["idimagen"])){
//        
//      $texto_c = GetData("texto", "");
//      
//      
////Actualizar
//  if( (int)$_REQUEST["idcontenido"]>0 ){  
//    $update=$db->doQuery("UPDATE contenido_sabemos SET  texto1='".$texto_c."' WHERE idcontenido=".(int)$_REQUEST["idcontenido"], UPDATE_QUERY);
    $idinsertado=$_REQUEST["idimagen"];
//    if($update){
//    echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Edici&oacute;n Realizada',3000) }, 1500);</script>";
//    }else{
//     echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
//    }
//  }
  
  //Codigo Para Subir Imagen1
    $retorno = ClassFIle::UploadImagenFile("img", "../imagenes", "original1_" . $idinsertado, "redimension_" . $idinsertado, 320, 300);
    if ($retorno["Status"]=="Uploader"){
    $db->doQuery("UPDATE imagen_contactenos SET imagen='".$retorno["NameFile"]."' WHERE idimagen=".$idinsertado, UPDATE_QUERY);
        // echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n de Imagen Realizada',3000) }, 1500);</script>";
    }
}
    
// Obtenemos las datos
//$db->doQuery("SELECT * FROM home as h inner join texto_home as t on h.idhome=t.idhome WHERE h.idhome=".(int)$_REQUEST["idhome"], SELECT_QUERY);
//$dataAll = $db->results;

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

    <!-- full width -->
<div class="widget">
  <div class="header">
    <span>
      <span class="ico gray group"></span>
      Edicion de texto
    </span>
  </div>
    
    <div class ="content">

        <div class="formEl_b">

            <fieldset>
                
                <?php 
                    echo "<h3>Edicion</h3>";
                 ?>
                <form class="forminterno" enctype="multipart/form-data" id="forminterno" name="forminterno" action="index.php?seccion=contactenos&idimagen=1" method="post" style="width: 900px;">
                    <input type="hidden" name="id_edit" id="id" value="<?= $id?>" />
          
          <br>
          
          <img src="../imagenes/<?php echo $imagen; ?>" width="400"><br><br> 
          <label class="cabinet">Imagen</label><br>
                         <input class="file" type="file" name="img" id="img"/><br>
                         <br/><span style="color: black;">Tama&ntilde;o de la Imagen: <i>320 x 300</i></span><br><br>
                              
          </div>
          <div>
              <a class="uibutton icon edit right" href="javascript:void(0);" onclick="$('#forminterno').submit();">Guardar</a>
              
              <a class="uibutton special" href="index.php?seccion=contactenos&idimagen=1">Actualizar</a>
             
            </div>
        
            
          </div>
          <p>&nbsp;</p>
                    
                </form>
                
                
            </fieldset>
            

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


