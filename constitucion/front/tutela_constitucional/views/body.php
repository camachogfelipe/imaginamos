<div class="container">
  <div class="row contenedor_internas">
  	<?php if($logged == FALSE): ?>
    <div class="globo_indice" id="globo_registrarse" style="display:block;">
      <div class="header_globoindicederecha"></div>
      <div class="centro_globoindice">
        <h1 class="centrar_contenido">Para ver este contenido debe estar registrado y tener un plan activo</h1>
      </div>
      <div class="footer_globoindice"></div>
    </div>
    <?php endif; ?>
    <div class="span12">
      <div class="cont_tit">
        <h1 class="inline">CORTE <span>constitucional</span></h1>
      </div>
    </div>
    <div class="clear espacio_en-blanco"></div>
    <div class="span12">
      <div class="cont_tablacorte cont_scroll">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Lista de resultados</th>
              <th class="centrar_contenido">Demandas</th>
              <th class="centrar_contenido">Constitución</th>
              <th class="centrar_contenido">Documento relacionado</th>
            </tr>
          </thead>
          <tbody>
            <?php $x = 1; foreach($demandas as $demanda) : ?>
            <tr>
              <td><?php echo $x++;?>. <?php echo $demanda['cms_numeroref'] ?></td>
              <td class="centrar_contenido"><a class="color_rojo" href="#">Ver</a></td>
              <td class="centrar_contenido"><a class="color_rojo" href="<?php echo ($logged == FALSE)?"#":base_url($demanda['link_path']); ?>">Ir</a></td>
              <td class="centrar_contenido"><a class="color_rojo carga_modal" href="<?php echo ($logged == FALSE)?"#":base_url('modal_corte/demanda/'.$demanda['id']); ?>">Sentencia</a></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <div class="clear espacio_en_blancogrande"></div>
      <div class="row">
        <?php echo form_open(base_url("tutela_constitucional/buscar")) ?>
          <fieldset>
            <div class="span2">
              <select name="anio">
                <option value="">Año</option>
                <?php
									if(!empty($anios)) :
									foreach($anios as $anio) :
										echo '<option value="' . $anio['cms_anio'] . '">' . $anio['cms_anio'] ."</option>\n";
									endforeach;
								endif;
                ?>
              </select>
            </div>
            <div class="span2">
              <select name="mes">
                <option value="">Mes</option>
                <?php
									$month = array("", "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
									if(!empty($meses)) :
									foreach($meses as $mes) :
										echo '<option value="' . $mes['cms_mes'] . '">' . $month[$mes['cms_mes']] ."</option>\n";
									endforeach;
								endif;
                ?>
              </select>
            </div>
            <div class="span2">
              <input type="text" name="expediente" placeholder="Expediente">
            </div>
            <div class="span2">
              <select name="magistrado">
                <option value="">Magistrado</option>
                <?php
								if(!empty($magistrados)) :
									foreach($magistrados as $magistrado) :
										echo '<option value="' . $magistrado['id'] . '">' . $magistrado['cms_nombre'] ."</option>\n";
									endforeach;
								endif;
                ?>
              </select>
            </div>
            <div class="span2">
              <input type="text" name="accionante" placeholder="Accionante">
            </div>
          </fieldset>
          <div class="clear espacio_en_blancopeque"></div>
          <fieldset>
            <div class="span2 offset10">
              <button class="btn btn-primary ancho100" type="submit">Filtrar</button>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="clear espacio_en_blancofooter"></div>
