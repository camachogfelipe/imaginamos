
<div id="covfootintecplast2">
 <div id="sepclearfootint"></div>
 <div id="cajonfooter">
  <div id="sepclear3"></div>
  <div id="panelsuscrip">
   <script type="text/javascript">
      $(document).ready(function(){

       function validar_email(valor){
        //creamos nuestra regla con expresiones regulares.
        var filter = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
        // utilizamos test para comprobar si el parametro valor cumple la regla
        if(filter.test(valor)){
        return true;
        }
        else{
        return false;
        }
       }
       // cuando presionamos el boton verificar

       $("#submitform").click(function(){

        if($("#emailsus").val() == ''){
         alert("Ingrese un email");
         document.location.href = "#nombresus";
        }
        else if(validar_email($("#emailsus").val())){
         if ($("#nombresus").val()=='Nombre...'){
          alert("Debe ingresar su nombre");
          document.location.href = "#nombresus";
         }
         else{
          $("#form").submit();
         }
        }
        else{
         alert("El email no es valido");
         document.location.href = "#nombresus";
        }

       });

      });
    </script>

<style type="text/css">
#envmenufoot {
 width:600px !important;
 font-size:11px;
}
</style>
<form action="./php/action/procesarSuscripcion.php" method="post" name="form" id="form">



<div id="bt_suscrip"><a href="#" id="submitform">&nbsp;</a></div>



<div id="campsearch">



<input type="text"  name="nombresus"  id="nombresus" onfocus="if (this.value=='Nombre...'){this.value='';};return false;" onblur="if (this.value==''){this.value='Nombre...';return false;}" value="Nombre..." class="transparente" />

</div>





<div id="campsearch2">

            <input type="text"  name="emailsus"  id="emailsus" onfocus="if (this.value=='E-mail...'){this.value='';};return false;" onblur="if (this.value==''){this.value='E-mail...';return false;}" value="E-mail..." class="transparente" />

</div>



</form>



</div>





<div id="envcolfoot2">

<div id="colum2credfoot" style="margin-top:-15px">

  <span class="nombintec2">Intecplast S.A.</span><br /><br />

Calle 14 #6-54<br />

Entrada No. 1 Zona Industrial<br />

Cazucá Soacha (Cundinamarca)<br />

Tel: 01-8000 114875 - (57) 1 779 90 30<br />
itp@intecplast.com.co<br />

Colombia - Suramérica

</div>

<div id="colum1crednew">

<div id="envmenufoot" style="width:660px !important">

<div id="bt_footl"><a href="index.php">Inicio </a></div>
<div id="bt_footl"><a href="trabaje_connosotros.php">Trabaje con nosotros </a></div>
<div id="bt_footl"><a href="acercade_nosotros.php">Acerca de nosotros </a></div>
<div id="bt_footl"><a href="promociones.php">Promociones </a></div>
<div id="bt_footl"><a href="puntos_venta.php">Puntos de venta </a></div>
<div id="bt_footl"><a href="noticias.php">Noticias</a></div>
<div id="bt_footl"><a onclick="window.open('chat.php','', 'width=264, height=380, location=no, menubar=no, status=no,toolbar=no, scrollbars=yes, resizable=no'); return false">Chat </a></div>

<div id="bt_footl"><a href="mercados.php">Mercados</a></div>

<div id="bt_footl"><a href="productos.php">Productos</a></div>

<div id="bt_footl"><a href="catalogo.php">Catálogo</a></div>

<div id="bt_footl"><a href="ingenieria_productodiseno.php">Ingeniería de producto y diseño</a></div>
<div id="bt_footl"><a href="responsabilidad_social.php">Responsabilidad Social</a></div>
<div id="bt_footl" style="background:none; border:none"><a href="contactenos.php" style="background:none; border:none">Contactenos</a></div>



</div>





<div id="creditsfoot">


<div id="imgiso"><img src="images/imgiso.png" width="60" height="73" /></div>



<div id="padcred">Copyright &copy; Intecplast. Todos los derechos reservados. </div></div>





<div id="creditsfoot">
<div id="footimaginamos"><a href="http://www.imaginamos.com" target="_blank">Diseño web</a>: <a  href="http://www.imaginamos.com" target="_blank">Imagin<span class="Estilo1">a</span>mos.com</a></div>
<!--<div id="bt_twitt"><a href="#nogo">&nbsp;</a></div>

<div id="bt_face"><a href="#nogo">&nbsp;</a></div>-->


</div>





</div>





</div>



</div>

</div>


<?php if ($_GET['add']==1):?>



  <link rel="stylesheet" type="text/css" href="./admin/noty/css/jquery.noty.css"/>

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>



  <script type="text/javascript" src="./admin/noty/js/jquery.noty.js"></script>





    <script>



        $('.ex1.alert').ready(function() {

           noty({"text":"Suscripción Realizada Exitosamente!","layout":"center","type":"alert","textAlign":"center","easing":"swing","animateOpen":{"height":"toggle"},"animateClose":{"height":"toggle"},"speed":"500","timeout":"5000","closable":true,"closeOnSelfClick":true});

        });

    </script>





