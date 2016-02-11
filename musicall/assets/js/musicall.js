(function($, globals, undefined) {

    var MusicAll = {

        loadProfileInfo: function(content) {

            $.getJSON(globals.site_url + 'usuarios/perfil/load_profile', {}, function(json) {
                if (json.username) {
                    $('[data-userinfo="username"]').text(json.username);
                }
                if (json.image) {
                    $('[data-userinfo="image"]').html(function() {
                        return '<img src="' + json.image + '" alt="Imagen de perfil de ' + json.username + ' - MusicAll" />';
                    }).removeAttr('style');
                }
                // Cargar notificaciones 
                MusicAll.checkNotifications(content);
            });

            return content === 'tienes' ? toBienvenido() : totoSolicitud();
        },
        checkLogged: function(action, content) {
            $.getJSON(globals.site_url + 'usuarios/check_logged', {}, function(is_logged) {
                if (is_logged && is_logged === true) {
                    return action === 'loadprofile' ? MusicAll.loadProfileInfo(content) : false;
                } else {
                    return content === 'tienes' ? toRegistro() : toRegistroQuieres();
                }
            });
        },
        /**
         * Load Notifications.
         * Cargando las notificaciones segun sea el caso
         */
        loadNotifications: function(type) {
            $.getJSON(globals.site_url + 'usuarios/nperfil/load_notifications_' + type, {}, function(json) {
                if (json.tienes) {
                    $('#popup_notif .content_notif').html(json.tienes);
										$('.scroll-pane').each(function(){
											$(this).jScrollPane({showArrows: $(this).is('.arrow')});
											var api = $(this).data('jsp');
											var throttleTimeout;
											$(window).bind('resize', function(){
												if ($.browser.msie){
													if (!throttleTimeout){throttleTimeout = setTimeout(function(){api.reinitialise();throttleTimeout = null;},50);}
												} else {api.reinitialise();}
											});
										});
                                }

                                function cerrarNotif() {
                                    $('.popup_notif').animate({top: 0, opacity: 0}, animTime, 'easeInOutQuart');
                                    $('.popup_notif').hide(animTime);
                                }

                                function abrirListaMusica() {
                                    $('.popup_mimusica').fadeIn(600, 'easeInOutQuart');
                                    $('.textoBienvenido').fadeOut(600, 'easeInOutQuart');
                                    $('.scroll-pane').each(function(){
																			$(this).jScrollPane({showArrows: $(this).is('.arrow')});
																			var api = $(this).data('jsp');
																			var throttleTimeout;
																			$(window).bind('resize', function(){
																				if ($.browser.msie){
																					if (!throttleTimeout){throttleTimeout = setTimeout(function(){api.reinitialise();throttleTimeout = null;},50);}
																				} else {api.reinitialise();}
																			});
																		});
                }
				
                if (json.buscas) {
                    $('#popup_notif_buscas .content_notif').html(json.buscas);
										//FALTABA
										$('.scroll-pane').each(function(){
											$(this).jScrollPane({showArrows: $(this).is('.arrow')});
											var api = $(this).data('jsp');
											var throttleTimeout;
											$(window).bind('resize', function(){
												if ($.browser.msie){
													if (!throttleTimeout){throttleTimeout = setTimeout(function(){api.reinitialise();throttleTimeout = null;},50);}
												} else {api.reinitialise();}
											});
										});
                }
            });
        },
        checkNotifications: function(type) {
            if (type === undefined) {
                type = 'tienes';
            }

            // Corrección del bug 404
            type = (type === 'quieres' ? 'buscas' : type);

            var $count = $('[data-notification="counter"][data-counter-type="' + type + '"]');

            $count.fadeOut().addClass('desactive');

            $.getJSON(globals.site_url + 'usuarios/nperfil/check_notifications_' + type, {}, function(json) {
                var count = parseInt(json.notificaciones_count);

                $count.text(count).fadeIn();

                if (count > 0) {
                    $count.removeClass('desactive');
                }
            });
        }
    }



    // Evento para los botones principales

    $(document).on('click', '[data-action="right-event"], [data-action="left-event"]', function(e) {
        var action = $(this).data('action') || $(this).attr('data-action');

        MusicAll.checkLogged('loadprofile', action === 'right-event' ? 'tienes' : 'quieres');

        return e.preventDefault();
    });

    $(document).on('submit', '.ajax-form', function() {
        var $this = $(this);

        if (!$this.hasClass('loading')) {
            $.ajax({
                url: $this.attr('action'),
                data: $this.serialize(),
                type: $this.attr('method'),
                dataType: $this.data('type') || 'json',
                beforeSend: function() {
                    $.noty.closeAll();
                    $this.addClass('loading');
                },
                success: function(json) {
                    if (json.messages) {
                        noty({
                            text: json.messages,
                            type: json.messages_type,
                            modal: json.messages_modal || false,
                            timeout: json.messages_timeout || 3000
                        });
                    }

                    if (json.continue_url) {
                        var delay = json.delay_to_continue || 0.5;
                       
                        setTimeout(function() {
                            return window.location.href = json.continue_url;
                        }, delay * 1000);
                    }

                    if (json.ok === true) {
                        $this[0].reset();
                    }
                },
                complete: function() {
                    $this.removeClass('loading');
                }
            });
        }

        return false;
    });

    $(document).on('submit', '[data-action="validation-register"], [data-action="complete-register"], [data-action="login-ajax"]', function() {
        var $this = $(this),
                this_data = $this.data(),
                action = this_data.action,
                content = this_data.content,
                data = $this.serialize();


        if (!$this.hasClass('loading')) {
            $this.addClass('loading');

            if (action === 'complete-register') {
                data += ('&' + $('[data-action="validation-register"][data-content="' + content + '"]').serialize());
            }

            $.ajax({
                url: $this.attr('action'),
                data: data,
                type: $this.attr('method'),
                dataType: $this.data('type'),
                beforeSend: function() {
                    $.noty.closeAll();
                },
                success: function(json) {
                    if (json.messages) {
                        noty({
                            text: json.messages,
                            type: json.messages_type,
                            modal: json.messages_modal || false,
                            timeout: json.messages_timeout || 5000
                        });
                    }
                    if (json.ok === true) {
                        if (action === 'validation-register') {
                            return content === 'tienes' ? abrirRegistro() : abrirRegistroBuscas();
                        } else {
                            MusicAll.checkLogged('loadprofile', content);
                            $('[data-action="validation-register"], [data-action="complete-register"], [data-action="login-ajax"]')[0].reset();
                        }
                    }
                },
                complete: function() {
                    $this.removeClass('loading');
                }

            });
        }

        return false;
    });

    $(document).on('change', '[name="about_you"]', function() {
        var val = $(this).val();
        $('.select1').fadeIn().not('[data-options="' + val + '"]').hide();
    });

    $(document).on('submit', '[data-action="upload-song"]', function() {
        $.noty.closeAll();
        if ($(this).find('[type="file"]').val() !== '') {
            return true;
        } else {
            noty({
                text: 'Selecciona un archivo para poder subir la canción.',
                type: 'error',
                timeout: 5000
            });
            return false;
        }
    });

    // Abrir dialogo de mi musica
    $(document).on('click', '#open-mi-musica', function() {
        $('#mi-musica-content').load(globals.site_url + 'usuarios/perfil/load_mi_musica', {}, function() {
            return abrirListaMusica();
        });
    });

    // Abrir dialogo editar info
    $(document).on('click', '[data-action="open-edit-info"]', function() {
        $('#edit-info-content').load(globals.site_url + 'usuarios/perfil/load_edit_info', {}, function() {
            return abrirEditar();
        });
    });

    // Abrir dialogo editar info
    $(document).on('click', '[data-action="open-edit-info-quieres"]', function() {
        $('#edit-info-quieres').load(globals.site_url + 'usuarios/perfil/load_edit_info_quieres', {}, function() {
            return abrirEditarBuscas();
        });
    });

    // Abrir dialogo de mis proyectos
    $(document).on('click', '#open-mis-proyectos', function() {
        $('#mis-proyectos-content').load(globals.site_url + 'usuarios/perfil/load_mis_proyectos', {}, function() {
            return abrirListaProyecto();
        });
    });

    $(document).on('click', '[data-notifications=read-toggle]', function() {
        var $this = $(this);
        $this.fadeOut();
        $.get(this.href, {}, function() {
            $this.fadeIn();
            MusicAll.checkNotifications($this.data('counter-type'));
        });
        return false;
    });

    $(document).on('click', '.btn_check_tienes, .btn_check_quieres', function() {
        $(this).toggleClass('checked');

    });

    $(document).on('click', '[data-notifications="load-buscas-detail"]', function() {
        var $content = $('#popup_notif2 .content-notification');
        $.get($(this).data('ajax-url'), {}, function(html) {
            $content.html(html);
						$('.scroll-pane').each(function(){
							$(this).jScrollPane({showArrows: $(this).is('.arrow')});
							var api = $(this).data('jsp');
							var throttleTimeout;
							$(window).bind('resize', function(){
								if ($.browser.msie){
									if (!throttleTimeout){throttleTimeout = setTimeout(function(){api.reinitialise();throttleTimeout = null;},50);}
								} else {api.reinitialise();}
							});
						});	
        });
    });


    $(function() {
        $.html5support();
    });
    

    window.MusicAll = MusicAll;

})(window.jQuery, window.globals);

//insertado por jhon

