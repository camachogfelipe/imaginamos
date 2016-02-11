<?php

@session_start();
if (!isset($_SESSION["ocarrito"])){
$_SESSION["ocarrito"] = new carrito();
}

require_once './../php/clases.php';


class carrito{

  var $num_productos; 
  var $array_id_prod;
  var $array_muestra_prod; 
  var $array_cantidad_prod;

function carrito(){
$this->num_productos=0;
} 


function introduce_producto($id_prod,$muestra_prod,$cantidad_prod){
  $this->array_id_prod[$this->num_productos]=$id_prod;
  $this->array_muestra_prod[$this->num_productos]=$muestra_prod;
  $this->array_cantidad_prod[$this->num_productos]=$cantidad_prod;
  $this->num_productos++;
} 

function guardar_carrito($cotizacion_id){

  $productoscotizacionesDAO = new productoscotizacionesDAO();
  $productoscotizaciones = new productoscotizaciones();

  for ($i=0;$i<$this->num_productos;$i++){
    
    if($this->array_id_prod[$i]!=0){
      
        $producto_codigo= $this->array_id_prod[$i];
        $cantidad_producto= $this->array_cantidad_prod[$i];

        switch ($cantidad_producto) {
                case 1:
                  $cantidad_producto= "1 - 5.000";
                    break;
                case 2:
                  $cantidad_producto= "5.001 - 10.000";
                    break;
                case 3:
                  $cantidad_producto= "10.001 - 50.000";
                    break;
                case 4:
                  $cantidad_producto= "50.001 - 100.000";
                    break;
                case 5:
                  $cantidad_producto= "Más de 100.000";
                    break;
            }


          $productoscotizaciones->setId($prodCot_id);
          $productoscotizaciones->setCotizacionId($cotizacion_id);
          $productoscotizaciones->setProductoCodigo($producto_codigo);
          $productoscotizaciones->setCantidadProducto($cantidad_producto);    
          $productoscotizacionesDAO->save($productoscotizaciones);
          session_destroy();
    }
  } 
}


function imprime_carrito(){ 
echo '<div id="subtit01tabs2">Quotation </div>';
echo '<div id="envproductos">';
echo '<div id="sepclear">&nbsp;</div>';
echo '<div id="columderprod">';
  echo '<table width="907" id="gradient-style" summary="Meeting Results">';
    echo '<thead>';
      echo '<tr>';
        echo '<th  scope="col"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Product</strong></th>';
        echo '<th  scope="col"><strong>Product name </strong></th>';
       echo '<th  scope="col"><strong>Reference</strong></th>';
        echo '<th  scope="col"><strong>Number of samples </strong></th>';
        echo '<th  scope="col"><strong>Quantity to quote </strong></th>';
 
      echo '</tr>';
    echo '</thead>';

    echo '<tfoot>';
    echo '</tfoot>';
    echo '<tbody>';
for ($i=0;$i<$this->num_productos;$i++){ 
if($this->array_id_prod[$i]!=0){ 

  $id= $this->array_id_prod[$i];


$productoDAO = new productoDAO();

$producto = new producto();

  $producto = $productoDAO->getById($id);

      echo '<tr>';
        echo '<td valign="top" style="text-align:center"><div id="columizqprod">';

echo '<div id="thumbcolcotiza">';

echo '<div id="imgthumbcotizador"><img src="..'.$producto->getProducto_imagen().'" height="72" /></div>';
echo '<div id="leftcheckcotiza"><div id="bteliminar"><a href="eliminar_producto.php?linea='.$i.'">&nbsp;</div></div>';
echo '</div>';

$cnt= $this->array_cantidad_prod[$i];


echo '</div></td>';
      echo '<td style="text-align:center">'.$producto->getProducto_nombre().'</td>';
           echo '<td style="text-align:center">'.$this->array_id_prod[$i].'</td>';
//        echo '<input type="hidden" id="cod'.$i.'" name="cod[]" value="'.$id.'"/>';
        echo '<td style="text-align:center" ><label>';
          echo '<select name="muestras" id="muestras" class="selectsintec2">';
            echo '<option>1</option>';
            echo '<option>2</option>';
            echo '<option>3</option>';
          echo '</select>';
        echo '</label></td>';
        echo '<td style="text-align:center"><select id="cant'.$i.'" name="cant[]" class="selectsintec2">';

           switch ($cnt) {
                case 1:
                  echo '<option value="1">1 - 5.000</option>';
                    break;
                case 2:
                  echo '<option value="2">5.001 - 10.000</option>';
                    break;
                case 3:
                  echo '<option value="3">10.001 - 50.000</option>';
                    break;
                  
                case 4:
                  echo '<option value="4">50.001 - 100.000</option>';
                    break;
                case 5:
                  echo '<option value="5">Más de 100.000</option>';
                    break;

                    break;
            }
            echo '<optgroup  label="---------------------">
                <option value="1">1 - 5.000</option>

                <option value="2">5.001 - 10.000</option>

                <option value="3">10.001 - 50.000</option>

                <option value="4">50.001 - 100.000</option>
                
                <option value="5">Más de 100.000</option>
              </optgroup>';
          echo '</select></td>';
      
      echo '</tr>';
	}
}
    echo '</tbody>';
  echo '</table>';
echo '</div>';
echo '<div id="sepclear"></div>
<div id="sepclear">&nbsp;</div><div id="envenlacecotizador">';

  if($this->num_productos!=0){ 
    echo '<div id="btcontinuar"><a href="datos_contacto.php">&nbsp;</a></div>';
  }
  else{
    
    echo '<div style="font-family:sans; font-weight:bold; color:#333;">No products have added to the price, to add products entering the product <a href="catalogo.php" >catalog</a> or the <a href="productos.php" >product </a>section</div>';
  }
}
  function elimina_producto($linea){
    unset($this->array_id_prod[$linea]);
    unset($this->array_muestra_prod[$linea]);
    unset($this->array_cantidad_prod[$linea]);
    $this->num_productos--;

    $this->array_id_prod = array_values($this->array_id_prod);
    $this->array_muestra_prod = array_values($this->array_muestra_prod);
    $this->array_cantidad_prod = array_values($this->array_cantidad_prod);

  } 
}
?>