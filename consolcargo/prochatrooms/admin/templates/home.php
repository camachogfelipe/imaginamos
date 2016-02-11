
<div>

<span class="result">
	&nbsp;<?php echo $result;?>
</span>

<table class="table">
<tr><td class="header"><b>Welcome to the Administration Control Panel</b></td></tr>
</table>

<br>

<table class="table">
<tr><td class="header"><b>Information &amp; Additional Resources</b></td></tr>
<tr><td>&#187;&nbsp;[<a href='http://prochatrooms.com/community/' target='_blank'>Community Forum</a>] - "How to?" Tutorials and User to User support for Pro Chat Rooms software.</td></tr>
<tr><td>&#187;&nbsp;[<a href='http://prochatrooms.com/news.php' target='_blank'>Latest News</a>] - For the lastest news from Pro Chat Rooms.</td></tr>
<tr><td>&#187;&nbsp;[<a href='http://prochatrooms.com/clients.php' target='_blank'>Client Area</a>] - For all updates &amp; patches for the Pro Chat Rooms software.</td></tr>
<tr><td>&nbsp;</td></tr>
</table>

<br>

<table class="table">
<tr><td class="header"><b>Latest News &amp; Updates</b></td></tr>
<tr><td><iframe scrolling="yes" style="height:140px;width:99%;border:1px solid #84B2DE;overflow-x:hidden;background-color:#FFFFFF;" src="http://prochatrooms.com/pcr_newsfeed.txt">Iframes are not supported.</iframe></td></tr>
</table>

<br>

<table class="table">
<tr><td class="header"><b>Chat Room Version</b></td></tr>
<tr><td>You are currently using version <?php echo $CONFIG['version'];?></td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&#187; [<a href="http://prochatrooms.com/clients.php" target="_blank">Download Updates</a>]</td></tr>
</table>

<br>

<table class="table">
<tr><td class="header"><b>Available Plugins</b></td></tr>
<tr><td>The following plugins have been found in the <i>/plugins/</i> folder,</td></tr>
<tr><td>
	<?php if(file_exists("../plugins/rembrand/index.php")){?><i>Remove Branding,</i> <?php }?>
	<?php if(file_exists("../plugins/adver/index.php")){?><i>Adverts,</i> <?php }?>
	<?php if(file_exists("../plugins/events/index.php")){?><i>Events,</i> <?php }?>
	<?php if(file_exists("../plugins/games/index.php")){?><i>Games,</i> <?php }?>
	<?php if(file_exists("../plugins/invisible/index.html")){?><i>Invisible Admins,</i> <?php }?>
	<?php if(file_exists("../plugins/login_gallery/index.php")){?><i>Login Gallery,</i> <?php }?>
	<?php if(file_exists("../plugins/moderated_chat/index.php")){?><i>Moderated Chat,</i> <?php }?>
	<?php if(file_exists("../plugins/one2one/index.html")){?><i>One2One,</i> <?php }?>
	<?php if(file_exists("../plugins/share/index.php")){?><i>Share,</i> <?php }?>
	<?php if(file_exists("../plugins/virtual_credits/index.php")){?><i>Virtual Credits,</i> <?php }?>
	<?php if(file_exists("../plugins/webcams/index.html")){?><i>Webcams,</i> <?php }?>
</td></tr>
<tr><td>&nbsp;</td></tr>
<tr><td>&#187; [<a href="http://prochatrooms.com/plugins.php" target="_blank">Get More Plugins</a>]</td></tr>
</table>

<br>

<table class="table">
<tr><td class="header"><b>Server Details</b></td></tr>
<tr><td>&#187; Domain Name: <?php echo $_SERVER['SERVER_NAME'];?></td></tr>
</table>

<br>

<table class="table">
<tr><td class="header"><b>Login IP &amp; Browser Details</b></td></tr>
<tr><td>&#187; Browser: <?php echo $_SERVER['HTTP_USER_AGENT'];?></td></tr>
<tr><td>&#187; UserIP: <?php echo getIP();?></td></tr>
<tr><td>&nbsp;</td></tr>
</table>

</div>
