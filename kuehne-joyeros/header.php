<?php include("admin/core/mapping/include.mapping.php"); 

$categoria = selectCategoria();
$logo = selecLogo();
if($_GET['i'] != ""){
	$_SESSION['idioma'] = $_GET['i'];
}

if($_GET['d'] != ""){
	$_SESSION['d'] = $_GET['d'];
}


?>

<script type="text/javascript" src="scripts/codigo.js"></script>
<script type="text/javascript" >
function cargar(pagina,id,datos){
	
	if(id > 0){
		document.getElementById('produc'+id).style.position="absolute";
		document.getElementById('produc'+id).style.top= datos+"px";
	}
	
	llamarasincrono(pagina, 'produc'+id);
	
}

function cargar2(pagina){
	
	llamarasincrono(pagina, 'producto_c');
	
}

function esInteger(e)
{
  var charCode
  if (navigator.appName == "Netscape") // Veo si es Netscape o Explorer (mas adelante lo explicamos)
    charCode = e.which // leo la tecla que ingreso
  else
    charCode = e.keyCode // leo la tecla que ingreso

  status = charCode
  if (charCode > 31 && (charCode < 48 || charCode > 57))
  { // Chequeamos que sea un numero comparandolo con los valores ASCII
    //alert("Esto no es un Numero !!")

    return false
  }
  return true
}


function enviar_busqueda(){
	
	var buscar = document.getElementById('buscar').value;
    if(buscar != ""){
		location.href = "resultados.php?buscar="+buscar;
	}
}


function enviar_filtro(){
	var desde = document.getElementById('desde').value;
	var hasta = document.getElementById('hasta').value;
    if(desde != "" && hasta!= ""){
		document.form1.submit();
	}
}

document.onkeyup = ChecaTecla;

function ChecaTecla(e){
  if(!e)
    var e = window.event;
    key = e.keyCode;
    if (key==13){
        enviar_busqueda();			
   }
}
</script>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<div class="container">
<div class="header mayus clearfixv">
    <div class="menu clearfix">
      <ul>
        <li>
          <a href="#" class="catalogo <?php if($_SESSION['d'] == 0){ ?>active2<?php } ?>"><?php if($_SESSION['idioma'] == "en"){ ?>Catalog<?php }else{ ?>Catálogo<?php } ?></a>    
          <div class="menu_desplegado">     
          <ul>
          
          <?php 
		  	$datos = 0;
		  for($a=0; $a < count($categoria->id_categoria); $a++){ ?>
			  <li><a href='resultados.php?buscar=<?php if($_SESSION['idioma'] == "en"){ echo $categoria->desc_categoria_en[$a]; }else{ echo $categoria->desc_categoria_es[$a]; } ?>' class='topnav'>
			  <?php if($_SESSION['idioma'] == "en"){ echo $categoria->desc_categoria_en[$a]; }else{ echo $categoria->desc_categoria_es[$a]; } ?></a>
					
                     <ul class='subnav'>
					<?php 
						$subcategoria = selectSubcategoria($categoria->id_categoria[$a]);
						
						for($b=0; $b < count($subcategoria->id_subcategoria); $b++){
							
					?>
                        <li><a class="subnav_a" href='resultados.php?buscar=<?php if($_SESSION['idioma'] == "en"){ echo $subcategoria->desc_subcategoria_en[$b]; }else{ echo $subcategoria->desc_subcategoria_es[$b]; } ?>' >
						<?php if($_SESSION['idioma'] == "en"){ echo $subcategoria->desc_subcategoria_en[$b]; }else{ echo $subcategoria->desc_subcategoria_es[$b]; } ?>
						</a>   
                               <div id="produc<?php echo $a; ?>"></div>
                        </li> 
 
                   <?php 
				   		
				   } ?>
                   
                   </ul>
			  </li>  				
           <?php 
		   			$datos = $datos + (-42);
		   } ?>
                 
        </ul>
      
  			 <div id="producto_c" style="position:absolute; left:380px; top:10px"></div>
       
     </div>      
   </li>
           
        <li><a href="tienda.php?id=4&d=4" <?php if($_SESSION['d'] == 4){ ?>class="active2"<?php } ?>><?php if($_SESSION['idioma'] == "en"){ ?>Store<?php }else{ ?>Tienda<?php } ?></a></li>
        <li>
          <a href="#" class="servicio <?php if($_SESSION['d'] == 5){ ?>active2<?php } ?>" ><?php if($_SESSION['idioma'] == "en"){ ?>Service Workshop<?php }else{ ?>Servicio de Taller<?php } ?></a>
          <div class="clearfix content_servicio">
              <ul>
                <li><a href="contenido.php?id=5&d=5"><?php if($_SESSION['idioma'] == "en"){ ?>Maintenance and Repair<?php }else{ ?>Mantenimiento y Reparación<?php } ?></a></li>
                <li><a href="contenido.php?id=6&d=5"><?php if($_SESSION['idioma'] == "en"){ ?>Jewelry Purchase<?php }else{ ?>Compra de Joyeria<?php } ?></a></li>
              </ul>  
          </div>
        </li>
        
        <li><a href="contenido.php?id=7&d=7" <?php if($_SESSION['d'] == 7){ ?>class="active2"<?php } ?>><?php if($_SESSION['idioma'] == "en"){ ?>Company<?php }else{ ?>Empresa<?php } ?></a></li>
        
        <li><a href="contactenos.php?d=10" <?php if($_SESSION['d'] == '10'){ ?>class="active2"<?php } ?>><?php if($_SESSION['idioma'] == "en"){ ?>Contact Us<?php }else{ ?>ContÁctenos<?php } ?></a></li>
        
       <li>
          <a href="#" class="filtrar"><?php if($_SESSION['idioma'] == "en"){ ?>Filter by price<?php }else{ ?>Filtrar por precio<?php } ?></a>
          <div class="clearfix content_filtrar">
             <form action="resultados.php" name="form1">
              <div class="left"><label class="left"><?php if($_SESSION['idioma'] == "en"){ ?>from<?php }else{ ?>desde<?php } ?></label></div>
              <div class="left"><input name="desde" id="desde" type="text" class="left" onKeyPress="return esInteger(event);"></div>
              <div class="left"><label class="left" onKeyPress="return esInteger(event);">&nbsp;&nbsp;<?php if($_SESSION['idioma'] == "en"){ ?>to<?php }else{ ?>Hasta<?php } ?></label></div>
              <div class="left"><input name="hasta" id="hasta" type="text"  class="left"></div>
             
              <a href="#" class="left registrar ok"  onClick="javascript:enviar_filtro();">OK</a>
              </form>
          </div>
        </li>
       
        <li class="input">
            <input name="buscar" id="buscar" type="text">
            <a href="#" class="buscar" onClick="javascript:enviar_busqueda();">buscar</a>
        </li> 

               
      </ul>  
</div>


<div class="idiomas">
      <a href="index.php?i=es&d=0" <?php if($_SESSION['idioma'] == "es"){ ?>class="left active"<?php }else{ ?>class="left"<?php } ?>>ES</a>
      <a href="index.php?i=en&d=0" <?php if($_SESSION['idioma'] == "en"){ ?>class="left active"<?php }else{ ?>class="left"<?php } ?>>EN</a>
    </div>
    <a href="index.php?d=0" class="logo"><img src="admin/modules/logo/files/<?php echo $logo->logoHeader[0]; ?>" width="155" height="120"></a>
  </div>
  
</div> 