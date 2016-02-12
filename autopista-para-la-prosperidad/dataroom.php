<?php $m = 'dataroom'; ?>
<?php

include('header.php');


?>

<div class="mainContent clearfix">

<h1>DATA ROOM</h1>

	<div class="sideBar">
		<ul class="mainSide">
			<?php if($_SESSION['usuario'] != NULL){?>
                       <?php categoriasdataroom();?>
                        <li><a id="documentosJuridicos" href="dataroomDocs.php?pagina=<?php echo $_GET['pagina']; ?>">Documentos Jurídicos</a></li>
                        <?php } ?>
		</ul>

	</div>


	<div class="rightContet">
<?php if($_SESSION['usuario'] == NULL){?>
<table class="archivoTable">
           
<p>*Texto de recomendación para descargar la información</p>
<p>Teniendo en cuenta el tamaño de los archivos que usted desea descargar, le recomendamos realizar esta actividad en un programa de descarga de contenidos.</p>

           
<p>Debes ser un usuario registrado para poder acceder a esta sección. <br>
Si aún no estas registrado da <a href="registro.php">clic aquí</a><br>
Si ya estas registrado, ingresa dando <a href="loginModal.php" class="cBoxReg fancybox.ajax">clic aquí</a></p></table>
	<?php }else{ ?>
        <table class="archivoTable">
           
<p>Bienvenido al DATAROOM. <br>
</p></table>
        <?php } ?>
        </div>



</div>
<?php if($_GET['ancla'] == 'documentosJuridicos'){?>
<script> 
        $(document).ready(function() {
                $('#documentosJuridicos').click();
            });
        
 </script> 
<?php } ?>
<?php include('footer.php') ?>