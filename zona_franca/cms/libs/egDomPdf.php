<?php 
    //header('Content-Type: text/xml; charset=UTF-8');

    $return .="<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>";
    $return .="<link href='../css/pdf.css' rel='stylesheet' type='text/css' />";


	$return .= "<div id='body'>";

	$return .= "<table>";

		$return .= "<tr>";
			$return .= "<td>Titulo 1</td>";
			$return .= "<td>Titulo 2</td>";
			$return .= "<td>Titulo 3</td>";
			$return .= "<td>Titulo 4</td>";
			$return .= "<td>Titulo 5</td>";     
			$return .= "<td>Titulo 6</td>";
		$return .= "</tr>";

		$return .= "<tr>";
			$return .= "<td>Dato 1</td>";
			$return .= "<td>Dato 2</td>";
			$return .= "<td>Dato 3</td>";
			$return .= "<td>Dato 4</td>";
			$return .= "<td>Dato 5</td>";     
			$return .= "<td>Dato 6</td>";
		$return .= "</tr>";

	$return .= "</table>";

	$return .= "</div>";


	require_once("dompdf/dompdf_config.inc.php");

	$dompdf = new DOMPDF();
	$dompdf->load_html( "<html>
<head>
<style>

</style>
</head>

<body>

Hola 
</body>
</html>" );
	$dompdf->render();
	$dompdf->stream( "miArchivo.pdf" );
 ?>