<?php

/*
 * @file               : DescargarReporte.php
 * @brief              : Clase generacion y descarga de reportes dinamicos
 * @version            : 1.0
 * @ultima_modificacion: 11-jul-2012
 * @author             : Ruben Dario Cifuentes T
 *
 * @class: DescargarReporte
 * @brief: Clase para generacion y descarga de reportes dinamicos
 */

class DescargarReporte {
  
  public $query = NULL;
  public $headers = NULL;
  public $file = NULL;
  public $filePath = NULL;
  
  /*
   * Metodo Publico para Inicializar las variables necesarias de la clase
   * @fn __construct
   * @brief Inicializa variables necesarias de la clase
   */
  public function __construct( $file=NULL, $filePath=NULL ) {
    $this->file = $file;
    $this->filePath = $filePath;
  }
  
  public function setQuery( $data = NULL ) {
    $this->query = $data;
  }
  
  public function setHeaders( $data = NULL ) {
    $this->headers = $data;
  }

  // Funcion para generar y descargar el excel
  public function generate() {
    // Inicializamos la clase
    $cExpXls = new ExpXls( $this->file, NULL, NULL, $this->filePath);
    // Inicializamos las cabeceras
    $cExpXls->setHeaders( $headers );
    $cExpXls->setQuery( $this->query );
    // Generamos el excel
    $cExpXls->generateXls();
    // FOrzamos la descarga
    downloadFile(SITE_ROOT ."/downloads/".$this -> mFilename );
  }

}

?>
