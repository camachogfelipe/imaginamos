<?php

session_start();

require_once '../php/clases.php';

if( !isset($_SESSION['admin']) ){
    header("location: ./index.php");
    exit;
}

//Se llenan lo sobjetos con los que se generaran los opciones de los selects del formulario

$claseDAO = new claseDAO(); $clase = new clase(); $clases = $claseDAO->gets(); $totalClase = $claseDAO->total();

$categoriaDAO = new categoriaDAO(); $categoria = new categoria(); $categorias = $categoriaDAO->gets(); $totalCategoria = $categoriaDAO->total();

$sublineaDAO = new sublineaDAO(); $sublinea = new sublinea(); $sublineas = $sublineaDAO->getsAdmin(); $totalSublinea = $sublineaDAO->total();

$formaDAO = new formaDAO(); $forma = new forma(); $formas = $formaDAO->gets(); $totalForma = $formaDAO->total();

$atributoDAO = new atributoDAO(); $atributo = new atributo(); $atributos = $atributoDAO->gets(); $totalAtributos = $atributoDAO->total();

$tamanoDAO = new tamanoDAO(); $tamano = new tamano(); $tamanos = $tamanoDAO->gets(); $totalTamano = $tamanoDAO->total();

$unidadDAO = new unidadDAO(); $unidad = new unidad(); $unidades = $unidadDAO->gets(); $totalUnidad = $unidadDAO->total();

$materialDAO = new materialDAO(); $material = new material(); $materiales = $materialDAO->gets(); $totalMateriales = $materialDAO->total();

$colorDAO = new colorDAO(); $color = new color(); $colores = $colorDAO->gets(); $totalColor = $colorDAO->total(); 

$linnerDAO = new linnerDAO(); $linner = new linner(); $linners = $linnerDAO->gets(); $totalLinner = $linnerDAO->total();

$faldaDAO = new faldaDAO(); $falda = new falda(); $faldas = $faldaDAO->gets(); $totalFalda = $faldaDAO->total();

$capacidadDAO = new capacidadDAO(); $capacidad = new capacidad(); $capacidades = $capacidadDAO->gets();

$bocaDAO = new bocaDAO(); $boca = new boca(); $bocas = $bocaDAO->gets();



?>
<!DOCTYPE html>
<head>
  <title>.::Crear Productos</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="Creación de productos">
  <meta name="author" content="@James_Garciap">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/modules.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="noty/css/jquery.noty.css"/>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
  <script type="text/javascript">

    function validarClase(){

      var clase = $("#clase").val();

      if (clase == 1 || clase ==2) {

        if ($("#capacidad").val() == "") {
          alert("Debe ingresar la capacidad del elemento");
        }
        else if($("#unidadCapacidad").val() == "N/A"){
          alert("Debe escoger la unidad de medida de la capacidad ingresada");
        }
        else if($("#capacidad_rango").val() == "1"){
          alert("Debe elegir el rango de capacidad del elemento");
        }
        else if($("#boca").val() == "1"){
          alert("Debe seleccionar el valor del atributo boca");

        }
        else{
          alert("Todo en orden");
          $("#form1").submit();

        }


      }
      else{
        if($("#boca").val() == "1"){
          alert("Debe seleccionar el valor del atributo boca");

        }
        else{
          alert("Todo en orden");
          $("#form1").submit();
        }
      }

    }

  </script>

