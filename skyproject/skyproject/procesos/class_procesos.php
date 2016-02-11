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
                $sql = "SELECT id_Usuario, pass_Usuario FROM usuarios WHERE pass_Usuario = '" . md5($passactual) . "' and  id_Usuario =" . $id;
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

    public function Listaplan() {
        $sql = "SELECT * FROM plan ";
        $mResoult = DbHandler::GetAll($sql);
        return $mResoult;
    }

    public function GetTiendas() {
        $query = 'SELECT id_Tienda, nombre_Tienda, direccion_Tienda, telefono_Tienda, fecha_Registro FROM tiendas WHERE control = 1 ORDER BY nombre_Tienda';
        $mResoult = DbHandler::GetAll($query);
        return $mResoult;
    }

    public function GetTienda($email) {
        $query = "SELECT * FROM tiendas, usuarios WHERE tiendas.id_Tienda = usuarios.id_tienda AND usuarios.email_Usuario='" . $email . "'";

        $mResoult = DbHandler::GetAll($query);
        return $mResoult;
    }
    
    public function GetTienda2($nom) {
        $query = "SELECT * FROM tiendas, usuarios WHERE tiendas.id_Tienda = usuarios.id_tienda AND usuarios.id_Usuario='" . $nom . "'";

        $mResoult = DbHandler::GetAll($query);
        return $mResoult;
    }

    public function GetTiendasFechas() {
        $query = 'SELECT  fecha_Registro FROM tiendas WHERE control = 1 GROUP BY SUBSTRING(fecha_Registro,1,LOCATE("-",fecha_Registro)) ';
        $mResoult = DbHandler::GetAll($query);
        return $mResoult;
    }

    public function GetTiendasId($id) {
        $query = 'SELECT id_Tienda, nombre_Tienda, direccion_Tienda, telefono_Tienda FROM tiendas WHERE id_Tienda =' . $id;
        $mResoult = DbHandler::GetAll($query);
        return $mResoult;
    }

    public function GetAdmin() {
        $query = 'SELECT id_Usuario, nombre_Usuario, email_Usuario, celular_Usuario, login_Usuario, fecha_Registro FROM usuarios WHERE id_Perfil = 2';
        $mResoult = DbHandler::GetAll($query);
        return $mResoult;
    }

    public function GetVendedor($id) {
        if ($id != '') {
            if ($id == '*') {
                $query = 'SELECT id_Usuario, nombre_Usuario, email_Usuario, celular_Usuario, login_Usuario, t.id_Tienda, u.fecha_Registro, nombre_Tienda 
                      FROM usuarios as u
                      INNER JOIN tiendas as t on (u.id_Tienda=t.id_Tienda)
                      WHERE id_Perfil = 3 ORDER BY nombre_Usuario';
            } else {
                $query = 'SELECT id_Usuario, nombre_Usuario, email_Usuario, celular_Usuario, login_Usuario, t.id_Tienda, u.fecha_Registro , nombre_Tienda 
                     FROM usuarios as u
                     INNER JOIN tiendas as t on (u.id_Tienda=t.id_Tienda)
                     WHERE u.id_Tienda = ' . $id . ' and id_Perfil = 3 ORDER BY nombre_Usuario';
            }
            //echo $query.'->> ok';
            $mResoult = DbHandler::GetAll($query);
            return $mResoult;
        }
    }

    public function GetChangeAdmin($id) {
        $query = 'SELECT id_Usuario, nombre_Usuario, email_Usuario, celular_Usuario, login_Usuario, id_Tienda, fecha_Registro FROM usuarios WHERE id_Tienda = ' . $id . ' and id_Perfil = 2 ORDER BY nombre_Usuario';
        $mResoult = DbHandler::GetAll($query);
        return $mResoult;
    }

    public function GetVendedorFechaTienda($id, $fecha) {
        $query = "SELECT id_Usuario, nombre_Usuario, email_Usuario, celular_Usuario, login_Usuario, t.id_Tienda, u.fecha_Registro , nombre_Tienda
            FROM
             usuarios as u
            INNER JOIN tiendas as t on (u.id_Tienda=t.id_Tienda)
            WHERE u.fecha_Registro like '%" . $fecha . "%' 
            and u.id_Tienda = " . $id . " and id_Perfil = 3 ORDER BY u.fecha_Registro DESC";
        $mResoult = DbHandler::GetAll($query);
        return $mResoult;
    }

    public function GetVendedorFechaTiendaMes($id, $mes, $año) {
        $query = "SELECT id_Usuario, nombre_Usuario, email_Usuario, celular_Usuario, login_Usuario, t.id_Tienda, u.fecha_Registro , nombre_Tienda
            FROM usuarios as u
            INNER JOIN tiendas as t on (u.id_Tienda=t.id_Tienda)
            WHERE u.fecha_Registro like '%" . $año . '-' . $mes . "%' 
            and u.id_Tienda = " . $id . " ORDER BY u.fecha_Registro DESC";
        //echo $query;
        $mResoult = DbHandler::GetAll($query);
        return $mResoult;
        //echo $query;
    }

    public function GetVendedorId($id) {
        $query = 'SELECT id_Usuario, nombre_Usuario, email_Usuario, celular_Usuario, login_Usuario, id_Tienda FROM usuarios WHERE id_Usuario = ' . $id . '  ORDER BY nombre_Usuario';
        $mResoult = DbHandler::GetAll($query);
        return $mResoult;
    }

    public function GetCredAsigVen1($id, $fecha) {
        
        //solo año y vendedor por recarga
        if (strstr($fecha, '/')) {
            $fec = explode("/", $fecha);
            $anio = $fec[3];
            $mes = $fec[0];
            $dia = $fec[1];
            $fecha = $anio . '-' . $mes . '-' . $dia;
        }
        if ($id == 0) {// All Vendedor
            $query = " SELECT tiendas.id_Tienda, nombre_Tienda, id_Creditos, cantidad_Creditosc, cantidad_CreditosDebitados, fecha_Credito, usuarios.id_Usuario, nombre_Usuario
                        FROM creditos, usuarios, tiendas
                        WHERE creditos.id_Usuario = usuarios.id_Usuario
                        AND tiendas.id_Tienda = usuarios.id_Tienda
                        AND fecha_Credito like '%" . $fecha . "%'";

        } else {
//            
            $query = " SELECT tiendas.id_Tienda, nombre_Tienda, id_Creditos, cantidad_Creditosc, cantidad_CreditosDebitados, fecha_Credito, usuarios.id_Usuario, nombre_Usuario
                        FROM creditos, usuarios, tiendas
                        WHERE creditos.id_Usuario = usuarios.id_Usuario
                        AND tiendas.id_Tienda = usuarios.id_Tienda
                        AND creditos.id_Usuario = " . $id . "
                        and fecha_Credito like '%" . $fecha . "%'";
        }
//        echo $query;
        $mResoult = DbHandler::GetAll($query);
        return $mResoult;
    }
    
    public function GetCredAsigVen2($id, $fecha, $mes) {
        if (strstr($fecha, '/')) {
            $fec = explode("/", $fecha);
            $anio = $fec[3];
            $mes = $fec[0];
            $dia = $fec[1];
            $fecha = $anio . '-' . $mes . '-' . $dia;
        }
        if ($id == 0 and $mes==0) {// All Vendedor
            $query = " SELECT tiendas.id_Tienda, nombre_Tienda, id_Creditos, cantidad_Creditosc, cantidad_CreditosDebitados, fecha_Credito, usuarios.id_Usuario, nombre_Usuario
                        FROM creditos, usuarios, tiendas
                        WHERE creditos.id_Usuario = usuarios.id_Usuario
                        AND tiendas.id_Tienda = usuarios.id_Tienda
                        AND fecha_Credito like '%" . $fecha . "%'";

        } else if($id==0 and $mes!=0){
             $query = " SELECT tiendas.id_Tienda, nombre_Tienda, id_Creditos, cantidad_Creditosc, cantidad_CreditosDebitados, fecha_Credito, usuarios.id_Usuario, nombre_Usuario
                        FROM creditos, usuarios, tiendas
                        WHERE creditos.id_Usuario = usuarios.id_Usuario
                        AND tiendas.id_Tienda = usuarios.id_Tienda
                        AND fecha_Credito like '%" . $fecha . "-".$mes."%'";
            
            }else {
//            
            $query = " SELECT tiendas.id_Tienda, nombre_Tienda, id_Creditos, cantidad_Creditosc, cantidad_CreditosDebitados, fecha_Credito, usuarios.id_Usuario, nombre_Usuario
                        FROM creditos, usuarios, tiendas
                        WHERE creditos.id_Usuario = usuarios.id_Usuario
                        AND tiendas.id_Tienda = usuarios.id_Tienda
                        AND creditos.id_Usuario = " . $id . "
                        AND fecha_Credito like '%" . $fecha . "-".$mes."%'";
        }
        //echo $query;
        $mResoult = DbHandler::GetAll($query);
        return $mResoult;
    }
    
     public function GetCredAsigVen3($id, $fecha) {
        
        //solo año y vendedor por recarga
        if (strstr($fecha, '/')) {
            $fec = explode("/", $fecha);
            $anio = $fec[3];
            $mes = $fec[0];
            $dia = $fec[1];
            $fecha = $anio . '-' . $mes . '-' . $dia;
        }
        if ($id == 0) {// All Vendedor
            $query = " SELECT tiendas.id_Tienda, nombre_Tienda, id_Creditos, cantidad_Creditosc, cantidad_CreditosDebitados, fecha_Credito, usuarios.id_Usuario, nombre_Usuario
                        FROM creditos, usuarios, tiendas
                        WHERE creditos.id_Usuario = usuarios.id_Usuario
                        AND tiendas.id_Tienda = usuarios.id_Tienda
                        AND fecha_Credito like '%" . $fecha . "%'";

        } else {
//            
            $query = " SELECT tiendas.id_Tienda, nombre_Tienda, id_Creditos, cantidad_Creditosc, cantidad_CreditosDebitados, fecha_Credito, usuarios.id_Usuario, nombre_Usuario
                        FROM creditos, usuarios, tiendas
                        WHERE creditos.id_Usuario = usuarios.id_Usuario
                        AND tiendas.id_Tienda = usuarios.id_Tienda
                        AND creditos.id_Usuario = " . $id . "
                        and fecha_Credito like '%" . $fecha . "%'";
        }
//        echo $query;
        $mResoult = DbHandler::GetAll($query);
        return $mResoult;
    }
    
    public function GetVendedorVentas($id, $fecha) {
        if (strstr($fecha, '/')) {
            $fec = explode("/", $fecha);
            $anio = $fec[3];
            $mes = $fec[0];
            $dia = $fec[1];
            $fecha = $anio . '-' . $mes . '-' . $dia;
        }
        if ($id == 0) {// All Vendedor
            $query = " select t.nombre_Tienda, p.nombre_Plan, u.nombre_Usuario, u.celular_Usuario, v.codigo_Venta, v.fecha_Venta
                        from venta as v
                        inner join usuarios as u on (v.id_Usuario=u.id_Usuario)
                        inner join clientes as c on (v.id_Cliente=c.id_cliente)
                        inner join tiendas as t on (c.id_Tienda=t.id_tienda)
                        inner join plan as p on (v.id_Plan=p.id_Plan)
                        where v.fecha_Venta like '%" . $fecha . "%'";
        } else {
//            
            $query = " select t.nombre_Tienda, p.nombre_Plan, u.nombre_Usuario, u.celular_Usuario, v.codigo_Venta, v.fecha_Venta
                        from venta as v
                        inner join usuarios as u on (v.id_Usuario=u.id_Usuario)
                        inner join clientes as c on (v.id_Cliente=c.id_cliente)
                        inner join tiendas as t on (c.id_Tienda=t.id_tienda)
                        inner join plan as p on (v.id_Plan=p.id_Plan)
                        where v.id_Usuario = " . $id . "
                        and v.fecha_Venta like '%" . $fecha . "%'";
        }
//        echo $query;
        $mResoult = DbHandler::GetAll($query);
        return $mResoult;
    }
    public function GetVendedorVentas3($id, $fecha) {
        if (strstr($fecha, '/')) {
            $fec = explode("/", $fecha);
            $anio = $fec[3];
            $mes = $fec[0];
            $dia = $fec[1];
            $fecha = $anio . '-' . $mes . '-' . $dia;
        }
        if ($id == 0) {// All Vendedor
            $query = " select t.nombre_Tienda, p.nombre_Plan, u.nombre_Usuario, u.celular_Usuario, v.codigo_Venta, v.fecha_Venta
                        from venta as v
                        inner join usuarios as u on (v.id_Usuario=u.id_Usuario)
                        inner join clientes as c on (v.id_Cliente=c.id_cliente)
                        inner join tiendas as t on (c.id_Tienda=t.id_tienda)
                        inner join plan as p on (v.id_Plan=p.id_Plan)
                        where v.fecha_Venta like '%" . $fecha . "%'";
        } else {
//            
            $query = " select t.nombre_Tienda, p.nombre_Plan, u.nombre_Usuario, u.celular_Usuario, v.codigo_Venta, v.fecha_Venta
                        from venta as v
                        inner join usuarios as u on (v.id_Usuario=u.id_Usuario)
                        inner join clientes as c on (v.id_Cliente=c.id_cliente)
                        inner join tiendas as t on (c.id_Tienda=t.id_tienda)
                        inner join plan as p on (v.id_Plan=p.id_Plan)
                        where v.id_Usuario = " . $id . "
                        and v.fecha_Venta like '%" . $fecha . "%'";
        }
//        echo $query;
        $mResoult = DbHandler::GetAll($query);
        return $mResoult;
    }

    public function GetVendedorVentasMes($id, $año, $mes) {
        if ($id == 0 and $mes == 0) {//all mes y all vendedor
            $query = " select t.nombre_Tienda, p.nombre_Plan, u.nombre_Usuario, u.celular_Usuario, v.codigo_Venta, v.fecha_Venta
                        from venta as v
                        inner join usuarios as u on (v.id_Usuario=u.id_Usuario)
                        inner join clientes as c on (v.id_Cliente=c.id_cliente)
                        inner join tiendas as t on (c.id_Tienda=t.id_tienda)
                        inner join plan as p on (v.id_Plan=p.id_Plan)
                        where v.fecha_Venta like '%" . $año . "%'";
        } else if ($mes == 0 and $id != 0) { // all mes y dato vendedor
            $query = $query = " select t.nombre_Tienda, p.nombre_Plan, u.nombre_Usuario, u.celular_Usuario, v.codigo_Venta, v.fecha_Venta
                        from venta as v
                        inner join usuarios as u on (v.id_Usuario=u.id_Usuario)
                        inner join clientes as c on (v.id_Cliente=c.id_cliente)
                        inner join tiendas as t on (c.id_Tienda=t.id_tienda)
                        inner join plan as p on (v.id_Plan=p.id_Plan)
                        where v.id_Usuario = " . $id . "
                        and v.fecha_Venta like '%" . $año . "%'";
        } else if ($mes != 0 and $id == 0) { //dato mes y all vendedor
            $query = $query = " select t.nombre_Tienda, p.nombre_Plan, u.nombre_Usuario, u.celular_Usuario, v.codigo_Venta, v.fecha_Venta
                        from venta as v
                        inner join usuarios as u on (v.id_Usuario=u.id_Usuario)
                        inner join clientes as c on (v.id_Cliente=c.id_cliente)
                        inner join tiendas as t on (c.id_Tienda=t.id_tienda)
                        inner join plan as p on (v.id_Plan=p.id_Plan)
                        where v.fecha_Venta like '%" . $mes . "%'";
        } else { //dato mes y dato vendedor
            $query = $query = " select t.nombre_Tienda, p.nombre_Plan, u.nombre_Usuario, u.celular_Usuario, v.codigo_Venta, v.fecha_Venta
                        from venta as v
                        inner join usuarios as u on (v.id_Usuario=u.id_Usuario)
                        inner join clientes as c on (v.id_Cliente=c.id_cliente)
                        inner join tiendas as t on (c.id_Tienda=t.id_tienda)
                        inner join plan as p on (v.id_Plan=p.id_Plan)
                        where v.id_Usuario = " . $id . "
                        and v.fecha_Venta like '%" . $mes . "%'";
        }


        $mResoult = DbHandler::GetAll($query);
        return $mResoult;
    }

    public function GetAdminId($id) {
        $query = 'SELECT id_Usuario, email_Usuario, celular_Usuario, login_Usuario, nombre_Usuario FROM usuarios WHERE id_Usuario =' . $id;
        $mResoult = DbHandler::GetAll($query);
        return $mResoult;
    }

    public function GetVentas($id) {
        $query = 'SELECT * FROM venta, usuarios, tiendas, plan WHERE venta.id_Admin = ' . $id .
                ' and usuarios.id_Usuario = venta.id_Usuario' .
                ' and usuarios.id_Tienda = tiendas.id_Tienda' .
                ' and venta.id_Plan = plan.id_Plan ORDER BY id_Venta DESC';

        $mResoult = DbHandler::GetAll($query);
        return $mResoult;
    }

    public function GetVentas2($id, $año) {
        
         if ($id == 0){// All Administrador
            
            $query = " select t.nombre_Tienda, p.nombre_Plan, u.nombre_Usuario, u.celular_Usuario, v.codigo_Venta, v.fecha_Venta
                        from venta as v
                        inner join usuarios as u on (v.id_Usuario=u.id_Usuario)
                        inner join clientes as c on (v.id_Cliente=c.id_cliente)
                        inner join tiendas as t on (c.id_Tienda=t.id_tienda)
                        inner join plan as p on (v.id_Plan=p.id_Plan)
                        where v.fecha_Venta like '%" . $año . "%'";
        }else {
            
            $query = " select t.nombre_Tienda, p.nombre_Plan, u.nombre_Usuario, u.celular_Usuario, v.codigo_Venta, v.fecha_Venta
                        from venta as v
                        inner join usuarios as u on (v.id_Usuario=u.id_Usuario)
                        inner join clientes as c on (v.id_Cliente=c.id_cliente)
                        inner join tiendas as t on (c.id_Tienda=t.id_tienda)
                        inner join plan as p on (v.id_Plan=p.id_Plan)
                        where v.id_Admin =".$id."
                        and v.fecha_Venta like '%" . $año . "%'";
        }

        $mResoult = DbHandler::GetAll($query);
        return $mResoult;
    }

    public function GetVentas3($id, $año, $mes) {
          if ($id == 0 and $mes == 0) {//all mes y all vendedor
            $query = " select t.nombre_Tienda, p.nombre_Plan, u.nombre_Usuario, u.celular_Usuario, v.codigo_Venta, v.fecha_Venta
                        from venta as v
                        inner join usuarios as u on (v.id_Usuario=u.id_Usuario)
                        inner join clientes as c on (v.id_Cliente=c.id_cliente)
                        inner join tiendas as t on (c.id_Tienda=t.id_tienda)
                        inner join plan as p on (v.id_Plan=p.id_Plan)
                        where v.fecha_Venta like '%" . $año . "%'";
        } else if ($mes == 0 and $id != 0) { // all mes y dato vendedor
            $query = $query = " select t.nombre_Tienda, p.nombre_Plan, u.nombre_Usuario, u.celular_Usuario, v.codigo_Venta, v.fecha_Venta
                        from venta as v
                        inner join usuarios as u on (v.id_Usuario=u.id_Usuario)
                        inner join clientes as c on (v.id_Cliente=c.id_cliente)
                        inner join tiendas as t on (c.id_Tienda=t.id_tienda)
                        inner join plan as p on (v.id_Plan=p.id_Plan)
                        where v.id_Admin = " . $id . "
                        and v.fecha_Venta like '%" . $año . "%'";
        } else if ($mes != 0 and $id == 0) { //dato mes y all vendedor
            $query = $query = " select t.nombre_Tienda, p.nombre_Plan, u.nombre_Usuario, u.celular_Usuario, v.codigo_Venta, v.fecha_Venta
                        from venta as v
                        inner join usuarios as u on (v.id_Usuario=u.id_Usuario)
                        inner join clientes as c on (v.id_Cliente=c.id_cliente)
                        inner join tiendas as t on (c.id_Tienda=t.id_tienda)
                        inner join plan as p on (v.id_Plan=p.id_Plan)
                        where v.fecha_Venta like '%" . $mes . "%'";
        } else { //dato mes y dato vendedor
            $query = $query = " select t.nombre_Tienda, p.nombre_Plan, u.nombre_Usuario, u.celular_Usuario, v.codigo_Venta, v.fecha_Venta
                        from venta as v
                        inner join usuarios as u on (v.id_Usuario=u.id_Usuario)
                        inner join clientes as c on (v.id_Cliente=c.id_cliente)
                        inner join tiendas as t on (c.id_Tienda=t.id_tienda)
                        inner join plan as p on (v.id_Plan=p.id_Plan)
                        where v.id_Admin = " . $id . "
                        and v.fecha_Venta like '%" . $mes . "%'";
        }

        $mResoult = DbHandler::GetAll($query);
        return $mResoult;
    }

    public function GetVentas4($id, $tienda, $fecha) {
        if (strstr($fecha, '/')) {
            $fec = explode("/", $fecha);
            $anio = $fec[3];
            $mes = $fec[0];
            $dia = $fec[1];
            $fecha = $anio . '-' . $mes . '-' . $dia;
        }
        if ($tienda == 0) {// All Tienda y All Vendedor
            $query = " select t.nombre_Tienda, p.nombre_Plan, u.nombre_Usuario, u.celular_Usuario, v.codigo_Venta, v.fecha_Venta
                        from venta as v
                        inner join usuarios as u on (v.id_Usuario=u.id_Usuario)
                        inner join clientes as c on (v.id_Cliente=c.id_cliente)
                        inner join tiendas as t on (c.id_Tienda=t.id_tienda)
                        inner join plan as p on (v.id_Plan=p.id_Plan)
                        where v.fecha_Venta like '%" . $fecha . "%'";
        } else {
//            
            $query = " select t.nombre_Tienda, p.nombre_Plan, u.nombre_Usuario, u.celular_Usuario, v.codigo_Venta, v.fecha_Venta
                        from venta as v
                        inner join usuarios as u on (v.id_Usuario=u.id_Usuario)
                        inner join clientes as c on (v.id_Cliente=c.id_cliente)
                        inner join tiendas as t on (c.id_Tienda=t.id_tienda)
                        inner join plan as p on (v.id_Plan=p.id_Plan)
                        where v.id_Admin = " . $id . "
                        and t.id_Tienda = ".$tienda."
                        and v.fecha_Venta like '%" . $fecha . "%'";
        }



        $mResoult = DbHandler::GetAll($query);
        return $mResoult;
    }

    public function GetVendedores() {
        $query = 'SELECT usuarios.id_Usuario, usuarios.nombre_Usuario FROM usuarios WHERE id_Perfil = 3 ORDER BY nombre_Usuario ASC';

        $mResoult = DbHandler::GetAll($query);
        return $mResoult;
    }

    public function GetReporteTienda($año, $idtienda, $idusuario) {


        if ($idtienda == 0 and $idusuario == 0) {// All Tienda y All Vendedor
            $sql = " select t.nombre_Tienda, p.nombre_Plan, u.nombre_Usuario, u.celular_Usuario, v.codigo_Venta, v.fecha_Venta
                        from venta as v
                        inner join usuarios as u on (v.id_Usuario=u.id_Usuario)
                        inner join clientes as c on (v.id_Cliente=c.id_cliente)
                        inner join tiendas as t on (c.id_Tienda=t.id_tienda)
                        inner join plan as p on (v.id_Plan=p.id_Plan)
                        where v.fecha_Venta like '%" . $año . "%'";
        } else if ($idtienda == 0 and $idusuario != 0) {// All Tienda 
            $sql = " select t.nombre_Tienda, p.nombre_Plan, u.nombre_Usuario, u.celular_Usuario, v.codigo_Venta, v.fecha_Venta
                        from venta as v
                        inner join usuarios as u on (v.id_Usuario=u.id_Usuario)
                        inner join clientes as c on (v.id_Cliente=c.id_cliente)
                        inner join tiendas as t on (c.id_Tienda=t.id_tienda)
                        inner join plan as p on (v.id_Plan=p.id_Plan)
                        where v.id_Usuario = " . $idusuario . "
                        and v.fecha_Venta like '%" . $año . "%'";
        } else if ($idtienda != 0 and $idusuario == 0) {// All Vendedor
            $sql = " select t.nombre_Tienda, p.nombre_Plan, u.nombre_Usuario, u.celular_Usuario, v.codigo_Venta, v.fecha_Venta
                        from venta as v
                        inner join usuarios as u on (v.id_Usuario=u.id_Usuario)
                        inner join clientes as c on (v.id_Cliente=c.id_cliente)
                        inner join tiendas as t on (c.id_Tienda=t.id_tienda)
                        inner join plan as p on (v.id_Plan=p.id_Plan)
                        where v.fecha_Venta like '%" . $año . "%'";
        }

        $mResoult = DbHandler::GetAll($sql);

        return $mResoult;
    }

    public function GetReporteTiendaMes($año, $mes, $idtienda, $idusuario) {

        if ($mes == 0 and $idtienda == 0) {// All Mes,All Tienda y All Vendedor
            $sql = " select t.nombre_Tienda, p.nombre_Plan, u.nombre_Usuario, u.celular_Usuario, v.codigo_Venta, v.fecha_Venta
                        from venta as v
                        inner join usuarios as u on (v.id_Usuario=u.id_Usuario)
                        inner join clientes as c on (v.id_Cliente=c.id_cliente)
                        inner join tiendas as t on (c.id_Tienda=t.id_tienda)
                        inner join plan as p on (v.id_Plan=p.id_Plan)
                        where v.fecha_Venta like '%" . $año . "%'";
        } else if ($mes != 0 and $idtienda == 0) {// All Mes ,All Tienda 
            $sql = " select t.nombre_Tienda, p.nombre_Plan, u.nombre_Usuario, u.celular_Usuario, v.codigo_Venta, v.fecha_Venta
                        from venta as v
                        inner join usuarios as u on (v.id_Usuario=u.id_Usuario)
                        inner join clientes as c on (v.id_Cliente=c.id_cliente)
                        inner join tiendas as t on (c.id_Tienda=t.id_tienda)
                        inner join plan as p on (v.id_Plan=p.id_Plan)
                        where v.fecha_Venta like '%" . $año . '-' . $mes . "%'";
        } else if ($mes == 0 and $idtienda != 0) {// All Mes
            $sql = " select t.nombre_Tienda, p.nombre_Plan, u.nombre_Usuario, u.celular_Usuario, v.codigo_Venta, v.fecha_Venta
                        from venta as v
                        inner join usuarios as u on (v.id_Usuario=u.id_Usuario)
                        inner join clientes as c on (v.id_Cliente=c.id_cliente)
                        inner join tiendas as t on (c.id_Tienda=t.id_tienda)
                        inner join plan as p on (v.id_Plan=p.id_Plan)
                        where v.id_Usuario = " . $idusuario . " 
                        and v.fecha_Venta like '%" . $año . "%'";
        }else {
            
            $sql = " select t.nombre_Tienda, p.nombre_Plan, u.nombre_Usuario, u.celular_Usuario, v.codigo_Venta, v.fecha_Venta
                        from venta as v
                        inner join usuarios as u on (v.id_Usuario=u.id_Usuario)
                        inner join clientes as c on (v.id_Cliente=c.id_cliente)
                        inner join tiendas as t on (c.id_Tienda=t.id_tienda)
                        inner join plan as p on (v.id_Plan=p.id_Plan)
                        where v.id_Usuario = ".$idusuario." 
                        and v.fecha_Venta like '%".$año.'-'.$mes."%'";
            
        }
        
        

        $mResoult = DbHandler::GetAll($sql);
        return $mResoult;
    }

    public function GetReporteTiendadia($fecha, $idtienda, $idusuario) {
         if (strstr($fecha, '/')) {
            $fec = explode("/", $fecha);
            $anio = $fec[3];
            $mes = $fec[0];
            $dia = $fec[1];
            $fecha = $anio . '-' . $mes . '-' . $dia;
        }
        if ($idtienda == 0) {// All Tienda y All Vendedor
            $sql = " select t.nombre_Tienda, p.nombre_Plan, u.nombre_Usuario, u.celular_Usuario, v.codigo_Venta, v.fecha_Venta
                        from venta as v
                        inner join usuarios as u on (v.id_Usuario=u.id_Usuario)
                        inner join clientes as c on (v.id_Cliente=c.id_cliente)
                        inner join tiendas as t on (c.id_Tienda=t.id_tienda)
                        inner join plan as p on (v.id_Plan=p.id_Plan)
                        where v.fecha_Venta like '%" . $fecha . "%'";
        } else {
//            
            $sql = " select t.nombre_Tienda, p.nombre_Plan, u.nombre_Usuario, u.celular_Usuario, v.codigo_Venta, v.fecha_Venta
                        from venta as v
                        inner join usuarios as u on (v.id_Usuario=u.id_Usuario)
                        inner join clientes as c on (v.id_Cliente=c.id_cliente)
                        inner join tiendas as t on (c.id_Tienda=t.id_tienda)
                        inner join plan as p on (v.id_Plan=p.id_Plan)
                        where v.id_Usuario = " . $idusuario . "
                        and t.id_Tienda = ".$idtienda."
                        and v.fecha_Venta like '%" . $fecha . "%'";
        }
        
        //echo $sql;
        $mResoult = DbHandler::GetAll($sql);
        return $mResoult;
    }

    public function GetVentaCred($id){
        $sql="SELECT SUM( nombre_Plan ) as tot
            FROM `venta` AS v
            INNER JOIN plan AS p ON ( v.id_Plan = p.id_Plan )
            WHERE `id_Usuario` = '".$id."' ";
         $mResoult = DbHandler::GetAll($sql);
        return $mResoult;
    }
    public function GetCredito($id) {
        $sql = " SELECT SUM(cantidad_Creditosc) as TotalComprados,
                 SUM(cantidad_CreditosDebitados) as TotalDebitados,
                (SUM(cantidad_Creditosc) - SUM(cantidad_CreditosDebitados)) as TotalCredito
                 FROM creditos WHERE id_Usuario = " . $id;
        $mResoult = DbHandler::GetAll($sql);
        return $mResoult;
    }

    public function GetCredito2() {
        $sql = " SELECT * " .
                " FROM creditos, usuarios, tiendas WHERE creditos.id_Usuario = usuarios.id_Usuario " .
                " AND tiendas.id_Tienda = usuarios.id_Tienda" .
                " ORDER BY creditos.id_Creditos DESC LIMIT 0,10";
        $mResoult = DbHandler::GetAll($sql);
        return $mResoult;
    }

    public function GetReporteVenta($año) {
        if (strstr($año, '/')) {
            $fec = explode("/", $año);
            $anio = $fec[3];
            $mes = $fec[0];
            $dia = $fec[1];
            $fec_a = $anio . '-' . $mes . '-' . $dia;
        } else {
            $fec_a = $año;
        }
        $sql = " SELECT * FROM clientes, venta, plan WHERE" .
                " fecha_Venta like '%" . $fec_a . "%'" .
                " AND venta.id_Plan = plan.id_Plan" .
                " AND venta.id_Cliente = clientes.id_Cliente";
        //echo $sql;

        $mResoult = DbHandler::GetAll($sql);
        return $mResoult;
    }

    public function Estadoventa($idventa) {
        $sql = " SELECT * FROM estadoventa WHERE id_EstadoVenta = " . $idventa;
        $mResoult = DbHandler::GetAll($sql);
        return $mResoult;
    }

     public function UserAdmin($iduser) {
        $sql = " SELECT * FROM usuarios WHERE id_Usuario = " . $iduser;
        $mResoult = DbHandler::GetAll($sql);
        return $mResoult;
    }
    
    public function EstadoventaAdmin() {
       $sql = " SELECT * 
            FROM clientes, venta, plan, usuarios, tiendas, estadoventa
            WHERE venta.id_Plan = plan.id_Plan
            AND venta.id_EstadoVenta
            IN ( 1, 2 ) 
            AND estadoventa.id_EstadoVenta = venta.id_EstadoVenta
            AND venta.id_Cliente = clientes.id_Cliente
            AND venta.id_Usuario = usuarios.id_Usuario
            AND tiendas.id_Tienda = usuarios.id_Tienda
            ORDER BY venta.id_Venta DESC ";
       //echo $sql;
       $mResoult = DbHandler::GetAll($sql);
        return $mResoult;
    }
    
    public function EstadoventaProceso() {
       $sql = "  SELECT * 
            FROM clientes, venta, plan, usuarios, tiendas, estadoventa
            WHERE venta.id_Plan = plan.id_Plan
            AND venta.id_EstadoVenta
            IN ( 1, 2 ) 
            AND estadoventa.id_EstadoVenta = venta.id_EstadoVenta
            AND venta.id_Cliente = clientes.id_Cliente
            AND venta.id_Usuario = usuarios.id_Usuario
            AND tiendas.id_Tienda = usuarios.id_Tienda
            ORDER BY venta.id_Venta DESC ";
       //echo $sql;
       $mResoult = DbHandler::GetAll($sql);
        return $mResoult;
    }
    
    public function EstadoventaAdmin2($idventa) {
        $sql = $sql = " SELECT * FROM clientes, venta, plan, usuarios, tiendas 
                 WHERE venta.id_Plan = plan.id_Plan
                 AND venta.id_EstadoVenta in (1,2)
                 AND venta.id_Cliente = clientes.id_Cliente 
                 AND venta.id_Usuario = usuarios.id_Usuario 
                 AND tiendas.id_Tienda = usuarios.id_Tienda 
                 AND venta.id_Venta='".$idventa."'
                 ORDER BY venta.id_Venta DESC";
        $mResoult = DbHandler::GetAll($sql);
        return $mResoult;
    }

    public function GetReporteVenta2() {
        $id_user=$_SESSION["session_user"];
       // echo 'user-->'.$id_user;
        $sql = " SELECT * FROM clientes, venta, plan, usuarios, tiendas 
                WHERE venta.id_Plan = plan.id_Plan
                 AND venta.id_Cliente = clientes.id_Cliente AND usuarios.id_Usuario = venta.id_Usuario 
                  AND tiendas.id_Tienda = usuarios.id_Tienda 
                  and venta.id_Usuario='".$id_user."'
                  ORDER BY venta.id_Venta DESC";
        //echo $sql;
        $mResoult = DbHandler::GetAll($sql);
        return $mResoult;
    }

    public function GetReporteVentaT() {
        $id_user=$_SESSION["session_user"];
       // echo 'user-->'.$id_user;
        $sql = " SELECT * FROM clientes, venta, plan, usuarios, tiendas 
                WHERE venta.id_Plan = plan.id_Plan
                 AND venta.id_Cliente = clientes.id_Cliente AND usuarios.id_Usuario = venta.id_Usuario 
                  AND tiendas.id_Tienda = usuarios.id_Tienda 
                  ORDER BY venta.id_Venta DESC";
        //echo $sql;
        $mResoult = DbHandler::GetAll($sql);
        return $mResoult;
    }
    
    public function GetEstados() {
        $sql = "SELECT id_Estado, nombre_Estado FROM estado";
        $mResoult = DbHandler::GetAll($sql);
        return $mResoult;
    }

    public function GetCiudad($id) {
        $sql = "SELECT id_Ciudad, nombre_Ciudad, id_Estado FROM ciudad WHERE id_Estado =" . $id;
        $mResoult = DbHandler::GetAll($sql);
        return $mResoult;
    }

    public function SetCredito($id, $id2, $creditos) {
        if (empty($id) or empty($creditos)) {
            echo json_encode(array('respuesta' => "empty"));
        } else {
            $query = " INSERT INTO creditos (id_Creditos, cantidad_Creditosc, cantidad_CreditosDebitados, id_Usuario, id_Admin, fecha_Credito, control)" .
                    " VALUES (NULL, " . $creditos . ", '', " . $id . ", " . $id2 . ", NOW(), 1)";
            if (DbHandler::Execute($query)) {
                echo json_encode(array('respuesta' => "ok"));
            } else {
                echo json_encode(array('respuesta' => "error"));
            }
        }
    }
	
	public function SetControlSol($val) {
        if (empty($val)) {
            echo json_encode(array('respuesta' => "empty"));
        } else {
            $query = "UPDATE control_sol SET valor = '" .$val. "' WHERE id = 1";
            if (DbHandler::Execute($query)) {
                //echo json_encode(array('respuesta' => "ok"));
            } else {
                //echo json_encode(array('respuesta' => "error"));
            }
        }
    }
	
	 public function Verifica() {
        $sql = "SELECT count( * ) AS tot FROM venta WHERE id_EstadoVenta =1";
        $resultado = DbHandler::GetAll($sql);
        
		$valorAn = $resultado[0]['tot'];
		//$valorAc = $resultado[0]['valor'];
		
		$res = 0;
		if($valorAn >0){ 
		
				$res = 1;
		
				/*$query = "UPDATE control_sol SET valor2 = '" .$valorAc. "' WHERE id = 1";
				if (DbHandler::Execute($query)) {
					//echo json_encode(array('respuesta' => "ok"));
				} else {
					//echo json_encode(array('respuesta' => "error"));
				}*/
		
		}
		//echo $valorAn.'-->'."que-->".$query;
		return $res;
    }

    public function SetEstado($idventa) {
            $query = "UPDATE venta SET " .
                    " id_EstadoVenta =  2" .
                    " WHERE id_Venta = " . $idventa;

            if (DbHandler::Execute($query)) {
                 ?>
                 <script>
                     //alert("Esta venta ingresa al estado en proceso")
                  </script>
               <?php
            }
    }
    
    
    public function SetVentaAdmin($idadmin, $idcliente, $idventa, $celular, $plan, $codigo, $vendedor) {
       // if (empty($idadmin) or empty($celular) or empty($plan) or empty($codigo) or empty($idcliente) or empty($idventa) or empty($vendedor)) {
          // echo '<script>setTimeout(\'alert("El Codigo esta vacio");\',200);</script>';
        //} else {
            $query = "UPDATE venta SET " .
                    " codigo_Venta = '" . $codigo . "'," .
                    " id_Admin = " . $idadmin . "," .
                    " id_EstadoVenta = 3" .
                    " WHERE id_Venta = " . $idventa;

            if (DbHandler::Execute($query)) {

                $sql = "SELECT * from creditos WHERE id_Usuario = $vendedor";
                $credito = DbHandler::GetAll($sql);

                $total = $credito[0]['cantidad_CreditosDebitados'] - $plan;

                $query2 = "UPDATE creditos SET " .
                        " cantidad_CreditosDebitados = '" . $total . "'" .
                        " WHERE id_usuario = " . $vendedor;
                DbHandler::Execute($query2);
                ?>
                 <script>
                     alert("Codigo asignado correctamente")
                     setTimeout ("r()", 1000);
                     function r() { location.href="solicitudes.php?seccion=7" } 
                     
                    // setTimeout(alert("Codigo asignado correctamente"),200);
                     //window.location.href("solicitudes.php?seccion=7");
                  </script>
               <?php
                 //                  setTimeout(\'alert("Codigo asignado correctamente");\',200);
            } else {
                echo json_encode(array('respuesta' => "error"));
            }
        //}
    }

    public function SetVenta($user, $nombre_cliente, $celular_cliente, $idtienda, $idplan) {
        if (empty($user) or empty($nombre_cliente) or empty($celular_cliente) or empty($idtienda) or empty($idplan) or $idplan == 'seleccione') {
            echo json_encode(array('respuesta' => "empty"));
        } else {
            $query = " INSERT INTO clientes (id_Cliente, id_Tienda, nombre_Cliente, celular_Cliente, control)" .
                    " VALUES (NULL, " . $idtienda . ", '" . $nombre_cliente . "' , '" . $celular_cliente . "', 1 )";

            DbHandler::Execute($query);

            $linked = "SELECT MAX(id_cliente) AS id FROM clientes";
            $deploy = DbHandler::GetRow($linked);
            //var_dump($deploy);
            $query2 = "INSERT INTO venta (id_Venta, codigo_Venta, id_Usuario, id_Admin, id_Cliente, control, id_Plan, id_EstadoVenta, fecha_Venta)" .
                    " VALUES (NULL, '', " . $user . ", '', '" . $deploy['id'] . " ', '1', '" . $idplan . "', '1', NOW())";
            if (DbHandler::Execute($query2)) {

                echo json_encode(array('respuesta' => "ok"));
            } else {
                echo json_encode(array('respuesta' => "error"));
            }
        }
    }

    public function SetTiendas($tienda, $direccion, $telefono, $estado, $ciudad) {
        if (empty($tienda) or empty($direccion) or empty($telefono) or empty($estado) or empty($ciudad)) {
            echo '<script>setTimeout(\'alert("Los campos estan vacios");\',200);</script>';
        } else {
            $ver = "select * from tiendas where nombre_Tienda='" . $tienda . "' ";
            $veri = DbHandler::GetAll($ver);
            // print_r($veri);
            if ($veri == FALSE) {
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
            } else {
                echo '<script>setTimeout(\'alert("El Nombre de la Tienda ya Existe");\',200);</script>';
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

        if (empty($nombre) or empty($correo) or Validation::valida_correo($correo) == FALSE or empty($celular) or empty($login) or empty($Tipoperfil) or $Tipoperfil == '') {
            echo '<script>setTimeout(\'alert("Los campos estan vacios");\',200);</script>';
        } else {
            $sql = "SELECT login_Usuario , email_Usuario FROM usuarios WHERE login_Usuario = '" . $login . "' or email_Usuario = '" . $correo . "'";
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
                    <img src="img/avatar.png" width="200"></center>
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
            } else {

                echo "<script type='text/javascript'>window.location='asignar.php?seccion=2&nombre=" . base64_encode($nombre) . "&email=" . base64_encode($correo) . "&cel=" . base64_encode($celular) . "&user=" . base64_encode($login) . "&m=" . base64_encode('empty') . "';</script>";
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
        $sql2="select count(*) as tot from usuarios where email_Usuario='".trim($usuario_email)."' ";
        //echo $sql2.'-->ok';
        $resul = DbHandler::GetAll($sql2);
        $t=$resul[0]['tot'];
        if ($t==0){
                $sql1="select * from usuarios where id_Usuario='".trim($usuario_id)."' ";
                $resultado = DbHandler::GetAll($sql1);
                $user = $resultado[0]['login_Usuario'];
                $nombre = $resultado[0]['nombre_Usuario'];   
                $deploy = (Procesos::ClaveAleatoria());
                if (empty($usuario_id) or empty($usuario_email) or empty($usuario_celular)) {
                    echo json_encode(array('respuesta' => "empty"));
                } else {
                    $sql = "UPDATE usuarios SET email_Usuario = '$usuario_email', celular_Usuario = '$usuario_celular', pass_Usuario='".  md5($deploy)."'  WHERE id_Usuario =" . $usuario_id;
                    if (DbHandler::Execute($sql)) {
                        echo json_encode(array('respuesta' => "ok"));
                            $body = '
                            <center>
                            <img src="img/avatar.png" width="200"></center>
                            <br><br><br><br>
                            <b>Hi  ' . utf8_decode($nombre) . ' !</b>  <br><br><br>
                            <b>User :</b>  ' . $login . ' <br>
                            <b>Password : </b>: ' . $deploy . ' <br>
                            <b>Fecha de envio :</b> ' . date("Y-m-d H:i:s") . '<br>';
                            $asunto = utf8_decode("Contáctenos");
                            $cCorreo = new Correo();
                            $cCorreo->SendEmail($usuario_email, $asunto, $body);
                        //    echo '<script>setTimeout(\'alert("Usuario registrado exitosamente");\',200);</script>';

                    } else {
                        echo json_encode(array('respuesta' => "error"));
                    }
                }
        }else{
             echo json_encode(array('respuesta' => "email"));
        }
    }

}

?>
