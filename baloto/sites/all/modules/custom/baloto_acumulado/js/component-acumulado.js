// Javacsript function to format numbers
Number.prototype.formatMoney = function(c, d, t){
  var n = this, c = isNaN(c = Math.abs(c)) ? 2 : c, d = d == undefined ? "," : d, t = t == undefined ? "." : t, s = n < 0 ? "-" : "", i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", j = (j = i.length) > 3 ? j % 3 : 0;
  return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
};

(function($){
  jQuery.fn.playAcumulado = function() {    
    // Set the new number where count starts
    number = 1;
    // Set the new process loop on the javascript system
    process = setInterval(function(){
      $('#number-baloto-acumulado').startAcumulado(acumulado);
    },10);
  };

  jQuery.fn.restartAcumulado = function() {        
    // Set the new process loop on the javascript system
    $('#number-baloto-acumulado').text(0);
    return $(this);
  };


  // Starts 'acumulado' component
  jQuery.fn.startAcumulado = function(acumulado) {    
    // Increase math function
    number = number + acumulado_speed;
    // Looping control system
    if (number >= acumulado) $(this).stopAcumulado(acumulado);
    if (number < acumulado) $('#number-baloto-acumulado').text(number.formatMoney(0, ',', '.'));
  }

  // Stops 'acumulado' component
  jQuery.fn.stopAcumulado = function(acumulado) {
    // Gets acumulado
    number = $("#number-baloto-acumulado");
    number.text(acumulado.formatMoney(0, ',', '.'));
    // Stops the looping process
    clearInterval(process);    
    // Last count fireworks
    createFirework(15,150,6,4,number.offset().left,number.offset().top,number.offset().left,number.offset().top,false,false);
    setTimeout(function(){
      createFirework(25,150,6,4,number.offset().left+150,number.offset().top-20,number.offset().left+150,number.offset().top-20,false,false);
    },300);    
    setTimeout(function(){
      createFirework(20,150,6,4,number.offset().left+170,number.offset().top-15,number.offset().left+170,number.offset().top-15,false,false);
    },700);
    setTimeout(function(){
      createFirework(20,150,6,4,number.offset().left+230,number.offset().top,number.offset().left+230,number.offset().top,false,false);
    },1000);    
  }  
})(jQuery);