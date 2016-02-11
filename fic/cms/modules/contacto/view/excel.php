<?php require_once('../../../../Connections/cnn_fic.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_cnn_fic, $cnn_fic);
$query_excel = "SELECT * FROM t_contacto ORDER BY id_contacto DESC";
$excel = mysql_query($query_excel, $cnn_fic) or die(mysql_error());
$row_excel = mysql_fetch_assoc($excel);
$totalRows_excel = mysql_num_rows($excel);

# enviar a Excel
header("Content-type: application/vnd.ms-excel");
$filename="Base de datos.xls";
header("Content-Disposition:  filename=\"$filename\";"); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<title>Untitled Document</title>
</head>

<body>
<table border="1">
  <tr>
    <th>id contacto</th>
    <th>Nombre</th>
    <th>E-mail</th>
    <th>Asunto</th>
    <th>Mensaje</th>
  </tr>
  <?php do { ?>
    <tr>
      <td><?php echo $row_excel['id_contacto']; ?></td>
      <td><?php echo $row_excel['nombre']; ?></td>
      <td><?php echo $row_excel['email']; ?></td>
      <td><?php echo $row_excel['asunto']; ?></td>
      <td><?php echo $row_excel['mensaje']; ?></td>
    </tr>
    <?php } while ($row_excel = mysql_fetch_assoc($excel)); ?>
</table>
</body>
</html>
<?php
mysql_free_result($excel);
?>
