<div class="selectores">
  <?php echo form_open_multipart('audiciones/save/' . ($edit_mode ? $datos->id : null), 'id="crear-form"', array('edit_mode' => $edit_mode)) ?>
  <?php array('ciudades' => $ciudades); ?>
  <?php if (!empty($alert_messages)) : ?>
    <div><?php echo $alert_messages ?></div>
  <?php endif; ?>


  <div class="clr"></div>
  <div class="campo-reg-lab" style="width: 320px;">
    <label style="padding-left: 4px;">Título</label>
    <input name="titulo" type="text" class="campo" value="<?php echo $edit_mode ? $datos->titulo : "Ingresa el tipo de audicion que deseas crear" ?>" onclick="if(this.value=='Ingresa el tipo de audicion que deseas crear'){ this.value=''}"  onblur="if(this.value==''){ this.value='Ingresa el tipo de audicion que deseas crear'}" />
  </div>

  <div class="campo-reg-lab" style="width: 320px;">
    <label style="padding-left: 4px;">Ciudad, Municipio o barrio</label>
    <div class="selectBox" id="select-largo2">
      <select name="ciudad" id="city"  style="width:312px;" class="comboBox1" >      
        <option selected="selected" value="Seleccione">Seleccione</option>  
        <option value="Aipe" >Aipe</option>
        <option value="Alban" >Alban</option>
        <option value="Amaime" >Amaime</option>
        <option value="Aratoca" >Aratoca</option>
        <option value="Arcabuco" >Arcabuco</option>
        <option value="Andalucía" >Andalucía</option>
        <option value="Arjona" >Arjona</option>     
        <option value="Armenia" >Armenia</option>
        <option value="Armero" >Armero</option>
        <option value="Barbosa" >Barbosa</option>
        <option value="Barranquilla" >Barranquilla</option>
        <option value="Bayunca" >Bayunca</option>
        <option value="Belencito" >Belencito</option>
        <option value="Bello" >Bello</option>
        <option value="Bogotá" >Bogotá</option>
        <option value="Bojaca" >Bojaca</option>
        <option value="Bosa" >Bosa</option>       
        <option value="Bucaramanga" >Bucaramanga</option>
        <option value="Buenaventura" >Buenaventura</option>
        <option value="Buenos Aires" >Buenos Aires</option>
        <option value="Buga" >Buga</option>
        <option value="Buga La Grande" >Buga La Grande</option>
        <option value="Briceño" >Briceño</option> 
        <option value="Caicedonia" >Caicedonia</option>
        <option value="Calarcá" >Calarcá</option>
        <option value="Caldas" >Caldas</option>
        <option value="Cali" >Cali</option>
        <option value="Caloto" >Caloto</option>
        <option value="Cajicá" >Cajicá</option>
        <option value="Candelaria" >Candelaria</option>
        <option value="Carmen de Bolívar" >Carmen de Bolívar</option>
        <option value="Cartago" >Cartago</option>
        <option value="Cartagena" >Cartagena</option>  
        <option value="Castilla" >Castilla</option> 
        <option value="Caucasia" >Caucasia</option> 
        <option value="Cavasa" >Cavasa</option>
        <option value="Cerete" >Cerete</option>
        <option value="Cienaga" >Cienaga</option>
        <option value="Circasia" >Circasia</option>
        <option value="Combita" >Combita</option>
        <option value="Copacabana" >Copacabana</option>
        <option value="Costa Rica" >Costa Rica</option>
        <option value="Cota" >Cota</option>
        <option value="Cucaita" >Cucaita</option>
        <option value="Cúcuta" >Cúcuta</option>
        <option value="Chiquinquirá" >Chiquinquirá</option>
        <option value="Chía" >Chía</option>
        <option value="Chinauta" >Chinauta</option>
        <option value="Choconta" >Choconta</option> 
        <option value="Dagua" >Dagua</option>
        <option value="Dosquebradas" >Dosquebradas</option>
        <option value="Duitama" >Duitama</option>
        <option value="Envigado" >Envigado</option>
        <option value="Engativá" >Engativá</option>
        <option value="El Muña" >El Muña</option>
        <option value="El Zulia" >El Zulia</option>
        <option value="Espinal" >Espinal</option>
        <option value="El Carmelo" >El Carmelo</option>
        <option value="El Cerrito" >El Cerrito</option>
        <option value="El Placer" >El Placer</option>
        <option value="Facatativa" >Facatativa</option>
        <option value="Fontibón" >Fontibón</option>
        <option value="Funza" >Funza</option>
        <option value="Fusagasuga" >Fusagasuga</option>
        <option value="Flandes" >Flandes</option>  
        <option value="Florida" >Florida</option>
        <option value="Floridablanca" >Floridablanca</option>
        <option value="Gachancipá" >Gachancipá</option>
        <option value="Gaira" >Gaira</option>
        <option value="Girón" >Girón</option>
        <option value="Girardot" >Girardot</option>
        <option value="Ginebra" >Ginebra</option>
        <option value="Guarne" >Guarne</option>   
        <option value="Guaduas" >Guaduas</option>
        <option value="Guayavetal" >Guayavetal</option>     
        <option value="Guamo" >Guamo</option>    
        <option value="Guacarí" >Guacarí</option> 
        <option value="Honda" >Honda</option>
        <option value="Ibagué" >Ibagué</option>
        <option value="Ipiales" >Ipiales</option>      
        <option value="Itagui" >Itagui</option>
        <option value="Jamundi" >Jamundi</option>
        <option value="La Ceja" >La ceja</option>
        <option value="La Estrella" >La Estrella</option>
        <option value="La Tablaza" >La Tablaza</option>
        <option value="La Dorada" >La Dorada</option>      
        <option value="La Calera" >La Calera</option>
        <option value="La Caro" >La Caro</option>
        <option value="La Paila" >La Paila</option>
        <option value="La Unión" >La Unión</option>
        <option value="La Tebaida" >La Tebaida</option>
        <option value="La Victoria" >La Victoria</option>
        <option value="La Parada" >La Parada</option>
        <option value="Lebrija" >Lebrija</option>
        <option value="Loboguerrero" >Loboguerrero</option>
        <option value="Los Patios" >Los Patios</option>
        <option value="Madrid" >Madrid</option>
        <option value="Maicao" >Maicao</option>
        <option value="Malambo" >Malambo</option>
        <option value="Manizales" >Manizales</option>
        <option value="Marinilla" >Marinilla</option>
        <option value="Mariquita" >Mariquita</option>
        <option value="Medellín" >Medellín</option>
        <option value="Melgar" >Melgar</option>
        <option value="Mongui" >Mongui</option>     
        <option value="Montería" >Montería</option>     
        <option value="Mosquera" >Mosquera</option>     
        <option value="Montenegro" >Montenegro</option>
        <option value="Natagaima" >Natagaima</option>
        <option value="Neiva" >Neiva</option>     
        <option value="Nemocón" >Nemocón</option>
        <option value="Nobsa" >Nobsa</option>
        <option value="Ortigal" >Ortigal</option>
        <option value="Oiba" >Oiba</option>
        <option value="Paipa" >Paipa</option>
        <option value="Palmira" >Palmira</option>
        <option value="Pasto" >Pasto</option> 
        <option value="Payande" >Payande</option>
        <option value="Pereira" >Pereira</option>
        <option value="Piendamo" >Piendamo</option>
        <option value="Piedecuesta" >Piedecuesta</option>
        <option value="Pinchote" >Pinchote</option>
        <option value="Popayán" >Popayán</option>
        <option value="Puerto Boyacá" >Puerto Boyacá</option>
        <option value="Puerto Colombia" >Puerto Colombia</option>
        <option value="Puerto Tejada" >Puerto Tejada</option>
        <option value="Puente Piedra" >Puente Piedra</option>
        <option value="Puente Quetame" >Puente Quetame</option>
        <option value="Puerto Bogotá" >Puerto Bogotá</option>
        <option value="Puerto Salgar" >Puerto Salgar</option>
        <option value="Purificación" >Purificación</option>  
        <option value="Planeta Rica" >Planeta Rica</option>        
        <option value="Pradera" >Pradera</option> 
        <option value="Quetame" >Quetame</option>
        <option value="Quimbaya" >Quimbaya</option>
        <option value="Ráquira" >Ráquira</option>      
        <option value="Rionegro" >Rionegro</option>
        <option value="Riohacha" >Riohacha</option>
        <option value="Rosal" >Rosal</option>      
        <option value="Rodadero" >Rodadero</option>
        <option value="Roldanillo" >Roldanillo</option>
        <option value="Rozo" >Rozo</option>  
        <option value="Sabaneta" >Sabaneta</option>
        <option value="San Antonio de Prado" >San Antonio de Prado</option>
        <option value="San Cristóbal" >San Cristóbal</option>  
        <option value="Santa Rosa de Viterbo" >Santa Rosa de Viterbo</option>
        <option value="Samaca" >Samaca</option>
        <option value="Santa Marta" >Santa Marta</option>
        <option value="San Gil" >San Gil</option>
        <option value="Saldaña" >Saldaña</option>
        <option value="San Pedro" >San Pedro</option>
        <option value="Santander Quilichao" >Santander Quilichao</option>
        <option value="Sasaima" >Sasaima</option>
        <option value="Sesquile" >Sesquile</option>
        <option value="Sevilla" >Sevilla</option> 
        <option value="Sibaté" >Sibaté</option>
        <option value="Silvania" >Silvania</option>
        <option value="Simijaca" >Simijaca</option>
        <option value="Sincelejo" >Sincelejo</option> 
        <option value="Soacha" >Soacha</option>
        <option value="Sopo" >Sopo</option>
        <option value="Soledad" >Soledad</option>
        <option value="Sogamoso" >Sogamoso</option>
        <option value="Socorro" >Socorro</option>
        <option value="Sonso" >Sonso</option>
        <option value="Sutamerchán" >Sutamerchán</option>    
        <option value="Suba" >Suba</option>
        <option value="Subachoque" >Subachoque</option>
        <option value="Susa" >Susa</option>     
        <option value="Taganga" >Taganga</option>
        <option value="Tabio" >Tabio</option>
        <option value="Tenjo" >Tenjo</option>
        <option value="Tibasosa" >Tibasosa</option>
        <option value="Tinjaca" >Tinjaca</option>
        <option value="Tocancipa" >Tocancipa</option>
        <option value="Tolemaida" >Tolemaida</option>       
        <option value="Turbaco" >Turbaco</option>     
        <option value="Tunja" >Tunja</option>
        <option value="Tunja" >Tunja</option>
        <option value="Tulúa" >Tulúa</option>
        <option value="Ubaté" >Ubaté</option>
        <option value="Usaquén" >Usaquén</option>
        <option value="Usme" >Usme</option>
        <option value="Valledupar" >Valledupar</option>
        <option value="Ventaquemada" >Ventaquemada</option>
        <option value="Villa de Leiva" >Villa de Leiva</option>
        <option value="Villamaria" >Villamaria</option>
        <option value="Villarica" >Villarica</option>
        <option value="Villapinzón" >Villapinzón</option>
        <option value="Villeta" >Villeta</option>
        <option value="Villavicencio" >Villavicencio</option>
        <option value="Villa del Rosario" >Villa del Rosario</option>
        <option value="Vijes" >Vijes</option>
        <option value="Villa Gorgona" >Villa Gorgona</option>
        <option value="Yotoco" >Yotoco</option>
        <option value="Yumbo" >Yumbo</option>
        <option value="Zarzal" >Zarzal</option>
        <option value="Zipaquirá" >Zipaquirá</option>
      </select>
      <div class="clr"></div>
    </div>
