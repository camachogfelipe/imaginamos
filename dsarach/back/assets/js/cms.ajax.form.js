/* ==========================================================
 * CMS Imaginamos Team: @rigobcastro, @marionavas
 * cms.ajax.forms 1.0
 * http://imaginamos.com
 * ==========================================================
 * Copyright 2012 Imaginamos.com.
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
    

(function ($, CMS, undefined) {

    "use strict";
     
    var
    action = '[data-action="ajax-form"]',
    
    ajaxform = {
        
        init : function(elem){
            this.$form = $(elem);
            this.submit();
        },
        
        submit : function(){
            var
            $form = this.$form,
            data = $form.serialize(),
            $msg_wrap = $form.find('.messages-wrap');
            
            $.ajax({
                url : $form.attr('action'),
                type : $form.attr('method'),
                dataType : $form.data('data-type') || 'json',
                data : data,
                
                beforeSend : function(){
                    CMS.Loading.start('Guardando...');
                    $msg_wrap.empty();
                },
                
                success : function(json){
                    if(json.ok){
                        if(json.continue_url){
                            window.location.href = json.continue_url;
                        } else if($form.data('after-save') === 'reload'){
                            window.location.reload();
                        }
                    }
                    
                    if(json.messages){
                        CMS.Modals.alerta(json.messages);
                    }
                    
                    if(json.alertbox){
                        $msg_wrap.html(json.alertbox);
                    }
                    
                    return;
                },
                
                error : function(error){
                    CMS.Modals.alerta('Hubo un error al ejecutar la aplicación, inténte de nuevo más tarde...');
                    window.console.error('Error CMS Ajax: ' + error.responseText);
                },
                
                complete : function(){
                    CMS.Loading.end();
                }
            });
            
            return false;
        }
        
    };
     
    /* DATA-API
     * ============== */
    
    $(action).livequery(function(){
        $('<div class="messages-wrap" />').prependTo(this);
    });
    
    $(document).on('submit', action, function(){
        ajaxform.init(this);
        return false;
    });
    
})(window.jQuery, window.CMS);