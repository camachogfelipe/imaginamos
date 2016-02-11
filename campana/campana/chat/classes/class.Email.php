<?php

class Email {

    public function Subject($s)
    {
        if(empty($s))
        {
            throw new Exception("", 102);
        }
        else {
            $this->subject = $s;
        }
    }
    public function Content($c)
    {
        if(!empty($c))
        {
            $this->content = $c;
            
        } else {
            throw new Exception("", 103);
        }
    }
    public function SetBCC($bcc)
    {
        $bcc = explode($bcc, ",");

        if(!empty($bcc))
        {
            foreach($bcc as $val)
            {
                if(!filter_var($val, FILTER_VALIDATE_EMAIL)) throw new Exception(e104,104);
            }
        }
    }
    public function SendMail()
    {

        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

        $headers .= "From: ".$this->mailfrom. "\r\n";
        if(!empty($bcc))
            $headers .= "Bcc: ".$bcc. "\r\n";

        if(!mail($this->mailto, $this->subject, $this->content, $headers, "-f".$this->mailfrom))
        {
            throw new Exception("", 105);
        }

    }
    public function MailFrom($m)
    {
        if(filter_var($m, FILTER_VALIDATE_EMAIL))
        {
            $this->mailfrom = $m;

        } else {
            throw new Exception("", 100);
        }
    }
    public function MailTo($m)
    {
        if(filter_var($m, FILTER_VALIDATE_EMAIL))
        {
            $this->mailto = $m;

        } else {
            throw new Exception("", 101);
        }
    }
}

?>