<?php 


    @session_start();

    include("./admin/core/class/db.class.php");
        include_once './../php/clases.php';

    //Creamos el nuevo objeto "Database"
    $db = new Database();
    //Conectamos
    $db->connect();

    $categoriasDAO = new categoriasDAO;
    $categorias = new categorias();
    $categorias = $categoriasDAO->gets();

    $subcategoriasDAO = new subcategoriasDAO;
    $subcategorias = new subcategorias();
    $subcategorias = $subcategoriasDAO->gets();



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.: Contacto | MATERIALIZANDO :.</title>
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
<meta name="Keywords" lang="es" content="palabras clave" />
<meta name="Description" lang="es" content="texto empresarial" />
<meta name="date" content="2011" />
<meta name="author" content="diseño web: imaginamos.com" />
<meta name="robots" content="All" />

<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/jquery.fancybox.css" rel="stylesheet" type="text/css" media="screen" />

<!--[if lt IE 8]>
		<link rel="stylesheet" type="text/css" href="css/style_ie7.css" />
        <div style=' clear: both; text-align:center; position: relative;'>
            <a href="http://windows.microsoft.com/es-XL/internet-explorer/downloads/ie">
            <img src="images/IE.jpg" border="0" height="65" width="820" alt="Usted está usando una versión desactualizada de Internet Explorer. Por favor actualicelo ahora." />
            </a>
        </div>
<![endif]-->
<!--[if lt IE 9]>
	<link rel="stylesheet" type="text/css" href="css/style_ie.css" />
<![endif]-->

<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="js/jquery.fancybox.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('.fancybox').fancybox();
			$(".fancybox-producto").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',
				helpers : {
				title : {
					type : 'over'
					}
				}
			});
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',
					arrows : false,
					helpers : {
					media : {},
					buttons : {}
				}
			});
	});
</script>
</head>

<body>

<?php include("principalHeader.php"); ?>



<div class="conContenido">

	<div class="conGralContacto">
    	<div class="conContacto">
            <span class="tContacto">CONTÁCTENOS</span><br />
            <span class="pContacto">Si quiere conocer más de <strong>MATERIALIZANDO S.A.S</strong> y sus productos pueden diligenciar completamente el formulario que aparece a continuación, tendremos en cuenta sus datos y atenderemos su solicitud lo más pronto posible.</span>
        </div>
        <div class="conContacto">
            <span class="pContacto"><strong>* Esta página va dirigida a clientes en la ciudad de Bogotá y ciudades periféricas.</strong></span>
        </div>
        
        
        
        		<div class="conFormulario">
                
        
        						<div class="conLabelContacto">
                                    <div class="conTContacto">
                                    	<span class="tFormulario">Nombres y Apellidos:</span>
                                    </div>
                                    <label>
										<input type="text" name="email" class="contacto" value="" />
									</label>
                                </div>
                                
                                <div class="conLabelContacto">
                                    <div class="conTContacto">
                                    	<span class="tFormulario">Email de Contacto:</span>
                                    </div>
                                    <label>
										<input type="text" name="" class="contacto" value="" />
									</label>
                                </div>
                                
                                <div class="conLabelContacto">
                                    <div class="conTContacto">
                                    	<span class="tFormulario">Compañia:</span>
                                    </div>
                                    <label>
										<input type="text" name="" class="contacto" value="" />
									</label>
                                </div>
                                
                                <div class="conLabelContacto">
                                    <div class="conTContacto">
                                    	<span class="tFormulario">Dirección de la Compañia:</span>
                                    </div>
                                    <label>
										<input type="text" name="" class="contacto" value="" />
									</label>
                                </div>
                                
                                <div class="conLabelContacto">
                                    <div class="conTContacto">
                                    	<span class="tFormulario">Teléfono de Contacto:</span>
                                    </div>
                                    <label>
										<input type="text" name="" class="contacto" value="" />
									</label>
                                </div>
                                
                                <div class="conLabelContacto">
                                    <div class="conTContacto">
                                    	<span class="tFormulario">Celular:</span>
                                    </div>
                                    <label>
										<input type="text" name="" class="contacto" value="" />
									</label>
                                </div>
                                
                                <div class="conLabelContacto">
                                    <div class="conTContacto">
                                    	<span class="tFormulario"><strong>Seleccione sus Productos de Interes:</strong></span>
                                    </div>
                                </div>
                                
                                <div class="conLabelContacto">
                                    <div class="conTContacto">
                                    	<span class="tFormulario">Categoría:</span>
                                    </div>
                                    <select name="categoria" id="categoria">
                                        <?php if ($categorias>0): ?>
                                                <option value="0">─ Categoria ─</option>
                                            <?php foreach ($categorias as $item): ?>     
                                                <option value="<?php echo $item->getid() ?>"> <?php echo $item->getnombre() ?> </option>
                                            <?php endforeach ?>
                                        <?php endif ?>
									</select>
                                </div>
                                
                                <div class="conLabelContacto">
                                    <div class="conTContacto">
                                    	<span class="tFormulario">Sub Categoría:</span>
                                    </div>
                                    <select name="subcategoria" id="subcategoria">
                                        <?php if ($subcategorias>0): ?>
                                        <option value="0">─ Sub Categoría ─</option>
                                            <?php foreach ($subcategorias as $item): ?>
                                                <option value="<?php echo $item->getid() ?>"> <?php echo $item->getnombre() ?> </option>
                                            <?php endforeach ?>
                                        <?php endif ?>
								</select>
                                </div>
                                
                                <div class="conLabelComentario">
                                    <div class="conTContacto">
                                    	<span class="tFormulario">Comentarios:</span>
                                    </div>
                                    <label>
										<textarea name="" class="comentario" value="" /></textarea>
									</label>
                                </div>

                                <div class="conBtContacto">
                    				<form>
										<input type="button" class="btContacto" value="Enviar" />
                    				</form>
                    			</div>
        
        		</div>
                
                <div class="conMapa">
                	<div class="titMapa"><span class="tMapa">Área de Cobertura</span></div>
                	<img src="images/mapa.jpg" width="348" height="423" alt="" />
                </div>
        
    </div>

</div>
<?php include("principalFooter.php"); ?>

</body>
</html>