<div class="content_notif1 scroll-pane">
<?PHP 
		//error_reporting(E_ALL);
		//ini_set('display_errors', 'On');
	
	
		$busq  = array('á', 'é', 'í', 'ó', 'ú','Á','É','Í','Ó','Ú', 'ñ', 'Ñ');
		$remplaza = array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U', 'n', 'N');

	
	
		$infoDU = new \User;
        $infoDU->get_current();
		$idUser = $infoDU->id;
		/*
		$host = "localhost";
		$db = "usuarioric_musicall";
		$usuario = "usuarioric";
		$password = "gMPAi37GTk)o";
		*/
		$host = "articore1.ipowermysql.com";
		$db = "musicall";
		$usuario = "musicall";
		$password = "Musicall26032013";
				
		$conexion = new PDO("mysql:host=$host; dbname=$db", $usuario, $password);
		
		$sql4 = "select * from cms_notifications_mass where user_id = '".$idUser."' order by notifications_id desc;"; 
		//$sql4 = "select * from cms_notifications_mass where user_id = '56';"; 
		$dbRS4 = $conexion->query($sql4); 
		
		$row4 = $dbRS4->fetchAll();
		
		
				
		if(is_array($row4) && !empty($row4)) {
		
			
		
			for($k = 0; $k < sizeof($row4); $k++) {
				$val3 = $row4[$k]['notifications_id'];
				$code = $row4[$k]['code'];
				$sql5 = "select * from cms_notifications where id = ".$val3.";";
				$dbRS5 = $conexion->query($sql5);
				$row5 = $dbRS5->fetchAll();	
				
				if(is_array($row5) && !empty($row5)) {
				
					for($l = 0; $l < sizeof($row5); $l++) {
					
						$idnot = $row5[$l]['id'];
						$nomproject = $row5[$l]['project_name'];
						$nomproject = str_replace($busq, $remplaza, $nomproject);
						$nomproject = htmlentities($nomproject);
						$cantbudget = $row5[$l]['budget'];
						$descrip = $row5[$l]['description'];
						$descrip = str_replace($busq, $remplaza, $descrip);
						$descrip = htmlentities($descrip);
						

						$activo = $row5[$l]['active'];
					?>
						<div class="item_notif clearfix">
							<div class="left_itemnotif">
								<p><?php echo $nomproject; ?></p>
								<?php $div="<p style=text-align:center;font-weight:bold;font-size:18px;>MAS INFO</p><br>".
										   "<p style=font-weight:bold;>C&oacute;digo:</p>".$code ."<br><br>".
										   "<p style=font-weight:bold;>Nombre: </p>".$nomproject ."<br><br>".
										   "<p style=font-weight:bold;>Presupuesto: </p>".$cantbudget."<br><br>".
										   "<p style=font-weight:bold;>Descripci&oacute;n:</p> ".$descrip."<br><br>"; ?>
								<p>presupuesto: <?php echo $cantbudget; ?> codigo: <a href="javascript:abrirNotif2('<?php echo $div ?>');" data-description="<?php echo json_encode($descrip) ?>"><span><?php echo $code ?></span></a> </p>		   
							</div>
							<div class="right_itemnotif">
								<?php  if(!$activo){?>
									<a href="<?php echo site_url('usuarios/perfil/toggle_read_notification/' . $idnot); ?>" class="btn_check_tienes checked" data-notifications="read-toggle" data-counter-type="tienes"></a>
								<?php }else{ ?>
									<a href="<?php echo site_url('usuarios/perfil/toggle_read_notification/' . $idnot); ?>" class="btn_check_tienes" data-notifications="read-toggle" data-counter-type="tienes"></a>
								<?php } ?>	
							</div>
							
						</div>
						
					
					
					<?PHP												
					}//for l
				}//if $row5
		
			}//for k
			
		}//if $row4
		else{
		   ?>
			<p style="text-align: center; padding: 2em 0; color: #FFF;">No tienes notificaciones.</p>
			<?PHP
		}
		
	?>
</div>
