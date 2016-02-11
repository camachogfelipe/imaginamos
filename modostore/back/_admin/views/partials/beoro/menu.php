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
                               <a href="<?php echo cms_url('barners') ?>">Banner</a>
                             </li>
                             <li>
                               <a href="<?php echo cms_url('logos') ?>">Patrocinadores</a>
                             </li>
                             <li>
                               <a href="javascript:void(0)">Tipos de Vehiculos</a>
                               <ul>
                                 <li>
                                  <a href="<?php echo cms_url('marcas') ?>">Marcas</a>
                                 </li>
                                 <li>
                                  <a href="<?php echo cms_url('modelos') ?>">Modelos</a>
                                 </li>
                               </ul>
                             </li>
                             <li>
                               <a href="<?php echo cms_url('fletes') ?>">Fletes Nacionales</a>
                             </li>
                             
                            </ul>
                        
                        
                        
                        </li>
                         <li>
                             <a href="<?php echo cms_url('informacions') ?>">Información</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Empresa</a>
                            <ul>
                                <li>
                                    <a href="<?php echo cms_url('empresas'); ?>">Información de Empresa</a>
                                </li>
                                <li>
                                    <a href="<?php echo cms_url('punto_diferencias'); ?>">Puntos diferenciadores</a>
                                </li>
                                <li>
                                    <a href="<?php echo cms_url('valors'); ?>">Valores de la Empresa</a>
                                </li>
                            </ul>
                        </li>   
                         <li>
                             <a href="javascript:void(0)">Productos & Categorías</a>
                            <ul>
                        <li>
                               <a href="<?php echo cms_url('categorias') ?>">Categorías</a>
                         </li>
                         <li>
                               <a href="<?php echo cms_url('subcategorias') ?>">Sub - Categorías</a>
                         </li>
                         <li>
                               <a href="javascript:void(0)">Productos</a>
                               <ul>
                                   <li>
                                      <a href="<?php echo cms_url('productos') ?>">Gestionar Producto</a>
                                   </li>
                                   <li>
                                      <a href="<?php echo cms_url('caracteristicas') ?>">Características de Producto</a>
                                   </li>
                                   <li>
                                      <a href="<?php echo cms_url('imagen_productos') ?>">Galería de Producto</a>
                                   </li>
                                    <li>
                                      <a href="<?php echo cms_url('promociones') ?>">Promociones del Mes</a>
                                   </li>
                                  
                               </ul>
                         </li>
                          <li>
                             <a href="<?php echo cms_url('venta_productos') ?>">Registro de Ventas</a>
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