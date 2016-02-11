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
        <title>Un amigo quiere compartir algo contigo</title>
        <meta name="description" content="Sistema que permite la gesti&oacute;n de contenidos web">
        <meta name="author" content="imaginamos.com | Brayan Acebo">
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->


    </head>
    <body bgcolor="#1eb99f">

        <div style="width: auto;height: 400px;">
            <div style="background-color: white;width: 1010px;height: 500px;left: 10%;position: relative;">
                <div style="border: 2px solid white;background-color: white">
       
              
                </div>
                <div style="background-image: url(http://repositorio.imaginamos.com/BRA/cms_archivos/mails/fondo.png);padding: 10px">
                <h1 style="font-family: Arial;margin: 5px;left: 10px;position: relative;color: gray">Un amigo quiere compartir algo contigo</h1>
                <br>
                
                
                <p style="font-size: 14px;font-family: Arial;color: gray;width: 900px;left: 50px;position: relative;text-align: left">
                    <strong>Nombre(s): </strong> <label><?php echo $correo ?></label><br>
                    <strong>Mensaje: </strong> <label><?php echo $mensaje ?></label><br>
                    
                </p>
                <div style="width: auto;height: auto;position: relative;top: 25px;text-align: right;margin-right: 10px;">
                    <a href="http://imaginamos.com" target="_blank" title="ir al sitio" style="color: #A5A5A5;font-size: 12px">CMS | imagin<span style="color: #6dcff6;">a</span>mos.com</a>
                </div>
                
                <p style="font-family: Arial;color: gray;width: 900px;left: 50px;position: relative;font-size: 10px;font-style:oblique">
                    Este correo es generado automaticamente por el sistema, por esta razon no se debe responder al mismo.
                </p>
                
                </div>
            </div>
            <div style="width: auto;height: auto;top: 93%;position: absolute;text-align: center;left: 133px;">
                <a href="http://imaginamos.com" target="_blank">
                    <img src="http://repositorio.imaginamos.com/BRA/cms_archivos/mails/pie.png" alt="pie" >
                </a>
            </div>
        </div>
    </body>
</html>