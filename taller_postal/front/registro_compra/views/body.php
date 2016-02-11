<div class="content_int clearfix">
  <h1 class="bebas main-title"><span>Registro de compra</span></h1>
  
  <div class="main_p">
    <p>
    Curabitur ultricies luctus nulla, sit amet tempus est vulputate ac. Integer justo sem, scelerisque non erat quis, cursus ultricies augue. Mauris malesuada turpis ac turpis tincidunt pellentesque. Vestibulum pretium, nulla id malesuada auctor, eros mi dictum felis, at interdum orci eros id massa. Sed pharetra, magna eget pharetra porttitor, est mauris imperdiet magna, sed cursus risus quam et ligula.
    </p>
  </div>
  <form class="form_contacto" onsubmit="return false">
    <h3 class="bebas elect">Datos del comprador</h3>
    <div class="clearfix">
      <div class="left">
          <input type="text" name="nombre" class="input1 validate[required]" placeholder="Nombre" />
          <input type="text" name="email" class="input1 validate[required, custom[email]]" placeholder="Correo electrónico" />
          <input type="text" name="direccion" class="input1 validate[required]" placeholder="Dirección" />
          <input type="text" name="telefono" class="input1 validate[required, custom[phone]]" placeholder="Teléfono" />
          <input type="text" name="celular" class="input1 validate[required, custom[phone]]" placeholder="Celular" />
      </div>
      <div class="right">
        <select name="ciudad" class="select_contact select1">
          <option>Selecciona</option>
           <?php foreach ($municipios as $municipio): ?>
              <option><?php echo $municipio->nombre; ?></option>
             <?php endforeach; ?>
        </select>
          <textarea name="comentario" class="textarea1" placeholder="Comentario"></textarea>
      </div>
    </div>
    <hr class="sep-rom">
    <h3 class="bebas elect">Datos del receptor</h3>
    <div class="clearfix">
      <div class="left">
          <input name="nombre_rec" type="text" class="input1 validate[required]" placeholder="Nombre" />
          <input name="email_rec" type="text" class="input1 validate[required]" placeholder="Correo electrónico" />
          <input name="celular_rec" type="text" class="input1 validate[required]" placeholder="Celular" />
      </div>
      <div class="right">
          <input name="telefono_rec" type="text" class="input1 validate[required]" placeholder="Teléfono" />
          <select name="ciuadad_rec" class="select_contact select1">
              <option value="">Selecciona</option>
             <?php foreach ($municipios as $municipio): ?>
              <option><?php echo $municipio->nombre; ?></option>
             <?php endforeach; ?>
          </select>
          <input name="direccion_rec" type="text" class="input1 validate[required]" placeholder="Dirección" />
      </div>
    </div>
    <div class="clearfix">
        <input type="submit" name="pagar100" class="submit1 right" value="Pagar el 100%" />
      <input type="submit" name="pagar50" class="submit1 right" value="Pagar el 50%" style="margin-right:10px;" />
    </div>
  </form>
  
</div>