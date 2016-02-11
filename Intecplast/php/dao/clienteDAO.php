<?php

class clienteDAO{
	
	public $daoConnection;

	function __construct(){
		
		$this->daoConnection = new DAO;
		$this->daoConnection->conectar();

	}

	function save($cliente){

		$new = new cliente();
		$new = $cliente;

		$sql = "INSERT INTO clientes (cliente_id, tipoid_cod, cliente_nombre, cliente_apellidos, cliente_empresa, cliente_cargo, cliente_telfijo, cliente_telcel, cliente_direccion, ciudad_id, cliente_email, cliente_pass, cliente_registro, cliente_newsletter, cliente_idioma, pais)
		VALUES(
		'".mysql_real_escape_string($new->getClienteId())."',
		'".mysql_real_escape_string($new->getTipoid())."',
		'".mysql_real_escape_string($new->getNombre())."',
		'".mysql_real_escape_string($new->getApellido())."',
		'".mysql_real_escape_string($new->getEmpresa())."',
		'".mysql_real_escape_string($new->getCargo())."',
		'".mysql_real_escape_string($new->getTelFijo())."',
		'".mysql_real_escape_string($new->getTelCel())."',
		'".mysql_real_escape_string($new->getDireccion())."',
		'".mysql_real_escape_string($new->getCiudadId())."',
		'".mysql_real_escape_string($new->getEmail())."',
		'".mysql_real_escape_string($new->getClave())."',
		'".mysql_real_escape_string($new->getRegistro())."',
		'".mysql_real_escape_string($new->getNewsletter())."',
		'".mysql_real_escape_string($new->getIdioma())."',
		'".mysql_real_escape_string($new->getPais())."');";

			$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
			if(!$result){
				echo 'Ooops (save cliente): '.mysql_error();
				return false;
			}
			return true;
	}

	function getLastId(){
		return mysql_insert_id($this->daoConnection->Conexion_ID);
	}

	function getByClienteId($cliente_id){

		$sql = "SELECT * FROM clientes WHERE cliente_id= '".mysql_real_escape_string($cliente_id)."';";

		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVariosArray();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0) {
			return NULL;
		}

		$i = 0;

			$new = new cliente();

			$new->setId($this->daoConnection->ObjetoConsulta2[$i]['id']);
			$new->setClienteId($this->daoConnection->ObjetoConsulta2[$i]['cliente_id']);
			$new->setTipoid($this->daoConnection->ObjetoConsulta2[$i]['tipoid_cod']);
			$new->setNombre($this->daoConnection->ObjetoConsulta2[$i]['cliente_nombre']);
			$new->setApellido($this->daoConnection->ObjetoConsulta2[$i]['cliente_apellidos']);
			$new->setEmpresa($this->daoConnection->ObjetoConsulta2[$i]['cliente_empresa']);
			$new->setCargo($this->daoConnection->ObjetoConsulta2[$i]['cliente_cargo']);
			$new->setTelFijo($this->daoConnection->ObjetoConsulta2[$i]['cliente_telfijo']);
			$new->setTelCel($this->daoConnection->ObjetoConsulta2[$i]['cliente_telcel']);
			$new->setDireccion($this->daoConnection->ObjetoConsulta2[$i]['cliente_direccion']);
			$new->setCiudadId($this->daoConnection->ObjetoConsulta2[$i]['ciudad_id']);
			$new->setEmail($this->daoConnection->ObjetoConsulta2[$i]['cliente_email']);
			$new->setClave($this->daoConnection->ObjetoConsulta2[$i]['cliente_pass']);
			$new->setRegistro($this->daoConnection->ObjetoConsulta2[$i]['cliente_registro']);
			$new->setNewsletter($this->daoConnection->ObjetoConsulta2[$i]['cliente_newsletter']);
			$new->setIdioma($this->daoConnection->ObjetoConsulta2[$i]['cliente_idioma']);
			$new->setPais($this->daoConnection->ObjetoConsulta2[$i]['pais']);
				$new->setNombre(str_replace('\\', '', $new->getNombre()));
				$new->setApellido(str_replace('\\', '', $new->getApellido()));
				$new->setEmpresa(str_replace('\\', '', $new->getEmpresa()));
				$new->setCargo(str_replace('\\', '', $new->getCargo()));
				$new->setTelFijo(str_replace('\\', '', $new->getTelFijo()));
				$new->setTelCel(str_replace('\\', '', $new->getTelCel()));
				$new->setDireccion(str_replace('\\', '', $new->getDireccion()));
				$new->setEmail(str_replace('\\', '', $new->getEmail()));
				$new->setClave(str_replace('\\', '', $new->getClave()));
				$new->setRegistro(str_replace('\\', '', $new->getRegistro()));
				$new->setNewsletter(str_replace('\\', '', $new->getNewsletter()));
				$new->setIdioma(str_replace('\\', '', $new->getIdioma()));

