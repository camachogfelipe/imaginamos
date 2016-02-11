<?php

    /**
     * @autor Elbert Tous
     * @email elbert.tous@imaginamos.com
     * @company Imaginamos.com | todos los derechos reservados
     */

                        

class nosotros extends  DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var int Max length is 11.
     */
    public $imagen_id;

    /**
     * @var int Max length is 11.
     */
    public $parrafo_id;

    /**
     * @var int Max length is 11.
     */
    public $parrafo1_id;

    public $table = 'nosotros';

    public $model = 'nosotros';
    public $primarykey = 'id';
    public $fields = array('id','imagen_id','parrafo_id','parrafo1_id');

    public $has_one =  array(
                'imagen' => array(
                  'class' => 'imagen',
                  'other_field' => 'nosotros',
                  'join_other_as' => 'imagen',
                  'join_self_as' => 'nosotros',
                  'join_table' => 'cms_imagen',
                ),

                'parrafo' => array(
                  'class' => 'parrafo',
                  'other_field' => 'nosotros',
                  'join_other_as' => 'parrafo',
                  'join_self_as' => 'nosotros',
                  'join_table' => 'cms_parrafo',
                )

           
            );

    
      function getParafo1(){
		$parrafo = $this->parrafo->where_join_field($this,'parrafo1_id',$this->id)->get();
		if($parrafo->exists()){
			return $parrafo;
		}else{
			return false;
		}
	}
     
       function getParafo(){
		$parrafo = $this->parrafo->where_join_field($this,'parrafo_id',$this->id)->get();
		if($parrafo->exists()){
			return $parrafo;
		}else{
			return false;
		}
       }


    public $has_many = array();



    public function __construct($id = NULL) {
     parent::__construct($id);
     }



    public $validation =  array(
                'id' => array(
                  'rules' => array( 'max_length' => 11 ),
                  'label' => 'ID',
                ),

                'imagen_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'IMAGEN',
                ),

                'parrafo_id' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'PARRAFO',
                ),

                'parrafo_id1' => array(
                  'rules' => array( 'max_length' => 11, 'required' ),
                  'label' => 'PARRAFO1',
                )
            );


}