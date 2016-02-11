//Obtener el valor de radio button seleccionado
function getRadioButtonSelectedValue(ctrl)
{
  for(i=0;i<ctrl.length;i++)
    if(ctrl[i].checked) return ctrl[i].value;
}

//Obtener Sublineas
function getSublineas(){

  var sublinea=0;

  clase=getRadioButtonSelectedValue(document.frmClase.clase);
  var linea=getRadioButtonSelectedValue(document.frmLinea.linea);

  if (clase=="")
  {
    document.getElementById("opcion2").innerHTML="";

    return;
  } 
  if (clase == "3") {
    $('.forma').html("").remove();
    $('.capacidad').html("").remove();
  };

  if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  }
  else
  {// code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function()
  {
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
      document.getElementById("opcion2").innerHTML=xmlhttp.responseText;
      
      getMateriales();
      getCapacidad();
      getBoca();
      getGaleria();
      $(".scroll2").mCustomScrollbar()
    }
  }
  xmlhttp.open("GET","filtroGetSublineas.php?clase="+clase+"&linea="+linea,true);
  xmlhttp.send();

}

//Obtener Categorias
function getCategorias()
{
  var sublinea=0;

  clase=getRadioButtonSelectedValue(document.frmClase.clase);
  
  var linea=0;
  for ( var i = 0; i < document.frmLinea.linea.length; i++ ){
    if ( document.frmLinea.linea[i].checked ){
      var linea=getRadioButtonSelectedValue(document.frmLinea.linea);

    }
  }

  var sublinea=0;
  if (document.frmSublinea!=null) {
    for ( var j = 0; j < document.frmSublinea.sublinea.length; j++ ){
      if ( document.frmSublinea.sublinea[j].checked ){
        sublinea=getRadioButtonSelectedValue(document.frmSublinea.sublinea);

      }
    }
  };

  if (clase=="")
  {
    document.getElementById("opcion3").innerHTML="";

    return;
  } 
  if (clase == "3") {
    $('.forma').html("").remove();
    $('.capacidad').html("").remove();
  };

  if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
    var xmlhttp=new XMLHttpRequest();
  }
  else
  {// code for IE6, IE5
    var xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function()
  {
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
      document.getElementById("opcion3").innerHTML=xmlhttp.responseText;
      getMateriales();
      getFormas();
      getGaleria();
      getCapacidad();
      getBoca();
      $(".scroll3").mCustomScrollbar()

    }
  }
  xmlhttp.open("GET","filtroGetCategorias.php?clase="+clase+"&linea="+linea+"&sublinea="+sublinea,true);
  xmlhttp.send();

}


//Obtener Materiales

function getMateriales()
{
  var sublinea=0;

  clase=getRadioButtonSelectedValue(document.frmClase.clase);
  
  var linea=0;
  for ( var i = 0; i < document.frmLinea.linea.length; i++ ){
    if ( document.frmLinea.linea[i].checked ){
      var linea=getRadioButtonSelectedValue(document.frmLinea.linea);

    }
  }

  var sublinea=0;
  if (document.frmSublinea!=null) {
    for ( var j = 0; j < document.frmSublinea.sublinea.length; j++ ){
      if ( document.frmSublinea.sublinea[j].checked ){
        sublinea=getRadioButtonSelectedValue(document.frmSublinea.sublinea);

      }
    }
  };

  var categoria=0;
  if (document.frmCategoria!=null) {
    for ( var k = 0; k < document.frmCategoria.categoria.length; k++ ){
      if ( document.frmCategoria.categoria[k].checked ){
        categoria=getRadioButtonSelectedValue(document.frmCategoria.categoria);
      }
    }
  };

  if (clase=="")
  {
    document.getElementById("opcion4").innerHTML="";

    return;
  } 
  if (clase == "3") {
    $('.forma').html("").remove();
    $('.capacidad').html("").remove();
  };

  if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
    var xmlhttp=new XMLHttpRequest();
  }
  else
  {// code for IE6, IE5
    var xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function()
  {
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
      document.getElementById("opcion4").innerHTML=xmlhttp.responseText;
      getGaleria();
      getFormas();
      getBoca();
      getCapacidad();

      $(".scroll4").mCustomScrollbar()

    }
  }
  xmlhttp.open("GET","filtroGetMateriales.php?clase="+clase+"&linea="+linea+"&sublinea="+sublinea+"&categoria="+categoria,true);
  xmlhttp.send();

}

