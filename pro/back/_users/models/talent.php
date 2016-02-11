<?php

class Talent extends DataMapper {

    public $model = 'talent';
    public $table = 'talents';
    public $has_one = array(
        'talents_category' => array(
            'auto_populate' => true
        )
    );
    public $has_many = array(
        'user' => array(
            'join_table' => 'users_talents',
            'auto_populate' => true
        )
    );
    public $validation = array();
    private $_default = array(
        'Voz' => array(
            'Voz principal',
            'Coros'
        ),
        'Guitarra' => array(
            'Eléctrica',
            'Acústica'
        ),
        'Bajo' => array(
            'Eléctrico',
            'Acústico'
        ),
        'Percusión' => array(
            'Bateria',
            'Congas',
            'Guacharaca',
            'Timbal',
            'Bongos',
            'Maracas',
            'Triángulo',
            'Caja',
            'Cajón Peruano',
            'Campana',
            'Cencerro'
        )
    );

    // ----------------------------------------------------------------------

    public function __construct($id = NULL) {
        parent::__construct($id);
    }

    // ----------------------------------------------------------------------

    public function post_model_init() {
        $talents_category = new \Talents_category;
        foreach ($this->_default as $talent_catetory => $talents) {
            $talent_category_var = underscore_special($talent_catetory);
            $talents_category->get_by_var($talent_category_var);

            if (!$talents_category->exists()) {
                $talents_category->var = $talent_category_var;
                $talents_category->name = $talent_catetory;
                $talents_category->save();
            }

            foreach ($talents as $talent) {
                $talent_var = underscore_special($talent);

                $this->get_by_var($talent_var);

                if (!$this->exists()) {
                    $this->var = $talent_var;
                    $this->name = $talent;
                    $this->save($talents_category);
                }

                $this->clear();
            }

            $talents_category->clear();
        }
    }

    // ----------------------------------------------------------------------

    public function get_all_from_user($user) {
        $return = array();

        if (empty($user) OR !$user->exists()) {
            return false;
        }

        $this->get_by_related($user);

        if ($this->exists()) {
            foreach ($this as $talent) {
                array_push($return, $talent->id);
            }
        }

        $this->clear();

        return $return;
    }

    // ----------------------------------------------------------------------

    public function get_for_select($text = 'Talento') {
        $return = array(0 => $text);

        $datos = clone $this;

        $datos->order_by_related('talents_category', 'name', 'ASC')->get();

        foreach ($datos->all as $dato) {
            $return[$dato->id] = $dato->talents_category->name.': '.$dato->name;
        }

        return $return;
    }

    // ----------------------------------------------------------------------
}