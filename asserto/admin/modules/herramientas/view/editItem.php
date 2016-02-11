<?php 

if(isset($_REQUEST["idlink"])){
  $db->doQuery("SELECT * FROM link_herramientas where idlink=".(int)$_REQUEST["idlink"], SELECT_QUERY);
  $id = $db->results[0]["idlink"];
  $nombre = $db->results[0]["titulo_link"];
  $url = $db->results[0]["link"];
  
  
}
    if(isset($_REQUEST["id"])){
      $nombre_c = GetData("titulo", "");
      $link = GetData("link", "");

  if( (int)$_REQUEST["id"]>0 ){  
    $update=$db->doQuery("UPDATE link_herramientas SET  titulo_link='".mysql_real_escape_string($nombre_c)."', link='".mysql_real_escape_string($link)."' WHERE idlink=".(int)$_REQUEST["id"], UPDATE_QUERY);
//    $idinsertado=$_REQUEST["idbullets"];
    if($update){
    echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Edici&oacute;n Realizada',3000) }, 1500);</script>";
    }else{
     echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
    }
  }
}
    

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
            .load('link_Ajax.php', {id: optionValue, status: 1}, function(response){     
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

    <div class ="content">

        <div class="formEl_b">

            <fieldset>
                
                <?php 
                    echo "<h3>Home Item</h3>";
                 ?>
                <form class="forminterno" enctype="multipart/form-data" id="forminterno" name="forminterno" action="index.php?seccion=editItem&<?php echo $id; ?>&idlink=<?php echo $id?>" method="post" style="width: 900px;">
                    <input type="hidden" name="id" id="id" value="<?php echo $id ;?>" />
                      
             <div class="section">
            <label>Titulo</label>
            <div>
              <input style="border-radius: 5px;" class="large" type="text" name="titulo" id="bullet" value="<?php echo $nombre ?>" />
              <span class="f_help"> L&iacute;mite de car&aacute;cteres: 50 <span class="bullet"></span></span>
              <script type="text/javascript">
              $("#bullet").limit("50",".bullet");
              </script>
            </div>
          </div><br/>
          
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
          </div><br><br><br>
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
                             </div><br><br><br>
                             
                             <div id="url">
                    
                                 
                            </div><br><br>
          
          <div>
              <a class="uibutton icon edit right" href="javascript:void(0);" onclick="$('#forminterno').submit();">Guardar</a>
              
              <a class="uibutton special" href="index.php?seccion=link">Volver</a>
             
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

