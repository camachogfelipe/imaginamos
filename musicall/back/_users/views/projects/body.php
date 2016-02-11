
<!--<section class="clearfix">
    <a href="<?php echo cms_url('news/guardar') ?>" class="uibutton icon confirm add">Crear noticia</a>
</section>-->
<?PHP
	//require_once("includes/conexion.php");
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
	
	if (!is_object($conexion)) trigger_error("Failed to connect to 'database' " 
						   ." | Error = $conexion", E_USER_ERROR);

							
	
	//require_once("includes/clase_parametros.php");
?>	

<hr>

<section class="clearfix" style="margin-top: 4em;">
    <div class="tableName toolbar">
        <table class="display data_table2" >
            <thead>
                <tr>
				    <th><div class="th_wrapp">Acep.</div></th>
                    <th><div class="th_wrapp">Nombre</div></th>
                    <th><div class="th_wrapp">Código</div></th>
                    <th><div class="th_wrapp">Presupuesto</div></th>
                    <th><div class="th_wrapp">Referencia</div></th>
                    <th><div class="th_wrapp">Usuario</div></th>
                    <th><div class="th_wrapp">Fecha</div></th>
                    
                    <th style="width:200px;"><div class="th_wrapp">Acciones</div></th>
                </tr>
            </thead>
            <tbody>
                <?php if ($datos->exists()) : ?>
                    <?php foreach ($datos as $dato) : ?>
                        <tr class="odd gradeX parent-delete">
							<?php
								$val = $dato->id;
								//$cadena = Parametros::prueba2($val);
								
								$sql = "select * from cms_users_projects_notifications where users_project_id = '".$val."';"; 
								$dbRS = $conexion->query($sql); 
								$row = $dbRS->fetchAll();
								
								$cadena = "";
								$retorno = "0";
								$verif = "--";
								
								if(is_array($row) && !empty($row)) {
									
									for($i = 0; $i < sizeof($row); $i++) {
									
										$val2 = $row[$i]['notification_id'];
										
										$sql2 = "select * from cms_notifications where id = '".$val2."';"; 
										$dbRS2 = $conexion->query($sql2); 
										$row2 = $dbRS2->fetchAll();
									
										if(is_array($row2) && !empty($row2)) {
									
											for($j = 0; $j < sizeof($row2); $j++) {
										
												if($row2[$j]['notifications_type_id'] == 2 ){
													
													$val3 = $row2[$j]['id'];
													
													$sql3 = "select * from cms_notifications_soundcloud_songs where notification_id = '".$val3."';"; 
													$dbRS3 = $conexion->query($sql3); 
													$row3 = $dbRS3->fetchAll();
													
													
													
													
													if(is_array($row3) && !empty($row3)) {
									
														for($k = 0; $k < sizeof($row3); $k++) {
														
															$verif = "Aq2";
														
															$val4 = $row3[$k]['soundcloud_song_id'];	
														
															$sql4 = "select * from cms_soundcloud_songs where id = '".$val4."';"; 
															$dbRS4 = $conexion->query($sql4); 
															$row4 = $dbRS4->fetchAll();
															
															if(is_array($row4) && !empty($row4)) {
									
																for($l = 0; $l < sizeof($row4); $l++) {
																	
																	if($row4[$l]['accepted'] == 1 ){
																	
																		$retorno = "1";
																	
																	}
																
																
																}
															}


													
														
														}
													}	
													
													
												
												}
										
											}
										
										
										}
										
										
										
									
									
												
										
									}
								}
								
								//$cadena = $retorno;
								
								$cadena = "";
								
								if($retorno == 1){
							?>	
								<td class="center" id="acepto"><img src="../../manomusicall.png"  height="16" width="16"></td>
							<?PHP
								}else{
							?>	
								<td class="center" id="acepto"><?PHP echo $cadena; ?></td>	
							<?PHP	
								}
							?>
							<td class="center"><?php echo $dato->name ?></td>
                            <td class="center"><strong><?php echo $dato->code ?></strong></td>
                            <td class="center"><?php echo $dato->price ?></td>
                            <td class="center"><?php echo $dato->reference ?></td>
                            <td class="center"><?php echo anchor('cms/users/detail/' . $dato->user->username, $dato->user->full_name) ?></td>
                            <td class="center"><?php echo fecha_spanish_full_short($dato->created_on, true) ?></td>
                            <td class="center">
                                <span class="tip">
                                    <a href="<?php echo cms_url('users/projects/detail/' . $dato->id) ?>" class="uibutton special">Ver más</a>
                                    <a href="<?php echo site_url('usuarios/perfil/delete_project/' . $dato->id) ?>" class="uibutton" data-action="special-delete" data-table="news" data-field="id" data-value="<?php echo $dato->id ?>">
                                        Eliminar
                                    </a>
                                </span>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</section>
<script type="text/javascript">

	$(function() {
/*
                $('.elim_item').click(function(e) {
                    var $this = $(this);

                    if (confirm('¿Seguro que deseas borrar el proyecto?')) {

                        $.get($this.attr('href'), {}, function(r) {
                            if (r) {
                                $this.parents('.item1:first').fadeOut(function() {
                                    return $(this).remove();
                                })
                            }
                        });

                    }

                    return e.preventDefault();
                });
*/
		//alert("Entra!!!");

		id3 ="Fernando";
		
		$.get('prueba.php', { id: id3 } , function(resultado2) {
			
			//alert(resultado2);
			$('#acepto').empty().html(resultado2);			
			
		});


	});

</script>


