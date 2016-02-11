<?php

	$pais_id=$_GET["pais"];
		include_once './../php/clases.php';

	if ($pais_id==0) {
		exit();
	}

	$ciudadDAO = new ciudadDAO();
	$ciudad = new ciudad();
	$ciudades = $ciudadDAO->getByPais($pais_id);
	$totalCiudades = $ciudadDAO->total();

?>
<select name="ciudad" id="ciudad" class="selectsintec">

<?php if ($totalCiudades>0): ?>
	<?php foreach ($ciudades as $ciudad): ?>
		<option value="<?php echo $ciudad->getid() ?>"><?php echo $ciudad->getnombre_i() ?></option>
	<?php endforeach ?>
<?php endif ?>
</select>