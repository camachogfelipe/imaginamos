<!----------------------------FOOTER INTECPLAST-------------------------------------------->

<div id="covfootintecplast2">





<div id="sepclearfootint"></div>





<div id="cajonfooter">

<div id="sepclear3"></div>

  <div id="panelsuscrip">



<script type="text/javascript">



$(document).ready(function(){

 

    function validar_email(valor)

    {

        // creamos nuestra regla con expresiones regulares.

        var filter = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;

        // utilizamos test para comprobar si el parametro valor cumple la regla

        if(filter.test(valor))

            return true;

        else

            return false;

    }

    // cuando presionamos el boton verificar

    $("#submitform").click(function()

    {

        if($("#emailsus").val() == '')

        {

            alert("Enter an email");

        }else if(validar_email($("#emailsus").val()))

        {

          if ($("#nombresus").val()=='Name...') {

            alert("You must enter your name");

          }else{

            $("#form").submit();

          }

        }else

        {

            alert("The email is not valid");

        }

    });

 

});







</script>



<form action="./php/action/procesarSuscripcion.php" method="post" name="form" id="form">



<div id="bt_suscrip"><a href="#" id="submitform">&nbsp;</a></div>



<div id="campsearch">



<input type="text"  name="nombresus"  id="nombresus" onfocus="if (this.value=='Name...'){this.value='';};return false;" onblur="if (this.value==''){this.value='Name...';return false;}" value="Name..." class="transparente" />

</div>





<div id="campsearch2">

            <input type="text"  name="emailsus"  id="emailsus" onfocus="if (this.value=='E-mail...'){this.value='';};return false;" onblur="if (this.value==''){this.value='E-mail...';return false;}" value="E-mail..." class="transparente" />

</div>



</form>



</div>





<div id="envcolfoot2">

<div id="colum2credfoot"><span class="titdatos2">Contact details </span><br />

  <br />

  <span class="nombintec2">Intecplast S.A.</span><br /><br />

Calle 14 #6-54<br />

Entrada No. 1 Zona Industrial<br />

Cazucá Soacha (Cundinamarca)<br />

Tel: 01-8000 114875 - (57) 1 779 90 30<br />
itp@intecplast.com.co<br />
Colombia - Suramérica

</div>

<div id="colum1crednew">

<div id="envmenufoot">

<div id="bt_footl"><a href="index.php">Home</a></div>
<div id="bt_footl"><a href="acercade_nosotros.php">About us</a></div>
<div id="bt_footl"><a href="promociones.php">Promotions </a></div>
<div id="bt_footl"><a href="puntos_venta.php">Locator</a></div>
<div id="bt_footl"><a href="noticias.php">News </a></div>
<div id="bt_footl"><a href="mercados.php">Markets</a></div>

<div id="bt_footl"><a href="productos.php">Products</a></div>

<div id="bt_footl"><a href="catalogo.php">Catalogue</a></div>

<div id="bt_footl"><a href="ingenieria_productodiseno.php">Product Engineering and Design</a></div>

<div id="bt_footl"><a href="responsabilidad_social.php">Social responsibility </a></div>
<div id="bt_footl"><a onclick="window.open('chat.php','', 'width=264, height=380, location=no, menubar=no, status=no,toolbar=no, scrollbars=yes, resizable=no'); return false">Chat </a></div>
<div id="bt_footl"><a href="contactenos.php">Contact Us</a></div>


</div>





<div id="creditsfoot">




<div id="imgiso"><img src="images/imgiso.png" width="60" height="73" /></div>
<div id="padcred">Copyright &copy; Intecplast. All rights reserved. </div></div>





<div id="creditsfoot">
<div id="footimaginamos"><a href="http://www.imaginamos.com" target="_blank">Web Design</a>: <a  href="http://www.imaginamos.com" target="_blank">Imagin<span class="Estilo1">a</span>mos.com</a></div>
<!--<div id="bt_twitt"><a href="#nogo">&nbsp;</a></div>

<div id="bt_face"><a href="#nogo">&nbsp;</a></div>-->



</div>





</div>





</div>



</div>

</div>

<!----------------------------FIN FOOTER INTECPLAST-------------------------------------------->

