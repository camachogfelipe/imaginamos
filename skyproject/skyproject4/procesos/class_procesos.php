<?php

require_once './core/DbHandler.db.php';
require_once './core/validation.php';
require_once './mailer/Correo.class.php';

class Procesos extends DbHandler {

    public function CambiarClave($id, $passactual, $pass, $newpass) {
        if (empty($passactual) or empty($pass) or empty($newpass)) {
            echo "<script type='text/javascript'>window.location='cambiar_clave.php?seccion=6&m=empty';</script>";
        } else {
            if ($pass != $newpass) {
                header('Location: cambiar_clave.php?seccion=6&m=notequal');
            } else {
                $sql = "SELECT id_Usuario, pass_Usuario FROM usuarios WHERE pass_Usuario = '" . mysql_real_escape_string(md5($passactual)) . "' and  id_Usuario =" . $id;
                $mResoult = DbHandler::GetRow($sql);
                //var_dump($mResoult);
                if ($mResoult == FALSE) {
                    echo "<script type='text/javascript'>window.location='cambiar_clave.php?seccion=6&m=failed';</script>";
                } else {
                    $mSql = "UPDATE usuarios " .
                            "SET pass_Usuario = '" . md5($pass) . "'" .
                            "WHERE id_Usuario = '" . $id . "'";
                    if (DbHandler::Execute($mSql)) {
                        echo "<script type='text/javascript'>window.location='cambiar_clave.php?seccion=6&m=good';</script>";
                    }
                }
            }
        }
    }

    public function GetTiendas() {
        $query = 'SELECT id_Tienda, nombre_Tienda, direccion_Tienda, telefono_Tienda, fecha_Registro FROM tiendas WHERE control = 1 ORDER BY nombre_Tienda';
        $mResoult = DbHandler::GetAll($query);
        return $mResoult;
    }
    public function GetTiendasFechas() {
        $query = 'SELECT  fecha_Registro FROM tiendas WHERE control = 1 GROUP BY SUBSTRING(fecha_Registro,1,LOCATE("-",fecha_Registro)) ';
        $mResoult = DbHandler::GetAll($query);
        return $mResoult;
    }
    
    public function GetTiendasId($id) {
        $query = 'SELECT id_Tienda, nombre_Tienda, direccion_Tienda, telefono_Tienda FROM tiendas WHERE id_Tienda ='.$id;
        $mResoult = DbHandler::GetAll($query);
        return $mResoult;
    }
    public function GetAdmin() {
        $query = 'SELECT id_Usuario, nombre_Usuario, email_Usuario, celular_Usuario, login_Usuario, fecha_Registro FROM usuarios WHERE id_Perfil = 2';
        $mResoult = DbHandler::GetAll($query);
        return $mResoult;
    }
    public function GetVendedor($id) {
        $query = 'SELECT id_Usuario, nombre_Usuario, email_Usuario, celular_Usuario, login_Usuario, id_Tienda, fecha_Registro FROM usuarios WHERE id_Tienda = '.$id.' and id_Perfil = 3 ORDER BY nombre_Usuario';
        $mResoult = DbHandler::GetAll($query); 
        return $mResoult;
    }
    public function GetChangeAdmin($id) {
        $query = 'SELECT id_Usuario, nombre_Usuario, email_Usuario, celular_Usuario, login_Usuario, id_Tienda, fecha_Registro FROM usuarios WHERE id_Tienda = '.$id.' and id_Perfil = 2 ORDER BY nombre_Usuario';
        $mResoult = DbHandler::GetAll($query); 
        return $mResoult;
    }
    public function GetVendedorFechaTienda($id,$fecha) {
        $query = "SELECT * FROM `usuarios` WHERE fecha_Registro like '%".$fecha."%' and id_Tienda = ".$id." ORDER BY fecha_Registro DESC";
        $mResoult = DbHandler::GetAll($query); 
        return $mResoult;
    }
    public function GetVendedorFechaTiendaMes($id,$mes,$año) {
        $query = "SELECT * FROM `usuarios` WHERE fecha_Registro like '%".$año.'-'.$mes."%' and id_Tienda = ".$id." ORDER BY fecha_Registro DESC";
        $mResoult = DbHandler::GetAll($query); 
        return $mResoult;
        //echo $query;
    }
    
