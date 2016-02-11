<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require_once APPPATH . 'third_party/dompdf/dompdf_config.inc.php';

if (!function_exists('pdf_create')) {
    
    /**
     * 
     * 
     * @param string $html
     * @param string $filename
     * @param string $tamano
     * @param string $orientacion
     * @param boolean $stream
     */
    function pdf_create($html, $filename = 'album_page', $tamano = 'letter', $orientacion = 'portrait', $stream = true, $filewrite = null) {
        
        if (isset($html)) {
            $html = stripslashes($html);
            
            $dompdf = new DOMPDF();
            $dompdf->load_html($html);
            $dompdf->set_paper($tamano, $orientacion);
            $dompdf->render();
            if ($stream) {
                return $dompdf->stream($filename . ".pdf");
            } else {
                $CI = & get_instance();
                $CI->load->helper('file');
                return write_file($filewrite, $dompdf->output());
            }
        }
    }

}