<!-- <input name="ciudad" id="city"  type="text" class="campo" value="<?php echo $edit_mode ? $datos->ciudad : $this->input->post('ciudad') ?>"  />-->
  </div>

  <div class="campo-reg-lab" style="width: 320px;">
    <label style="padding-left: 4px;">Contacto</label>
    <input name="contacto" type="text" class="campo" value="<?php echo $edit_mode ? $datos->contacto : "Ingresa un numero de contacto" ?>" onclick="if(this.value=='Ingresa un numero de contacto'){ this.value=''}"  onblur="if(this.value==''){ this.value='Ingresa un numero de contacto'}" />
    <div class="clr"></div>
  </div>
  <div class="fecha2"><div class="audicion-fecha1" style=" margin-top: 21px;"><label for="fecha_inicial">Fecha inicial<br><b>de Publicación</b></label></div></div>
  <div class="clr"></div>
  <input name="fecha_inicio" id="fecha_inicial" type="text" class="campo2" placeholder="Año - Mes - Día" readonly="true" value="<?php echo $edit_mode ? $datos->fecha_inicio : $this->input->post('fecha_inicio') ?>"  />

  <div class="campo-reg-lab" style="margin-top: -16px;">
    <label style="padding-left: 4px;">Días de publicación</label>
    <div class="selectBox" id="select-largo2">
      <select style="width:312px;" class="comboBox1" name="dias_publicacion" >
        <option  value="0">Seleccione</option>
        <?php for ($i = 1; $i <= 30; $i++): ?>
          <option value="<?php echo $i ?>"><?php echo $i ?></option>
        <?php endfor; ?>
      </select>
      <div class="clr"></div>
    </div>
  </div>

  <div class="campo-reg-lab" style="width: 175px;margin-top: -16px;">
    <label style="padding-left: 4px;">Nº aplicaciones</label>
    <input name="numero_aplicaciones" type="number" class="campo2" min="1" max="100"  placeholder="Seleccione" value="<?php echo $edit_mode ? $datos->numero_aplicaciones : $this->input->post('numero_aplicaciones') ?>"  />

    <div class="clr"></div>
  </div>
  <div class="clr"></div>
  <div style="margin: 2em 0;" class="carga-tit">
    <h3>Imagen de la audición:</h3>
    <?php if ($edit_mode && !empty($datos->imagen)) : ?>
      <img src="<?php echo uploads_url($datos->imagen) ?>" />
    <?php endif; ?>


    <div class="clear"></div>
    <small style="font-size: .8em;"><?php echo $edit_mode ? 'Cambiar: ' : null ?></small><input type="file" name="imagen" id="imagen" />
    <div class="acotacion-campo3">Tamaño de la imagen: ( 40x40 px )</div>
  </div>

  <div class="clr"></div>
  <div class="area-cont1"><textarea name="introduccion" class="area1" placeholder="Introducción (120 Caracteres)" maxlength="120"><?php echo $edit_mode ? $datos->introduccion : $this->input->post('introduccion') ?></textarea></div>
  <div class="area-cont2"><textarea name="descripcion" class="area2" placeholder="Descripción (220 Caracteres)" maxlength="220"><?php echo $edit_mode ? $datos->descripcion : $this->input->post('descripcion') ?></textarea></div>
  <input type="submit" class="bot-publicar" value="<?php echo $edit_mode ? 'Guardar' : 'Publicar' ?>"/>
  <?php echo form_close() ?>
  <div class="clr"></div>
</div>
<div class="clr"></div>

<div id="dialog" style="display:none;">
  <p>Esta seguro</p>
</div>

<script type="text/javascript">


  $(function() {
    $('#fecha_inicial').datepicker({
      minDate: 0
    });
  });

  $('#crear-form').on('submit', function() {
    var ok = true;
    if ($('[name="edit_mode"]').val() === 0) {
      ok = confirm('¿Está seguro de crear la audición?');
    }
    return ok;
  });
</script>