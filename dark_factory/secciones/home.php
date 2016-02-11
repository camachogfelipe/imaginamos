  	<?php include("head.php"); ?>  
  	<div id="fb-root"></div>
		<script>(function(d, s, id){var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1"; fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script>
		<?php include("header.php"); ?>

    <div class="con-slider">
      <div class="sliderContainer fullWidth clearfix">
        <div id="full-width-slider" class="royalSlider heroSlider rsMinW">
        	<!--Slide-->
                <?php $dbbanner = new Dbbanner();
                $banner = $dbbanner->getList();
                $contador = count($banner);
                ?>
                <?php for($i=0; $i<$contador; $i++): ?>
                    <div class="rsContent" data-rsDelay="7000">
                      <img class="rsImg" src="img/banner/<?= str_replace("original","redimension",$banner[$i]["imagen"])?>?<?php echo substr(md5(uniqid(rand())), 0, 6); ?>" alt="">
                      <div class="infoBlock rsABlock rsNoDrag slideTx" data-fade-effect="" data-move-offset="1000" data-move-effect="bottom" data-speed="800">
                          <h1><?php echo utf8_encode($banner[$i]["titulo"]); ?></h1>
                        <h2><?php echo utf8_encode($banner[$i]["subtitulo"]); ?></h2>
                        <h3><?php echo utf8_encode($banner[$i]["fecha"]); ?> <?php echo utf8_encode($banner[$i]["pais"]); ?> <!--- 143 MIN ---> <span>PG-<?php echo utf8_encode($banner[$i]["edad"]); ?></span></h3>
                        <p><?php echo utf8_encode($banner[$i]["texto"]); ?></p>
                        <div class="con-slider-bt"><a href="<?php echo utf8_encode($banner[$i]["link"]); ?>"><div class="slider-bt"></div></a></div>
                        <div class="caption-dc"></div>
                      </div>
                    </div>       
                <?php endfor; ?>
          
        </div>
      </div>
      <div class="slider-sw-1"></div>
      <div class="slider-sw-2"></div>
    </div>
    <section>
      <div class="con-section">
        <div class="mg-section clearfix">
          <div class="con-destacados">
          	<!--News-->
          	<div class="destacado-head"><h1>LATEST <strong>NEWS</strong></h1></div>
            <div class="destacado-slider">
                <?php $dbslidernews = new Dblatest_news();
                $lnews = $dbslidernews->getList();
                $contador = count($lnews);
    
                if($contador%2==0){ $number = '1'; }else{ $number = '2';} if($contador==1){$number ='0';}
                ?>
            	<ul class="slider-des-<?php print $number;?>">
                    <?php for($i=0; $i<$contador; $i++): ?>
                <li class="slide">
                	<div class="slide-img"><img src="img/latest_news/<?= str_replace("original","redimension",$lnews[$i]["imagen"])?>?<?php echo substr(md5(uniqid(rand())), 0, 6); ?>" width="236" height="123" alt=""></div>
                  <div class="slide-info">
                  	<div class="destacado-tx">
                    	<h1><?php echo utf8_encode($lnews[$i]["titulo"]); ?></h1>
                      <p><?php echo utf8_encode($lnews[$i]["texto"]); ?></p>
                    </div>
                    <div class="destacado-v">
                    	<a href="<?php echo utf8_encode($lnews[$i]["link"]); ?>" class="des-v-1">» More information</a>
                    </div>
                  </div>
                </li>
                <?php endfor; ?>
              </ul>
            </div>
            <!--Blog-->
            <div class="destacado-head"><h1>OUR <strong>BLOG</strong></h1></div>
            <div class="destacado-slider">
                   <?php $dbsliderblog = new Dbour_blog();
                $our = $dbsliderblog->getList();
                $contador = count($our);
                if($contador%2==0){ $number = '1'; }else{ $number = '2';} if(count($contador)==1){$number ='0';}
                ?>
            	<ul class="slider-des-<?php print $number;?>">
                <?php for($i=0; $i<$contador; $i++): ?>
                <li class="slide">
                	<div class="slide-img">
                  	<div class="blog-img"><img src="img/our_blog/<?= str_replace("original","redimension",$our[$i]["imagen"])?>?<?php echo substr(md5(uniqid(rand())), 0, 6); ?>" width="236" height="123" alt=""></div>
                        <div class="blog-date"><?php echo substr(str_replace("-",".",utf8_encode($our[$i]["fecha"])),2,10); ?></div>
                  </div>
                  <div class="slide-info">
                  	<div class="destacado-tx">
                    	<h1><?php echo utf8_encode($our[$i]["titulo"]); ?></h1>
                      <p><?php echo utf8_encode($our[$i]["texto"]); ?></p>
                    </div>
                    <div class="destacado-v">
                    	<a href="<?php echo utf8_encode($our[$i]["link"]); ?>" class="des-v-2"><?php echo utf8_encode($our[$i]["autor"]); ?></a>
                    </div>
                  </div>
                </li>
               <?php endfor; ?>
              </ul>
            </div>
          </div>
          <div class="con-comments">
            <div class="comments-nav">
              <a data-id="com-one" class="item-com com-act"><span class="com-red-1"></span></a>
              <a data-id="com-two" class="item-com"><span class="com-red-2"></span></a>
            </div>
            <div class="con-com-info">
            	<div class="com-box com-one">
                <div class="com-head">
                	<h1>DARK FACTORY ENT.</h1>
                  <h2><a href="https://twitter.com/darkfactory1/" target="_blank">@darkfactory1</a></h2>
                </div>
                <div class="redes-box">
                	<a class="twitter-timeline" href="https://twitter.com/darkfactory1" data-widget-id="348137854989373442">Tweets por @darkfactory1</a>
									<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                </div>
                <a href="https://twitter.com/darkfactory1/" target="_blank" class="com-bt"></a>
              </div>
              <div class="com-box com-two">  
                <div class="com-head">
                	<h1>DARK FACTORY ENT.</h1>
                  <h2><a href="https://www.facebook.com/DarkFactoryEntertainment" target="_blank">/DarkFactoryEntertainment</a></h2>
                </div>
                <div class="redes-box" style="overflow:auto;">
                  <div id="lista-fb"><fb:comments href="http://www.darkfactory.com/" width="270" colorscheme="dark"></fb:comments></div>
                </div>
                <a href="https://www.facebook.com/DarkFactoryEntertainment" target="_blank" class="com-bt"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
					
		<?php include("footer.php"); ?>