    public function GetVendedorId($id) {
        $query = 'SELECT id_Usuario, nombre_Usuario, email_Usuario, celular_Usuario, login_Usuario, id_Tienda FROM usuarios WHERE id_Usuario = '.$id.'  ORDER BY nombre_Usuario';
        $mResoult = DbHandler::GetAll($query); 
        return $mResoult;
    }
    public function GetVendedorVentas($id, $fecha){
        $query =" SELECT * FROM venta, usuarios, tiendas, plan".
                " WHERE venta.id_Usuario = ".$id.
                " AND usuarios.id_Usuario = ".$id.
                " AND usuarios.id_Tienda = tiendas.id_Tienda".
                " AND venta.id_Plan = plan.id_Plan".
                " AND venta.fecha_Venta like '%".$fecha."%'";
                 
        
        $mResoult = DbHandler::GetAll($query);
        return $mResoult;
    }
    
    public function GetVendedorVentasMes($id, $año, $mes){
        $query =" SELECT * FROM venta, usuarios, tiendas, plan".
                " WHERE venta.id_Usuario = ".$id.
                " AND usuarios.id_Usuario = ".$id.
                " AND usuarios.id_Tienda = tiendas.id_Tienda".
                " AND venta.id_Plan = plan.id_Plan".
                " AND venta.fecha_Venta like '%".$año.'-'.$mes."%'";
                 
        
        $mResoult = DbHandler::GetAll($query);
        return $mResoult;
    }
    public function GetAdminId($id) {
        $query = 'SELECT id_Usuario, email_Usuario, celular_Usuario, login_Usuario, nombre_Usuario FROM usuarios WHERE id_Usuario ='.$id;
        $mResoult = DbHandler::GetAll($query);
        return $mResoult;
    }
    
    public function GetVentas($id) {
        $query = 'SELECT * FROM venta, usuarios, tiendas, plan WHERE venta.id_Admin = '.$id.
                ' and usuarios.id_Usuario = venta.id_Usuario'.
                ' and usuarios.id_Tienda = tiendas.id_Tienda'.
                ' and venta.id_Plan = plan.id_Plan ORDER BY id_Venta DESC';
        
        $mResoult = DbHandler::GetAll($query);
        return $mResoult;
    }
    public function GetVentas2($id,$año) {
        $query = 'SELECT * FROM venta, usuarios, tiendas, plan WHERE venta.id_Admin = '.$id.
                ' and venta.fecha_Venta like "%'.$año.'%"'.
                ' and usuarios.id_Usuario = venta.id_Usuario'.
                ' and usuarios.id_Tienda = tiendas.id_Tienda'.
                ' and venta.id_Plan = plan.id_Plan ORDER BY id_Venta DESC';
        
        $mResoult = DbHandler::GetAll($query);
        return $mResoult;
    }
    public function GetVentas3($id,$año,$mes) {
        $query = 'SELECT * FROM venta, usuarios, tiendas, plan WHERE venta.id_Admin = '.$id.
                ' and venta.fecha_Venta like "%'.$año.'-'.$mes.'%"'.
                ' and usuarios.id_Usuario = venta.id_Usuario'.
                ' and usuarios.id_Tienda = tiendas.id_Tienda'.
                ' and venta.id_Plan = plan.id_Plan ORDER BY id_Venta DESC';
        
        $mResoult = DbHandler::GetAll($query);
        return $mResoult;
    }
    public function GetVentas4($id,$tienda,$fecha) {
        $query = 'SELECT * FROM venta, usuarios, tiendas, plan'. 
                 ' WHERE venta.Id_Admin = '.$id.
                 ' AND usuarios.id_Usuario = venta.id_Usuario'.
                 ' AND venta.id_Plan = plan.id_Plan'.
                 ' AND tiendas.id_Tienda ='.$tienda.
                 ' AND venta.fecha_Venta like "%'.$fecha.'%"';
                 
        
        $mResoult = DbHandler::GetAll($query);
        return $mResoult;
    }
    
    public function GetVendedores() {
        $query = 'SELECT usuarios.id_Usuario, usuarios.nombre_Usuario FROM usuarios WHERE id_Perfil = 3 ORDER BY nombre_Usuario ASC';
        
        $mResoult = DbHandler::GetAll($query);
        return $mResoult;
    }
    
