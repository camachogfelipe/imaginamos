<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        Hello, has signed a new contact.
        <br>
        <br>Name: <?= $this->input->post('name'); ?>
        <br>Company: <?= $this->input->post('company'); ?>
        <br>Email: <?= $this->input->post('email'); ?>
        <br>Cell phone: <?= $this->input->post('cel'); ?>
        <br>Comment:
        <p><?= $this->input->post('comment'); ?></p>
    </body>
</html>
