$(function() {
var add = 0;
  $(".amt").each(function() {
   add += Number(1);
  
  });
  //$('#nprodinclud').html(add);

  if(add >= 5){
  
  $('#desact').hide();
  //$('#msjnprodinclud').empty().html("Ya seleccion&oacute; el m&aacute;ximo numero de productos que puede incluir");
  }

});