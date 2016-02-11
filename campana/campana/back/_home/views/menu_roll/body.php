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
            Roll Over del Menu
        </span>
    </div><!-- End header -->
    <div class="content">


        <div class="formEl_b">

            <div>
                <fieldset>

                    <div class="clearfix">

                        <?php echo form_open(cms_url('home/menu_roll/add'),array('data-action'=>"ajax-form",'action'=>"POST" )) ?>

                        <legend><h1> Roll Over del Menu</h1></legend>

                        <input name="id" value="" id="id" type="hidden">

                        <div class="section">
                            <label class="req" >Texto Roll Over</label>
                            <textarea rows="3" class="large"  name="text" placeholder="Texto Roll Over..." maxlength="123"></textarea>
                        </div>


                        <div class="section">
                            <label class="req">Items del Menu</label>
                            <select name="fmenu_items_id" class="large" >
                                <?php if (!empty($items)) : ?>
                                    <?php foreach ($items as $item) : ?>
                                        <option value="<?php echo $item->id; ?>"><?php echo $item->item; ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>
  
                        <br><br>
                        <button type="submit" id="Guardar" class="uibutton" >Crear Roll Over Menu</button>


                        <?php echo form_close() ?>
                    </div>

                    <div class="tableName toolbar">
                        <table class="display data_table2" >
                            <thead>
                                <tr>
                                    <th style="width: 60%">Texto Introductorio</th>
                                    <th>Items del Menu</th>
                                    <th><div class="th_wrapp">Acciones</div></th>
                            </tr>
                            </thead>
                            <tbody id='table_contet' data-url-ajax="menu_roll/datos_ajax" class="reload-ajax">
                            <?php if (!empty($datos)) : ?>
                                    <?php foreach ($datos as $obj) : ?>
                                        <tr class="odd gradeX parent-delete">
                                            <td style="text-align: justify;" ><?php echo substr($obj->text, 0 , 255);  ?></td>
                                            <td><?php echo $obj->item ?></td>
                                            <td width="100px">
                                                <span class="tip">
                                                    <a href="<?php echo cms_url('home/menu_roll/delete') ?>" class="uibutton special" data-action="special-delete" data-table="users" data-field="id" data-value="<?php echo $obj->id ?>">Eliminar</a>
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
