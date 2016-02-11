<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require_once APPPATH . 'third_party/dompdf/dompdf_config.inc.php';

if (!function_exists('pdf_create')) {
    
    /**
     * PDF Create.
     * 
     * @param string $html
     * @param string $filename
     * @param boolean $stream
     */
    function pdf_create($html, $filename, $stream = true) {
        
        if (isset($html)) {
            $html = stripslashes($html);
            
            $dompdf = new DOMPDF();
            $dompdf->load_html($html);
          
            $dompdf->render();
            if ($stream) {
                $dompdf->stream($filename . ".pdf");
            } else {
                return $dompdf->output();
            }
        }
    }

}
