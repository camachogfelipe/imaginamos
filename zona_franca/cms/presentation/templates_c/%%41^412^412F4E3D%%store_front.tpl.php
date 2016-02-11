<?php /* Smarty version 2.6.24, created on 2013-10-16 17:02:42
         compiled from store_front.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'store_front.tpl', 1, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'store_front','assign' => 'obj'), $this);?>

<!DOCTYPE html>
<html>
<head>
<title>Zona Franca</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<meta charset="utf-8">
<!--Estilos-->
<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
/styles/page.css" />
<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
/styles/styles.css" />
<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
/styles/custom_smoothness/jquery-ui-1.8.23.custom.css"  />
<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
/styles/bootstrap.css" >
<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
/styles/bootstrap-responsive.css" >
<link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
/styles/constitucion.css" >
<link rel="stylesheet" type="text/css" href="http://cms.imaginamos.com/components/editor/jquery.cleditor.css">

<?php if ($this->_tpl_vars['obj']->mConten == "login.tpl"): ?>
      <?php echo '
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
'; ?>

    <?php endif; ?>
<!--Fin Estilos-->

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
/scripts/hashchange.js"></script>
<!--Jquery UI -->
<script type="text/javascript" src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
/scripts/jquery-ui-1.8.23.custom.min.js"></script>
<script type='text/javascript' src='http://cms.imaginamos.com/components/editor/jquery.cleditor.js'></script>

<!--Twitter Bootstrap-->
<script src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
/scripts/dropdown.js"></script>
<script src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
/scripts/alerts.js"></script>
<script src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
/scripts/modal.js"></script>
<script src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
/scripts/modal.js"></script>
<!--Twitter Bootstrap End-->

<script type="text/javascript" src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
/scripts/funciones.js"></script>
<?php if ($this->_tpl_vars['obj']->mConten != "login.tpl"): ?>
      <?php echo '
<script type="text/javascript">
  $(function () {
    var items = $(\'#v-nav>ul>li\').each(function () {
      $(this).click(function () {
        //remove previous class and add it to clicked tab
        items.removeClass(\'current\');
        $(this).addClass(\'current\');
        //hide all content divs and show current one
        //$(\'#v-nav>div.tab-content\').hide().eq(items.index($(this))).show();
        //$(\'#v-nav>div.tab-content\').hide().eq(items.index($(this))).fadeIn(100);
        $(\'#v-nav>div.tab-content\').hide().eq(items.index($(this))).show();
        window.location.hash = $(this).attr(\'tab\');
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
'; ?>

    <?php endif; ?>
<script type="text/javascript">
			var ajaxRutaAbs = '<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
/index.php?ajax';
      var rutaAbs = '<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
/index.php?';
    </script>
</head>
<body>
<div class="header">
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span6"> <img src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
/images/assets/imaginamos.png" width="212" height="38" class="logotipo"> </div>
		<div class="span6"> <?php if ($this->_tpl_vars['obj']->mConten != "login.tpl"): ?>
			<div class="navbar">
				<div class="navbar-inner menu-superior">
					<ul class="nav">
						<li> <a href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
" title="Dashboard"><i class="icon-home h"></i> Dashboard</a> </li>
						<li class="divider-vertical"></li>
						<li> <a href="<?php echo $this->_tpl_vars['obj']->mLogout; ?>
" title="Logout"><i class="icon-remove"></i> Logout</a> </li>
					</ul>
				</div>
			</div>
			<?php endif; ?> </div>
	</div>
</div>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['obj']->mConten, 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

   <!--Navbar Bottom-->
   <div class="navbar navbar-bottom bottom-dv">
    <div class="navbar-inne footer">
     <div class="container-fluid"> <a class="brand" href="#">Zona franca</a> </div>
    </div>
   </div>
   <!--End Navbar Bottom-->


<!-- Include JavaScript -->
<script type="text/javascript" src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
/scripts/hashchange.js"></script>
<?php echo '
<script type="text/javascript">
      try {
        var pageTracker = _gat._getTracker("UA-16380505-1");
        pageTracker._trackPageview();
      }
      catch (err){}
    </script>
'; ?>

<script language="javascript">
  //$.cleditor.defaultOptions.height = 230;
  $("textarea").cleditor();
  //$(".cleditorMain").height(240);

</script>

</body>
</html>