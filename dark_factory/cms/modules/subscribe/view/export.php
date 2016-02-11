<?php
header('Content-type: application/vnd.ms-excel;charset=utf-8');
header("Content-Disposition: attachment; filename=Formulario suscripciones RSS " . date('Y-m-d') . ".xls");
header("Pragma: no-cache");
header("Expires: 0");
//$host = "localhost";
//$db = "flexon";
//$usuario = "root";
//$password = "";
$host = "localhost";
$db = "usuariohf_dark_factory";
$usuario = "usuariohf";
$password = "FRaNJ172ZC9X";
$conexion = new PDO("mysql:host=$host; dbname=$db", $usuario, $password);
if (!is_object($conexion)) {
    trigger_error("Failed to connect to 'database' " . " | Error = $conexion", E_USER_ERROR);
} else {
    $sql = "SELECT * FROM subscribe"; 
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
                    <th style="width: 150px"><span>Nombre</span></th>            
                    <th style="width: 150px"><span>Email</span></th>                                   
                    <th style="width: 300px"><span>Blog</span></th>                                   
                    <th style="width: 150px"><span>Trailers</span></th>
                    <th style="width: 150px"><span>Industry</span></th>
                    
                </tr>
            </thead>
            <tbody>       
                <?php
                for ($i = 0, $tot = count($row); $i < $tot; $i++) {
                    $data = $row[$i];
                    ?>
                        <?php if($data['blog']==1){$data['blog'] = "si";} else {$data['blog']= "no";}
                        if($data['trailers']==1){$data['trailers'] = "si";} else {$data['trailers']= "no";} 
                        if($data['industry']==1){$data['industry'] = "si";} else {$data['industry']= "no";} ?>
                    <tr>
                        <td style="text-align: center;"  width="100px"><?php echo $data["nombre"] ?></td>                 
                        <td style="text-align: center;" width="100px"><?php echo  utf8_decode($data["email"]) ?></td>                 
                        <td style="text-align: center;"  width="300px"><?php echo utf8_decode($data["blog"]) ?></td>                            
                        <td style="text-align: center;" width="100px"><?php echo utf8_decode($data["trailers"]) ?></td>                            
                        <td style="text-align: center;" width="100px"><?php echo utf8_decode($data["industry"]) ?></td>                                                     
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>
