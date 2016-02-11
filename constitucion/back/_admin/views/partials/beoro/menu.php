<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <div class="desplegableu pull-right" style="margin-top: 7px;"> <a class="goog-text-highlight btn-seccion dropdown-toggle" data-toggle="dropdown" href="#" style=""> <i class="icon-user icon-large"></i> </a> <a class="btn-seccion dropdown-toggle" data-toggle="dropdown" href="#"  > <span class="icon-chevron-down icon-large"></span> </a>
        <ul class="dropdown-menu">
          <li> <a href="<?php echo cms_url('login/logout') ?>"> <i class="icon-remove"></i>Cerrar Sesión </a> </li>
        </ul>
      </div>
      <div id="fade-menu" class="pull-left">
        <ul class="clearfix" id="mobile-nav">
          <li> <a href="javascript:void(0)">Home</a>
            <ul>
              <!--<li> <a href="javascript:void(0)">Contacto</a>
                <ul>
                  <li> <a href="<?php echo cms_url('contactos/redes') ?>">Redes Sociales</a> </li>
                  <li> <a href="<?php echo cms_url('contactos/contactos') ?>">Datos de Contacto</a> </li>
                </ul>
              </li>-->
              <li> <a href="<?php echo cms_url('firma/home') ?>">Texto inicio</a> </li>
            </ul>
          </li>
          <li> <a href="javascript:void(0)">Nuestra firma</a>
            <ul>
              <li> <a href="<?php echo cms_url('firma/quienes') ?>">Quienés somos</a> </li>
              <li> <a href="<?php echo cms_url('firma/experiencia') ?>">Nuestra experiencia</a> </li>
              <li> <a href="<?php echo cms_url('firma/servicios') ?>">Nuestros servicios</a> </li>
              <li> <a href="<?php echo cms_url('firma/abogado') ?>">Abogados</a> </li>
            </ul>
          </li>
          <li> <a href="javascript:void(0)">Constitución</a>
            <ul>
              <li> <a href="<?php echo cms_url('constitucion/titulos') ?>">Títulos</a> </li>
              <li> <a href="<?php echo cms_url('constitucion/articulos') ?>">Artículos</a> </li>
              <li> <a href="javascript:void(0)">Comentarios</a>
                <ul>
                  <li> <a href="<?php echo cms_url('constitucion/comentario/texto') ?>">Comentario tipo texto</a> </li>
                  <li> <a href="<?php echo cms_url('constitucion/comentario/image') ?>">Comentario tipo imagen</a> </li>
                  <li> <a href="<?php echo cms_url('constitucion/concordancia') ?>">Concordancias</a> </li>
                </ul>
              </li>
            </ul>
          </li>
          <li> <a href="javascript:void(0)">Jurisprudencía</a>
            <ul>
              <li> <a href="<?php echo cms_url('jurisprudencia/magistrado') ?>">Magistrados</a> </li>
              <li> <a href="<?php echo cms_url('jurisprudencia/tema') ?>">Temas</a> </li>
              <li> <a href="<?php echo cms_url('jurisprudencia/demandas') ?>">Demandas</a> </li>
              <li> <a href="<?php echo cms_url('jurisprudencia/tutelas') ?>">Tutelas</a> </li>
              <li> <a href="javascript:void(0)">Sentencias</a>
              	<ul>
                	<li> <a href="<?php echo cms_url('jurisprudencia/sentenciasconstitucionalidad') ?>">Sentencias de constitucionalidad</a> </li>
                  <li> <a href="<?php echo cms_url('jurisprudencia/sentenciastutela') ?>">Sentencias - tutelas</a> </li>
                </ul>
              </li>
              <li> <a href="<?php echo cms_url('jurisprudencia/comunicado') ?>">Comunicados</a> </li>
            </ul>
          </li>
          <li> <a href="<?php echo cms_url('libros') ?>">Libros</a> </li>
          <li> <a href="<?php echo cms_url('plan') ?>">Planes</a> </li>
          <li> <a href="<?php echo cms_url('usuarios_front') ?>">Usuarios del Front</a> </li>
          <li> <a href="javascript:void(0)">Blog</a>
            <ul>
            	<li> <a href="<?php echo cms_url('firma/blog') ?>">Texto sección</a> </li>
              <li> <a href="<?php echo cms_url('blog/categorias') ?>">Categorías</a> </li>
              <li> <a href="<?php echo cms_url('blog/texto') ?>">Blog</a> </li>
            </ul>
          </li>
          <li> <a href="javascript:void(0)">Carro de compras</a>
            <ul>
              <li> <a href="<?php echo cms_url('carro/libros') ?>">Libros</a> </li>
              <li> <a href="<?php echo cms_url('carro/planes') ?>">Planes</a> </li>
            </ul>
          </li>
          <li> <a href="<?php echo cms_url('newsletter') ?>">Newsletter</a> </li>
          <?php if (true === $is_superadmin) : ?>
          <li> <a href="javascript:void(0)">Configuraciones</a>
            <ul>
              <li> <a id="change_pass" href="javascript:void(0);">Cambiar Contraseña</a> </li>
              <li> <a href="<?php echo cms_url('admin/administradores') ?>">Administradores</a> </li>
              <?php if (has_perm('cms_admin_perms.view')) { ?>
              <li> <a href="<?php echo cms_url('perms') ?>">Permisos</a> </li>
              <?php } ?>
              <?php if (has_perm('cms_admin_perms.view')) { ?>
              <li> <a href="javascript:void(0)">Desarrollador</a>
                <ul>
                  <li> <a href="<?php echo cms_url('generator_models') ?>">Generador de Modelos</a> </li>
                  <li> <a href="<?php echo cms_url('generator_modules') ?>">Generador de Modulos</a> </li>
                  <li> <a href="<?php echo cms_url('backup_db') ?>">Generador de Backup</a> </li>
                  <li> <a href="<?php echo cms_url('generator_front_modules') ?>">Generador de Front END</a> </li>
                </ul>
              </li>
              <?php } ?>
              <?php if (has_perm('cms_config_oauth.view')) { ?>
              <li> <a href="<?php echo cms_url('users/config_oauth') ?>">Config OAuth</a> </li>
              <?php } ?>
            </ul>
          </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </div>
</div>
