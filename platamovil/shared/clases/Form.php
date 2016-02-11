<?php
class Form{
	private $name;
	private $editable;
	private $echo;
	
	public function __construct($name=""){
		$this->name = $name;
		$this->editable = true;
		$this->echo = true;
	}

	/**
	 * Getters & Setters
	 */
	public function getName() {
		return $this->name;
	}
	
	public function setName($name) {
		$this->name = $name;
	}

	public function getEditable() {
		return $this->editable;
	}
	
	public function setEditable($editable) {
		$this->editable = $editable;
	}
	
	public function setEcho($echo) {
		$this->echo = $echo;
	}
	
	public function getEcho() {
		return $this->echo;
	}
	
	/**
	 * Metodos especificos
	 */

	/**
	 * Crea un formulario y retorna su encabezado
	 * @param string $method
	 * @param string $action
	 * @param string $javascript
	 * @param string $enctype
	 * @param string $class
	 */
	public function getHeader($method="post", $action="", $javascript="", $enctype="", $class=""){
		if ( $method===NULL || $method==="" ) { $method = "post"; }
		if ( $enctype!=="" && $enctype!==NULL ){ $enctype = "enctype=\"$enctype\""; }
	
		$cadena = "<form name=\"{$this->name}\" id=\"{$this->name}\" method=\"$method\" action=\"$action\" class=\"$class\" $javascript $enctype>";
		
		if ( $this->echo ) { echo $cadena; } else { return $cadena; }
	}
	
	/**
	 * Retorna el fin del formulario
	 */
	public function getFooter(){
		$cadena = "</form>";
		
		if ( $this->echo ) { echo $cadena; } else { return $cadena; }
	}
	
	/**
	 * Crea una caja de texto
	 * @param string $name
	 * @param string $valor
	 * @param int $maxlength
	 * @param string $autocomplete
	 * @param string $javascript
	 * @param string $style
	 * @param string $clase
	 * @param string $placeholder
	 */
	public function text($name, $valor="", $maxlength=50, $autocomplete="off", $javascript="", $style="", $clase="", $placeholder=""){
		if ( $placeholder != "" ){
			$defecto = " placeholder=\"$placeholder\"";
		}
		$cadena = "<input type=\"text\" name=\"$name\" id=\"$name\" maxlength=\"$maxlength\" value=\"$valor\" autocomplete=\"$autocomplete\" $javascript  class=\"$clase\" style=\"$style\"$defecto";
		if ( !$this->editable )
			$cadena .= " readonly";
		$cadena .= " />";
		
		if ( $this->echo ) { echo $cadena; } else { return $cadena; }
	}
	
	/**
	 * Crea una caja de texto de tipo password
	 * @param string $name
	 * @param string $valor
	 * @param int $maxlength
	 * @param string $autocomplete
	 * @param string $javascript
	 * @param string $clase
	 * @param string $style
	 */
	public function password($name, $valor="", $maxlength=50, $autocomplete="off", $javascript="", $style="", $clase="", $placeholder=""){
		$cadena = "<input type=\"password\" name=\"$name\" id=\"$name\" maxlength=\"$maxlength\" value=\"$valor\" autocomplete=\"$autocomplete\" $javascript  class=\"$clase\" style=\"$style\" placeholder=\"$placeholder\"";
		if ( !$this->editable )
			$cadena .= " readonly";
		$cadena .= " />";
		
		if ( $this->echo ) { echo $cadena; } else { return $cadena; }
	}
	
	/**
	 * Crea una lista desplegable
	 * @param string $name
	 * @param string $listaValor
	 * @param string $valor
	 * @param string $javascript
	 * @param string $clase
	 * @param string $style
	 * @param boolean $multiple
	 */
	public function select($name, $listaValor=array(), $valor="", $javascript="", $style="width: 150px;", $clase="", $multiple=false){
		$cadena = "	<select name=\"$name\" id=\"$name\" $javascript class=\"$clase\" style=\"$style\"";
		if ( !$this->editable )
			$cadena .= " disabled";
		if ( $multiple )
			$cadena .= " multiple=\"multiple\" size=\"10\"";
		
		if ( !$multiple )
			$cadena .= "><option value=\"N\">--Seleccione--</option>";
		else
			$cadena .= ">";
		
		foreach ($listaValor AS $val => $eti){
			$cadena .= "<option value=\"$val\"";
			
			if ( (string)$val === (string)$valor )
				$cadena .= " selected";
			
			$cadena .= ">$eti</option>";
		}
		$cadena .= "</select>";
		
		if ( $this->echo ) { echo $cadena; } else { return $cadena; }
	}
	
