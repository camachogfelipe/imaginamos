<?php 

//traer datos editar
if(isset($_REQUEST["idcontenido"])){
  $db->doQuery("SELECT * FROM contenido_herramientas where idcontenido=".(int)$_REQUEST["idcontenido"], SELECT_QUERY);
  $id = $db->results[0]["idcontenido"];
  $imagen = $db->results[0]["imagen"];
  $texto = $db->results[0]["texto1"];
  $url = $db->results[0]["link"];
  
}
    if(isset($_REQUEST["id_edit"])){
        
      $texto_c = GetData("texto", "");
      $link = GetData("link", "");
      
      
//Actualizar
  if( (int)$_REQUEST["idcontenido"]>0 ){  
    $update=$db->doQuery("UPDATE contenido_herramientas SET  texto1='".mysql_real_escape_string($texto_c)."', link ='".mysql_real_escape_string($link)."' WHERE idcontenido=".(int)$_REQUEST["idcontenido"], UPDATE_QUERY);
    $idinsertado=$_REQUEST["idcontenido"];
    if($update){
    echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Edici&oacute;n Realizada',3000) }, 1500);</script>";
    }else{
     echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
    }
  }
  
  //Codigo Para Subir Imagen1
    $retorno = ClassFIle::UploadImagenFile("img", "../imagenes", "original1_" . $idinsertado, "redimension_" . $idinsertado, 225, 140);
    if ($retorno["Status"]=="Uploader"){
    $db->doQuery("UPDATE contenido_herramientas SET imagen='".$retorno["NameFile"]."' WHERE idcontenido=".$idinsertado, UPDATE_QUERY);
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

<!--ajax para el select-->
<script type="text/javascript">
     $(document).ready(function(){ 
               jQuery("select[name='seleccion']").change(function(){displayCollage();});           
    });
    
    function displayCollage(){
       // alert('hola');
          var ajaxLoader = "<img src='../../../../assets/img/ajax-loader.gif' alt='loading...' />";           
        var optionValue = jQuery("select[name='seleccion']").val();
       // alert(optionValue);
        jQuery("#url")
            .html(ajaxLoader)
            .load('seccion1_Ajax.php', {id: optionValue, status: 1}, function(response){     
            if(response) {
                jQuery("#url").css('display', '');                       
            } else {                    
                jQuery("#url").css('display', 'none'); 
            }
        });     
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
                <form class="forminterno" enctype="multipart/form-data" id="forminterno" name="forminterno" action="index.php?seccion=seccion3&idcontenido=3" method="post" style="width: 900px;">
                    <input type="hidden" name="id_edit" id="id" value="<?= $id?>" />
                      
                            
                            <div class="section">
                               <label>Texto</label><br>
            <div style="margin-left:0% !important">
              
              <textarea style="border-radius: 5px; width: 500px; height: 200px ; " class="large" name="texto" id="texto"><?php echo $texto?></textarea>
              <span class="f_help"> L&iacute;mite de car&aacute;cteres: 76 / <span class="texto"></span></span>
              <script type="text/javascript">
              $("#texto").limit("76",".texto");
              </script>
            </div>          
          </div>
          
          <br>
          
          <img src="../imagenes/<?php echo $imagen; ?>" width="200"><br><br> 
          <label class="cabinet">Imagen</label><br>
                         <input class="file" type="file" name="img" id="img"/><br>
          
                              <br/><span style="color: black;">Tama&ntilde;o de la Imagen: <i>225 x 140</i></span><br><br>
          
        
          <?php
          
          $buscar = "www";
          $resultado = strpos($url, $buscar);
          
          if ($resultado == TRUE) {
                               
                           ?>
          
          <div class="section">
          <label>
                                     Url Actual
                                     <small>Actualmente se dirige a la siguien url :</small><label style="text-transform: lowercase"><?php echo $url;?></label> 
                                 </label><br><br>
          </div><br>
          <?php }else if ($resultado != TRUE) {
                           
     switch ($url) {

                  case ("index.php?base&seccion=index") :

                      $url = "Home";
                      break;
                  case ("index.php?seccion=empresa") :

                      $url = "Quienes Somos";

                      break;
                  case ("index.php?seccion=sabemos") :

                      $url = "Que sabemos hacer";

                      break;
                  case ("index.php?seccion=herramientas") :

                      $url = "Herramientas utiles";

                      break;
                  case ("index.php?seccion=ayuda") :

                      $url = "Como lo podemos ayudar";

                      break;
                  case ("index.php?seccion=contacto") :

                      $url = "Contacto";

                      break;
              }
                       ?>
          <div class="section">
          <label>
                                     Seccion Actual
                                     <small>Actualmente se dirige a la siguien seccion :</small><label><?php echo $url;?></label>
                                 </label><br><br>
          </div><br>
          <?php }?>
          <div class="section">
                                 <label>
                                     Tipo de enlace
                                     <small>seleccione el tipo de enlace que desa agregar</small>
                                 </label>
                                 <div>
                                     <select class="medium" style="display: none;" name ="seleccion" id="seleccion">
                                         <option>Seleccione</option>
                                         <option value="1">Url</option>
                                         <option value="2">Seccion</option>
                                     </select>
                                 </div>
                             </div><br><br>
                             
                             <div id="url">
                    
                                 
                            </div> 
                             
                             </div><br>
          <div>
              <a class="uibutton icon edit right" href="javascript:void(0);" onclick="$('#forminterno').submit();">Guardar</a>
              
              <a class="uibutton special" href="index.php?seccion=herramientas">Volver</a>
             
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

