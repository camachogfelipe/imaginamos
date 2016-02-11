<?php 

if(isset($_REQUEST["idbullets"])){
  $db->doQuery("SELECT * FROM bullets_somos where idbullets=".(int)$_REQUEST["idbullets"], SELECT_QUERY);
  $id = $db->results[0]["idbullets"];
  $nombre = $db->results[0]["nombre"];
  
  
}
    if(isset($_POST["idbullets"])){
      $nombre_c = GetData("texto", "");

  if( (int)$_REQUEST["idbullets"]>0 ){  
    $update=$db->doQuery("UPDATE bullets_somos SET  nombre='".mysql_real_escape_string($nombre_c)."' WHERE idbullets=".(int)$_REQUEST["idbullets"], UPDATE_QUERY);
    $idinsertado=$_REQUEST["idbullets"];
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
                <form class="forminterno" enctype="multipart/form-data" id="forminterno" name="forminterno" action="index.php?seccion=editItem" method="post" style="width: 900px;">
                    <input type="hidden" name="idbullets" id="id" value="<?= $id?>" />
                      
                            
                            <div class="section">
                               <label>Editar Item</label><br>
            <div style="margin-left:0% !important">
              
              <textarea style="border-radius: 5px; width: 300px; height: 200px ; " class="validate[required] large" name="texto" id="texto"><?php echo $nombre?></textarea>
              <span class="f_help"> L&iacute;mite de car&aacute;cteres: 50 / <span class="texto"></span></span>
              <script type="text/javascript">
              $("#texto").limit("50",".texto");
              </script>
            </div>
          </div><br/>
          
          <div>
              <a class="uibutton icon edit right" href="javascript:void(0);" onclick="$('#forminterno').submit();">Guardar</a>
              
              <a class="uibutton special" href="index.php?seccion=naranja&idcontenido=2">Volver</a>
             
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

