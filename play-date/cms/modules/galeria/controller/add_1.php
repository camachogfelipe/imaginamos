<?php

include("../../../core/class/db.class.php");
include '../define.php';
$db = new Database();
$db->connect();
$id = $_POST['id'];

$imagen = $_POST["IMUFiles"];


//print_r($_POST);



    if (count($imagen) == 0) {
        header('Location: ../view/sub.php?id=' . base64_encode('1') . '&erno=4');
        exit;
    } else {


      
       for($i=0; $i<  count($_POST["IMUFiles"]); $i++){
            $query2="INSERT INTO cms_subcategoria_pics (id_subcategoria_pics, id_subcategoria, image) VALUES ( NULL, $id,'".$_POST["IMUFiles"][$i]."')";
            if($db->doQuery($query2,INSERT_QUERY)){
                $indicador1 = TRUE;
            }else{
                $indicador1 = FALSE;
            }
        }
        
       echo $indicador1;  
       
    
}
?>


