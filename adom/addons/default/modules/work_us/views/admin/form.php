<section class="title">
    <!-- We'll use $this->method to switch between work_us.create & work_us.edit -->
    <!--h4><?php echo lang('work_us:' . $this->method); ?></h4-->
    <h4>Info</h4>
</section>

<section class="item">
    <div class="content">
        <?php echo form_open_multipart($this->uri->uri_string(), 'class="crud"'); ?>

        <div class="form_inputs" style="pointer-events:none;">

            <ul class="fields">
                <li>
                    <label for="name"><?php echo lang('work_us:name'); ?></label>
                    <div class="input">
                        <?php echo form_input("name", set_value("name", $name)); ?>
                    </div>
                </li><li>
                    <label for="last_name"><?php echo lang('work_us:lastName'); ?></label>
                    <div class="input">
                        <?php echo form_input("last_name", set_value("last_name", $last_name)); ?>
                    </div>
                </li><li>
                    <label for="date_birth"><?php echo lang('work_us:date_birth')?></label>
                    <div class="input">
                        <?php echo form_input("date_birth", set_value("date_birth", $date_birth)); ?>
                    </div>
                </li><li>
                    <label for="document_type"><?php echo lang('work_us:document_type'); ?></label>
                    <div class="input">
                        <?php
                        $options = array(
                            '1' => 'Cedula de ciudadania',
                            '2' => 'Cedula Extanjera'
                        );
                        ?>
                        <?php echo form_dropdown("document_type", $options, $document_type); ?>
                    </div>
                </li><li>
                    <label for="document"><?php echo lang('work_us:document') ?></label>
                    <div class="input">
                        <?php echo form_input("document", set_value("document", $document)); ?>
                    </div>
                </li><li>
                    <label for="address"><?php echo lang('work_us:address') ?></label>
                    <div class="input">
                        <?php echo form_input("address", set_value("address", $address)); ?>
                    </div>
                </li><li>
                    <label for="tel"><?php echo lang('work_us:tel')?></label>
                    <div class="input">
                        <?php echo form_input("tel", set_value("tel", $tel)); ?>
                    </div>
                </li><li>
                    <label for="tel_mobile"><?php echo lang('work_us:tel_mobile')?></label>
                    <div class="input">
                        <?php echo form_input("tel_mobile", set_value("tel_mobile", $tel_mobile)); ?>
                    </div>
                </li><li>
                    <label for="country_id"><?php echo lang('work_us:country')?></label>
                    <div class="input">
                        <?php echo form_dropdown("country_id", $countries, $country_id); ?>
                    </div>
                </li><li>
                    <label for="city_id"><?php echo lang('work_us:city')?></label>
                    <div class="input">
                        <?php echo form_dropdown("city_id", $cities, $city_id); ?>
                    </div>
                </li><li>
                    <label for="neighborhood"><?php echo lang('work_us:neighborhood')?></label>
                    <div class="input">
                        <?php echo form_input("neighborhood", set_value("neighborhood", $neighborhood)); ?>
                    </div>
                </li><li>
                    <label for="email"><?php echo lang('work_us:email')?></label>
                    <div class="input">
                        <?php echo form_input("email", set_value("email", $email)); ?>
                    </div>
                </li><li>
                    <label for="charge_id"><?php echo lang('work_us:charge')?></label>
                    <div class="input">
                        <?php echo form_dropdown("charge_id", set_value("charge_id", $charge_id)); ?>
                    </div>
                </li><li>
                    <label for="schooling_id"><?php echo lang('work_us:schooling')?></label>
                    <div class="input">
                         <?php
                        $options = array(
                            '1' => 'Bachiller',
                            '2' => 'Técnicos',
                            '3' => 'Tecnológico',
                            '4' => 'Profesionales',
                            '5' => 'Especialización',
                        );
                        ?>
                        <?php echo form_dropdown("schooling_id", $options, $schooling_id); ?>
                    </div>
                </li><li>
                    <label for="is_student"><?php echo lang('work_us:is_student')?></label>
                    <div class="input">
                        <?php echo form_checkbox("is_student", "is_student", $is_student); ?>
                    </div>
                </li><li>
                    <label for="career"><?php echo lang('work_us:career')?></label>
                    <div class="input">
                        <?php echo form_input("career", set_value("career", $career)); ?>
                    </div>
                </li><li>
                    <label for="semester"><?php echo lang('work_us:semester')?></label>
                    <div class="input">
                        <?php echo form_input("semester", set_value("semester", $semester)); ?>
                    </div>
                </li><li>
                    <label for="university"><?php echo lang('work_us:university')?></label>
                    <div class="input">
                        <?php echo form_input("university", set_value("university", $university)); ?>
                    </div>
                </li><li>
                    <label for="company_name"><?php echo lang('work_us:company_name')?></label>
                    <div class="input">
                        <?php echo form_input("company_name", set_value("company_name", $company_name)); ?>
                    </div>
                </li><li>
                    <label for="company_tel"><?php echo lang('work_us:company_tel')?></label>
                    <div class="input">
                        <?php echo form_input("company_tel", set_value("company_tel", $company_tel)); ?>
                    </div>
                </li><li>
                    <label for="company_career"><?php echo lang('work_us:company_career')?></label>
                    <div class="input">
                        <?php echo form_input("company_career", set_value("company_career", $company_career)); ?>
                    </div>
                </li><li>
                    <label for="company_chief"><?php echo lang('work_us:company_chief')?></label>
                    <div class="input">
                        <?php echo form_input("company_chief", set_value("company_chief", $company_chief)); ?>
                    </div>
                </li><li>
                    <label for="company_admission_date"><?php echo lang('work_us:company_admission_date')?></label>
                    <div class="input">
                        <?php echo form_input("company_admission_date", set_value("company_admission_date", $company_admission_date)); ?>
                    </div>
                </li><li>
                    <label for="company_retirement_date"><?php echo lang('work_us:company_retirement_date')?></label>
                    <div class="input">
                        <?php echo form_input("company_retirement_date", set_value("company_retirement_date", $company_retirement_date)); ?>
                    </div>
                </li><li>
                    <label for="company_reason_leaving"><?php echo lang('work_us:company_reason_leaving')?></label>
                    <div class="input">
                        <?php echo form_textarea("company_reason_leaving", set_value("company_reason_leaving", $company_reason_leaving)); ?>
                    </div>
                </li><li>
                    <label for="file"><?php echo lang('work_us:file')?></label>
                    <div class="input">
                        <?php echo $file; ?>
                    </div>
                </li>
                <!--li>
                    <label for="fileinput">Fileinput
                <?php if (isset($fileinput->data)): ?>
                                    <small>Current File: <?php echo $fileinput->data->filename; ?></small>
                <?php endif; ?>
                    </label>
                    <div class="input"><?php echo form_upload('fileinput', NULL, 'class="width-15"'); ?></div>
                </li-->
            </ul>

        </div>

        <div class="buttons">
            <?php $this->load->view('admin/partials/buttons', array('buttons' => array('cancel'))); ?>
        </div>

        <?php echo form_close(); ?>
    </div>
</section>