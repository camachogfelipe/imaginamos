<?php
$id = 1;
// Validamos si hizo post y desea subir una imagen
if (isset($_POST["id"])) {
  $id = $_POST["id"];

  if ($id == 0) {
    $id = 1;
  } else {

    $db->doQuery("UPDATE contacto SET contacto ='" . GetData("titulo") . "' WHERE id=" . $id, 4);

    $val = 2;
  }
}
// Consultamos la img actual del banner
$db->doQuery("SELECT * FROM contacto WHERE id=" . $id, 1);
$oficina = $db->results[0];
?>
<script type="text/javascript">
  function cambiar(valor){
    if(valor ==1){
      document.getElementById("imagen").style.display= "";
      document.getElementById("video").style.display= "none";
    }else if(valor ==2 || valor == 3){
      document.getElementById("video").style.display= "";
      document.getElementById("imagen").style.display= "none";
    }
  }
</script>
<script type="text/javascript" language="javascript">
  $(document).ready(function(){
    $('#mensaje1').hide();
    $('#mensaje2').hide();
    $('#submitForm').click(function(){
      var expresion = /^[a-zA-Z0-9_\.\-]+@[A-Za-z0-9\-]+\.[A-Za-z0-9\-\.]+$/;
      var email = $('#titulo').val();
      if(email == "Agrega tu correo"){
        $('#mensaje1').fadeIn();
        return false;
      }else{
        $('#mensaje1').fadeOut();
        
      }
      if(!expresion.test(email)){
        $('#mensaje2').fadeIn();
        return false;
      }else{
        $('#mensaje2').fadeOut();
        $('#forminterno').submit();
        
      }
      
      
      
    });
  });
</script>
<!-- full width -->
<div class="widget">
  <div class="header">
    <span>
      <span class="ico gray window"></span>
      CONTÁCTENOS  >> EDITANDO  CORREO
    </span>
  </div>
  <div class="content">
    <div class="formEl_b">
      <fieldset>
        <h3><?php echo  ($id == 0) ? "" : "EDITANDO CORREO DE CONTÁCTENOS" ?></h3>

        <form method="post" action="" name="forminterno" id="forminterno" enctype="multipart/form-data">
          <input type="hidden" value="<?php echo  $id ?>" name="id" id="id">
          <div style="margin-top: 36px;">
            <label>Correo</label>
            <div>
              <input type="text" id="titulo" name="titulo" PlaceHolder="Agrega tu correo" style="width: 325px; margin-left: 200px; margin-top: -25px;" value="<?php echo $oficina["contacto"]; ?>" />
              <div id="mensaje1" style="position: absolute;margin-left: 519px;margin-top: -64px;background: darkgray;padding: 11px;border-radius: 10px;color: white;font-size: 18px;">Agrega tu correo</div>
              <div id="mensaje2" style="position: absolute;margin-left: 519px;margin-top: -64px;background: darkgray;padding: 11px;border-radius: 10px;color: white;font-size: 18px;">Tu correo no es correcto</div>
            </div>

          </div>


        </form>
      </fieldset>
      <p>&nbsp;</p>
      <div><a id="submitForm"  class="uibutton normal large">Guardar</a></div>
    </div>
  </div>
  <!--Fin del Contenido del Modulo-->
</div>
<script>
  cambiar(<?php echo  $oficina["id_tipos"] ?>);
</script>
<?php
if (isset($val)) {
  $erno = $val;
  if (intval($erno)) {
    if ($erno == 1) {
      echo '<script>setTimeout(\'alert("Destacado agregado correctamente");\',400);</script>';
    }
    if ($erno == 2) {
      echo '<script>setTimeout(\'alert("Contacto, editado correctamente");\',400);</script>';
    }
    if ($erno == 3) {
      echo '<script>setTimeout(\'alert("Destacado todos los campos ");\',400);</script>';
    }
  }
}
?>
<script type="text/javascript" language="javascript">
  $('#titulo').limit("50",".titulo");
  $('#texto').limit("3205",".texto");
</script>