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
                                    <a href="<?php echo cms_url('barner') ?>">Banner Principal</a>
                                </li>
                                <li>
                                    <a href="<?php echo cms_url('bienvenidos') ?>">Bienvenida</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Contacto</a>
                                    <ul>
                                        <!--<li>
                                            <a href="<?php echo cms_url('contactos/redes') ?>">Redes Sociales</a>
                                        </li>-->
                                        <li>
                                            <a href="<?php echo cms_url('contactos/contactos') ?>">Datos de Contacto</a>
                                        </li>
                                        
                                        
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Destacados</a>
                                      <ul>
                                           <li>
                                             <a href="<?php echo cms_url('destacados') ?>">Destacados (Derecha)</a>
                                           </li>
                                           <li>
                                             <a href="<?php echo cms_url('destacados_slider') ?>">Destacados Slider</a>
                                           </li>
                                    </ul>
                               </li>
                           
                            </ul>
                        </li>
                        <li>
                             <a href="javascript:void(0)">Categorias & Productos</a>
                             <ul>
                                  <li>
                                    <a href="<?php echo cms_url('categorias') ?>">Categorias</a>
                                  </li>
                                  <li>
                                      <a href="<?php echo cms_url('subcategorias') ?>">Subcategorias</a>
                                  </li>
                                   <li>
                                         <a href="javascript:void(0)">Productos</a>
                                         <ul>
                                         <li>
                                            <a href="<?php echo cms_url('productos') ?>">Editar Productos</a>
                                         </li>
                                         <li>
                                            <a href="<?php echo cms_url('galeria_producto') ?>">Galeria de Productos</a>
                                         </li>
                                       </ul>
                                  </li>
                                  <li>
                                      <a href="<?php echo cms_url('barner_cafe') ?>">Fondo y Banner (Café)</a>
                                  </li>
                             </ul>
                        </li>
                         <li>
                             <a href="javascript:void(0)">Contactenos</a>
                             <ul>
                                 <li>
                                      <a href="<?php echo cms_url('contactenos') ?>">Horarios e Imagen</a>
                                 </li>
                             </ul>
                        </li>
                         <li>
                            <a href="<?php echo cms_url('catalogos') ?>">Catalogos</a>
                        </li>
                        <li>
                            <a href="<?php echo cms_url('servicios') ?>">Servicios</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Acerca de</a>
                             <ul>
                                 <li>
                                      <a href="<?php echo cms_url('empresa') ?>">Nuestra Empresa</a>
                                 </li>
                                 <li>
                                      <a href="<?php echo cms_url('logos') ?>">Proveedores</a>
                                 </li>
                             </ul>
                        </li>
                        <li>
                            <a href="<?php echo cms_url('videos') ?>">Videos</a>
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