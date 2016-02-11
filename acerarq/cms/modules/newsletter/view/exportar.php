<?php
session_start();
ini_set('display_errors','On');

include "../../../security/secure.php";
include "../../../core/class/db.class.php";
include "../../class/plGeneral.fnc.php";
include "../../class/PhpThumbFactory.class.php";
include "../../class/ClassFile.class.php";


//Creamos el nuevo objeto "Database"
$db = new Database();
//Conectamos
$db->connect();

$db->doQuery("SELECT * FROM newsletter ORDER BY idnewsletter ASC", 1);
$fil = $db->rows;

?>
<table>
          <tr>
            <th>Nombres</th>
            <th>Email</th>
          </tr>
        <tbody>
        <?php
                for ($i = 0; $i < $fil; $i++) {
                    $data = $db->results[$i];
                    ?>
          <tr>
            <td valign="top">
                <?php echo $data["nombre"]; ?>
            </td>
            <td valign="top">
                <?php echo $data["email"]; ?>
            </td>
           </tr>
      <?php } ?>
        </tbody>
     </table>

<?php 
header('Content-type: application/vnd.ms-excel');
header("Content-Disposition: attachment; filename=newsletter.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>