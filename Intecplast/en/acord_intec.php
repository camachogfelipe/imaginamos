<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>Elegant Accordion with jQuery and CSS3</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="description" content="Elegant Accordion with jQuery and CSS3" />
        <meta name="keywords" content="jquery, slide out,accordion, css3, fadeout, fadein, elegant, fancy, box shadow"/>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
        <style>
            *{
                margin:0;
                padding:0;
            }
        
      
            .title{
                width:500px;
                height:152px;
                position:absolute;
                top:0px;
                left:0px;
                background:transparent url(title.png) no-repeat top left;
            }
            a.back{
                background:transparent url(back.png) no-repeat top left;
                position:fixed;
                width:150px;
                height:27px;
                outline:none;
                bottom:0px;
                left:0px;
            }
            #content{
                margin:0 auto;
            }
            .reference{
                clear:both;
                top:300px;
                left:0px;
                position:absolute;
                text-align:right;
                width:400px;
                padding:20px;
                background-color:#fff;
                -moz-box-shadow:1px 3px 15px #ddd;
                -webkit-box-shadow:1px 3px 15px #ddd;
                box-shadow:1px 3px 15px #ddd;
            }
            .reference p a{
                text-transform:uppercase;
                text-shadow:1px 1px 1px #fff;
                color:#666;
                text-decoration:none;
                font-size:10px;
            }
            .reference p a:hover{
                color:#333;
            }
			
		#bt_vergalmerc {
		position:absolute;
		margin-top:450px;
		right:75px;
		width: 104px;
height: 27px;	
		}
			
#bt_vergal {
float:right;
margin: 0;
padding: 0;
width: 96px;
height: 27px;
text-align: center;
background: url("images/btvergal.png") 0 0 no-repeat;
letter-spacing: -1px;
} 
#bt_vergal  a {
padding-top: 12px;
width: 100%;
height: 100%;
display: block;
overflow: hidden;
font-family: DINMedium;
color: #ffffff;
font-weight: bold;
font-size: 12px;
text-decoration: none;
background: url("images/btvergal.png") 0 0 no-repeat;
letter-spacing: -1px;
} 
#bt_vergal  a:hover {
font-family: DINMedium;
background-position: -96px 0;
color: #ffffff;
font-weight: bold;
font-size: 12px;
letter-spacing: -1px;
}
#bt_vergal  a:active {
font-family: DINMedium;
background-position: -192px 0;
color: #ffffff;
font-weight: bold;
font-size: 12px;
letter-spacing: -1px;
}

        </style>
        <link href="fuentes/stylesheet.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
<!--
body,td,th {
	font-size: 28px;
}
-->
</style></head>

    <body>
   <div id="contenidoacordion">
            
            <ul class="accordion" id="accordion">
                <li class="bg1">
                
                    <div class="bgDescription"></div>
                    <div class="description"> <div id="bt_vergalmerc"><a href="mercados_galeria.php"><img src="images/btvergal2.png" alt="" width="104" height="27" /></a></div>
						<div id="imgtop"><img src="imgsacord/img.jpg" alt="" width="240" height="118" /></div>
                        <p>Lorem ipsum is election</p>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                            quae ab illo inventore veritatis et quasi architecto beatae vitae
                            dicta sunt explicabo. </p>
                                   </div>
                </li>
                <li class="bg2">
                   
                    <div class="bgDescription"></div>
                    <div class="description"><div id="bt_vergalmerc"><a href="mercados_galeria.php"><img src="images/btvergal2.png" alt="" width="104" height="27" /></a></div>
								<div id="imgtop"><img src="imgsacord/img.jpg" alt="" width="240" height="118" /></div>
                               <p>Lorem ipsum is election</p>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                            quae ab illo inventore veritatis et quasi architecto beatae vitae
                            dicta sunt explicabo. </p>
                              </div>
                </li>
                <li class="bg3">
               
                    <div class="bgDescription"></div>
                    <div class="description"><div id="bt_vergalmerc"><a href="mercados_galeria.php"><img src="images/btvergal2.png" alt="" width="104" height="27" /></a></div>
						<div id="imgtop"><img src="imgsacord/img.jpg" alt="" width="240" height="118" /></div>
                           <p>Lorem ipsum is election</p>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                            quae ab illo inventore veritatis et quasi architecto beatae vitae
                            dicta sunt explicabo. </p></div>
                </li>
                <li class="bg4 bleft">
                 
                    <div class="bgDescription"></div>
                    <div class="description"><div id="bt_vergalmerc"><a href="mercados_galeria.php"><img src="images/btvergal2.png" alt="" width="104" height="27" /></a></div>
			<div id="imgtop"><img src="imgsacord/img.jpg" alt="" width="240" height="118" /></div>
                                <p>Lorem ipsum is election</p>
                      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                            quae ab illo inventore veritatis et quasi architecto beatae vitae
                            dicta sunt explicabo. </p>
                                </div>
                </li>
            </ul>

</div>
        <!-- The JavaScript -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script type="text/javascript">
            $(function() {
                $('#accordion > li').hover(
                    function () {
                        var $this = $(this);
                        $this.stop().animate({'width':'380px'},500);
                        $('.heading',$this).stop(true,true).fadeOut();
                        $('.bgDescription',$this).stop(true,true).slideDown(500);
                        $('.description',$this).stop(true,true).fadeIn();
                    },
                    function () {
                        var $this = $(this);
                        $this.stop().animate({'width':'146px'},1000);
                        $('.heading',$this).stop(true,true).fadeIn();
                        $('.description',$this).stop(true,true).fadeOut(500);
                        $('.bgDescription',$this).stop(true,true).slideUp(700);
                    }
                );
            });
        </script>
    </body>
</html>