</head>
<body>
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
        Agregar Producto.
    </div>  

  </div>
  <div class="subcontenido2">
	<div id="container">

		<div id="form_principal">
		<h3>Nuevo Producto</h3>

			<form method="post" id="form1" name="form1" action="./../php/action/productoAdd.php" enctype="multipart/form-data">
      <div class="left">
				<label for="cod">Código:</label>
				<input type="text" id="cod" name="cod" value="" />
				
        <label for="des">Descripción:</label>
        <input type="text" id="des" name="des" value="" />				

        <label for="des">Descripción (Ingles):</label>
				<input type="text" id="des_i" name="des_i" value="" />
				
        <label for="nombre">Nombre:</label>
        <input type="text" id="nom" name="nom" value="" />

        <label for="nombre">Nombre (Ingles):</label>
        <input type="text" id="nom_i" name="nom_i" value="" />
        
        <label for="clase">Clase:</label>
          <select name='clase' id='clase'>
          <?php if($totalClase>0): ?>
            <?php foreach ($clases as $clase): ?>
              
              <option value="<?php echo $clase->getid() ?>"><?php echo $clase->getnombre_e() ?></option>  

            <?php endforeach; ?>
          <?php endif; ?>
          </select>            

        <label for="sublinea">Sublinea:</label>
          <select name='sublinea' id='sublinea'>
          <?php if($totalSublinea>0): ?>

            <?php foreach ($sublineas as $sublinea): ?>
              
              <option value="<?php echo $sublinea->getid() ?>"><?php echo $sublinea->getnombre_e() ?></option>  

            <?php endforeach; ?>
          <?php endif; ?>
          </select>
        
        <label for="categoria">Categoria:</label>
          <select name='categoria' id='categoria'>
          <?php if($totalCategoria>0): ?>
            <?php foreach ($categorias as $categoria): ?>
              
              <option value="<?php echo $categoria->getid() ?>"><?php echo $categoria->getnombre_e() ?></option>  

            <?php endforeach; ?>
          <?php endif; ?>
          </select>      

          
        <label for="forma">Forma:</label>
          <select name='forma' id='forma'>
          <?php if($totalForma>0): ?>
            <?php foreach ($formas as $forma): ?>
              
              <option value="<?php echo $forma->getid() ?>"><?php echo $forma->getnombre_e() ?></option>  

            <?php endforeach; ?>
          <?php endif; ?>
          </select>            
                          
        <label for="atributo">Atributo #1:</label>
          <select name='atributo1' id='atributo1'>
          <?php if($totalAtributos>0): ?>
              <option value="1">N/A</option>  
            <?php foreach ($atributos as $atributo): ?>
              
              <option value="<?php echo $atributo->getid() ?>"><?php echo $atributo->getnombre_e() ?></option>  

            <?php endforeach; ?>
          <?php endif; ?>
          </select>      
                
        <label for="atributo">Atributo #2:</label>
          <select name='atributo2' id='atributo2'>
          <?php if($totalAtributos>0): ?>
              <option value="1">N/A</option>  
            <?php foreach ($atributos as $atributo): ?>
              
              <option value="<?php echo $atributo->getid() ?>"><?php echo $atributo->getnombre_e() ?></option>  

            <?php endforeach; ?>
          <?php endif; ?>
          </select>    


        <label for="entradas">Entradas:</label>
        <input type="text" id="entradas" name="entradas" value="" />

        <label for="tamano">Tamaño:</label>
            <select name='tamano' id='tamano'>
              <?php if($totalTamano>0): ?>

                  <option value="1">N/A</option>  
                <?php foreach ($tamanos as $tamano): ?>
                  
                  <option value="<?php echo $tamano->getid() ?>"><?php echo $tamano->getnombre_e() ?></option>  

                <?php endforeach; ?>
              <?php endif; ?>
              </select>     

                    

          <label for="material">Material:</label>
          <select name='material' id='material'>
          <?php if($totalMateriales>0): ?>
            <?php foreach ($materiales as $material): ?>
              
              <option value="<?php echo $material->getid() ?>"><?php echo $material->getnombre_e() ?></option>  

            <?php endforeach; ?>
          <?php endif; ?>
          </select>  
          

        </div>
        <!--Fin Columna Izquierda-->
        
        <!--Columna derecha-->
        <div class="right">
                  
        <label for="capacidad">Capacidad:</label>
        <input type="text" id="capacidad" name="capacidad" value="" />
        
        <label for="unidadCapacidad">Unidad de Medida de Capacidad:</label>
          <select name='unidadCapacidad' id='unidadCapacidad'>
          <?php if($totalUnidad>0): ?>
              <option value="1">N/A</option>  

            <?php foreach ($unidades as $unidad): ?>
              
              <option value="<?php echo $unidad->getid() ?>"><?php echo $unidad->getnombre() ?></option>  

            <?php endforeach; ?>
          <?php endif; ?>
          </select>            

          <label for="capacidad_rango">Rango de Capacidad:</label>
          <select name='capacidad_rango' id='capacidad_rango'>
          <?php if($capacidades>0): ?>
              <option value="1">N/A</option>  

            <?php foreach ($capacidades as $capacidad): ?>
              
              <option value="<?php echo $capacidad->getId() ?>"><?php echo $capacidad->getCapacidad_rango() ?></option>  

            <?php endforeach; ?>
          <?php endif; ?>
          </select>            

          <label for="color">Color:</label>
          <select name='color' id='color'>
          <?php if($totalColor>0): ?>
            <?php foreach ($colores as $color): ?>
              
              <option value="<?php echo $color->getid() ?>"><?php echo $color->getnombre_e() ?></option>  

            <?php endforeach; ?>
          <?php endif; ?>
          </select>            
        
          <label for="boca">Boca:</label>
          <select name='boca' id='boca'>
          <?php if($bocas>0): ?>
              <option value="1">N/A</option>  

            <?php foreach ($bocas as $boca): ?>
              
              <option value="<?php echo $boca->getId() ?>"><?php echo $boca->getBoca() ?></option>  

            <?php endforeach; ?>
          <?php endif; ?>
          </select>         

          <label for="peso">Peso:</label>
          <input type="text" id="peso" name="peso" value="" />
  
          <label for="terminado">Terminado:</label>
          <input type="text" id="terminado" name="terminado" value="" />   

          <label for="terminado">Terminado (Ingles):</label>
          <input type="text" id="terminado_i" name="terminado_i" value="" />        
          
          <label for="linner">Linner:</label>
          <select name='linner' id='linner'>
          <?php if($totalLinner>0): ?>
              <option value="1">N/A</option>  

            <?php foreach ($linners as $linner): ?>
              
              <option value="<?php echo $linner->getid() ?>"><?php echo $linner->getnombre_e() ?></option>  

            <?php endforeach; ?>
          <?php endif; ?>
          </select>            

          <label for="falda">Falda:</label>
          <select name='falda' id='falda'>
          <?php if($totalFalda>0): ?>
              <option value="1">N/A</option>  

            <?php foreach ($faldas as $falda): ?>
              
              <option value="<?php echo $falda->getid() ?>"><?php echo $falda->getnombre_e() ?></option>  

            <?php endforeach; ?>
          <?php endif; ?>
          </select>            

        <label for="cavidades">Cavidades:</label>
        <input type="text" id="cavidades" name="cavidades" value="" />

        <label for="anotacion">Anotación:</label>
        <input type="text" id="anotacion" name="anotacion" value="" />        

        <label for="anotacion">Anotación (Ingles):</label>
        <input type="text" id="anotacion_i" name="anotacion_i" value="" />
        
        <label for="nombre">Imagen:</label>
				<input type="file" id="imagen" name="imagen"/>
        </div>
        <!--Fin Columna Izquierda-->

				
				
				<div class="actions">
         <a href="#" onclick="validarClase()"><button type="button">Guardar</button></a>
					<button type="reset">Deshacer</button>
					<button class="red" type="button" onclick="window.open('menuAdmin.php?s=miscelanea','_top');" >Volver</button>			
				</div>

			</form>

		</div>
	</div>