    public function GetReporteTienda($año,$idtienda,$idusuario){
        $sql = "SELECT * FROM venta, usuarios, tiendas, plan WHERE
                 usuarios.id_Usuario = venta.id_Usuario
                 and usuarios.id_Tienda = tiendas.id_Tienda
                 and venta.id_Plan = plan.id_Plan 
                 and venta.fecha_venta like '%$año%'
                 and tiendas.id_Tienda like '%$idtienda%'
                 and usuarios.id_Usuario like '%$idusuario%'";
        $mResoult = DbHandler::GetAll($sql);
        
        return $mResoult;
        
    }
    public function GetReporteTiendaMes($año,$mes,$idtienda,$idusuario){
        $sql = "SELECT * FROM venta, usuarios, tiendas, plan WHERE
                 usuarios.id_Usuario = venta.id_Usuario
                 and usuarios.id_Tienda = tiendas.id_Tienda
                 and venta.id_Plan = plan.id_Plan 
                 and venta.fecha_venta like '%".$año.'-'.$mes."%'
                 and tiendas.id_Tienda like '%$idtienda%'
                 and usuarios.id_Usuario like '%$idusuario%'";
        $mResoult = DbHandler::GetAll($sql);
        return $mResoult;
    }
    public function GetReporteTiendadia($fecha,$idtienda,$idusuario){
        $sql = "SELECT * FROM venta, usuarios, tiendas, plan WHERE
                 usuarios.id_Usuario = venta.id_Usuario
                 and usuarios.id_Tienda = tiendas.id_Tienda
                 and venta.id_Plan = plan.id_Plan 
                 and venta.fecha_venta like '%".$fecha."%'
                 and tiendas.id_Tienda like '%$idtienda%'
                 and usuarios.id_Usuario like '%$idusuario%'";
        $mResoult = DbHandler::GetAll($sql);
        return $mResoult;
    }
    
    public function GetCredito($id){
        $sql = " SELECT SUM(cantidad_Creditosc) as TotalComprados,". 
               " SUM(cantidad_CreditosDebitados) as TotalDebitados,".
               "(SUM(cantidad_Creditosc) - SUM(cantidad_CreditosDebitados)) as TotalCredito".
               " FROM creditos WHERE id_Usuario = ".$id;
        $mResoult = DbHandler::GetAll($sql);
        return $mResoult;
    }
    
    public function GetCredito2(){
        $sql = " SELECT * ".
               " FROM creditos, usuarios, tiendas WHERE creditos.id_Usuario = usuarios.id_Usuario ".
               " AND tiendas.id_Tienda = usuarios.id_Tienda".
               " ORDER BY creditos.id_Creditos DESC LIMIT 0,10";
        $mResoult = DbHandler::GetAll($sql);
        return $mResoult;
    }
    
    public function GetReporteVenta($año){
        $sql = " SELECT * FROM clientes, venta, plan WHERE".
                " fecha_Venta like '%".$año."%'".
                " AND venta.id_Plan = plan.id_Plan".
               " AND venta.id_Cliente = clientes.id_Cliente";
        $mResoult = DbHandler::GetAll($sql);
        return $mResoult;
    }
    
    public function Estadoventa($idventa){
        $sql = " SELECT * FROM estadoventa WHERE id_EstadoVenta = ".$idventa;
        $mResoult = DbHandler::GetAll($sql);
        return $mResoult;
    }
    
    public function EstadoventaAdmin(){
        $sql = $sql = " SELECT * FROM clientes, venta, plan ".
               " WHERE venta.id_Plan = plan.id_Plan".
               " AND venta.id_EstadoVenta = 1".
               " AND venta.id_Cliente = clientes.id_Cliente ORDER BY venta.id_Venta DESC";
        $mResoult = DbHandler::GetAll($sql);
        return $mResoult;
    }
    
    public function GetReporteVenta2(){
        $sql = " SELECT * FROM clientes, venta, plan ".
                
                " WHERE venta.id_Plan = plan.id_Plan".
               " AND venta.id_Cliente = clientes.id_Cliente ORDER BY venta.id_Venta DESC";
        $mResoult = DbHandler::GetAll($sql);
        return $mResoult;
    }
    
    public function SetCredito($id, $id2, $creditos){
        if(empty($id) or empty($creditos)){
            echo json_encode(array('respuesta' => "empty"));
        }else{
        $query = " INSERT INTO creditos (id_Creditos, cantidad_Creditosc, cantidad_CreditosDebitados, id_Usuario, id_Admin, fecha_Credito, control)".
                 " VALUES (NULL, ".$creditos.", '', ".$id.", ".$id2.", NOW(), 1)";
        if (DbHandler::Execute($query)) {
                echo json_encode(array('respuesta' => "ok"));
            }else{
                echo json_encode(array('respuesta' => "error"));
            }
        } 
    }
    
