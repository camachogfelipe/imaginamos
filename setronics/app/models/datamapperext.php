<?php

/**
 * DataMapper Ext
 *
 * @package         DataMapper
 * @subpackage      DataMapper Extension
 * @category        DataMapper Extension
 * @author          Rigo B Castro <rigobcastro@gmail.com>
 */
class DataMapperExt extends DataMapper {

    public function __construct($id = NULL) {
        parent::__construct($id);
    }

    // ----------------------------------------------------------------------

    public function get_for_select($key = 'id', $value = 'name', $rows_separator = ' ', $initial_items = null) {
        $data = clone $this;
        $data->select($key);

        if (is_array($value)) {
            $data->select(implode(',', $value));
        } else {
            $data->select($value);
        }

        $data->get();

        $return = array();
        
        if(!empty($initial_items) && is_array($initial_items)){
            $return = $initial_items;
        }

        if ($data->exists()) {
            foreach ($data as $row) {
                $_value = null;
                if (is_array($value)) {
                    $count = 0;
                    foreach ($value as $v) {
                        $count++;
                        $_value .= $row->{$v};
                        if ($count < count($value)) {
                            $_value .= $rows_separator;
                        }
                    }
                } else {
                    $_value = $row->{$value};
                }
                $return[$row->{$key}] = ($_value);
            }
        }

        return $return;
    }

    // ----------------------------------------------------------------------

    public function check_default_data() {
        $m = clone $this;

        foreach ($m->_default as $d) {
            $m->get_by_var($d['var']);
            $m->from_array($d);

            if (!empty($d['relation'])) {
                $relation_model = new $d['relation']['model'];
                $relation_model->where($d['relation']['field'], $d['relation']['value'])->get();

                if ($m->save($relation_model)) {
                    $m->clear();
                }
            } else {
                if ($m->save()) {
                    $m->clear();
                }
            }
        }
    }
    
    // ----------------------------------------------------------------------
    
    /**
     * Obtener todos.
     * 
     * Método estático para obtener todos los datos según 
     * el modelo lanzador.
     * 
     * @return object
     */
    public static function get_all() {
        $class = get_called_class();
        $m = new $class;
        
        return $m->get();
    }

    // ----------------------------------------------------------------------
}