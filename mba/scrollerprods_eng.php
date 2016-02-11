<?
    include 'cms/core/mapping/front.mapping.php'; 
    $urlvalores="cms/modules/valores/view/files/";
    $productos=noticias("cms_productos");
?>

<!doctype html>
<html lang="en">
    
<!-- Mirrored from baijs.nl/tinyscrollbar/ by HTTrack Website Copier/3.x [XR&CO'2010], Mon, 29 Oct 2012 14:59:51 GMT -->
<head>
        <title>Tiny Scrollbar: A lightweight jQuery plugin</title>

        <meta charset="utf-8">
        <meta name="robots" content="all" />
        <meta name="description" content="Tiny Scrollbar is a lightweight jQuery based scrollbar." />
        <meta name="keywords" content="lightweight, jQuery, plugin, scrollbar, javascript, tinyscrollbar, Tiny Scrollbar, web 2.0" />
        <meta name="author" content="Maarten baijs" />
        <meta name="copyright" content="Maarten Baijs 2007-2012 // All rights reserved, all graphics copyrighted." />

        <!-- --> 



        <link rel="stylesheet" href="css/tinyscrollbar.css" type="text/css" media="screen"/>
        <!--[if lte IE 7]><link rel="stylesheet" href="../css/website_ie.css" type="text/css" media="screen"/><![endif]-->
        <!--[if lte IE 5]><script type="text/javascript"> function handleError() { return true; } window.onerror = handleError; </script><![endif]-->

        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.tinyscrollbar.js"></script>
        <script type="text/javascript" src="js/website.js"></script>
        <link href="css/stylos_mbabreton.css" rel="stylesheet" type="text/css">
        <link href="fuentes/stylesheet.css" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="highslide/highslide.js"></script>
<script type="text/javascript" src="highslide/highslide-with-html.js"></script>
<link rel="stylesheet" type="text/css" href="highslide/highslide.css" />

<script type="text/javascript">
    hs.graphicsDir = 'highslide/graphics/';
    hs.outlineType = 'rounded-white';
	hs.wrapperClassName = 'wide-border';
</script>
  </head>

    <body>

    <!-- OPEN WRAPPER -->


            <!-- OPEN HEADER --><!-- CLOSE HEADER -->

            <!-- OPEN COLUMN MAIN -->
            <section id="col-main">
              <div class="col-content">
                  <!-- TWITTER -->
                  <script type="text/javascript" src="../../twitter.com/javascripts/blogger.js"></script>
                    <script type="text/javascript" src="http://twitter.com/statuses/user_timeline/maartenbaijs.json?callback=twitterCallback2&amp;count=2"></script>
                    <!-- END TWITTER -->
                    <!-- google_ad_section_start -->

                      <div id="scrollbar2">
                       
                        <div class="viewport">
                            <div class="overview">
                                <? for($i=0;$i<count($productos->idcms);$i++){?>
                                      <? if($i==0){?>
                                            <div id="bt1productos"><a href="subproducto_en.php?id=<?=$productos->idcms[$i];?>" target="_top"><?=$productos->titulo2[$i]?></a></div>
                                      <? } ?>
                                       <div id="bt<?=$i+1; ?>"><a href="subproducto_en.php?id=<?=$productos->idcms[$i];?>" target="_top"><?=$productos->titulo2[$i]?></a></div>
                                <? } ?>
                              			 
                            </div>
                        </div>
						 <div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
                    </div>
                  
					
              </div>
             
            </section>
            <!-- CLOSE COLUMN MAIN -->

           
  
    <!-- CLOSE WRAPPER -->

    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-4459599-6']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>
</body>

<!-- Mirrored from baijs.nl/tinyscrollbar/ by HTTrack Website Copier/3.x [XR&CO'2010], Mon, 29 Oct 2012 15:00:03 GMT -->
</html>