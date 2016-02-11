<?php include("head.php"); ?>
	<style type="text/css">#nav-services, #map-services {color:#ff444b !important;} #nav-services {background:url(assets/img/nav-main-arrow-2.png) right center no-repeat !important;}</style>
	<?php include("header-int.php"); 
            $cPlanchado= new Dbplanchado();
            $mDataC = array("where"=>"idplanchado=1");
            $planchado = $cPlanchado->getListOne($mDataC);
          
            $cEscuadrado= new Dbescuadrado();
            $mDataS = array("where"=>"idescuadrado=1");
            $escuadrado = $cEscuadrado->getListOne($mDataS);
            
            $cCopiado= new Dbcopiado();
            $mDataA = array("where"=>"idcopiado=1");
            $copiado = $cCopiado->getListOne($mDataA);
            
            $cCopiado= new Dbcopiado();
            $mDataA = array("where"=>"idcopiado=1");
            $copiado = $cCopiado->getListOne($mDataA);
            
            $cPortafolio= new Dbportafolio_carburo();
            $mDataC = array("where"=>"modulo='carburo' and nivel='0' ");
            $portafolio  = $cPortafolio->getList2($mDataC);
            $cant = count($portafolio);
            
            $cPortafolio_fresado= new Dbportafolio_fresado();
            $mDataF = array("where"=>"modulo='fresado' and nivel='0' ");
            $portafolio_fresafo  = $cPortafolio_fresado->getList2($mDataF);
            $cant2 = count($portafolio_fresafo);
            
            $porta = new Dbportafolio_servicios();
$mData = array("where" => "id=3");
$objPorta = $porta->getListOne($mData);
        ?>
        <script>
            function displayNivel(nivel,modulo,sig,paso,idpadre){
              jQuery("#"+paso+"")
                  //.html(ajaxLoader)
                  .load('secciones/generanivelescarburdo.php', {nivel: nivel, modulo:modulo, paso:sig, idpadre:idpadre }, function(response){					
                  if(response) {
                      jQuery("#"+paso+"").css('display', '');                       
                  } else {                    
                      jQuery("#"+paso+"").css('display', 'none'); 
                  }
              });    
          }
          
           function displayNivel1(nivel,modulo,sig,paso,idpadre){
              jQuery("#"+paso+"")
                  //.html(ajaxLoader)
                  .load('secciones/generanivelesfresado.php', {nivel: nivel, modulo:modulo, paso:sig, idpadre:idpadre }, function(response){					
                  if(response) {
                      jQuery("#"+paso+"").css('display', '');                       
                  } else {                    
                      jQuery("#"+paso+"").css('display', 'none'); 
                  }
              });    
          }
    </script>
  <section>
    <div class="con-section">
      <div class="mg-section clearfix">
        <div class="con-arbol">
          <!--Paso 1-->
          <div class="con-paso">
          	<h1><?php echo $objPorta['titulo']?></h1>
            <div class="paso">
              <ul class="slider-tree">
