<?php

/**
 * Description of get_file_info
 *
 * @author jfonseca
 */

require_once APPPATH.'third_party/getid3/getid3/getid3.php';

class Get_file_info {
    
    private $getid3;
    
    public function __construct() {
        
    }
    
    public function analize($file){
        $this->getid3 = new getID3;
        $ThisFileInfo = $this->getid3->analyze($file);
        getid3_lib::CopyTagsToComments($ThisFileInfo);
        return $ThisFileInfo;
    }
    
}