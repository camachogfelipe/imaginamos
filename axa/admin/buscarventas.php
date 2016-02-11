<?php
error_reporting(E_ALL);
ini_set("display_errors", 0);
include '../php/dao/daoConnection.php';
include ("../php/dao/venta2DAO.php");
include ("../php/entities/venta2.php");

$fecha_ini=isset($_REQUEST['fechaini']) ? $_REQUEST['fechaini'] : date('Y-m-d') ;
$fecha_final=isset($_REQUEST['fechafin']) ? $_REQUEST['fechafin'] : date('Y-m-d') ;
 $fecha_ini.'-->1';
$venta = new venta2DAO();
$total=0;
$venta2 = $venta->getVenta2($fecha_ini, $fecha_final);
$total=count($venta2);


?>
<table width="100%" class="yui" id="tableOne">
  <thead>
    <tr>
      <td class="tableHeader"></td>
      <td colspan="11" class="filter"><span class="rowElem" style="text-align: left"> Buscar:
        <input id="filterBoxOne" value="" maxlength="30" size="30" type="text" />
        </span></td>
    </tr>
    <?php if( isset($_POST['enviar']) ){ ?>
    <tr>
      <td class="EstiloGreen">Valor costo/plan eliminada</td>
    </tr>
    <?php }?>
    <tr>
      <th><a href='#' title="Click para ordenar">Nombres</a></th>
      <th><a href='#' title="Click para ordenar">Apellidos</a></th>
      <th><a href='#' title="Click para ordenar">Plan</a></th>
      <th><a href='#' title="Click para ordenar">Destino</a></th>
      <th><a href='#' title="Click para ordenar">Venta</a></th>
      <th><a href='#' title="Click para ordenar">Salida</a></th>
      <th><a href='#' title="Click para ordenar">Regreso</a></th>
      <th><a href='#' title="Click para ordenar">Transacción</a></th>
      <th width="3%"><a href='#' title="Click para ordenar">Pago</a></th>
      <th width="8%"><a href='#' title="Click para ordenar">Redencion</a></th>
      <th><a href='#' title="Click para ordenar">Acciones</a></th>
    </tr>
  </thead>
  <tbody>
    <?php
      for($i=0;$i < sizeof($venta2);$i++){
      ?>
    <tr>
      <td><?php echo $venta2[$i]["nombretbl_pasajeros"] ?></td>
      <td><?php echo $venta2[$i]["apellidostbl_pasajeros"] ?></td>
      <td><?php echo $venta2[$i]["descripciontbl_plan"] ?></td>
      <td><?php echo utf8_encode($venta2[$i]["descripciontbl_destino"]) ?></td>
      <td><?php echo $venta2[$i]["fechaventatbl_ventas"] ?></td>
      <td><?php echo $venta2[$i]["fechasalidatbl_ventas"] ?></td>
      <td><?php echo $venta2[$i]["fecharegresotbl_ventas"] ?></td>
      <td><?php echo $venta2[$i]["reftbl_ventas"] ?></td>
      <td><?php echo $venta2[$i]["pagoonlinetbl_ventas"] ?></td>
      <td><?php echo $venta2[$i]["redencion"] ?></td>
      <td style ="text-align: center">
			<?php 
          //if($venta2[$i]["pagoonlinetbl_ventas"] == "NO"){
        ?>
        <input type ="checkbox" name="campo[]" id="campo_<?php echo $i ?>"  class="cb"  rel="<?php echo $venta2[$i]["idtbl_ventas"] ?>" value = "<?php echo $venta2[$i]["idtbl_ventas"] ?>">
        <input type="hidden" id="campo_<?php echo $i ?>_venta" rel="<?php echo $venta2[$i]["idtbl_ventas"] ?>" value = "<?php echo $venta2[$i]["pagoonlinetbl_ventas"] ?>">
        <input type="hidden" id="campo_<?php echo $i ?>_ref" rel="<?php echo $venta2[$i]["idtbl_ventas"] ?>" value = "<?php echo $venta2[$i]["reftbl_ventas"] ?>">
        <br>
        <?php //} ?>
    </tr>
    <?php } ?>
  </tbody>
  <tfoot>
    <tr id="pagerOne">
      <td colspan="11"><div style ="position: relative"> <img src="jquery/jQueryTableSorterConPaging/_assets/img/first.png" class="first"/> <img src="jquery/jQueryTableSorterConPaging/_assets/img/prev.png" class="prev"/>
          <input type="text" class="pagedisplay"/>
          <img src="jquery/jQueryTableSorterConPaging/_assets/img/next.png" class="next"/> <img src="jquery/jQueryTableSorterConPaging/_assets/img/last.png" class="last"/>
          <select name="select" class="pagesize">
            <option selected="selected"  value="10">10</option>
            <option value="20">20</option>
            <option value="30">30</option>
            <option  value="40">40</option>
            <option  value="60">60</option>
            <option  value="80">80</option>
            <option  value="<?php echo $total?>">Todos</option>
          </select>
          <input style ="position: absolute; right: 16px; top: 50%; margin-top: -12px; cursor: pointer" type="button" id="enviar" name="enviar" value="Enviar Correo" onclick="enviar1('cliente');" />
          <input style ="position: absolute; right: 120px; top: 50%; margin-top: -12px; cursor: pointer" type="button" id="enviar" name="enviar" value="Descargar CSV" onclick="enviar1('csv');" />
          <!--<input style ="position: absolute; right: 16px; top: 50%; margin-top: -12px; cursor: pointer" type="submit" id="enviar" name="enviar" value="Enviar" />--> 
        </div></td>
    </tr>
  </tfoot>
</table>
