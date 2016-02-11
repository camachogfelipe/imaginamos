<?php 

session_start();

if(!isset($_SESSION['admin']) ){
	header("location: ./index.php");
	exit;
}


require_once '../php/clases.php';

$suscritoDAO = new suscritoDAO(); 
$suscrito = new suscrito(); 
$suscritos = $suscritoDAO->gets(); 
$totalsuscritos = $suscritoDAO->total();

?>


  <style type="text/css" title="currentStyle">
    @import "./datatable/media/css/jquery.dataTables_themeroller.css";
    @import "./datatable/media/css/jquery-ui-1.8.4.custom.css";
    tr{
      height: 30px;

    }

    .boton a{
      color: #FFF;
      text-decoration: none;
    }

    .boton a:visited{
      color: #FFF;
      text-decoration: none;
    }

    .boton a:active{
      color: #FFF;
      text-decoration: none;
    }

    .boton a:hover{
      color: #FFF;
      text-decoration: none;
    }

  </style>

  <script type="text/javascript" language="javascript" src="./datatable/media/js/jquery.js"></script>
  <script type="text/javascript" language="javascript" src="./datatable/media/js/jquery.dataTables.js"></script>
  <script type="text/javascript" charset="utf-8">
      $(document).ready(function() {

        $('#table').dataTable( {
          "sScrollY": 318,
          "bJQueryUI": true,
          "sPaginationType": "full_numbers"
        } );


      } );


  </script>

<!--Titulos-->
<div class="titulos">
    <div class="titulos_texto1">Suscripciones
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
				Administración de Suscriptores.
		</div>	

	</div>
	<div class="subcontenido2">
		  <div id="dashboard" role="dashboard">
    		    
				<div id="consultas">

				<div id="toolbar">
                    <div class="boton">
                      <a href="admSuscriptoresExcel.php">Descargar Listado</a>
                    </div>
				</div>

			<div id="txtHint">         

          <table class="display" id="table">
            <thead>
                <th>
                    Nombres
                </th>
                <th>
                   E-mail
                </th>
            </thead>
            <tbody>
            <?php if ($totalsuscritos>0): ?>
            <?php foreach ($suscritos as $suscrito):

                           ?>
              

            <tr>

                <td style="width:250px;"><?php echo $suscrito->getNombre() ?><br /></td style="width:250px;">
                <td style="width:250px;"><?php echo $suscrito->getEmail() ?><br /></td>

            </tr>

            <?php endforeach ?>

            <?php endif ?>
            </tbody>
            </table>


              


					</div>
				</div> 
			</div>
		</div>
</div>








<?php if ($_GET['delete']==1):?>
  <link rel="stylesheet" type="text/css" href="noty/css/jquery.noty.css"/>

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>

  <script type="text/javascript" src="noty/js/jquery.noty.js"></script>


    <script>

        $('.ex1.alert').ready(function() {
           noty({"text":"Producto Eliminado Correctamente!","layout":"center","type":"alert","textAlign":"center","easing":"swing","animateOpen":{"height":"toggle"},"animateClose":{"height":"toggle"},"speed":"500","timeout":"5000","closable":true,"closeOnSelfClick":true});
        });
    </script>


<?php endif; ?>
<div class="contenido_marco_inf"></div>
