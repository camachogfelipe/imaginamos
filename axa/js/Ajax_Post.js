// JavaScript Document
function consulta(url,datos)
{
	var coni = ajax();
	coni.open('POST',url,false);
	coni.onreadystatechange = function ()
										{
											if(coni.readyState==1)
											{
                        						//$('#msg').html('cargando...');
                							}else if (coni.readyState==4)
												{
													if (coni.status==200)
														{
															url = coni.responseText;
															//$('#loader').hide();
														}
														else if(coni.status==404)
																{
																	//preloader.innerHTML = "La página no existe";
																	//$('#msg').html('pag no existe');
																}
																else
																	{
																		//mostramos el posible error
																		//preloader.innerHTML = "Error:".ajax.status; 
																		//$('#msg').html('error:'.coni.status);
																	}
												}
													
										}	
	coni.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	coni.send("datos="+datos);
	return url;
}
function ajax()
{
	var xmlHttp=null;
	if (window.ActiveXObject) 
		xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
		else 
			if (window.XMLHttpRequest) 
				xmlHttp = new XMLHttpRequest();
				return xmlHttp;	
}
