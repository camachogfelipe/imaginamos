<?php session_start();?>
<?php

require_once '../php/clases.php';

if( !isset($_SESSION['admin']) ){
    header("location: ./index.php");
    exit;
}

$claseDAO = new claseDAO(); $clase = new clase(); $clases = $claseDAO->gets(); $totalClase = $claseDAO->total();

?>


<!doctype html>
<head>
  <title>.::Clases</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="Adición de Clases">
  <meta name="author" content="@James_Garciap">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/modules.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="noty/css/jquery.noty.css"/>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
 
  <script>

   $(document).ready(function() {
    document.getElementById("form_principal").style.height="400px";
  });

  </script> 




            <script type="text/javascript" src="./js/jquery-ui-1.8.23.custom.min.js"></script>
            <link type="text/css" href="./css/custom_smoothness/jquery-ui-1.8.23.custom.css" rel="stylesheet" />



</head>
</head>
<body>




 <script>
    $(function() {

         $( "#productoBase" ).autocomplete({
            source: function( request, response ) {
                $.ajax({
                    url: "./getProductoBase.php",
                    type: "GET",
                    dataType: "json",
                    data: { name_startsWith: request.term, codigoBase: $("#claseBase").val() },
                    success: function( data ) {
                        response( $.map( data.categorias, function( item ) {
                            return {
                                label: item.name ,
                                value: item.name
                            }
                        }));
                    }
                });
            },
            minLength: 2,
            select: function( event, ui ) {
                $("#productoBase").val(ui.item.name);
            },
            open: function() {
                $( this ).removeClass( "ui-corner-all" ).addClass( "ui-corner-top" );
            },
            close: function() {
                $( this ).removeClass( "ui-corner-top" ).addClass( "ui-corner-all" );
            }
        });
    });

    </script>


 <script>
    $(function() {

         $( "#productoComplemento" ).autocomplete({
            source: function( request, response ) {
                $.ajax({
                    url: "./getProductoComplemento.php",
                    type: "GET",
                    dataType: "json",
                    data: { name_startsWith: request.term, productoComplemento: $("#claseComplemento").val() },
                    success: function( data ) {
                        response( $.map( data.categorias, function( item ) {
                            return {
                                label: item.name ,
                                value: item.name
                            }
                        }));
                    }
                });
            },
            minLength: 2,
            select: function( event, ui ) {
                $("#productoComplemento").val(ui.item.name);
            },
            open: function() {
                $( this ).removeClass( "ui-corner-all" ).addClass( "ui-corner-top" );
            },
            close: function() {
                $( this ).removeClass( "ui-corner-top" ).addClass( "ui-corner-all" );
            }
        });
    });

    </script>

    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css" />
 
<div class="titulos">
    <div class="titulos_texto1">Productos
      <div class="cerrar">
        <a href="../php/action/logout.php">
          <img src="imagenes/contenido/cerrar.png" alt="Cerrar Sesi&oacute;n" border="0" />
        </a>
      </div>
    </div>
</div>
<!--Fin Titulos-->
<div class="contenido_marco_sup"></div>
<div class="contenido_fondo">
  <div class="subcontenido">

    <div class="subtitulos">
        Agregar Nuevo Ensamble.
    </div>  

  </div>
  <div class="subcontenido2">
	<div id="container">

		<div id="form_principal">
		<h3>Nuevo Ensamble</h3>

			<form method="post" id="form1" name="form1" action="./../php/action/ensambleAdd.php" enctype="multipart/form-data">
      <div class="left">
        
        <label for="clase">Clase de Producto Base:</label>
          <select name='claseBase' id='claseBase'>
              <option>Seleccione una clase</option>
          <?php if($totalClase>0): ?>
            <?php foreach ($clases as $clase): ?>
              
              <option value="<?php echo $clase->getid() ?>"><?php echo $clase->getnombre_e() ?></option>  

            <?php endforeach; ?>
          <?php endif; ?>
          </select>            

          <div id="base">
                    <label for="productoBase">Producto Base:</label>
                    <input id="productoBase" name="codigoBase" value="" />
                </select>
          </div>

        
        </div>
        <!--Fin Columna Izquierda-->
        
        <!--Columna derecha-->
        <div class="right">
        
          <label for="clase">Clase de Producto Complemento:</label>
          <select name='claseComplemento' id='claseComplemento'>
             <option>Seleccione una clase</option>
<?php if($totalClase>0): ?>
            <?php foreach ($clases as $clase): ?>
              
              <option value="<?php echo $clase->getid() ?>"><?php echo $clase->getnombre_e() ?></option>  

            <?php endforeach; ?>
          <?php endif; ?>
          </select>            

          <div id="complemento">
          <label for="productoComplemento">Producto Complemento:</label>
                    <input id="productoComplemento" name="codigoComplemento" value="" />
                </select>
          </div>

        </div>
        <!--Fin Columna Izquierda-->

        <label for="nombre">Imagen:</label>
				<input type="file" id="imagen" name="imagen"/>
				
				
				<div class="actions">
					<input type="submit" name="submit" value="Guardar">
					<button type="reset">Deshacer</button>
					<button class="red" type="button" onclick="window.open('menuAdmin.php?s=miscelanea','_top');" >Volver</button>			
				</div>

			</form>

		</div>
	</div>
  </div>
</div>
<?php if ($_GET['error']==1):?>
  <link rel="stylesheet" type="text/css" href="noty/css/jquery.noty.css"/>


  <script type="text/javascript" src="noty/js/jquery.noty.js"></script>


    <script>

        $('.ex1.alert').ready(function() {
           noty({"text":"El valor ingresado en la base no existe","layout":"center","type":"error","textAlign":"center","easing":"swing","animateOpen":{"height":"toggle"},"animateClose":{"height":"toggle"},"speed":"500","timeout":"5000","closable":true,"closeOnSelfClick":true});
        });
    </script>


<?php endif; ?>
<?php if ($_GET['error']==2):?>
  <link rel="stylesheet" type="text/css" href="noty/css/jquery.noty.css"/>


  <script type="text/javascript" src="noty/js/jquery.noty.js"></script>


    <script>

        $('.ex1.alert').ready(function() {
           noty({"text":"El valor ingresado en el complemento no existe","layout":"center","type":"error","textAlign":"center","easing":"swing","animateOpen":{"height":"toggle"},"animateClose":{"height":"toggle"},"speed":"500","timeout":"5000","closable":true,"closeOnSelfClick":true});
        });
    </script>


<?php endif; ?>
<?php if ($_GET['error']==3):?>
  <link rel="stylesheet" type="text/css" href="noty/css/jquery.noty.css"/>


  <script type="text/javascript" src="noty/js/jquery.noty.js"></script>


    <script>

        $('.ex1.alert').ready(function() {
           noty({"text":"La combinación ingresada ya existe en el sistema","layout":"center","type":"error","textAlign":"center","easing":"swing","animateOpen":{"height":"toggle"},"animateClose":{"height":"toggle"},"speed":"500","timeout":"5000","closable":true,"closeOnSelfClick":true});
        });
    </script>


<?php endif; ?>
<div class="contenido_marco_inf"></div>
</body>
</html>