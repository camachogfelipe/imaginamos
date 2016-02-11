<?php 


  $db->doQuery("SELECT * FROM datos_contacto where iddatos_contacto=1", SELECT_QUERY);
  $id = $db->results[0]["iddatos_contacto"];
  $direccion = $db->results[0]["direccion"];
  $ciudad = $db->results[0]["ciudad"];
  $telefono = $db->results[0]["telefono"];
  $correo = $db->results[0]["correo"];
  

    
    if(isset($_REQUEST["id_edit"])){
      $direccion_a = GetData("direccion", "");
      $ciudad_a = GetData("ciudad", "");
      $telefono_a = GetData("telefono", "");
      $correo_a = GetData("correo", "");
      

  if( (int)$_REQUEST["iddatos_contacto"]>0 and isset($_POST["id_edit"])){  
    $update=$db->doQuery("UPDATE datos_contacto SET  direccion='".mysql_real_escape_string($direccion_a)."', ciudad='".mysql_real_escape_string($ciudad_a)."', telefono='".mysql_real_escape_string($telefono_a)."', correo='".mysql_real_escape_string($correo_a)."'WHERE iddatos_contacto= 1 ", UPDATE_QUERY);
    $idinsertado=$_REQUEST["iddatos_contacto"];
    if($update and isset($_POST["id_edit"])){
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
                <form class="forminterno" enctype="multipart/form-data" id="forminterno" name="forminterno" action="index.php?seccion=datos&iddatos_contacto=1" method="post" style="width: 900px;">
                    <input type="hidden" name="id_edit" id="id" value="<?= $id?>" />
                    
                            
                             <div class="section">
            <label>Direccion</label>
            <div>
              <input style="border-radius: 5px;" class ="large" type="text" name="direccion" id="direccion" value="<?php echo $direccion?>" />
              <span class="f_help"> L&iacute;mite de car&aacute;cteres: 20 <span class="titulo"></span></span>
              <script type="text/javascript">
              $("#direccion").limit("20",".direccion"); 
              </script>
            </div>
          </div><br/>
          
                         <div class="section">
            <label>Ciudad</label>
            <div>
              <input style="border-radius: 5px;" class ="large" type="text" name="ciudad" id="ciudad" value="<?php echo $ciudad?>" />
              <span class="f_help"> L&iacute;mite de car&aacute;cteres: 20 <span class="titulo"></span></span>
              <script type="text/javascript">
              $("#ciudad").limit("20",".ciudad"); 
              </script>
            </div>
          </div><br/>
                            
             
                        <div class="section">
            <label>Telefono</label>
            <div>
              <input style="border-radius: 5px;" class ="large" type="text" name="telefono" id="telefono" value="<?php echo $telefono?>" />
              <span class="f_help"> L&iacute;mite de car&aacute;cteres: 20 <span class="titulo"></span></span>
              <script type="text/javascript">
              $("#telefono").limit("20",".telefono"); 
              </script>
            </div>
          </div><br/>
          
                     <div class="section">
            <label>Correo</label>
            <div>
              <input style="border-radius: 5px;" class="validate[required,custom[email]] large" type="text" name="correo" id="correo" value="<?php echo $correo?>" />
              <span class="f_help"> L&iacute;mite de car&aacute;cteres: 20 <span class="titulo"></span></span>
              <script type="text/javascript">
              $("#correo").limit("20",".correo"); 
              </script>
            </div>
          </div><br/>
          
          <div>
              <a class="uibutton icon edit right" href="javascript:void(0);" onclick="$('#forminterno').submit();">Guardar</a>
            </div>
          </div>
          <p>&nbsp;</p>
                    
                </form>
                
                
            </fieldset>
            
            
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

