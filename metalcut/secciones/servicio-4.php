<?php include("head.php"); ?>
	<style type="text/css">#nav-services, #map-services {color:#ff444b !important;} #nav-services {background:url(assets/img/nav-main-arrow-2.png) right center no-repeat !important;}</style>
	<?php include("header-int.php"); 
            $cPortafolio= new Dbportafolio();
            $mDataC = array("where"=>"modulo='accesorios' and nivel='0' ");
            $portafolio  = $cPortafolio->getList2($mDataC);
            $cant = count($portafolio);
                        
            $cConos= new Dbconos();
            $mDataC = array("where"=>"idconos=1");
            $conos = $cConos->getListOne($mDataC);
          
            $cSujecion= new Dbsujecion();
            $mDataS = array("where"=>"idsujecion=1");
            $sujecion = $cSujecion->getListOne($mDataS);
            
            $cAccesorio= new Dbaccesorio();
            $mDataA = array("where"=>"idaccesorio=1");
            $accesorio = $cAccesorio->getListOne($mDataA);
            
            $porta = new Dbportafolio_servicios();
$mData = array("where" => "id=4");
$objPorta = $porta->getListOne($mData);
        ?>
        <script>
          function displayProductos(tipo){
          //var ajaxLoader = "<img src='../../../../assets/img/ajax-loader.gif' alt='loading...' />";  
                jQuery("#va-paso-2")
                  //.html(ajaxLoader)
                  .load('secciones/generaproductos.php', {tipo: tipo }, function(response){					
                  if(response) {
                      jQuery("#va-paso-2").css('display', '');                       
                  } else {                    
                      jQuery("#va-paso-2").css('display', 'none'); 
                  }
              });     
          }
          
          function displayNivel(nivel,modulo,sig,paso,padre){
              jQuery("#"+paso+"")
                  //.html(ajaxLoader)
                  .load('secciones/generaniveles.php', {nivel: nivel, modulo:modulo, paso:sig, idpadre:padre }, function(response){					
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
                    <h1><?php echo $conos['titulo'] ?></h1>
                    <div class="paso-img"><img src="assets/img/conos/<?php echo $conos['imagen'] ?>" width="191" height="98" alt=""></div>
                    <div class="paso-info">
                      <div class="scroll-wrap">
                        <p><?php echo $conos['texto'] ?></p>
                      </div>
                    </div>
                    <a href="#va-paso-2" class="vn-nav paso-item-p1" onclick="displayProductos('conos')" data-id="con-paso-1-1"><div class="paso-bt"></div></a>
                  </div>
                </li>-->
                <li>
                <div class="paso-item">
                    <h1><?php echo $sujecion['titulo'] ?></h1>
                    <div class="paso-img"><img src="assets/img/sujecion/<?php echo $sujecion['imagen'] ?>" width="191" height="98" alt=""></div>
                    <div class="paso-info">
                      <div class="scroll-wrap">
                        <p><?php echo $sujecion['texto'] ?></p>
                      </div>
                    </div>
                    <a href="#va-paso-2" class="vn-nav paso-item-p1" onclick="displayProductos('sujecion')" data-id="con-paso-1-1"><div class="paso-bt"></div></a>
                  </div>
                </li>
<!--                <li>
                <div class="paso-item">
                    <h1><?php echo $accesorio['titulo'] ?></h1>
                    <div class="paso-img"><img src="assets/img/accesorio/<?php echo $accesorio['imagen'] ?>" width="191" height="98" alt=""></div>
                    <div class="paso-info">
                      <div class="scroll-wrap">
                        <p><?php echo $accesorio['texto'] ?></p>
                      </div>
                    </div>
                    <a href="index.php?base&seccion=accesorios-t1&idaccesorio=<?php echo $accesorio['idaccesorio'] ?>" class="vn-nav paso-item-p1"><div class="paso-bt-vn"></div></a>
                  </div>
                </li>-->
               <?php for($i = 0 ; $i < $cant ; $i++){ ?>
                    <li>
                        <div class="paso-item">
                            <h1><?php echo $portafolio[$i]["titulo"] ?></h1>
                            <div class="paso-img"><img src="assets/img/portafolio_accesorios/<?php echo $portafolio[$i]["imagen"] ?>" width="191" height="98" alt=""></div>
                            <div class="paso-info">
                              <div class="scroll-wrap">
                                <p><?php echo $portafolio[$i]["texto"] ?></p>
                              </div>
                            </div>
                            <?php if ($portafolio[$i]["paso"]=='P'){ ?>
                            <a href="index.php?base&seccion=accesorios-per&idportfolio=<?php echo $portafolio[$i]["idportafolio"] ?>" class="vn-nav paso-item-p1"><div class="paso-bt-vn"></div></a>
                            <?php }else{ ?>
                            <a href="#va-paso-2" class="vn-nav paso-item-p1" onclick="displayNivel('1','accesorios','3','va-paso-2','<?php echo $portafolio[$i]["idportafolio"] ?>')" data-id="con-paso-1-1"><div class="paso-bt"></div></a>
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