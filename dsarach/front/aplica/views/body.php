<section>
    <div class="con-section">
      <div class="mg-section clearfix">
        <h1>Aplicaciones novedosas</h1>
        <div class="pager-info clearfix">
          <ul class="con-pager clearfix">
            <?php
						if(!empty($arra)) :
							echo '<li>';
							$i=0;
							foreach($arra as $item):
								echo '<div class="item-aplicacion">
												<div class="aplicacion-img">
													<img src="'.base_url().'uploads/thumbnail/'.$item["imagen"].'" width="215" height="280" alt="">
												</div>
												<div class="aplicacion-info">
													<h1>'.$item["titulo"].'</h1>
													<p>'.nl2br($item["descripcion"]);
													if(!empty($item['archivo'])) :
														echo '<br>'.
																 '<a style="color:white" href="'.base_url().'uploads/'.$item['archivo'].
																 '">Descargar archivo</a>';
													endif;
													echo '</p>
												</div>
											</div>';
								$i++;
								if($i == 4) : echo '</li><li>'; $i = 0; endif;
							endforeach;
							echo '</li>';
						endif;
						
						
						
						/*$li = count($arra)/4;
            $li = ceil($li);						
            $p = 0;
            for ($k=0;$k<$li;$k++){
                echo '<li>';
                   for ($i=$p;$i<($p+4);$i++){
                       echo '
                           <div class="item-aplicacion">
                            <div class="aplicacion-img"><img src="'.base_url().'uploads/thumbnail/'.$arra[$i]["imagen"].'" width="215" height="280" alt=""></div>
                            <div class="aplicacion-info">
                              <h1>'.$arra[$i]["titulo"].'</h1>
                              <p>'.nl2br($arra[$i]["descripcion"]).'</p>
                            </div>
                          </div>
                        ';
                   } 
                echo '</li>';
                $p = $p+4;
            }*/
            ?>
            
          </ul>
          <div class="pager-nav"></div>
        </div>
      </div>
    </div>
  </section>
        