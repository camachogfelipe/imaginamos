<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Mirrored from www.bioempak.com/site/news by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 12 Aug 2013 02:55:00 GMT -->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Bioempak</title>
  <base></base>
  <link href="http://www.bioempak.com/assets/assets/img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
  <link href="../assets/css/all.css" rel="stylesheet" type="text/css" />
  <link href="../assets/css/reset.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="../assets/css/tabs_style.css" type="text/css" media="screen">
  <link href="http://www.bioempak.com/favicon.ico" rel="shortcut icon" type="image/x-icon" />
  <link rel="stylesheet" href="../assets/css/uniform.aristo.css">
  <link href="../assets/css/jquery.selectbox.css" type="text/css" rel="stylesheet" />
  <meta http-equiv="content-language" content="es" />
  <meta http-equiv="pragma" content="No-Cache" />
  <meta name="Keywords" lang="es" content="Empaques Flexibles, foil, laminados, aluminios, impresión, tapas, sachet, vasos." />
  <meta name="Description" lang="es" content="Los usuarios en bioempak.com podrán encontrar noticias y últimas novedades de nuestra empresa, información oportuna y actualizada de toda nuestra línea de productos, podrán encontrar un medio abierto de información en donde podrá interactuar dejándonos sus comentarios y/o sugerencias, una página dinámica y moderna, que le permitirá tanto a los usuarios como a Bioempak estar en contacto con sus clientes. ¿Que esperan los usuarios? Los usuarios que hagan parte de Bioempak, esperan tener información a tiempo y respuesta oportuna a sus sugerencias y comentarios, esperan noticias actualizadas e información que sea útil en sus desarrollos, esperan estar informados de todos los cambios y proyectos que tenga Bioempak." />
  <script type="text/javascript" src="../assets/js/jquery-1.6.1.min.js"></script>
  <script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-43470868-1', 'bioempka.com');
		ga('send', 'pageview');
	</script>
  <script type="text/javascript" src="../assets/js/jquery.selectbox-0.1.3.js"></script>
  <script type="text/javascript">document.documentElement.className += " js";</script>
  <script type="text/javascript" src="../assets/js/jquery.mousewheel.min.js"></script>
  <script type="text/javascript" src="../assets/js/jquery.carousel-1.1.js"></script>
  <script src="../assets/js/jquery.tabs.js" type="text/javascript" charset="utf-8"></script>
  <!--<script type="text/javascript" src="../../w.sharethis.com/button/buttons.js"></script>-->
  <script type="text/javascript">stLight.options({publisher: "0f2cec6c-d1e2-4b5a-b235-2317351f4b57"});</script>
  <script type="text/javascript">
		$(document).ready(function(){
			$(".tabs").accessibleTabs({
				tabhead:'h2',
				fx:"fadeIn"
			});
			$('.carousel').carousel({hAlign:'center', vAlign:'center', hMargin:0.7, directionNav:true, buttonNav:'false'});
			$('.bg_noticia1').click(function() {
				$('.detalle_noticia1').fadeOut('medium', function() {
					// Animation complete
				});
			});
			$('.bg_cotiza').click(function() {
				$('.form_cotiza').fadeOut('medium', function() {
					// Animation complete
				});
			});
			$('.registro').click(function() {
					$('#registro').fadeIn('medium', function() {
							// Animation complete
					});
			});
			
			$('#enviando').click(function() {
				$('#form').fadeIn('medium', function() {
					// Animation complete
				});
			});
			
			$('.bg_cotiza').click(function() {
				$('#form').fadeOut('medium', function() {
					// Animation complete
				});
			});
			
			$('.btn_cerrar').click(function() {
				$('.form_cotiza').fadeOut('medium', function() {
					// Animation complete
				});
			});
			
			$('.recovery1').click(function() {
				$('.ingreso').fadeOut('medium', function() {
					// Animation complete
				});
				$('#recovery').fadeIn('medium', function() {
							// Animation complete
					});
			});
			               
			$("#country_id7").change(function(){
									var valor = $("#country_id7 option:selected").val();
									if(valor == "empresa") { $("#empresa_r").show(); }
									else { $("#empresa_r").hide(); }
								});
		});
		
		function calificar(id){
					jQuery.ajax({
						 url  :   '<?php echo base_url(); ?>site/calificar',
						 type :   'POST',
						 data :   {
								 'noticia'	: jQuery(id).attr("data-id"),
								 'calificacion'		: jQuery(id).val()
						 },
						 success:function(data){
							 if(data.save == true) alert("Se registro su calificación. Gracias");
							 else alert("No se pudo registrar su calificación. Disculpe las molestias. Gracias");
						 }
					});
		};
			
		$(function () {
			$("#country_id").selectbox();
			$("#country_id2").selectbox();
			$("#country_id3").selectbox();
			$("#country_id4").selectbox();
			$("#country_id5").selectbox();
			$("#country_id6").selectbox();
			$("#country_id7").selectbox();
		});
  </script>
  <style type="text/css">
		.noticias_on {
			background: url(../assets/img/bg_menu_item.png) bottom;
			color: #1d5b8f !important;
		}
  </style>
  <script src="../assets/js/jquery.uniform.js"></script>
  <script type="text/javascript" src="../assets/js/jquery.scrollTo-1.4.2-min.js"></script>
  <script type="text/javascript">
  (function($) { 
  $(function() {
  $(":radio").uniform();
  });
  })(jQuery);
  </script>
  <script src="../assets/js/jquery.jscrollpane.js"></script>
  <script src="../assets/js/jquery.mousewheel.js"></script>
  <script src="../assets/js/jquery.paginador.js"></script>
  <script type="text/javascript">
  $(document).ready(function () {
  $('.text-noticia').jScrollPane({verticalDragMinHeight: 29,verticalDragMaxHeight: 29});
  //PAGINADOR
  $("ul.pagination1").quickPagination({pagerLocation:"button",pageSize:"10"});
  });
  </script>
  <script src="../assets/js/jquery.slider.js"></script>
  <script>
  //Slider
  $(function(){
		$('.item-noticias').bxSlider({
			mode: 'horizontal',
			captions: true,
			auto: false,
			controls: true,
			speed: 500,
			adaptiveHeight: true,
			pagerType: 'full'
		});
  });
  </script>
