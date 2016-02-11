<?php
$linea=$_GET["linea"];

require_once '../php/clases.php';

$lineaDAO = new lineaDAO(); $linea = new linea(); $lineas = $lineaDAO->gets(); $totallinea = $lineaDAO->total();

?>


      <div id="titcolopciones1">
        <div id="textotituloscolop">
          LINEA
        </div>
      </div>

      <div id="centcolprods">
      <?php if($totallinea>0): ?>
      <?php foreach ($lineas as $linea): ?>

        <input name="<?php echo $linea->getid() ?>" type="radio" value="<?php echo $linea->getid() ?>" /> <?php echo $linea->getnombre_e() ?><br/>

      <?php endforeach; ?>
      <?php endif; ?>

        <input name="Uno" type="radio" value="" /> Farmacéutico<br/>
        <input name="Uno" type="radio" value="" /> SM<br/>
        <input name="Uno" type="radio" value="" /> VS<br/>
        <input name="Uno" type="radio" value="" /> Agua<br/>
        <input name="Uno" type="radio" value="" /> Aseo<br/>
        <input name="Uno" type="radio" value="" /> Cera<br/>
        <input name="Uno" type="radio" value="" /> Jabón<br/>
        <input name="Uno" type="radio" value="" /> Licor<br/>
      </div>