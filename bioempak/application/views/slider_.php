<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/waterwheel-carousel.css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery.waterwheelCarousel.min.js"></script>

<script type="text/javascript">
      $(document).ready(function () {
        
        $("#waterwheel-carousel-horizon").waterwheelCarousel({
            startingWaveSeparation: 0,
            centerOffset: 30,
            startingItemSeparation: 150,
            itemSeparationFactor: .7,
            itemDecreaseFactor: .75,
            opacityDecreaseFactor: 1500,
            
        });
        
        

      });
    </script>
</head>

<body>

<div id="waterwheel-carousel-horizon">
      <div class="carousel-controls">
      	<div class="carousel-prev"><a href="#">&lt; previous</a></div>
      	<div class="carousel-next"><a href="#">&gt; next</a></div>
      </div>
      <div class="carousel-images">
        <img src="img/img_cliente1.jpg" width="100;" height="100;" alt="Test Image 1" />
        <img src="img/img_cliente1.jpg" width="100;" height="100;" alt="Test Image 1" />
        <img src="img/img_cliente1.jpg" width="100;" height="100;" alt="Test Image 1" />
        <img src="img/img_cliente1.jpg" width="100;" height="100;" alt="Test Image 1" />
        <img src="img/img_cliente1.jpg" width="100;" height="100;" alt="Test Image 1" />
        <img src="img/img_cliente1.jpg" width="100;" height="100;" alt="Test Image 1" />
        <img src="img/img_cliente1.jpg" width="100;" height="100;" alt="Test Image 1" />
        <img src="img/img_cliente1.jpg" width="100;" height="100;" alt="Test Image 1" />
      </div>
    </div>
</body>
</html>
