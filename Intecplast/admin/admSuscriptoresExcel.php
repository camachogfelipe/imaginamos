<?php 

session_start();

if(!isset($_SESSION['admin']) ){
	header("location: ./index.php");
	exit;
}


require_once '../php/clases.php';

$suscritoDAO = new suscritoDAO(); 
$suscrito = new suscrito(); 
$suscritos = $suscritoDAO->gets(); 
$totalsuscritos = $suscritoDAO->total();

$nombre_columna=array('No', 'Nombres', 'E-mail');  

$return .= "<table border='1' cellpadding='2' cellspacing='0'>";

			$return .= "<tr BGCOLOR='#CCCCCC' class='titulo'>";

			for($i=0;$i<=2;$i++)
			{
			$return .=  "<td>".$nombre_columna[$i]."</td>";

			}  

			$return .= "</tr>";

      if ($totalsuscritos>0) {

          foreach ($suscritos as $suscrito) {
            
            $return .= "<tr>";

                $return .= "<td>".$suscrito->getId()."<br /></td>";
                $return .= "<td>".$suscrito->getNombre()."<br /></td>";
                $return .= "<td>".$suscrito->getEmail()."<br /></td>";

            $return .= "</tr>";

          }
      }

$return .= "</table>";		
header("Content-type: application/vnd-ms-excel; charset=iso-8859-1");
header("Content-Disposition: attachment; filename=Suscriptores.xls");
echo $return;   



?>
