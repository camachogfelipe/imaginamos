<?php include './cms/core/mapping/include.mapping.php';?>
<p>Las imágenes dispuestas en la siguiente sección son de uso público sin restricciones para su consulta,
uso y distribución. </p>
	
<?php pintar_imagenes(); ?>





		<script>
		(function(){
			/*PRENSA FOTOS*/
			if($('.prensaFotoBox').size()>0){
				$('.prensaFotoBox .prensaFotoItem .imgFrame').fancybox();
			}
		})()
		</script>
