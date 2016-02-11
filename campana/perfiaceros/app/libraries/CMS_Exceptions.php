<?php

class CMS_Exceptions extends CI_Exceptions {
    
    public function __construct() {
        parent::__construct();
    }

    // ----------------------------------------------------------------------

    public function show_404(){
        return redirect('home/errors/error_404');
    }
}