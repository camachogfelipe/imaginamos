<?php

		if($messages) {
			
			foreach($messages as $key=>$val)
			{
				
				$msg_class = ($key == 0) ? "msg_last" : "msg";
				$padding = $key == 0 ? 'style="padding-top:10px"' : '';
				echo '<div class="'.$msg_class.'" '.$padding.'>';
					
					echo '<strong>';
						
						$user = $val['type'] == 'admin' ? $val['admin'] : $val['user_nick'];
						
						echo $user.'<div style="float:right; font-size:9px; color:grey; font-weight: normal;">'.$val['time'].'</div>';
					
					echo '</strong>: ';
				
				echo $val['msg'];
				
				?>
				
			</div>
	
		<?php
					
				}
			}
		?>
