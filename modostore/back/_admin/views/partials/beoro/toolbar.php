<header>
                <div class="container">
                    <div class="row">
                        <div class="span3">
                            <div class="main-logo"><a href="<?php echo cms_url('dashboard') ?>"><img alt="Beoro Admin" height="40" width="128" src="<?php echo base_url().'assets/img/header-logo.png' ?>" /></a></div>
                        </div>
                        <div class="span5">
                            <nav class="nav-icons">
                                <ul>
                                    
                                    <li><a href="<?php echo cms_url('dashboard') ?>" class="ptip_s"><span class="ptip_s"></span><i class="icsw16-home"></i></a></li>
                                    <li class="dropdown">
                                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><i class="icsw16-create-write"></i> <span class="caret"></span></a>
                                        <ul role="menu" class="dropdown-menu">
                                            <li role="presentation"><a href="<?php echo cms_url('contactos/redes') ?>" role="menuitem"><font><font>Redes Sociales</font></font></a></li>
                                            <li role="presentation"><a href="<?php echo cms_url('contactos/contactos') ?>" role="menuitem"><font><font>Datos de Contacto</font></font></a></li>
                                        </ul>
                                    </li>
                                    <li><a target="_blank"  href="<?php echo base_url(); ?>" class="ptip_s"><span class="ptip_s"></span><i class="icsw16-globe"></i></a></li>
                                    </ul>
                             </nav>
                        </div>
                        <div class="span4">
                            <div class="user-box">
                                <div class="user-box-inner">
                                    <img src="<?php echo back_asset('images/default_avatar.gif') ?>" alt="" class="user-avatar img-avatar">
                                    <div class="user-info"><font><font>
                                        Bienvenido, </font></font><strong><font><font><?php echo isset($current_user['username'])?$current_user['username']:""; ?></font></font></strong>
                                        <ul class="unstyled">
                                            <li><a href="<?php echo cms_url('admin/administradores') ?>"><font><font>Usuarios</font></font></a></li>
                                            <li><font><font> - </font></font></li>
                                            <li><a id="change_pass" href="javascript:void(0);"><font><font>Cambiar Contraseña</font></font></a></li>
                                            <li><font><font> - </font></font></li>
                                            <li><a href="<?php echo cms_url('login/logout') ?>"><font><font>Salir</font></font></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
