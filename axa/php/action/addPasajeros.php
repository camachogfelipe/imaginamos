<?php session_start();?>
<?php


include '../dao/daoConnection.php';
include '../dao/pasajeroDAO.php';
include '../entities/pasajero.php';
include '../functions/simpleImages.php';

$datos = explode(',',$_POST['datos']);
$array = array_values(array_diff($datos, array('')));
if($datos == "" ){
    echo 'vacio';
}


$pasajeroDAO = new pasajeroDAO;
$pasajero = new pasajero;


for ($k=0;$k<count($array);$k++)
		{
			$pasajero->setNombretbl_pasajeros($array[$k]);
			$pasajero->setApellidostbl_pasajeros($array[$k+1]);
			$pasajero->setIdenteficaciontbl_pasajeros($array[$k+2]);
			$pasajero->setEmailtbl_pasajeros($array[$k+3]);
			$pasajero->setFechanacimientotbl_pasajeros($array[$k+4]);
			$pasajero->setEdad($array[$k+5]);
			if ($pasajeroDAO->save($pasajero))
			{
				$k+=5;
				$arrid[$k] = $pasajeroDAO->getLastId();
				$save = true;
			}
		}
if ($save==true)
{
	$arrid = array_values(array_diff($arrid, array('')));
	
	$countclient = count($arrid);
	for ($p=0;$p<($countclient);$p++)
		{
			if ($p==$countclient-1)
			{
				echo $arrid[$p];
				}
			else
				{
					echo $arrid[$p].',';
					
				}
		}


	
}
		
?>