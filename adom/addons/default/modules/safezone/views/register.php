<section class="title">
    <!-- We'll use $this->method to switch between sample.create & sample.edit -->
    <h4><?php echo lang('safezone:formregister'); ?></h4>
</section>
<?php echo validation_errors(); ?>
<section class="item">
    <div class="content">
        <?php echo form_open_multipart('safezone/set_register', 'class="crud"'); ?>
        <div class="form_inputs">
            <div class="camp">
                <label for="name"><?php echo lang('safezone:name'); ?> <span>*</span></label>
                <div class="input">
                    <?php
                    echo form_input('name', set_value('name'), 'class="width-15"');
                    ?>
                </div>
            </div>
            <div class="camp">
                <label for="last_name"><?php echo lang('safezone:last_name'); ?> <span>*</span></label>
                <div class="input">
                    <?php
                    echo form_input('last_name', set_value('last_name'), 'class="width-15"');
                    ?>
                </div>
            </div>
            <div class="camp">
                <label for="email"><?php echo lang('safezone:email'); ?> <span>*</span></label>
                <div class="input">
                    <?php
                    echo form_input('email', set_value('email'), 'class="width-15"');
                    ?>
                </div>
            </div>
            <div class="camp">
                <label for="cel"><?php echo lang('safezone:cel'); ?> <span>*</span></label>
                <div class="input">
                    <?php
                    echo form_input('cel', set_value('cel'), 'class="width-15"');
                    ?>
                </div>
            </div>
            <div class="camp">
                <label for="tel"><?php echo lang('safezone:tel'); ?> <span>*</span></label>
                <div class="input">
                    <?php
                    echo form_input('tel', set_value('tel'), 'class="width-15"');
                    ?>
                </div>
            </div>

            <div class="camp">
                <label for="country_id"><?php echo lang('safezone:cuontry'); ?> <span>*</span></label>
                <div class="selected">
                    <?php
                    echo form_dropdown('country_id', $countries, '', 'id=country_id');
                    ?>
                </div>
            </div>
            <div class="camp">
                <label for="city_id"><?php echo lang('safezone:city'); ?> <span>*</span></label>
                <div class="selected"><?php echo form_dropdown('city_id', array('' => 'Seleccione...'), '', 'id=city_id'); ?></div>
            </div>
            <div class="camp">
                <label for="building_id"><?php echo lang('safezone:building'); ?> <span>*</span></label>
                <div class="selector"><?php echo form_dropdown('building_id', array('' => 'Seleccione...'), '', 'id=building_id'); ?></div>
            </div>
            <div class="camp">
                <label for="office_id"><?php echo lang('safezone:offices'); ?> <span>*</span></label>
                <div class="selector"><?php echo form_multiselect('office_id[]', array('' => ''), '', 'id=office_id'); ?></div>
            </div>
            <div class="camp">
                <label for="pass"><?php echo lang('safezone:pass'); ?> <span>*</span></label>
                <div class="selector"><?php  echo form_password('pass', set_value('pass'), 'class="width-15"'); ?></div>
            </div>
            
            <div class="camp">
                <label for="comfpass"><?php echo lang('safezone:comfpass'); ?> <span>*</span></label>
                <div class="selector"><?php  echo form_password('comfpass', set_value('comfpass'), 'class="width-15"'); ?></div>
            </div>
           
            <div class="camp">
                <label for="coment"><?php echo lang('safezone:coment'); ?> <span>*</span></label>
                <div class="selector"><?php echo form_textarea('coment'); ?></div>
            </div>

        </div>
        <div class="buttons">
            <?php echo form_submit('send', lang('safezone:send')); ?>
        </div>
        <?php echo form_close(); ?>
    </div>
</section>