/* ==========================================================
 * @rigobcastro
 * cms.dialog 1.1
 * http://imaginamos.com
 * ==========================================================
 * Copyright 2012 Imaginamos SAS.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * ========================================================== */
    
!function ($, CMS) {
    
    "use strict"; 
    
    var Modals = {
        
        modal : $('<div class="modal" />'),
        
        alerta : function(msg, title){
            
            this.dialog({
                buttons: {
                    "Ok, Cerrar" : function(){
                        return $(this).dialog('close');	
                    }
                },
                title: title || 'Atención'	
            }).html('<p>'+msg+'</p>').open();
            
            return this;
        },
        
        /* Un nuevo dialogo */
        dialog : function(opc){

            this.defaults = {
                resizable : false,
                height : 'auto',
                autoOpen : false,
                width : "auto",
                modal : true,
                show: "drop",
                hide: "drop",
                close : function(){
                    return $(this).remove();
                },
                buttons : Modals._buttonDefault,
                title : 'CMS Imaginamos.',
                object : null
            }
        
            this.options = $.extend(this.defaults, opc || {});
            
            var object = $(this.options.object);
            
            if(object.length > 0){
                this.options.title = object.attr('title');
                this.html(object.html());
            }
            
            
            this.modal.dialog(this.options);
            
            return this;
        },
        
        /* Boton por defecto para el modal */
        _buttonDefault :  {
            "Cancelar" : function() {
                return $(this).dialog('close');
            }
        },
        
        
        /* Adiciona el html al modal dialog */
        html : function(html){
            this.modal.html(html)
            return this;
        },
        
        /* Abre el dialog modal */
        open : function(){
            this.modal.dialog('open');
            return this;
        },
        
        /* Cierra el dialog modal */
        close : function(){
            this.modal.dialog('close');
            return this;
        },
        
        closeTime : function(time){
            setTimeout(function(){
                return Modals.close();
            }, time || 1500 );
        },
        
        button : function(button){
            button = $.extend(button, this._buttonDefault);
            this.modal.dialog('option', 'buttons', button);  
            return this;
        },
        
        /* Crea nuevos botones para el modal */
        newButtons : function(button){
            this.modal.dialog('option', 'buttons', button);  
            return this;
        }
    }
    
    CMS.Modals = Modals;
    
}(window.jQuery, window.CMS);

/** FIN Modals dialog funciones **/