//Obtener Formas

function getFormas(){
  
  var sublinea=0;

  clase=getRadioButtonSelectedValue(document.frmClase.clase);
  
  var linea=0;
  for ( var i = 0; i < document.frmLinea.linea.length; i++ ){
    if ( document.frmLinea.linea[i].checked ){
      var linea=getRadioButtonSelectedValue(document.frmLinea.linea);

    }
  }

  var sublinea=0;
  if (document.frmSublinea!=null) {
    for ( var j = 0; j < document.frmSublinea.sublinea.length; j++ ){
      if ( document.frmSublinea.sublinea[j].checked ){
        sublinea=getRadioButtonSelectedValue(document.frmSublinea.sublinea);

      }
    }
  };

  var categoria=0;
  if (document.frmCategoria!=null) {
    for ( var k = 0; k < document.frmCategoria.categoria.length; k++ ){
      if ( document.frmCategoria.categoria[k].checked ){
        categoria=getRadioButtonSelectedValue(document.frmCategoria.categoria);
      }
    }
  };

  var material=0;
  if (document.frmMaterial!=null) {
    for ( var l = 0; l < document.frmMaterial.material.length; l++ ){
      if ( document.frmMaterial.material[l].checked ){
        material=getRadioButtonSelectedValue(document.frmMaterial.material);
      }
    }
  };

  if (clase=="")
  {
    document.getElementById("opcion5").innerHTML="";

    return;
  } 
  if (clase == "3") {
    $('.forma').html("").remove();
    $('.capacidad').html("").remove();
  };

  if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
    var xmlhttp=new XMLHttpRequest();
  }
  else
  {// code for IE6, IE5
    var xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function()
  {
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
      document.getElementById("opcion5").innerHTML=xmlhttp.responseText;
      getGaleria();
      getCapacidad();
      getBoca();

      $(".scroll5").mCustomScrollbar()

    }
  }
  xmlhttp.open("GET","filtroGetFormas.php?clase="+clase+"&linea="+linea+"&sublinea="+sublinea+"&categoria="+categoria+"&material="+material,true);
  xmlhttp.send();

}


//Obtener Capacidad

function getCapacidad(){
  
  var sublinea=0;

  clase=getRadioButtonSelectedValue(document.frmClase.clase);
  
  var linea=0;
  for ( var i = 0; i < document.frmLinea.linea.length; i++ ){
    if ( document.frmLinea.linea[i].checked ){
      var linea=getRadioButtonSelectedValue(document.frmLinea.linea);

    }
  }

  var sublinea=0;
  if (document.frmSublinea!=null) {
    for ( var j = 0; j < document.frmSublinea.sublinea.length; j++ ){
      if ( document.frmSublinea.sublinea[j].checked ){
        sublinea=getRadioButtonSelectedValue(document.frmSublinea.sublinea);

      }
    }
  };

  var categoria=0;
  if (document.frmCategoria!=null) {
    for ( var k = 0; k < document.frmCategoria.categoria.length; k++ ){
      if ( document.frmCategoria.categoria[k].checked ){
        categoria=getRadioButtonSelectedValue(document.frmCategoria.categoria);
      }
    }
  };

  var material=0;
  if (document.frmMaterial!=null) {
    for ( var l = 0; l < document.frmMaterial.material.length; l++ ){
      if ( document.frmMaterial.material[l].checked ){
        material=getRadioButtonSelectedValue(document.frmMaterial.material);
      }
    }
  };

  var forma=0;
  if (document.frmForma!=null) {
    for ( var l = 0; l < document.frmForma.forma.length; l++ ){
      if ( document.frmForma.forma[l].checked ){
        forma=getRadioButtonSelectedValue(document.frmForma.forma);
      }
    }
  };

  if (clase=="")
  {
    document.getElementById("opcion6").innerHTML="";

    return;
  } 
  if (clase == "3") {
    $('.forma').html("").remove();
    $('.capacidad').html("").remove();
  };

  if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
    var xmlhttp=new XMLHttpRequest();
  }
  else
  {// code for IE6, IE5
    var xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function()
  {
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
      document.getElementById("opcion6").innerHTML=xmlhttp.responseText;
      getGaleria();
      getBoca();
      $(".scroll6").mCustomScrollbar()

    }
  }
  xmlhttp.open("GET","filtroGetCapacidades.php?clase="+clase+"&linea="+linea+"&sublinea="+sublinea+"&categoria="+categoria+"&material="+material+"&forma="+forma,true);
  xmlhttp.send();

}


