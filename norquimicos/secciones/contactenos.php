<?php
include( 'business/class/Correo.class.php' );
include( 'business/class/PHPMailer.class.php' );
if (isset($_POST["envio"])) {
    $env = $_POST["envio"];
    if ($env == "abc") {
        $body = '
            <center><img src="imagenes/logo.png"></center>
            <br><br><br><br>
            <b>Tipo de consulta</b> : ' . utf8_decode(GetData("tipo")) . ' <br>            
            <b>Compañía</b> : ' . utf8_decode(GetData("compania")) . ' <br>            
            <b>Cédula</b> : ' . utf8_decode(GetData("cedula")) . ' <br>           
            <b>Nombre</b> : ' . GetData("nombre") . ' <br> 
            <b>Cargo</b> : ' . GetData("cargo") . ' <br> 
            <b>Teléfono</b> : ' . GetData("telefono") . ' <br> 
            <b>Celular</b> : ' . GetData("celular") . ' <br> 
           <b>Email</b>: <a href="mailto:' . GetData("email") . ' " target="_blank">' . GetData("email") . '</a> <br>
            <b>Departamento</b> : ' . GetData("departamentos") . ' <br> 
            <b>Ciudad</b> : ' . GetData("ciudades") . ' <br> 
            <b>Dirección</b> : ' . GetData("direccion") . ' <br> 
            <b>Comentario</b> : ' . GetData("Comentario") . ' <br> 
            <b>Fecha de envío</b>: ' . date("Y-m-d H:i:s") . '<br>';
        $asunto = utf8_decode("Contáctenos");
        $cCorreo = new Correo();
        $cCorreos = new Dbcontacto();
        $contactos = $cCorreos->getList();
        $cCorreo->SendEmail($contactos[0]["contacto"], $asunto, $body);


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
        <link href="css/norquimicos.css" rel="stylesheet" type="text/css" />
        <link href="css/jquery.selectbox.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="js/funciones.js"></script>
        <link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css"/>
        <script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
        <script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script> 
        <script src="js/jquery.validationEngine-es.js" type="text/javascript" charset="utf-8"></script>
        <style>.comentario{border: none;margin: 8px 0 0 13px;padding: 12px 0px 0px 0px;background: transparent;width: 380px;height: 115px;overflow: auto;font-size: 18px;color: #666;font-family: 'MyriadPro-Regular';text-align: left;resize: none;}</style>
        <?php include 'scripst.php'; ?>
        <script type="text/javascript">
            $(function(){
                $("#formenviar").validationEngine();
            });
        </script>


    </head>

    <body onload="menuSlider.init('menu','slide')">

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
                                <input type="text" id="texto" name="compania" class="validate[required]" onblur="if(this.value=='') this.value='Nombre de la Compañia'" onclick="if(this.value=='Nombre de la Compañía') this.value=''" value="Nombre de la Compañía" data-validation-placeholder="Nombre de la Compañía" ;/>
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
<!-- LiveZilla Chat Button Link Code (ALWAYS PLACE IN BODY ELEMENT) --><a name="livezilla_chat_button" href="javascript:void(window.open('http://www.norquimicos.com.co/livezilla/chat.php?acid=8f791','','width=590,height=760,left=0,top=0,resizable=yes,menubar=no,location=no,status=yes,scrollbars=yes'))" class="lz_cbl"><img src="http://www.norquimicos.com.co/livezilla/image.php?acid=90074&amp;id=2&amp;type=inlay" width="200" height="55" style="border:0px;" alt="LiveZilla Live Chat Software" /></a><!-- http://www.LiveZilla.net Chat Button Link Code --><!-- LiveZilla Tracking Code (ALWAYS PLACE IN BODY ELEMENT) --><div id="livezilla_tracking" style="display:none"></div><script type="text/javascript">
/* <![CDATA[ */
var script = document.createElement("script");script.async=true;script.type="text/javascript";var src = "http://www.norquimicos.com.co/livezilla/server.php?acid=03efd&request=track&output=jcrpt&nse="+Math.random();setTimeout("script.src=src;document.getElementById('livezilla_tracking').appendChild(script)",1);
/* ]]> */
</script><noscript><img src="http://www.norquimicos.com.co/livezilla/server.php?acid=03efd&amp;request=track&amp;output=nojcrpt" width="0" height="0" style="visibility:hidden;" alt="" /></noscript><!-- http://www.LiveZilla.net Tracking Code -->                            </div>

                        </div>
                        <div class="seccion1">
                            <div id="formulario">
                                <input type="text" id="texto" name="email" class="validate[required,custom[email]]" onblur="if(this.value=='') this.value='Email'" onclick="if(this.value=='Email') this.value=''" value="Email" data-validation-placeholder="Email" ;/>
                            </div>
                            <div id="formulario">
                                <?php
                                $mapas = DbHandler::GetAll("SELECT * FROM departamento ORDER BY nombre");
                                ?>
                                <select name="departamentos" class="validate[required]" id="country_id" onchange="GenericAjax('Ciudades', this.value);"  data-validation-placeholder="Departamento">
                                    <option value="Departamento">Departamento</option>
                                    <?php for ($a = 0, $b = count($mapas); $a < $b; $a++) { ?>
                                        <option value="<?php echo  $mapas[$a]["idDepartamento"] ?>"><?php echo  utf8_encode($mapas[$a]["nombre"]) ?></option>
                                    <?php } ?>                         
                                </select>
                            </div>

                            <div class="ciudades_cambio" id="formulario">
                                <select name="ciudades" id="country2_id">
                                    <option value="">Ciudad</option>

                                </select>
                            </div>

                            <div id="formulario">
                                <input type="text" id="texto" name="direccion"  class="validate[required]" class="" onblur="if(this.value=='') this.value='Dirección'" onclick="if(this.value=='Dirección') this.value=''" value="Dirección" data-validation-placeholder="Dirección" ;/>
                            </div>
                            <img src="imagenes/robot.png" alt="" class="robot" />
                            <div id="formulariota">
                                <textarea name='Comentario'  class='comentario validate[required]' rows="4"  onblur="if(this.value=='') this.value='Comentario'" onclick="if(this.value=='Comentario') this.value=''" data-validation-placeholder="Comentario";>Comentario</textarea>
                            </div>
                             <input id="btnmoreenviar" type ="submit" value="Enviar" />
                            <!--<a id="btnmoreenviar" href="#"><span id="bold">enviar</span></a>-->
                            <a href="http://www.linkedin.com/company/norquimicos-ltd" target="_blank" id="in-c"></a>
                            <a href="https://twitter.com/norquimicosltda" target="_blank" id="twi-c"></a>
                            <a href="http://www.facebook.com/Norquimicos" target="_blank" id="fac-c"></a>
                            <a href="skype:norquimicos.ltd?call" id="skype"></a><!--skype:carlos.imaginamos?call-->
                            <div class="info-contacto">
                                <div class="info-cont-sen-1"><strong>Teléfono:</strong><br>(1) 4143089</div>
                                <div class="info-cont-sen-2"><strong>E-mail:</strong><br><a href="mailto:info@norquimicos.com.co" target="_blank">info@norquimicos.com.co</a></div>
                                <div class="info-cont-dob"><strong>Dirección:</strong><br>Carrera 56 A # 4D-19 Bogotá - Colombia</div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <?php include 'footer.php'; ?>

        </div>
    </body>

</html>
<?php
if (isset($val)) {
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