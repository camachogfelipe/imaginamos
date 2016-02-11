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
                   
                    <?php if (true === $is_superadmin) : ?>
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
                            <a href="javascript:void(0)">Lineas & Productos</a>
                            <ul>
                              
                                 <li>
                                    <a href="<?php echo cms_url('categorias') ?>">categorias</a>
                                </li>
                                <li>
                                    <a href="<?php echo cms_url('subcategorias') ?>">Sub Categorias</a>
                                </li>
                                <li>
                                    <a href="<?php echo cms_url('grupo_producto') ?>">Tipos de Productos</a>
                                </li>
                                <li>
                                    <a href="<?php echo cms_url('productos') ?>">Productos</a>
                                </li>
                              
                            </ul>
                        </li>
                        
                         <li>
                            <a href="javascript:void(0)">Home</a>
                            <ul>
                                <li>
                                    <a href="<?php echo cms_url('home/logos') ?>">Logos</a>
                                </li>
                                <li>
                                    <a href="<?php echo cms_url('home/novedades') ?>">Novedades</a>
                                </li>
                                <li>
                                    <a href="<?php echo cms_url('home/barners') ?>">Barners</a>
                                </li>
                            </ul>
                        </li>
                         <li>
                            <a href="javascript:void(0)">Integracion</a>
                            <ul>
                                <li>
                                    <a href="<?php echo cms_url('sector_exito') ?>">Sectores de Éxito</a>
                                </li>
                                <li>
                                    <a href="<?php echo cms_url('casos_exitos') ?>">Casos de Éxito</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)">Servicio Técnico</a>
                            <ul>
                                <li>
                                    <a href="<?php echo cms_url('categoria_tecnico') ?>">Categorias</a>
                                </li>
                                <li>
                                    <a href="<?php echo cms_url('propuesta') ?>">Propuesta Valor</a>
                                </li>
                                <li>
                                    <a href="<?php echo cms_url('servicios') ?>">Servicios</a>
                                </li>
                                <li>
                                    <a href="<?php echo cms_url('certificaciones') ?>">Certificaciones</a>
                                </li>
                            </ul>
                        </li>
                         <li>
                            <a href="javascript:void(0)">Otras Paginas</a>
                            <ul>
                                <li>
                                    <a href="<?php echo cms_url('nosotros') ?>">Nosotros</a>
                                </li>
                                <li>
                                    <a href="<?php echo cms_url('flota') ?>">Gestion Flota</a>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>
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
                        </ul>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</div>