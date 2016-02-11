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
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="css/skyproject.css" rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
        <link href="css/validationEngine.jquery.css" rel="stylesheet" type="text/css">
        
        
        
        
        <script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script src="js/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
        <script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript" src="http://www.imaginamos.com/footer_ahorranito/jquery.ahorranito.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
        $('.footer-ahorranito').ahorranito({theme:'oscuro', type:3});
        });
        </script>
        <script>
         $(document).ready(function(){
             
           $("#perfil").change(function () {
                   $("#perfil option:selected").each(function () {
                    elegido=$(this).val();
                    $.post("ajax3.php", { elegido: elegido }, function(data){
                    $("#vendedor").html(data);
                    });            
                });
           });
           
           
		   /*
		   $("#estado").change(function () {
                   $("#ciudad option:selected").each(function () {
                    ciudad=$(this).val();
                    $.post("ajax.php", { ciudad: ciudad }, function(data){
                    $("#ciudad").html(data);
                    });            
                });
           });
           */
           
			// binds form submission and fields to the validation engine
			jQuery("#form1").validationEngine();
                        $("#form1").bind("jqv.field.result", function(event, field, errorFound, prompText){ console.log(errorFound) })
		

         });
          
        </script>
    </head>
    <body>
        <?php include 'header.php'; ?>

        <div class="reportes ">

            <div class="con-reportes">
                <div class="contenedor-info">
                    <h2>Asignar</h2>
                    <form action="" method="POST" id="form1">
                    <div class="seccion">
                            <div style="float: left;"><label>Tipo de perfil</label>
                                <select name="perfil" id="perfil" style="float: left;margin-right: 8px;" class="validate[required]">
                                    <option value="" >-- Seleccione --</option>
                                    <option value="2">Administrador</option>
                                    <option value="3">Vendedor</option>
                                </select>
                            </div>
                            
                            <div style="float: left;margin-right:10px;">
                                <div id="vendedor" style="float: left;">
                                    
                                </div>
                                
                            </div>
                    </div>
                        <div class="deploy" style=""> 
                        <label class="tab" >Nombre </label><input type="text" class="validate[required] text-input"  id='nombre' name="nombre" value="<?php echo @base64_decode($_GET['nombre'])?>"/>
                    </div>
                    <div class="deploy">
                        <label class="tab">Correo electronico </label><input type="text" name="email" class="validate[required,custom[email]] text-input" value="<?php echo @base64_decode($_GET['email'])?>"/>
                    </div>
                    <div class="deploy">
                        <label class="tab">Celular </label><input type="text" class="validate[required,custom[phone]] text-input" name="celular" value="<?php echo @base64_decode($_GET['cel'])?>"/>
                    </div>
                    <div class="deploy">
                        <label class="tab">Nombre de Usuario </label><input type="text" class="validate[required,custom[onlyLetterNumber],maxSize[20] text-input" id="user" name="user" value="<?php echo @base64_decode($_GET['user'])?>"/>
                    </div>
                    <div class="deploy">
                        <input type="submit" value="Crear" class="btn btn-primary guardar" style="margin-left:293px;" />
                    </div>
                    <input type="hidden" name="asignar" value="si"/>

                    </form>
                </div>
                
            </div>
            
        </div>     
    <div class="con-footer">
    <div class="cloud"></div>
    <div class="copy-footer">
    <p>&copy; 2013 <strong>SKYPROJECT</strong> - Todos los derechos reservados - Prohibida su
    reproducción parcial o total.</p>
    </div>
    <div class="copy-footer-2"><div class="footer-ahorranito"></div></div>
    </div>

<?php
if (isset($_POST['asignar']) && $_POST['asignar'] == "si") {
    //print_r($_POST);
    if($_POST['perfil'] == 2){
        $tiendas = 0;
        $object->SetAsignar($_POST['nombre'], $_POST['email'], $_POST['celular'], $_POST['user'], $_POST['perfil'], $tiendas);
    }else{
        if(empty($_POST['tienda']) or $_POST['tienda'] == '' ){
            echo '<script>setTimeout(\'alert("Seleccione una tienda");\',200);</script>';
        }else{
        $tiendas = $_POST['tienda'];
        $object->SetAsignar($_POST['nombre'], $_POST['email'], $_POST['celular'], $_POST['user'], $_POST['perfil'], $tiendas);
    }}
  
}
$empty = @base64_decode($_GET['m']);

if(isset($empty) && $empty == 'empty'){
     echo '<script>setTimeout(\'alert("El usuario y/o correo ya se encuentra registrado porfavor utilice otro");\',200);</script>';
}
?>

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
            <select name="estado" id="estado" style="width: 120px;float: left;">
                <?php 
                $mResoult = $object->GetEstados();
                for ($i = 0, $fin = count($mResoult); $i < $fin; $i++) {
                ?>
                <option value="<?php echo $mResoult[$i]['id_Estado']?>"><?php echo $mResoult[$i]['nombre_Estado']?></option>
                <?php 
                }
                ?>
            </select>
            <h4 style="float: left;margin-top: 5px;margin-left: 5px; margin-right: 5px;">Ciudad:</h4>
            <select name="ciudad" id="ciudad" style="width: 120px;float: left;">
            </select>
    <!--</div>-->
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

<script>
       $(function() {
             
			var id = $("#estado").find(':selected').val();
			//alert(id);
			$.get('ciudades.php', { id: id } , function(resultado) {
				//alert("por defecto");
				$('#ciudad').empty().html(resultado);
			});
		   
		   
		   
			$("#estado").change(function(event){
				var id = $("#estado").find(':selected').val();
				//alert(id);
				$.get('ciudades.php', { id: id } , function(resultado) {
				//	alert("al cambio");
					$('#ciudad').empty().html(resultado);
				});
			});
		   

         });
          
        </script>


</div>

</body>