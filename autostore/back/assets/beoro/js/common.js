/***************************************************************
 | @autor: Jose Luis Fonseca
 | jose.fonseca@imaginamos.com.co
 | Agencia: imaginamos.com
 | Departamento: Diseño y Desarrollo de Software interactivo
 | Bogotá, Colombia, 2013
 | Basado en script Rigo B Castro
 ***************************************************************/

;
(function( $, window, document, undefined ){

    // our plugin constructor
    var AjaxForm = function( elem, options ){
        this.elem = elem;
        this.$elem = $(elem);
        this.options = options;

        // This next line takes advantage of HTML5 data attributes
        // to support customization of the plugin on a per-element
        // basis. For example,
        // <div class=item' data-plugin-options='{"message":"Goodbye World!"}'></div>
        this.metadata = this.$elem.data();
    };

    // the plugin prototype
    AjaxForm.prototype = {
        defaults: {
            dataType : 'json',
            type : 'post',
            
            beforeSend : function(){},
            complete : function(){}
        },

        init: function() {
            // Introduce defaults that can be extended either 
            // globally or using an object literal. 
            this.config = $.extend({}, this.defaults, this.options, this.metadata);
            this.ajax();
            
            return this;
        },
        ajax: function() {
            var $this = this.$elem,
            config = this.config,
            
            $submitButton = $this.find('[type="submit"]');

            $.ajax({
                url : $this.attr('action'),
                dataType : config.dataType,
                type : $this.attr('method') || config.type,
                data : $this.serialize(),

                beforeSend : function(){
                    $submitButton.button('loading');
                    config.beforeSend();
                },

                success : function(json){
                    if(true === json.ok){
                        var continue_url = json.continue_url || $this.data('continue-url');
                        if(continue_url){
                            window.location.href = continue_url;
                        }
                    }

                },

                complete : function(){
                    $submitButton.button('reset');
                    
                    config.complete();
                }
            });

            return false;
        // eg. show the currently configured message
        // console.log(this.config.message);
        }
    }

    AjaxForm.defaults = AjaxForm.prototype.defaults;

    $.fn.ajaxForm = function(options) {
        return this.each(function() {
            new AjaxForm(this, options).init();
        });
    };

//optional: window.Plugin = Plugin;

})( jQuery, window , document );

