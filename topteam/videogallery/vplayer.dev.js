var ytplayer;
var $ = jQuery.noConflict();
(function($) {
    $.fn.vPlayer = function(o) {

        var defaults = {
            type : 'normal',
            autoplay : "off",
            videoWidth : 0,
            videoHeight : 0,
            constrols_out_opacity : 0,
            constrols_normal_opacity : 0.9,
            design_scrubbarWidth : -201,
            insideGallery : false,
            design_skin : 'skin_default'
            ,design_background_offsetw : 0
            ,cueVideo : 'on'
            ,videoGalleryCon : null
        }

        o = $.extend(defaults, o);

        this.each( function() {

            var cthis;
            var thisId;
            var controlsDiv;
            var videoWidth;
            var videoHeight;
            var totalWidth;
            var totalHeight;
            var video;
            var aux=0;
            var aux2=0;
            var full=0;
            var inter;
            var lastVolume;
            var defaultVolume;
            var infoPosX;
            var infoPosY;
            var wasPlaying=false;
            var autoplay="off";
            var volumecontrols;
            var fScreenControls;
            var playcontrols;
            var scubbar;
            var info;
            var infotext;
            var volumecontrols;
            var paused = false;
            var ie8paused = true;
            var totalDuration = 0;
            var currTime = 0;
            var dataType='';
            var dataFlash='';
            var dataSrc='';
            var dataVideoDesc = '';
            var original_body_overflow = 'auto;'
            var conw
            ,conh
            ,newconh
            ,_rparent
            ,_vgparent;
            
            
            var vimeo_data, vimeo_url;

            cthis=jQuery(this);
            thisId=$(this)[0].getAttribute('id');
            original_body_overflow = $('body').css('overflow');
            
            if(cthis.parent().parent().parent().hasClass('videogallery')){
                _vgparent = cthis.parent().parent().parent();
            }
                        
			
            autoplay=o.autoplay;
            videoWidth=o.videoWidth;
            videoHeight=o.videoHeight;
            init();
            function init(){
                if(cthis.hasClass('vplayer-tobe')){
				
                    //alert('ceva');
                    var $c = cthis;
                    $c.removeClass('vplayer-tobe');
                    $c.addClass('vplayer');
                    $c.addClass(o.design_skin);
                
                
                    if($c.attr('data-type')=='youtube'){
                        o.type='youtube';
                    }
                    if($c.attr('data-type')=='vimeo'){
                        o.type='vimeo';
                    }
                    if($c.attr('data-type')=='image'){
                        o.type='image';
                    }
                    if($c.attr('data-type')=='audio'){
                        o.type='audio';
                    }
                
                    _rparent = cthis.parent();
                
                
                    cthis.append('<div class="controls"></div>')
                    controlsDiv=cthis.find('.controls');
                    //console.log('ceva');
				
				
                    controlsDiv.css('opacity', o.constrols_normal_opacity);

                    //console.log(videoWidth);

                    totalWidth=videoWidth;
                    totalHeight=videoHeight;

                    cthis.css({
                        'width' : videoWidth,
                        'height' : videoHeight
                    })
				
                    if(cthis.attr('data-videoTitle')!=undefined){
                        cthis.append('<div class="video-description"></div>')
                        cthis.children('.video-description').append('<div class="video-title">'+cthis.attr('data-videoTitle')+'</div>');
                        if(dataVideoDesc!=''){
                            cthis.children('.video-description').append('<div class="video-subdescription">'+dataVideoDesc+'</div>');
                        }
                        cthis.find('.video-subdescription').css('width', (0.7 * videoWidth));
                    }

                    if(cthis.css('position')!='absolute')
                        cthis.css('position', 'relative')
				
                
				
                    if(o.type!='vimeo' && o.type!='image'){
                    controlsDiv.append('<div class="background"></div>')
                    controlsDiv.append('<div class="playcontrols"></div>')
                    controlsDiv.append('<div class="scrubbar"></div>')
                    controlsDiv.append('<div class="timetext"></div>')
                    controlsDiv.append('<div class="volumecontrols"></div>')
                    controlsDiv.append('<div class="fscreencontrols"></div>')
                }
                if(o.type=='image'){
                    cthis.attr('data-img', cthis.attr('data-source'));
                }

                    if(cthis.attr('data-img')!=undefined) {
                        cthis.prepend('<div class="preview"><img src="'+ cthis.attr('data-img') +'"/></div>');
                        cthis.children('.preview').children('img').width(videoWidth);
                        cthis.children('.preview').children('img').height(videoHeight);
                    }
                    if(o.type=='image'){
                        return;
                    }
                    info=cthis.find('.info');
                    infotext=cthis.find('.infoText');

                    ////info

	

                    playcontrols=cthis.find('.playcontrols');
                    playcontrols.append('<div class="playSimple"></div>');
                    playcontrols.append('<div class="playHover"></div>');
                    playcontrols.append('<div class="stopSimple"></div>');
                    playcontrols.append('<div class="stopHover"></div>');
                    playcontrols.hover( function () {
                        //
                        playcontrols.children().eq(1).animate({
                            opacity:1
                        }, {
                            queue: false,
                            duration: 300
                        })
                        playcontrols.children().eq(3).animate({
                            opacity:1
                        }, {
                            queue: false,
                            duration: 300
                        })

                    }, function () {

                        playcontrols.children().eq(1).animate({
                            opacity:0
                        }, {
                            queue: false,
                            duration: 300
                        })
                        //console.log(playcontrols.children());
                        playcontrols.children().eq(3).animate({
                            opacity:0
                        }, {
                            queue: false,
                            duration: 300
                        })
                    })

                    scrubbar=cthis.find('.scrubbar');
                    scrubbar.append('<div class="scrub-bg"></div>');
                    scrubbar.append('<div class="scrub-buffer"></div>');
                    scrubbar.append('<div class="scrub"></div>');





                    volumecontrols=cthis.find('.volumecontrols');
                    volumecontrols.append('<div class="volumeicon"></div>');
                    volumecontrols.append('<div class="volume_static"></div>');
                    volumecontrols.append('<div class="volume_active"></div>');
                    volumecontrols.append('<div class="volume_cut"></div>');

                    fScreenControls=cthis.find('.fscreencontrols');
                    fScreenControls.append('<div class="full"></div>');
                    fScreenControls.append('<div class="fullHover"></div>');
                
                    fScreenControls.hover( function () {
                        fScreenControls.children().eq(1).animate({
                            opacity:1
                        }, {
                            queue: false,
                            duration: 300
                        })
                    }, function () {
                        fScreenControls.children().eq(1).animate({
                            opacity:0
                        }, {
                            queue: false,
                            duration: 300
                        })
                    })
                
                
                
                
                
                
                    if($c.find('.videoDescription').length>0){
                        dataVideoDesc = $c.find('.videoDescription').html();
                        $c.find('.videoDescription').remove();
                    }
                    if(o.cueVideo!='on'){
                        if(cthis.css('opacity') == 0){
                            cthis.animate({
                                'opacity' : 1
                            }, 1000);
                            resizePlayer(videoWidth,videoHeight);
                            cthis.bind('click', handleReadyControls);
                        }
                    }else{
                        handleReadyControls();
                    }
                $(window).bind('resize', handleResize);
                handleResize();
                }
            }
            function handleReadyControls(){
                //console.log('handleReadyControls');
                var $c = cthis;
                $c.unbind();
                dataType = $c.attr('data-type');
                dataSrc = $c.attr('data-src');
                dataFlash = $c.attr('data-sourceflash');
                
                
                cthis.find('.preview').fadeOut('fast');
                
                if($c.attr('data-sourceflash')==undefined){
                    dataFlash=$c.attr('data-sourcemp4');
                }
                
                if(o.type == 'audio' && $c.attr('data-sourcemp3')!=undefined && $c.attr('data-sourceflash')==undefined){
                    dataFlash = $c.attr('data-sourcemp3');
                }
                if(is_ie8()){
                    $c.find('.controls').remove();
                    $c.addClass('vplayer-ie8');
                    //$c.html('<div class="vplayer"></div>')
                    if(o.type=='normal'){
                        $c.prepend('<div><object type="application/x-shockwave-flash" data="preview.swf" width="'+videoWidth+'" height="'+videoHeight+'" id="flashcontent" style="visibility: visible;"><param name="movie" value="preview.swf"><param name="menu" value="false"><param name="allowScriptAccess" value="always"><param name="scale" value="noscale"><param name="allowFullScreen" value="true"><param name="wmode" value="opaque"><param name="flashvars" value="video='+dataFlash+'"></object></div>');
							
                    }
                    if(o.type=='audio'){
                        $c.prepend('<div><object type="application/x-shockwave-flash" data="preview.swf" width="'+videoWidth+'" height="'+videoHeight+'" id="flashcontent" style="visibility: visible;"><param name="movie" value="preview.swf"><param name="menu" value="false"><param name="allowScriptAccess" value="always"><param name="scale" value="noscale"><param name="allowFullScreen" value="true"><param name="wmode" value="opaque"><param name="flashvars" value="video='+dataFlash+'&types=audio"></object></div>');
							
                    }
                    if(o.type=='vimeo'){
                        var src = $c.attr('data-src');
                        $c.append('<iframe width="'+videoWidth+'" height="'+videoHeight+'" src="http://player.vimeo.com/video/'+src+'" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen style="width:'+videoWidth+'px; height:'+videoHeight+'px;"></iframe>');
                    //$c.attr('data-ytid', aux);
                    }
                    if(o.type=='youtube'){
                        o.type='youtube';
                        $c.children().remove();
                        var aux = 'ytplayer' + dataSrc;
                        $c.append('<iframe width="'+videoWidth+'" height="'+videoHeight+'" src="http://www.youtube.com/embed/'+$c.attr('data-src')+'" frameborder="0" allowfullscreen></iframe>');
                        $c.attr('data-ytid', aux);
							
                    }
                    return;
                }
					
                if(is_ios()){		
                    if(o.type=='normal'){
                        $c.prepend('<video controls preload></video>');
                        $c.children().eq(0).attr('width', videoWidth);
                        $c.children().eq(0).attr('height', videoHeight);
                        if($c.attr('data-sourcemp4')!=undefined){
                            $c.children().eq(0).append('<source src="'+$c.attr('data-sourcemp4')+'" type="video/mp4"/>');
                        }
                    }			
                    if(o.type=='audio'){
                        $c.prepend('<audio controls preload></audio>');
                        $c.children().eq(0).attr('width', videoWidth);
                        $c.children().eq(0).attr('height', videoHeight);
                        if($c.attr('data-sourcemp3')!=undefined){
                            $c.children().eq(0).append('<source src="'+$c.attr('data-sourcemp3')+'" type="audio/mp3" style="width:'+videoWidth+'px; height:'+videoHeight+'px;"/>');
                        }
                    }
                    if(o.type=='youtube'){
                        o.type='youtube';
                        $c.children().remove();
                        $c.append('<iframe src="http://www.youtube.com/embed/'+$c.attr('data-src')+'" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowfullscreen style="width:'+videoWidth+'px; height:'+videoHeight+'px;"></iframe>');
                    //$c.attr('data-ytid', aux);
                    }
                    if(o.type=='vimeo'){
                        $c.children().remove();
                        var src = $c.attr('data-src');
                        $c.append('<iframe width="'+videoWidth+'" height="'+videoHeight+'" src="http://player.vimeo.com/video/'+src+'" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen style="width:'+videoWidth+'px; height:'+videoHeight+'px;"></iframe>');
                    //$c.attr('data-ytid', aux);
                    }
                    cthis.children('.controls').remove();
                    //resizePlayer(videoWidth,videoHeight)
                    //playcontrols.bind('click', onPlayPause)
                    //cthis.click(onPlayPause)
                    handleResize();
                    return;//our job on the iphone / ipad has been done, we exit the function.
                }
                if(!is_ie8() && !is_ios()){
                    
                    //-normal video on modern browsers
                    aux='';
                    if(o.type=='audio'){
                        if($c.attr('data-audioimg')!=undefined){
                            aux='<img src="'+$c.attr('data-audioimg')+'" width="'+videoWidth+'" height="'+videoHeight+'" class="audioImg"/>';
                            $c.prepend(aux);
                        }
                    }
                    var videolayer = '<video controls preload>';
                    if(o.type=='normal'){
                        
                        aux = '<video controls preload';
                        if(videoWidth!=0){
                            aux+=' width="' + videoWidth + '"';
                            aux+=' height="' + videoHeight + '"';
                        }
                        aux += '></video>';
                        if(!is_ie9()){
                        $c.prepend(aux);
                        }
                        if($c.attr('data-sourcemp4')!=undefined){
                            //console.log($c.attr('data-sourcemp4'));
                            $c.children().eq(0).append('<source src="'+$c.attr('data-sourcemp4')+'" type="video/mp4"/>');
                            if(is_ie9()){
                                var auxdiv = $c.find('.controls');
                                $c.prepend('<video controls preload><source src="'+$c.attr('data-sourcemp4')+'" type="video/mp4"/></video>');
                                //$c.append('<div class="controls"></div>');
                                //$c.children('.controls') = auxdiv;
                            }
                        }
                        if($c.attr('data-sourceogg')!=undefined){
                            $c.children().eq(0).append('<source src="'+$c.attr('data-sourceogg')+'" type="video/ogg"/>');
                            videolayer += '<source src="'+$c.attr('data-sourceogg')+'" type="video/ogg"/>';
                        }
                        if($c.attr('data-sourcewebm')!=undefined){
                            $c.children().eq(0).append('<source src="'+$c.attr('data-sourcewebm')+'" type="video/webm"/>');
                            videolayer += '<source src="'+$c.attr('data-sourcewebm')+'" type="video/webm"/>';
                        }
                        if($c.attr('data-sourceflash')!=undefined && !($.browser.msie && $.browser.version>8)){
                            $c.children().eq(0).append('<object type="application/x-shockwave-flash" data="preview.swf" width="'+videoWidth+'" height="'+videoHeight+'" id="flashcontent" style="visibility: visible;"><param name="movie" value="preview.swf"><param name="menu" value="false"><param name="allowScriptAccess" value="always"><param name="scale" value="noscale"><param name="allowFullScreen" value="true"><param name="wmode" value="opaque"><param name="flashvars" value="video='+dataFlash+'"></object>');
                        
                            videolayer += '<object type="application/x-shockwave-flash" data="preview.swf" width="'+videoWidth+'" height="'+videoHeight+'" id="flashcontent" style="visibility: visible;"><param name="movie" value="preview.swf"><param name="menu" value="false"><param name="allowScriptAccess" value="always"><param name="scale" value="noscale"><param name="allowFullScreen" value="true"><param name="wmode" value="opaque"><param name="flashvars" value="video='+dataFlash+'"></object>';
                        }
                    }
                    if(o.type=='audio'){
                        var aux = '<audio controls';
                        if(videoWidth!=0){
                            aux+=' width="' + videoWidth + '"';
                            aux+=' height="' + videoHeight + '"';
                        }
                        aux += '></audio>';
                        $c.prepend(aux);
                        if($c.attr('data-sourcemp3')!=undefined){
                            //console.log($c.attr('data-sourcemp4'));
                            $c.children().eq(0).append('<source src="'+$c.attr('data-sourcemp3')+'" type="audio/mp3"/>');
                            if(is_ie9()){
                                $c.html('<audio><source src="'+$c.attr('data-sourcemp3')+'" type="audio/mp3"/></audio>');
                            //$c.children().eq(0).attr('src', $c.attr('data-sourcemp4'));
                            //$c.children().eq(0).append('<source src="'+$c.attr('data-sourcemp4')+'"/>');
                            }
                        }
                        if($c.attr('data-sourceogg')!=undefined){
                            $c.children().eq(0).append('<source src="'+$c.attr('data-sourceogg')+'" type="audio/ogg"/>');
                        }
                        if($c.attr('data-sourcewav')!=undefined){
                            $c.children().eq(0).append('<source src="'+$c.attr('data-sourcewav')+'" type="audio/wav"/>');
                        }
                        if($c.attr('data-sourceflash')!=undefined && !($.browser.msie && $.browser.version>8)){
                            $c.children().eq(0).append('<object type="application/x-shockwave-flash" data="preview.swf" width="'+videoWidth+'" height="'+videoHeight+'" id="flashcontent" style="visibility: visible;"><param name="movie" value="preview.swf"><param name="menu" value="false"><param name="allowScriptAccess" value="always"><param name="scale" value="noscale"><param name="allowFullScreen" value="true"><param name="wmode" value="opaque"><param name="flashvars" value="video='+dataFlash+'&types=audio"></object>');
                        }
                    }
                    //console.log(o.type);
                    if(o.type=='youtube'){
                        //$c.children().remove();
                        var aux = 'ytplayer' + $c.attr('data-src');
                        $c.prepend('<object type="application/x-shockwave-flash" data="http://www.youtube.com/apiplayer?enablejsapi=1&version=3&playerapiid='+aux+'" width="'+videoWidth+'" height="'+videoHeight+'" id="'+aux+'" style="visibility: visible;"><param name="movie" value="http://www.youtube.com/apiplayer?enablejsapi=1&version=3"><param name="menu" value="false"><param name="allowScriptAccess" value="always"><param name="scale" value="noscale"><param name="allowFullScreen" value="true"><param name="wmode" value="opaque"><param name="flashvars" value=""></object>');
                        videolayer = '<object type="application/x-shockwave-flash" data="http://www.youtube.com/apiplayer?enablejsapi=1&version=3&playerapiid='+aux+'" width="'+videoWidth+'" height="'+videoHeight+'" id="'+aux+'" style="visibility: visible;"><param name="movie" value="http://www.youtube.com/apiplayer?enablejsapi=1&version=3"><param name="menu" value="false"><param name="allowScriptAccess" value="always"><param name="scale" value="noscale"><param name="allowFullScreen" value="true"><param name="wmode" value="opaque"><param name="flashvars" value=""></object>';
                        $c.attr('data-ytid', aux);
							
                    //ytplayer= document.getElementById("flashcontent");
                    //ytplayer.loadVideoById('L7ANahx7aF0')	
                    }
                    if(o.type=='vimeo'){
                        //$c.children().remove();
                        var src = $c.attr('data-src');
                        cthis.children('.controls').remove();
                        $c.prepend('<iframe src="http://player.vimeo.com/video/'+src+'?api=1&player_id=vimeoplayer'+src+'" width="'+videoWidth+'" height="'+videoHeight+'" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>');
                        
							
                    //ytplayer= document.getElementById("flashcontent");
                    //ytplayer.loadVideoById('L7ANahx7aF0')	
                    }
						
                }
                if(cthis.css('opacity') == 0){
                    cthis.animate({
                        'opacity' : 1
                    }, 1000);
                }
                if(o.type=='normal'){
                    video=cthis.children('video').eq(0)[0];
                    video.controls=false;
                }
                if(o.type=='audio'){
                    video=cthis.children('audio').eq(0)[0];
                    video.controls=false;
                }
                if(o.type=='youtube'){
                    video = cthis.children('object')[0];
                }
                if(o.type=='vimeo'){
                    video = cthis.children('iframe')[0];
                    //console.log(video);
                    //
                    
                    if (window.addEventListener) {
                        window.addEventListener('message', vimeo_windowMessage, false);
                    }
                
                }
            
                if(o.type=='normal'){
                    $(video).css({
                        'position' : 'absolute',
                        'background-color' : '#000000'
                    })
                }

                if(autoplay=='on'){
                    wasPlaying=true;
                }
            
                inter = setInterval(check,50);
                cthis.get(0).externalPauseMovie = pauseMovie;
            
            
            }


            function check() {
                //console.log('check', video.readyState);
                if(o.type=='youtube' && video.getPlayerState){
                    if(is_ie8()){
                        clearInterval(inter);
                        setTimeout(handleReadyVideo, 1000);
                        return;
                    }
                    if(video.getPlayerState()>-1){
                        clearInterval(inter);
                        handleReadyVideo();
                    }
                }
				
                if((o.type=='normal' || o.type=='audio') && Number(video.readyState)>=3) {
                    clearInterval(inter)
                    handleReadyVideo();
                }
                if(jQuery.browser.opera && o.type=='audio' && Number(video.readyState)==2){
                    handleReadyVideo();
                }
                //console.log(video.readyState);
            }
			

            function handleReadyVideo() {
                    //console.log(video);
                //console.log('handleReadyVideo');
                if(localStorage!=null) {
                    if(localStorage.getItem('volumeIndex')===null)
                        defaultVolume=1;
                    else
                        defaultVolume=localStorage.getItem('volumeIndex');
                }
                if(videoWidth==0) {
                    videoWidth= $(video).width();
                    videoHeight= $(video).height();
                }
                
                
                
                
                resizePlayer(videoWidth,videoHeight)
                setupVolume(defaultVolume)


                var checkInter = setInterval(checkTime,100)
                if(autoplay=='on'){
                    playMovie();
                }
					
					
					
				
			//console.log(playcontrols);
                cthis.mouseout(handleMouseout)
                cthis.mouseover(handleMouseover)
                fScreenControls.click(onFullScreen)
                cthis.find('.volumecontrols').click(handleVolume)
                scrubbar.bind('click', handleScrub);
                playcontrols.click(onPlayPause)
                cthis.keypress(handleKeyPress);
                if(o.type=='normal' || o.type=='audio'){
                    video.addEventListener('ended', handleVideoEnd, false);
                }
                
			
                function handleMouseover(){
                    controlsDiv.animate({
                        opacity : o.constrols_normal_opacity
                    }, {
                        queue:false,
                        duration:200
                    })
                }
                function handleMouseout(){
                    controlsDiv.animate({
                        opacity : o.constrols_out_opacity
                    }, {
                        queue:false,
                        duration:200
                    })
                    
                }

                

                function handleScrub(e) {
                    scrubbar=cthis.find('.scrubbar');
                    if(wasPlaying==false)
                        pauseMovie();
                    else
                        playMovie();
						
                    if(o.type=='normal' || o.type=='audio'){
                        totalDuration = video.duration;
                        video.currentTime = (e.pageX-(scrubbar.offset().left))/(scrubbar.children().eq(0).width()) * totalDuration;
                    }
                    if(o.type=='youtube'){
                        //console.log(video.getDuration())
                        totalDuration = video.getDuration();
                        video.seekTo((e.pageX-(scrubbar.offset().left))/(scrubbar.children().eq(0).width()) * totalDuration);
                    }
					
                }

                function checkTime() {
                    scrubbar=cthis.find('.scrubbar');
                    var bufferedLength = -1;
					
                    if(o.type=='normal' || o.type=='audio'){
                        totalDuration = video.duration;
                        currTime = video.currentTime;
                        
                        //console.log(video.buffered.end(0));
                        bufferedLength = (video.buffered.end(0) / video.duration ) * (scrubbar.children().eq(0).width());
                    }
                    if(o.type=='youtube'){
                        //console.log(video.getDuration())
                        if(video.getDuration){
                            totalDuration = video.getDuration();
                            currTime = video.getCurrentTime();
                        }
                        bufferedLength = (video.getVideoBytesLoaded() / video.getVideoBytesTotal() ) * (scrubbar.children().eq(0).width());
                        
                        aux = (video.getVideoStartBytes() / video.getVideoBytesTotal() ) * (scrubbar.children().eq(0).width());
                        scrubbar.children('.scrub-buffer').css('left', aux)
                        
						
                    }
                    aux=((currTime/totalDuration)*(scrubbar.children().eq(0).width()))
                    scrubbar.children('.scrub').width(aux)
                    if(bufferedLength>-1){
                        scrubbar.children('.scrub-buffer').width(bufferedLength)
                    }
                    
                    cthis.find('.timetext').html('<font color="#FFFFFF" size="1px">' + formatTime(currTime) +  '</font><font color="gray" size="1px">/' + formatTime(totalDuration) + '</font>')
                }



                function handleVolume(e) {
                    volumecontrols=cthis.find('.volumecontrols').children();
                    if((e.pageX-(volumecontrols.eq(1).offset().left))>=0) {
                        aux = (e.pageX-(volumecontrols.eq(1).offset().left));

                        //volumecontrols.eq(2).height(24)
                        volumecontrols.eq(2).css('visibility','visible')
                        volumecontrols.eq(3).css('visibility','hidden')

                        setupVolume(aux/volumecontrols.eq(1).width())
                    } else {
                        if(volumecontrols.eq(3).css('visibility')=='hidden') {
                            lastVolume=video.volume;
                            if(o.type=='normal'){
                                video.volume=0;
                            }
                            if(o.type=='youtube'){
                                video.setVolume(0);
                            }
                            volumecontrols.eq(3).css('visibility','visible')
                            volumecontrols.eq(2).css('visibility','hidden')
                        } else {
                            console.log(lastVolume);
                            if(o.type=='normal'){
                                video.volume=lastVolume;
                            }
                            if(o.type=='youtube'){
                                video.setVolume(lastVolume);
                            }
                            volumecontrols.eq(3).css('visibility','hidden')
                            volumecontrols.eq(2).css('visibility','visible')
                        }
                    }

                }

                function setupVolume(arg) {
                    var volumeControl=cthis.find('.volumecontrols').children();
                    if(arg>=0){
                        if(o.type=='normal')
                            video.volume=arg;
                        if(o.type=='youtube'){
                            var aux = arg*100;
                            video.setVolume(aux);
							
                        }
						
                    }
                    volumeControl.eq(2).width(arg*volumeControl.eq(1).width());
                    if(localStorage!=null)
                        localStorage.setItem('volumeIndex', arg);
                }



				
				
				
				
                function formatTime(arg) {
                    //formats the time
                    var s = Math.round(arg);
                    var m = 0;
                    if (s > 0) {
                        while (s > 59) {
                            m++;
                            s -= 60;
                        }
                        return String((m < 10 ? "0" : "") + m + ":" + (s < 10 ? "0" : "") + s);
                    } else {
                        return "00:00";
                    }
                }
				
            }
            function handleVideoEnd(){
                //-function on video end
                		if(full==1){
                                    onFullScreen();
                                }	
                    if(o.type=='normal' || o.type=='audio'){
                        video.currentTime = 0;
                        video.pause();
                    }
                    if(o.type=='youtube'){
                        //console.log(video.getDuration())
                        video.seekTo(0);
                    }
                if(o.videoGalleryCon!=null){
                    o.videoGalleryCon.videoEnd();
                }
                
            }	
                function handleResize(e){
                    //console.log(o.responsive);
                    if(is_ios()){
                        //ios has a nasty bug wbhen the parent is scaled - iframes scale too
                        if(undefined!=_vgparent){
                            var aux = (_vgparent.get(0).var_scale)
                            //console.log(cthis);
                            cthis.children('iframe').width((1/aux) * videoWidth);
                            cthis.children('iframe').height((1/aux) * videoHeight);
                            
                        }
                    }
                    if(o.responsive=='on'){
                        
                    conw = _rparent.width();
                
                        var aux = 'scale(' + (conw/totalWidth) + ')';
                        var newconh = (conw/totalWidth) * totalHeight;
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
                    if(full===1) {
                        totalWidth=$(window).width();
                        totalHeight= $(window).height();
                        resizePlayer(totalWidth,totalHeight)
                        
                    if(cthis.find('.audioImg').length>0){
                        cthis.find('.audioImg').css({
                            'width' : totalWidth
                            ,'height' : totalHeight
                        })
                    }
                    }
                                    
                }
            function handleKeyPress(e){
                //-check if space is pressed for pause
                if(e.charCode==32){
                    onPlayPause();
                }
            }
            
            function vimeo_windowMessage(e){
                //-we receive iframe messages from vimeo here
                var data, method;
                //console.log(e);

                vimeo_url = ''
                vimeo_url = jQuery(video).attr('src').split('?')[0];
                try {
                    data = JSON.parse(e.data);
                    method = data.event || data.method;
                }
                catch(e)  {
                //fail silently... like a ninja!
                }
                if(data.event=='ready'){
                    //console.log(cthis);
                    playMovie();

                    vimeo_data = {
                        "method": "addEventListener",
                        "value": "finish"
                    };
                    video.contentWindow.postMessage(JSON.stringify(vimeo_data), vimeo_url);

                }
                if(data.event=='finish'){

            }
            }
            
            function onPlayPause() {
                //console.log('onPlayPause');
                //return;
                paused=false;
                if((o.type=='normal'  || o.type=='audio') && video.paused){
                    paused=true;
                }
                if(o.type=='youtube' && video.getPlayerState && video.getPlayerState()==2){
                    paused=true;
                }
                if(is_ie8()){
                    if (ie8paused) {
                        playMovie();
                        ie8paused=false;
                    } else {
                        pauseMovie();
                        ie8paused=true;
                    }
                }else{
                    if (paused) {
                        playMovie();
                    } else {
                        pauseMovie();
                    }
                }
					
            }
            function onFullScreen() {
                //console.log();
                var aux = cthis.get(0);
                totalWidth= $(window).width()
                totalHeight= $(window).height()
                    
                if(full==0) {
                    full=1;
                    var elem = aux;
                    if (elem.requestFullScreen) {
                        elem.requestFullScreen();
                    } else if (elem.mozRequestFullScreen) {
                        elem.mozRequestFullScreen();
                    } else if (elem.webkitRequestFullScreen) {
                        elem.webkitRequestFullScreen();
                    }
                    jQuery('body').css('overflow', 'hidden');
                    totalWidth= $(window).width()
                    totalHeight= $(window).height()
                    cthis.css({
                        'position' : 'fixed',
                        'z-index' : 9999,
                        'left' : '0px',
                        'top' : '0px',
                        'width': totalWidth,
                        'height': totalHeight
                    })
                    resizePlayer(totalWidth,totalHeight);
                    if(cthis.find('.audioImg').length>0){
                        cthis.find('.audioImg').css({
                            'width' : totalWidth
                            ,'height' : totalHeight
                        })
                    }
                    if(o.insideGallery==true)
                        jQuery(this).parent().parent().parent().parent().parent().turnFullscreen();
						
                } else {
                    full=0;
                    var elem = document;
                    if (elem.cancelFullScreen) {
                        elem.cancelFullScreen();
                    } else if (elem.mozCancelFullScreen) {
                        elem.mozCancelFullScreen();
                    } else if (elem.webkitCancelFullScreen) {
                        elem.webkitCancelFullScreen();
                    }
                    $('body').css('overflow', original_body_overflow);
                    cthis.css({
                        'position' : 'relative',
                        'z-index' : 'auto',
                        'left' : '0px',
                        'top' : '0px',
                        'width': videoWidth,
                        'height': videoHeight
                    })
                    resizePlayer(videoWidth, videoHeight)
                    
                    if(cthis.find('.audioImg').length>0){
                        cthis.find('.audioImg').css({
                            'width' : videoWidth
                            ,'height' : videoHeight
                        })
                    }
                    if(o.insideGallery==true)
                        jQuery(this).parent().parent().parent().parent().parent().turnNormalscreen();
                }
            }
                
            function resizePlayer(warg, harg) {
                cthis.css({
                    'width' : warg,
                    'height' : harg
                })

                $(video).css({
                    width:warg,
                    height:harg
                })

                cthis.find('.background').css({
                    'width' : warg + parseInt(o.design_background_offsetw)
                })

                cthis.find('.preview').children().eq(0).css({
                    'width' : warg,
                    'height' :harg
                })
                    
                controlsDiv.css({
                    'width': warg
                })
                if(is_ie8()){
                    controlsDiv.css({
                        'position' : 'absolute',
                        'top' : 0,
                        'left' : 0
                    })
                }
                scrubbar=cthis.find('.scrubbar').children();
                scrubbar.eq(0).width(warg+o.design_scrubbarWidth);
                //scrubbar.eq(0).height(12);
                //scrubbar.eq(1).height(12);

                infoPosX=parseInt(controlsDiv.find('.infoText').css('left'));
                infoPosY=parseInt(controlsDiv.find('.infoText').css('top'));
            }
            
            
            function playMovie() {
                if(o.type=='vimeo'){
                    vimeo_data = {
                        "method": "play"
                    };
                    video.contentWindow.postMessage(JSON.stringify(vimeo_data), vimeo_url);
                    return;
                }
                playcontrols.children().eq(0).css('visibility','hidden');
                playcontrols.children().eq(1).css('visibility','hidden');
                playcontrols.children().eq(2).css('visibility','visible');
                playcontrols.children().eq(3).css('visibility','visible');
				
                if(o.type=='normal' || o.type=='audio')
                    video.play();
                
                if(o.type=='youtube')
                    video.playVideo();
				
                cthis.children('.video-description').animate({
                    'opacity': 0
                }, 500);
				
                wasPlaying=true;
            }

            function pauseMovie() {
                playcontrols.children().eq(0).css('visibility','visible');
                playcontrols.children().eq(1).css('visibility','visible');
                playcontrols.children().eq(2).css('visibility','hidden');
                playcontrols.children().eq(3).css('visibility','hidden');
                if(o.type=='normal' || o.type=='audio')
                    video.pause();
                if(o.type=='youtube'){
                    if(video.pauseVideo)
                        video.pauseVideo();
                }
                if(o.type=='vimeo'){
                    if (/Opera/.test (navigator.userAgent)){
                        return;
                    }
                    vimeo_data = {
                        "method": "pause"
                    };
                    video.contentWindow.postMessage(JSON.stringify(vimeo_data), vimeo_url);
                    return;
                }
				
				
                cthis.children('.video-description').animate({
                    'opacity': 1
                }, 500);
				
                wasPlaying=false;
            }
            $.fn.vPlayer.checkState=function(){
                // - we check if video youtube has ended so we can go to the next one
                if(o.type=='youtube' && video.getPlayerState && video.getPlayerState()==0){
                    handleVideoEnd();
                }
            }

        }); // end each
	
    }
			

})(jQuery);

			


		
function onYouTubePlayerReady(playerId) {
    //alert('ytready')
    //alert(playerId)
    ytplayer = document.getElementById(playerId);
    ytplayer.addEventListener("onStateChange", "onytplayerStateChange");
    var aux = playerId.substr(8);
    ytplayer.loadVideoById(aux);
    ytplayer.pauseVideo();
}

function onytplayerStateChange(newState) {
//console.log("Player's new state: " + newState);

//- we send the on end event to the gallery if it has one
if(newState==0){
    jQuery('.vplayer').vPlayer.checkState();
}
}


function is_ios() {
    //return true;
    return (
        (navigator.platform.indexOf("iPhone") != -1) ||
        (navigator.platform.indexOf("iPod") != -1) ||
        (navigator.platform.indexOf("iPad") != -1)
        )
}
function is_ie9(){
    if($.browser.msie && parseInt($.browser.version)==9){
        return true;
    }
    return false;
}
function is_ie8(){
    if($.browser.msie && parseInt($.browser.version)<9){
        return true;
    }
    return false;
}