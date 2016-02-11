<?php 

if(isset($_REQUEST["idcontenido"])){
  $db->doQuery("SELECT * FROM contenido_somos where idcontenido=".(int)$_REQUEST["idcontenido"], SELECT_QUERY);
  $id = $db->results[0]["idcontenido"];
  $imagen = $db->results[0]["imagen"];
  $titulo = $db->results[0]["texto1"];
  $texto = $db->results[0]["texto2"];
}
    
    if(isset($_REQUEST["id_edit"])){
      $titulo = GetData("titulo", "");
      $nombre_c = GetData("texto", "");
      

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
    $insert=$db->doQuery("INSERT INTO bullets_somos ( nombre) VALUES ( '".mysql_real_escape_string($bullet)."');", INSERT_QUERY);
    $idinsertado=$db->getLastId();
  }
  
  //Eliminar bullets
  if( isset($_GET["id_del"]) && isset($_GET["confirm"]) ){
  if($_GET["confirm"] == base64_encode(md5($_GET["id_del"]))){
    $db->doQuery("DELETE FROM bullets_somos WHERE idbullets=".(int)$_GET["id_del"], DELETE_QUERY);
  }
}
    
// Obtenemos las datos
$db->doQuery("SELECT * FROM bullets_somos ", SELECT_QUERY);
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
                <form class="forminterno" enctype="multipart/form-data" id="forminterno" name="forminterno" action="index.php?seccion=naranja&idcontenido=2.php" method="post" style="width: 900px;">
                    <input type="hidden" name="id_edit" id="id" value="<?= $id?>" />
                    
                             <div class="section">
            <label>Titulo</label>
            <div>
              <input style="border-radius: 5px;" class ="large" type="text" name="titulo" id="titulo" value="<?php echo $titulo?>" />
              <span class="f_help"> L&iacute;mite de car&aacute;cteres: 30 <span class="titulo"></span></span>
              <script type="text/javascript">
              $("#titulo").limit("30",".titulo"); 
              </script>
            </div>
          </div><br/>
                            
                            <div class="section">
                               <label>Texto</label><br>
            <div >
              
              <textarea style="border-radius: 5px; width: 500px; height: 200px ; "  name="texto" id="texto"><?php echo $texto?></textarea>
              <span class="f_help"> L&iacute;mite de car&aacute;cteres: 220 / <span class="texto"></span></span>
              <script type="text/javascript">
              $("#texto").limit("220",".texto"); 
              </script>
            </div>
          </div><br/>
          <?php if (count($dataAll)< 5) {
                               
                           ?>
           <div class="section">
            <label>item</label>
            <div>
              <input style="border-radius: 5px;" class="large" type="text" name="bullet" id="bullet" value="" />
              <span class="f_help"> L&iacute;mite de car&aacute;cteres: 30 <span class="bullet"></span></span>
              <script type="text/javascript">
              $("#bullet").limit("30",".bullet");
              </script>
            </div>
          </div><br/>
          <?php }else {} ?>
          <div>
              <a class="uibutton icon edit right" href="javascript:void(0);" onclick="$('#forminterno').submit();">Guardar</a>
              
              <a class="uibutton special" href="index.php?seccion=somos">Volver</a>
             
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
              <th><span class="th_wrapp">item</span></th>
              <th><span class="th_wrapp">Acciones</span></th>
            </tr>
          </thead>
          <tbody>
            <?php for( $i=0,$tot=count($dataAll) ; $i<$tot ; $i++ ) { $data=$dataAll; ?>
            <tr class="odd gradeX">
              <td class="center" width="70px"><?= $data[$i]["nombre"]?></td>
              <td class="center " width="100px">
                <a class="uibutton icon edit" href="index.php?seccion=editItem&idbullets=<?= $data[$i]["idbullets"]?>">Editar</a><br/>
                <a class="uibutton special" onclick="return confirmar();" href="index.php?seccion=naranja&id_del=<?php echo $data[$i]["idbullets"]?>&confirm=<?php echo base64_encode(md5($data[$i]["idbullets"])) ?>">x Eliminar</a>
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

