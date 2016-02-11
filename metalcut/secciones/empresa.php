<?php include("head.php"); ?>
	<?php include("header-int.php"); ?>
   <?php
   $cMision = new Dbmision();
   $mDataM = array("where"=>"idmision=1");
   $mision = $cMision->getListOne($mDataM);
   
   $cVision= new Dbvision();
   $mDataV = array("where"=>"idvision=1");
   $vision = $cVision->getListOne($mDataV);
   
   $cHistoria= new Dbhistoria();
   $mDataH = array("where"=>"idhistoria=1");
   $historia = $cHistoria->getListOne($mDataH);
   ?> 
  <section>
    <div class="con-section">
      <div class="mg-section clearfix">
        <h1>Qui&#233;nes somos</h1>
        <div class="con-full clearfix">
        	<div class="con-mision">
          	<div class="valor-img"><img src="assets/img/mision/<?php echo $mision['imagen'] ?>" width="196" height="246" alt=""></div>
            <div class="valor-info">
            	<h1><?php echo $mision['titulo'] ?></h1>
              <div class="valor-tx">
                <div class="scroll-wrap">
                    <p><?php echo $mision['texto'] ?></p>
                </div>
              </div>
            </div>
          </div>
          <div class="con-vision">
          	<div class="valor-img"><img src="assets/img/vision/<?php echo $vision['imagen'] ?>" width="196" height="246" alt=""></div>
            <div class="valor-info">
            	<h1><?php echo $vision['titulo'] ?></h1>
              <div class="valor-tx">
                <div class="scroll-wrap">
                    <p><?php echo $vision['texto'] ?></p>
                    
                </div>
              </div>
            </div>
          </div>
        </div>  
        <div class="sep-line sep-fl"></div>
        <div class="con-full clearfix">
          <div class="con-historia">
          	<div class="historia-img"><img src="assets/img/historia/<?php echo $historia['imagen'] ?>" width="250" height="246" alt=""></div>
            <div class="historia-info">
            	<h1><?php echo $historia['titulo'] ?></h1>
              <div class="historia-tx">
                <div class="scroll-wrap">
                    <p><?php echo $historia['texto'] ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="section-sep"></div>
					
<?php include("footer.php"); ?>