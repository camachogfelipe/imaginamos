<?php include("head.php"); ?>
	<style type="text/css">#nav-services, #map-services {color:#ff444b !important;} #nav-services {background:url(assets/img/nav-main-arrow-2.png) right center no-repeat !important;}</style>
	<?php include("header-int.php"); 
        $cTaladrado = new Dbtaladrado();
        $taladrado = $cTaladrado->getList();
        $cant = count($taladrado);
        $porta = new Dbportafolio_servicios();
$mData = array("where" => "id=2");
$objPorta = $porta->getListOne($mData);
        ?>
    
  <section>
    <div class="con-section">
      <div class="mg-section clearfix">
        <div class="con-arbol">
          <!--Paso 1-->
          <div class="con-paso">
          	<h1><?php echo $objPorta['titulo']?></h1>
            <div class="paso">
              <ul class="slider-tree">
                  <?php for($i = 0 ; $i < $cant ; $i++){ ?>
                  <li>
                  <div class="paso-item">
                    <h1><?php echo $taladrado[$i]["titulo"] ?></h1>
                    <div class="paso-img"><img src="assets/img/taladrado/<?php echo $taladrado[$i]["imagen"] ?>" width="191" height="98" alt=""></div>
                    <div class="paso-info">
                      <div class="scroll-wrap">
                          <p>
                        <?php echo $taladrado[$i]["texto"] ?>
                          </p>
                      </div>
                    </div>
                    <a href="index.php?base&seccion=taladrado-t1&idtaladrado=<?php echo $taladrado[$i]["idtaladrado"] ?>" class="vn-nav paso-item-p1"><div class="paso-bt-vn"></div></a>
                  </div>
                   </li>
                  <?php  } ?>
              </ul>
            </div>
          </div>
          <!--Fin paso 1-->
          <div class="con-paso con-paso-fn clearfix"></div>
        </div>
      </div>
    </div>
  </section>
  <div class="section-sep"></div>
					
<?php include("footer.php"); ?>