<?php if ($_GET['add']==1):?>



  <link rel="stylesheet" type="text/css" href="../admin/noty/css/jquery.noty.css"/>

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>



  <script type="text/javascript" src="../admin/noty/js/jquery.noty.js"></script>





    <script>



        $('.ex1.alert').ready(function() {

           noty({"text":"Subscription Successfully Held!","layout":"center","type":"alert","textAlign":"center","easing":"swing","animateOpen":{"height":"toggle"},"animateClose":{"height":"toggle"},"speed":"500","timeout":"5000","closable":true,"closeOnSelfClick":true});

        });

    </script>





<?php endif; ?>



<?php if ($_GET['promoSend']==1):?>



  <link rel="stylesheet" type="text/css" href="../admin/noty/css/jquery.noty.css"/>

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>



  <script type="text/javascript" src="../admin/noty/js/jquery.noty.js"></script>





    <script>



        $('.ex1.alert').ready(function() {

           noty({"text":"Request for Information sent Successfully!","layout":"center","type":"alert","textAlign":"center","easing":"swing","animateOpen":{"height":"toggle"},"animateClose":{"height":"toggle"},"speed":"500","timeout":"5000","closable":true,"closeOnSelfClick":true});

        });

    </script>





<?php endif; ?>



<?php if ($_GET['contactoSend']==1):?>



  <link rel="stylesheet" type="text/css" href="../admin/noty/css/jquery.noty.css"/>

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>



  <script type="text/javascript" src="../admin/noty/js/jquery.noty.js"></script>





    <script>



        $('.ex1.alert').ready(function() {

           noty({"text":"Contact Information Sent Successfully!","layout":"center","type":"alert","textAlign":"center","easing":"swing","animateOpen":{"height":"toggle"},"animateClose":{"height":"toggle"},"speed":"500","timeout":"5000","closable":true,"closeOnSelfClick":true});

        });

    </script>





<?php endif; ?>



<?php if ($_GET['send']==1):?>



  <link rel="stylesheet" type="text/css" href="../admin/noty/css/jquery.noty.css"/>

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>



  <script type="text/javascript" src="../admin/noty/js/jquery.noty.js"></script>

<?php 

  $m = basename($_SERVER['REQUEST_URI']);
  $m = explode('?', $m);

  
 ?>




    <script>



        $('.ex1.alert').ready(function() {

           noty({"text":"Information Sent Successfully!","layout":"center","type":"alert","textAlign":"center","easing":"swing","animateOpen":{"height":"toggle"},"animateClose":{"height":"toggle"},"speed":"500","timeout":"5000","closable":true,"closeOnSelfClick":true});
            setTimeout("location.href = './<?php echo $m[0] ?>';",3000);

        });

    </script>





<?php endif; ?>



<?php if ($_GET['error']==1):?>



  <link rel="stylesheet" type="text/css" href="../admin/noty/css/jquery.noty.css"/>

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>



  <script type="text/javascript" src="../admin/noty/js/jquery.noty.js"></script>





    <script>



        $('.ex1.alert').ready(function() {

           noty({"text":"You have a username and password for our site. Enter your username and password to process your quote","layout":"center","type":"alert","textAlign":"center","easing":"swing","animateOpen":{"height":"toggle"},"animateClose":{"height":"toggle"},"speed":"500","timeout":"5000","closable":true,"closeOnSelfClick":true});

        });

    </script>





<?php endif; ?>



<?php if ($_GET['error']==2):?>



  <link rel="stylesheet" type="text/css" href="../admin/noty/css/jquery.noty.css"/>

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>



  <script type="text/javascript" src="../admin/noty/js/jquery.noty.js"></script>





    <script>



        $('.ex1.alert').ready(function() {

           noty({"text":"You are not registered please fill out the quote form.","layout":"center","type":"alert","textAlign":"center","easing":"swing","animateOpen":{"height":"toggle"},"animateClose":{"height":"toggle"},"speed":"500","timeout":"5000","closable":true,"closeOnSelfClick":true});

        });

    </script>





<?php endif; ?>



<?php if ($_GET['error']==3):?>



  <link rel="stylesheet" type="text/css" href="../admin/noty/css/jquery.noty.css"/>

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>



  <script type="text/javascript" src="../admin/noty/js/jquery.noty.js"></script>





    <script>



        $('.ex1.alert').ready(function() {

           noty({"text":"The password you entered is incorrect","layout":"center","type":"error","textAlign":"center","easing":"swing","animateOpen":{"height":"toggle"},"animateClose":{"height":"toggle"},"speed":"500","timeout":"5000","closable":true,"closeOnSelfClick":true});

        });

    </script>





<?php endif; ?>