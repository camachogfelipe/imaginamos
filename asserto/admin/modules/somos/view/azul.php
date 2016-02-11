<?php 

//traer datos editar
if(isset($_REQUEST["idcontenido"])){
  $db->doQuery("SELECT * FROM contenido_somos where idcontenido=".(int)$_REQUEST["idcontenido"], SELECT_QUERY);
  $id = $db->results[0]["idcontenido"];
  $imagen1 = $db->results[0]["imagen1"];
  $imagen2 = $db->results[0]["imagen2"];
  $titulo1 = $db->results[0]["texto1"];
  $texto1 = $db->results[0]["texto2"];
  $titulo2 = $db->results[0]["texto3"];
  $texto2 = $db->results[0]["texto4"];
  
}
    if(isset($_REQUEST["id_edit"])){
      $titulo1_c = GetData("titulo1", "");
      $texto1_c = GetData("texto1", "");
      $titulo2_c = GetData("titulo2", "");
      $texto2_c = GetData("texto2", "");
      
//Actualizar
  if( (int)$_REQUEST["idcontenido"]>0 ){  
    $update=$db->doQuery("UPDATE contenido_somos SET  texto1='".mysql_real_escape_string($titulo1_c)."', texto2='".mysql_real_escape_string($texto1_c)."', texto3='".mysql_real_escape_string($titulo2_c)."', texto4='".mysql_real_escape_string($texto2_c)."' WHERE idcontenido=".(int)$_REQUEST["idcontenido"], UPDATE_QUERY);
    $idinsertado=$_REQUEST["idcontenido"];
    if($update){
    echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Edici&oacute;n Realizada',3000) }, 1500);</script>";
    }else{
     echo "<script type='text/javascript'>setTimeout(function(){showError('ERROR',3000) }, 1500);</script>";
    }
  }
  
  //Codigo Para Subir Imagen1
    $retorno = ClassFIle::UploadImagenFile("img1", "../imagenes", "original1_" . $idinsertado, "redimension_" . $idinsertado, 470, 190);
    if ($retorno["Status"]=="Uploader"){
    $db->doQuery("UPDATE contenido_somos SET imagen1='".$retorno["NameFile"]."' WHERE id=".$idinsertado, UPDATE_QUERY);
        // echo "<script type='text/javascript'>setTimeout(function(){showSuccess('Inserci&oacute;n de Imagen Realizada',3000) }, 1500);</script>";
    }
    //Codigo Para Subir Imagen2
    $retorno2 = ClassFIle::UploadImagenFile("img2", "../imagenes", "original2_" . $idinsertado, "redimension_" . $idinsertado, 470, 190);
    if ($retorno2["Status"]=="Uploader"){
    $db->doQuery("UPDATE contenido_somos SET imagen2='".$retorno["NameFile"]."' WHERE id=".$idinsertado, UPDATE_QUERY);
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
                <form class="forminterno" enctype="multipart/form-data" id="forminterno" name="forminterno" action="index.php?seccion=azul&idcontenido=3" method="post" style="width: 900px;">
                    <input type="hidden" name="id_edit" id="id" value="<?= $id?>" />
                      
                            
                                                                                                                        
                            <label>Titulo1</label>
            <div>
              <input style="border-radius: 5px;" class ="large" type="text" name="titulo1" id="titulo1" value="<?php echo $titulo1?>" />
              <span class="f_help"> L&iacute;mite de car&aacute;cteres: 30 <span class="titulo"></span></span>
              <script type="text/javascript">
              $("#titulo1").limit("30",".titulo"); 
              </script>
            
          </div><br/>
                            
                            <div class="section">
                               <label>Texto1</label><br>
            <div style="margin-left:0% !important">
              
              <textarea style="border-radius: 5px; width: 500px; height: 200px ; " class="large" name="texto1" id="texto1"><?php echo $texto1?></textarea>
              <span class="f_help"> L&iacute;mite de car&aacute;cteres: 213 / <span class="texto"></span></span>
              <script type="text/javascript">
              $("#texto1").limit("213",".texto");
              </script>
            </div>          
          </div>
          
          <br>
          
          <img src="../imagenes/<?php echo $imagen1; ?>" width="200"><br><br> 
          <label class="cabinet">Imagen1</label><br>
                         <input class="file" type="file" name="img1" id="img"/><br>  
          <br/><span style="color: black;">Tama&ntilde;o de la Imagen: <i>470 x 190</i></span><br><br>
                         <div class="section"></div>
           <br><br><br><br><br><br>
          
          <label>Titulo2</label>
            <div>
              <input style="border-radius: 5px;" class ="large" type="text" name="titulo2" id="titulo2" value="<?php echo $titulo2?>" />
              <span class="f_help"> L&iacute;mite de car&aacute;cteres: 30 <span class="titulo"></span></span>
              <script type="text/javascript">
              $("#titulo2").limit("30",".titulo"); 
              </script>
            
          </div><br/>
                            
                            <div class="section">
                               <label>Texto2</label><br>
            <div style="margin-left:0% !important">
              
              <textarea style="border-radius: 5px; width: 500px; height: 200px ; " class="large" name="texto2" id="texto2"><?php echo $texto2?></textarea>
              <span class="f_help"> L&iacute;mite de car&aacute;cteres: 213 / <span class="texto"></span></span>
              <script type="text/javascript">
              $("#texto2").limit("213",".texto");
              </script>
            </div>
          </div><br/>
          
          <img src="../imagenes/<?php echo $imagen2; ?>" width="200"><br><br> 
          
           <label class="cabinet">Imagen2</label><br>
                         <input class="file" type="file" name="img2" id="img"/><br>      
                         <br/><span style="color: black;">Tama&ntilde;o de la Imagen: <i>470 x 190</i></span><br><br>
          </div>
          <div>
              <a class="uibutton icon edit right" href="javascript:void(0);" onclick="$('#forminterno').submit();">Guardar</a>
              
              <a class="uibutton special" href="index.php?seccion=somos">Volver</a>
             
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
