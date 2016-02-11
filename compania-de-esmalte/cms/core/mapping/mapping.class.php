<?php	
class  CMS_mapping
{	
	/**
	 * Name of the table in the db schema relating to child class
	 *
	 * @var 	string
	 * @access	protected
	 */
	var $_tbl	= '';

	/**
	 * Database connector
	 *
	 * @var		Object
	 * @access	protected
	 */
	var $_db	= null;
	/**
	 * Clase para construir un objeto a partir de una o varias tablas
	 *
	 * @access protected
	 * @param string $table Nombre de la tabla que queremos mapear como objeto
	 * @param object $db Database object
	 */
	function CMS_mapping($table="", $db="")
	{
		$this->_tbl		= $table;
		$this->_db		= $db;
	}
	
	/**
	 * Obtiene el nombre las columnas de la tabla que ha sido pasada por parámetro
	 *
	 * @access	public
	 * @param	$table	Tabla de donde se sacan los campos para que sean propiedades del objeto
	 * @return	boolean
	 */
	function getProperties($table)
	{		
		$query = "DESC ".$table;
		if($this->_db->doQuery($query, SELECT_QUERY) != false)
		{
			$res=$this->_db->results;
			
			//Borramos la propiedad resultado para que no se sobre cargue el objeto cada vez que hace un mapping
			unset($this->_db->results);
			return $res;
		}else{
			return false;
		}
		
	}
	/**
	 * Tiene como objetivo mapear una tabla dentro de un objeto, 
	 * Devuelve un objeto que tiene como propiedades los nombres de las columnas de la tabla que fue seteada en el constructor de la clase: $this->_tbl
	 * Se setean las propiedades del objeto de acuerdo a los nombres de los campos que estén en la base de datos
	 * Si el resulset pasado como parámetro, sólo tiene un registo, entonces se le asigna a la propiedad directamente
	 * Si el resulset pasado como parámetro trae más de un registro, entonces la propiedad se convierte en un array.
	 *
	 * @access	public
	 * @param	$res
	 * @return	Objeto con propiedades seteadas con los resultados del resulset pasado como parámetro
	 */
	function mapping($res)
	{
		$k = "";
		$j = $num_tbl = 0;
		//Necesitamos saber si se quiere construir el objeto a partir de una o varias tablas, pueden ser varias tablas, cuando se hace un inner join
		$table = explode(",", $this->_tbl);
		$num_tbl = count($table);
		//Capturamos cuántos registros vienen en el resulset
		$count = count($res);
		
		if($count == 1)
		{
			//Si hay más de una tabla de la que queremos setear como propiedades del objeto
			for($j=0;$j<$num_tbl;$j++)
			{
			//Si viene un sólo registro entonces no lo asignamos a un array sino a la propiedad directa, sin [$i], mirar la línea 89 $temp= $r[$k[Field]];
				foreach($this->getProperties($table[$j]) as $k )
				{
					//echo $k['Field'];
					if($res[0]!= "")
					{
						foreach($res as $r)
						{
							//Si existe un indice con ese nombre, asígnelo; Osea si viene en la consulta o query
							if(isset($r[$k['Field']]))
							{
								$temp= $r[$k['Field']];//** Sin array porque es un sólo registro
							}
						}
					}
					// Esta validación es para que sólo cree las propiedades del objeto que son incluidos como nombres de campos en el query
					//Si queremos que las propiedades del objeto sean todos los campos de la tabla sin exepción, entonces quitamos la validación del si es diferente de NULL
					if($temp != NULL)
					{
						$this->$k['Field'] = $temp;
					}
					$temp = "";
				}
			}
			unset($this->_db);
			return $this;
		}elseif($count >0)
		{
			for($j=0;$j<$num_tbl;$j++)
			{
			//Sino, si vienen varios registros, entonces se lo asignamos a la propiedad pero como un array, mirar línea 119
				foreach($this->getProperties($table[$j]) as $k )
				{
					$i = 0;
					if($res[0]!= "")
					{
						foreach($res as $r)
						{
							$temp[$i]= $r[$k[Field]];//Como array porque son varios registros
							$i++;
						}
					}
					$this->$k[Field] = $temp;
					$temp = "";
				}
			}
		//Para saber qué está trayendo el objeto descomentar la línea contigua
		//var_dump($this);
		//Borramos la propiedad db para que no se retorne 
		unset($this->_db);
		return $this;
		}else{
			return false;
		}
		
	}
}