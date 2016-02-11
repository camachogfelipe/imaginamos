/*
 * tweenBox
 *
 * Created by Will Jessup (http://www.willjessup.com)
 * Under an Attribution, Share Alike License
 * derived from thickbox by Cody Lindley (http://www.codylindley.com)
 */



new function() {

  //previous and next images for gallery
  var prev;
  var nex;

  //private variable, checks if setup is complete   true/false
  var setup = false;
  var gallerySetup = false;
  //URL type, determines if it is an image or an ajax request
  var urlType;


  //currently viewing first image
  var curViewing = 0;
  //params of the URL sent to thickbox
  var params;                                                     
  var pos = function(){ $.tweenbox.position($("#tweenContent")[0]); };
  //initialize tweenbox
  $.fn.tweenbox = function(url) { $.tweenbox.routeUrl(url) }

  //tweenbox namespace
  $.tweenbox = {

    /**
    * routeURL grabs incoming URL parses the contents and sends the script where it needs to go
    * On first activation, it runs the setupTweenBox, which creates the tweenBox, otherwise the script just passes the new URL location
    */
     routeUrl: function(url) {
        var urlString = /\.jpg|\.jpeg|\.png|\.gif|\.html|\.htm|\.php|\.cfm|\.asp|\.aspx|\.jsp|\.jst|\.rb|\.txt/g;
        urlType = url.toLowerCase().match(urlString);
        var queryString = url.replace(/^[^\?]+\??/,'');
        params = parseQuery( queryString );

        if(!params.type) params.type = "tween";
        if(!params.speed) params.speed = 300;

        if(setup === true) {
            try {
              this[ params.type ](url);
            } catch(e) {
              alert("method '" + params.type + "' not working properly. Error = " + e.message);
            }
        } else {
         this.setupTweenBox(url);
        }

    },
    setupTweenBox: function(url) {
        var self = this;

        //window is the main container, which always is visible & gets handled for changing location & size
        //container holds the content which can be shown and hidden independantly
        $("body").append('<div id="tweenLoad">' +
                               '<img src="/images/circle_animation.gif" />' +
                          '</div>' +
                          '<div id="tweenOverlay"></div>' +
                          '<div id="tweenWindow">' +
                               '<div id="tweenClose"></div>' +
                               '<div id="tweenContent"></div>' +
                          '</div>');

        //if decorate is set, call the decorate function
        if (params.decorate) $.tweenbox.decorate[ params.decorate ]();

        $("#tweenOverlay, #tweenClose").bind("click",function(){ self.tearDown() });

        $(window).bind("scroll", pos);

        $('select').hide();
        overlaySize();
        load_position();


        $("#tweenOverlay").fadeTo(300, .6);
        $("#tweenWindow").fadeTo(300, 1);

        if(params.setup == "gallery" || urlType == '.jpg' || urlType == '.jpeg' || urlType == '.png' || urlType == '.gif'){
           //setup extra div's for gallery
           $("#tweenContent").append(
                 '<div id="tweenGalleryLeft"><a href=""></a></div>' +
                 '<div id="tweenGalleryRight"><a href=""></a></div>'
           ).css("display", "none");

           if(params.decorate == "shadow")
             $("#tweenGalleryRight a").css("right", "-34px");

           $("#tweenContent").prepend('<div id="tweenImageBox"></div>');
           setup = true;
           this.doTweenGallery(url, params);
           return;
        }

        if(urlType=='.htm'||urlType=='.html'||urlType=='.php'||urlType=='.asp'||urlType=='.aspx'||urlType=='.jsp'||urlType=='.jst'||urlType=='.rb'||urlType=='.txt'||urlType=='.cfm' || (url.indexOf('TB_inline') != -1)){//code to show html pages
          setup = true;
          this.doTweenBox(url, params);
          return;
        }
    },

    doTweenGallery: function(url, params) {
        var self = this;
        var pagesize = getPageSize();
        var arrayPageScroll = getPageScrollTop();
        this.position();

        $.post(url, {}, function(json) {


              $("#tweenLoad").fadeOut();
              $("#tweenWindow").show();
              eval("var args = " + json);

              //new array to hold images from JSON.
              imageArray = new Array();
              var i = 0;
              for (j in args) {
                imageArray[i++] = args[j];
              }

              //show the image and tween to the right size.
              self.tweenImage(imageArray, curViewing);

        });

    },
    doTweenBox: function(url, params) {
        var self = this;
        $("#tweenContent").load(url, function(){
            self.position(this);
            getTweenLinks("#tweenContent a");
            $("#tweenLoad").remove();
            $("#tweenWindow").show();
        });
    },
    tween: function(url) {
      var tweenContent = $("#tweenContent");
      var tweenWindow = $("#tweenWindow");
      var pagesize = getPageSize();
      var arrayPageScroll = getPageScrollTop();
      tweenContent.notAuto = true;

          tweenContent.fadeOut(parseInt(params.speed/2), function() {
              tweenContent.load(url, function(){
                  getTweenLinks("#tweenContent a");
                  var width = getWidth(this);  //grab and cache width
                  var height = getHeight(this); //grab and cache height
                  tweenWindow.animate({left: parseInt( (pagesize[0] - width )/2), width: parseInt( width ) }, parseInt(params.speed), function(){
                      tweenWindow.animate({ height: parseInt( height ), top: parseInt(arrayPageScroll[1] + ((pagesize[1] - height )/2)) }, parseInt(params.speed), function(){
                          tweenContent.fadeIn(parseInt(params.speed/2));
                      });
                  });
              });
          });
    },
    tweenImage: function(imageArray, curViewing) {

               var curImage = new Image();
              var totalImages = imageArray.length;

              if(curViewing == 0)
                prev = (totalImages - 1);
              else
                prev = curViewing - 1;

              if(curViewing == (totalImages - 1))
                nex = 0;
              else
                nex = curViewing + 1;


      var self = this;
      //set which image we're currently on
      curImage.src = imageArray[curViewing];

      var pagesize = getPageSize();
      var arrayPageScroll = getPageScrollTop();

      // this Sets up the first image and creates the left / right DIV's. These need to be included in any future animation, so be careful.
      $("#tweenContent").fadeOut(parseInt(params.speed/2), function() {

              $("#tweenLoad").css({display: "block", font: "2em arial", color: "#888"});
              var k = 0
              new function imageCompleteCheck() {
                        if(!curImage.complete) {
                               $("#tweenLoad").html('loading' +k );
                               return setTimeout(imageCompleteCheck, k++ , 10);
                        } else {
                                  $("#tweenLoad").hide();
                                  var x = pagesize[0] - 100;
                                  var y = pagesize[1] - 100;
                                  imageWidth = curImage.width;
                                  imageHeight = curImage.height;
                                  if (imageWidth > x) {
                                        imageHeight = imageHeight * (x / imageWidth);
                                        imageWidth = x;
                                              if (imageHeight > y) {
                                                      imageWidth = imageWidth * (y / imageHeight);
                                                      imageHeight = y;
                                              }
                                  } else if (imageHeight > y) {
                                          imageWidth = imageWidth * (y / imageHeight);
                                          imageHeight = y;
                                                if (imageWidth > x) {
                                                        imageHeight = imageHeight * (x / imageWidth);
                                                        imageWidth = x;
                                                }
                                  }


                                $("#tweenImageBox").html('<img src="' + curImage.src + '" height="' + imageHeight + 'px" width="' + imageWidth + 'px" />');
                                if(gallerySetup === false){
                                  $("#tweenGalleryLeft a").bind("click", function(){ self.tweenImage(imageArray, prev); return false; });
                                  $("#tweenGalleryRight a").bind("click", function(){ self.tweenImage(imageArray, nex); return false; });
                                  gallerySetup = true;
                                }

                                //$("#tweenWindow").animate({left: parseInt((pagesize[0] - curImage.width)/2), width: parseInt(curImage.width + 30)}, parseInt(params.speed), function(){
                                $("#tweenWindow").animate({left: parseInt((pagesize[0] - imageWidth)/2), width: parseInt(imageWidth + 0)}, parseInt(params.speed), function(){
                                    $("#tweenWindow").animate({height: parseInt(imageHeight + 0), top: parseInt(arrayPageScroll[1] + ((pagesize[1] - imageHeight)/2) - 30)}, parseInt(params.speed), function(){
                                          $("#tweenContent").fadeIn(parseInt(params.speed/2))
                                          $("#tweenGalleryLeft a, #tweenGalleryRight a").css({top: (imageHeight/2 - 420) + "px"});
                                          $("#tweenWindow").css("overflow", "visible");

                                    });
                                });
                           }
                    }
            });
    },
    position: function(o) {
        var pagesize = getPageSize();
        var arrayPageScroll = getPageScrollTop();
        var width = getWidth(o);  //grab and cache width
        var height = getHeight(o); //grab and cache height
        $("#tweenWindow").css({width: width+"px",height: height+"px", left: ((pagesize[0] - width)/2)+"px", top: (arrayPageScroll[1] + ((pagesize[1]-height)/2)-40)+"px" });
        overlaySize();
    },
    tearDown: function() {
      $("#tweenWindow").fadeTo(300, 0);
      $("#tweenOverlay").fadeTo(300, 0, function() {
        $('#tweenWindow,#tweenOverlay,#tweenLoad').remove();
        setup = false;
      });
      $(window).unbind("scroll", pos);
      $('select').show();
    }
  }
  function getWidth(o) {
       return (params.width) ? params.width : parseInt($.css(o, "width"))
  }
  function getHeight(o) {
       return (params.height) ? params.height : parseInt($.css(o, "height"))
  }
  function imageLoadedCheck() {
     //if image isn't loaded, loop back until it is.
     if (!curImage.complete) {
         return false;

     } else {
          return true;
      }
  }
  function overlaySize(){
        if (window.innerHeight && window.scrollMaxY) {  
                yScroll = window.innerHeight + window.scrollMaxY;
        } else if (document.body.scrollHeight > document.body.offsetHeight){ // all but Explorer Mac
                yScroll = document.body.scrollHeight;
        } else { // Explorer Mac...would also work in Explorer 6 Strict, Mozilla and Safari
                yScroll = document.body.offsetHeight;
        }
        $("#tweenOverlay").css("height",yScroll +"px");
  }

  function load_position() {
        var pagesize = getPageSize();
        var arrayPageScroll = getPageScrollTop();
        $("#tweenLoad").css({display: "block", left: ((pagesize[0] - 100)/2)+"px", top: (arrayPageScroll[1] + ((pagesize[1]-100)/2))+"px" })
  }

  function parseQuery ( query ) {
     var Params = new Object ();
     if ( ! query ) return Params; // return empty object
     var Pairs = query.split(/[;&]/);
     for ( var i = 0; i < Pairs.length; i++ ) {
        var KeyVal = Pairs[i].split('=');
        if ( ! KeyVal || KeyVal.length != 2 ) continue;
        var key = unescape( KeyVal[0] );
        var val = unescape( KeyVal[1] );
        val = val.replace(/\+/g, ' ');
        Params[key] = val;
     }
     return Params;
  }
  
  
  function getPageScrollTop(){
        var yScrolltop;
        if (self.pageYOffset) {
                yScrolltop = self.pageYOffset;
        } else if (document.documentElement && document.documentElement.scrollTop){      // Explorer 6 Strict
                yScrolltop = document.documentElement.scrollTop;
        } else if (document.body) {// all other Explorers
                yScrolltop = document.body.scrollTop;
        }
        arrayPageScroll = new Array('',yScrolltop)
        return arrayPageScroll;
  }
  
  function getPageSize(){
        var de = document.documentElement;
        var w = window.innerWidth || self.innerWidth || (de&&de.clientWidth) || document.body.clientWidth;
        var h = window.innerHeight || self.innerHeight || (de&&de.clientHeight) || document.body.clientHeight;

        arrayPageSize = new Array(w,h)
        return arrayPageSize;
  }
};

//tweenbox decorate functions
$.tweenbox.decorate = {
    shadow: function() {

              $("#tweenClose").css("right","12px");
              $("#tweenWindow").prepend(
                               '<div class="white_tr"></div>' +
                               '<div class="white_tl"></div>' +
                               '<div class="white_bl"></div>'
              ).css({background: "url(/images/shadow.gif) right bottom no-repeat", padding: "9px 19px 19px 9px"});


    }
}

//grab and cache tweenlinks
function getTweenLinks(url) {
  $(url).click(function(){
    var t = this.title || this.name || this.href || null;
    $("body").tweenbox(this.href);
    this.blur();
    return false;
  });
}
$(document).ready( function(){
    getTweenLinks("a.tweenbox");
});