<?php endif; ?>



<?php if ($_GET['promoSend']==1):?>



  <link rel="stylesheet" type="text/css" href="./admin/noty/css/jquery.noty.css"/>

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>



  <script type="text/javascript" src="./admin/noty/js/jquery.noty.js"></script>





    <script>



        $('.ex1.alert').ready(function() {

           noty({"text":"Solicitud de Información Envíada Exitosamente!","layout":"center","type":"alert","textAlign":"center","easing":"swing","animateOpen":{"height":"toggle"},"animateClose":{"height":"toggle"},"speed":"500","timeout":"5000","closable":true,"closeOnSelfClick":true});

        });

    </script>





<?php endif; ?>



<?php if ($_GET['contactoSend']==1):?>



  <link rel="stylesheet" type="text/css" href="./admin/noty/css/jquery.noty.css"/>

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>



  <script type="text/javascript" src="./admin/noty/js/jquery.noty.js"></script>





    <script>



        $('.ex1.alert').ready(function() {

           noty({"text":"Información de Contácto Enviada Exitosamente!","layout":"center","type":"alert","textAlign":"center","easing":"swing","animateOpen":{"height":"toggle"},"animateClose":{"height":"toggle"},"speed":"500","timeout":"5000","closable":true,"closeOnSelfClick":true});

        });

    </script>





<?php endif; ?>



<?php if ($_GET['send']==1):?>



  <link rel="stylesheet" type="text/css" href="./admin/noty/css/jquery.noty.css"/>

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>



  <script type="text/javascript" src="./admin/noty/js/jquery.noty.js"></script>


<?php 

  $m = basename($_SERVER['REQUEST_URI']);
  $m = explode('?', $m);

  
 ?>



    <script>



        $('.ex1.alert').ready(function() {

           noty({"text":"Información Enviada Exitosamente!","layout":"center","type":"alert","textAlign":"center","easing":"swing","animateOpen":{"height":"toggle"},"animateClose":{"height":"toggle"},"speed":"500","timeout":"5000","closable":true,"closeOnSelfClick":true});

              setTimeout("location.href = './<?php echo $m[0] ?>';",3000);
              //location.href = "./<?php echo $m[0] ?>";


        });

    </script>




<?php endif; ?>



<?php if ($_GET['error']==1):?>



  <link rel="stylesheet" type="text/css" href="./admin/noty/css/jquery.noty.css"/>

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>



  <script type="text/javascript" src="./admin/noty/js/jquery.noty.js"></script>





    <script>



        $('.ex1.alert').ready(function() {

           noty({"text":"Usted Dispone de Usuario y Contraseña Para Nuestro Sitio .Ingrese su Usuario y Contraseña para procesar su cotización","layout":"center","type":"alert","textAlign":"center","easing":"swing","animateOpen":{"height":"toggle"},"animateClose":{"height":"toggle"},"speed":"500","timeout":"5000","closable":true,"closeOnSelfClick":true});

        });

    </script>





<?php endif; ?>



<?php if ($_GET['error']==2):?>



  <link rel="stylesheet" type="text/css" href="./admin/noty/css/jquery.noty.css"/>

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>



  <script type="text/javascript" src="./admin/noty/js/jquery.noty.js"></script>





    <script>



        $('.ex1.alert').ready(function() {

           noty({"text":"Usted no se encuentra registrado por favor diligencie el formulario de cotización.","layout":"center","type":"alert","textAlign":"center","easing":"swing","animateOpen":{"height":"toggle"},"animateClose":{"height":"toggle"},"speed":"500","timeout":"5000","closable":true,"closeOnSelfClick":true});

        });

    </script>





<?php endif; ?>



<?php if ($_GET['error']==3):?>



  <link rel="stylesheet" type="text/css" href="./admin/noty/css/jquery.noty.css"/>

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>



  <script type="text/javascript" src="./admin/noty/js/jquery.noty.js"></script>





    <script>



        $('.ex1.alert').ready(function() {

           noty({"text":"La Contraseña Ingresada Es Incorrecta","layout":"center","type":"error","textAlign":"center","easing":"swing","animateOpen":{"height":"toggle"},"animateClose":{"height":"toggle"},"speed":"500","timeout":"5000","closable":true,"closeOnSelfClick":true});

        });

    </script>





<?php endif; ?>



<?php if ($_GET['errorSuscripcion=']==1):?>



  <link rel="stylesheet" type="text/css" href="./admin/noty/css/jquery.noty.css"/>

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>



  <script type="text/javascript" src="./admin/noty/js/jquery.noty.js"></script>





    <script>



        $('.ex1.alert').ready(function() {

           noty({"text":"La Contraseña Ingresada Es Incorrecta","layout":"center","type":"error","textAlign":"center","easing":"swing","animateOpen":{"height":"toggle"},"animateClose":{"height":"toggle"},"speed":"500","timeout":"5000","closable":true,"closeOnSelfClick":true});

        });

    </script>





<?php endif; ?>