    public function SetVentaAdmin($idadmin, $idcliente,$idventa, $celular, $plan, $codigo, $vendedor){
        if(empty($idadmin) or empty($celular) or empty($plan) or empty($codigo) or empty($idcliente) or empty($idventa) or empty($vendedor) ){
            echo '<script>setTimeout(\'alert("El Codigo esta vacio");\',200);</script>';
        }else{
        $query = "UPDATE venta SET ".
                " codigo_Venta = '".$codigo."',".
                " id_Admin = ".$idadmin.",".
                " id_EstadoVenta =  3".
                " WHERE id_Venta = ".$idventa;
        
        if (DbHandler::Execute($query)) {
            
            $sql= "SELECT * from creditos WHERE id_Usuario = $vendedor";
            $credito = DbHandler::GetAll($sql);
            
            $total = $credito[0]['cantidad_CreditosDebitados'] - $plan;
            
            
            
            $query2 = "UPDATE creditos SET ".
                " cantidad_CreditosDebitados = '".$total."'".
                " WHERE id_usuario = ".$vendedor;
                 DbHandler::Execute($query2);
                   /*echo '<script>
                            setTimeout(\'alert("Codigo asignado correctamente");\',200);
                            //window.location.reload();
                            </script>';*/
               
                   
                   
                        
                
            }else{
                echo json_encode(array('respuesta' => "error"));
            }
        } 
    }
    
    public function SetVenta($user,$nombre_cliente,$celular_cliente,$idtienda,$idplan){
        if(empty($user) or empty($nombre_cliente) or empty($celular_cliente) or empty($idtienda) or empty($idplan) or $idplan == 'seleccione'){
            echo json_encode(array('respuesta' => "empty"));
        }else{
        $query = " INSERT INTO clientes (id_Cliente, id_Tienda, nombre_Cliente, celular_Cliente, control)".
                 " VALUES (NULL, ".$idtienda.", '".$nombre_cliente."' , '".$celular_cliente."', 1 )";
                
                DbHandler::Execute($query);
               
                $linked = "SELECT MAX(id_cliente) AS id FROM clientes";
                $deploy = DbHandler::GetRow($linked);
                //var_dump($deploy);
                $query2 = "INSERT INTO venta (id_Venta, codigo_Venta, id_Usuario, id_Admin, id_Cliente, control, id_Plan, id_EstadoVenta, fecha_Venta)".
                          " VALUES (NULL, '', ".$user.", '', '".$deploy['id']." ', '1', '".$idplan."', '1', NOW())";
                if(DbHandler::Execute($query2)){
                    
                echo json_encode(array('respuesta' => "ok"));
                }
            else{
                echo json_encode(array('respuesta' => "error"));
            }
        } 
    }

    public function SetTiendas($tienda, $direccion, $telefono, $estado, $ciudad) {
        if (empty($tienda) or empty($direccion) or empty($telefono) or empty($estado) or empty($ciudad)) {
            echo '<script>setTimeout(\'alert("Los campos estan vacios");\',200);</script>';
        } else {
            $mSql = "INSERT INTO tiendas ( id_Tienda, nombre_Tienda, direccion_Tienda, telefono_Tienda, " .
                    "id_Ciudad, id_Estado, fecha_Registro, " .
                    "control) " .
                    "VALUES ( NULL, " .
                    "'" . $tienda . "', " .
                    "'" . $direccion . "', " .
                    "'" . $telefono . "', " .
                    "'" . $ciudad . "', " .
                    "'" . $estado . "', " .
                    "'" . date("Y-m-d H:i:s") . "', " .
                    "'1')";
            if (DbHandler::Execute($mSql)) {
                echo '<script>setTimeout(\'alert("Tienda registrada correctamente");\',200);</script>';
                //echo $mSql;
            }
        }
    }

    public static function ClaveAleatoria() {
        $cadena = "[^A-Z0-9]";

        $encrypt = substr(preg_replace($cadena, "", (rand())) .
                preg_replace($cadena, "", (rand())) .
                preg_replace($cadena, "", (rand())), 0, 32);

        return $encrypt;
    }

