<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6 no-js" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7 no-js" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9 ]><html class="ie ie9 no-js" lang="en"><![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="es"><!--<![endif]-->
       <!-- html5.js for IE less than 9 -->
        <!--[if lt IE 9]>
                <script src="assets/js/lib/html5.js"></script>
        <![endif]-->
    

<head>
  <meta charset="UTF-8"/>
  <meta name="description" content=""/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
  <meta name="google-site-verification" content=""/>
  <meta name="robots" content="All" />
  <meta name="keywords" content="Humans txt" />

  <title>Carrito de compras</title>
   
  <link type="text/plain" rel="author" href="humans.txt" />
  <link rel="shortcut icon" href="favicon.ico" >
  <link rel="stylesheet" href="assets/css/ferreteria.css"/>

  <script src="assets/js/lib/modernizr.min.js"></script>  

</head>
<body>

<?php include('header.php'); ?>	



<!--=======================Inicio Contenido=============================-->
<section class="clearfix wrapper cont_carrito margen">
  <h3 class="titulo">Carrito de <span>compras</span></h3> 
  <article class="clearfix">
    <table border="1" class="tabla1">
      <tbody>
        <tr class="border-bottom">
          <th class="">Nombre del producto</th>
          <th class="">Referencia</th>
          <th class="">Cantidad</th>
          <th class="">Precio de unidad</th>
          <th class="">Borrar</th>
        </tr>
        <tr>
          <td class="">Cerradura 1</td>
          <td class="">123456</td>
          <td class=""><span>3</span></td>
          <td class="">$ 40.000</td>
          <td class=""><img src="assets/imgs/eliminar.png" height="24" width="24" alt=""></td>
        </tr>
        <tr>
          <td class="">Cerradura 2</td>
          <td class="">123456</td>
          <td class=""><span>4</span></td>
          <td class="">$ 60.000</td>
          <td class=""><img src="assets/imgs/eliminar.png" height="24" width="24" alt=""></td>
        </tr>
      </tbody>
    </table>
    <table class="final">
      <tr>
        <td><b>Subtotal:</b></td>
        <td>$209.000</td>
      </tr>
       <tr>
        <td><b>IVA:</b></td>
        <td>$209.000</td>
      </tr>
       <tr>
        <td><b>Total:</b></td>
        <td>$209.000</td>
      </tr>
    </table> 
    <div class="linea2"></div>
    <div class="clearfix pago">
      <a href="productos.php">Seguir Comprando</a>
      <a href="#pagar"  class="popup-with-form">Ir a pagar</a>
    </div>
  </article>
</section>
<!--===Fin Contenido===-->


<!---===========pop-up pagar================-->
<div id="pagar" class="pagar clearfix  white-popup-block">
  <h5 class="titulo">Formulario de <span>compra</span></h5>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, ut, reiciendis, nam iure voluptatum vitae dolorem ab eveniet illo sapiente deleniti nihil. Sapiente, veniam quae qui dolore cumque nesciunt dolor!</p>
  <form class="">
    <fieldset>
      <input type="text" class="validate[required] text-input" placeholder="Nombre o empresa*">
      <input type="text" placeholder="Nombre del contacto">
      <input type="text" class="validate[required,custom[email]]"placeholder="Correo electrónico*">
      <input type="text" class="validate[required] text-input" placeholder="NIT o cédula*">
      <input type="text" class="validate[required] text-input tel"placeholder="Telefono*">
    </fieldset>
    <fieldset>
      <input type="text" class="validate[required] text-input" placeholder="Ciudad*">
      <input type="text" class="validate[required] text-input"placeholder="Dirección*">
      <textarea name="" id="" cols="30" rows="10" placeholder="Comentarios"></textarea>
    </fieldset>
    <div class="clear"></div>
    <div class="terminos clearfix">
      <button class="cerrar2">x</button>
      <div class="texto_ter">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, aspernatur, nesciunt praesentium vero libero laborum iure dicta doloremque consectetur natus nostrum quod perspiciatis officiis in laboriosam soluta adipisci. Nostrum, quisquam.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, vitae, harum, aspernatur illo ducimus quas porro aliquid id accusantium ad aut expedita vero fugit vel ut facere delectus quia corporis!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis rem illum impedit qui voluptatibus vel? Quaerat, ipsa, praesentium tempore animi adipisci quia cumque veniam sed dolor veritatis ullam debitis repellat.</p>
      </div>
    </div>
    <div class="cont_check">
        <div class="check">
          <input type="checkbox">
        </div>
        <a href="javascript:void(0);" class="condiciones">Terminos y condiciones</a>
      </div>
    <input type="submit" Value="Enviar">
  </form>
</div>


<!--=======================Inicio Footer================================-->
<?php include('footer.php'); ?>

<!--===Fin Footer===-->

</body>
</html>