		return $new;

	}

	function getById($id){

		$sql = "SELECT * FROM clientes WHERE id= '".mysql_real_escape_string($id)."';";

		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0) {
			return NULL;
		}

		$i = 0;

			$new = new cliente();

			$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
			$new->setClienteId($this->daoConnection->ObjetoConsulta2[$i][1]);
			$new->setTipoid($this->daoConnection->ObjetoConsulta2[$i][2]);
			$new->setNombre($this->daoConnection->ObjetoConsulta2[$i][3]);
			$new->setApellido($this->daoConnection->ObjetoConsulta2[$i][4]);
			$new->setEmpresa($this->daoConnection->ObjetoConsulta2[$i][5]);
			$new->setCargo($this->daoConnection->ObjetoConsulta2[$i][6]);
			$new->setTelFijo($this->daoConnection->ObjetoConsulta2[$i][7]);
			$new->setTelCel($this->daoConnection->ObjetoConsulta2[$i][8]);
			$new->setDireccion($this->daoConnection->ObjetoConsulta2[$i][9]);
			$new->setCiudadId($this->daoConnection->ObjetoConsulta2[$i][10]);
			$new->setEmail($this->daoConnection->ObjetoConsulta2[$i][11]);
			$new->setClave($this->daoConnection->ObjetoConsulta2[$i][12]);
			$new->setRegistro($this->daoConnection->ObjetoConsulta2[$i][13]);
			$new->setNewsletter($this->daoConnection->ObjetoConsulta2[$i][14]);
			$new->setIdioma($this->daoConnection->ObjetoConsulta2[$i][15]);
			$new->setPais($this->daoConnection->ObjetoConsulta2[$i][16]);
				$new->setNombre(str_replace('\\', '', $new->getNombre()));
				$new->setApellido(str_replace('\\', '', $new->getApellido()));
				$new->setEmpresa(str_replace('\\', '', $new->getEmpresa()));
				$new->setCargo(str_replace('\\', '', $new->getCargo()));
				$new->setTelFijo(str_replace('\\', '', $new->getTelFijo()));
				$new->setTelCel(str_replace('\\', '', $new->getTelCel()));
				$new->setDireccion(str_replace('\\', '', $new->getDireccion()));
				$new->setEmail(str_replace('\\', '', $new->getEmail()));
				$new->setClave(str_replace('\\', '', $new->getClave()));
				$new->setRegistro(str_replace('\\', '', $new->getRegistro()));
				$new->setNewsletter(str_replace('\\', '', $new->getNewsletter()));
				$new->setIdioma(str_replace('\\', '', $new->getIdioma()));


		return $new;

	}


	function gets(){
		
		$sql="SELECT * FROM clientes ORDER BY cliente_nombre;";

		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();

		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0) {
			return NULL;
		}

		$news = NULL;

		for ($i = 0; $i < $numRegistros; $i++){
			

			$new = new cliente();

			$new->setId($this->daoConnection->ObjetoConsulta2[$i][0]);
			$new->setClienteId($this->daoConnection->ObjetoConsulta2[$i][1]);
			$new->setTipoid($this->daoConnection->ObjetoConsulta2[$i][2]);
			$new->setNombre($this->daoConnection->ObjetoConsulta2[$i][3]);
			$new->setApellido($this->daoConnection->ObjetoConsulta2[$i][4]);
			$new->setEmpresa($this->daoConnection->ObjetoConsulta2[$i][5]);
			$new->setCargo($this->daoConnection->ObjetoConsulta2[$i][6]);
			$new->setTelFijo($this->daoConnection->ObjetoConsulta2[$i][7]);
			$new->setTelCel($this->daoConnection->ObjetoConsulta2[$i][8]);
			$new->setDireccion($this->daoConnection->ObjetoConsulta2[$i][9]);
			$new->setCiudadId($this->daoConnection->ObjetoConsulta2[$i][10]);
			$new->setEmail($this->daoConnection->ObjetoConsulta2[$i][11]);
			$new->setClave($this->daoConnection->ObjetoConsulta2[$i][12]);
			$new->setRegistro($this->daoConnection->ObjetoConsulta2[$i][13]);
			$new->setNewsletter($this->daoConnection->ObjetoConsulta2[$i][14]);
			$new->setIdioma($this->daoConnection->ObjetoConsulta2[$i][15]);
			$new->setPais($this->daoConnection->ObjetoConsulta2[$i][16]);
				$new->setNombre(str_replace('\\', '', $new->getNombre()));
				$new->setApellido(str_replace('\\', '', $new->getApellido()));
				$new->setEmpresa(str_replace('\\', '', $new->getEmpresa()));
				$new->setCargo(str_replace('\\', '', $new->getCargo()));
				$new->setTelFijo(str_replace('\\', '', $new->getTelFijo()));
				$new->setTelCel(str_replace('\\', '', $new->getTelCel()));
				$new->setDireccion(str_replace('\\', '', $new->getDireccion()));
				$new->setEmail(str_replace('\\', '', $new->getEmail()));
				$new->setClave(str_replace('\\', '', $new->getClave()));
				$new->setRegistro(str_replace('\\', '', $new->getRegistro()));
				$new->setNewsletter(str_replace('\\', '', $new->getNewsletter()));
				$new->setIdioma(str_replace('\\', '', $new->getIdioma()));

				$news[$i] = $new;
		
		}

		return $news;

	}

	function update($cliente){
		
		$new = new cliente();
		$new = $cliente;

		$sql="UPDATE clientes SET
			tipoid_cod=
				'".mysql_real_escape_string($new->getTipoid())."',
			cliente_nombre=
				'".mysql_real_escape_string($new->getNombre())."',
			cliente_apellidos=
				'".mysql_real_escape_string($new->getApellido())."',
			cliente_empresa=
				'".mysql_real_escape_string($new->getEmpresa())."',
			cliente_cargo=
				'".mysql_real_escape_string($new->getCargo())."',
			cliente_telfijo=
				'".mysql_real_escape_string($new->getTelFijo())."',
			cliente_telcel=
				'".mysql_real_escape_string($new->getTelCel())."',
			cliente_direccion=
				'".mysql_real_escape_string($new->getDireccion())."',
			ciudad_id=
				'".mysql_real_escape_string($new->getCiudadId())."',
			cliente_email=
				'".mysql_real_escape_string($new->getEmail())."',
			cliente_pass=
				'".mysql_real_escape_string($new->getClave())."',
			cliente_registro=
				'".mysql_real_escape_string($new->getRegistro())."',
			cliente_newsletter=
				'".mysql_real_escape_string($new->getNewsletter())."',
			cliente_idioma=
				'".mysql_real_escape_string($new->getIdioma())."',
			pais=
				'".mysql_real_escape_string($new->getPais())."'

			WHERE cliente_id = '".mysql_real_escape_string($new->getClienteId())."';";

		$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
		if (!$result) {
			echo 'Ooops (update cliente): '.mysql_error();
			return false;
		}
		return true;
	}

	function delete($cliente_id){
		
		$sql = "DELETE FROM clientes WHERE cliente_id = '".mysql_real_escape_string($cliente_id)."';";

		$result = mysql_query($sql, $this->daoConnection->Conexion_ID);
		if (!$result) {
			echo 'Ooops (delete cliente): '.mysql_error();
			return false;
		}
		return true;
	}

	function total(){
		
		$sql = "SELECT COUNT(*) FROM clientes;";

		$this->daoConnection->consulta($sql);
		$this->daoConnection->leerVarios();
	
		$numRegistros = $this->daoConnection->numregistros();

		if ($numRegistros == 0){
			return 0;
		}

		return $this->daoConnection->ObjetoConsulta2[0][0];

	}

}
//Fin de la clase clienteDAO
?>