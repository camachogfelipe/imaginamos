<?php
	function CheckEmail($email) {  
	    $RegularExpression= '/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/';
	    return preg_match($RegularExpression,$email);
	}
	
	function RedireccionarHeader($url_relativa) {
		header("Location: http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . "/" . $url_relativa); 
		exit;
	}

	function EncodeWeb($string) {
		$data=str_replace("\\","&#92;",htmlspecialchars(nl2br($string),ENT_QUOTES));
		return $data;
	}	
?>