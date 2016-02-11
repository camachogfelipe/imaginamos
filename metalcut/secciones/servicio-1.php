<?php include("head.php"); ?>
<style type="text/css">
#nav-services, #map-services {color:#ff444b !important;} #nav-services {background:url(assets/img/nav-main-arrow-2.png) right center no-repeat !important;}
</style>
<?php include("header-int.php"); ?>
<script>

    function redirectPorta(idmaterial) {
        window.location = $(".portaH").attr("url") + "&material=" + idmaterial;
    }

    function displayRoscado() {
        //var ajaxLoader = "<img src='../../../../assets/img/ajax-loader.gif' alt='loading...' />"; 
        var tipo = 1
        jQuery("#va-paso-1")
                //.html(ajaxLoader)
                .load('secciones/generaroscado.php', {idtornado: tipo}, function(response) {
            if (response) {
                jQuery("#va-paso-1").css('display', '');
            } else {
                jQuery("#va-paso-1").css('display', 'none');
            }
        });
    }
		
		function displayRanurado(nivel, padre) {
        //var ajaxLoader = "<img src='../../../../assets/img/ajax-loader.gif' alt='loading...' />"; 
        jQuery("#va-paso-"+nivel).load('secciones/generaranurado.php', {nivel: nivel, padre: padre}, function(response) {
            if (response) {
                jQuery("#va-paso-"+nivel).css('display', '');
								jQuery("#va-paso-"+nivel).css('height', '428px');
            } else {
                jQuery("#va-paso-"+nivel).css('display', 'none');
            }
        });
    }
    function displayOpciones(tipo) {
        //var ajaxLoader = "<img src='../../../../assets/img/ajax-loader.gif' alt='loading...' />";  
        jQuery("#va-paso-1")
                //.html(ajaxLoader)
                .load('secciones/generaopcionescilindrado.php', {idtornado: tipo}, function(response) {
            if (response) {
                jQuery("#va-paso-1").css('display', '');
            } else {
                jQuery("#va-paso-1").css('display', 'none');
            }
        });
    }
    
    function displayMateriales(tipo, porta) {
        //var ajaxLoader = "<img src='../../../../assets/img/ajax-loader.gif' alt='loading...' />";  
        jQuery("#va-paso-3")
                //.html(ajaxLoader)
                .load('secciones/generamateriales.php', {idtornado: tipo, porta: porta}, function(response) {
            if (response) {
                jQuery("#va-paso-3").css('display', '');
            } else {
                jQuery("#va-paso-3").css('display', 'none');
            }
        });
    }


    function displayGeometria(tipo, material) {
        //var ajaxLoader = "<img src='../../../../assets/img/ajax-loader.gif' alt='loading...' />";  
        // alert(optionValue);
        jQuery("#va-paso-2")
                //.html(ajaxLoader)
                .load('secciones/generageometria.php', {idtornado: tipo, idmetarial: material}, function(response) {
            if (response) {
                jQuery("#va-paso-2").css('display', '');
            } else {
                jQuery("#va-paso-2").css('display', 'none');
            }
        });
    }
    
    function displayMaterialesInserto(tipo, porta) {
        //var ajaxLoader = "<img src='../../../../assets/img/ajax-loader.gif' alt='loading...' />";  
        jQuery("#va-paso-2")
                //.html(ajaxLoader)
                .load('secciones/generamaterialesinserto.php', {idtornado: tipo, porta: porta}, function(response) {
            if (response) {
                jQuery("#va-paso-2").css('display', '');
            } else {
                jQuery("#va-paso-2").css('display', 'none');
            }
        });
    }
    
    function displayGeometriaInserto(tipo, material) {
        //var ajaxLoader = "<img src='../../../../assets/img/ajax-loader.gif' alt='loading...' />";  
        // alert(optionValue);
        jQuery("#va-paso-3")
                //.html(ajaxLoader)
                .load('secciones/generageometriainserto.php', {idtornado: tipo, idmetarial: material}, function(response) {
            if (response) {
                jQuery("#va-paso-3").css('display', '');
            } else {
                jQuery("#va-paso-3").css('display', 'none');
            }
        });
    }

    function displayAngulo(tipo, material, geometria) {
        //var ajaxLoader = "<img src='../../../../assets/img/ajax-loader.gif' alt='loading...' />";  
        // alert(optionValue);
        jQuery("#va-paso-4")
                //.html(ajaxLoader)
                .load('secciones/generaangulo.php', {idtornado: tipo, idmetarial: material, idgeometria: geometria}, function(response) {
            if (response) {
                jQuery("#va-paso-4").css('display', '');
            } else {
                jQuery("#va-paso-4").css('display', 'none');
            }
        });
    }

    function displayLongitud(tipo, material, geometria, angulo) {
        // var ajaxLoader = "<img src='../../../../assets/img/ajax-loader.gif' alt='loading...' />";  
        // alert(optionValue);
        jQuery("#va-paso-5")
                //.html(ajaxLoader)
                .load('secciones/generalongitud.php', {idtornado: tipo, idmetarial: material, idgeometria: geometria, idangulo: angulo}, function(response) {
            if (response) {
                jQuery("#va-paso-5").css('display', '');
            } else {
                jQuery("#va-paso-5").css('display', 'none');
            }
        });
    }

    function displayEspesor(tipo, material, geometria, angulo, longitud) {
        //var ajaxLoader = "<img src='../../../../assets/img/ajax-loader.gif' alt='loading...' />";  
        jQuery("#va-paso-6")
                //.html(ajaxLoader)
                .load('secciones/generaespesor.php', {idtornado: tipo, idmetarial: material, idgeometria: geometria, idangulo: angulo, idlongitud: longitud}, function(response) {
            if (response) {
                jQuery("#va-paso-6").css('display', '');
            } else {
                jQuery("#va-paso-6").css('display', 'none');
            }
        });
    }

    function displayRadio(tipo, material, geometria, angulo, longitud, espesor) {

        // var ajaxLoader = "<img src='../../../../assets/img/ajax-loader.gif' alt='loading...' />";  
        jQuery("#va-paso-7")
                //.html(ajaxLoader)
                .load('secciones/generaradio.php', {idtornado: tipo, idmetarial: material, idgeometria: geometria, idangulo: angulo, idlongitud: longitud, idespesor: espesor}, function(response) {
            if (response) {
                jQuery("#va-paso-7").css('display', '');
            } else {
                jQuery("#va-paso-7").css('display', 'none');
            }
        });
    }

    function displayTipoCorte(tipo, material, geometria, angulo, longitud, espesor, radio) {
        //var ajaxLoader = "<img src='../../../../assets/img/ajax-loader.gif' alt='loading...' />";  
        jQuery("#va-paso-8")
                //.html(ajaxLoader)
                .load('secciones/generatipocorte.php', {idtornado: tipo, idmetarial: material, idgeometria: geometria, idangulo: angulo, idlongitud: longitud, idespesor: espesor, idradio: radio}, function(response) {
            if (response) {
                jQuery("#va-paso-8").css('display', '');
            } else {
                jQuery("#va-paso-8").css('display', 'none');
            }
        });
    }

    function displayFin(tipo, material, geometria, angulo, longitud, espesor, radio, tipo_corte) {
        //var ajaxLoader = "<img src='../../../../assets/img/ajax-loader.gif' alt='loading...' />";  
        jQuery("#va-paso-9")
                //.html(ajaxLoader)
                .load('secciones/generafin.php', {idtornado: tipo, idmetarial: material, idgeometria: geometria, idangulo: angulo, idlongitud: longitud, idespesor: espesor, idradio: radio, idtipo_corte: tipo_corte}, function(response) {
            if (response) {
                jQuery("#va-paso-9").css('display', '');
            } else {
                jQuery("#va-paso-9").css('display', 'none');
            }
        });
    }

    function ir() {
        var idtipo_inserto = $("#idtipo_inserto").val()
        var idmaterial = $("#idmaterial").val()
        var idgeometria = $("#idgeometria").val()
        var idangulo = $("#idangulo").val()
        var idlongitud = $("#idlongitud").val()
        var idespesor = $("#idespesor").val()
        var idradio = $("#idradio").val()
        var idtipo_corte = $("#idtipo_corte").val()
        var idproducto_torneado = $("#idproducto").val()
        // alert(idproducto_torneado)
        // $(location).attr('href','index.php?seccion=torneado&id1='+idtipo_inserto+'&id2='+idmaterial+'&id3='+idgeometria+'&id4='+idangulo+'&id5='+idlongitud+'&id6='+idespesor+'&id7='+idradio+'&id8='+idtipo_corte);
        $(location).attr('href', 'index.php?seccion=torneado&id1=' + idproducto_torneado);
    }


    /* $(':submit').click(function(event) {
     var idtipo_inserto=$("#idtipo_inserto").val
     var idmaterial=$("#idmaterial").val
     var idgeometria=$("#idgeometria").val
     var idangulo=$("#idangulo").val
     var idlongitud=$("#idlongitud").val
     var idespesor=$("#idespesor").val
     var idradio=$("#idradio").val
     var idtipo_corte=$("#idtipo_corte").val
     evento.preventDefault();
     $.ajax({
     type :"post",
     url : "index.php?base&seccion=torneado",
     data : "idtipo_inserto="+idtipo_inserto+"&idmaterial="+idmaterial+"&idgeometria="+idgeometria+"&idangulo="+idangulo+"&idlongitud="+idlongitud+"&idespesor="+idespesor+"&idradio="+idradio+"&idtipo_corte="+idtipo_corte,
     beforeSend :function()
     {
     //En esta sección podemos poner un aviso de cargando. Para este ejmplo estoy poniendo el aviso dentro de un div
     $("#visor_mensajes").html("Procsado");
     },
     success:function(respuesta){
     $("#visor_mensajes").html("Datos procesados la respuesta fue del PHP fue "+respuesta);
     }
     });
     });*/

