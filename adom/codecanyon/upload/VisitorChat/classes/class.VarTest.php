<?php
/*
 * Class vartest is a static class, wich tests variables for certain things
 *
 */
class VarTest
{
    /*
     * Checks for string length
     * return Master failure exception if the function is used incorrectly
     * or user error if string does not comply with standards
     */
    public static function Length($min, $max, $string, $exception = 0, $ex_code = 0)
    {
        try {

            $min = (int)$min;
            $max = (int)$max;
            if($min == 0 OR $max == 0) throw new Exception(e400, 400);

        } catch(Exception $e)
        {
            Exceptions::PrintOut($e);
        }

        if(strlen($string) >= $min AND strlen($string) <= $max)
        {
            return true;
        } else {
            throw new Exception($exception, $ex_code);
        }
    }

    /*
     * Checks if email is correct
     * returns user error if incorrect
     */
    public static function Email($e, $exception = 0, $ex_code = 0)
    {
        if(!filter_var($e, FILTER_VALIDATE_EMAIL)) throw new Exception($exception, $ex_code);
    }

    /*
     * Checks if the vars are exactly the same
     */
    public static function TheSame($var1, $var2, $exception = 0, $ex_code = 0)
    {
        if($var1 !== $var2) throw new Exception($exception, $ex_code);
    }

    /*
     * check if date is valid
     */
    public static function Date($date, $exception = 0, $ex_code = 0)
    {
        if(!checkdate($date[0], $date[1], $date[2])) throw new Exception($exception, $ex_code);
    }

    /*
     * check if int is in range
     */
    public static function Range($r, $min, $max, $exception = 0, $ex_code = 0)
    {
        $r = (int)$r;

        if($r <= $min AND $r >= $max) throw new Exception($exception, $ex_code);
    }
	/**
	* Check if array has exact range and contents are specific type
	*
	* @return void
	* @author  
	*/
	public static function ArrayRange($array, $range, $exception = 0, $ex_code = 0) {
		
		if(!is_array($array) OR count($array) != $range) throw new Exception($exception, $ex_code);
		
	}
}


?>
