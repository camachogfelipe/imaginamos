<?php echo $template['partials']['header']; ?>
<div class="cont_emergente450">
  <div class="cont_tit">
    <h1 class="inline">COMPRAR <span>LIBRO</span></h1>
  </div>
  <div class="img_compra"> <img src="<?php echo base_url(); ?>assets/img/img_compra.jpg" alt=""> </div>
  <h2 class="sub_titformularios centrar_contenido color_azul"><?php $libro['cms_titulo']; ?></h2>
  <div class="clear"></div>
  <?php echo form_open(base_url("modal_comprar/comprar")) ?>
  <input type="hidden" name="idlibro" value="<?php echo $libro['id'] ?>">
  <div class="row-fluid">
    <fieldset>
      <!--<div class="span12">
        <select>
          <option>Tipo de item</option>
          <option>2</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>-->
      <div class="clear espacio_en_blanco"></div>
      <div class="row-fluid">
        <div class="span12">
          <div class="row-fluid">
            <div class="span4">
              <div class="row-fluid">
                <div class="span8">
                  <label title="Digital" class="conttoltip">Digital:</label>
                </div>
                <div class="span4">
                  <input type="radio" class="validate[required]" name="tipo" id="optionsRadios2-2" checked data-value="<?php echo $libro['cms_preciopdf'] ?>" value="pdf">
                </div>
              </div>
            </div>
            <div class="span4">
              <div class="row-fluid">
                <div class="span8">
                  <label title="Impreso" class="conttoltip">Impreso:</label>
                </div>
                <div class="span4">
                  <input type="radio" class="validate[required]" name="tipo" id="optionsRadios2-3" data-value="<?php echo $libro['cms_precioimpreso'] ?>" value="impreso">
                </div>
              </div>
            </div>
            <div class="span4">
              <div class="row-fluid">
                <div class="span8">
                  <label title="Los dos" class="conttoltip">Los dos:</label>
                </div>
                <div class="span4">
                  <input type="radio" class="validate[required]" name="tipo" id="optionsRadios2-4" data-value="<?php echo $libro['cms_preciopdf'] + $libro['cms_precioimpreso'] ?>" value="pdf_impreso">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="clear espacio_en_blanco"></div>
      <div class="row-fluid">
        <div class="span6">
          <p class="text_precios color_azul">Precio PDF: <span id="precio">$ <?php echo number_format($libro['cms_preciopdf'], 0) ?></span></p>
        </div>
        <div class="span6">
          <p class="text_precios color_azul">Precio Impreso: <span id="precio">$ <?php echo number_format($libro['cms_precioimpreso'], 0) ?></span></p>
        </div>
        <div style="text-align: center">
          <p class="text_precios color_azul">Precio envio*: <span>$ <?php echo number_format($libro['cms_precioenvio'], 0) ?></span></p>
        </div>
      </div>
      <div class="clear espacio_en_blanco"></div>
      <div class="row-fluid">
        <div class="span6">
          <input type="text" class="validate[required, custom[onlyLetterSp]]" name="nombre" placeholder="Nombres">
        </div>
        <div class="span6">
          <input type="text" class="validate[required, custom[onlyLetterSp]]" name="apellidos" placeholder="Apellidos">
        </div>
      </div>
      <div class="clear espacio_en_blanco"></div>
      <div class="row-fluid">
        <div class="span4">
          <input type="text" class="validate[required]" name="direccion" placeholder="Dirección">
        </div>
        <div class="span4">
          <input type="text" class="validate[required, custom[onlyLetterSp]]" name="ciudad" placeholder="Ciudad">
        </div>
        <div class="span4">
          <input type="text" class="validate[required, custom[phone]]" name="telefono" placeholder="Teléfono">
        </div>
      </div>
    </fieldset>
    <div class="clear espacio_en_blanco"></div>
    <fieldset>
      <div class="span8">
        <p class="tit_asterisco">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
      <div class="span4">
        <button class="btn btn-primary ancho100" type="submit">Enviar</button>
      </div>
    </fieldset>
  </div>
</form>
</div>
<?php if (isset($error) and $error == true and isset($msg)) : ?>
  <div style="background-color: #f2dede; border-color: #ebccd1; color: #a94442; padding: 15px; margin-bottom: 20px; border: 1px solid transparent; border-radius: 4px;">
    <?php echo $msg; ?>
  </div>
<?php elseif (isset($error) and $error == false and isset($msg)) : ?>
  <div style="color: #3a87ad; background-color: #d9edf7; border-color: #bce8f1; padding: 15px; margin-bottom: 20px; border: 1px solid transparent; border-radius: 4px;">
    <?php echo $msg; ?>
  </div>
<?php endif; ?>
<script type="text/javascript">
  $(document).ready(function() {
    $('form').validationEngine({promptPosition: "bottomCenter"});
  });
</script>
