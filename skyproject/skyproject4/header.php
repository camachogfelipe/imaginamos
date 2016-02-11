<?php
require_once './core/validation.php';
require_once './procesos/class_procesos.php';
$obj = new Validation();
$obj2 = new Procesos();
$result = $obj->GetName($_SESSION["session_user"]);
$result2 = $obj2->GetTiendasId($result['id_Tienda']);
$_SESSION["session_tienda"] = $result['id_Tienda'];
?>


<div class="bienvenida">
    <div class="usuario"><b>Bienvenid@</b> <?php echo $result['nombre_Usuario']; ?> - <?php if($result['id_Perfil'] == 1){echo "Super Administrador";}elseif($result['id_Perfil'] == 2){echo "Administrador";}
    else{echo "Vendedor - "; echo $result2[0]['nombre_Tienda']."<b></b>";}  ?></div>
    <div class="avatar"><img src="img/avatar.jpg"></div>
    <div class="menu">
        <div class="navbar">   
            <div class="navbar-inner">
                <div class="container">
                    <ul class="nav">
                        <li class="<?php if(isset($_GET['seccion']) && $_GET['seccion']=='1'){echo 'active';} ?>" id='as2'><a href="home.php?seccion=1">Home</a></li>
                        <?php 
                        if($_SESSION["session_perfil"] == 2){
                        ?>
                        <li class="<?php if(isset($_GET['seccion']) && $_GET['seccion']=='7'){echo 'active';} ?> dropdown-toggle"><a href="solicitudes.php?seccion=7">Solicitudes</a></li>
                        <?php 
                        }
                        ?>
                        <?php 
                        if($_SESSION["session_perfil"] == 1){
                        ?>
                        <li class="<?php if(isset($_GET['seccion']) && $_GET['seccion']=='2'){echo 'active';} ?>" style="position: relative;"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Perfiles</a>
                            <ul class="dropdown-menu">
                                <li><a href="asignar.php?seccion=2">Asignar</a></li>
                                 <li class="dropdown-submenu"><a href="#" tabindex="-1">Editar</a>
                                     <ul class="dropdown-menu">
                                         <li><a href="editar_tiendas.php?seccion=2">Tiendas</a></li>
                                         <li><a href="editar_admin.php?seccion=2">Admin</a></li>
                                         <li><a href="editar_vendedor.php?seccion=2">Vendedor</a></li>
                                         
                                     </ul>
                                 </li>
                                  
                                 <li class="dropdown-submenu"><a href="#" tabindex="-1">Listar</a>
                                     <ul class="dropdown-menu">
                                         <li><a href="listar_tiendas.php?seccion=2">Tiendas</a></li>
                                         <li><a href="listar_admin.php?seccion=2">Admin</a></li>
                                         <li><a href="listar_vendedor.php?seccion=2">Vendedor</a></li>
                                         
                                     </ul>
                                 </li>
                            </ul>
                            
                        </li>
                        <?php 
                        }
                        if($_SESSION["session_perfil"] == 1 ){
                        ?>
                        <li style="position: relative;" class="<?php if(isset($_GET['seccion']) && $_GET['seccion']=='8'){echo 'active';} ?>"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Reportes</a>
                            <ul class="dropdown-menu">
                                <li ><a href="reporte_tienda.php?seccion=8">Tienda</a></li>
                                <li><a href="reporte_admin.php?seccion=8">Admin</a></li>
                                <li><a href="reporte_vendedores.php?seccion=8">Vendedor</a></li>
                            </ul>
                        </li>
                        <?php
                        }
                        if($_SESSION["session_perfil"] == 2 ){
                        ?>
                        <li class="<?php if(isset($_GET['seccion']) && $_GET['seccion']=='8'){echo 'active';} ?>"><a href="reporte_tienda.php?seccion=8">Reportes</a>
                          
                        </li>
                        <?php
                        }
                        if($_SESSION["session_perfil"] == 2){
                        ?>
                        <li class="<?php if( isset($_GET['seccion']) && $_GET['seccion']=='9'){echo 'active';} ?> dropdown-toggle"><a href="recargas.php?seccion=9">Recarga Creditos</a></li>
                        <?php 
                        }
                        ?>
                         <?php 
                        
                        if($_SESSION["session_perfil"] == 3){
                        ?>
                        <li class='<?php if(isset($_GET['seccion']) && $_GET['seccion']=='10'){echo 'active';} ?>'><a href="ventas.php?seccion=10">Ventas</a></li>
                        <?php }?>
                        <?php 
                        
                        if($_SESSION["session_perfil"] == 3){
                        ?>
                        <li class='<?php if(isset($_GET['seccion']) && $_GET['seccion']=='8'){echo 'active';} ?>'><a href="reporte_tienda_vendedor.php?seccion=8">Reportes</a></li>
                        <?php }?>
                        <?php 
                        
                        if($_SESSION["session_perfil"] == 3){
                        ?>
                        <li class='<?php if(isset($_GET['seccion']) && $_GET['seccion']=='12'){echo 'active';} ?>'><a href="comprar_credito.php?seccion=12">Comprar Creditos</a></li>
                        <?php }?>
                        <?php 
                        if($_SESSION["session_perfil"] == 1){
                        ?>
                        <li class='<?php if(isset($_GET['seccion']) && $_GET['seccion']=='4'){echo 'active';} ?>' ><a href="asignar_creditos.php?seccion=4">Asignar Credito</a></li>
                        <li class='<?php if(isset($_GET['seccion']) && $_GET['seccion']=='5'){echo 'active';} ?>'> <a href="trafico_solicitudes.php?seccion=5">Trafico de solicitudes</a></li>
                        <?php 
                        }
                        
                        ?>
                        <?php 
                        
                        if($_SESSION["session_perfil"] == 3){
                        ?>
                        <li class='<?php if(isset($_GET['seccion']) && $_GET['seccion']=='13'){echo 'active';} ?>'><a href="soporte.php?seccion=13">Soporte</a></li>
                        <?php }?>
                        <li class='<?php if(isset($_GET['seccion']) && $_GET['seccion']=='6'){echo 'active';} ?>'><a href="cambiar_clave.php?seccion=6">Cambiar clave</a></li>
                       
                        <li><a href="logout.php">Salir</a></li>
                    </ul>
                    <?php if($_SESSION["session_perfil"] == 3 ){ 
                    $mResoult = $obj2->GetCredito($_SESSION["session_user"]);    
                    ?>
                    
                    <div class='nav' style='padding: 5px;width:180px;margin-top: 5px; height: 20px; float: right;overflow: hidden;'><label style="width: 300px;"><a>Creditos Disponibles: <?php echo $mResoult[0]['TotalCredito']?></a></label></div>
                    <?php }
                    
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>