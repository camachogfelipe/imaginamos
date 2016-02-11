<?php include 'header.php' ?>
<script type="text/javascript">
$(function() {
	var divs = document.getElementsByClassName("panel");
$(".panel").css("width",1000/divs.length+"px");
});
</script>
	<div class="main_content">
		<h1>QUIÉNES SOMOS</h1>
                        <?php
                        foreach ($quienes as $q) {
                        ?>
			<a href="../<?=$q->ruta?>"><div class="quienes_items hi-icon-effect-9 hi-icon-effect-9a">
                                <img class="hi-icon" src="../application/modules/quienes/assets/images/<?=$q->imagen?>" width="310" height="150">
				<span class="subtitulo_q"><?=$q->nombre?></span>
				<div class="po">
				<p><?=$q->texto?></p>
				</div>
				<a href="../<?=$q->ruta?>"><button class="btn btn-3 btn-3e vermas">Ver más</button></a>
			</div></a>
                        <?php
                                }
                        ?>
	</div><!-- end main_content -->
	<script src="js/actions.js" type="text/javascript"></script>
<?php include 'footer.php' ?>