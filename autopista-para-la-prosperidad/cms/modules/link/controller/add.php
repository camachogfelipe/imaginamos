<?php
include("../../../core/class/db.class.php");
$db = new Database();
$db->connect();

if (($_POST["link"])!=('')){
    $link = $_POST["link"];
}else{
    header('Location: ../view/index.php?erno=3');
	exit;
}

if (($_POST["texto"])!=('')){
    $texto = $_POST["texto"];
}else{
    header('Location: ../view/index.php?erno=3');
	exit;
}
                $query = "INSERT INTO link (
                                                    texto, 
                                                     link
                                                 ) VALUES
                                                 (
                                                    '$texto',                                                    
                                                    '$link'
                                                 )";
		$message = "";
		if ($db->doQuery($query,INSERT_QUERY))
		{
                    header('Location: ../view/index.php?Erno=1');
                    exit;
                }
		else
		{
		    header('Location: ../view/index.php?Erno=2');
                    exit;
                }
		
	
?>