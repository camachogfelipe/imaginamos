<?php require_once('Connections/cnn_fic.php'); ?>
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

$colname_rs_city = "-1";
if (isset($_GET['Country'])) {
  $colname_rs_city = $_GET['Country'];
}
mysql_select_db($database_cnn_fic, $cnn_fic);
$query_rs_city = sprintf("SELECT * FROM t_city WHERE Country = %s ORDER BY Name ASC", GetSQLValueString($colname_rs_city, "text"));
$rs_city = mysql_query($query_rs_city, $cnn_fic) or die(mysql_error());
$row_rs_city = mysql_fetch_assoc($rs_city);
$totalRows_rs_city = mysql_num_rows($rs_city);
 
?>

  <select name="ciudad" class="select">
    <option value="" selected>Seleccionar</option>
    <?php do { ?>
    <option value="<?php echo $row_rs_city['Name']; ?>"><?php echo $row_rs_city['Name']; ?></option>  <?php } while ($row_rs_city = mysql_fetch_assoc($rs_city)); ?>
  </select>

<?php
mysql_free_result($rs_city);
?>
