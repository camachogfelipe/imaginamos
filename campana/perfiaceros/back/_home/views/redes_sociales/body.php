
<style type="text/css">

    /* float clearing for IE6 */
    * html .clearfix{
        height: 1%;
        overflow: visible;
    }

    /* float clearing for IE7 */
    *+html .clearfix{
        min-height: 1%;
    }

    /* float clearing for everyone else */
    .clearfix:after{
        clear: both;
        content: ".";
        display: block;
        height: 0;
        visibility: hidden;
        font-size: 0;
    }


</style>
<div class="widget">
    <div class="header">
        <span><span class="ico gray window"></span>
            Redes Sociales
        </span>
    </div><!-- End header -->
    <div class="content">


        <div class="formEl_b">

            <div>
                <fieldset>

                    <div class="clearfix">

                        <?php echo form_open(cms_url('home/redes_sociales/add'), 'data-action="ajax-form"') ?>

                        <legend><h1>Redes Sociales</h1></legend>

                       <input name="id" value="" id="id" type="hidden">
                           
                       
                        <div class="section">
                                <label class="req">Dirección URL</label>
                                <input id="direccion" class="large" type="text" name="direccion" value="" maxlength="200" />
                       </div>
                       
                       
                        <div class="section">
                           <label class="req">Tipo de Red Social</label>
                        <select id="s2_single" name="type_social_id" class="large" style="display: none;">
                         <?php  if (!empty($items)) : ?>
                           <?php foreach ($items as $item) : ?>
                                     <option value="<?php echo $item->id; ?>" selected="selected"><?php echo $item->name; ?></option>
                               <?php endforeach; ?>
                        <?php endif; ?>
                           </select>
                         </div>
                         
                        
                       <br/><br/>
                            <button type="submit" id="Guardar" class="uibutton" >Agregar Red Social</button>
                
                        <?php echo form_close() ?>
                    </div>
                    <div class="tableName toolbar">
                        <table class="display data_table2" >
                            <thead>
                                <tr>
                                     <th>Tipo de Red Social</th>
                                     <th>Dirección de Red</th>
                                    <th><div class="th_wrapp">Acciones</div></th>
                            </tr>
                            </thead>
                           <tbody id='table_contet' data-url-ajax="redes_sociales/datos_ajax" class="reload-ajax"> 
                         <?php if (!empty($datos)) : ?>
                            <?php foreach ($datos as $obj) : ?>
                                <tr class="odd gradeX parent-delete">
                                    <td><?php echo $obj->name ?></td>
                                    <td><?php echo $obj->direccion ?></td>
                                    <td class="center" width="100px">
                                        <span class="tip">
                                                    <a href="<?php echo cms_url('home/redes_sociales/delete') ?>" class="uibutton special" data-action="special-delete" data-table="users" data-field="id" data-value="<?php echo $obj->id ?>">Eliminar</a>
                                        </span>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                            </tbody>     
                        </table>
                    </div>
                </fieldset>
            </div>

        </div>
    </div>	
</div>

