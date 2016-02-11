<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of test
 *
 * @author Brayan Acebo
 */
class Test extends MX_Controller {

    public function __construct() {
        
    }

    // ----------------------------------------------------------------------
    public function index() {
        $it = new WebTechnologies(range(1,20));
        
        $iterator = $it->getIterator();
        
        
        $iterator->asort();
        
        print_r($iterator->ksort());
    }

}

class WebTechnologies implements IteratorAggregate {

    private $tech;

    // constructor
    public function __construct() {
        $this->tech = explode(',', 'PHP,HTML,XHTML,CSS,JavaScript,XML,XSLT,ASP,C#,Ruby,Python');
    }

    // return iterator
    public function getIterator() {
        return new ArrayIterator($this->tech);
    }

}
