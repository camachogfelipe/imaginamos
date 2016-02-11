
<div class="widget">
    <div class="header">
        <span><span class="ico gray window"></span>Anuncios - Directorio</span>
    </div><!-- End header -->
    <div class="content">

        <section class="clearfix">
            <div class="tableName toolbar">
                <table class="display data_table2" >
                    <thead>
                        <tr>
                            <th><div class="th_wrapp">Código</div></th>
                    <th><div class="th_wrapp">Empresa</div></th>
                    <th><div class="th_wrapp">Categoria</div></th>
                    <th><div class="th_wrapp">Usuario</div></th>
                    <th style="width:200px;"><div class="th_wrapp">Acciones</div></th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php if ($datos->exists()) : ?>
                            <?php foreach ($datos as $dato) : ?>
                                <tr class="odd gradeX parent-delete">
                                    <td class="center"><?php echo $dato->code ?></td>
                                    <td class="center"><?php echo $dato->empresa ?></td>
                                    <td class="center"><?php echo anchor(sprintf($categoria_detalle_url, $dato->directorio_categoria->var), $dato->directorio_categoria->name) ?></td>
                                    <td class="center"><?php echo anchor(sprintf($usuario_detalle_url, $dato->user->username), $dato->user->username) ?></td>
                                    <td class="center">
                                        <span class="tip">
                                            <a href="<?php echo sprintf($toggle_active_url, $dato->code) ?>" class="uibutton <?php echo!$dato->active ? 'special' : null ?>" data-action="toggle-active"><?php echo $dato->active ? 'Desaprobar' : 'Aprobar' ?></a>
                                            <a href="<?php echo cms_url('admin/actions/delete') ?>" class="uibutton special" data-action="special-delete" data-table="directorio" data-field="code" data-value="<?php echo $dato->code ?>">
                                                Eliminar
                                            </a>
                                        </span>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>	
</div>

<div id="toggle-modal" style="display:none;" title="Aprobar/Desaprobar anuncio">
    <p>¿Está seguro de <strong>Aprobar / Desaprobar</strong> este anuncio?</p>
</div>

<script>
    (function($){
        $(document).on('click', '[data-action="toggle-active"]', function(e){
            var $this = $(this), url = this.href, dialog = $('#toggle-modal'), oldText = $this.text();
            
            dialog.dialog({
                resizable : false,
                height : 'auto',
                width : "auto",
                modal : true,
                show: "drop",
                hide: "drop",
                
                buttons : {
                    Aceptar : function(){
                        $this.text('Cargando...').css('opacity', .6);
                        $.getJSON(url, null, function(json){
                            if(json.ok){
                                if($this.hasClass('special')){
                                    $this.removeClass('special');
                                } else {
                                    $this.addClass('special');
                                }
                               
                                if(oldText === 'Aprobar'){
                                    $this.text('Desaprobar');
                                } else {
                                    $this.text('Aprobar');
                                }
                            } else {
                                $this.text(oldText);
                            }
                            $this.css('opacity', 1);
                        });
                        return $(this).dialog('close');
                    },
                    Cancelar : function(){
                        return $(this).dialog('close');
                    }
                }
            });
            
            return e.preventDefault(); 
        });
    })(jQuery);
</script>