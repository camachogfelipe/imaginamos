/* ==========================================================
 * @rigobcastro
 * cms.delete 1.1
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
    

!function ($, undefined) {

    "use strict"; 
     
    var 
    action = '[data-action="special-delete"]',
    error_msg = 'Error en la aplicación',
    
    SpecialDelete = function(e){
        
      
        e.preventDefault(); 
         
        var 
        $this = $(this),
        $dialog = $('<div class="cms-dialog" title="Confirme"></div>').appendTo('body'),
        $text = $('<p><strong>¿Realmente desea borrar este ítem?</strong></p>').appendTo($dialog),
        
        params = {
            table : $this.data('table'),
            field : $this.data('field'),
            value : $this.data('value'),
            related_value : $this.data('related_value'),
            delete_file : $this.data('delete-file'),
            delete_files : $this.data('delete-files')
        };
        
       
        if(!$this.hasClass('deleting')){
        
            $this.addClass('deleting');
            
            $dialog.dialog({
                modal : true,
                resizable : false,
                position : 'center',
                show : 'fold',
                hide : 'slide',
            
                buttons : {
                    "Si" : function(){
                    
                        $.ajax({
                            url : $this.attr('href'),
                            data : params,
                        
                            beforeSend : function(){
                                CMS.Loading.start('Eliminado...');
                            },
                        
                            success : function(json){
                                var parent = $this.parents('.parent-delete:first') || $this.parents('tr:first');
                                if(!json.ok){
                                    $(this).find('p').text(json.messages); 
                                } else {
                                    parent.first().fadeOut('slow', function(){
                                        return $(this).remove();
                                    });
                                }
                            },
                        
                            error : function(error_log){
                                CMS.Modals.alerta(error_msg);
                            },
                        
                            complete : function(){
                                CMS.Loading.end();
                            }
                        });
                    
                        return $(this).dialog('close');
                    
                    },
                    "No" : function(){
                        return $(this).dialog('close');
                    }
                },
            
                close : function(){
                     $this.removeClass('deleting');
                    
                    return $(this).remove();
                }
            });
        
        }
        
        return false;
    }
    
     
    /* DATA-API
     * ============== */
    
    $(document).on('click', action, SpecialDelete);
     
    
}(window.jQuery);

