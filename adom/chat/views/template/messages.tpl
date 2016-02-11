<?php

		if($messages) {
			
			foreach($messages as $key=>$val)
			{
				
				$msg_class = ($key == 0 OR ($val['before'] == $val['user_id'] AND $val['type_before'] == $val['type'] AND $val['admin_before'] == $val['admin'])) ? "msg_last" : "msg";
	
				echo '<div class="'.$msg_class.'">';
					
				if(($val['before'] != $val['user_id'] OR $val['type_before'] != $val['type'] OR $val['admin_before'] != $val['admin']) OR $key == 0)
				{
					echo '<strong>';
					
					if($val['user_id'] == $current_user && $val['type'] == 'user')
					{
						echo '<span class="current_user">'.$_['CURRENT_USER'].'</span><div style="float:right; font-size:9px; color:grey; font-weight: normal;">'.$val['time'].'</div>';
					
					} else {
						
						$user = $val['user_nick'];
						
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