<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <table width="632" border="0" align="center" background="<?php echo cdn_imaginamos('images/bg/bg_mail_new_user.jpg') ?>">
            <tr>
                <td height="522">
                    <table width="55%" border="0" align="center">
                        <tr>
                            <td>
                                <p style="margin-top:20px;">
                                    Hola <strong><?php echo $username ?></strong>, se ha creado una nueva cuenta para usted. Para ingresar haga clic en el siguiente link: <br><br>
                                    <?php echo anchor(base_url()) ?>
                                    <br><br>
                                    Sus datos de acceso son los siguientes:<br><br>
                                    <strong>Email:</strong><br><pre style="margin:0; padding:0;"><?php echo $email ?></pre><br><br>
                                    <strong>Su clave:</strong><br><pre style="margin:0; padding:0;"><?php echo $password ?></pre><br><br>--<br><br>
                                    Guarde este correo para<br>futuras referencias
                                </p>
                                <p>
                                    <br><br>
                                    Cordialmente,<br>Staff <a href="http://setronics.com" target="_blank">setronics.com</a>
                                    <br><br>
                                </p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>