	/**
	 * Crea un botón
	 * @param string $name
	 * @param string $valor
	 * @param boolean $submit
	 * @param string $javascript
	 * @param string $clase
	 * @param string $style
	 */
	public function button($name, $valor, $submit=false, $javascript="", $style="", $clase="boton"){
		$cadena = "	<input type=\"";
		
		if ( $submit ){
			$cadena .= "submit";
		}
		else{
			$cadena .= "button";
		}
		
		$cadena .= "\" name=\"$name\" id=\"$name\" value=\"$valor\" $javascript class=\"$clase\" style=\"$style\"";
		if ( !$this->editable )
			$cadena .= " disabled";
		$cadena .= " />";
		
		if ( $this->echo ) { echo $cadena; } else { return $cadena; }
	}

	/**
	 * Crea un campo oculto
	 * @param string $name
	 * @param string $valor
	 */
	public function hidden($name, $valor=""){
		$cadena = "	<input type=\"hidden\" name=\"$name\" id=\"$name\" value=\"$valor\" />";
		
		if ( $this->echo ) { echo $cadena; } else { return $cadena; }
	}

	/**
	 * Crea una etiqueta
	 * @param string $name
	 * @param string $valor
	 * @param string $javascript
	 * @param string $clase
	 * @param string $style
	 */
	public function label($name, $valor, $javascript="", $style="", $clase=""){
		$cadena = "	<label id=\"$name\" $javascript class=\"$clase\" style=\"display: inline; $style\">$valor</label>";
		
		if ( $this->echo ) { echo $cadena; } else { return $cadena; }
	}

	/**
	* Crea una caja de texto
	* @param string $name
	* @param string $valor
	* @param int $maxlength
	* @param int $rows
	* @param int $cols
	* @param string $javascript
	* @param string $clase
	* @param string $style
	*/
	public function textarea($name, $valor="", $maxlength=50, $rows=5, $cols=30, $javascript="", $style="", $clase="", $placeholder=""){
		if ( $maxlength===NULL || $maxlength==="" ) { $maxlength = 50; }
		if ( $rows===NULL || $rows==="" ) { $rows = 5; }
		if ( $cols===NULL || $cols==="" ) { $cols = 30; }
		
		$javascript = $this->textCounter($name, $maxlength, "Solo se permiten $maxlength caracteres", $javascript);
		
		$cadena = "<textarea id=\"$name\" name=\"$name\" maxlength=\"$maxlength\" rows=\"$rows\" cols=\"$cols\" class=\"$clase\" style=\"$style\" placeholder=\"$placeholder\" $javascript ";
		if ( !$this->editable )
			$cadena .= " readonly";
		$cadena .= " >$valor</textarea>";
	
		if ( $this->echo ) { echo $cadena; } else { return $cadena; }
	}
	
	/**
	 * Crea un campo de chequeo
	 * @param string $name
	 * @param string $valor
	 * @param string $valorActual
	 * @param string $javascript
	 * @param string $style
	 * @param string $clase
	 * @param string $label
	 */
	public function checkbox($name, $valor="0", $valorActual="", $javascript="", $style="", $clase="", $label=""){
		if ( $valor===NULL || $valor==="" ) { $valor = 0; }
		
		$cadena = "<label style=\"display: inline;\"><input type=\"checkbox\" name=\"$name\" id=\"$name\" value=\"$valor\" $javascript class=\"$clase\" style=\"$style\"";
		
		if ( (string)$valor === (string)$valorActual )
			$cadena .= " checked";
		if ( !$this->editable )
			$cadena .= " disabled";
		
		$cadena .= " />$label</label>";
		
		if ( $this->echo ) { echo $cadena; } else { return $cadena; }
	}
	