</script>
<?php
$cCilindrado = new Dbcilindrado();
$mDataC = array("where" => "idcilindrado=1");
$cilindrado = $cCilindrado->getListOne($mDataC);

$cOpc_cilindrado = new Dbopciones_cilindrado();
$Opc_cilindrado = $cOpc_cilindrado->getList();

$cAlesado = new Dbalesado();
$mDataA = array("where" => "idalesado=1");
$alesado = $cAlesado->getListOne($mDataA);

$cRanurado = new Dbranurado();
$mDataR = array("where" => "idranurado=1");
$ranurado = $cRanurado->getListOne($mDataR);

$cRoscado = new Dbroscado();
$mDataRo = array("where" => "idroscado=1");
$roscado = $cRoscado->getListOne($mDataRo);

$porta = new Dbportafolio_servicios();
$mData = array("where" => "id=1");
$objPorta = $porta->getListOne($mData);
?>
<section>
  <div class="con-section">
    <div class="mg-section clearfix">
      <div class="con-arbol"> 
        <!--Paso 0-->
        <div class="con-paso">
          <h1><?php echo $objPorta['titulo']?></h1>
          <div class="paso">
            <ul class="slider-tree">
              <li>
                <div class="paso-item">
                  <h1><?php echo $cilindrado['titulo'] ?></h1>
                  <div class="paso-img"><img src="assets/img/cilindrado/<?php echo $cilindrado['imagen'] ?>" width="191" height="98" alt=""></div>
                  <div class="paso-info">
                    <div class="scroll-wrap">
                      <p><?php echo $cilindrado['texto'] ?></p>
                    </div>
                  </div>
                  <a href="#va-paso-1" class="vn-nav paso-item-p1" data-id="con-paso-1" onclick="displayOpciones('C')">
                  <div class="paso-bt"></div>
                  </a> </div>
              </li>
              <li>
                <div class="paso-item">
                  <h1><?php echo $alesado['titulo'] ?></h1>
                  <div class="paso-img"><img src="assets/img/alesado/<?php echo $alesado['imagen'] ?>" width="191" height="98" alt=""></div>
                  <div class="paso-info">
                    <div class="scroll-wrap">
                      <p><?php echo $alesado['texto'] ?></p>
                    </div>
                  </div>
                  <a href="#va-paso-1" class="vn-nav paso-item-p1" data-id="con-paso-1" onclick="displayOpciones('A')">
                  <div class="paso-bt"></div>
                  </a> </div>
              </li>
              <li>
                <div class="paso-item">
                  <h1><?php echo $ranurado['titulo'] ?></h1>
                  <div class="paso-img"><img src="assets/img/ranurado/<?php echo $ranurado['imagen'] ?>" width="191" height="98" alt=""></div>
                  <div class="paso-info">
                    <div class="scroll-wrap">
                      <p><?php echo $ranurado['texto'] ?></p>
                    </div>
                  </div>
                  <?php if($ranurado['paso'] != "S") : ?>
                  <a href="index.php?base&seccion=torneado-ranurado" class="vn-nav paso-item-p1">
                  <div class="paso-bt-vn"></div>
                  </a>
                  <?php else : ?>
                  <a href="#va-paso-1" class="vn-nav paso-item-p1" onclick="displayRanurado('1', '1')" data-id="con-paso-1">
                  <div class="paso-bt"></div>
                  </a>
                  <?php endif;?>
                </div>
              </li>
              <li>
                <div class="paso-item">
                  <h1><?php echo $roscado['titulo'] ?></h1>
                  <div class="paso-img"><img src="assets/img/roscado/<?php echo $roscado['imagen'] ?>" width="191" height="98" alt=""></div>
                  <div class="paso-info">
                    <div class="scroll-wrap">
                      <p><?php echo $roscado['texto'] ?></p>
                    </div>
                  </div>
                  <a href="#va-paso-1" class="vn-nav paso-item-p1" onclick="displayRoscado()" data-id="con-paso-1">
                  <div class="paso-bt"></div>
                  </a> </div>
              </li>
            </ul>
          </div>
        </div>
        <!--Fin paso 0--> 
        <!--Paso 1-->
        <div class="con-paso con-paso-1" id="va-paso-1"> </div>
        <!--Fin paso 1--> 
        <!--Paso 2-->
        <div class="con-paso con-paso-1-1" id="va-paso-2"> </div>
        <!--Fin paso 2--> 
        <!--Paso 3-->
        <div class="con-paso con-paso-1-1-1" id="va-paso-3"> </div>
        <!--Fin paso 3--> 
        <!--Paso 4-->
        <div class="con-paso con-paso-1-1-1-1" id="va-paso-4"> </div>
        <!--Fin paso 4--> 
        <!--Paso 5-->
        <div class="con-paso con-paso-1-1-1-1-1" id="va-paso-5"> </div>
        <!--Fin paso 5--> 
        <!--Paso 6-->
        <div class="con-paso con-paso-1-1-1-1-1-1" id="va-paso-6"> </div>
        <!--Fin paso 6--> 
        <!--Paso 7-->
        <div class="con-paso con-paso-1-1-1-1-1-1-1" id="va-paso-7"> </div>
        <!--Fin paso 7--> 
        <!--Paso 8-->
        <div class="con-paso con-paso-1-1-1-1-1-1-1-1" id="va-paso-8"> </div>
        <!--Fin paso 8--> 
        <div  id="va-paso-9"> </div>
        <!--Paso final-->
        <div class="con-paso con-paso-fn clearfix" id="va-paso-fn"> 
          <!--<form action="torneado.php?seccion=s1" method="post">--> 
          <!--<form action="" method="post">
                            <input type="submit" value="" id="buscar" class="submit-tree">	-->
          <button type="button" class="submit-tree" onclick="ir()" id="buscar"></button>
          <!--</form>--> 
        </div>
        <!--Fin paso final--> 
      </div>
    </div>
  </div>
</section>
<div class="section-sep"></div>
<?php include("footer.php"); ?>