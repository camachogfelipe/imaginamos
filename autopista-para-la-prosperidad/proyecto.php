<?php $m = 'proyecto'; ?>
<?php include('header.php') ?>

<div class="mainContent clearfix">

<h1>PROYECTO</h1>
<!--
<?php $mSide = 't1'; ?>
<?php include('proyectoSideBar.php') ?> -->

	<div class="sideBar">
		<ul class="mainSide">
			<li class="selected"><a href="proyectoConcesiones4G.php">Concesiones 4G</a></li>
			<li><a href="proyectoAutopistas.php">Autopistas para la Prosperidad</a></li>

			<li class="hasDropdown" data-for="ul1"><a href="proyectoConcesiones.php?con=1">Concesiones</a></li>
				<ul data-for="ul1">
					<?php pintar_concesiones(); ?>
				</ul>
                        <li><a id="presentacionesa" class="clicka" href="proyectoPresentaciones.php?pagina=<?php echo $_GET['pagina']?>">Presentaciones</a></li>
			<li><a href="proyectoVideos.php">Video</a></li>
			<li><a href="proyectoInvertir.php">Por qué invertir en Colombia</a></li>
			<li><a href="proyectoPrecalificacion.php">Proceso de Precalificación</a></li>
		</ul>

            <div class="listHeader">LINKS SECOP<a href="#" onclick="abrir()"></a></div>
		<ul class="links">
			<?php linksecop()?>
		</ul>

		<div class="listHeader">CONTACTO OFICIAL</div>
		<ul class="links">
                    
			<?php correos()?>
		</ul>

	</div>

	<div class="rightContet">
		<?php proyectostexto(1); ?>
	</div>


</div>
<?php if($_GET['ancla'] == 'presentaciones'){?>
<script> 
        $(document).ready(function() {
                $('.clicka').click();
            });
        
 </script> 
<?php } ?>
<?php include('footer.php') ?>

