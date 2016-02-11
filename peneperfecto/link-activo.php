<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Link Activo + Iframes</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<style type="text/css">

#menues a {
display: block;
width: 100px;
height: 20px;
float: left;
font-family: arial, serif;
font-size: 10pt;
text-decoration: none;
color: #000;
text-align: center;
vertical-align: middle;
line-height: 20px;
}
a.menu {
background-color: #AE9786;
}
a.menu:hover {
background-color: #5BACA0;
}
/* esta clase define el formato del menu Activo y de la página actualmente cargada en el Iframe */
a.menu.menuActual, a.menu.menuActual:hover, a.menu.menuActual:visited {
background-color: #B4B87C;
}
div.rem_float {
clear: both;
width: 1px;
height: 10px;
}

#instrucciones {
margin-top: 10px;
font-family: arial, serif;
font-size: 10pt;
}

pre {
color: #5E0000;
font-family: verdana, serif;
font-size: 10pt;
}
</style>

<script type="text/javascript">
//<![CDATA[
function frameActivo(a){var b,i;if(a==null)return;b=document.getElementsByTagName("A");for(i=0;i<b.length;i++)if(b[i].target==a){if(b[i].href==window.frames[a].location.href){b[i].className+=" menuActual";b[i].blur()}else limpiar(b[i],"menuActual")}}function limpiar(a,b){var i,curList,newList;if(a.className==null)return;newList=new Array();curList=a.className.split(" ");for(i=0;i<curList.length;i++)if(curList[i]!=b)newList.push(curList[i]);a.className=newList.join(" ")}
//]]>
</script>
</head>
<body>


<div id="menues">
<a class="menu" href="index.php" >uno</a>
<a class="menu" href="empresa.php" >dos</a>
<a class="menu" href="beneficios.php">tres</a>
<a class="menu" href="contactenos.php">cuatro</a>

</div>
<div class="rem_float"><!-- fix --></div>
</body>
</html>