<?php if ($_GET['add']==1):?>


	<script type="text/javascript" src="noty/js/jquery.noty.js"></script>


    <script>

        $('.ex1.alert').ready(function() {
           noty({"text":"Producto Creado Correctamente!","layout":"center","type":"success","textAlign":"center","easing":"swing","animateOpen":{"height":"toggle"},"animateClose":{"height":"toggle"},"speed":"500","timeout":"5000","closable":true,"closeOnSelfClick":true});
        });
    </script>


<?php endif; ?>


<?php if ($_GET['edit']==1):?>


  <script type="text/javascript" src="noty/js/jquery.noty.js"></script>


    <script>

        $('.ex1.alert').ready(function() {
           noty({"text":"Producto Editado Correctamente!","layout":"center","type":"alert","textAlign":"center","easing":"swing","animateOpen":{"height":"toggle"},"animateClose":{"height":"toggle"},"speed":"500","timeout":"5000","closable":true,"closeOnSelfClick":true});
        });
    </script>


<?php endif; ?>

<?php if ($_GET['error']==11):?>


  <script type="text/javascript" src="noty/js/jquery.noty.js"></script>


    <script>

        $('.ex1.alert').ready(function() {
           noty({"text":"El codigo ingresado ya existe en nuestra base de datos!","layout":"center","type":"error","textAlign":"center","easing":"swing","animateOpen":{"height":"toggle"},"animateClose":{"height":"toggle"},"speed":"500","timeout":"5000","closable":true,"closeOnSelfClick":true});
        });
    </script>


<?php endif; ?>
  </div>
</div>
<div class="contenido_marco_inf"></div>
</body>
</html>