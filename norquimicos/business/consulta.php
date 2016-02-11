<?php

$sab = $_POST["valor"];
if($sab == 1){
  $consulta = DbHandler::GetAll("SELECT * FROM testimonios");
}
if($sab == 2){
   $consulta = DbHandler::GetAll("SELECT * FROM testimonios WHERE band_subcategorias='Estudiantes'");
}
if($sab == 3){
   $consulta = DbHandler::GetAll("SELECT * FROM testimonios WHERE band_subcategorias='Profesionales'");
}
if($sab == 4){
   $consulta = DbHandler::GetAll("SELECT * FROM testimonios WHERE band_subcategorias='Educadores'");
}
if($sab == 5){
   $consulta = DbHandler::GetAll("SELECT * FROM testimonios WHERE band_subcategorias='Padres'");
}
$html="";
for($a=0,$b=count($consulta);$a<$b;$a++){
  $html .='        
              <li>
                <div class="testimonio">
                  <div class="texto-testimonio">
                    <div class="top-texto-testimonio"></div>
                    <div class="body-texto-testimonio">
                      <p class="head-testimonio">'.utf8_encode($consulta[$a]["texto"]).'</p>
                      <div class="comas-a"></div>
                      <div class="comas-c"></div>
                    </div>
                    <div class="bottom-texto-testimonio"></div>
                    <div class="usuario-testimonio">
                      <p class="usuario-desc">'.utf8_encode($consulta[$a]["descripcion"]).'</p>
                      <p class="usuario-desc">'.utf8_encode($consulta[$a]["nombre"]).' - '.utf8_encode($consulta[$a]["edad"]).' años</p>
                      <div class="icono-user"></div>
                    </div>
                  </div>
                </div>
              </li>
           ';
}
  echo $html;
?>
