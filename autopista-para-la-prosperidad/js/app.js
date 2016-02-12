$(document).ready(function() {

	$("#map-nav").hide();	
	$("#map-bt").click(function(){
		$("#map-nav").fadeToggle();	
	});
	
	$(".mainSide > li").first().addClass('selected');
	//$(".mainSide > li").last().css('display', 'none');
	//$(".mainSide > li").last().prev().css('display', 'none');
	//$("ul.mainSide > ul > li").last().css('display', 'none');
	//$("ul.mainSide > ul > li").last().prev().css('display', 'none');

	if($('.horizontalForm').size()>0 ){
		$('.horizontalForm').validationEngine();
	}
       
	if($('.cBoxReg').size() > 0){
		$('.cBoxReg').fancybox({
			fitToView	: false,
			width		: 300,
			height		: 230,
			autoSize	: false,
			closeClick	: false,
			openEffect	: 'none',
			closeEffect	: 'none'
		});
	}
	if($('.cBoxSuc').size() > 0){
		$('.cBoxSuc').fancybox({
			fitToView	: false,
			width		: 400,
			height		: 230,
			autoSize	: false,
			closeClick	: false,
			openEffect	: 'none',
			closeEffect	: 'none'
		});
	}
	if($('.cBoxTer').size() > 0){
		$('.cBoxTer').fancybox({
			fitToView	: false,
			width		: 420,
			height		: 500,
			autoSize	: false,
			closeClick	: false,
			openEffect	: 'none',
			closeEffect	: 'none'
		});
	}
	if($('.cBoxRec').size() > 0){
		$('.cBoxRec').fancybox({
			fitToView	: false,
			width		: 305,
			height		: 140,
			autoSize	: false,
			closeClick	: false,
			openEffect	: 'none',
			closeEffect	: 'none'
		});
	}
	/*twitter*/

	if($('#tweetBox').size()>0){
		$("#tweetBox").tweet({
      username: "ANI_Colombia",
      join_text: "auto",
      avatar_size: 32,
      count: 3,
      auto_join_text_default: "dijimos,",
      auto_join_text_ed: "nosotros",
      auto_join_text_ing: "est&aacute;bamos",
      auto_join_text_reply: "hemos respondido a",
      auto_join_text_url: "nos march&aacute;bamos",
      loading_text: "cargando tweets..."
  	});
	}

	/*
	|-----------------------------------------------------------------------------
	| SLIDER
	|-----------------------------------------------------------------------------
	*/


	var mainSlider = $('.mainSlider');
	var numMainSlide = mainSlider.find('.imgsBox img').size();
	var currMainSlide = 0;

	mainSlider.find('.imgsBox img').eq(0).show();
	mainSlider.find('.txtsBox .txtItem').eq(0).show();

	for (var i = 0; i < numMainSlide; i++) {
		if (i === 0){
			mainSlider.find('.navBox').append('<div class="ni selected"></div>');
		}else{
			mainSlider.find('.navBox').append('<div class="ni"></div>');
		}
	}
	mainSlider.find('.navBox').width(numMainSlide*20);

	mainSlider.find('.navR').on('click', function(){
		mainSlider.find('.imgsBox img').eq(currMainSlide).fadeOut(400);
		mainSlider.find('.txtsBox .txtItem').eq(currMainSlide).fadeOut(400);
		mainSlider.find('.navBox .ni').eq(currMainSlide).removeClass('selected');
		var f = currMainSlide < numMainSlide-1 ? currMainSlide++: currMainSlide = 0;
		mainSlider.find('.imgsBox img').eq(currMainSlide).fadeIn(400);
		mainSlider.find('.txtsBox .txtItem').eq(currMainSlide).fadeIn(400);
		mainSlider.find('.navBox .ni').eq(currMainSlide).addClass('selected');
	});

	mainSlider.find('.navL').on('click', function(){
		mainSlider.find('.imgsBox img').eq(currMainSlide).fadeOut(400);
		mainSlider.find('.txtsBox .txtItem').eq(currMainSlide).fadeOut(400);
		mainSlider.find('.navBox .ni').eq(currMainSlide).removeClass('selected');
		var f = currMainSlide > 0 ? currMainSlide--: currMainSlide = numMainSlide-1;
		mainSlider.find('.imgsBox img').eq(currMainSlide).fadeIn(400);
		mainSlider.find('.txtsBox .txtItem').eq(currMainSlide).fadeIn(400);
		mainSlider.find('.navBox .ni').eq(currMainSlide).addClass('selected');
	});

	mainSlider.find('.navBox .ni').on('click', function(){
		mainSlideGoto($(this).index());
	});

	function mainSlideGoto (index) {
		mainSlider.find('.imgsBox img').eq(currMainSlide).fadeOut(400);
		mainSlider.find('.txtsBox .txtItem').eq(currMainSlide).fadeOut(400);
		mainSlider.find('.navBox .ni').eq(currMainSlide).removeClass('selected');
		currMainSlide = index;
		mainSlider.find('.imgsBox img').eq(currMainSlide).fadeIn(400);
		mainSlider.find('.txtsBox .txtItem').eq(currMainSlide).fadeIn(400);
		mainSlider.find('.navBox .ni').eq(currMainSlide).addClass('selected');

	}



	/*SIDEBAR*/
	var sideBar = $('.sideBar');
	sideBar.find('ul>li').find('a').on('click', function(e){
		e.preventDefault();
		$(this).parent().siblings().removeClass('selected');
		$(this).parent().addClass('selected');

		$(this).parent().parent().find('ul').slideUp(400);
		if($(this).parent().hasClass('hasDropdown')){
			$(this).parent().parent().find('ul[data-for='+$(this).parent().data('for')+']').stop().slideDown(400);
		}
		var theURL = 'error';
		if($(this).attr('href') != '#'){
			theURL = $(this).attr('href');
		}
		$.ajax({
			url: theURL,
			type: 'POST',
			success: function(data, textStatus, xhr) {
				$('.rightContet').empty();
				$('.rightContet').append(data);
			},
			error: function(xhr, textStatus, errorThrown) {
				$('.rightContet').empty();
				$('.rightContet').append('<p>Oops. No hemos encontrado esta pagina!</p>');
			}
		});
	});

	sideBar.find('ul ul>li').find('a').on('click', function(e){
		e.preventDefault();
		$(this).parent().siblings().removeClass('selected');
		$(this).parent().addClass('selected');

		$(this).parent().parent().find('ul').slideUp(400);
		if($(this).parent().hasClass('hasDropdown')){
			$(this).parent().parent().find('ul[data-for='+$(this).parent().data('for')+']').stop().slideDown(400);
		}
		var theURL = 'error';
		if($(this).attr('href') != '#'){
			theURL = $(this).attr('href');
		}
		$.ajax({
			url: theURL,
			type: 'POST',
			success: function(data, textStatus, xhr) {
				$('.rightContet').empty();
				$('.rightContet').append(data);
			},
			error: function(xhr, textStatus, errorThrown) {
				$('.rightContet').empty();
				$('.rightContet').append('<p>Oops. No hemos encontrado esta pagina!</p>');
			}
		});

	});

	/*
	|-----------------------------------------------------------------------------
	| REGISTRO
	|-----------------------------------------------------------------------------
	*/



});