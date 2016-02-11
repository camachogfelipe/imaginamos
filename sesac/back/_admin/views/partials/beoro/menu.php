<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <div class="desplegableu pull-right" style="margin-top: 7px;">
                <a class="goog-text-highlight btn-seccion dropdown-toggle" data-toggle="dropdown" href="#" style="color: #fff">
                    <i class="icon-user icon-large"></i>
                </a>
                <a class="btn-seccion dropdown-toggle" data-toggle="dropdown" href="#"  style="color: #fff">
                    <span class="icon-chevron-down icon-large"></span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="<?php echo cms_url('login/logout') ?>">
                            <i class="icon-remove"></i>Cerrar sesión
                        </a>
                    </li>
                </ul>
            </div>
            <div id="fade-menu" class="pull-left">
                <ul class="clearfix" id="mobile-nav">
                    <?php if (true === $is_superadmin) : ?>
                        <li>
                            <a href="javascript:void(0)">Admin</a>
                            <ul>
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
                    <li>
                        <a href="javascript:void(0)">Configuraciones</a>
                        <ul>
                            <li>
                                <a id="change_pass" href="javascript:void(0);">Cambiar Contraseña</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                      <a href="<?= base_url() ?>" target="_blank">Ver Sitio</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<header>
    <div class="container">
        <div class="row">
            <div class="span12">
                <nav class="nav-icons">
                    <ul>
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><i class="icsw16-home"></i>Home<span class="caret"></span></a>
                            <ul role="menu" class="dropdown-menu">
                                <li role="presentation"><a href="<?= cms_url("home/banner") ?>" role="menuitem">Banner</a></li>
                                <li role="presentation"><a href="<?= cms_url("home/parrafo_bienvenida") ?>" role="menuitem">Párrafo de bienvenida</a></li>
                                <li role="presentation"><a href="<?= cms_url("home/destacados") ?>" role="menuitem">Destacados</a></li>
                                <li class="divider" role="presentation"></li>
                                <li role="presentation"><a href="<?= cms_url("home/footer") ?>" role="menuitem">Footer</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><i class="icsw16-apartment-building"></i>Nuestra Compañía<span class="caret"></span></a>
                            <ul role="menu" class="dropdown-menu">
                                <li role="presentation"><a href="<?= cms_url("empresa/quienes_somos") ?>" role="menuitem">Quienes somos</a></li>
                                <li role="presentation"><a href="<?= cms_url("empresa/equipo_de_trabajo") ?>" role="menuitem">Nuestro equipo de trabajo</a></li>
                                <li role="presentation"><a href="<?= cms_url("empresa/politicas_de_calidad") ?>" role="menuitem">Políticas de calidad</a></li>
                                <li role="presentation"><a href="<?= cms_url("empresa/nuestro_compromiso") ?>" role="menuitem">Nuestro Compromiso</a></li>
                                <li role="presentation"><a href="<?= cms_url("empresa/mision_vision_historia") ?>" role="menuitem">Misión, Visión e Historia</a></li>
                                <li role="presentation"><a href="<?= cms_url("empresa/certificaciones") ?>" role="menuitem">Certificaciones</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?= cms_url("servicios") ?>" class="ptip_s">
                                <i class="icsw16-folder"></i>Servicios
                            </a>
                        </li>
                        <li>
                            <a href="<?= cms_url("clientes") ?>" class="ptip_s">
                                <i class="icsw16-users-2"></i>Clientes
                            </a>
                        </li>
                        <li>
                            <a href="<?= cms_url("proyectos") ?>" class="ptip_s">
                                <i class="icsw16-graph"></i>Proyectos
                            </a>
                        </li>
                        <li>
                            <a href="<?= cms_url("noticias/pagina/1") ?>" class="ptip_s">
                                <i class="icsw16-globe"></i>Noticias
                            </a>
                        </li>
                        <li>
                            <a href="<?= cms_url("trabajo") ?>" class="ptip_s">
                                <i class="icsw16-list-w_-images"></i>Trabajo
                            </a>
                        </li>
                        <li>
                            <a href="<?= cms_url("contacto") ?>" class="ptip_s">
                                <i class="icsw16-mail"></i>Contacto
                            </a>
                        </li>
                    </ul>
                 </nav>
            </div>
        </div>
    </div>
</header>