</head>
<body>
  	<?php require_once("header.php"); ?>
  <div class="content">
    <div class="content_noticia1 clearfix content_tecno1">
      <h1 class="tittle_tecno">Noticias de <span class="light_blue">Interés</span></h1>
      <h3><?= $intro[0]->texto ?></h3><br />
      <div class="sombra_slide3 "></div>
      <div class="sombra_bottom1"></div>
      <div class="sombra_left2 clearfix"></div>
      <div class="sombra_right2"></div>
      <div class="slider-noticias">
        <ul class="item-noticias">
          <?php foreach($noticias as $noticia): ?>
          <li>
            <div class="content_noticia-blog">
            	<?php if(!empty($noticia->imagen)) : ?>
            	<img src="<?= base_url() . "/assets/news_img/" . $noticia->imagen . "?" . strtotime("now"); ?>" width="468" height="300" />
              <?php endif; ?>
              <h2>
                <?php
									$titulo = explode(" ", $noticia->titulo);
									echo $titulo[0];
									unset($titulo[0]);
									$titulo = implode(" ", $titulo);
									if(!empty($titulo)) : echo ' <span class="light_blue">Ipsum</span>'; endif;
								?>
              </h2>
              <h4><?php echo $noticia->fecha;?></h4>
              <div class="text-noticia">
                <p class="p-noticia" id="<?php echo $noticia->id;?>"> <?php echo $noticia->texto;?> </p>
              </div>
              <div class="clear"></div>
              <div class="marco-calificador">
              	<?php if(isset($session) and isset($session['logged_in'])) : ?>
                <div class="titulo-calificador">Calificar noticia:</div>
                <form action="" id="calificacion" method="post" data-id="<?= $noticia->id ?>">
                  <table class="calificador">
                    <tr>
                      <td><input onclick="calificar(this)" type="radio" value="3" name="5" id="5" class="styled" data-id="<?= $noticia->id ?>" /></td>
                      <td><label for="5">Bueno</label></td>
                    </tr>
                    <tr>
                      <td><input onclick="calificar(this)" type="radio" value="2" name="5" id="7" class="styled" data-id="<?= $noticia->id ?>" /></td>
                      <td><label for="7">Neutro</label></td>
                    </tr>
                    <tr>
                      <td><input onclick="calificar(this)" type="radio" value="1" name="5" id="6" class="styled" data-id="<?= $noticia->id ?>" /></td>
                      <td><label for="6">Malo</label></td>
                    </tr>
                  </table>
                </form>
								<?php endif; ?>
              </div>
              
            </div>
            <?php
							$totalComentarios = 0;
							if(!empty($comentarios)) :
								foreach($comentarios as $comentario) :
									if($comentario->id_noticia == $noticia->id) $totalComentarios++;
								endforeach;
							endif;
						?>
            <h1 class="tittle_tecno"><?= $totalComentarios ?> <span class="light_blue">comentarios</span></h1>
            <div class="marco-comentarios">
            <?php if($totalComentarios > 0) : ?>
              <ul class="pagination1">
                <?php
									foreach($comentarios as $comentario) :
										if($comentario->id_noticia == $noticia->id) :
								?>
                <li class="comentario">
                  <div class="datos-usuarios"> <img src="../assets/img/usuario.png">
                    <h2><?= $comentario->nombre; ?></h2>
                    <time class="date-comentario" datetime="2012-11-24T23:46:08+00:00"><?= $comentario->fecha; ?></time>
                  </div>
                  <div class="clear"></div>
                  <p>
                    <?= $comentario->comentario; ?>
                  </p>
                  <div class="clear"></div>
                  <a href="javascript:$.scrollTo('#form-comentario',800);" class="responder">Responder</a>
								</li>
                <?php
										endif;
									endforeach;
								?>
              </ul>
              <div class="clear"></div>
            <?php endif; ?>
            </div>
            <div class="sombra_slide3"></div>
            <h1 class="tittle_tecno">Deja tu <span class="light_blue">comentario</span></h1>
            <?php if(isset($session) and isset($session['logged_in'])) : ?>
            <form accept-charset="utf-8" method="post" action="comentar" id="formnews<?= $noticia->id ?>">
            <div class="form_contacto clearfix" id="form-comentario">
              <div>
                <textarea name="comentario" rows="5" cols="100" style="height: 83px;" id="comment" onclick="if(this.value=='Comentario')this.value=''" onblur="if(this.value=='')this.value='Comentario'">Comentario</textarea>
                <input type="hidden" value="<?= $noticia->id ?>" name="noticia" id="noticia" />
                <input type="hidden" value="<?= $session['email'] ?>" name="email" id="email" />
                <input type="hidden" value="<?= $session['id'] ?>" name="user" id="user" />
                <div id="err"></div>
              </div>
            </div>
            <a href="#form" onclick="validacomentario('<?= $noticia->id ?>');" class="enviar_contacto" id="enviando btn<?= $noticia->id ?>" style="margin-bottom: 20px;">COMENTAR</a>
            </form>
            <?php else: ?>
            <a href="#form" onclick="formnews('<?= $noticia->id ?>');" class="enviar_contacto" style="margin-bottom: 20px;">INGRESAR</a>
            <?php endif; ?>
            <div class="clear"></div>
          </li>
          <?php endforeach; ?>
        </ul>
        <div class="clear"></div>
      </div>
      <!--Slider Noticia-->
      <div class="clear" id="form-comentario"></div>
    </div>
     <?php include( 'footer.php' ); ?>
  </div>
</div>
<script>
function formnews(id) {
	jQuery('#ingreso').fadeIn('medium');
}

function validacomentario(id) {
	var texto = jQuery("#formnews"+id+" #comment").val();
	if(texto == "Comentario") {
		alert("Escriba su comentario por favor.");
		return false;
	}
	jQuery("#formnews"+id).submit();
}
</script>
</body>

<!-- Mirrored from www.bioempak.com/site/news by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 12 Aug 2013 02:55:22 GMT -->
</html>
<!--Formulario Login-->

<!-----Formulario Registro---->