  <div class="content_940 content_home">
    <div class="linea_home">
      <h1 class="title_dest bold">Contáctanos</h1>
    </div>
    <div id="parrafo_contacto" class="dest_serv" style="color:#454545; padding:22px 0;">
        <!--Si quieres saber más de nosotros, tienes una pregunta, comentario, petición o queja,  por favor  diligencia el siguiente formato y  muy pronto te estaremos contactando.-->
    </div>
      <form id='validation-es' class="form_contacto clearfix" action="{{url:site}}contact/create" method="post">
      <div class="clearfix">
      <div class="left">
        <input type="text" name='nombre' class="input1 validate[required]" placeholder="Nombre del contacto" />
        <input type="text" name='empresa' class="input1 validate[required]" placeholder="Nombre de la empresa" />
        <input type="text" name='email' class="input1 validate[required, custom[email]]" placeholder="Correo electrónico" />
        <input type="text" name='celular' class="input1 validate[required, custom[phone]]" placeholder="Celular" />
        <input type="text" name='telefono' class="input1 validate[required, custom[phone]]" placeholder="Teléfono" />
      </div>
      <div class="right">
        <input type="text" name='pais' class="input1 validate[required]" placeholder="Pais" />
        <input type="text" name='ciudad' class="input1 validate[required]" placeholder="Ciudad" />
        <textarea name='comentario' placeholder="Comentario" class="textarea1"></textarea>
      </div>
      </div>
      <input type="submit" class="submit" value="Enviar" /></form>
    </form>
  </div>