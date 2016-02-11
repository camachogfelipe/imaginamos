<div class="widget">
    <div class="header"><span><span class="ico gray window"></span>CONFIGURACION GENERAL CMS</span>
    </div><!-- End header -->
    <div class="content">


        <div class="formEl_b">

            <div>
                <fieldset>
                    <!-- content -->

                    <script>function confirmar ( mensaje ) {return confirm( mensaje );}</script>

                    <div>

                        <?php echo form_open(cms_url('admin/menus/add')) ?>             
                            <legend><h1>MENUS</h1></legend>                    
                            <div class="section">
                                <label>Nombre del menú</label>
                                <div><input type="text" name="title" id="namemenu" class="large" required></div>
                            </div>

                            <div class="section">
                                <label>Url del menú</label>
                                <div><input type="text" name="url" id="urlmenu" class="large" required></div>
                            </div>

                            <div class="section">
                                <label>Icono del menú</label>				  
                                <div>

                                    <table width="80%" border="0">
                                        <tr>
                                            <td><img src="http://cms.imaginamos.com/images/icon/gray_18/administrator.png"></td>
                                            <td><img src="http://cms.imaginamos.com/images/icon/gray_18/briefcase.png"></td>
                                            <td><img src="http://cms.imaginamos.com/images/icon/gray_18/calendar.png"></td>
                                            <td><img src="http://cms.imaginamos.com/images/icon/gray_18/camera.png"></td>
                                            <td><img src="http://cms.imaginamos.com/images/icon/gray_18/checkmark.png"></td>
                                            <td><img src="http://cms.imaginamos.com/images/icon/gray_18/clipboard.png"></td>
                                            <td><img src="http://cms.imaginamos.com/images/icon/gray_18/diary.png"></td>
                                            <td><img src="http://cms.imaginamos.com/images/icon/gray_18/group.png"></td>
                                            <td><img src="http://cms.imaginamos.com/images/icon/gray_18/headset.png"></td>
                                            <td><img src="http://cms.imaginamos.com/images/icon/gray_18/mail_open.png"></td>
                                            <td><img src="http://cms.imaginamos.com/images/icon/gray_18/music_folder.png"></td>
                                            <td><img src="http://cms.imaginamos.com/images/icon/gray_18/pictures_folder.png"></td>
                                            <td><img src="http://cms.imaginamos.com/images/icon/gray_18/satellite.png"></td>
                                            <td><img src="http://cms.imaginamos.com/images/icon/gray_18/zoom_in.png"></td>
                                            <td><img src="http://cms.imaginamos.com/images/icon/gray_18/usb.png"></td>
                                        </tr>
                                        <tr>
                                            <td><input type="radio" name="icon" id="radio_1" value="administrator" /></td>
                                            <td><input type="radio" name="icon" id="radio_2" value="briefcase" /></td>
                                            <td><input type="radio" name="icon" id="radio_3" value="calendar" /></td>
                                            <td><input type="radio" name="icon" id="radio_4" value="camera" /></td>
                                            <td><input type="radio" name="icon" id="radio_5" value="checkmark" /></td>
                                            <td><input type="radio" name="icon" id="radio_6" value="clipboard" /></td>
                                            <td><input type="radio" name="icon" id="radio_7" value="diary" /></td>	
                                            <td><input type="radio" name="icon" id="radio_8" value="group" /></td>
                                            <td><input type="radio" name="icon" id="radio_9" value="headset" /></td>
                                            <td><input type="radio" name="icon" id="radio_10" value="mail_open" /></td>
                                            <td><input type="radio" name="icon" id="radio_11" value="music_folder" /></td>
                                            <td><input type="radio" name="icon" id="radio_12" value="pictures_folder" /></td>
                                            <td><input type="radio" name="icon" id="radio_13" value="satellite" /></td>
                                            <td><input type="radio" name="icon" id="radio_14" value="zoom_in" /></td>
                                            <td><input type="radio" name="icon" id="radio_15" value="usb" /></td>
                                        </tr>
                                    </table>


                                </div>
                            </div>	

                            <br /><br />
                            
                            <button class="uibutton" type="">Agregar menú</button>
                            
                            <?php echo form_hidden('continue_url', current_url()) ?>
                            
                        <?php echo form_open() ?>

                    </div>

                    <p>&nbsp;</p>

                    <div class="tableName toolbar">
                        <table class="display data_table2" >
                            <thead>
                                <tr>
                                    <th><div class="th_wrapp">Icono</div></th>
                                    <th><div class="th_wrapp">Título del menú</div></th>
                                    <th><div class="th_wrapp">URL del menú</div></th>
                                    <th><div class="th_wrapp">Acciones</div></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($datos->exists()):
                                    foreach ($datos->all as $dato) :
                                        ?>
                                        <tr class="odd gradeX parent-delete">
                                            <td class="center" width="50px"><img src="http://cms.imaginamos.com/images/icon/gray_18/<?php echo $dato->icon ?>.png"></td>
                                            <td class="center" width="300px"><?php echo $dato->title ?></td>
                                            <td class="center" width="300px"><?php echo $dato->url ?></td>
                                            <td class="center" width="100px">
                                                <a href="<?php echo cms_url('admin/actions/delete') ?>" class="uibutton special" data-action="special-delete" data-table="menu" data-field="id" data-value="<?php echo $dato->id ?>">Eliminar</a>
                                            </td>
                                        </tr>
                                        <?php
                                    endforeach;
                                endif;
                                ?>
                            </tbody>
                        </table>
                    </div>

                    <!-- // content -->
                </fieldset>
            </div>

        </div>
    </div>	
</div>