<?php
require_once 'core/validation.php';
require_once 'procesos/class_procesos.php';
$object = new Procesos();
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/skyproject.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php include 'header.php'; ?>

        <div class="reportes ">

            <div class="con-reportes">
                <div class="contenedor-info">
                    <h2>Asignar</h2>
                    <div class="seccion">
                        <form action="" method="POST" id="form1">
                            <div style="float: left;"><label>Tipo de perfil</label>
                                <select name="perfil">
                                    <option value="seleccione">-- Seleccione --</option>
                                    <option value="2">Administrador</option>
                                    <option value="3">Vendedor</option>
                                </select>
                            </div>
                            <div style="float: left;margin-right:10px;"><label style="margin-left: 4px;margin-right: -55px;">Tienda</label>
                                <select name="tienda">
                                    <option value="seleccione">-- Seleccione --</option>
                                    <?php
                                    $result = $object->GetTiendas();
                                    for ($i = 0; $i < count($result); $i++) {
                                        ?>
                                        <option value="<?php echo $result[$i]['id_Tienda'] ?>"><?php echo $result[$i]['nombre_Tienda'] ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div style="float: left; "><a style="float: left;" data-toggle="modal" href="#cont" class="btn btn-primary btn-small" >Crear tienda</a></div>


                    </div>


                    <div class="deploy" style=""> 
                        <label class="tab" >Nombre </label><input type="text" name="nombre"/>
                    </div>
                    <div class="deploy">
                        <label class="tab">Correo electronico </label><input type="text" name="email"/>
                    </div>
                    <div class="deploy">
                        <label class="tab">Celular </label><input type="text" name="celular"/>
                    </div>
                    <div class="deploy">
                        <label class="tab">Nombre de Usuario </label><input type="text" name="user"/>
                    </div>
                    <div class="deploy">
                        <input type="submit" value="Crear" class="btn btn-danger btn-primary " />
                    </div>
                    <input type="hidden" name="asignar" value="si"/>
<?php
if (isset($_POST['asignar']) && $_POST['asignar'] == "si") {
    //print_r($_POST);
    $object->SetAsignar($_POST['nombre'], $_POST['email'], $_POST['celular'], $_POST['user'], $_POST['perfil'], $_POST['tienda']);
}
?>
                    </form>
                </div>
            </div>
        </div>     
    </body>
</html>














<div id="cont" class="modal hide fade in" style="display: none;">
    <div class="modal-header" >
        <a class="close" data-dismiss="modal">x</a>
        <h3>Crear tienda</h3>
    </div>
    <div class="modal-body">
        <form  action="" method="POST" id="modals">
            <h4 style="float: left;margin-top: 5px;margin-right: 20px;">Nombre tienda:</h4>
            <input type="text" name="nombre" style="float: left;margin-right: 110px;" />
            <h4 style="float: left;margin-top: 5px;margin-right: 65px;">Dirección:</h4>
            <input type="text" name="direccion" style="float: left;margin-right: 80px;" />
            <h4 style="float: left;margin-top: 5px;margin-right: 72px;">Telefono:</h4>
            <input type="text" name="telefono" style="float: left;margin-right: 111px;" />
            <h4 style="float: left;margin-top: 5px;margin-right: 5px;">Estado:</h4>
            <select name="estado" style="width: 120px;float: left;">

                <option value="1">California</option>
                <option value="2">Arizona</option>
                <option value="3">Washington</option>
                <option value="4">Montana</option>
                <option value="5">Texas</option>
            </select>
            <h4 style="float: left;margin-top: 5px;margin-left: 5px; margin-right: 5px;">Ciudad:</h4>
            <select name="ciudad" style="width: 120px;float: left;">
                <option value="1">New York</option>

            </select>
    </div>
    <div class="modal-footer">
        <input type="submit" class="btn btn-success" value="Guardar"/>
        <a href="#" class="btn" data-dismiss="modal">Cerrar</a>
        <input type="hidden" name="grabar" value="si"/>
<?php
if (isset($_POST['grabar']) && $_POST['grabar'] == "si") {
    $object->SetTiendas($_POST['nombre'], $_POST['direccion'], $_POST['telefono'], $_POST['estado'], $_POST['ciudad']);
}
?>
    </div>
</form>
</div>