<?php

/*
 * By Camilo Cifuentes    (  http://www.ccamilo.com/  )
 */

include_once("php/functions/text2HTML.php");

class sendCMail{
    private $to;
    private $from;
    private $body;
    private $subject;
    private $type;

    function __construct($to, $from, $subject, $body, $type = "multipart/mixed"){
        $this->from = $from;//info@nombredelproyecto.com
        $this->to = $to;
        $this->subject = accents2HTML($subject);
        $this->body = accents2HTML($body);
        $this->type = $type;
    }

    function sendMail(){

        $headers = "From: $this->from";


        $semi_rand = md5( time() );
        $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

        $headers .= "\nMIME-Version: 1.0\n" .
                    "Content-Type: {$this->type};\n" .
                    " boundary=\"{$mime_boundary}\"";

		$message = $this->body;

        if( mail( $this->to, $this->subject, $message, $headers ) ){
            return true;
		}else
            return false;

    }
}

$sendmail->__construct('andres.beethoven@hotmail.com','info@marroquinet.com','prueba','cuerpo');
$sendmail->sendMail();
?>
