 <section>
    <div class="info">
      <div class="mg-info clearfix">
        <div class="con-section-main con-section-main-s clearfix">
          <div class="faq-main-info">
          	<h1>PREGUNTAS FRECUENTES</h1>
            <ul>
             <?php $i = 1; foreach ($preguntas as $pqr): ?>   
                <li><a href="#sc-info-<?php echo $i; ?>" class="an-din-li"><h1><span><?php echo $i."."; $i++; ?></span><?php echo substr(strip_tags($pqr->pregunta), 0,40)."..."; ?></h1></a></li>
             <?php endforeach; ?>
<!--              <li><a href="#sc-info-2" class="an-din-li"><h1><span>2.</span> Pregunta...</h1></a></li>
              <li><a href="#sc-info-3" class="an-din-li"><h1><span>3.</span> Pregunta...</h1></a></li>
              <li><a href="#sc-info-4" class="an-din-li"><h1><span>4.</span> Pregunta...</h1></a></li>
              <li><a href="#sc-info-5" class="an-din-li"><h1><span>5.</span> Pregunta...</h1></a></li>
              <li><a href="#sc-info-6" class="an-din-li"><h1><span>6.</span> Pregunta...</h1></a></li>-->
            </ul>
          </div>
        </div>
        <?php $i = 1; foreach ($preguntas as $pqr): ?>     
        <div class="con-section-info con-section-clr clearfix" id="sc-info-<?php echo $i; ?>">
          <h1><?php echo $i.". ".strip_tags($pqr->pregunta); $i++; ?></h1>
          <?php echo $pqr->texto; ?>
        </div>
       <?php endforeach; ?>
          
          
<!--        <div class="con-section-info con-section-clr clearfix" id="sc-info-2">
          <h1>2. Pregunta</h1>
          <p>Since coming to PFC Ive experienced great results. So far on my journey, I’ve lost 80lbs. I feel better, healthier, and am very satisfied. I feel lighter and able to move my body in ways that I could not when I got here. I am able to do full sit ups now!...</p>
        </div>
        <div class="con-section-info con-section-clr clearfix" id="sc-info-3">
          <h1>3. Pregunta</h1>
          <p>Since coming to PFC Ive experienced great results. So far on my journey, I’ve lost 80lbs. I feel better, healthier, and am very satisfied. I feel lighter and able to move my body in ways that I could not when I got here. I am able to do full sit ups now!...</p>
        </div>
        <div class="con-section-info con-section-clr clearfix" id="sc-info-4">
          <h1>4. Pregunta</h1>
          <p>Since coming to PFC Ive experienced great results. So far on my journey, I’ve lost 80lbs. I feel better, healthier, and am very satisfied. I feel lighter and able to move my body in ways that I could not when I got here. I am able to do full sit ups now!...</p>
        </div>
        <div class="con-section-info con-section-clr clearfix" id="sc-info-5">
          <h1>5. Pregunta</h1>
          <p>Since coming to PFC Ive experienced great results. So far on my journey, I’ve lost 80lbs. I feel better, healthier, and am very satisfied. I feel lighter and able to move my body in ways that I could not when I got here. I am able to do full sit ups now!...</p>
        </div>
        <div class="con-section-info con-section-clr clearfix" id="sc-info-6">
          <h1>6. Pregunta</h1>
          <p>Since coming to PFC Ive experienced great results. So far on my journey, I’ve lost 80lbs. I feel better, healthier, and am very satisfied. I feel lighter and able to move my body in ways that I could not when I got here. I am able to do full sit ups now!...</p>
        </div>-->
      </div>
    </div>
  </section>
  