<?php

		if($messages) {
			
			foreach($messages as $key=>$val)
			{
				
				$msg_class = ($key == 0 OR ($val['before'] == $val['user_id'] AND $val['type_before'] == $val['type'] AND $val['admin_before'] == $val['admin'])) ? "msg_last" : "msg";
	
				echo '<div class="'.$msg_class.'">';
					
				if(($val['before'] != $val['user_id'] OR $val['type_before'] != $val['type'] OR $val['admin_before'] != $val['admin']) OR $key == 0)
				{
					echo '<strong>';
					
					if($val['admin'] == $_SESSION['userid'] && $val['type'] == 'admin')
					{
						echo '<span class="current_user">'.$_['CURRENT_USER'].'</span><div style="float:right; font-size:9px; color:grey; font-weight: normal;">'.$val['time'].'</div>';
					
					} else {
						
						$user = $val['user_id'] ? $val['user_nick'] : $_['ADMIN_NICKNAME'];
						
						echo $user.'<div style="float:right; font-size:9px; color:grey; font-weight: normal;">'.$val['time'].'</div>';	
					}
					
					echo '</strong>: ';
	
				} 
				
				echo $val['msg'];
				
				?>
				
			</div>
	
		<?php
					
				}
			}
		?>