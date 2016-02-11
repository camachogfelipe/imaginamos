<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        Hola, se ha registrado un nuevo contacto.
        <br>
        <br>Nombre: <?= $this->input->post('nombre'); ?>
        <br>Empresa: <?= $this->input->post('empresa'); ?>
        <br>Email: <?= $this->input->post('email'); ?>
        <br>Celular: <?= $this->input->post('celular'); ?>
        <br>Teléfono: <?= $this->input->post('telefono'); ?>
        <br>país: <?= $this->input->post('pais'); ?>
        <br>ciudad: <?= $this->input->post('ciudad'); ?>
        <br>Comentario:
        <p><?= $this->input->post('comentario'); ?></p>
    </body>
</html>
