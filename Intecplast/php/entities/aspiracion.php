<?php 

	class aspiracion{
		
		private $aspiracion_id;
		private $aspiracion_valor;

		function __construct(){

			$this->aspiracion_id = NULL;
			$this->aspiracion_valor = NULL;
		
		}

		function getId(){
			return $this->aspiracion_id;
		}

		function getValor(){
			return $this->aspiracion_valor;
		}

		function setId($aspiracion_id){
			$this->aspiracion_id = $aspiracion_id;
		}
		function setValor($aspiracion_valor){
			$this->aspiracion_valor = $aspiracion_valor;
		}





	}


 ?>