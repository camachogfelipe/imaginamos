/* ==========================================================
 * @rigobcastro - rigo.castro@imaginamos.com
 * cms.sortable 1.0
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

     
    var 
    action_sortable = '[data-action="sortable"]';
    
    CMS_Sortable = {
        defaults : {
            table : null,
            field : null,
            field_where : null
        },
        
        init : function(){
            var 
            self = this,
            $sortable = $(action_sortable),
            
            options = {
                table : $sortable.data('sortable-table'),
                field : $sortable.data('sortable-field') || 'order',
                field_where : $sortable.data('sortable-field-where') || 'id'
            }
            
            self.defaults = $.extend(self.defaults, options, {});
            
           
            if($sortable.data('sortable-container')){
                $sortable = $sortable.find($sortable.data('sortable-container'));
            }
            
            
            $sortable.sortable({
                update : self.update
            });
        },
        
        update : function(e, ui){
            var 
            options = CMS_Sortable.defaults,
            serial = $(this).sortable('serialize'),
            url = globals.cms_url + '/admin/actions/save_order/' + options.table + '/' + options.field + '/' + options.field_where;
            
            return $.getJSON(url, serial, function(json){
                if( ! json.ok){
                    CMS.Modals.Alerta('Hubo un error al guardar el orden, inténte de nuevo más tarde.');
                }
            });
        }
    }
   
     
    /* DATA-API
     * ============== */
    $(function(){
        if($(action_sortable).length > 0){
            CMS_Sortable.init();
        }
    });
    
     
    
}(window.jQuery);

