<?php

defined('BASEPATH') or exit('No direct script access allowed');

$lang['streams:choice_db.name'] = 'Selecciones (Desde base de datos)';
$lang['streams:choice_db.instructions_tablename'] = "Seleccione la tabla de la base de datos para extraer las selecciones. Tenga precaución de elegir una tabla de contenido seguro para mostrar y usar.";
$lang['streams:choice_db.instructions_where_params'] = "Escriba los parámetros para el <em>where</em> de la consulta separados por dos puntos(:). Ej: <pre>name : <em>name_field</em><br>age >= : 20</pre> Recuerde estar seguro de que los campos existan, si no, ocurrirá un error.";
$lang['streams:choice_db.choice_table_name'] = 'Tabla de la base de datos';
$lang['streams:choice_db.field_key'] = 'Campo para la <em>llave principal</em>';
$lang['streams:choice_db.field_value'] = 'Campo para los <em>valores</em>';
$lang['streams:choice_db.choice_where_params'] = '(opcional) Parámetros para <em>where</em>';
$lang['streams:choice_db.choice_type'] = 'Tipo de selección';
$lang['streams:choice_db.dropdown'] = 'Desplegable';
$lang['streams:choice_db.radio_buttons'] = 'Radio';
$lang['streams:choice_db.checkboxes'] = 'Checkbox';
$lang['streams:choice_db.min_choices'] = 'Mínimo de opciones'; #translate
$lang['streams:choice_db.max_choices'] = 'Máximo de opciones'; #translate
$lang['streams:choice_db.checkboxes_only'] = 'Solo para selección tipo <em>checkbox</em>.'; #translate
$lang['streams:choice_db.must_select_num'] = 'You must select {val} items from the %s list.';    #translate
$lang['streams:choice_db.must_at_least'] = 'You must select at least {val} items from the %s list.';  #translate
$lang['streams:choice_db.must_max_num'] = 'You can only select {val} items from the %s list.';   #translate
$lang['streams:choice_db.multiselect'] = 'Multiselección';            #translate