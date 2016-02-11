<?php

require_once APPPATH . 'third_party/dompdf/dompdf_config.inc.php';

/**
 * PDF
 *
 * Llama a la clase PDF
 * 
 * @author rigobcastro
 */
class PDF {
    public function PDF() {
        return new Dompdf();
    }
    // ----------------------------------------------------------------------
}