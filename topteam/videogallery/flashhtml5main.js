var $ = jQuery.noConflict();
function flashhtml5(argsettings){
	var tg = $('.' + argsettings['target']);
	var currPlayer = 'flash';
	if(argsettings['defaultis']=='flash'){
		switch_flash();
	}else{
		switch_html5();
	}
	if(is_ios()){
		switch_html5();
		tg.find('.html5-button').hide();
	}
	tg.find('.html5-button').bind('click', function(){
		if(currPlayer == 'flash'){
			switch_html5()
			return;
		}
		if(currPlayer == 'html5'){
			switch_flash();
			return;
		}
	})
	function switch_flash(){
		tg.children('.flashgallery-con').css({
			display : 'block'
		})
		tg.children('.videogallery-con').css({
			display : 'none'
		})
		currPlayer = 'flash';
		tg.find('.html5-button').html('Switch to HTML5');
		
		
		$('.header-aux').css({
			'background' : 'url("style/img/info.png") no-repeat scroll center 50px transparent'
		})
	}
	function switch_html5(){
		tg.children('.flashgallery-con').css({
			display : 'none'
		})
		tg.find('.preloader').css({
			display : 'none'
		})
		tg.children('.videogallery-con').css({
			display : 'block'
		})
		currPlayer = 'html5';
		tg.find('.html5-button').html('Switch to Flash');
		
		$('.header-aux').css({
			'background' : 'none'
		})
		return;
	}
}
