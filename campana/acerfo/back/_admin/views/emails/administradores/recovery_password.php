<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Nueva contraseña de acceso al CMS de Imaginamos.com</title>
    </head>
    <body>
        <table width="632" border="0" align="center" background="<?php echo cdn_imaginamos('images/bg/bg_mail_new_user.jpg') ?>">
            <tr>
                <td height="522">
                    <table width="55%" border="0" align="center">
                        <tr>
                            <td>
                                <p>
                                    Su nueva clave es la siguiente:<br>
                                    <strong><pre><?php echo $password ?></pre></strong>
                                    Haga uso del correo <strong><?php echo $email ?></strong> y la nueva clave para ingresar al CMS, 
                                    si la pierde o la olvida, puede solicitar una nueva clave haciendo clic <a href="<?php echo cms_url('login') ?>#torecovery">acá</a>.

                                    <br><br>
                                    Cordialmente,<br>Staff <a href="http://imaginamos.com" target="_blank">imaginamos.com</a>
                                    <br><br>
                                <p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>
