<?PHP 
	require_once("includes/clase_parametros.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TEAMGROUP</title>



<script type="text/javascript" src="js/jquery-1.2.6.pack.js"></script>
<script type="text/javascript" src="js/stepcarousel.js">

/***********************************************
* Step Carousel Viewer script- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* Visit http://www.dynamicDrive.com for hundreds of DHTML scripts
* This notice must stay intact for legal use
***********************************************/

</script>




	




<link href="fuentes/stylesheet.css" rel="stylesheet" type="text/css" />
<link href="css/stylos_teamgroup.css" rel="stylesheet" type="text/css" />
</head>

<body><script type="text/javascript">

stepcarousel.setup({
	galleryid: 'mygallery', //id of carousel DIV
	beltclass: 'belt', //class of inner "belt" DIV containing all the panel DIVs
	panelclass: 'panel', //class of panel DIVs each holding content
	autostep: {enable:true, moveby:1, pause:7000},
	panelbehavior: {speed:1000, wraparound:false, persist:true},
	defaultbuttons: {enable: true, moveby: 1, leftnav: ['images/prev.png', -48, 160], rightnav: ['images/next.png', -61, 160]},
	statusvars: ['statusA', 'statusB', 'statusC'], //register 3 variables that contain current panel (start), current panel (last), and total panels
	contenttype: ['inline'] //content setting ['inline'] or ['external', 'path_to_external_file']
})

  </script>
  
  

  
  
  
  
<div id="envpasarelalogos">
 

  <div id="mygallery" class="stepcarousel"> 
        <div class="belt">
		<?PHP

				$datos = Parametros::getImgBanner();
				
				if(is_array($datos) && !empty($datos)) {
            
					for($i = 0; $i < sizeof($datos); $i++) {
					
						?>	 
								<div class="panel">	
									<div id="envbtvermasbann"><div id="btvermasbann"><a href="<?PHP echo trim($datos[$i]['banners_url']); ?>">&nbsp;</a></div>
									</div>						  
									<div id="contbann">
										<div id="txtcontbann"><?PHP echo trim($datos[$i]['banners_txt1']); ?> <span class="colortxtcontbann"><?PHP echo trim($datos[$i]['banners_txt2']); ?></span></div>
									</div>
									<div id="imgbann"><img src="cms/modules/bannerIndex/files/<?PHP echo trim($datos[$i]['banners_image']); ?>" <?PHP if($datos[$i]['banners_blank'] == 1) { ?>target="_blank" <?PHP } ?> height="369" width="350" /></div>  
								</div>			
						<?PHP
						
					}
				}
			?>
		</div>
	</div>
</div>

 
  
  
  
  
  
</body>
</html>