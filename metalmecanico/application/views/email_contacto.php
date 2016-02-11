
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>CMS | Imaginamos</title>
        <meta name="description" content="Sistema que permite la gesti&oacute;n de contenidos web">
        <meta name="author" content="imaginamos.com | Brayan Acebo">
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->


    </head>
    <body>

        <div style="width: auto;height: 700px;">
            <div style="background-color: white;width: 580px;height: 700px;left: 10%;position: relative;">
                <div style="border: 2px solid white;background-color: white">
                    <a href="<?php echo base_url() ?>" target="_blank"><img src="<?php echo base_url() ?>assets/img/logo.png" alt="imaginamos.com"></a>
                    <br>
                </div>
                <div style="background-image: url(<?php echo base_url('assets/images/email.png') ?>);background-repeat: no-repeat;height: 572px">
                <br> <br><br> <br><br> <h1 style="font-family:Arial;margin:10px 0px 0px 50px;color:gray;font-size:14px;">Centro de contacto</h1>
                <br>
                <br>
                <p style="color:white;font-size:11px;font-family:Arial;color:gray;width:400px;margin: 0px 0px 0px 50px;">
                    Hola <strong>,</strong>
                </p>
                <p style="color:white;font-size:11px;font-family:Arial;color:gray;width:500px;margin: 10px 0px 0px 50px">
                    Hay alguien que desea ponerse en contacto con usted, a continuaci&oacute;n sus datos.
                </p>
                <br>
                <p style="font-size: 12px;font-family: Arial;color: gray;width: 420px;left: 50px;position: relative;text-align: center;top: 50px;margin: 20px 0px 0px 50px">
		    		
                    <strong>Nombre(s): </strong> <label><?php echo ucwords(@$name) ?></label><br>
		    <strong>Telefono: </strong> <label><?php echo ucwords(@$phone) ?></label><br>
                    <strong>E-mail: </strong> <label><?php echo ucwords(@$email) ?></label><br>
                    <strong>Asunto: </strong> <label><?php echo ucwords(@$subject) ?></label><br>
                    <strong>Comentario: </strong> <label><?php echo ucfirst(@$message) ?></label>
                    <br><br><br><br><br><br>
                </p>
                
                <p style="font-family:Arial;color:gray;width:300px;font-size:10px;font-style:oblique;margin: 120px 0px 0px 50px">
                    Este correo es generado automaticamente por el sistema, por esta razon no se debe responder al mismo.
                </p>
                
                <div style="width:auto;min-height:auto;text-align:left;margin: -65px 0px 0px 50px;">
                   <br><br><br><br><br><br><br><br> <a href="<?php echo base_url('cms') ?>" target="_blank" title="ir al sitio" style="color: #A5A5A5;font-size: 12px">CMS | imagin<span style="color: #6dcff6;">a</span>mos.com</a>
                </div>
                
                </div>
            </div>
        </div>
    </body>
</html>