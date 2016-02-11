<?php 
// Recibimos las variables clave
$id = $_REQUEST['id'];
?>
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
        <form class="forminterno" enctype="multipart/form-data" id="forminterno" name="forminterno" action="index.php?seccion=archivos" method="post" style="width: 900px;">
        	<input type="hidden" name="id" id="usuario" value="<?php echo $id ?>" />
          <input type="hidden" name="responder" value="responder" />
          <div class="section">
          	<label>Agregar archivo</label><br>
            <input type="file" name="file" />
          </div>
          <br/>
          <div>
          	<a class="uibutton icon edit right" href="javascript:void(0);" onclick="$('#forminterno').submit();">Guardar</a>
            <a class="uibutton special" href="index.php?seccion=archivos&id=<?= $id ?>">Volver</a>
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
