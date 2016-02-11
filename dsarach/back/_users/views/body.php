<style scope>
    th{
        text-transform: uppercase;
    }
    input[type="number"]{
        border: none;
        background: none;
        opacity: .6;
        text-align: center;
    }
    input[type="number"]:focus{
        opacity: 1;
    }
</style>

<!-- full width -->
<div class="widget">
    <div class="header"><span><span class="ico gray window"></span>CMS Imaginamos / Usuarios / Creativos</span>

    </div><!-- End header -->
    <div class="content" >


        <div class="formEl_b">
            <div style="width: 957px; overflow-x: auto; display: block;border: 1px solid #ccc">
                <fieldset>
                    <div class="tableName toolbar">
                        <table class="display data_table2" >
                            <thead>
                                <tr>
                                    <th style="width: 10%"><div class="th_wrapp">Imagen </div></th>	
                            <th style="width: 20%"><div class="th_wrapp">Nombre </div></th>	
                            <th style="width: 20%"><div class="th_wrapp">Email </div></th>	
                            <th style="width: 20%"><div class="th_wrapp">Username </div></th>	
                            <th style="width: 20%"><div class="th_wrapp">Acciones </div></th>	
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($datos != ''):
                                    foreach ($datos as $item):
                                        ?>
                                        <tr class="odd gradeX parent-delete" >

                                            <td class="center" ><img src="<?php echo $item->get_profile_image() ?>" width="80"></td>
                                            <td class="center" ><?php echo ucwords($item->full_name) ?></td>
                                            <td class="center" ><?php echo strtolower($item->email) ?></td>
                                            <td class="center" ><?php echo $item->username ?></td>
                                            <td class="center" >
                                                <?php echo anchor("cms/users/edit/" . $item->id, "Editar", 'class="uibutton"') ?>
                                                <?php echo anchor("cms/admin/actions/delete", "Eliminar", 'class="uibutton special" data-action="special-delete" data-table="users" data-field="id" data-value="' . $item->id . '" data-delete-file="' . $item->image . '"') ?>
                                            </td>

                                        </tr>
                                        <?php
                                    endforeach;
                                endif;
                                ?>
                            </tbody>
                        </table>
                    </div>

                </fieldset>
            </div>

        </div>
    </div>	

</div><!-- End content -->
