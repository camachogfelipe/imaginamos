<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class imagen extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 255.
     */
    public $path;

    /**
     * @var varchar Max length is 70.
     */
    public $name;

    public $table = 'imagen';

    public $model = 'imagen';
    public $primarykey = 'id';
    public $_fields = array('id','path','name');

    public $has_one = array();
    public $has_many =  array(
                'acordeon_lugar' => array(
                  'class' => 'acordeon_lugar',
                  'other_field' => 'imagen',
                  'join_other_as' => 'acordeon_lugar',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_acordeon_lugar',
                ),

                'asi_facil' => array(
                  'class' => 'asi_facil',
                  'other_field' => 'imagen',
                  'join_other_as' => 'asi_facil',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_asi_facil',
                ),

                'barner' => array(
                  'class' => 'barner',
                  'other_field' => 'imagen',
                  'join_other_as' => 'barner',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_barner',
                ),
        
                'barner1' => array(
                  'class' => 'barner',
                  'other_field' => 'imagen1',
                  'join_table' => 'cms_barner',
                ),
				
				'barner2' => array(
                  'class' => 'barner',
                  'other_field' => 'imagen2',
                  'join_table' => 'cms_barner',
                ),


                'barner_principal' => array(
                  'class' => 'barner_principal',
                  'other_field' => 'imagen',
                  'join_other_as' => 'barner_principal',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_barner_principal',
                ),
        
                'barner_principal1' => array(
                  'class' => 'barner_principal',
                  'other_field' => 'imagen1',
                  'join_table' => 'cms_barner_principal',
                ),
        
                  'contactenos' => array(
                  'class' => 'contactenos',
                  'other_field' => 'imagen',
                  'join_other_as' => 'contactenos',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_contactenos',
                ),

                'contenedor' => array(
                  'class' => 'contenedor',
                  'other_field' => 'imagen',
                  'join_other_as' => 'contenedor',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_contenedor',
                ),
        
               'testimonios_fitcamp' => array(
                  'class' => 'testimonios_fitcamp',
                  'other_field' => 'imagen',
                  'join_other_as' => 'testimonios_fitcamp',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_testimonios_fitcamp',
                ),

                'contenedor_alimentacion' => array(
                  'class' => 'contenedor_alimentacion',
                  'other_field' => 'imagen',
                  'join_other_as' => 'contenedor_alimentacion',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_contenedor_alimentacion',
                ),

                'contenedor_renacimiento' => array(
                  'class' => 'contenedor_renacimiento',
                  'other_field' => 'imagen',
                  'join_other_as' => 'contenedor_renacimiento',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_contenedor_renacimiento',
                ),

                'contenedor_testimonio' => array(
                  'class' => 'contenedor_testimonio',
                  'other_field' => 'imagen',
                  'join_other_as' => 'contenedor_testimonio',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_contenedor_testimonio',
                ),

                'destacado' => array(
                  'class' => 'destacado',
                  'other_field' => 'imagen',
                  'join_other_as' => 'destacado',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_destacado',
                ),

                'receta' => array(
                  'class' => 'receta',
                  'other_field' => 'imagen',
                  'join_other_as' => 'receta',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_receta',
                ),

                'video' => array(
                  'class' => 'video',
                  'other_field' => 'imagen',
                  'join_other_as' => 'video',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_video',
                ),    
               
                'imagen_beneficio' => array(
                  'class' => 'imagen_beneficio',
                  'other_field' => 'imagen',
                  'join_other_as' => 'imagen_beneficio',
                  'join_self_as' => 'imagen',
                  'join_table' => 'cms_imagen_beneficio',
                )
            );



    public function __construct($id = NULL) {
     parent::__construct($id);
     }



    public $validation =  array(
                'id' => array(
                  'rules' => array( 'max_length' => 11 ),
                  'label' => 'ID',
                ),

                'path' => array(
                  'rules' => array( 'max_length' => 255, 'required' ),
                  'label' => 'PATH',
                ),

                'name' => array(
                  'rules' => array( 'max_length' => 70 ),
                  'label' => 'NAME',
                )
            );
    
    public function get_rule($campo, $rule){
        if(array_key_exists($rule, $this->validation[$campo]['rules']))
          return $this->validation[$campo]['rule'][$rule];
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