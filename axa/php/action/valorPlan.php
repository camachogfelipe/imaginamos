<?php
error_reporting(0);
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

// Id del plan: datos[0]. Días a comprar: datos[1]
if(isset($_POST['datos'])) :
	$datos = explode(',',$_POST['datos']);
	$idPlan = intval($datos[0]);
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
				//hacemos un explode para obtener el rango de los dias ejemplo del rango 0 a 5, obtenemos los dias independientes 0,5
				$arrdescripcion1[$k] = explode(' a ',$arrdescripcion[$k]);
			}
			for ($j=0;$j<count($arrdescripcion1);$j++)
			{
				if(intval($datos[1]) > $arrdescripcion1[$j][0] and intval($datos[1]) < $arrdescripcion1[$j][1] and 
					 $arrdescripcion1[$j][1] <= 5) :
					 $ciclo = 1;
					if($idPlan == 12) :
						$valorindividual = $arrvalor[$j];
						$valorRango = $arrvalor[$j];
						$RangoInferiorDiasDiferencia = $arrdescripcion1[$j][1];
						$diasVenta = $RangoInferiorDiasDiferencia;
						$diasAdicionales = 0;
					else :					
						$valorindividual = $arrvalor[$j];
						$valorRango = $arrvalor[$j];
						$RangoInferiorDiasDiferencia = $arrdescripcion1[$j][1];
						$diasVenta = $datos[1] - $RangoInferiorDiasDiferencia;
						if($datos[1] >= $RangoInferiorDiasDiferencia) $diasAdicionales = $datos[1] - $RangoInferiorDiasDiferencia;
						else $diasAdicionales = 0;
					endif;
					break;
				elseif(intval($datos[1]) > $arrdescripcion1[$j][0] and intval($datos[1]) < $arrdescripcion1[$j][1] and $j > 0) :
					 $ciclo = 2;
					if($idPlan == 12) :
						$valorindividual = $arrvalor[$j];
						$valorRango = $arrvalor[$j];
						$RangoInferiorDiasDiferencia = $arrdescripcion1[$j][1];
						$diasVenta = $datos[1] - $RangoInferiorDiasDiferencia;
						$diasAdicionales = 0;
					else :
						$valorindividual = $arrvalor[$j-1];
						$valorRango = $arrvalor[$j];
						$RangoInferiorDiasDiferencia = $arrdescripcion1[$j-1][1];
						$diasVenta = $datos[1] - $RangoInferiorDiasDiferencia;
						if($datos[1] >= $RangoInferiorDiasDiferencia) $diasAdicionales = $datos[1] - $RangoInferiorDiasDiferencia;
						else $diasAdicionales = 0;
					endif;
					break;
				elseif(intval($datos[1]) == $arrdescripcion1[$j][0] and $j > 0) :
					 $ciclo = 3;
					if($idPlan == 12) :
						$valorindividual = $arrvalor[$j+1];
						$valorRango = $arrvalor[$j];
						$RangoInferiorDiasDiferencia = $arrdescripcion1[$j][1];
						$diasVenta = $datos[1] - $RangoInferiorDiasDiferencia;
						$diasAdicionales = 0;
					else :					
						$valorindividual = $arrvalor[$j-1];
						$valorRango = $arrvalor[$j];
						$RangoInferiorDiasDiferencia = $arrdescripcion1[$j-1][1];
						$diasVenta = $datos[1] - $RangoInferiorDiasDiferencia;
						if($datos[1] >= $RangoInferiorDiasDiferencia) $diasAdicionales = $datos[1] - $RangoInferiorDiasDiferencia;
						else $diasAdicionales = 1;
					endif;
					break;
				elseif(intval($datos[1]) == $arrdescripcion1[$j][1]) :
					 $ciclo = 4;
					$valorindividual = $arrvalor[$j];
					$valorRango = $arrvalor[$j];
					$RangoInferiorDiasDiferencia = $arrdescripcion1[$j][1];
					$diasVenta = $datos[1] - $RangoInferiorDiasDiferencia;
					$diasAdicionales = 0;
					break;
				endif;
			}
			$ValorDiasAdicionales = $diasAdicionales * $valordiaUS;
			$valorTotal2 = $valorindividual + $ValorDiasAdicionales;
			$valorTotal = $valorTotal2;
			
			/*SI (Valor plan rango inferior anterior + días adicionales) < (Valor plan rango actual actual)
			ENTONCES Valor total = Valor plan rango inferior anterior + días adicionales
 
			SI (Valor plan rango inferior anterior + días adicionales) > (Valor plan rango actual actual)
			ENTONCES Valor total = Valor plan rango actual actual*/
			
			if($valorTotal > $valorRango || $diasAdicionales == 0) $valorTotal = $valorRango;
			
			$valorCOPlan = $valorTotal * $aspecto->getValue();
			echo $valorTotal.','.$valorTotal.','.$valorCOPlan.",".$datos[1].",".$diasVenta.",".$diasAdicionales.",".$RangoInferiorDiasDiferencia.",".$ciclo.",".$valorRango.",".$valorTotal2;
		}
		else
		{
			echo $diaspermitidos;	
		}
else :
	header("Location: ../../");
endif;
?>