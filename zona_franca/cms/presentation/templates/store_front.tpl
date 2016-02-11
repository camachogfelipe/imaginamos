{load_presentation_object filename="store_front" assign="obj"}
<!DOCTYPE html>
<html>
<head>
<title>Zona Franca</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<meta charset="utf-8">
<!--Estilos-->
<link type="text/css" rel="stylesheet" href="{$obj->mSiteUrl}/styles/page.css" />
<link type="text/css" rel="stylesheet" href="{$obj->mSiteUrl}/styles/styles.css" />
<link type="text/css" rel="stylesheet" href="{$obj->mSiteUrl}/styles/custom_smoothness/jquery-ui-1.8.23.custom.css"  />
<link type="text/css" rel="stylesheet" href="{$obj->mSiteUrl}/styles/bootstrap.css" >
<link type="text/css" rel="stylesheet" href="{$obj->mSiteUrl}/styles/bootstrap-responsive.css" >
<link type="text/css" rel="stylesheet" href="{$obj->mSiteUrl}/styles/constitucion.css" >
<link rel="stylesheet" type="text/css" href="http://cms.imaginamos.com/components/editor/jquery.cleditor.css">

{if $obj->mConten=="login.tpl"}
      {literal}
<style type="text/css">


.form-signin {
  max-width: 300px;
  padding: 19px 29px 29px;
  margin: 0 auto 20px;
  background-color: #fff;
  border: 1px solid #e5e5e5;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
  -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
  -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
  box-shadow: 0 1px 2px rgba(0,0,0,.05);
}
.form-signin .form-signin-heading, .form-signin .checkbox {
  margin-bottom: 10px;
}
.form-signin input[type="text"], .form-signin input[type="password"] {
  font-size: 16px;
  height: auto;
  margin-bottom: 15px;
  padding: 7px 9px;
}
</style>
{/literal}
    {/if}
<!--Fin Estilos-->

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="{$obj->mSiteUrl}/scripts/hashchange.js"></script>
<!--Jquery UI -->
<script type="text/javascript" src="{$obj->mSiteUrl}/scripts/jquery-ui-1.8.23.custom.min.js"></script>
<script type='text/javascript' src='http://cms.imaginamos.com/components/editor/jquery.cleditor.js'></script>

<!--Twitter Bootstrap-->
<script src="{$obj->mSiteUrl}/scripts/dropdown.js"></script>
<script src="{$obj->mSiteUrl}/scripts/alerts.js"></script>
<script src="{$obj->mSiteUrl}/scripts/modal.js"></script>
<script src="{$obj->mSiteUrl}/scripts/modal.js"></script>
<!--Twitter Bootstrap End-->

<script type="text/javascript" src="{$obj->mSiteUrl}/scripts/funciones.js"></script>
{if $obj->mConten!="login.tpl"}
      {literal}
<script type="text/javascript">
  $(function () {
    var items = $('#v-nav>ul>li').each(function () {
      $(this).click(function () {
        //remove previous class and add it to clicked tab
        items.removeClass('current');
        $(this).addClass('current');
        //hide all content divs and show current one
        //$('#v-nav>div.tab-content').hide().eq(items.index($(this))).show();
        //$('#v-nav>div.tab-content').hide().eq(items.index($(this))).fadeIn(100);
        $('#v-nav>div.tab-content').hide().eq(items.index($(this))).show();
        window.location.hash = $(this).attr('tab');
      });
    });

    if (location.hash) {
      showTab(location.hash);
    }
    else
    {
      showTab("tab1");
    }

    function showTab(tab) {
      $("#v-nav ul li:[tab*=" + tab + "]").click();
    }

    // Bind the event hashchange, using jquery-hashchange-plugin
    $(window).hashchange(function () {
      showTab(location.hash.replace("#", ""));
    })

    // Trigger the event hashchange on page load, using jquery-hashchange-plugin
    $(window).hashchange();
  });
</script>
{/literal}
    {/if}
<script type="text/javascript">
			var ajaxRutaAbs = '{$obj->mSiteUrl}/index.php?ajax';
      var rutaAbs = '{$obj->mSiteUrl}/index.php?';
    </script>
</head>
<body>
<div class="header">
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span6"> <img src="{$obj->mSiteUrl}/images/assets/imaginamos.png" width="212" height="38" class="logotipo"> </div>
		<div class="span6"> {if $obj->mConten!="login.tpl"}
			<div class="navbar">
				<div class="navbar-inner menu-superior">
					<ul class="nav">
						<li> <a href="{$obj->mSiteUrl}" title="Dashboard"><i class="icon-home h"></i> Dashboard</a> </li>
						<li class="divider-vertical"></li>
						<li> <a href="{$obj->mLogout}" title="Logout"><i class="icon-remove"></i> Logout</a> </li>
					</ul>
				</div>
			</div>
			{/if} </div>
	</div>
</div>
</div>

{include file=$obj->mConten}

   <!--Navbar Bottom-->
   <div class="navbar navbar-bottom bottom-dv">
    <div class="navbar-inne footer">
     <div class="container-fluid"> <a class="brand" href="#">Zona franca</a> </div>
    </div>
   </div>
   <!--End Navbar Bottom-->


<!-- Include JavaScript -->
<script type="text/javascript" src="{$obj->mSiteUrl}/scripts/hashchange.js"></script>
{literal}
<script type="text/javascript">
      try {
        var pageTracker = _gat._getTracker("UA-16380505-1");
        pageTracker._trackPageview();
      }
      catch (err){}
    </script>
{/literal}
<script language="javascript">
  //$.cleditor.defaultOptions.height = 230;
  $("textarea").cleditor();
  //$(".cleditorMain").height(240);

</script>

</body>
</html>