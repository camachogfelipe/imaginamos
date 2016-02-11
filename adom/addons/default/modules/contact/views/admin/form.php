<section class="title">
	<!-- We'll use $this->method to switch between contact.create & contact.edit -->
	<h4><?php echo lang('contact:'.$this->method); ?></h4>
</section>

<section class="item">
	<div class="content">
		<?php echo form_open_multipart($this->uri->uri_string(), 'class="crud"'); ?>

		<div class="form_inputs">

			<ul class="fields">
				<li>
		<label for="nombre">Nombre</label>
		<div class="input">
		<?php echo form_input("nombre", set_value("nombre", $nombre)); ?>
		</div>
		</li><li>
		<label for="empresa">Empresa</label>
		<div class="input">
		<?php echo form_input("empresa", set_value("empresa", $empresa)); ?>
		</div>
		</li><li>
		<label for="email">Email</label>
		<div class="input">
		<?php echo form_input("email", set_value("email", $email)); ?>
		</div>
		</li><li>
		<label for="celular">Celular</label>
		<div class="input">
		<?php echo form_input("celular", set_value("celular", $celular)); ?>
		</div>
		</li><li>
		<label for="telefono">Telefono</label>
		<div class="input">
		<?php echo form_input("telefono", set_value("telefono", $telefono)); ?>
		</div>
		</li><li>
		<label for="pais">Pais</label>
		<div class="input">
		<?php echo form_input("pais", set_value("pais", $pais)); ?>
		</div>
		</li><li>
		<label for="ciudad">Ciudad</label>
		<div class="input">
		<?php echo form_input("ciudad", set_value("ciudad", $ciudad)); ?>
		</div>
		</li><li>
		<label for="comentario">Comentario</label>
		<div class="input">
		<?php echo form_textarea("comentario", set_value("comentario", $comentario)); ?>
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