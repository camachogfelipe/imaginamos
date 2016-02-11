(function($) {
    $.fn.vGallery = function(o) {

        var defaults = {
            menuWidth : 100,
            menuHeight : 350,
            menuSpace : 0,
            randomise:"off",
            autoplay : "off",
            autoplayNext : "on",
            menu_position:'right',
            menuitem_width:"200",
            menuitem_height:"71",
            menuitem_space:"0",
            transition_type:"slideup",
            design_skin : 'skin_default',
            videoplayersettings : ''
            ,embedCode : ''
            ,shareCode : ''
            ,responsive: 'off'
        },

        o = $.extend(defaults, o);

        this.each( function() {

            var cthis = jQuery(this);
            var thisId=$(this)[0].getAttribute('id');
            var nrChildren = 0;
            var sliderMain;
            var sliderCon;
            var navMain;
            var navCon;
            var videoWidth
            ,videoHeight
            ,menuWidth
            ,menuHeight
            ,totalWidth
            ,totalHeight
            ,ww
            ,wh
            ;
            var backgroundY;
            var used = new Array();
            var content = new Array();
            var currNr=-1;
            var _rparent;
            var conw = 0;
            var conh = 0;

            var wpos = 0;
            var hpos=0;
			
            var busy_transition=false;
            var firsttime=true;
            var embed_opened = false;
            var share_opened = false;
			
            o.menuitem_width = parseInt(o.menuitem_width);
            o.menuitem_height = parseInt(o.menuitem_height);
            o.menuitem_space = parseInt(o.menuitem_space);
			
            nrChildren=jQuery(this).children().length;

            videoWidth=parseInt(jQuery(this).css("width"));
            videoHeight=parseInt(jQuery(this).css("height"));
            backgroundY=o.backgroundY;
            menuWidth=o.menuWidth;
            menuHeight=o.menuHeight;
            totalWidth=videoWidth;
            totalHeight=videoHeight;
		cthis.get(0).var_scale = 1;	
            if((o.menu_position=='right' || o.menu_position=='left') && nrChildren>1){
                totalWidth += o.menuitem_width + o.menuSpace;
            }
            if((o.menu_position=='bottom' || o.menu_position=='top') && nrChildren>1){
                totalHeight += o.menuitem_height + o.menuSpace;
            }
            //cthis.shuffle();
            cthis.addClass(o.design_skin);
            o.videoplayersettings.design_skin = o.design_skin;
            o.videoplayersettings.videoGalleryCon = cthis.get(0);
            if(cthis.css('opacity') == 0){
                cthis.animate({
                    'opacity' : 1
                }, 1000);
            }
            if(cthis.parent().hasClass('videogallery-con')){
                _rparent = cthis.parent().parent();
            }else{
                _rparent = cthis.parent();
                
            }
            cthis.parent().children('.preloader').fadeOut('fast');
			
			
            for(i=0;i<nrChildren;i++) {
                content[i]=jQuery(this).children().eq(i);
                //sliderCon.append(content[i]);
                if(o.randomise=='on')
                    randomise(0,nrChildren);
                else
                    used[i]=i;
            }
			
            cthis.append('<div class="sliderMain"><div class="sliderCon"></div></div>')
            cthis.append('<div class="navMain"><div class="navCon"></div></div>')
			
            sliderMain=jQuery(this).find('.sliderMain');
            sliderCon=jQuery(this).find('.sliderCon');
			
            if(is_ie8()){
                sliderCon.addClass('sliderCon-ie8');
            }
			
            navMain=jQuery(this).find('.navMain');
            navCon=jQuery(this).find('.navCon');

            cthis.css({
                'width' : totalWidth,
                'height' : totalHeight
            })
            if(cthis.parent().hasClass('videogallery-con')){
                cthis.parent().css({
                    'width' : totalWidth,
                    'height' : totalHeight
                })
            }
			
            for(i=0;i<nrChildren;i++) {
                var desc = cthis.children().eq(used[i]).find('.menuDescription').html();
                cthis.children().eq(used[i]).find('.menuDescription').remove();
                if(desc==null){
                    continue;
                }
                if(desc.indexOf('{ytthumb}') > -1){
                    desc=desc.split("{ytthumb}").join('<img src="http://img.youtube.com/vi/'+cthis.children().eq(used[i]).attr('data-src')+'/0.jpg" class="imgblock"/>');
                }
                navCon.append('<div><div class="navigationThumb-content">' + desc + '</div></div>')
                navCon.children().eq(i).addClass("navigationThumb");
                navCon.children().eq(i).css({
                    'width' : o.menuitem_width,
                    'height' : o.menuitem_height
                })

                navCon.children().eq(i).click(handleButton);
				
                if(o.menu_position=='right' || o.menu_position=='left'){
                    navCon.children().eq(i).css({
                        'top' : hpos
                    })
                }else{
                    navCon.children().eq(i).css({
                        'left' : wpos
                    })
					
                }
				
                hpos+=o.menuitem_height + o.menuitem_space;
                wpos+=o.menuitem_width + o.menuitem_space;
            }
			
			
            var i=0;

			
            for(i=0;i<nrChildren;i++) {
                sliderCon.append(content[used[i]]);
            }
			
			
            for(i=0;i<nrChildren;i++) {
				
                var autoplaysw='off';
                if(i==0&&o.autoplay=='on')
                    autoplaysw='on';
				
                if(is_ios()){
                /*
					//console.log(cthis.eq(i).children('video'));
					//if(i>0)	cthis.eq(i).children('video').css('opacity', '0');
					//console.log(videoWidth);
					cthis.children().eq(i).find('video').width(videoWidth);
					cthis.children().eq(i).find('video').height(videoHeight);
					//cthis.eq(i).fadeOut('slow');
					cthis.children().eq(i).css({
						'position' : 'absolute',
						'top' : 0,
						'left' : 0
					})
					if(i>0)
					cthis.children().eq(i).css('display', 'none')
					*/
                }else{
            /*
					sliderCon.children('.vplayer').eq(i).vPlayer({
						videoWidth: videoWidth,
						videoHeight: videoHeight,
						autoplay:autoplaysw
					})
					*/
            }
            }
			

            for (i = 0; i < nrChildren; i++) {
                //if(is_ios())	break;
				
                sliderCon.children().eq(i).css({
                    'position' : 'absolute',
                    'top' : '0px',
                    'left' : wpos
                })
                wpos+=totalWidth
            }

            sliderMain.css({
                'width' : totalWidth,
                'height' : totalHeight
            })
            if(o.menu_position=='right'){
                navMain.css({
                    'width' : o.menuitem_width,
                    'height' : totalHeight,
                    'left' : videoWidth
                })
            }
            if(o.menu_position=='left'){
                navMain.css({
                    'width' : o.menuitem_width,
                    'height' : totalHeight,
                    'left' : 0
                })
                sliderMain.css({
                    'left' : o.menuitem_width
                })
            }
            if(o.menu_position=='bottom'){
                navMain.css({
                    'width' : totalWidth,
                    'height' : o.menuitem_height,
                    'top' : videoHeight,
                    'left' : 0
                })
            }
            if(o.menu_position=='top'){
                navMain.css({
                    'width' : totalWidth,
                    'height' : o.menuitem_height,
                    'top' : 0,
                    'left' : 0
                })
                sliderMain.css({
                    'top' : o.menuitem_height
                })
            }
            //(o.menuitem_width + o.menuitem_space) * nrChildren
			
            if(is_ios())
                navMain.css('overflow', 'auto');
			
            if(o.menuSpace !=0) {
                navMain.css({
                    'left' : videoWidth + o.menuSpace
                })
            }
            navCon.css({
                'position' : 'relative'
            })

            if((jQuery('.navigationThumb').eq(0).height())*nrChildren>totalHeight)
                navMain.mousemove(handleMouse)

            var hpos=0;

            if(nrChildren==1) {
                jQuery(this).css({
                    'width' : videoWidth
                })
                navMain.hide();
            }
            cthis.get(0).videoEnd = handleVideoEnd;
            gotoItem(0)
			
           if(o.logo!=''){
            cthis.append('<img class="the-logo" src="'+o.logo+'"/>');
           }
            var down_x = 0;
            var up_x = 0;
            cthis.append('<div class="gallery-buttons"></div>');
            var _gbuttons = cthis.children('.gallery-buttons');
           if(o.embedCode!=''){
               //console.log(_gbuttons);
               _gbuttons.append('<div class="embed-button"><div class="handle"></div><div class="contentbox" style="display:none;"><textarea class="thetext">'+o.embedCode+'</textarea></div></div>');
           _gbuttons.find('.embed-button .handle').click(click_embedhandle)
           _gbuttons.find('.embed-button .contentbox').css({
               'right' : 50
           })
       }
           if(o.shareCode!=''){
               //console.log(_gbuttons);
               _gbuttons.append('<div class="share-button"><div class="handle"></div><div class="contentbox" style="display:none;"><div class="thetext">'+o.shareCode+'</div></div></div>');
           _gbuttons.find('.share-button .handle').click(click_sharehandle)
           _gbuttons.find('.share-button .contentbox').css({
               'right' : 50
           })
       }
            if(o.menu_position=='right'){
               // console.log(navMain)
                _gbuttons.css({
                    'right' : (o.menuitem_width + parseInt(o.menuSpace, 10))
                });
                if(cthis.find('.the-logo').length > 0){
                    cthis.find('.the-logo').css({
                        'right' : (o.menuitem_width + parseInt(o.menuSpace, 10) + 60)
                    });
                }
            }
            
            if(o.responsive=='on'){
                jQuery(window).bind('resize', handleResize);
                handleResize();
            }
            function handleResize(e){
                //ww = jQuery(this).width();
                //wh = jQuery(this).height();
                
                conw = _rparent.width();
                
                var aux = 'scale(' + (conw/totalWidth) + ')';
		cthis.get(0).var_scale = (conw/totalWidth);
                var newconh = (conw/totalWidth) * totalHeight;
                
                
                //console.log('ceva', ww, wh, conw, conh, totalWidth, totalHeight, (conw/totalWidth));
                if(conw < totalWidth){
                    cthis.css({
                        '-moz-transform' : aux
                        , 'transform' : aux
                        , '-webkit-transform' : aux
                        , '-o-transform' : aux
                        //, 'width' : 'auto'
                    })
                    _rparent.css({
                      'height' : newconh  
                    })
                }else{
                    cthis.css({
                        '-moz-transform' : ''
                        , '-webkit-transform' : ''
                        , '-o-transform' : ''
                        //, 'width' : 'auto'
                    })
                    _rparent.css({
                      'height' : 'auto'  
                    })
                }
            }
               
            function randomise(arg, max) {
                arg = parseInt(Math.random() * max);
                var sw = 0;
                for (j = 0; j < used.length; j++) {
                    if (arg == used[j])
                        sw = 1;
                }
                if (sw == 1) {
                    randomise(0, max);
                    return;
                } else
                    used.push(arg);
                return arg;
            }
            var menuAnimationSw=false;
            setInterval(function(){
                //menuAnimationSw=false;
                },5000)

            function handleMouse(e) {
                menuAnimationSw=true;
                if(is_ios()==false){
                    if(o.menu_position=='right' || o.menu_position=='left'){
                        navCon.css({
                            'top' : -((e.pageY-navMain.offset().top)/totalHeight * (((o.menuitem_height + o.menuitem_space)*nrChildren) - totalHeight))
                        });
                    }
                    if(o.menu_position=='bottom' || o.menu_position=='top'){
                        navCon.css({
                            'left' : -((e.pageX-navMain.offset().left)/totalWidth * (((o.menuitem_width + o.menuitem_space)*nrChildren) - totalWidth))
                        });
                    //navCon.animate({'left' : -((e.pageX-navMain.offset().left)/totalWidth * (((o.menuitem_width + o.menuitem_space)*nrChildren) - totalWidth))	}, {queue:false, duration:100});
                    }
					
                }
				
            }

            function handleButton(e) {
                gotoItem(navCon.children().index(e.currentTarget))
            }
            function hideSocialIcons(){
                
            }
            function showSocialIcons(){
                
            }

            function gotoItem(arg) {
                //console.log(sliderCon.children().eq(arg), currNr, arg, busy_transition);
                if(currNr==arg || busy_transition==true)
                    return;
                var transformed=false; //if the video structure is forming now we wait 1 sec for a smooth transition
                /*
				if(is_ios()){
					setTimeout(function(){
						sliderCon.children().eq(arg).css('opacity', '0');
					}, 3000)
					setTimeout(function(){
						sliderCon.children().eq(arg).css('opacity', '1');
					}, 4000)
				}
				*/
                var $c = sliderCon.children().eq(arg);
                var index = $c.parent().children().index($c);
                if($c.hasClass('vplayer-tobe')){
                    transformed=true;
                    o.videoplayersettings['videoWidth'] = videoWidth;
                    o.videoplayersettings['videoHeight'] = videoHeight;
                    o.videoplayersettings.responsive = 'off';
                    if(o.autoplay=='on' && index==0){
                        o.videoplayersettings['autoplay']='on';
                    }
                    if(o.autoplayNext=='on' && index>0){
                        o.videoplayersettings['autoplay']='on';
                    }
                    $c.vPlayer(o.videoplayersettings);
                }
					
						
					
                //o.transition_type='fade';
                busy_transition=true;
                if(currNr==-1 || transformed==false){
                    the_transition();
                }else{
                    cthis.parent().children('.preloader').fadeIn('fast');
                    setTimeout(the_transition, 1000);
                }
				
                function the_transition(){
                    cthis.parent().children('.preloader').fadeOut('fast');
                    if(o.transition_type=='fade'){
						
                        sliderCon.children().eq(arg).css({
                            "left" : 0,
                            "top" : 0
                        });
                        if(currNr>-1){
                            sliderCon.children().eq(currNr).animate({
                                'opacity': '0'
                            }, 1000);
                        }
                        sliderCon.children().eq(arg).css({
                            'opacity': '0'
                        });
                        sliderCon.children().eq(arg).animate({
                            'opacity': '1'
                        }, 1000);
                    }
                    if(o.transition_type=='slideup'){
						
                        if(currNr>-1){
                            sliderCon.children().eq(currNr).animate({
                                'left' : 0,
                                'top' : 0
                            },0)
	
                            sliderCon.children().eq(currNr).animate({
                                'left' : 0,
                                'top' : -totalHeight
                            },700)
                        }
						
						
                        sliderCon.children().eq(arg).animate({
                            'left' : 0,
                            'top' : totalHeight
                        },0)
		
                        sliderCon.children().eq(arg).animate({
                            'left' : 0,
                            'top' : 0
                        },700)
                    }
                    if(is_ios() && currNr>-1){
                        if(sliderCon.children().eq(currNr).children().eq(0)[0].tagName=='VIDEO'){
                            sliderCon.children().eq(currNr).children().eq(0).get(0).pause();
                        }
                    }
                    if(!is_ios() && !is_ie8() && currNr>-1){
                        if(sliderCon.children().eq(currNr).get(0).externalPauseMovie!=undefined)
                        sliderCon.children().eq(currNr).get(0).externalPauseMovie()
                    }
                    busy_transition=false;
                    currNr=arg;
                }
				
                /*
				if(is_ios()){
				//	console.log(currNr, arg);
					
				}else{
				if(currNr>-1) {

					


					if((!$.browser.msie) || is_ios()==true)
				}
				*/
                firsttime=false;
            }
           function click_embedhandle(){
               if(embed_opened==false){
               _gbuttons.find('.embed-button .contentbox').animate({
                   'right' : 60
               }, {queue:false, duration: 300});
               
               _gbuttons.find('.embed-button .contentbox').fadeIn('fast');
               embed_opened = true;
               }else{
               _gbuttons.find('.embed-button .contentbox').animate({
                   'right' : 50
               }, {queue:false, duration: 300});
               
               _gbuttons.find('.embed-button .contentbox').fadeOut('fast');
                   embed_opened = false;
               }
           }
           function click_sharehandle(){
               if(share_opened==false){
               _gbuttons.find('.share-button .contentbox').animate({
                   'right' : 60
               }, {queue:false, duration: 300});
               
               _gbuttons.find('.share-button .contentbox').fadeIn('fast');
               share_opened = true;
               }else{
               _gbuttons.find('.share-button .contentbox').animate({
                   'right' : 50
               }, {queue:false, duration: 300});
               
               _gbuttons.find('.share-button .contentbox').fadeOut('fast');
                   share_opened = false;
               }
           }
            function gotoNext(){
                //console.log(cthis);
                var aux = currNr + 1;
                if(aux >= sliderCon.children().length){
                    aux = 0;
                }
                gotoItem(aux);
                
            }
            function handleVideoEnd(){
                gotoNext();
            }

            $.fn.turnFullscreen = function() {
                jQuery(this).css({
                    'position' : 'static'
                })
                sliderMain.css({
                    'position' : 'static'
                })
            }
            $.fn.turnNormalscreen = function() {
                jQuery(this).css({
                    'position' : 'relative'
                })
                sliderMain.css({
                    'position' : 'relative'
                })
                for (i = 0; i < nrChildren; i++) {
                    sliderCon.children().eq(i).css({
                        'position': 'absolute'
                    })
                }
            }
            $.fn.vGallery.gotoItem = function(arg){
                gotoItem(arg);
            }
            return this;

        }); // end each
    }
})(jQuery);