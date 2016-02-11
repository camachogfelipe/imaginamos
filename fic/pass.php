<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=9" />
    
    <title>FIC - FOCUS INVESTMENT CORP</title>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    
    <?php include('commonLibs.php');?>
    
</head>

<body>

<div class="modalBox">
<?php if (!isset($_GET['envio'])){ ?>
	<h1>Recuperar contraseña</h1>
    <h3>Phasellus in ipsum dolor, ac faucibus diam. Aenean in ligula eget enim interdum vehicula posuere vitae magna. </h3>
    <form method="POST" name="contactoform" id="contactoform" action="includes/recuperar.php">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td width="40%">Email </td>
                <td width="60%"><input type="text" name="email" class="inputText" /></td>
            </tr>
            <tr>
                <td width="40%"></td>
                <td width="60%"><input type="submit" class="inputSubmit" value="Continuar" /></td>
            </tr>
        </table>

    </form>
    <?php }else{?>
    Su usuario y contraseña han sido enviados a su Email
    <?php }?>
</div>

</body>
</html>
