	$(document).ready(function(){
		$('.slider').nivoSlider();
		$('.bar').mosaic({
			animation: 'slide' //fade or slide
		});
		$('.bar2, .bar3').mosaic({
			animation: 'slide', //fade or slide
			anchor_y: 'top'
		});
		var $conGalCategorias = $(".conGalCategorias");	
		$conGalCategorias.wtScroller({
			num_display:6,
			slide_width:164,
			slide_height:342,
			slide_margin:3,
			button_width:35,
			ctrl_height:10,
			margin:0,	
			auto_scroll:true,
			delay:4000,
			scroll_speed:1000,
			easing:"",
			auto_scale:false,
			move_one:false,
			ctrl_type:"scrollbar",
			display_buttons:true,
			mouseover_buttons:false,
			display_caption:false,
			mouseover_caption:true,
			caption_effect:"slide",
			caption_align:"bottom",
			caption_position:"inside",					
			cont_nav:true,
			shuffle:false,
			mousewheel_scroll:true
		});
		$(".selCat").selectbox();
		$('.scroll-pro, .scroll-Info, .scroll-Emp, .scroll-Act').jScrollPane();
		$('#paging_site').pajinate();
		$(".iframe").colorbox({iframe:true, width:752, height:372});
		$('#sliderGalPro').bxSlider({
      		displaySlideQty: 4,
      		moveSlideQty: 1
    	});
		$('a.lista').click(function () {
			$('.actual').removeClass('actual');
			$(this).addClass('actual');
			$('.imgBigPro').fadeOut(100, 'linear');
			var content_show = $(this).attr('data-id');
			$('#'+content_show).fadeIn(100, 'linear');
		});
	});	
	$(window).load(function(){
    	$(".formDis, .formCon").validationEngine();
	});