	/**
	 * Retorna el javascript de conteo de caracteres
	 * @param string $name
	 * @param int $maxlimit
	 * @param string $mensaje
	 * @param string $javascript
	 */
	private function textCounter($name, $maxlimit, $mensaje, $javascript=""){
		
		if ( $javascript!==NULL && $javascript!=="" && strlen($javascript)>0 ){
			$posicion = stripos($javascript, "onchange=");
			if ( $posicion !== FALSE ){
				$posIni = stripos($javascript, "\"", $posicion);
				if ( $posIni !== FALSE ){
					$posIni += 1;
					$posFin = stripos($javascript, "\"", $posIni);
					if ( $posFin !== FALSE ){
						$contenidoOnChange = substr($javascript, $posIni, ($posFin-$posIni) );
						if ( $contenidoOnChange[ strlen($contenidoOnChange)-1 ]!==";" && $contenidoOnChange[ strlen($contenidoOnChange)-1 ]!=="}" )
							$contenidoOnChange .= ";";
					}
				}
			}
			
			$posicion = stripos($javascript, "onkeyup=");
			if ( $posicion !== FALSE ){
				$posIni = stripos($javascript, "\"", $posicion);
				if ( $posIni !== FALSE ){
					$posIni += 1;
					$posFin = stripos($javascript, "\"", $posIni);
					if ( $posFin !== FALSE ){
						$contenidoOnKeyUp = substr($javascript, $posIni, ($posFin-$posIni) );
						if ( $contenidoOnKeyUp[ strlen($contenidoOnKeyUp)-1 ]!==";" && $contenidoOnKeyUp[ strlen($contenidoOnKeyUp)-1 ]!=="}" )
							$contenidoOnKeyUp .= ";";
					}
				}
			}
			
			$posicion = stripos($javascript, "onblur=");
			if ( $posicion !== FALSE ){
			$posIni = stripos($javascript, "\"", $posicion);
				if ( $posIni !== FALSE ){
					$posIni += 1;
					$posFin = stripos($javascript, "\"", $posIni);
					if ( $posFin !== FALSE ){
						$contenidoOnBlur = substr($javascript, $posIni, ($posFin-$posIni) );
						if ( $contenidoOnBlur[ strlen($contenidoOnBlur)-1 ]!==";" && $contenidoOnBlur[ strlen($contenidoOnBlur)-1 ]!=="}" )
							$contenidoOnBlur .= ";";
					}
				}
			}
		}
		
		$cadena = "onchange=\"$contenidoOnChange textCounter('$name', $maxlimit, '$mensaje');\" onkeyup=\"$contenidoOnKeyUp textCounter('$name', $maxlimit, '$mensaje');\" onblur=\"$contenidoOnBlur textCounter('$name', $maxlimit, '$mensaje');\"";
		
		return $cadena;
	}
	
	/**
	 * Crea una capa en bloque
	 * @param string $name
	 * @param string $valor
	 * @param string $javascript
	 * @param string $style
	 * @param string $clase
	 * @return string 
	 */
	public function div($name, $valor="", $javascript="", $style="", $clase=""){
		$cadena = "<div id=\"$name\" $javascript class=\"$clase\" style=\"$style\">$valor</div>";
		
		if ( $this->echo ) { echo $cadena; } else { return $cadena; }
	}
	
	/**
	 * Crea una capa en linea
	 * @param string $name
	 * @param string $valor
	 * @param string $javascript
	 * @param string $style
	 * @param string $clase
	 * @return string 
	 */
	public function span($name, $valor="", $javascript="", $style="", $clase=""){
		$cadena = "<span id=\"$name\" $javascript class=\"$clase\" style=\"$style\">$valor</span>";
		
		if ( $this->echo ) { echo $cadena; } else { return $cadena; }
	}
	
	/**
	 * Crea una caja de texto
	 * @param string $name
	 * @param string $valor
	 * @param int $maxlength
	 * @param string $autocomplete
	 * @param string $javascript
	 * @param string $clase
	 * @param string $style
	 */
	public function file($name, $valor="", $javascript="", $style="", $clase=""){
		$cadena = "<input type=\"file\" name=\"$name\" id=\"$name\" value=\"$valor\" $javascript  class=\"$clase\" style=\"$style\"";
		if ( !$this->editable )
			$cadena .= " readonly";
		$cadena .= " />";
		
		if ( $this->echo ) { echo $cadena; } else { return $cadena; }
	}
}

?>