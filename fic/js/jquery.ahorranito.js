(function($){
 $.fn.ahorranito = function(options) {
 
	var defaults = {
		theme: 'claro', /*puede ser 'clear', 'dark'*/
		type: 1, /* 1 = web , 2 = movil , 3 = software*/
		width: '220',
		height: '40',
		fontFamily: 'Helvetica, Arial',
		fontColor1:'#39444A',
		fontColor2:'#0CF'
	};
	var options = $.extend(defaults, options);
	
	return this.each(function() {
		
		/*si el theme es oscuro cambiar color de fuente*/
		if (options.theme == 'oscuro'){ options.fontColor1 = '#fff'}	
		/*cambiar string si el tipo de proyecto*/
		var typeString = '';
		if (options.type == 1){typeString='Dise&ntilde;o Web'}else if(options.type == 2){typeString='Dise&ntilde;o Móvil'}else if(options.type==3){typeString = 'Software Web'}
		/*Classes css*/
		var stylesBox = {'font-size':'12px', 'height':options.height, 'line-height':options.height+'px', 'width':options.width};
		/*Link a la imagen de ahorranito*/
		var imgIconPath = 'http://www.imaginamos.com/derechos_autor_gris/ahorranito-2.png'
		/*Calculo de margin superior*/
		var marginTop = (options.height/2)- (22/2);
		/*Classes css*/
		var ahorranitoStyle = 'background: url('+imgIconPath+') no-repeat; width: 22px; height: 22px; display: block; float: left; font-size: 12px; margin: '+marginTop+'px 10px 0px 0px;'
		/*Classes css*/
		var linksStyle = 'font-family: '+options.fontFamily+'; font-weight: 500; float: left; color:'+options.fontColor1+'; text-decoration: none; margin-right: 3px;';
		/*Classes css*/
		var linksStyleA = 'color: '+options.fontColor2+';';
		
		$(this).css(stylesBox );
		var txt ='<span id="ahorranito2" style="'+ahorranitoStyle+'"></span>';
		txt += '<a href="http://www.imaginamos.com" target="_blank" style="'+linksStyle+'">'+typeString+':</a>'; 
		txt += '<a href="http://www.imaginamos.com" target="_blank" style="'+linksStyle+'">imagin<span style="'+linksStyleA+'">a</span>mos.com</a>';
		$(this).html(txt);
    });
 
 };
})(jQuery);
