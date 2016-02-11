<?php

/**
 * @autor Elbert Tous
 * @email elbert.tous@imaginamos.com
 * @company Imaginamos.com | todos los derechos reservados
 */
class categoria extends DataMapper {

    /**
     * @var int Max length is 11.
     */
    public $id;

    /**
     * @var varchar Max length is 20.
     */
    public $titulo;

    /**
     * @var int Max length is 11.
     */
    public $imagen_id;

    /**
     * @var int Max length is 11.
     */
    public $categoria_id;
    public $table = 'categoria';
    public $model = 'categoria';
    public $primarykey = 'id';
    public $_fields = array('id', 'titulo', 'imagen_id', 'categoria_id');
    public $has_one = array(
        'imagen' => array(
            'class' => 'imagen',
            'other_field' => 'categoria',
            'join_other_as' => 'imagen',
            'join_self_as' => 'categoria',
            'join_table' => 'cms_imagen',
        ),
        'categoria_basic' => array(
            'class' => 'categoria',
            'other_field' => 'categoria_recurrences',
            'join_table' => 'cms_categoria',
            'join_self_as' => 'categoria',
            'join_other_as' => 'categoria',
        )
    );
    public $has_many = array(
        'categoria_recurrences' => array(
            'class' => 'categoria',
            'other_field' => 'categoria_basic',
            'join_table' => 'cms_categoria',
            'join_self_as' => 'categoria',
            'join_other_as' => 'categoria',
        ),
        'producto' => array(
            'class' => 'producto',
            'other_field' => 'categoria',
            'join_other_as' => 'producto',
            'join_self_as' => 'categoria',
            'join_table' => 'cms_producto',
        )
    );

    public function __construct($id = NULL) {
        parent::__construct($id);
    }

    public function get_data($id = '', $campo = 'name') {
        $obj = new $this->model();
        $arrList = array();
        if (empty($id)) {
            $obj->get_iterated();
            foreach ($obj as $value) {
                $arrList [] = array(
                    'id' => $value->id,
                    'name' => $value->{$campo},
                );
            }
            return $arrList;
        } else {
            return $obj->get_by_id($id);
        }
    }

    public function get_categorias_list() {
        $model = clone $this;
        $model->where('categoria_id', NULL)->get();
        $arrList = array();
        foreach ($model as $k) {
            $arrList [] = array(
                'id' => $k->id,
                'name' => $k->titulo,
            );
        }
        return $arrList;
    }

    public function get_subcategorias_list() {
        $model = clone $this;
        $model->where('categoria_id <>', '')->get();
        $arrList = array();
        foreach ($model as $k) {
            $arrList [] = array(
                'id' => $k->id,
                'name' => $k->titulo,
            );
        }
        return $arrList;
    }

    public function get_subcategorias() {
        $model = new $this->model();
        return $model->join_related('imagen')->get_by_categoria_id($this->id);
    }

    public function get_productos() {
        $model = new producto();
        return $model->join_related('imagen')->get_by_categoria_id($this->id);
    }

    public function get_rule($campo, $rule) {
        if (array_key_exists($rule, $this->validation[$campo]['rules']))
            return $this->validation[$campo]['rules'][$rule];
        else
            return false;
    }

    public function is_rule($campo, $rule) {
        if (in_array($rule, $this->validation[$campo]['rules']))
            return true;
        else
            return false;
    }

    public function to_array_first_row() {
        $model = clone $this;
        $model->get_by_id(1);
        $datos = array();
        foreach ($this->fields as $key) {
            if ($key != 'id')
                $datos[$key] = $model->{$key};
        }
        return $datos;
    }

    public $default_order_by = array('id' => 'desc');

    public function post_model_init($from_cache = FALSE) {
        
    }

    public function _encrypt($field) {
        if (!empty($this->{$field})) {
            if (empty($this->salt)) {
                $this->salt = md5(uniqid(rand(), true));
            }
            $this->{$field} = sha1($this->salt . $this->{$field});
        }
    }

    public $validation = array(
        'id' => array(
            'rules' => array('max_length' => 11),
            'label' => 'ID',
        ),
        'titulo' => array(
            'rules' => array('max_length' => 30, 'required'),
            'label' => 'TITULO',
        ),
        'imagen_id' => array(
            'rules' => array('max_length' => 11),
            'label' => 'IMAGEN',
        ),
        'categoria_id' => array(
            'rules' => array('max_length' => 11),
            'label' => 'CATEGORIA',
        )
    );

}
