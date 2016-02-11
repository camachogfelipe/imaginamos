<?php 

session_start();

if(!isset($_SESSION['admin']) ){
	header("location: ./index.php");
	exit;
}


require_once '../php/clases.php';

$ensambleDAO = new ensambleDAO();
$ensamble = new ensamble();

$ensambles = $ensambleDAO->gets();



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
				Administración de Productos->Ensambles
		</div>	

	</div>
	<div class="subcontenido2">
		  <div id="dashboard" role="dashboard">
    		    
				<div id="consultas">

					<div id="toolbar">
				
								<div class="boton">
									<a href="menuAdmin.php?s=nwEnsamble">Nuevo Ensamble</a>
								</div>
					</div>

					<div id="txtHint">

					</div>
          <table class="display" id="table">
            <thead>
              <th>Base</th>
              <th>Complemento</th>
              <th>Combinación</th>
              <th>Acciones</th>
            </thead>
            <tbody>

              <?php foreach ($ensambles as $ensamble): ?>
                

                <tr>

                    <td style="width:250px;"><?php echo $ensamble->getBase() ?><br /></td>
                    <td style="width:250px;"><?php echo $ensamble->getComplemento() ?><br /></td>
                    <td style="width:250px;"><?php echo $ensamble->getBase() ?> - <?php echo $ensamble->getComplemento() ?><br /></td>
                    <td><a href="menuAdmin.php?s=viewEnsamble&id=<?php echo $ensamble->getId() ?>">Ver</a><br /></td>

                </tr>

              <?php endforeach ?>

            </tbody>
          <table>


				</div> 
			</div>
		</div>
</div>


<?php if ($_GET['delete']==1):?>
  <link rel="stylesheet" type="text/css" href="noty/css/jquery.noty.css"/>


  <script type="text/javascript" src="noty/js/jquery.noty.js"></script>


    <script>

        $('.ex1.alert').ready(function() {
           noty({"text":"Ensamble Eliminado Correctamente!","layout":"center","type":"alert","textAlign":"center","easing":"swing","animateOpen":{"height":"toggle"},"animateClose":{"height":"toggle"},"speed":"500","timeout":"5000","closable":true,"closeOnSelfClick":true});
        });

    </script>


<?php endif; ?>

<?php if ($_GET['add']==1):?>
  <link rel="stylesheet" type="text/css" href="noty/css/jquery.noty.css"/>


  <script type="text/javascript" src="noty/js/jquery.noty.js"></script>


    <script>

        $('.ex1.alert').ready(function() {
           noty({"text":"Ensamble Creado Correctamente!","layout":"center","type":"alert","textAlign":"center","easing":"swing","animateOpen":{"height":"toggle"},"animateClose":{"height":"toggle"},"speed":"500","timeout":"5000","closable":true,"closeOnSelfClick":true});
        });
    </script>


<?php endif; ?>

<?php if ($_GET['edit']==1):?>
  <link rel="stylesheet" type="text/css" href="noty/css/jquery.noty.css"/>


  <script type="text/javascript" src="noty/js/jquery.noty.js"></script>


    <script>

        $('.ex1.alert').ready(function() {
           noty({"text":"Ensamble Editado Correctamente!","layout":"center","type":"alert","textAlign":"center","easing":"swing","animateOpen":{"height":"toggle"},"animateClose":{"height":"toggle"},"speed":"500","timeout":"5000","closable":true,"closeOnSelfClick":true});
        });
    </script>


<?php endif; ?>
<div class="contenido_marco_inf"></div>
