var divs = document.getElementsByClassName("panel");
var q=new Array(); 
var u=0;
	for (var i =  0; i < divs.length; i++) {
		u++;
		$(divs[i]).attr('id',u);
		$(divs[i]).css("width",1000/divs.length+"px");
		q.push(divs[i].id);
	};
//alert(q);

function onclickhandler (w) {
	var _div = w.parentNode.parentNode;
	var id = _div.id;
	reduccion(_div);
	ampliacion(_div);
}

function onclosefade(r)
{
	$(".panel").css({
		"z-index":"0",
		"background-color":"transparent"
	});
	$(r).hide();
	$('.q_texto').css("overflow-y","hidden");
	$('.btn-3').show();
	$('.panel').css("z-index","1");
	for (var i = 0; i < q.length; i++) {
		$('#'+q[i]).animate({width:250},800);
		$('#'+q[i]).find('img').animate({width:210,height:210},800);
	}
}
function reduccion(a)
{
	$(".panel").css({
		"z-index":"0",
		"background-color":"transparent"
	});
	$(".fade").show();
	for (var i = 1; i < q.length+1; i++) {
		if( i > a.id)
		{
			//animate panels
			sizeactual = 250;
			sizenueva = sizeactual + (sizeactual*0.2);
			var dif = (sizenueva - sizeactual)/2;
			$('#'+i).animate({width: 250-dif+"px",}, 800 );

			//animate image
			var my_img = $('#'+i).find('img');
			$(my_img).animate({width: 210-dif+"px", height: 210-dif+"px"},800);

			$('#'+i).find('.btn-3').show();
			$('#'+i).find('.q_texto').css("overflow-y","hidden");
		}
		if (i < a.id) {
			//animate panels
			sizeactual = 250;
			sizenueva = sizeactual + (sizeactual*0.2);
			var dif = (sizenueva - sizeactual)/2;
			$('#'+i).animate({width: 250-dif+"px",}, 800 );

			//animate image
			var my_img = $('#'+i).find('img');
			$(my_img).animate({width: 210-dif+"px", height: 210-dif+"px"},800);

			$('#'+i).find('.btn-3').show();
			$('#'+i).find('.q_texto').css("overflow-y","hidden");
		};
	};
}
function ampliacion(t)
{
	//animate panel
	$(t).css({
		"z-index":"1",
		"background-color":"#fff"
	});
	sizeactual = 250;
	sizenueva = sizeactual + (sizeactual*0.6);
	var dif = (sizenueva - sizeactual)/2;
	$(t).animate({width: 250+dif+"px",}, 800 );

	//animate image
	var my_img = $(t).find('img');
	$(my_img).animate({width: 210+dif/2+"px", height: 210+dif/2+"px"},800);

	$(t).find('.btn-3').hide();
	$(t).find('.q_texto').css("overflow-y","scroll");
}

