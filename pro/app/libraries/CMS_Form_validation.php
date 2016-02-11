<?php

class CMS_Form_validation extends CI_Form_validation {

    public function __construct() {
        parent::__construct();
    }

    public function run($module = '', $group = '') {
        (is_object($module)) AND $this->CI = & $module;
        return parent::run($group);
    }

    public function getErrorsArray() {
        return $this->_error_array;
    }

    public function valid_url($url) {
        if (!empty($url)) {
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $regex = "((https?|ftp)\:\/\/)?"; // Scheme
            $regex .= "([a-z0-9+!*(),;?&=\$_.-]+(\:[a-z0-9+!*(),;?&=\$_.-]+)?@)?"; // User and Pass
            $regex .= "([a-z0-9-.]*)\.([a-z]{2,3})"; // Host or IP
            $regex .= "(\:[0-9]{2,5})?"; // Port
            $regex .= "(\/([a-z0-9+\$_-]\.?)+)*\/?"; // Path
            $regex .= "(\?[a-z+&\$_.-][a-z0-9;:@&%=+\/\$_.-]*)?"; // GET Query
            $regex .= "(#[a-z_.-][a-z0-9+\$_.-]*)?"; // Anchor

            if (!preg_match("/^$regex$/", $url)) {
                return FALSE;
            }
        }
        return TRUE;
    }

    public function required_select($val) {
        if (empty($val)) {
            return FALSE;
        }
        return TRUE;
    }

}



