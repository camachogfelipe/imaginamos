<?php include './cms/core/mapping/include.mapping.php';?>
<?php $id = $_GET['id'];

        ?>

		<div class="cronoImg"><img src="img/cronograma/1.jpg" height="200" width="626" alt=""></div>

		<table class="cronoTable">
			<thead>
				<tr>
					<th>ACTIVIDAD</th>
					<th>FECHA</th>
				</tr>
			</thead>
			<tbody>
				<?php pintar_actividad($id); ?>
				
			</tbody>
		</table>

<p style="margin-top:40px; font-size: 11px;"><strong>NOTA:</strong> las fechas corresponden a un cronograma tipo de una de las primeras concesiones de Autopistas para la Prosperidad. Las concesiones ser&aacute;n adjudicadas por la ANI en diciembre de 2013 y en mayo de 2014, con una duraci&oacute;n de ejecuci&oacute;n de obra de hasta seis a&ntilde;os.</p>