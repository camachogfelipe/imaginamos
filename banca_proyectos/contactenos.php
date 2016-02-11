<?php include("header.php"); ?>

<!--<h1>Contáctenos</h1>--><br>
<section class="main">
  <p style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, exercitationem, facere ex neque nostrum nesciunt Quis, at! </p>
  <ul class="datos-contacto">
    <li data-key="">Datos de contacto</li>
    <li><i class="fa fa-map-marker"></i>Avenida Calle 127 15-36 Of 229.  Bogotá - Colombia</li>
    <li><i class="fa fa-mobile"></i>+ (57) (1) 648 0722</li>
    <li><i class="fa fa-envelope"></i>proyectos@bancadeproyectos.com</li>
  </ul>
  <figure class="contacto"><div class="e2"></div><img src="./assets/img/banner02.jpg" alt="" >

  </figure>
  <div class="clear"></div>
  <form action="" class="contacto">
    <fieldset>
      <div class="input-group"> <span class="input-group-addon"><i class="fa fa-user "></i></span>
        <input value="" placeholder="Nombre *" class="validate[required] text-input form-control" type="text" name="" id="" />
      </div>
      <div class="input-group"> <span class="input-group-addon "><i class="fa fa-mobile big"></i></span>
        <input value="" placeholder="Celular " class="validate[requiredx,custom[number]] text-input form-control" type="text" name="" id="" />
      </div>
    </fieldset>
    <fieldset>
      <div class="input-group"> <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
        <input value="" placeholder="Correo electrónico *" class="validate[required,custom[email]] text-input form-control" type="text" name="" id="" />
      </div>
      <div class="input-group"> <span class="input-group-addon"><i class="fa fa-home"></i> </span>
        <input value="" placeholder="Ciudad de residencia " class="validate[requiredx] text-input form-control" type="text" name="" id="" />
      </div>
    </fieldset>
    <fieldset>
      <div class="input-group"> <span class="input-group-addon"><i class="fa fa-comment-o"></i></span>
        <textarea placeholder="Comentarios *" class="validate[required]"></textarea>
      </div>
    </fieldset>
    <span>Campos obligatorios (*)</span>
    <button class="enviar" type="submit">Enviar<i class="fa fa-chevron-right"></i></button>
  </form>
</section>
<?php include("footer.php"); ?>
<?php include("llamados.php"); ?>
