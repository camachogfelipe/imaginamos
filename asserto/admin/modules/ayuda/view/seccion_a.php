<?php 

if(isset($_REQUEST["idcontenido"])){
  $db->doQuery("SELECT * FROM contenido_ayuda where idcontenido=".(int)$_REQUEST["idcontenido"], SELECT_QUERY);
  $id = $db->results[0]["idcontenido"];
//  $imagen = $db->results[0]["imagen"];
  $texto = $db->results[0]["texto1"];
//  $texto2 = $db->results[0]["texto2"];
}
//var_dump($id);
    if(isset($_REQUEST["id_edit"])){
      $texto = GetData("texto", "");

  if( (int)$_REQUEST["idcontenido"]>0 ){  
    $update=$db->doQuery("UPDATE contenido_ayuda SET  texto1='".mysql_real_escape_string($texto)."' WHERE idcontenido=".(int)$_REQUEST["idcontenido"], UPDATE_QUERY);
    $idinsertado=$_REQUEST["idcontenido"];
    if($update){
    echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Edici&oacute;n Realizada',3000) }, 1500);</script>";
    }else{
     echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
    }
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
                <form class="forminterno" enctype="multipart/form-data" id="forminterno" name="forminterno" action="index.php?seccion=seccion_a&idcontenido=5.php" method="post" style="width: 900px;">
                    <input type="hidden" name="id_edit" id="id" value="<?= $id?>" />
                      
<!--                            <img src="../imagenes/<?php // echo $imagen; ?>" width="80"><br><br> -->
                            
                            <div class="section">
                               <label>Texto</label><br>
            <div style="margin-left:0% !important">
              
              <textarea style="border-radius: 5px; width: 500px; height: 200px ; " class="validate[required] large" name="texto" id="texto"><?php echo $texto?></textarea>
              <span class="f_help"> L&iacute;mite de car&aacute;cteres: 90 / <span class="texto"></span></span>
              <script type="text/javascript">
              $("#texto").limit("90",".texto");
              </script>
            </div>
          </div><br/>
          
          <div>
              <a class="uibutton icon edit right" href="javascript:void(0);" onclick="$('#forminterno').submit();">Guardar</a>
              
              <a class="uibutton special" href="index.php?seccion=ayuda">Volver</a>
             
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

