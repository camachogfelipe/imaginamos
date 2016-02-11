<?php 

	class profesion{
		
		private $profesion_id;
		private $profesion_nombre_e;
		private $profesion_nombre_i;

		function __construct(){

			$this->profesion_id = NULL;
			$this->profesion_nombre_e = NULL;
			$this->profesion_nombre_i = NULL;

		}


		function getId(){
			return $this->profesion_id;
		}
		function getNombre_e(){
			return $this->profesion_nombre_e;
		}
		function getNombre_i(){
			return $this->profesion_nombre_i;
		}


		function setId($profesion_id){
			$this->profesion_id = $profesion_id;
		}

		function setNombre_e($profesion_nombre_e){
			$this->profesion_nombre_e = $profesion_nombre_e;	
		}

		function setNombre_i($profesion_nombre_i){
			$this->profesion_nombre_i = $profesion_nombre_i;
			
		}




	}


 ?>