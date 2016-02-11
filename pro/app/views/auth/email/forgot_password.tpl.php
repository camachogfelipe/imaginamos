<html>
    <body>
        <h1>Nueva contraseña para <?php echo $identity; ?></h1>
        <p>Por favor da click en el siguiente link para <?php echo anchor('usuarios/reset_password/' . $forgotten_password_code, 'insertar tu nueva contraseña'); ?>.</p>
    </body>
</html>