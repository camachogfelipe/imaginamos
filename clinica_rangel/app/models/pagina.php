<?php

/**
 * @autor Elbert Tous
 * @email elbert.tous@imaginamos.com
 * @company Imaginamos.com | todos los derechos reservados
 */
class pagina extends DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 60.
     */
    public $titulo;
    public $table = 'pagina';
    public $model = 'pagina';
    public $primarykey = 'id';
    public $_fields = array('id', 'titulo');
    public $has_one = array();
    public $has_many = array(
        'analisis_gratuito' => array(
            'class' => 'analisis_gratuito',
            'other_field' => 'pagina',
            'join_other_as' => 'analisis_gratuito',
            'join_self_as' => 'pagina',
            'join_table' => 'cms_analisis_gratuito',
        ),
        'asi_facil' => array(
            'class' => 'asi_facil',
            'other_field' => 'pagina',
            'join_other_as' => 'asi_facil',
            'join_self_as' => 'pagina',
            'join_table' => 'cms_asi_facil',
        ),
        'barner' => array(
            'class' => 'barner',
            'other_field' => 'pagina',
            'join_other_as' => 'barner',
            'join_self_as' => 'pagina',
            'join_table' => 'cms_barner',
        ),
        'beneficio' => array(
            'class' => 'beneficio',
            'other_field' => 'pagina',
            'join_other_as' => 'beneficio',
            'join_self_as' => 'pagina',
            'join_table' => 'cms_beneficio',
        ),
        'contenedor' => array(
            'class' => 'contenedor',
            'other_field' => 'pagina',
            'join_other_as' => 'contenedor',
            'join_self_as' => 'pagina',
            'join_table' => 'cms_contenedor',
        ),
        'contenedor_alimentacion' => array(
            'class' => 'contenedor_alimentacion',
            'other_field' => 'pagina',
            'join_other_as' => 'contenedor_alimentacion',
            'join_self_as' => 'pagina',
            'join_table' => 'cms_contenedor_alimentacion',
        ),
        'contenedor_renacimiento' => array(
            'class' => 'contenedor_renacimiento',
            'other_field' => 'pagina',
            'join_other_as' => 'contenedor_renacimiento',
            'join_self_as' => 'pagina',
            'join_table' => 'cms_contenedor_renacimiento',
        ),
        'contenedor_testimonio' => array(
            'class' => 'contenedor_testimonio',
            'other_field' => 'pagina',
            'join_other_as' => 'contenedor_testimonio',
            'join_self_as' => 'pagina',
            'join_table' => 'cms_contenedor_testimonio',
        ),
        'destacado' => array(
            'class' => 'destacado',
            'other_field' => 'pagina',
            'join_other_as' => 'destacado',
            'join_self_as' => 'pagina',
            'join_table' => 'cms_destacado',
        ),
        'dra_rosalinda' => array(
            'class' => 'dra_rosalinda',
            'other_field' => 'pagina',
            'join_other_as' => 'dra_rosalinda',
            'join_self_as' => 'pagina',
            'join_table' => 'cms_dra_rosalinda',
        ),
        'imagen_beneficio' => array(
            'class' => 'imagen_beneficio',
            'other_field' => 'pagina',
            'join_other_as' => 'imagen_beneficio',
            'join_self_as' => 'pagina',
            'join_table' => 'cms_imagen_beneficio',
        ),
        'receta' => array(
            'class' => 'receta',
            'other_field' => 'pagina',
            'join_other_as' => 'receta',
            'join_self_as' => 'pagina',
            'join_table' => 'cms_receta',
        ),
        'testimonios_fitcamp' => array(
            'class' => 'testimonios_fitcamp',
            'other_field' => 'pagina',
            'join_other_as' => 'testimonios_fitcamp',
            'join_self_as' => 'pagina',
            'join_table' => 'cms_testimonios_fitcamp',
        ),
        'texto_principal' => array(
            'class' => 'texto_principal',
            'other_field' => 'pagina',
            'join_other_as' => 'texto_principal',
            'join_self_as' => 'pagina',
            'join_table' => 'cms_texto_principal',
        ),
        'video' => array(
            'class' => 'video',
            'other_field' => 'pagina',
            'join_other_as' => 'video',
            'join_self_as' => 'pagina',
            'join_table' => 'cms_video',
        )
    );

    public function __construct($id = NULL) {
        parent::__construct($id);
    }

    public $validation = array(
        'id' => array(
            'rules' => array('max_length' => 11),
            'label' => 'ID',
        ),
        'titulo' => array(
            'rules' => array('max_length' => 60, 'required'),
            'label' => 'TITULO',
        )
    );

    function get_data($id = '', $campo = 'name') {
        $obj = new $this->model();
        $arrList = array();
        if (empty($id)) {
            $obj->get_iterated();
            foreach ($obj as $value) {
                $arrList['id'] = $value->id;
                $arrList['name'] = $value->{$campo};
            }
            return $arrList;
        } else {
            return $obj->get_by_id($id);
        }
    }
    
    public function get_rule($campo, $rule){
        if(array_key_exists($rule, $this->validation[$campo]['rules']))
          return $this->validation[$campo]['rules'][$rule];
        else
          return false;  
    }
    
    public function is_rule($campo, $rule){
        if(in_array($rule, $this->validation[$campo]['rules']))
          return true;
        else
          return false;  
    }

}