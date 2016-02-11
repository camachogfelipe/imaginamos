<?php
include 'Correo.class.php';
include 'PHPMailer.php';
if (isset($_POST["envio"])) {
    $env = $_POST["envio"];
    if ($env == "abc") {
        $body = '
            <center><img src="imagenes/logo.png"></center>
            <br><br><br><br>
            <b>Tipo de consulta</b> : ' . utf8_decode(GetData("tipo")) . ' <br>            
            <b>Compañia</b> : ' . utf8_decode(GetData("compania")) . ' <br>            
            <b>Cedula</b> : ' . utf8_decode(GetData("cedula")) . ' <br>            
            <b>Nombre</b> : ' . GetData("nombre") . ' <br> 
            <b>Cargo</b> : ' . GetData("cargo") . ' <br> 
            <b>Telefono</b> : ' . GetData("telefono") . ' <br> 
            <b>Celular</b> : ' . GetData("celular") . ' <br> 
           <b>Email</b>: <a href="mailto:' . GetData("email") . ' " target="_blank">' . GetData("email") . '</a> <br>
            <b>Departamento</b> : ' . GetData("departamentos") . ' <br> 
            <b>Ciudad</b> : ' . GetData("ciudades") . ' <br> 
            <b>Direccion</b> : ' . GetData("direccion") . ' <br> 
            <b>Comentario</b> : ' . GetData("Comentario") . ' <br> 
            <b>Fecha de envio</b>: ' . date("Y-m-d H:i:s") . '<br>';
        $asunto = utf8_decode("Contáctenos");
        $cCorreo = new Correo();       
        $cCorreo->SendEmail("diana.sandoval@imaginamos.com.co", $asunto, $body);


        $val = 1;
        //  $cCorreo->SendEmail($contactos[0]["contacto1"], $asunto, $body);
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Norquimicos</title>
        <meta name="viewport" content="width=1024, maximum-scale=2">
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
        <meta http-equiv="content-language" content="es" />
        <meta http-equiv="pragma" content="No-Cache" />
        <meta name="Keywords" lang="es" content="" />
        <meta name="Description" lang="es" content="" />
        <meta name="copyright" content="imaginamos.com" />
        <meta name="date" content="2011" />
        <meta name="author" content="diseño web: imaginamos.com" />
        <meta name="robots" content="All" />
         <script type="text/javascript">
            $(function(){
                $("#formenviar").validationEngine();
            });
        </script>


    </head>

    <body>

        <div class="principal">
            <?php include 'header.php'; ?>

            <div class="titulo">
                <div class="contienetitulo"><h1>CONT&Aacute;CTENOS</h1></div>
            </div>

            <div class="contenido">
                :
                *
                *


                *

                *
                *

                <form action="" method="post" id="formenviar" >
                    <div class="contenedor" style="margin:80px auto">
                        <div class="seccion1">
                            <div id="formulario">
                                <input type="hidden" value="abc" name="envio" />
                                <input type="text" id="texto" name="tipo" class="validate[required]" onblur="if(this.value=='') this.value='Tipo de Consulta'" onclick="if(this.value=='Tipo de Consulta') this.value=''" value="Tipo de Consulta" data-validation-placeholder="Tipo de Consulta" ;/>
                            </div>
                            <div id="formulario">
                                <input type="text" id="texto" name="compania" class="validate[required]" onblur="if(this.value=='') this.value='Nombre de la Compañia'" onclick="if(this.value=='Nombre de la Compañia') this.value=''" value="Nombre de la Compañia" data-validation-placeholder="Nombre de la Compañia" ;/>
                            </div>
                            <div id="formulario">
                                <input type="text" id="texto" name="cedula" class="validate[required,custom[phone]]" onblur="if(this.value=='') this.value='Nit o Cédula'" onclick="if(this.value=='Nit o Cédula') this.value=''" value="Nit o Cédula" data-validation-placeholder="Nit o Cédula"  ;/>
                            </div>
                            <div id="formulario">
                                <input type="text" id="texto" name="nombre" class="validate[required]" onblur="if(this.value=='') this.value='Nombre'" onclick="if(this.value=='Nombre') this.value=''" value="Nombre" data-validation-placeholder="Nombre" ;/>
                            </div>
                            <div id="formulario">
                                <input type="text" id="texto" name="cargo" class="validate[required]" onblur="if(this.value=='') this.value='Cargo'" onclick="if(this.value=='Cargo') this.value=''" value="Cargo" data-validation-placeholder="Cargo" ;/>
                            </div>
                            <div id="formulario">
                                <input type="text" id="texto" name="telefono"  class="validate[required,custom[phone]]" onblur="if(this.value=='') this.value='Teléfono Fijo'" onclick="if(this.value=='Teléfono Fijo') this.value=''" value="Teléfono Fijo" data-validation-placeholder="Teléfono Fijo" ;/>
                            </div>
                            <div id="formulario">
                                <input type="text" id="texto" name="celular" class="validate[required,custom[phone]]" onblur="if(this.value=='') this.value='Celular'" onclick="if(this.value=='Celular') this.value=''" value="Celular" data-validation-placeholder="Celular" ;/>
                            </div>
                            <div class="textochat">
                                chatea con<br /><span id="rojo" style="font-size:60px;">nosotros</span>
                                <div class="flechacontac"></div>
                               
        </div>
    </body>

</html>
<?php
if (isset($val)) {
    echo "aca....";
    $erno = $val;
    if (intval($erno)) {
        if ($erno == "1") {
            echo '<script>setTimeout(\'alert("Mensaje enviado correctamente, pronto recibira una respuesta de nosotros");\',400);</script>';
        } else {
            echo "<script type='text/javascript'>window.location='index.php?seccion=index';</script>";
        }
    }
}
?>