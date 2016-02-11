<?php

/**
 * @author rigobcastro
 */
class _Contents extends Back_Controller {

    protected $admin_area = true;

    public function __construct() {
        parent::__construct();
    }

    // ----------------------------------------------------------------------

    public function edit($var = null) {
        $datos = new Content;

        $datos->get_by_var($var);

        if (!$datos->exists()) {
            $datos->var = $var;
            $datos->save();
        }


        return $this->set_datos($datos)->build();
    }

    // ----------------------------------------------------------------------

    public function save($var = null) {

        $datos = new Content;

        $datos->get_by_var($var);

        if (!$datos->exists()) {
            $datos->var = $var;
            $datos->save();
        }

        if($this->_post('content'))
            $datos->where('var', $var)->update('content', $this->_post('content'));

        return redirect('cms/contents/edit/'.$var);
    }

    // ----------------------------------------------------------------------
}