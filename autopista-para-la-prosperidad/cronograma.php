<?php $m = 'cronograma'; ?>
<?php include('header.php') ?>

<div class="mainContent clearfix">

<h1>CRONOGRAMA</h1>

	<div class="sideBar">
		<ul class="mainSide">
			<li>Etapas</li>
		</ul>

	</div>

	<div class="rightContet">
		
		<div class="cronoImg"><img src="img/cronograma/1.jpg" height="200" width="626" alt=""></div>

		<table class="cronoTable">
			<thead>
				<tr>
					<th>ACTIVIDAD</th>
					<th>FECHA</th>
				</tr>
			</thead>
			<tbody>
				<?php pintar_actividad(1); ?>
				
			</tbody>
		</table>

<p style="margin-top:40px; font-size: 11px;"><strong>NOTA:</strong> las fechas corresponden a un cronograma tipo de una de las primeras concesiones de Autopistas para la Prosperidad. Las concesiones ser&aacute;n adjudicadas por la ANI en diciembre de 2013 y en mayo de 2014, con una duraci&oacute;n de ejecuci&oacute;n de obra de hasta seis a&ntilde;os.</p>
	
	
	
	</div>


</div>

<?php include('footer.php') ?>