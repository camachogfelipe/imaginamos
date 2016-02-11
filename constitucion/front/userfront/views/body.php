<div class="container">
  <div class="row contenedor_internas">
    <div class="span12">
      <div class="cont_tit">
        <h1 class="inline">perfil</span></h1>
      </div> 
    </div>
    <div class="clear espacio_en_blanco"></div>
    <div class="conbt_tabsperfil">
      <a class="btn float_right marginleft" id="tab_historial" href="#">Historial de compras</a>
      <a class="btn float_right activo_botonperfil" id="tab_perfil" href="#">Editar perfil</a>
    </div>
    <div class="clear espacio_en_blanco"></div>
    <div class="span12 tabs_perfil tab_perfil" id="tab_perfil1">
      <?php echo form_open(base_url("userfront/registro")) ?>
      <input type="hidden" name="id" value="<?php echo $user['id']; ?>" />
      <input type="hidden" name="cms_recibirinfo" value="<?php echo $user['cms_recibirinfo']; ?>" />
      <input type="hidden" name="cms_activo" value="<?php echo $user['cms_activo']; ?>" />
      <div class="row">
        <fieldset>
          <div class="span6">
            <div class="row">
              <div class="span2">
                <label>Nombre*:</label>
              </div>
              <div class="span4">
                <input type="text" name="cms_nombre" value="<?php echo $user['cms_nombre']; ?>" placeholder="Nombre" class="validate[required]">
              </div>
            </div>
          </div>
          <div class="span6">
            <div class="row">
              <div class="span2">
                <label>Apellidos*:</label>
              </div>
              <div class="span4">
                <input type="text" name="cms_apellidos" value="<?php echo $user['cms_apellidos']; ?>" placeholder="Apellidos" class="validate[required]">
              </div>
            </div>
          </div>

          <div class="clear espacio_en_blanco"></div>

          <div class="span6">
            <div class="row">
              <div class="span2">
                <label>Género:</label>
              </div>
              <div class="span4">
                <div class="row-fluid">
                  <div class="span2">
                    <label>F</label>
                  </div>
                  <div class="span2">
                    <input type="radio" name="cms_genero" id="optionsRadios1" value="F"<?php echo ($user['cms_genero'] == "F") ? " checked" : ""; ?>>
                  </div>
                  <div class="span2">
                    <label>M</label>
                  </div>
                  <div class="span2">
                    <input type="radio" name="cms_genero" id="optionsRadios2" value="M"<?php echo ($user['cms_genero'] == "M") ? " checked" : ""; ?>>
                  </div>
                  <div class="span2">
                    <label>Otro</label>
                  </div>
                  <div class="span2">
                    <input type="radio" name="cms_genero" id="optionsRadios3" value="O"<?php echo ($user['cms_genero'] == "O") ? " checked" : ""; ?>>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="span6">
            <div class="row">
              <div class="span2">
                <label>Fecha de nacimiento::</label>
              </div>
              <div class="span4">
                <div class="row-fluid">
                  <div class="span2">
                    <label>día:</label>
                  </div>
                  <div class="span2">
                    <input type="text" name="cms_fechanacimiento_dia" value="<?php echo $user['cms_fechanacimiento_dia']; ?>" class="validate[custom[number], min[1], max[31]]">
                  </div>
                  <div class="span2">
                    <label>Mes:</label>
                  </div>
                  <div class="span2">
                    <input type="text" name="cms_fechanacimiento_mes" value="<?php echo $user['cms_fechanacimiento_mes']; ?>" class="validate[custom[number], min[1], max[12]]">             
                  </div>
                  <div class="span2">
                    <label>Año:</label>
                  </div>
                  <div class="span2">
                    <input type="text" name="cms_fechanacimiento_anio" value="<?php echo $user['cms_fechanacimiento_anio']; ?>" class="validate[custom[number], min[1900], max[<?php echo date("Y") ?>]]">             
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="clear espacio_en_blanco"></div>
          <div class="span6">
            <div class="row">
              <div class="span2">
                <label>Email*:</label>
              </div>
              <div class="span4">
                <input type="text" name="cms_email" readonly="" value="<?php echo $user['cms_email']; ?>" placeholder="Email" class="validate[required, custom[email]]">
              </div>
            </div>
          </div>
          <div class="span6">
            <div class="row">
              <div class="span2">
                <label>Profesión:</label>
              </div>
              <div class="span4">
                <input type="text" name="cms_profesion" value="<?php echo $user['cms_profesion']; ?>" placeholder="Profesión">
              </div>
            </div>
          </div>
          <div class="clear espacio_en_blanco"></div>
          <div class="span4">
            <div class="row">
              <div class="span2">
                <label>País:</label>
              </div>
              <div class="span2">
                <input type="text" name="cms_pais" value="<?php echo $user['cms_pais']; ?>" placeholder="País" class="validate[required]">
              </div>
            </div>
          </div>
          <div class="span4">
            <div class="row">
              <div class="span2">
                <label>Ciudad:</label>
              </div>
              <div class="span2">
                <input type="text" name="cms_ciudad" value="<?php echo $user['cms_ciudad']; ?>" placeholder="Ciudad" class="validate[required]">
              </div>
            </div>
          </div>
          <div class="span4">
            <div class="row">
              <div class="span2">
                <label>Teléfono:</label>
              </div>
              <div class="span2">
                <input type="text" name="cms_telefono" value="<?php echo $user['cms_telefono']; ?>" placeholder="Teléfono" class="validate[required]">
              </div>
            </div>
          </div>
          <div class="clear espacio_en_blanco"></div>
          <div class="span4">
            <div class="row">
              <div class="span2">
                <label>Contraseña actual:</label>
              </div>
              <div class="span2">
                <input type="password" name="passactual" placeholder="Contraseña actual">
              </div>
            </div>
          </div>
          <div class="span4">
            <div class="row">
              <div class="span2">
                <label>Nueva contraseña:</label>
              </div>
              <div class="span2">
                <input type="password" id="pass1" name="cms_password" placeholder="Nueva contraseña">
              </div>
            </div>
          </div>
          <div class="span4">
            <div class="row">
              <div class="span2">
                <label>Confirmar contraseña:</label>
              </div>
              <div class="span2">
                <input type="password" name="cms_password" placeholder="Confirmar contraseña" class="validate[equals[pass1]]">
              </div>
            </div>
          </div>
          <div class="clear espacio_en_blanco"></div>
          <fieldset>
            <div class="span12">
              <label>Comprar un plan:</label>
            </div>
            <div class="clear espacio_en_blanco"></div>
            <?php
            $planes = new \planes();
            $planes->order_by("nombre_plan", "asc")->get();
            $planes = $planes->all_to_array(array("id", "nombre_plan", "tiempo_plan", "valor_plan"));
            if (!empty($planes)) :
              ?>
              <?php foreach ($planes as $plan) : ?>
                <div class="span168">
                  <div class="row-fluid">
                    <div class="span8">
                      <label title="<?php echo $plan['nombre_plan'] . " " . $plan['valor_plan'] ?>" class="conttoltip"><?php echo $plan['nombre_plan'] ?>:</label>
                    </div>
                    <div class="span4">
                      <input type="radio" name="planes_id" id="optionsRadios1-1" value="<?php echo $plan['id'] ?>" class="validate[required]"<?php echo ($user['planes_id'] == $plan['id']) ? " checked" : ""; ?>>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            <?php endif; ?>
          </fieldset>
          <div class="clear espacio_en_blanco"></div>
          <fieldset>
            <div class="span12">
              <label>Métodos de pago:</label>
            </div>
            <div class="clear espacio_en_blanco"></div>
            <div class="span7 modo_pagos">
              <img src="<?php echo base_url("assets/img/tarjetas/1.png") ?>" alt="">
              <img src="<?php echo base_url("assets/img/tarjetas/2.png") ?>" alt="">
              <img src="<?php echo base_url("assets/img/tarjetas/3.png") ?>" alt="">
              <img src="<?php echo base_url("assets/img/tarjetas/4.png") ?>" alt="">
            </div>
            <div class="span3">
              <label title="Estas son las politicas de privacidad" class="conttoltip">Políticas de privacidad</label>
            </div>
            <div class="span2">
              <button class="btn btn-primary ancho100" type="submit">Actualizar datos</button>
            </div>
          </fieldset>

      </div>
      </form>
    </div>
    <div class="span12 tabs_perfil tab_historial">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Historial</th>
            <th class="centrar_contenido">Fecha</th>
          </tr>
        </thead>
        <tbody>
        <?php if(!empty($compras)) : $x = 0; ?>
          <?php foreach($compras as $compra) : ?>
          <tr>
            <td><?php echo ++$x; ?>. <?php
              if($compra['cms_tipo'] == "L") echo "Libro: ";
              if($compra['cms_tipo'] == "P") echo "Plan: ";
              echo $compra['cms_titulo'];
              if($compra['cms_tipo'] == "L") :
                switch($compra['cms_tipolibro']) :
                  case "P" : echo " - PDF"; break;
                  case "I" : echo " - IMPRESO"; break;
                  case "A" : echo " - PDF E IMPRESO"; break;
                endswitch;
              endif;
            ?></td>
            <td class="centrar_contenido"><?php
              echo date("d/m/Y", strtotime($compra['cms_fecha_compra']));
            ?></td>
          </tr>
          <?php endforeach; ?>
        <?php else: ?>
          <tr><td colspan="2">No tiene compras registradas</td></tr>
        <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>
  <?php
    if (isset($msg)) :
      if ($error == true) :
        ?>
        <div style="background-color: #f2dede; border-color: #ebccd1; color: #a94442; padding: 15px; margin-bottom: 20px; border: 1px solid transparent; border-radius: 4px;">
      <?php else : ?>
        <div style="background-color: #d9edf7; border-color: #bce8f1; color: #31708f; padding: 15px; margin-bottom: 20px; border: 1px solid transparent; border-radius: 4px;">
      <?php endif; ?>
          <?php echo $msg; ?>
        </div>
  <?php endif; ?>
</div>
<div class="clear espacio_en_blancofooter"></div>

<script type="text/javascript">
  $(document).ready(function() {
    $('form').validationEngine({promptPosition: "bottomCenter"});
  });
</script>