<!------------------------------
 |  @autor: Brayan Acebo
 |  brayan.acebo@imaginamos.co
 |  Agencia: imaginamos.com
 |  Bogotá, Colombia, 2012
------------------------------->


<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Recuperaci&oacute;n de contrase&ntilde;a</title>
        <meta name="description" content="Sistema que permite la gesti&oacute;n de contenidos web">
        <meta name="author" content="imaginamos.com | Brayan Acebo">
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->


    </head>
    <body>

        <div style="width: auto;height: 400px;">
            <div style="background-color: white;width: 1010px;height: 500px;left: 10%;position: relative;">
                <div style="border: 2px solid white;background-color: white">
                    <a href="http://imaginamos.com" target="_blank"><img src="http://repositorio.imaginamos.com/BRA/cms_archivos/mails/titulo.png" alt="titulo"></a>
                    <br><br> 
                </div>
                <div style="background-image: url(http://repositorio.imaginamos.com/BRA/cms_archivos/mails/fondo.png);padding: 10px">
                <h1 style="font-family: Arial;margin: 5px;left: 10px;position: relative;color: gray">Solicitud de contrase&ntilde;a</h1>
                <br>
                <p style="color: white;font-size: 14px;font-family: Arial;color: gray;width: 900px;left: 50px;position: relative">
                    Hola <strong><?php echo $username ?>,</strong>
                </p>
                <p style="color: white;font-size: 14px;font-family: Arial;color: gray;width: 900px;left: 50px;position: relative">
                    Usted a solicitado recuperar la contraseña para el ingreso del CMS a su pagina web, a continuación se dejan los datos, si usted no a hecho esta solicitud, por favor omita este mensaje y de ser posible eliminelo.
                </p>
                <br>
                <p style="font-size: 14px;font-family: Arial;color: gray;width: 900px;left: 50px;position: relative;text-align: center">
                    <strong>Contrase&ntilde;a: </strong> <label><?php echo $newpass ?></label>
                </p>
                <div style="width: auto;height: auto;position: relative;top: 25px;text-align: right;margin-right: 10px;">
                    <a href="#" target="_blank" title="ir al sitio" style="color: #A5A5A5;font-size: 12px">CMS | imagin<span style="color: #6dcff6;">a</span>mos.com</a>
                </div>
                
                <p style="font-family: Arial;color: gray;width: 900px;left: 50px;position: relative;font-size: 10px;font-style:oblique">
                    Este correo es generado automaticamente por el sistema, por esta razon no se debe responder al mismo.
                </p>
                
                </div>
            </div>
            <div style="width: auto;height: auto;top: 90%;position: absolute;text-align: center;left: 11%">
                <a href="http://imaginamos.com" target="_blank">
                    <img src="http://repositorio.imaginamos.com/BRA/cms_archivos/mails/pie.png" alt="pie" >
                </a>
            </div>
        </div>
    </body>
</html>