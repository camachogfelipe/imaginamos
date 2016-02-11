<?php

require_once './php/clases.php';
$productoDAO = new productoDAO();
$producto = new producto();




$query_num_services =  $productoDAO->gets();
$num_total_registros = $productoDAO->total();

//Si hay registros
 if ($num_total_registros > 0) {
    //numero de registros por página
    $rowsPerPage = 3;

    //por defecto mostramos la página 1
    $pageNum = 1;

    // si $_GET['page'] esta definido, usamos este número de página
    if(isset($_GET['page'])) {
        sleep(1);
        $pageNum = $_GET['page'];
    }

    //contando el desplazamiento
    $offset = ($pageNum - 1) * $rowsPerPage;
    $total_paginas = ceil($num_total_registros / $rowsPerPage);
$offset = 3;
        $productos = $productoDAO->getFilter($clase_id,$offset,$rowsPerPage);
        

$total = $productoDAO->total();

?>


<div id="subtit1">
<div id="envpaginacion">
<div id="btpag1"><a href="#nogo">PRIMERO</a></div>
<div id="btpag1"><a href="#nogo">ANTERIOR</a></div>
<div id="btpag2"><a href="#nogo" class="activo">1</a></div>
<div id="btpag2"><a href="#nogo">2</a></div>
<div id="btpag2"><a href="#nogo">3</a></div>
<div id="btpag2"><a href="#nogo">4</a></div>
<div id="btpag2"><a href="#nogo">5</a></div>
<div id="btpag1"><a href="#nogo">SIGUIENTE</a></div>
<div id="btpag1"><a href="#nogo">ÚLTIMO</a></div>

<?php 

$totalResultados=count($productos); 

$totalProductos = count($productoDAO->gets());
 
?>
</div>Mostrando <?php echo $totalResultados ?> de <?php echo $totalProductos ?> entradas</div>

<?php if ($total>0): ?>
    <?php foreach ($productos as $producto): 

      $material_id = $producto->getMaterial_id();
      $materialDAO = new materialDAO();
      $material = new material();
      $material = $materialDAO->getById($material_id);


    ?>
        


        <div id="envcontprodinf">

        <div id="thumb2col">
        <div id="imgthumb2">  <div id="btmodprodsec"><a href="catalogo_paso3.php?id=<?php echo $producto->getProducto_codigo() ?>">&nbsp;</a></div><img src=".<?php echo $producto->getProducto_imagen() ?>" width="170" height="153" /></div>
        <div id="textosdetalle"><h1><a href="catalogo_paso3.php?id=<?php echo $producto->getProducto_codigo() ?>"><?php echo $producto->getProducto_nombre()?></a></h1>
        Peso:&nbsp;<?php echo $producto->getProducto_peso() ?><br />
        Boca:&nbsp;<?php echo $producto->getProducto_boca() ?><br />
        Material:&nbsp;<?php echo $material->getnombre_e() ?><br />
        </div>
        </div>

    <?php endforeach ?>
<?php endif ?>

<div id="sepclear"></div>


<div id="subtit1">
<div id="envpaginacion">
<div id="btpag1"><a href="#nogo">PRIMERO</a></div>
<div id="btpag1"><a href="#nogo">ANTERIOR</a></div>
<div id="btpag2"><a href="#nogo" class="activo">1</a></div>
<div id="btpag2"><a href="#nogo">2</a></div>
<div id="btpag2"><a href="#nogo">3</a></div>
<div id="btpag2"><a href="#nogo">4</a></div>
<div id="btpag2"><a href="#nogo">5</a></div>
<div id="btpag1"><a href="#nogo">SIGUIENTE</a></div>
<div id="btpag1"><a href="#nogo">ÚLTIMO</a></div>

</div>
Mostrando <?php echo $totalResultados ?> de <?php echo $totalProductos ?> entradas
</div>

<div id="sepclear2"></div>

</div>

<?php 

    if ($total_paginas > 1) {
    echo '<div>';
    echo '<ul>';
    if ($pageNum != 1)
        echo '<li><a data="'.($pageNum-1).'">Anterior</a></li>';
        for ($i=1;$i<=$total_paginas;$i++) {
            if ($pageNum == $i)
                //si muestro el índice de la página actual, no coloco enlace
                echo '<li><a>'.$i.'</a></li>';
            else
                //si el índice no corresponde con la página mostrada actualmente,
                //coloco el enlace para ir a esa página
                echo '<li><a data="'.$i.'">'.$i.'</a></li>';
         }
         if ($pageNum != $total_paginas)
             echo '<li><a data="'.($pageNum+1).'">Siguiente</a></li>';
         echo '</ul>';
          echo '</div>';
    }
}

 ?>