    public function SetAsignar($nombre, $correo, $celular, $login, $Tipoperfil, $tienda) {

        if (empty($nombre) or empty($correo) or Validation::valida_correo($correo) == FALSE or empty($celular) or empty($login) or empty($Tipoperfil) or $Tipoperfil == 'seleccione' or empty($tienda) or $tienda == 'seleccione') {
            echo '<script>setTimeout(\'alert("Los campos estan vacios");\',200);</script>';
        } else {
            $sql = "SELECT login_Usuario , email_Usuario FROM usuarios WHERE login_Usuario = '".$login."' or email_Usuario = '".$correo."'";
            $mResoult = DbHandler::GetRow($sql);
            
            if ($mResoult == FALSE) {
                $deploy = (Procesos::ClaveAleatoria());
                $asig = "INSERT INTO usuarios ( id_Usuario, nombre_Usuario, email_Usuario, celular_Usuario, " .
                        "login_Usuario, pass_Usuario, id_Perfil,id_Tienda, fecha_Registro," .
                        "control) " .
                        "VALUES ( NULL, " .
                        "'" . $nombre . "', " .
                        "'" . $correo . "', " .
                        "'" . $celular . "', " .
                        "'" . $login . "', " .
                        "'" . md5($deploy) . "', " .
                        "'" . $Tipoperfil . "', " .
                        "'" . $tienda . "', " .
                        "'" . date("Y-m-d H:i:s") . "', " .
                        "'1')";
                if (DbHandler::Execute($asig) == TRUE) {

                    $body = '
                    <center>
                    <img src="img/avatar.jpg" width="200"></center>
                    <br><br><br><br>
                    <b>Hi  ' . utf8_decode($nombre) . ' !</b>  <br><br><br>
                    <b>User :</b>  ' . $login . ' <br>
                    <b>Password : </b>: ' . $deploy . ' <br>
                    <b>Fecha de envio :</b> ' . date("Y-m-d H:i:s") . '<br>';
                    $asunto = utf8_decode("Contáctenos");
                    $cCorreo = new Correo();
                    $cCorreo->SendEmail($correo, $asunto, $body);
                    echo '<script>setTimeout(\'alert("Usuario registrado exitosamente");\',200);</script>';
                }
            }else{
                echo '<script>setTimeout(\'alert("El Usuario y/o correo ya se encuentra registrado porfavor utilice otro");\',200);</script>';
            }
        }
    }
    public function SetDeleteTiendas($id) {
       
        if (empty($id)) {
             echo '<script>setTimeout(\'alert("Ingrese algun dato para eliminar");\',200);</script>';
        } else {
            $sql = "DELETE FROM tiendas WHERE id_Tienda =" . $id;
            DbHandler::Execute($sql);
        }
    }
    public function SetDeleteAdmin($id) {
       
        if (empty($id)) {
             echo json_encode(array('respuesta' => "empty"));
        } else {
            $sql = "DELETE FROM usuarios WHERE id_Usuario =" . $id;
            if (DbHandler::Execute($sql)) {
                echo json_encode(array('respuesta' => "ok"));
            } else {
                echo json_encode(array('respuesta' => "error"));
            }
        }
    }
    public function SetEditarTiendas() {
        $tienda_id = $_POST['tienda_id'];
        $tienda_nombre = $_POST['tienda_nombre'];
        $tienda_direccion = $_POST['tienda_direccion'];
        $tienda_telefono = $_POST['tienda_telefono'];
        if (empty($tienda_id) or empty($tienda_nombre) or empty($tienda_direccion) or empty($tienda_telefono)) {
            echo json_encode(array('respuesta' => "empty"));
        } else {
            $sql = "UPDATE tiendas SET nombre_Tienda = '$tienda_nombre', direccion_Tienda = '$tienda_direccion', telefono_Tienda = '$tienda_telefono'   WHERE id_Tienda =" . $tienda_id;
            if (DbHandler::Execute($sql)) {
                echo json_encode(array('respuesta' => "ok"));
            } else {
                echo json_encode(array('respuesta' => "error"));
            }
        }
    }
    public function SetEditarAdmin() {
        $usuario_id = $_POST['usuario_id'];
        $usuario_email = $_POST['usuario_email'];
        $usuario_celular = $_POST['usuario_celular'];
        
        if (empty($usuario_id) or empty($usuario_email) or empty($usuario_celular)) {
            echo json_encode(array('respuesta' => "empty"));
        } else {
            $sql = "UPDATE usuarios SET email_Usuario = '$usuario_email', celular_Usuario = '$usuario_celular'  WHERE id_Usuario =" .$usuario_id;
            if (DbHandler::Execute($sql)) {
                echo json_encode(array('respuesta' => "ok"));
            } else {
                echo json_encode(array('respuesta' => "error"));
            }
        }
    }
}

?>