(function($, CMS, undefined) {

    CMS.Common = {
        init: function() {
            this.AjaxForm()
            .simple_remote_load()
            .s2Single()
            .s2Multiple()
            .pop_overs()
            .logicDelete()
            .logicDeleteDiv()
            .changePass();
            /*  Error AJAX */
            $.ajaxSetup({
                timeout: 50000
            });

            $(document).ajaxSend(function() {

                }).ajaxError(function(e, jqxhr) {
                if (jqxhr.readyState && jqxhr.status && jqxhr.readyState === 4) {
                    var msg = 'Hubo un error en la aplicación, verifique su conexión a la red e intente de nuevo la acción.';
                    switch (jqxhr.status) {
                        case 403:
                            msg = 'Permisos insuficientes para ejecutar esta acción.';
                            break;
                        case 404:
                            msg = 'El recurso al que trata de acceder, no está disponible o no existe. póngase en contacto con el administrador.';
                            break;
                    }
                    if (msg !== null) {
                        bootbox.alert(msg);
                    }
                }
            }).ajaxSuccess(function(e, request, settings) {
                var dataType;

                if (settings.dataType) {
                    dataType = settings.dataType.toLowerCase();
                }

                if (dataType === 'json' && dataType !== undefined) {
                    var json = $.parseJSON(request.responseText);
                    if (json.alert_sticker) {
                        $.each(json.alert_sticker, function() {
                            $.sticky(this.message, {
                                autoclose: this.autoclose || 3000,
                                position: this.position || 'top-center',
                                type: 'st-' + this.type
                            });
                        });
                    }
                    if(json.continue_url){
                        window.location.href = json.continue_url;
                    }
                    if(json.closeResetModal){
                        $('#change-pass-modal').modal('hide');
                    }
                }

            }).ajaxComplete(function() {
                $('[type="submit"], .loading-text').button('reset');
            });
        },
        AjaxForm: function(){
           
            
            $(document).on('submit', '[data-form="ajax"]', function(){
               $(this).ajaxForm();
                return false;
            })
            
            return this;
        },
        s2Single: function() {
            $.validator.addClassRules( "s2-required", {
                required : true 
            });
            var s2_single = $('select.s2-single');
            if (s2_single.length) {
                s2_single.each(function() {
                    $(this).select2({
                        placeholder: $(this).data('placeholder') || $(this).attr('placeholder'),
                        allowClear: true
                    });
                });
            }
            return this;
        },
        s2Multiple: function() {
            var s2 = $('select.s2-multiple');
            if (s2.length) {
                s2.each(function() {
                    $(this).select2({
                        placeholder: $(this).data('placeholder') || $(this).attr('placeholder')
                    });
                });
            }
            return this;
        },
        simple_remote_load : function(){
            // Extraer datos de barrios segun proyecto
            var simple = '[data-remote-load="select"]';
            $(document).on('change', simple, function(){

                var $this = $(this),
                url = $this.data('remote-load-url') + '/' + $this.val(),
                origin =  '#' + $this.data('remote-load-origin'),
                
                clearAnotherSelects = $this.data('clear-another-selects');
                
                $(origin).empty();
                
                if (clearAnotherSelects != undefined) {
                    $.each(clearAnotherSelects, function(i, clearId){
                        $('#' + clearId).empty().select2('val', '');
                    });
                }

                if($this.val()){
                    ajaxLoad(url, origin);
                } else {
                    $(origin).select2('disable').select2('val', null);
                }
            });
            return this;
        },
        pop_overs: function(){
            $(document).on('ready',function(){
                $('.pop_over').popover({
                    trigger: 'hover'
                });
            });
            return this;
        },
        graphs: function(json){
            chart = new Highcharts.Chart(json);
            return this;
        },
        logicDelete : function(){
            var $ele = '.logic-delete, .fisic-delete';
            $(document).on('click', $ele, function(e){
                var $this = $(this),
                url = this.href,
                $modal = $('#delete-logic-modal'),
                data = {
                    modelo : $this.data('model'),
                    field : $this.data('field'),
                    value : $this.data('value'),
                    related_value : $this.data('related_value'),
                    table : $this.data('table') || null
                };
                $('#name-element').html($this.data('namelemento'));

                $modal.modal('show');

                $modal.find('.delete-logic-accept').on('click', function(){
                    var $accept = $(this), 
                    params = $.param(data);

                    $accept.attr('href', url + '?' + params);

                    $.post($accept.attr('href'), data, function(js){
                       if(js.ok === true){ 
                           var row = $this.parents('#table_contet >tr').length;
                            $this.parents('tr:first').fadeOut('slow', 'linear', function(){
                               return $(this).remove();
                            });
                           if (row === $('.del_count').data('num')) {
                               $('.del_count').remove();
                           }
                       }
                    }, 'json');
                });

                $modal.find('[data-dismiss="modal"]').on('click', function(){
                    $modal.find('.delete-logic-accept').off('click');
                });
                
                return e.preventDefault();
            });
            return this;
        },
        logicDeleteDiv : function(){
            var $ele = '.logic-delete-div';
            $(document).on('click', $ele, function(e){
                var $this = $(this),
                url = this.href,
                $modal = $('#delete-logic-modal'),
                data = {
                    modelo : $this.data('model'),
                    field : $this.data('field'),
                    value : $this.data('value'),
                    table : $this.data('table') || null
                };
                $('#name-element').html($this.data('namelemento'));

                $modal.modal('show');

                $modal.find('.delete-logic-accept').on('click', function(){
                    var $accept = $(this), 
                    params = $.param(data);

                    $accept.attr('href', url + '?' + params);

                    $.post($accept.attr('href'), data, function(){
                        $('.contenedor_'+$this.data('value')).fadeOut('slow', 'linear', function(){
                            return $(this).remove();
                        });
                    }, 'json');
                });

                $modal.find('[data-dismiss="modal"]').on('click', function(){
                    $modal.find('.delete-logic-accept').off('click');
                });

                return e.preventDefault();
            });
            return this;
        },
        changePass : function(){
            $(document).on('click','#change_pass',function(){
                $('#change-pass-modal').modal('show');
            });
        }
    };

    function ajaxLoad(url, origin){
        var $origin = $(origin);

        return $.ajax({
            url : url,
            dataType : 'json',
            type : 'post',

            success : function(json){
                if(json){
                    $origin.select2('destroy');

                    $('<option />').appendTo(origin);

                    $.each(json, function(){
                        var self = this;
                        $('<option />', {
                            value : self.id,
                            text : self.text
                        }).appendTo(origin);
                    });

                    $origin.attr('disabled', false).attr('placeholder', 'Seleccione la opción...').select2({
                        allowClear: true
                    });
                }
            }
        });
    }
})(window.jQuery, window.CMS);