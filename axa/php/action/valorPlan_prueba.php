<?php
 /*error_reporting(E_ALL);
 ini_set("display_errors", 1);*/
include '../dao/daoConnection.php';
include '../dao/PlanDAO.php';
include '../entities/Plan.php';
include ("../dao/valorcostoplan_pruebaDAO.php");
include ("../entities/valorcostoplan.php");

include '../dao/aspectsDAO.php';
include '../entities/aspect.php';

$aspectoNombre = 'IATA';

$aspectoDAO= new AspectsDAO;
$aspecto = $aspectoDAO->getAspect($aspectoNombre);

$datos = explode(',',$_POST['datos']);
$idPlan = intval($datos[0]);
if($datos == "" ){
    echo NULL;
}
else
	{
		$costoplanDAO = new valorcostoplanDAO;
		$diaspermitidos = $costoplanDAO->getDias($datos[0]);
		$planDAO = new PlanDAO;
		$datosvalordia = $planDAO->getPlan($datos[0]);
		$valordiaUS = $datosvalordia->getValordiaAddtbl_plan();//obtenemos el valor del dia adicional por plan que siempre sera uno
		$valordiaCOP = $valordiaUS*$aspecto->getValue();
		if (intval($datos[1])<=intval($diaspermitidos))
		{
			$listaCostoplan = $costoplanDAO->getbyPlanid($datos[0]);
			$s=0;
			foreach ($listaCostoplan as $costo)
			{
				$arrvalor[$s] = $costo->getIdtbl_plan();//obtenemos el valor del costo segun el plan
				$arrdescripcion[$s] = $costo->getIdtbl_valorcosto();//obtenemos la descripcion del valor costo Ejemplo(0 a 5) 
				
				$s++;
			}
			
			$countconstos = count($arrdescripcion);
			for ($k=0;$k<$countconstos;$k++)
			{
				$arrdescripcion1[$k] = explode('a',$arrdescripcion[$k]);//hacemos un explode para obtener el rango de los dias ejemplo del rango 0 a 5, obtenemos los dias independientes 0,5
			}
			for ($j=0;$j<count($arrdescripcion1);$j++)
			{
				if ( intval($datos[1])<$arrdescripcion1[$j][1] &&  intval($datos[1])>$arrdescripcion1[$j][0] ||  intval($datos[1])==$arrdescripcion1[$j][1] ||  intval($datos[1])==$arrdescripcion1[$j][0])
				{
					$saldoUS = $arrvalor[$j];
					$valorCOP = $saldoUS*$aspecto->getValue();
					$valorindividual = $arrvalor[$j];
					//VERIFICAMOS QUE INDICE SEA DIFERENTE DE 0 DE LO CONTRARIO SE APLICARA UNA UNICA TARIFA
					if ($j!=0)
					{
						$difdias = intval($datos[1] - $arrdescripcion1[$j-1][1]);//buscamos la direrencia de dias con el ultimo dia del rango anterior
						$valantUS = $arrvalor[$j-1];//obtenemos el valor del rango anterior
						$costodias = $difdias*$valordiaUS;//obtenemos el costo de dias multiplacando el valor del dia por la diferencia de dias
						$saldoUSant = $costodias + $valantUS;//obtenemos el saldo de los dias adicionales + el valor del rango anterior
						$valorCOPant = $saldoUSant*$aspecto->getValue();//convertimos a moneda colombiana
						if ($idPlan!=12)//Condición unica para el plan schengen (no aplica la diferencia de días)
						{
							//echo 'dif dias: '.$difdias.', val ranAnt: '.$valantUS.', val actual: '.$saldoUS.', costo dias: '.$costodias.', dias+valAnt: '.$saldoUSant.' ****';
							//VERIFICAMOS SI EL NUEVO SALDO ES MENOR AL saldo del rango de dias en que se encuentran los dias de viaje
							if ($saldoUSant < $saldoUS)
							{
								$valorindividual = $saldoUSant;
								echo 'Valor individual: '.$valorindividual.', Valor plan: '.$saldoUSant.', Valor cop: '.$valorCOPant;		
								break;
							}
							else
								{
									echo 'Valor individual: '.$valorindividual.', Valor plan: '.$saldoUS.', Valor cop: '.$valorCOP;
									break;	
								}
						}else
							{
								echo 'Valor individual: '.$valorindividual.', Valor plan: '.$saldoUS.', Valor cop: '.$valorCOP.' para plan schengen';
								break;	
							}	
						//echo '<br />'.$datos[1].' dia j,1: '. $arrdescripcion1[$j][0].' | dia j,0: '. $arrdescripcion1[$j][1].' valor rango: '.$arrvalor[$j].' ///////'.' rango anterior dia j,1: '. $arrdescripcion1[$j-1][0].' | dia j,0: '. $arrdescripcion1[$j-1][1].' valor rango ant: '.$arrvalor[$j-1].' diferencia dias: '.$difdias;
						
					}else
						{
							echo $valorindividual.','.$saldoUS.','.$valorCOP;
							break;
						}
				}
			}
		}
		else
		{
			echo $diaspermitidos;	
		}
	}
?>