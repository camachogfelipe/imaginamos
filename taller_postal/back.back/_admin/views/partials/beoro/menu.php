<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <div class="desplegableu pull-right" style="margin-top: 7px;">
                <a class="goog-text-highlight btn-seccion dropdown-toggle" data-toggle="dropdown" href="#" style="">
                    <i class="icon-user icon-large"></i>
                </a>
                <a class="btn-seccion dropdown-toggle" data-toggle="dropdown" href="#"  >
                    <span class="icon-chevron-down icon-large"></span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="<?php echo cms_url('login/logout') ?>">
                            <i class="icon-remove"></i>Cerrar Sesión
                        </a>
                    </li>
                </ul>
            </div>
            <div id="fade-menu" class="pull-left">
                <ul class="clearfix" id="mobile-nav">
                        <li>
                            <a href="javascript:void(0)">Home</a>
                            <ul>
                                <li>
                                    <a href="javascript:void(0)">Contacto</a>
                                    <ul>
                                        <li>
                                            <a href="<?php echo cms_url('contactos/redes') ?>">Redes Sociales</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo cms_url('contactos/contactos') ?>">Datos de Contacto</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                   <a href="<?php echo cms_url('banners') ?>">Banner</a>
                                </li>
                                <li>
                                   <a href="<?php echo cms_url('videos') ?>">Video Destacado</a>
                                </li>
                                <li>
                                   <a href="<?php echo cms_url('destacados') ?>">Destacados</a>
                                </li>
                                 <li>
                                   <a href="<?php echo cms_url('newletters') ?>">Suscripciones</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                          <a href="<?php echo cms_url('pqrs') ?>">Preguntas Frecuentes</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Comunidad & Servicios</a>
                            <ul>
                                <li>
                                   <a href="<?php echo cms_url('disenadors') ?>">Diseñadores</a>
                                </li>
                                <li>
                                   <a href="<?php echo cms_url('comunidads') ?>">Editar Comunidad</a>
                                </li>
                                <li>
                                   <a href="<?php echo cms_url('servicios') ?>">Servicios</a>
                                </li>
                               
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Lineas, Productos & Categorias</a>
                            <ul>
                                
                                <li>
                                   <a href="<?php echo cms_url('lineas') ?>">Lineas</a>
                                </li>
                                <li>
                                   <a href="<?php echo cms_url('categorias') ?>">Categorias</a>
                                </li>
                                <li>
                                   <a href="<?php echo cms_url('color_productos') ?>">Galeria Producto por Color</a>
                                </li>
                                <li>
                                   <a href="<?php echo cms_url('productos') ?>">Productos</a>
                                </li>
                                <li>
                                   <a href="<?php echo cms_url('venta_productos') ?>">Registro de Ventas</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Configuraciones</a>
                            <ul>
                                
                                <li>
                                   <a href="<?php echo cms_url('papels') ?>">Tipos de Papeles</a>
                                </li>
                                <li>
                                   <a href="<?php echo cms_url('configuracions') ?>">Congfigiraciones de Visibilidad</a>
                                </li>
                                <li>
                                   <a href="<?php echo cms_url('cantidads') ?>">Rango de Cantidades</a>
                                </li>
                                <li>
                                   <a href="<?php echo cms_url('colors') ?>">Colores</a>
                                </li>
                                <li>
                                   <a href="javascript:void(0)">Sobres</a>
                                   <ul>
                                        <li>
                                           <a href="<?php echo cms_url('sobres') ?>">Tipos de Sobres</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo cms_url('sobre_cantidads') ?>">Cantidades de Sobres</a>
                                        </li>
                                        <li>
                                           <a href="<?php echo cms_url('color_sobres') ?>">Colores de Sobres</a>
                                        </li>
                                        <li>
                                           <a href="<?php echo cms_url('sobre_papels') ?>">Papeles para Sobres</a>
                                        </li>
                                              
                                  </ul>
                              </li>
                              <li>
                                  <a href="javascript:void(0)">Ajustes de Categorias</a>
                                  <ul>
                                      <li>
                                          <a href="<?php echo cms_url('categoria_cantidads') ?>">Cantidades de Categorias</a>
                                      </li>
                                      <li>
                                          <a href="<?php echo cms_url('categoria_papels') ?>">Papeles de Categorias</a>
                                      </li>  
                                      <li>
                                          <a href="<?php echo cms_url('color_papels') ?>">Colores de Papeles</a>
                                      </li>
                                      <li>
                                           <a href="<?php echo cms_url('categoria_sobres') ?>">Sobres de Categorias</a>
                                      </li> 
                                  </ul>
                              </li>
                            </ul>
                        </li>
                    <?php if (true === $is_superadmin) : ?>
                        <li>
                            <a href="javascript:void(0)">Configuraciones</a>
                            <ul>
                                <li>
                                    <a id="change_pass" href="javascript:void(0);">Cambiar Contraseña</a>
                                </li>
                                <li>
                                    <a href="<?php echo cms_url('admin/administradores') ?>">Administradores</a>
                                </li>
                                
                                <?php if (has_perm('cms_admin_perms.view')) { ?>
                                    <li>
                                        <a href="<?php echo cms_url('perms') ?>">Permisos</a>
                                    </li>
                                <?php } ?>
                                <?php if (has_perm('cms_admin_perms.view')) { ?>
                                <li>
                                  <a href="javascript:void(0)">Desarrollador</a>
                                <ul>
                                    <li>
                                        <a href="<?php echo cms_url('generator_models') ?>">Generador de Modelos</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo cms_url('generator_modules') ?>">Generador de Modulos</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo cms_url('backup_db') ?>">Generador de Backup</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo cms_url('generator_front_modules') ?>">Generador de Front END</a>
                                    </li>
                                    
                                </ul> 
                                </li>  
                                <?php } ?>    
                                   
                                <?php if (has_perm('cms_config_oauth.view')) { ?>
                                    <li>
                                        <a href="<?php echo cms_url('users/config_oauth') ?>">Config OAuth</a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</div>