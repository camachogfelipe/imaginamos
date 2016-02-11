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
              <li> <a href="javascript:void(0)">Contacto</a>
                <ul>
                  <li> <a href="<?php echo cms_url('contactos/redes') ?>">Redes Sociales</a> </li>
                  <li> <a href="<?php echo cms_url('contactos/contactos') ?>">Datos de Contacto</a> </li>
                  <li> <a href="<?php echo cms_url('formulario_contacts') ?>">Formulario de Contacto</a> </li>
                </ul>
              </li>
              <li> <a href="<?php echo cms_url('barners') ?>">Banner</a> </li>
              <li> <a href="<?php echo cms_url('bienvenidas') ?>">Bienvenida</a> </li>
              <li> <a href="<?php echo cms_url('patrocinadors') ?>">Patrocinadores</a> </li>
            </ul>
          </li>
          <li> <a href="<?php echo cms_url('newsletters') ?>">Subcripciones</a> </li>
          <li> <a href="javascript:void(0)">Empresa</a>
            <ul>
              <li> <a href="<?php echo cms_url('empresas'); ?>">¿Quienes Somos?</a> </li>
              <li> <a href="javascript:void(0)">Tipos de Vehiculos</a>
                <ul>
                  <li> <a href="<?php echo cms_url('marcas') ?>">Nuestros vehículos</a> </li>
                  <li> <a href="<?php echo cms_url('modelos') ?>">Nuestros productos</a> </li>
                </ul>
              </li>
            </ul>
          </li>
          <li> <a href="javascript:void(0)">Productos & Categorias</a>
            <ul>
              <li> <a href="<?php echo cms_url('categorias') ?>">Categorias</a> </li>
              <li> <a href="<?php echo cms_url('subcategorias') ?>">Sub - Categorias</a> </li>
              <li> <a href="javascript:void(0)">Productos</a>
                <ul>
                  <li> <a href="<?php echo cms_url('productos') ?>">Gestionar Producto</a> </li>
                  <li> <a href="<?php echo cms_url('caracteristicas') ?>">Caracteristicas de Producto</a> </li>
                  <li> <a href="<?php echo cms_url('imagen_productos') ?>">Galeria de Producto</a> </li>
                </ul>
              </li>
              <li> <a href="<?php echo cms_url('venta_productos') ?>">Registro de Ventas</a> </li>
            </ul>
          </li>
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
