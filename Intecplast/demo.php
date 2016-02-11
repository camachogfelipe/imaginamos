<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<script src="jquery.imageLens.js" type="text/javascript"></script>
	<script type="text/javascript" language="javascript">
		$(function () {
			$("#img_01").imageLens();
			$("#img_02").imageLens({ lensSize: 160 });
			$("#img_03").imageLens({ imageSrc: "sample01.jpg" });
			$("#img_04").imageLens({ borderSize: 8, borderColor: "#06f" });
		});	
	</script>

	<style type="text/css">
		body { margin: 0px; font-family: "Trebuchet MS", Arial, Sans-Serif; font-size: 14px; }
		a { color: #0066CC; text-decoration: none; }
		a:hover { color: #CC0000; text-decoration: underline; }
	</style>
</head>
<body>
<!-- BuySellAds.com Ad Code -->
<script type="text/javascript">
(function(){
  var bsa = document.createElement('script');
     bsa.type = 'text/javascript';
     bsa.async = true;
     bsa.src = '//s3.buysellads.com/ac/bsa.js';
  (document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);
})();
</script>
<!-- End BuySellAds.com Ad Code -->

	<table>
		<tr>
			<td width="339"><img id="img_02" src=".<?php echo $producto->getProducto_imagen() ?>" width="334" height="334" /></td>
		</tr>
	</table>

	<p>&nbsp;</p>
	
	<script type="text/javascript">var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));	</script>	<script type="text/javascript">	try{var pageTracker = _gat._getTracker("UA-2030729-5");pageTracker._initData();pageTracker._trackPageview();}catch(ex){}</script>
	
</body>
</html>

