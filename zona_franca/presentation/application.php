<?php
// LIBRERIA DE SMARTY
require_once SMARTY_DIR.'Smarty.class.php';
/* Clase que extiende a smarty y hace la visualizacion */

class Application extends Smarty
{
  // Class constructor
  public function __construct()
  {
    // LLamada a Smarty's constructor
    parent::Smarty();
    // Direccionamiento a directorios
    $this->template_dir = TEMPLATE_DIR;
    $this->compile_dir = COMPILE_DIR;
    $this->config_dir = CONFIG_DIR;
    $this->plugins_dir[0] = SMARTY_DIR.'plugins';
    $this->plugins_dir[1] = PRESENTATION_DIR.'smarty_plugins';
  }
}
?>