(function($) {
  
  $.fn.rivaSlider = function(options) {
    
    var defaults = {
      width: 1028,
      height: 480,
      preload: true,
      autoPlay: true,
      playOnce: false,
      playOnceNav: false,
      startImage: 1,
      pauseTime: 12000,
      pauseTimer: false,
      transTime: 800,
      transition: 'Fade',
      cubeCols: 8,
      cubeRows: 4,
      blindCols: 14,
      directionNav: 'enable',
      directionNavHover: false,
      controlNav: 'enable',
      controlNavPos: 'bottom_center',
      pauseButton: 'enable',
      pauseButtonHover: false,
      pauseButtonPos: 'bottom_left',
      videoButton: ''
    }
    
    // Settings variable
    var settings = $.extend({}, defaults, options);
    
    // Main function
    return this.each(function() {
      
      // Some variables to get us going
      var vars = {
        width: settings.width,
        height: settings.height,
        startImage: settings.startImage,
        start: 0,
        pausetimer: 0,
        paused: false,
        randAnim: 0,
        loadCount: 0,
        currentImage: 0,
        prevImage: 0,
        thumbCount: 0,
        playOnce: false,
        directionClicked: false,
        controlClicked: false
      }
      
      // Some default variables
      var slider = $(this);
      var ul = slider.find('ul.riva-slider');
      var kids = ul.find('li img.rs-image');
      var count = kids.length;
      var preload = slider.find('.riva-slider-preload');
      var directionButtons = slider.find('.rs-next, .rs-prev');
      var controlButtons = slider.find('ul.rs-control-nav');
      var controlButtonsKids = controlButtons.find('li');
      var pauseButton = slider.find('.rs-pause-button');
      
      // Get the slider's current ID
      var id = slider.attr('class').split(' ');
      id = id[ 0 ].replace('slider-id-', '');
      
      // If slider only has one image or none, disable the auto-play.
      if ( count <= 1 )
        settings.autoPlay = false;
        
      // Check if the user is using IE and if so, what version
      if ( $.browser.msie )
        var browser = {
          browser: true,
          version: parseInt( $.browser.version )
        }
      else
        var browser = {
          browser: false
        }
      
      // Save slider data so each slider can store its own variables
      slider.data('riva:vars', vars);
      
      
      
      
      
      // Randomization event
      slider.bind('riva:random', function() {
        
        var anims = new Array( 'Slide', 'Fade', 'Blinds Left', 'Blinds Right', 'Cubes Left', 'Cubes Right', 'Cubes Diagonal Down', 'Cubes Diagonal Up', 'Cubes Left', 'Cubes Right', 'Cubes Random' );
        vars.randAnim = anims[ Math.floor( Math.random() * anims.length ) ];
        
        // This check makes sure the same transition isn't repeated more than once
        if ( vars.randAnimRepeat == vars.randAnim )
          slider.trigger('riva:random');
        else
          vars.randAnimRepeat = vars.randAnim;
          
      });
      
      
      
      
      
      // Javascript function to completely shuffle arrays.        
      Array.prototype.shuffle = function() {
        var s = [];
        while (this.length) s.push(this.splice(Math.random() * this.length, 1));
        while (s.length) this.push(s.pop());
        return this;
      }
      
      
      // Timer functionality
      var rivaTimer = function( query ) {
        switch ( query ) {
          
          case 'start' :
            
            // Run the slideshow
            vars.start = setTimeout(function() {
              if ( settings.autoPlay == true && settings.pauseTimer == true )
                pauseTimer( 'remove' );
              rivaRun( 'next' );
            }, settings.pauseTime );
            
            // Start variable
            vars.startTime = new Date();
            vars.leftTime = 0;
            vars.paused = false;
            
            break;
          
          case 'pause' :
            
            if ( vars.leftTime == 0 )
              vars.leftTime = settings.pauseTime - ( new Date() - vars.startTime );
            else
              vars.leftTime = vars.leftTime - ( new Date() - vars.startTime );
            vars.paused = true;
            
            // Clear the timer
            clearTimeout( vars.start );
            
            break;
          
          case 'resume' :
            
            vars.startTime = new Date();
            vars.paused = false;
            
            vars.start = setTimeout(function() {
              if ( settings.autoPlay == true && settings.pauseTimer == true )
                pauseTimer( 'remove' );
              rivaRun( 'next' );
            }, vars.leftTime );
            
            break;
          
          case 'reset' :
            
            vars.leftTime = settings.pauseTime;
            
            break;
          
        }
      }
      
      
      // Loading bar functionality
      var pauseTimer = function( query ) {
        
        switch ( query ) {
          
          case 'start' :
            
            // Create pause timer
            $('<div class="rs-pause-timer" />').appendTo(slider);
             
            // Create some variables 
            vars.pausetimer = slider.find('.rs-pause-timer');
            vars.startTime = new Date();
            
            // Animate pause timer  
            vars.pausetimer.animate({ 'width' : settings.width +'px' }, settings.pauseTime, 'linear', function() {
              if ( vars.playOnce == true ) {
                $(this).fadeOut(200, function() {
                  $(this).remove();
                });
              }
            });
            
            break;
          
          case 'pause' :
            
            // Stop the pause timer currently running
            vars.pausetimer.stop();
            
            break;
          
          case 'resume' :
            
            // Continue the animation
            vars.pausetimer.animate({ 'width' : settings.width +'px' }, vars.leftTime, 'linear', function() {
              if ( vars.playOnce == true ) {
                $(this).fadeOut(200, function() {
                  $(this).remove();
                });
              }
            });
            
            break;
          
          case 'remove' :
            
            if ( vars.pausetimer.length >= 1 )
              vars.pausetimer.fadeOut(200, function() {
                vars.pausetimer.remove();
              });
            
            break;
          
        }
        
      }
      
      // Video functionality
      var videoButton = function( query, thisImage ) {
        
        switch ( query ) {
          
          case 'create' :
            
            // Create the button
            if ( thisImage.hasClass('rs-video') && $('.rs-video-button', slider).length < 1 )
              if ( ( browser.browser == true && browser.version > 8 ) || browser.browser == false ) {
                $('<div class="rs-video-button" />').appendTo( slider ).animate({ 'opacity' : '0.5' }, { duration: 200, step: function() {
                    $(this).css({ 'display' : 'block', 'left' : '50%', 'margin-left' : '-33px' });
                  }
                });
              } else {
                $('<div class="rs-video-button" />').appendTo( slider ).show();
              }
              
              vars.videoButton = slider.find('.rs-video-button');
              
            // Add 'big' class if video button is located at the center
            if ( thisImage.hasClass('rs-center') )
              vars.videoButton.addClass('big');
              
            // Size variables
            var videoButtonHeight = vars.videoButton.outerHeight(true);
            var videoButtonWidth = vars.videoButton.outerWidth(true);
             
            // Determine its position 
            if ( thisImage.hasClass('rs-bottom-left') ) {
              vars.videoButton.css({
                'bottom' : '10px',
                'left' : '10px'
              });
              
            } else if ( thisImage.hasClass('rs-bottom-right') ) {
              vars.videoButton.css({
                'bottom' : '10px',
                'right' : '10px'
              });
              
            } else if ( thisImage.hasClass('rs-top-left') ) {
              vars.videoButton.css({
                'top' : '10px',
                'left' : '10px'
              });
              
            } else if ( thisImage.hasClass('rs-top-right') ) {
              vars.videoButton.css({
                'top' : '10px',
                'right' : '10px'
              });
              
            } else if ( thisImage.hasClass('rs-center') ) {
              vars.videoButton.css({
                'bottom' : ( settings.height / 2 ) - ( videoButtonHeight / 2 ) +'px',
                'left' : ( settings.width / 2 ) - ( videoButtonWidth / 2 ) +'px'
              });
              
            }
              
            break;
          
          case 'remove' :
            
            if ( browser.browser == true && browser.version <= 8 ) {
              vars.videoButton.fadeOut(200, function() {
                vars.videoButton.remove();
              });
            } else {
              vars.videoButton.remove();
            }
            
            break;
          
        }
        
      }
      
      // Before animation has started
      var animStart = function( nudge ) {
          
          // If transition is set to random, get the next random transition
          if ( settings.transition == 'Random' )
            slider.trigger('riva:random');
          
          // Calculate the next image
          if ( nudge == 'next' ) {
            vars.prevImage = vars.currentImage;
            if ( count-1 == vars.currentImage)
              vars.currentImage = 0;
            else
              vars.currentImage++;
          }
          else if ( nudge == 'prev' ) {
            vars.prevImage = vars.currentImage;
            if ( 0 == vars.prevImage)
              vars.currentImage = count-1;
            else
              vars.currentImage--;
          }
          else {
            vars.prevImage = vars.currentImage;
            vars.currentImage = nudge;
          }
          
          // Change the control Nav if it's enabled
          if ( settings.controlNav == 'enable' ) {
            controlButtonsKids.eq( vars.prevImage ).removeClass('current');
            controlButtonsKids.eq( vars.currentImage ).addClass('current');
          }
          
          var lastImage = $('li:eq('+ vars.prevImage +')', ul);
        
          // If the slide has text how it
          if ( lastImage.find('.rs-content').length >= 1 ) {
            var content = lastImage.find('.rs-content');
            content.fadeOut(200);
          }
          
      }
      
      
      // When animation has finished
      var animFinished = function( thisImage, lastImage ) {
        
        // If browser is IE8 or lower, remove the filter attribute
        if ( browser.browser == true && browser.version <= 8 )
          thisImage.css({ 'filter' : 'none' });
        
        // Video play button
        if ( thisImage.hasClass('rs-video') )
          vars.video = videoButton( 'create', thisImage );
       
        // Remove z-index class
        thisImage.removeClass('z-index');
        
        // Hide the previous slide
        lastImage.css({ 'display' : 'none', 'opacity' : '0' });
          
        // If the slideshow has looped through all its images and is set to only play once
        if ( vars.startImage == 1) {
          if ( settings.autoPlay == true && settings.playOnce == true && vars.playOnce == false && count-1 == vars.currentImage ) {
            vars.playOnce = true;
          }
        }
        else if ( vars.startImage > 1 ) {
          if ( settings.autoPlay == true && settings.playOnce == true && vars.playOnce == false && vars.startImage-2 == vars.currentImage ) {
            vars.playOnce = true;
          }
        }
        
        // If the slide has text how it
        if ( thisImage.find('.rs-content').length >= 1 ) {
          var content = thisImage.find('.rs-content');
          if ( content.hasClass('rs-text-bottom') || content.hasClass('rs-text-top') ) {
            var marginLeft = content.find('.rs-content-holder').css( 'margin-left' );
            var marginRight = content.find('.rs-content-holder').css( 'margin-right' );
            var paddingLeft = content.find('.rs-content-holder').css( 'padding-left' );
            var paddingRight = content.find('.rs-content-holder').css( 'padding-right' );
            content.find('.rs-content-holder').css({ 'width' : Math.ceil( settings.width - ( parseFloat( marginLeft ) + parseFloat( marginRight ) + parseFloat( paddingLeft ) + parseFloat( paddingRight ) ) ) +'px' });
          } else if ( content.hasClass('rs-text-left') || content.hasClass('rs-text-right') ) {
            var marginTop = content.find('.rs-content-holder').css( 'margin-top' );
            var marginBottom = content.find('.rs-content-holder').css( 'margin-bottom' );
            var paddingTop = content.find('.rs-content-holder').css( 'padding-top' );
            var paddingBottom = content.find('.rs-content-holder').css( 'padding-bottom' );
            content.find('.rs-content-holder').css({ 'height' : Math.ceil( settings.height - ( parseFloat( marginTop ) + parseFloat( marginBottom ) + parseFloat( paddingTop ) + parseFloat( paddingBottom ) ) ) +'px' });
          }
          content.fadeIn(200);
        }
          
        // Remove the previous loading bar & add new one
        if ( settings.autoPlay == true && settings.pauseTimer == true && vars.playOnce == false && vars.paused == false )
          pauseTimer( 'start' );
          
        // Trigger slideshow timer
        if ( settings.autoPlay == true && vars.playOnce == false && vars.paused == false )
          rivaTimer( 'start' );
        else if ( settings.autoPlay == true && vars.playOnce == false && vars.paused == true )
          rivaTimer( 'reset' );
        else if ( settings.autoPlay == true && settings.playOnce == true && vars.playOnce == true )
            if ( settings.pauseButton == 'enable' )
              if ( pauseButton.css( 'opacity' ) > 0 )
                pauseButton.removeClass('paused').fadeOut(200, function() { $(this).remove() });
              else
                pauseButton.remove();
        
      }
      
      
      // Create <div>'s function
      var createDivs = function(type, hide, thisImage, reverse, direction, dimensions ) {
        
        var image = thisImage.find('.rs-image').attr('src');
          
        if ( hide == true )
          var opacity = '0';
        else
          var opacity = '1';
        
        // If user is creating cubes
        if ( type == 'cubes' ) {
          
          var cubeWidth = Math.ceil( settings.width / settings.cubeCols );
          var cubeHeight = Math.ceil( settings.height / settings.cubeRows );
          
          // Create cubes vertically or horizontally  
          if ( direction == 'vertical' ) {
            for ( var cols = 0; cols < settings.cubeCols; cols++ ) {
              for ( var rows = 0; rows < settings.cubeRows; rows++ ) {
                  thisImage.append(
                    $('<div class="rs-cube" />').css({
                      'top' : cubeHeight * rows +'px',
                      'left' : cubeWidth * cols +'px',
                      'background' : 'url(' + image +') -'+ cubeWidth * cols +'px -'+ cubeHeight * rows +'px no-repeat',
                      'opacity' : opacity
                    })
                  );
              }
            }
          } else if ( direction == 'horizontal' ) {
            for ( var rows = 0; rows < settings.cubeRows; rows++ ) {
              for ( var cols = 0; cols < settings.cubeCols; cols++ ) {
                thisImage.append(
                  $('<div class="rs-cube" />').css({
                    'top' : cubeHeight * rows +'px',
                    'left' : cubeWidth * cols +'px',
                    'background' : 'url(' + image +') -'+ cubeWidth * cols +'px -'+ cubeHeight * rows +'px no-repeat',
                    'opacity' : opacity
                  })
                );
              }
            }
          }
          
          if ( reverse == true )
            var divs = $( $('.rs-cube', thisImage).get().reverse() );
          else
            var divs = $('.rs-cube', thisImage);
          
        }
        
        else if ( type == 'blinds' ) {
          
          var blindWidth = Math.ceil( settings.width / settings.blindCols );
          
          for ( var cols = 0; cols < settings.blindCols; cols++ ) {
            thisImage.append(
              $('<div class="rs-blind" />').css({
                'top' : '-'+ settings.height +'px',
                'left' : blindWidth * cols +'px',
                'background' : 'url('+ image +') -'+ blindWidth * cols +'px 0px no-repeat',
                'opacity' : opacity
              })
            );
          }
          
          if ( reverse == true )
            var divs = $( $('.rs-blind', thisImage).get().reverse() );
          else
            var divs = $('.rs-blind', thisImage);
          
        }
        
        if ( dimensions == false )
          divs.addClass('no-dim');
        
        return divs;
        
      }
      
      // Run functionality      
      var rivaRun = function( nudge ) {
        
        // Get the variables
        var vars = slider.data('riva:vars');
        
        if ( vars.complete == true && count > 1 ) {
          
          vars.complete = false;
          
          // Function called before the animation has started
          animStart( nudge );
          
          // Cache more variables
          var thisImage = $('li:eq('+ vars.currentImage +')', ul);
          var lastImage = $('li:eq('+ vars.prevImage +')', ul);
          
          if ( lastImage.hasClass('rs-video') )
            vars.video = videoButton( 'remove' );
            
          
          // Slide Transition
          if ( ( settings.transition == 'Random' && vars.randAnim == 'Slide' ) || settings.transition == 'Slide' ) {
            if ( nudge == 'next' || nudge >= vars.prevImage ) {
              thisImage
                .addClass('z-index')
                .css({ 'left' : settings.width +'px', 'opacity' : '1', 'display' : 'block' })
                .animate({ 'left' : '-='+ settings.width +'px' }, { duration: settings.transTime / 1.5, complete: function() {
                  
                  // Trigger the animation finished function
                  animFinished(thisImage, lastImage);
                  
                  // Complete check variable
                  vars.complete = true;
                  
                }
              });
              lastImage
                .animate({ 'left' : '-='+ settings.width +'px' }, { duration: settings.transTime / 1.5 });
            } else if ( nudge == 'prev' || nudge <= vars.prevImage ) {
              thisImage
                .addClass('z-index')
                .css({ 'left' : -settings.width +'px', 'opacity' : '1', 'display' : 'block' })
                .animate({ 'left' : '+='+ settings.width +'px' }, { duration: settings.transTime / 1.5, complete: function() {
                  
                  // Trigger the animation finished function
                  animFinished(thisImage, lastImage);
                  
                  // Complete check variable
                  vars.complete = true;
                  
                }
              });
              lastImage
                .animate({ 'left' : '+='+ settings.width +'px' }, { duration: settings.transTime / 1.5 });
            }
          }
          
          
          
          // Fade transition
          else if ( ( settings.transition == 'Random' && vars.randAnim == 'Fade' ) || settings.transition == 'Fade' ) {
            thisImage
              .addClass('z-index')
              .css({ 'left' : '0px', 'opacity' : '0', 'display' : 'block' })
              .animate({ 'opacity' : '1' }, { duration: settings.transTime, complete: function() {
                  
                // Trigger the animation finished function
                animFinished(thisImage, lastImage);
                
                // Complete check variable
                vars.complete = true;
                  
              }
            });
          }
          
          
          
          // Blinds left and right
          else if ( ( ( settings.transition == 'Random' && vars.randAnim == 'Blinds Left' ) || settings.transition == 'Blinds Left' )
            || ( settings.transition == 'Random' && vars.randAnim == 'Blinds Right' ) || settings.transition == 'Blinds Right' ) {
            
            if ( ( settings.transition == 'Random' && vars.randAnim == 'Blinds Left' ) || settings.transition == 'Blinds Left' )
              var reverse = true;
            else
              var reverse = false;
              
            // Create the cubes
            var blinds = createDivs( 'blinds', true, thisImage, reverse, false, true );
            
            // Important variables
            var startTime = 0;
            var index = 0;
            var addTime = ( settings.transTime / settings.blindCols );
            
            thisImage
              .addClass('z-index')
              .css({ 'left' : '0px', 'opacity' : '1', 'display' : 'block' })
              .find('.rs-image').css({ 'display' : 'none' });
            
            blinds.each(function () {
              
              var self = this;
              setTimeout(function() {
                
                index++;
                
                // If this is the last div, finish the transition
                if ( index == settings.blindCols ) {
                  
                  // Animate the cube
                  $(self).animate({ 'top' : '+='+ settings.height +'px', 'opacity' : '1' }, { duration: settings.transTime / 1.5, complete: function() {
                      
                      // Trigger the animation finished function
                      animFinished(thisImage, lastImage);
                      
                      // Complete check variable
                      vars.complete = true;
                      
                      // Remove the cubes & show the image
                      blinds.remove();
                      thisImage.find('.rs-image').css({ 'display' : 'block' });
                      
                    }  
                  });
                  
                }
                
                else
                  $(self).animate({ 'top' : '+='+ settings.height +'px', 'opacity' : '1' }, { duration: settings.transTime / 1.5 });
                
              }, startTime += addTime );
              
            });
            
          }
          
          
          
          // Cube left and right
          else if ( ( ( settings.transition == 'Random' && vars.randAnim == 'Cubes Left' ) || settings.transition == 'Cubes Left' )
            || ( settings.transition == 'Random' && vars.randAnim == 'Cubes Right' ) || settings.transition == 'Cubes Right' ) {
            
            if ( ( settings.transition == 'Random' && vars.randAnim == 'Cubes Left' ) || settings.transition == 'Cubes Left' )
              var reverse = true;
            else
              var reverse = false;
              
            // Create the cubes
            var cubes = createDivs( 'cubes', true, thisImage, reverse, 'horizontal', true );
            
            // Important variables
            var startTime = 0;
            var index = 0;
            var addTime = ( settings.transTime / ( settings.cubeRows * settings.cubeCols ) ) / 1.5;
            var cubeWidth = Math.ceil( settings.width / settings.cubeCols );
            var cubeHeight =  Math.ceil( settings.height / settings.cubeRows );
            
            thisImage
              .addClass('z-index')
              .css({ 'left' : '0px', 'opacity' : '1', 'display' : 'block' })
              .find('.rs-image').css({ 'display' : 'none' });
            
            cubes.each(function () {
              
              var self = this;
              setTimeout(function() {
                
                index++;
                
                // If this is the last div, finish the transition
                if ( index == settings.cubeRows * settings.cubeCols ) {
                  
                  // Animate the cube
                  $(self).animate({ 'opacity' : '1' }, { duration: settings.transTime / 1.2, complete: function() {
                      
                      // Trigger the animation finished function
                      animFinished(thisImage, lastImage);
                      
                      // Complete check variable
                      vars.complete = true;
                      
                      // Remove the cubes & show the image
                      cubes.remove();
                      thisImage.find('.rs-image').css({ 'display' : 'block' });
                      
                    }  
                  });
                  
                }
                
                else
                  $(self).animate({ 'opacity' : '1' }, { duration: settings.transTime / 1.2 });
                
              }, startTime += addTime );
              
            });
            
          }
          
          
          
          // Cube diagonal up and down
          else if ( ( ( settings.transition == 'Random' && vars.randAnim == 'Cubes Diagonal Up' ) || settings.transition == 'Cubes Diagonal Up' )
            || ( settings.transition == 'Random' && vars.randAnim == 'Cubes Diagonal Down' ) || settings.transition == 'Cubes Diagonal Down' ) {
            
            if ( ( settings.transition == 'Random' && vars.randAnim == 'Cubes Diagonal Up' ) || settings.transition == 'Cubes Diagonal Up' )
              var reverse = true;
            else
              var reverse = false;
              
            // Create the cubes
            var cubes = createDivs( 'cubes', true, thisImage, reverse, 'horizontal', true );
            
            // Important variables
            var startTime = 0;
            var index = 0;
            var addTime = ( settings.transTime / ( settings.cubeRows * settings.cubeCols ) ) * 2.5;
            var cubeWidth = Math.ceil( settings.width / settings.cubeCols );
            var cubeHeight =  Math.ceil( settings.height / settings.cubeRows );
            var rowIndex = 0;
            var colIndex = 0;
            var cubeArray = new Array();
          
            thisImage
              .addClass('z-index')
              .css({ 'left' : '0px', 'opacity' : '1', 'display' : 'block' })
              .find('.rs-image').css({ 'display' : 'none' });
              
            for ( var cols = 0; cols < settings.cubeCols; cols++ ) {
              cubeArray[ cols ] = new Array();              
            }
            
            cubes.each(function() {
              
              cubeArray[ colIndex ][ rowIndex ] = $(this);
              
              colIndex++;
              if ( colIndex == settings.cubeCols ) {
                rowIndex++;
                colIndex = 0;
              }
              
            });
            
            for ( var cols = 0; cols < settings.cubeCols; cols++ ) {
              for ( var rows = 0; rows < settings.cubeRows; rows++ ) {
                
                (function(cubeArray, cols, rows) {
                  
                  var cube = cubeArray[ cols ][ rows ];
                  
                  setTimeout(function() {
                    
                    index++;
                    
                    if ( index == settings.cubeRows * settings.cubeCols ) {
                    
                      cube.animate({ 'opacity' : '1' }, { duration: settings.transTime / 1.5, complete: function() {
                          
                          // Trigger the animation finished function
                          animFinished(thisImage, lastImage);
                          
                          // Complete check variable
                          vars.complete = true;
                          
                          // Remove the cubes & show the image
                          cubes.remove();
                          thisImage.find('.rs-image').css({ 'display' : 'block' });
                          
                        }
                      });
                    
                    } else
                      cube.animate({ 'opacity' : '1' }, { duration: settings.transTime / 1.5 });
                    
                  }, startTime += addTime );
                  
                })( cubeArray, cols, rows );
                
              }
              startTime = addTime * cols;
            }
          
          }
          
          
          
          // Cube fade left and fade right
          else if ( ( ( settings.transition == 'Random' && vars.randAnim == 'Cubes Left' ) || settings.transition == 'Cubes Left' )
            || ( settings.transition == 'Random' && vars.randAnim == 'Cubes Right' ) || settings.transition == 'Cubes Right' ) {
            
            if ( ( settings.transition == 'Random' && vars.randAnim == 'Cubes Left' ) || settings.transition == 'Cubes Left' )
              var reverse = true;
            else
              var reverse = false;
            
            // Create the cubes
            var cubes = createDivs( 'cubes', true, thisImage, reverse, 'vertical', true );
            
            // And some important variables
            var startTime = 0;
            var index = 0;
            var addTime = ( settings.transTime / ( settings.cubeRows * settings.cubeCols ) ) / 1.3;
            
            thisImage
              .addClass('z-index')
              .css({ 'left' : '0px', 'opacity' : '1', 'display' : 'block' })
              .find('.rs-image').css({ 'display' : 'none' });
            
            cubes.each(function () {
              
              var self = this;
              setTimeout(function() {
                
                index++;
                
                // If this is the last div, finish the transition
                if ( index == settings.cubeRows * settings.cubeCols ) {
                  
                  // Animate the cube
                  $(self).animate({ 'opacity' : '1' }, { duration: settings.transTime / 3, complete: function() {
                      
                      // Trigger the animation finished function
                      animFinished(thisImage, lastImage);
                      
                      // Complete check variable
                      vars.complete = true;
                      
                      // Remove the cubes & show the image
                      cubes.remove();
                      thisImage.find('.rs-image').css({ 'display' : 'block' });
                      
                    }  
                  });
                  
                }
                
                else
                  $(self).animate({ 'opacity' : '1' }, { duration: settings.transTime / 3 });
                
              }, startTime += addTime );
              
            });
            
          }
          
          
        
          // Cubes random
          else if ( ( settings.transition == 'Random' && vars.randAnim == 'Cubes Random' ) || settings.transition == 'Cubes Random' ) {
            
            // Create the cubes
            var cubes = createDivs( 'cubes', true, thisImage, reverse, 'vertical', true );
            
            // And some important variables
            var startTime = 0;
            var index = 0;
            var addTime = ( settings.transTime / ( settings.cubeRows * settings.cubeCols ) ) / 2;
            var random = new Array();
            
            thisImage
              .addClass('z-index')
              .css({ 'left' : '0px', 'opacity' : '1', 'display' : 'block' })
              .find('.rs-image').css({ 'display' : 'none' });
              
            // For each cube, push its index to an array
            for ( var i = 0; i <= ( settings.cubeRows * settings.cubeCols ); i++ )
              random.push( i );
              
            // Shuffle the array
            random.shuffle();
            
            // Loop to animate each cube individually
            for ( var i = 0; i <= random.length; i++ ) {
              
              cubes.eq( random[ i ] ).each(function() {
                
                var self = $(this);
                setTimeout(function() {
                  
                  // Increase the index
                  index++;
                  
                  // Check if this is the last cube
                  if ( index == settings.cubeRows * settings.cubeCols ) {
                    
                    self.animate({ 'opacity' : '1' }, { duration: settings.transTime / 1.2, complete: function() {
                      
                      // Trigger the animation finished function
                      animFinished(thisImage, lastImage);
                      
                      // Complete check variable
                      vars.complete = true;
                      
                      // Remove the cubes & show the image
                      cubes.remove();
                      thisImage.find('.rs-image').css({ 'display' : 'block' });
                      
                      }
                    });
                    
                  }
                  
                  else
                    self.animate({ 'opacity' : '1' }, settings.transTime / 1.2 );
                  
                }, startTime += addTime );
                
              });
              
            }
            
          }
        
        }
        
        
      }
      
      
      
      
      
      // Preload Functionality
      if ( settings.preload == true && count >= 1 ) {
        
        vars.complete = false;
        
        kids.one('load', function() {
          
          vars.loadCount++;
          if ( vars.loadCount == count ) {
            
            // Show the appropriate image
            if ( vars.startImage > count ) {
              vars.startImage = 1;
              vars.currentImage = 0;
            } else
              vars.currentImage = vars.startImage-1
            
            var thisImage = $('li:eq('+ parseFloat(vars.startImage-1) +')', ul);
            thisImage.css({ 'display' : 'block' });
            
            // Current control nav icon
            if ( settings.controlNav == 'enable' ) {
              controlButtonsKids.eq( vars.currentImage ).addClass('current');
            }
            
            // Fade out the preloader
            preload.fadeOut(400, function() {
              
              if ( thisImage.hasClass('rs-video') )
                vars.video = videoButton( 'create', thisImage );
              
              // Remove it
              $(this).remove();
              
              if ( thisImage.find('.rs-content').length >= 1 ) {
                var content = thisImage.find('.rs-content');
                if ( content.hasClass('rs-text-bottom') || content.hasClass('rs-text-top') ) {
                  var marginLeft = content.find('.rs-content-holder').css( 'margin-left' );
                  var marginRight = content.find('.rs-content-holder').css( 'margin-right' );
                  var paddingLeft = content.find('.rs-content-holder').css( 'padding-left' );
                  var paddingRight = content.find('.rs-content-holder').css( 'padding-right' );
                  content.find('.rs-content-holder').css({ 'width' : Math.ceil( settings.width - ( parseFloat( marginLeft ) + parseFloat( marginRight ) + parseFloat( paddingLeft ) + parseFloat( paddingRight ) ) ) +'px' });
                } else if ( content.hasClass('rs-text-left') || content.hasClass('rs-text-right') ) {
                  var marginTop = content.find('.rs-content-holder').css( 'margin-top' );
                  var marginBottom = content.find('.rs-content-holder').css( 'margin-bottom' );
                  var paddingTop = content.find('.rs-content-holder').css( 'padding-top' );
                  var paddingBottom = content.find('.rs-content-holder').css( 'padding-bottom' );
                  content.find('.rs-content-holder').css({ 'height' : Math.ceil( settings.height - ( parseFloat( marginTop ) + parseFloat( marginBottom ) + parseFloat( paddingTop ) + parseFloat( paddingBottom ) ) ) +'px' });
                }
                thisImage.find('.rs-content').fadeIn(200);
              }
              
              // Run the slideshow
              if ( count > 1 && settings.autoPlay == true ) {
                
                // Loading bar
                if ( settings.pauseTimer == true )
                  pauseTimer( 'start' );
                
                // Slideshow timer
                rivaTimer( 'start' );
                
              }
              
            });
              
            // Fade in the images 
            ul.fadeIn(400);
            
            vars.complete = true;
            
          }
          
        }).each(function(){
            if( this.complete || ( $.browser.msie && parseInt( $.browser.version ) >= 6 ) ) 
              $(this).trigger('load');
        });
        
      } else if ( count >= 1 ) {
        
        // Show the appropriate image
        if ( vars.startImage > count ) {
          vars.startImage = 1
          vars.currentImage = 0;
        } else
          vars.currentImage = vars.startImage-1;
          
        var thisImage = $('li:eq('+ parseFloat(vars.startImage-1) +')', ul);
        thisImage.css({ 'display' : 'block' });
        
        // Current control nav icon
        if ( settings.controlNav == 'enable' ) {
          controlButtonsKids.eq( vars.currentImage ).addClass('current');
        }
        
        if ( thisImage.hasClass('rs-video') )
          vars.video = videoButton( 'create', thisImage );
        
        if ( thisImage.find('.rs-content').length >= 1 ) {
          var content = thisImage.find('.rs-content');
          if ( content.hasClass('rs-text-bottom') || content.hasClass('rs-text-top') ) {
            var marginLeft = content.find('.rs-content-holder').css( 'margin-left' );
            var marginRight = content.find('.rs-content-holder').css( 'margin-right' );
            var paddingLeft = content.find('.rs-content-holder').css( 'padding-left' );
            var paddingRight = content.find('.rs-content-holder').css( 'padding-right' );
            content.find('.rs-content-holder').css({ 'width' : Math.ceil( settings.width - ( parseFloat( marginLeft ) + parseFloat( marginRight ) + parseFloat( paddingLeft ) + parseFloat( paddingRight ) ) ) +'px' });
          } else if ( content.hasClass('rs-text-left') || content.hasClass('rs-text-right') ) {
            var marginTop = content.find('.rs-content-holder').css( 'margin-top' );
            var marginBottom = content.find('.rs-content-holder').css( 'margin-bottom' );
            var paddingTop = content.find('.rs-content-holder').css( 'padding-top' );
            var paddingBottom = content.find('.rs-content-holder').css( 'padding-bottom' );
            content.find('.rs-content-holder').css({ 'height' : Math.ceil( settings.height - ( parseFloat( marginTop ) + parseFloat( marginBottom ) + parseFloat( paddingTop ) + parseFloat( paddingBottom ) ) ) +'px' });
          }
          thisImage.find('.rs-content').fadeIn(200);
        }
        
        // Run the slideshow
        if ( count > 1 && settings.autoPlay == true ) {
        
          // Loading bar
          if ( settings.pauseTimer == true )
            pauseTimer( 'start' );
            
          // Slideshow timer
          rivaTimer( 'start' );
        
        }
        
        vars.complete = true;
        
      }
      
      
      
      
      
      // Next & Prev button functionality
      if ( settings.directionNav == 'enable' ) {
        
        var directionButtonsTimer = '';
        
        if ( settings.directionNavHover == true ) {
          slider.hover(
            function() {
              if ( ( settings.playOnceNav == false ) || ( settings.playOnceNav == true && vars.playOnce == true ) && $('.riva-slider-preload').length < 1 ) {
                clearTimeout( directionButtonsTimer );
                if ( browser.browser == true && browser.version <= 8 ) {
                  directionButtons.show();
                } else {
                  directionButtons.stop().animate({ 'opacity' : '1' }, { duration: 200, step: function() { $(this).css({ 'display' : 'block' }); }});
                }
              }
            }, function() {
              if ( ( settings.playOnceNav == false ) || ( settings.playOnceNav == true && vars.playOnce == true ) && $('.riva-slider-preload').length < 1 ) {
                if ( browser.browser == true && browser.version <= 8 ) {
                  directionButtonsTimer = setTimeout( function() { directionButtons.hide(); }, 500 );
                } else {
                  directionButtonsTimer = setTimeout( function() { directionButtons.stop().animate({ 'opacity': '0' }, { duration: 200, complete: function() { $(this).css({ 'display' : 'none' }); }}); }, 500 );
                }
              }
            }
          );
        }
        
        directionButtons.live('click', function() {
          
          function directionClickNav(nudge) {
            if ( vars.pausetimer.length >= 1 ) {
              vars.pausetimer.stop().fadeOut(200, function() {
                $(this).remove();
                if ( settings.autoPlay == true ) clearTimeout(vars.start);
                rivaRun(nudge);
                vars.directionClicked = false;
              });
            } else {
              if ( settings.autoPlay == true ) clearTimeout(vars.start);
              rivaRun(nudge);
              vars.directionClicked = false;
            }
          }
          
          if ( vars.directionClicked == false ) {
            vars.directionClicked = true;
            if ( $(this).hasClass('rs-next') )
              directionClickNav( 'next' );
            else if ( $(this).hasClass('rs-prev') )
              directionClickNav( 'prev' );
          }
          
        });
        
      }
      
      
      // Control nav functionality
      if ( settings.controlNav == 'enable' ) {
        
        var controlHeight = controlButtonsKids.outerHeight(true);
        var controlWidth = ( ( controlButtonsKids.outerWidth(true) * count ) + parseInt( controlButtons.css( 'padding-left' ).replace(/[^-\d\.]/g, '') ) );
        
        if ( settings.controlNavPos == 'bottom_center' ) {
          
          var left = ( vars.width / 2 ) - ( controlWidth / 2 );
          if ( left < 0  && controlWidth > settings.width )
            left = 0;
            
          controlButtons.css({
            'position' : 'absolute',
            'top' : 440,
            'left' : left +'px',
			'left' : '50%',
			'margin-left' : '-46px',
            'visibility' : 'visible'
          }).addClass('bottom-center');
              
        } else if ( settings.controlNavPos == 'bottom_left' ) {
          controlButtons.css({
            'position' : 'absolute',
            'top' : settings.height +'px',
            'visibility' : 'visible'
          }).addClass('bottom-left');
              
        } else if ( settings.controlNavPos == 'bottom_right' ) {
          controlButtons.css({
            'position' : 'absolute',
            'top' : settings.height +'px',
            'visibility' : 'visible'
          }).addClass('bottom-right');
        }
        
        controlButtonsKids.live('click', function() {
          
          if ( ( settings.playOnceNav == false ) || ( settings.playOnceNav == true && vars.playOnce == true ) ) {
          
            function controlClickNav(nudge) {
              if ( vars.pausetimer.length >= 1 ) {
                vars.pausetimer.stop().fadeOut(200, function() {
                  $(this).remove();
                  if ( settings.autoPlay == true ) clearTimeout(vars.start);
                  rivaRun(nudge);
                  vars.controlClicked = false;
                });
              } else {
                if ( settings.autoPlay == true ) clearTimeout(vars.start);
                rivaRun(nudge);
                vars.controlClicked = false;
              }
            }
            
            var value = $(this).index();
            if ( vars.controlClicked == false && value != vars.currentImage ) {
              vars.controlClicked = true;
              controlButtonsKids.each(function() {
                if ( $(this).hasClass('hover') )
                  $(this).removeClass('hover');
              });
              controlClickNav( parseFloat( value ) );
            }
          
          }
          
        });
        
        controlButtonsKids.hover(function() {
          
          if( $(this).hasClass('current') == false )
            $(this).addClass('hover');
          
        }, function() {
          
          if ( $(this).hasClass('current') == false || $(this).hasClass('hover') )
            $(this).removeClass('hover');
          
        });
        
      }
      
      
      // Pause button funcionality
      if ( settings.pauseButton == 'enable' && settings.autoPlay == true ) {
        
        if ( settings.pauseButtonPos == 'center' )
          pauseButton.addClass('big');
        
        var pauseHeight = pauseButton.outerHeight(true);
        var pauseWidth = pauseButton.outerWidth(true);
        
        if ( settings.pauseButtonPos == 'bottom_left' ) {
          pauseButton.css({
            'bottom' : '10px',
            'left' : '10px'
          });
          
        } else if ( settings.pauseButtonPos == 'bottom_right' ) {
          pauseButton.css({
            'bottom' : '10px',
            'right' : '10px'
          });
          
        } else if ( settings.pauseButtonPos == 'top_left' ) {
          pauseButton.css({
            'top' : '10px',
            'left' : '10px'
          });
          
        } else if ( settings.pauseButtonPos == 'top_right' ) {
          pauseButton.css({
            'top' : '10px',
            'right' : '10px'
          });
          
        } else if ( settings.pauseButtonPos == 'center' ) {
          pauseButton.css({
            'bottom' : ( settings.height / 2 ) - ( pauseHeight / 2 ) +'px',
            'left' : ( settings.width / 2 ) - ( pauseWidth / 2 ) +'px'
          })
          
        }
        
        var pauseButtonTimer = '';
        
        if ( settings.pauseButtonHover == true ) {
          slider.hover(
            function() {
              if ( ( settings.playOnce == false ) || ( settings.playOnce == true && vars.playOnce == false ) && $('.riva-slider-preload').length < 1 )
                clearTimeout( pauseButtonTimer );
                if ( browser.browser == true && browser.version <= 8 ) {
                  pauseButton.show();
                } else {
                  pauseButton.stop().animate({ 'opacity' : '0.5' }, { duration: 200, step: function() { $(this).css({ 'display' : 'block' }); }});
                }
            }, function() {
              if ( $('.riva-slider-preload').length < 1 ) {
                if ( browser.browser == true && browser.version <= 8 ) {
                  pauseButtonTimer = setTimeout( function() { pauseButton.hide() }, 500 );
                } else {
                  pauseButtonTimer = setTimeout( function() { pauseButton.stop().animate({ 'opacity': '0' }, { duration: 200, complete: function() { $(this).css({ 'display' : 'none' }); }}); }, 500 );
                }
              }
            }
          );
        }
        
        if ( ( browser.browser == true && browser.version > 8 ) || browser.browser == false ) {
          pauseButton.hover(
            function() {
              $(this).animate({ 'opacity' : '1' }, 200 );
            }, function() {
              $(this).animate({ 'opacity' : '0.5' }, 200 );
            });
        }
        
        pauseButton.live('click', function() {
          
          if ( ( settings.playOnce == false ) || ( settings.playOnce == true && vars.playOnce == false ) ) {
            if ( vars.paused == true && vars.complete == true && vars.start != 0 ) {
              
              if ( vars.pausetimer.length >= 1 && vars.leftTime != settings.pauseTime )
                pauseTimer( 'resume' );
              else if ( vars.leftTime == settings.pauseTime )
                pauseTimer( 'start' );
                
              if ( pauseButton.hasClass('paused') )
                pauseButton.removeClass('paused');
                
              rivaTimer( 'resume' );
              
            }
            
            else if ( vars.paused == false && vars.complete == true && vars.start != 0 ) {
              
              if ( vars.pausetimer.length >= 1 )
                pauseTimer( 'pause' );
                
              pauseButton.addClass('paused');
              
              rivaTimer( 'pause' );
              
            }
          }
          
        });
        
      }
      
      if ( slider.find('.rs-video-button').length <= 1 ) {
        
        $('li.rs-video a, .rs-video-button', slider).live('click', function() {
          
          var video = $('li:eq('+ vars.currentImage +') a', ul).attr('href');
          
          if ( vars.complete == true && settings.autoPlay == true ) {
            rivaTimer( 'pause' );
            if ( vars.pausetimer.length >= 1 )
              vars.pausetimer.fadeOut(200);
          }
            
          if ( vars.complete == true && settings.pauseTimer == true && vars.pausetimer.length >= 1 )
            pauseTimer( 'pause' );
            
          ul.fadeOut(400, function() {
            $('<div class="rs-close-video" />').appendTo(slider).fadeIn(200);
            controlButtons.fadeOut(200);
            $('<iframe src="'+ video +'" width="'+ settings.width +'" height="'+ settings.height +'" />').appendTo(slider);
          });
          
          return false;
          
        });
        
        if ( ( browser.browser == true && browser.version > 8 ) || browser.browser == false ) {
          $('.rs-video-button', slider).live('mouseenter', function() {
            $(this).animate({ 'opacity' : '1' }, 200 );
          });
          $('.rs-video-button', slider).live('mouseleave', function() {
            $(this).animate({ 'opacity' : '0.5' }, 200 );
          });
        }
        
        slider.find('.rs-close-video').live('click', function() {
          
          slider.find('iframe').fadeOut(200);
          slider.find('.rs-close-video').fadeOut(200, function() {
            $(this).remove();
          });
          if ( vars.pausetimer.length >= 1 )
            vars.pausetimer.fadeIn(200);
          controlButtons.fadeIn(200);
          
          ul.fadeIn(400, function() {
            
            setTimeout( function() {
              if ( ( ( settings.playOnce == true && vars.playOnce == false ) || ( settings.playOnce == false ) ) && vars.complete == true && settings.autoPlay == true )
                rivaTimer( 'resume' );
              
              if ( ( ( settings.playOnce == true && vars.playOnce == false ) || ( settings.playOnce == false ) ) && vars.complete == true && settings.pauseTimer == true && vars.pausetimer.length >= 1 )
                pauseTimer( 'resume' );
            }, 100 );
              
            slider.find('iframe').remove();
            
          });
          
        });
        
      }
      
      
    });
    
  }

})(jQuery);