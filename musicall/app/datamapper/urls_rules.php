<?php

class DMZ_Urls_Rules {
    public function rule_is_facebook_url($object, $field) {
        echo $field;
        exit;
        if (!is_facebook_url($object->{$field})) {
            return 'El campo %s no es una URL válida de Facebook';
        }
        
        return true;
    }

}

/* End of file custom_rules.php */
/* Location: ./application/datamapper/custom_rules.php */