<?php 
// Recibimos las variables clave
$id = $_REQUEST['id'];
$cid = $_REQUEST['cid'];
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
      	<h3>Respuesta a comentario</h3>
        <form class="forminterno" enctype="multipart/form-data" id="forminterno" name="forminterno" action="index.php?seccion=comentarios&id=<?php echo $id ?>" method="post" style="width: 900px;">
        	<input type="hidden" name="id" id="usuario" value="<?php echo $id ?>" />
          <input type="hidden" name="cid" id="comentario" value="<?php echo $cid ?>" />
          <input type="hidden" name="responder" value="responder" />
          <div class="section">
          	<label>Agregar archivo</label><br>
            <input type="file" name="file" />
            <div style="margin-left:0% !important">
              <textarea style="border-radius: 5px; width: 300px; height: 200px ; " class="validate[required] large" name="texto" id="texto" ></textarea>
              <span class="f_help"> L&iacute;mite de car&aacute;cteres: 348 / <span class="texto"></span></span>
              <script type="text/javascript">
                $("#texto").limit("348",".texto");
              </script>
						</div>
          </div>
          <br/>
          <div>
          	<a class="uibutton icon edit right" href="javascript:void(0);" onclick="$('#forminterno').submit();">Guardar</a>
            <a class="uibutton special" href="index.php?seccion=comentarios&id=<?= $id ?>">Volver</a>
          </div>
        </form>
      </fieldset>
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
