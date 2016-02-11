<?php
/*
 * @file               : usuarios.php
 * @brief              : Script para la interaccion con la tabla usuarios, comentarios y archivos
 * @version            : 3.7.7.5 ALPHA
 * @ultima_modificacion: 2013-08-30
 * @author             : Felipe Camacho
 * @generated          : Generador de modulos versión 3.7.3 
 */

// Obtenemos las datos
$db->doQuery("SELECT * FROM usuarios ORDER BY id ASC", SELECT_QUERY);
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

<!-- full width -->
<div class="widget">
  <div class="content">
    <div class="formEl_b">
      <fieldset>
      <h3>Listado de usuarios</h3>
      </fieldset>
      <a class="uibutton" href="index.php?seccion=newusuarios">Nuevo usuario</a>
      <div class="tableName">
        <table class="display data_table2">
          <thead>
            <tr>
              <th><span class="th_wrapp">No.</span></th>
              <th><span class="th_wrapp">Nombre</span></th>
              <th><span class="th_wrapp">Email</span></th>
              <th><span class="th_wrapp">Acciones</span></th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1; foreach($dataAll as $usuario) : ?>
            <tr class="odd gradeX">
              <td class="center" width="70px"><?= $i; $i++; ?></td>
              <td class="center" width="70px"><?= $usuario["nombre"]?></td>
              <td class="center" width="70px"><?= $usuario["email"]?></td>
              <td class="center " width="100px">
                <a class="uibutton icon edit" href="index.php?seccion=comentarios&id=<?= $usuario["id"]?>">Comentarios</a><br/>
                <a class="uibutton special" href ="index.php?seccion=archivos&id=<?= $usuario["id"]?>">Archivos</a>
              </td>
            </tr>
            
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
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

