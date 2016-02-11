<?php

class Countries_model extends DataMapper {

    public $model = 'country';
    public $table = 'countries';
    public $has_one = array();
    public $has_many = array();
    public $validation = array();
    public $is_owner = false;

    public function __construct($id = NULL) {
        parent::__construct($id);
    }

    // ----------------------------------------------------------------------

    public function get_for_select($text = 'País') {
        $return = array('' => $text);

        $this->get();

        foreach ($this as $dato) {
            $return[$dato->code] = $dato->name;
        }


        return $return;
    }

    // ----------------------------------------------------------------------
}