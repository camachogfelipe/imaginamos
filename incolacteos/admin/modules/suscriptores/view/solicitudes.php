<?php
header('Content-type: application/vnd.ms-excel;charset=utf-8');
header("Content-Disposition: attachment; filename=Formulario solicitudes " . date('Y-m-d') . ".xls");
header("Pragma: no-cache");
header("Expires: 0");
//$host = "localhost";
//$db = "flexon";
//$usuario = "root";
//$password = "";
$host = "localhost";
$db = "usuariooc_terra";
$usuario = "usuariooc";
$password = "12NIwE6YU8V7";
$conexion = new PDO("mysql:host=$host; dbname=$db", $usuario, $password);
if (!is_object($conexion)) {
    trigger_error("Failed to connect to 'database' " . " | Error = $conexion", E_USER_ERROR);
} else {
    $modelos = $_POST["modelos"];
    $marcas = $_POST["marcas"];
    $equipos = $_POST["marcas"];
    $sql = "SELECT * FROM formulario WHERE 1=1";
    
   
    $dbRS = $conexion->query($sql);
    $row = $dbRS->fetchAll();
}
?>
<html>
    <head>
        <title>Formulario <?php echo date("Y-m-d") ?></title>

    </head>
    <body>
        <h1><center>Formulario <?php echo date("Y-m-d")?></center></h1>
        <table>
            <thead>
                <tr>                        
                    <th style="width: 150px"><span>ID</span></th>            
                    <th style="width: 150px"><span>Nombres</span></th>                                   
                    <th style="width: 300px"><span>Empresa</span></th>                                   
                    <th style="width: 150px"><span>Email</span></th>
                    <th style="width: 150px"><span>Telefono</span></th>
                    <th style="width: 150px"><span>Mensaje</span></th>
                    
                </tr>
            </thead>
            <tbody>       
                <?php
                for ($i = 0, $tot = count($row); $i < $tot; $i++) {
                    $data = $row[$i];
                    ?>
                    <tr>
                        <td style="text-align: center;"  width="100px"><?php echo $data["ud"] ?></td>                 
                        <td style="text-align: center;" width="100px"><?php echo  utf8_decode($data["nombre"]) ?></td>                 
                        <td style="text-align: center;"  width="300px"><?php echo utf8_decode($data["empresa"]) ?></td>                            
                        <td style="text-align: center;" width="100px"><?php echo utf8_decode($data["email"]) ?></td>                            
                        <td style="text-align: center;" width="100px"><?php echo utf8_decode($data["telefono"]) ?></td>                            
                        <td style="text-align: center;" width="100px"><?php echo utf8_decode($data["mensaje"]) ?></td>                            
                        

                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>


