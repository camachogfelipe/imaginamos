<body style="min-width:600px;">

  <div class="cont_emergpago">
    <div class="div_gris"></div>
      <h2 class="tit_secciones">Registra tu compra</h2>
    <div class="div_gris margin_bottom"></div>
    <p>
      Sed pharetra, nibh eget commodo pharetra, arcu dolor ornare diam, cursus elementum tellus nibh eget neque. Etiam ac nibh a sapien fringilla tincidunt ut in leo. In vulputate ultrices est eu pharetra. Phasellus sed quam a ipsum interdum dignissim. Aenean tellus justo, malesuada eget lacus et, viverra faucibus mauris. Etiam euismod aliquam lacus in feugiat. Morbi vitae bibendum dolor, sed porta ante. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus suscipit diam nec tellus blandit, sit amet bibendum urna fermentum. Nullam ornare turpis ac nulla rhoncus dictum. Etiam egestas fringilla dui quis tempor. Quisque pulvinar ultrices dolor eu rutrum. Fusce lacinia felis nibh, convallis cursus enim pretium quis. 
    </p>
    <div class="cont_form">
      <div class="row-fluid">
          <form method="post" action="<?php base_url()."carrito/pagar"; ?>">
          <fieldset>
              <div class="span6">
                <input type="text" name="nombre" placeholder="Nombre">
              </div>
              <div class="span6">
                <input type="text" name="cedula" placeholder="Cedula">
              </div>
          </fieldset>
          <fieldset>
              <div class="span6">
                <select name="ciudad" >
                    <option value="">Ciudad</option>
                  <?php foreach ($municipios as $city) : ?>
                    <option value="<?php echo $city->nombre; ?>"><?php echo ucwords(strtolower($city->nombre))." - ".$city->departamento_nombre; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="span6">
                <input type="text" name="direccion" placeholder="Dirección">
              </div>
          </fieldset>
          <fieldset>
              <div class="span6">
                <input type="text" name="telefono" placeholder="Telefóno">
              </div>
              <div class="span6">
                <input type="text" name="celular" placeholder="Celular">
              </div>
          </fieldset>
          <fieldset>
              <div class="span6">
                <p class="tit_form">Pagar contraentrega</p>
                <a  name="tipo_pago" type="submit" class="bt_anadir bt_formapago" href="#">Pagar en efectivo</a>
                <a  name="tipo_pago" type="submit" class="bt_anadir bt_formapago" href="#">Pagar con datafóno</a>
              </div>
              <div class="span6">
                <p class="tit_form">Pago en línea</p>
                <input  name="tipo_pago" type="submit" class="bt_anadir bt_formapago" value="Pago en línea" />
              </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
