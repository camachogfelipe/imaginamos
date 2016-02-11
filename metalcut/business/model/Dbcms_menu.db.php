<?php
/*
 * @file               : Dbcms_menu.db.php
 * @brief              : Clase para la interaccion con la tabla cms_menu
 * @version            : 3.3
 * @ultima_modificacion: 2013-07-27
 * @author             : Ruben Dario Cifuentes Torres
 * @generated          : Generador DAO vercion 1.1
 *
 * @class: Dbcms_menu
 * @brief: Clase para la interaccion con la tabla cms_menu
 */
 
class Dbcms_menu extends DbDAO {

  protected $menu_id = NULL;
  protected $menu_title = NULL;
  protected $menu_url = NULL;
  protected $menu_icon = NULL;

  public function setmenu_id($mData = NULL) {
    if ($mData === NULL) { $this->menu_id = NULL; }
    $this->menu_id = StripHtml($mData);
  }

  public function setmenu_title($mData = NULL) {
    if ($mData === NULL) { $this->menu_title = NULL; }
    $this->menu_title = StripHtml($mData);
  }

  public function setmenu_url($mData = NULL) {
    if ($mData === NULL) { $this->menu_url = NULL; }
    $this->menu_url = StripHtml($mData);
  }

  public function setmenu_icon($mData = NULL) {
    if ($mData === NULL) { $this->menu_icon = NULL; }
    $this->menu_icon = StripHtml($mData);
  }

}
?>