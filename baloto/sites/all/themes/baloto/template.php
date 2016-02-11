<?php
/**
 * Add body classes, css.
 */
function tigo_preprocess_html(&$variables) {
  //  Add conditional stylesheets for IE
  drupal_add_css(path_to_theme() . '/css/ie9.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'IE 9', '!IE' => FALSE), 'preprocess' => FALSE));
  drupal_add_css(path_to_theme() . '/css/ie.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'IE 8', '!IE' => FALSE), 'preprocess' => FALSE));
  drupal_add_css(path_to_theme() . '/css/ie7.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'IE 7', '!IE' => FALSE), 'preprocess' => FALSE));
  drupal_add_js('https://use.typekit.com/ryd0nqx.js', 'external');
}

/**
 * template_preprocess_page().
 */
function tigo_preprocess_page(&$variables) {
  global $user;
  $thema_variable = variable_get('theme_default', FALSE);
  if($thema_variable == 'tigo'){

    if(arg(0) == "user" && $user->uid == 0){
        unset($variables['tabs']['#primary']);
    }
    
  }  
}

/**
 * template_preprocess_node().
 */
function tigo_preprocess_node($vars) {
  // Activar js solo cuando el field_acordeon_informative tenga valores, campo adaptable a cualquier content type
  if (isset ($vars['field_acordeon_informative']) &&  $vars['field_acordeon_informative'] != array()) {
    drupal_add_js(path_to_theme() . '/js/tigo_acordeon.js');
  }
  if ($vars['node']->type == 'device' OR $vars['node']->type == 'plan') {
    drupal_add_library('system', 'ui.tabs');
    drupal_add_js('jQuery(document).ready(function(){
        jQuery("#tabs_device").tabs();
      });',
      array('type' => 'inline', 'scope' => 'footer', 'group' => 'JS_THEME')
    );
  }
}

/**
* hook_preprocess_views_exposed_form()
**/
function tigo_preprocess_views_exposed_form(&$vars) {

  if($vars['form']['field_coverange_city_tid'] && module_exists('alter_cobertura')) {
    $select = drupal_get_form('tigo_form_cobertura');
    $vars['widgets']['filter-field_coverange_city_tid']->widget = theme_select(array('element' =>  $select['field_coverange_city_tid']));;
  }

}

function user_ip() {
  if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
   $ip=$_SERVER['HTTP_CLIENT_IP'];
  } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
   $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
  } else {
   $ip=$_SERVER['REMOTE_ADDR'];
  }
  return( $ip );
}

function tigo_form_alter(&$form, &$form_state, $form_id) {
  switch ($form_id) {
    case 'search_block_form':
    $form['actions']['submit']['#value'] = '';
    $form['search_block_form']['#title'] = t('Search...');
    unset($form['search_block_form']['#title_display']);
    break;
    case 'menu_edit_item':
    case 'menu_overview_form':
    $form['#validate'][] = 'tigo_menu_fush_cache';
    break;
  } 
}