//Obtener Bocas

function getBoca(){
  
  var sublinea=0;

  clase=getRadioButtonSelectedValue(document.frmClase.clase);
  
  var linea=0;
  for ( var i = 0; i < document.frmLinea.linea.length; i++ ){
    if ( document.frmLinea.linea[i].checked ){
      var linea=getRadioButtonSelectedValue(document.frmLinea.linea);

    }
  }

  var sublinea=0;
  if (document.frmSublinea!=null) {
    for ( var j = 0; j < document.frmSublinea.sublinea.length; j++ ){
      if ( document.frmSublinea.sublinea[j].checked ){
        sublinea=getRadioButtonSelectedValue(document.frmSublinea.sublinea);

      }
    }
  };

  var categoria=0;
  if (document.frmCategoria!=null) {
    for ( var k = 0; k < document.frmCategoria.categoria.length; k++ ){
      if ( document.frmCategoria.categoria[k].checked ){
        categoria=getRadioButtonSelectedValue(document.frmCategoria.categoria);
      }
    }
  };

  var material=0;
  if (document.frmMaterial!=null) {
    for ( var l = 0; l < document.frmMaterial.material.length; l++ ){
      if ( document.frmMaterial.material[l].checked ){
        material=getRadioButtonSelectedValue(document.frmMaterial.material);
      }
    }
  };

  var forma=0;
  if (document.frmForma!=null) {
    for ( var l = 0; l < document.frmForma.forma.length; l++ ){
      if ( document.frmForma.forma[l].checked ){
        forma=getRadioButtonSelectedValue(document.frmForma.forma);
      }
    }
  };

  if (clase=="")
  {
    document.getElementById("opcion7").innerHTML="";

    return;
  } 
  if (clase == "3") {
    $('.forma').html("").remove();
    $('.capacidad').html("").remove();
  };


  if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
    var xmlhttp=new XMLHttpRequest();
  }
  else
  {// code for IE6, IE5
    var xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function()
  {
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
      document.getElementById("opcion7").innerHTML=xmlhttp.responseText;
      getGaleria();
      $(".scroll7").mCustomScrollbar()

    }
  }
  xmlhttp.open("GET","filtroGetBocas.php?clase="+clase+"&linea="+linea+"&sublinea="+sublinea+"&categoria="+categoria+"&material="+material+"&forma="+forma,true);
  xmlhttp.send();

}


//Obtener las lineas de cada clase
//Esta es la primera función que se ejecuta luego de seleccionar la clase
function getLineas()
{ 
  $("#pag").val(1);
/*
  $('.sublinea').html("").remove();
  $('.categoria').html("").remove();
  $('.material').html("").remove();
  $('.forma').html("").remove();
  $('.capacidad').html("").remove();
  $('.boca').html("").remove();
  */

  
  var sublinea=0;
  document.getElementById("columderproductos").style.visibility="";
  clase=getRadioButtonSelectedValue(document.frmClase.clase);
  ;
  if (clase=="")
  {
    document.getElementById("opcion1").innerHTML="";
    return;
  } 
  if (clase == "3") {
    $('.forma').html("").remove();
    $('.capacidad').html("").remove();
  };

  if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
    var xmlhttp=new XMLHttpRequest();
  }
  else
  {// code for IE6, IE5
    var xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function()
  {
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
      $("#opcion1").html(xmlhttp.responseText);
      getGaleria();
      getSublineas();
      
      getMateriales();
      getFormas();
      getCapacidad();
      getBoca();
    }
  }
  xmlhttp.open("GET","filtroGetLineas.php?clase="+clase,true);
  xmlhttp.send();
}


