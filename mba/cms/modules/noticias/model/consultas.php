<?php
#CONSULTAS

class Consultas
{
	function Byid($tabla,$id,$campoid,$arraycampos)
	{
		if ($tabla == "" || $id == "")
		{
			//Mensaje si llega vacio
			$objResponse = 2;
			return $objResponse;
			exit;
		}
		else
		{
			$db = new Database();
			//Conectamos
			$db->connect();
			$query = "SELECT * FROM ".$tabla." WHERE idcms = $id";
                        //echo $query . '--------';
			$db->doQuery($query,SELECT_QUERY);
			$results = $db->results;
			$numOfResults = $db->getNumResults();
			if ($numOfResults>0)
			{
				$s = 0;
				foreach ($results as $result)
				{
					$valores[$s] = $result[$arraycampos[$s]];
					$valores[$s+1] = $result[$arraycampos[$s+1]];
					$valores[$s+2] = $result[$arraycampos[$s+2]];
					$valores[$s+3] = $result[$arraycampos[$s+3]];
					$valores[$s+4] = $result[$arraycampos[$s+4]];
					$valores[$s+5] = $result[$arraycampos[$s+5]];
					$valores[$s+6] = $result[$arraycampos[$s+6]];
                                        $valores[$s+7] = $result[$arraycampos[$s+7]];
					$valores[$s+8] = $result[$arraycampos[$s+8]];
					$valores[$s+9] = $result[$arraycampos[$s+9]];
					$valores[$s+10] = $result[$arraycampos[$s+10]];
					$valores[$s+11] = $result[$arraycampos[$s+11]];
					$valores[$s+12] = $result[$arraycampos[$s+12]];

                                        $s+=7;
					
				}
				
			}
			
			return $valores;
			exit;
		}	
		
	}
	function Gets($tabla,$orderby,$typeorder)
	{
		if ($tabla == "")
		{
			//Mensaje si llega vacio
			$objResponse = 2;
			return $objResponse;
			exit;
		}
		if ($typeorder == "")
		{
			$typeorder == 'ASC'	;
		}
		else
		{
			$db = new Database();
			//Conectamos
			$db->connect();
			$query = "SELECT * FROM ".$tabla." ORDER BY ".$orderby." ".$typeorder."" ;
			$db->doQuery($query,SELECT_QUERY);
			$results = $db->results;
			$numOfResults = $db->getNumResults();
			if ($numOfResults>0)
			{
				$s = 0;
				foreach ($results as $result)
				{
					$valores[$s] = $result[idtbl_capitulos];
					$valores[$s+1] = $result[nombretbl_capitulos];
					$valores[$s+2] = $result[logotbl_capitulos];
					$s+=3;
					
				}
				
			}
			
			return $valores;
			exit;
		}	
		
	}
	function total($tabla)
	{
		if ($tabla == "")
		{
			//Mensaje si llega vacio
			$objResponse = 2;
			return $objResponse;
			exit;
		}
		$db = new Database();
		//Conectamos
		$db->connect();
		$query = "SELECT * FROM ".$tabla."  WHERE seccioncms_bannerup = 1" ;
		$db->doQuery($query,SELECT_QUERY);
		$results = $db->results;
		$numOfResults = $db->getNumResults();
		return $numOfResults;
		exit;
	}
}


?>