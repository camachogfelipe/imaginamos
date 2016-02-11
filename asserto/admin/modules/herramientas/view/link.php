<?php 


  $db->doQuery("SELECT * FROM link_herramientas", SELECT_QUERY);
  $id = $db->results[0]["idlink"];
//  $link = $db->results[0]["link"];
  $url = $db->results[0]["titulo_link"];
  

    
    if(isset($_REQUEST["id_edit"])){
      $titulo = GetData("titulo", "");
      $nombre_c = GetData("texto", "");
      $link = GetData("link", "");
      

  if( (int)$_REQUEST["idcontenido"]>0 ){  
    $update=$db->doQuery("UPDATE contenido_somos SET  texto1='".mysql_real_escape_string($titulo)."', texto2='".mysql_real_escape_string($nombre_c)."' WHERE idcontenido=".(int)$_REQUEST["idcontenido"], UPDATE_QUERY);
    $idinsertado=$_REQUEST["idcontenido"];
    if($update){
    echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Edici&oacute;n Realizada',3000) }, 1500);</script>";
    }else{
     echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
    }
  }
}

if( $_REQUEST["bullet"] != ""){
   
    $bullet = GetData("bullet", "");
    $link = GetData("link", "");
    $insert=$db->doQuery("INSERT INTO link_herramientas (titulo_link, link) VALUES ( '".mysql_real_escape_string($bullet)."', '".mysql_real_escape_string($link)."');", INSERT_QUERY);
    $idinsertado=$db->getLastId();
  }
  
  //Eliminar bullets
  if( isset($_GET["id_del"]) && isset($_GET["confirm"]) ){
  if($_GET["confirm"] == base64_encode(md5($_GET["id_del"]))){
    $db->doQuery("DELETE FROM link_herramientas WHERE idlink=".(int)$_GET["id_del"], DELETE_QUERY); 
  }
}
    
// Obtenemos las datos
$db->doQuery("SELECT * FROM link_herramientas ", SELECT_QUERY);
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
      Edicion
    </span>
  </div>
    
    <div class ="content">

        <div class="formEl_b">

            <fieldset>
                
                <?php 
                    echo "<h3>Seccion</h3>";
                 ?>
                <form class="forminterno" enctype="multipart/form-data" id="forminterno" name="forminterno" action="index.php?seccion=link" method="post" style="width: 900px;">
                    <input type="hidden" name="id_edit" id="id" value="<?= $id?>" />
                    
                      
                       
          <?php if (count($dataAll)< 10) {
                               
                           ?>
           <div class="section">
            <label>Titulo</label>
            <div>
              <input style="border-radius: 5px;" class="large" type="text" name="bullet" id="bullet" value="" />
              <span class="f_help"> L&iacute;mite de car&aacute;cteres: 50 <span class="bullet"></span></span>
              <script type="text/javascript">
              $("#bullet").limit("50",".bullet");
              </script>
            </div>
          </div><br/>
          
         
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
          <?php }else {} ?>
          
          
          <div>
              <a class="uibutton icon edit right" href="javascript:void(0);" onclick="$('#forminterno').submit();">Guardar</a>
              
              <a class="uibutton special" href="index.php?seccion=herramientas">Volver</a>
             
            </div>
          </div>
          <p>&nbsp;</p>
                    
                </form>
                
                
            </fieldset>
            
            <?php if(!isset($_GET["id_edit"])){ ?>
      <div class="tableName">
        <table class="display data_table2">
          <thead>
            <tr>
              <th><span class="th_wrapp">titulo</span></th>
              <th><span class="th_wrapp">link</span></th>
              <th><span class="th_wrapp">Acciones</span></th>
            </tr>
          </thead>
          <tbody>
            <?php for( $i=0,$tot=count($dataAll) ; $i<$tot ; $i++ ) { $data=$dataAll; ?>
            <tr class="odd gradeX">
              <td class="center" width="70px"><?= $data[$i]["titulo_link"]?></td>
              <?php 
              
                    $buscar = "www";
            $resultado = strpos($url = $data[$i]["link"], $buscar);
                    
              if ($resultado !== TRUE) {
                  
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
     
 }?>
              <td class="center" width="70px"><?php echo $url; ?></td>
              <td class="center " width="100px">
                <a class="uibutton icon edit" href="index.php?seccion=editItem&idlink=<?= $data[$i]["idlink"]?>">Editar</a><br/>
                <a class="uibutton special" onclick="return confirmar();" href="index.php?seccion=link&id_del=<?php echo $data[$i]["idlink"]?>&confirm=<?php echo base64_encode(md5($data[$i]["idlink"])) ?>">x Eliminar</a>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
<?php } ?>
    </div>

  </div>
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