//Obtener los productos de acuerdo a los diferentes resultados de busqueda
function getGaleria(){

  var sublinea=0;

  clase=getRadioButtonSelectedValue(document.frmClase.clase);
  
  var linea=0;
  for ( var i = 0; i < document.frmLinea.linea.length; i++ ){
    if ( document.frmLinea.linea[i].checked ){
      var linea=getRadioButtonSelectedValue(document.frmLinea.linea);

    }
  }

  var sublinea=0;
  if (document.frmSublinea!=null) {
    for ( var j = 0; j < document.frmSublinea.sublinea.length; j++ ){
      if ( document.frmSublinea.sublinea[j].checked ){
        sublinea=getRadioButtonSelectedValue(document.frmSublinea.sublinea);

      }
    }
  };

  var categoria=0;
  if (document.frmCategoria!=null) {
    for ( var k = 0; k < document.frmCategoria.categoria.length; k++ ){
      if ( document.frmCategoria.categoria[k].checked ){
        categoria=getRadioButtonSelectedValue(document.frmCategoria.categoria);
      }
    }
  };

  var material=0;
  if (document.frmMaterial!=null) {
    for ( var k = 0; k < document.frmMaterial.material.length; k++ ){
      if ( document.frmMaterial.material[k].checked ){
        material=getRadioButtonSelectedValue(document.frmMaterial.material);
      }
    }
  };

  var forma=0;
  if (document.frmForma!=null) {
    for ( var k = 0; k < document.frmForma.forma.length; k++ ){
      if ( document.frmForma.forma[k].checked ){
        forma=getRadioButtonSelectedValue(document.frmForma.forma);
      }
    }
  };

  var capacidad=0;
  if (document.frmCapacidad!=null) {
    for ( var k = 0; k < document.frmCapacidad.capacidad.length; k++ ){
      if ( document.frmCapacidad.capacidad[k].checked ){
        capacidad=getRadioButtonSelectedValue(document.frmCapacidad.capacidad);
      }
    }
  };

  var boca=0;
  if (document.frmBoca!=null) {
    for ( var k = 0; k < document.frmBoca.boca.length; k++ ){
      if ( document.frmBoca.boca[k].checked ){
        boca=getRadioButtonSelectedValue(document.frmBoca.boca);
      }
    }
  };




  if (clase=="")
  {
    document.getElementById("resulset").innerHTML="";
    return;
  } 

  if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
    var xmlhttp=new XMLHttpRequest();
  }
  else
  {// code for IE6, IE5
    var xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function()
  {
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
      document.getElementById("resulset").innerHTML=xmlhttp.responseText;

    }
  }
  xmlhttp.open("GET","galeriaResultadosFiltro.php?clase="+clase+"&forma="+forma+"&capacidad="+capacidad+"&boca="+boca+"&linea="+linea+"&sublinea="+sublinea+"&categoria="+categoria+"&material="+material+"&pag="+$("#pag").val(),true);
  xmlhttp.send();
}

function cambiarInputPagina(pag){
  $("#pag").val(pag);
  getGaleria();
}


function limpiaSublinea(){
  $('input[name=sublinea]').attr('checked',false);
  getSublineas();
}

function todoSublineas(){
  getSublineas();
}

function limpiaCategoria(){
  $('input[name=categoria]').attr('checked',false);
  
}

function todoCategorias(){
  
}

function limpiaMaterial(){
  $('input[name=material]').attr('checked',false);
  getMateriales();
}

function todoMateriales(){
  getMateriales();
}

function limpiaForma(){
  $('input[name=forma]').attr('checked',false);
  getFormas();
}

function todoFormas(){
  getFormas();
}

function limpiaCapacidad(){
  $('input[name=capacidad]').attr('checked',false);
  getCapacidad();
}

function todoCapacidades(){
  getCapacidad();
}

function limpiaBoca(){
  $('input[name=boca]').attr('checked',false);
  getBoca();
}

function todoBocas(){
  getBoca();
}
