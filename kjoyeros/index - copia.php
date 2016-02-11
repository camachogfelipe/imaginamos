<?php include('header.php'); ?>
<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">    
    <title>KUEHNE - JOYEROS</title>
    
    <meta name="author" content="Gustavo Vera Gomez" />
    <meta name="Copyright" content="" />
    
    <meta name="DC.title" content=" " />
    <meta name="DC.subject" content=" " />
    <meta name="DC.creator" content="" />
    
    <link href="styles/all.css" rel="stylesheet" type="text/css" />
    <link href="styles/reset.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" >
    
    
    
    <script type="text/javascript" src="scripts/jquery.js"></script>
    <script type="text/javascript" src="scripts/functions.js"></script>
    <script type="text/javascript" src="scripts/jquery.sudoSlider.js"></script>	
	<script type="text/javascript" src="scripts/jquery-ui-1.8.21.custom.min.js"></script>
     
    

  </head>

<body>


<div class="container">

<?php $banner = selectBanner(1);?>
  
  <div class="home">    
      <div style="position:relative;" align="center">
        <!--slider home -->
		<div id="slider">
		  <ul>				
			<?php
				for($c=0; $c < count($banner->id_banner); $c++){
			?>
            <li>
              <a href="<?php echo $banner->link_b[$c]; ?>" target="_blank"><img src="admin/modules/banner/files/<?php echo $banner->imagen[$c]; ?>" width="998" height="460"/></a>
            </li>
		    <?php } ?>
		  </ul>
		</div>
	</div>
   
   
    <ul class="clearfix">
		<?php selectProductosBanner(); ?>
    </ul>
    
      
</div>
  
  
 <?php include('footer.php'); ?>
 
</div>	



</body>
</html>
