<section class="title">
	<!-- We'll use $this->method to switch between contact_data.create & contact_data.edit -->
	<h4><?php echo lang('contact_data:'.$this->method); ?></h4>
</section>

<section class="item">
	<div class="content">
		<?php echo form_open_multipart($this->uri->uri_string(), 'class="crud"'); ?>

		<div class="form_inputs">

			<ul class="fields">
				<li>
		<label for="direccion">Direccion</label>
		<div class="input">
		<?php echo form_input("direccion", set_value("direccion", $direccion)); ?>
		</div>
		</li><li>
		<label for="barrio">Barrio</label>
		<div class="input">
		<?php echo form_input("barrio", set_value("barrio", $barrio)); ?>
		</div>
		</li><li>
		<label for="ciudad">Ciudad</label>
		<div class="input">
		<?php echo form_input("ciudad", set_value("ciudad", $ciudad)); ?>
		</div>
		</li><li>
		<label for="telefono">Telefono</label>
		<div class="input">
		<?php echo form_input("telefono", set_value("telefono", $telefono)); ?>
		</div>
		</li><li>
		<label for="tel_cel">Tel_cel</label>
		<div class="input">
		<?php echo form_input("tel_cel", set_value("tel_cel", $tel_cel)); ?>
		</div>
		</li><li>
		<label for="correo">Correo</label>
		<div class="input">
		<?php echo form_input("correo", set_value("correo", $correo)); ?>
		</div>
		</li>
        <li>
		<label for="map_url">Url del Mapa</label>
		<div class="input">
		<?php echo form_input("map_url", set_value("map_url", $map_url)); ?>
		</div>
		</li>
			<!-- <li>
				<label for="fileinput">Fileinput
					<?php if (isset($fileinput->data)): ?>
					<small>Current File: <?php echo $fileinput->data->filename; ?></small>
					<?php endif; ?>
					</label>
				<div class="input"><?php echo form_upload('fileinput', NULL, 'class="width-15"'); ?></div>
			</li> -->
		</ul>

	</div>

	<div class="buttons">
		<?php $this->load->view('admin/partials/buttons', array('buttons' => array('save', 'cancel') )); ?>
	</div>

	<?php echo form_close(); ?>
</div>
</section>