<?php
/*
 * Class Errors is abstract class used for data check related errors
 * Program fills the error, possible to output it at the end of the script
 */
abstract class Errors
{
    public $error = array();

    /*
     * errors are being filled into array
     */
    protected function Fill($e)
    {
        $this->error[$e] = true;
    }
}

?>