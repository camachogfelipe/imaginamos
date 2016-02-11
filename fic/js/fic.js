$(window).load(function() {
	
	var winW = $(window).width();	
    var winH = $(window).height();	
	$(window).bind("resize", methodToFixLayout);
	function methodToFixLayout( e ) {
    	winW = $(window).width();
		if (winW>1000){
			$('.submenuWrap').css({'width':winW, 'background-position': (((winW-1000)/2)-20)+613+'px 0px'});
		}else {
			$('.submenuWrap').css({'width':1000, 'background-position': '593px 0px'});
		}
		winH = $(window).height()
		if(winH > 607){
			$('.footerWrap').css({'position':'fixed', 'bottom':0, 'display':'block'})
			$('.destWrap').css({'position':'fixed', 'bottom':45})
		}else{
			$('.footerWrap').css({'position':'relative', 'display':'block'})
			$('.destWrap').css({'position':'relative', 'bottom':0})
		}
	}
	methodToFixLayout();
	
	
	/*on focus y blur de los campos con hint*/
	$('.hint').css({'color':'#999', 'font-style': 'italic'});
	$('.hint').focus(function (){
		var hint = $(this).attr('title')
		if($(this).val()== hint) {
			$(this).val('');
			$(this).removeAttr('style');
		}
	})
	$('.hint').blur(function (){
		var hint = $(this).attr('title')
		if($(this).val() =='') {
			$(this).val(hint);
			$(this).css({'color':'#999', 'font-style': 'italic'});
		}
	})
	
	/**LOGIN/*/
	$('.headerBox .regLogBox .loginBtn').click(function(){
		$('.headerBox .logInBox').show(400);
	})
	$('.headerBox .logInBox .closeBtn').click(function(){
		$('.headerBox .logInBox').hide(400);
	})
	
	
	/*submenuOver*/
	var widthSubmenu = ( Math.ceil($('.submenuBox .submenu a ').length/2))*$('.submenuBox .submenu a').width();
	$('.submenuBox .submenu ').css({'width': widthSubmenu});
	
	var submenuIsOvered = false;
	var submenuIsOpened = false
	$('.headerBox .menuHeaderBox .servBtn').hover(function(){
		submenuIsOvered = true
		openSubmenu();
	}, function(){
		submenuIsOvered = false;
		closeSubmenu();
	})
	$('.submenuWrap').hover(function(){
		submenuIsOvered = true;
	},function(){
		submenuIsOvered = false;
		closeSubmenu();
	})
	function openSubmenu(){
		if(submenuIsOvered == true && submenuIsOpened == false){
			$('.submenuWrap').css({'height':20, opacity:1})
			$('.submenuWrap').stop().animate({'height':94},400);
			$('.headerBox .menuHeaderBox .servBtn').addClass('servBtnOv');
			submenuIsOpened = true;
		}
	}
	function closeSubmenu(){
		setTimeout(function(){
			if(submenuIsOvered == false){
				$('.submenuWrap').stop().animate({'height':0, opacity:0},200);
				$('.headerBox .menuHeaderBox .servBtn').removeClass('servBtnOv');
			}
		},300);
		submenuIsOpened = false;
	}
	
	/******/
	/*HOME*/
	/******/
	
	/*Slider*/
	$('.sliderBox img').css({'opacity':0});
	$('.sliderBox img:eq(0)').css({'opacity':1});
	var numHomSlider = $('.sliderBox img').size()-1;
	console.log(numHomSlider)
	var currHomSlider = 0;
	
	$('.sliderBox .navSlider .goLeft').click(function(){
		$('.sliderBox img:eq('+currHomSlider+')').stop().animate({'opacity':0});
		if(currHomSlider==0){ currHomSlider = numHomSlider;} else{ currHomSlider--;}
		$('.sliderBox img:eq('+currHomSlider+')').stop().animate({'opacity':1});
	})
	$('.sliderBox .navSlider .goRight').click(function(){
		$('.sliderBox img:eq('+currHomSlider+')').stop().animate({'opacity':0});
		if(currHomSlider==numHomSlider){ currHomSlider = 0;} else{ currHomSlider++;}
		$('.sliderBox img:eq('+currHomSlider+')').stop().animate({'opacity':1});
	})
	setInterval(function(){
		$('.sliderBox img:eq('+currHomSlider+')').stop().animate({'opacity':0});
		if(currHomSlider==numHomSlider){ currHomSlider = 0;} else{ currHomSlider++;}
		$('.sliderBox img:eq('+currHomSlider+')').stop().animate({'opacity':1});
	},5000)
	
	
	/*Destacados*/
	$('.destWrap .destItem ').hover(function(){
		$(this).find('.frame').stop().animate({'opacity':'show'});
	}, function(){
		$(this).find('.frame').stop().animate({'opacity':'hide'});
	})
	
	var numOfDest = $('.destWrap .destItem ').size();
	var currentDest = 0;
	$('.destWrap .destBox .destacados .goRight').click(function(){
		if(currentDest <= numOfDest-5){
			currentDest++
			$('.destacadosScroll').animate({'left':currentDest*230*-1})
		}
	})
	$('.destWrap .destBox .destacados .goLeft').click(function(){
		if(currentDest>0){
			currentDest--
			$('.destacadosScroll').animate({'left':currentDest*230*-1})
		}
	})
	
	/***************/
	/*QUIENES SOMOS*/
	/***************/
	
	$('.quienesRight .imgGal img').css({'opacity': 0});
	$('.quienesRight .imgGal img:eq(0)').css({'opacity': 1});
	
	var numImgQuien = $('.quienesRight .imgGal img').length-1;
	var currImgQuien = 0;
	$('.quienesRight .galNav .goleft').click(function(){
		$('.quienesRight .imgGal img:eq('+currImgQuien+')').animate({'opacity': 0});
		if(currImgQuien==0){ currImgQuien = numImgQuien;} else{ currImgQuien--;}
		$('.quienesRight .imgGal img:eq('+currImgQuien+')').animate({'opacity': 1});
	})
	$('.quienesRight .galNav .goright').click(function(){
		$('.quienesRight .imgGal img:eq('+currImgQuien+')').animate({'opacity': 0});
		if(currImgQuien==numImgQuien){ currImgQuien = 0;} else{ currImgQuien++;}
		$('.quienesRight .imgGal img:eq('+currImgQuien+')').animate({'opacity': 1});
		
	})
})
