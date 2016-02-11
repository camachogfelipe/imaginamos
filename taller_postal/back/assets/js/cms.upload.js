/* ==========================================================
 * @rigobcastro
 * cms.delete 1.0
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
    

!function ($, CMS, undefined) {
    
    CMS.Uploader = {
        
        queueMaxima : 0,
        
        // Init
        init : function(up, params){
            
        },
        
        // FIles added
        filesAdded : function(up, files){
            var 
            filesLength = up.files.length,
            queueMaxima = CMS.Uploader.queueMaxima;
           
            if(filesLength > queueMaxima){
                CMS.Modals.alerta('Solo puedes subir ' + queueMaxima + " archivo(s).");
            } else {
                $.each(files, function(i, file) {
                    var 
                    wrap = $('<div />',{
                        "class" : "file-uploader-item",
                        id : file.id
                    }).appendTo('#uploader-file-list'),
                    
                    content = $('<div />',{
                        "class" : "file-uploader-content",
                        text : file.name + ' (' + plupload.formatSize(file.size) + ')'
                    }).appendTo(wrap),
                    
                    progress = $('<div />', {
                        "class" : 'file-uploader-progress'
                    }).appendTo(wrap),
                    
                    deleteAnchor = $('<a />', {
                        text : 'Quitar',
                        "class" : 'file-uploader-remove',
                        click : function(e){
                            e.preventDefault();
                            wrap.fadeOut(function(){
                                return $(this).remove(); 
                            });
                            return up.removeFile(file);
                        }
                    }).appendTo(content);
               
                });
            }
        
            up.refresh(); 
        },
        
         StateChanged: function() {
           if(plupload.STARTED){
               CMS.Loading.start('Subiendo archivos...');
           } else {
               CMS.Loading.end();
           }
        },

        
        // Upload Progress
        UploadProgress : function(up, file){
            
            
            $('#' + file.id + " .file-uploader-progress").width(file.percent + "%");
        },
        
        // Error
        Error : function(up, err){
            CMS.Modals.alerta("Error: "+err.code+", Mensaje: "+ err.message + (err.file ? ", Archivo: " + err.file.name : ""), 'Error al subir el archivo');
            up.refresh(); 
        }
    }
    
}(window.jQuery, window.CMS);