<!--                <li>
                 <div class="paso-item">
                    <h1><?php echo $planchado['titulo'] ?></h1>
                    <div class="paso-img"><img src="assets/img/planchado/<?php echo $planchado['imagen'] ?>" width="191" height="98" alt=""></div>
                    <div class="paso-info">
                      <div class="scroll-wrap">
                        <p><?php echo $planchado['texto'] ?></p>
                      </div>
                    </div>
                    <a href="index.php?base&seccion=fresado-t2&idplanchado=<?php echo $planchado['idplanchado'] ?>" class="vn-nav paso-item-p1"><div class="paso-bt-vn"></div></a>
                  </div>
                </li>
                <li>
                <div class="paso-item">
                    <h1><?php echo $escuadrado['titulo'] ?></h1>
                    <div class="paso-img"><img src="assets/img/escuadrado/<?php echo $escuadrado['imagen'] ?>" width="191" height="98" alt=""></div>
                    <div class="paso-info">
                      <div class="scroll-wrap">
                        <p><?php echo $escuadrado['texto'] ?></p>
                      </div>
                    </div>
                    <a href="index.php?base&seccion=fresado-t1&idescuadrado=<?php echo $escuadrado['idescuadrado'] ?>" class="vn-nav paso-item-p1"><div class="paso-bt-vn"></div></a>
                  </div>
                </li>
                <li>
                <div class="paso-item">
                    <h1><?php echo $copiado['titulo'] ?></h1>
                    <div class="paso-img"><img src="assets/img/copiado/<?php echo $copiado['imagen'] ?>" width="191" height="98" alt=""></div>
                    <div class="paso-info">
                      <div class="scroll-wrap">
                        <p><?php echo $copiado['texto'] ?></p>
                      </div>
                    </div>
                    <a href="index.php?base&seccion=fresado-t3&idcopiado=<?php echo $copiado['idcopiado'] ?>" class="vn-nav paso-item-p1"><div class="paso-bt-vn"></div></a>
                  </div>
                </li>-->
                <li>
                <div class="paso-item">
                    <h1><?php echo $portafolio[0]['titulo'] ?></h1>
                    <div class="paso-img"><img src="assets/img/portafolio_carburo/<?php echo $portafolio[0]['imagen'] ?>" width="191" height="98" alt=""></div>
                    <div class="paso-info">
                      <div class="scroll-wrap">
                        <p><?php echo $portafolio[0]['texto'] ?></p>
                      </div>
                    </div>
                    <a href="#va-paso-2" class="vn-nav paso-item-p1" onclick="displayNivel('1','carburo','3','va-paso-2','<?php echo $portafolio[0]["idportafolio_carburo"] ?>')" data-id="con-paso-1-1"><div class="paso-bt"></div></a>
                  </div>
                </li>
                 <?php for($i = 0 ; $i < $cant2 ; $i++){ ?>
                    <li>
                        <div class="paso-item">
                            <h1><?php echo $portafolio_fresafo[$i]["titulo"] ?></h1>
                            <div class="paso-img"><img src="assets/img/portafolio_fresado/<?php echo $portafolio_fresafo[$i]["imagen"] ?>" width="191" height="98" alt=""></div>
                            <div class="paso-info">
                              <div class="scroll-wrap">
                                <p><?php echo $portafolio_fresafo[$i]["texto"] ?></p>
                              </div>
                            </div>
                            <?php if ($portafolio_fresafo[$i]["paso"]=='P'){ ?>
                            <a href="index.php?base&seccion=fresado-per&idportafolio_fresafo=<?php echo $portafolio_fresafo[$i]["idportafolio_fresado"] ?>" class="vn-nav paso-item-p1"><div class="paso-bt-vn"></div></a>
                            <?php }else{ ?>
                            <a href="#va-paso-2" class="vn-nav paso-item-p1" onclick="displayNivel1('1','fresado','3','va-paso-2','<?php echo $portafolio_fresafo[$i]["idportafolio_fresado"] ?>')" data-id="con-paso-1-1"><div class="paso-bt"></div></a>
                            <?php } ?>
                          </div>
                </li>
               <?php } ?>
              </ul>
            </div>
          </div>
          <!--Fin paso 1-->
          <!--Paso 2-->
          <div class="con-paso con-paso-1-1" id="va-paso-2">
  
          </div>
          <!--Fin paso 2-->
          <div class="con-paso con-paso-1-1-1" id="va-paso-3">
          
          </div>
          <!--Fin paso 3-->
          <!--Paso 4-->
          <div class="con-paso con-paso-1-1-1-1" id="va-paso-4">

          </div>
          <!--Fin paso 4-->
          <!--Paso 5-->
          <div class="con-paso con-paso-1-1-1-1-1" id="va-paso-5">
          	
          </div>
          <!--Fin paso 5-->
          <!--Paso 6-->
          <div class="con-paso con-paso-1-1-1-1-1-1" id="va-paso-6">
          	
          </div>
          <!--Fin paso 6-->
          <!--Paso 7-->
          <div class="con-paso con-paso-1-1-1-1-1-1-1" id="va-paso-7">
          	
          </div>
          <!--Fin paso 7-->
          <!--Paso 8-->
          <div class="con-paso con-paso-1-1-1-1-1-1-1-1" id="va-paso-8">
          	
          </div>
          <div class="con-paso con-paso-fn clearfix"></div>
        </div>
      </div>
    </div>
  </section>
  <div class="section-sep"></div>
					
<?php include("footer.php"); ?>