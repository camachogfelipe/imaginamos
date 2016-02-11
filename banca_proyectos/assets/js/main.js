// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.





$(document).ready(function(e) {




$("ul.franja").ready(function(e) {
  $("ul.franja li:nth-of-type(1)").animate({opacity: 1, width: "25%"}, 2000, 'linear');
  $("ul.franja li:nth-of-type(2)").animate({opacity: 1, width: "10%"}, 1500, 'linear');
  $("ul.franja li:nth-of-type(3)").animate({opacity: 1, width: "10%"}, 1000, 'linear');
  $("ul.franja li:nth-of-type(4)").animate({opacity: 1, width: "10%"}, 500, 'linear');
  $("ul.franja li:nth-of-type(5)").animate({opacity: 1, width: "10%"}, 1000, 'linear');
  $("ul.franja li:nth-of-type(6)").animate({opacity: 1, width: "10%"}, 1500, 'linear');
  $("ul.franja li:nth-of-type(7)").animate({opacity: 1, width: "25%"}, 2000, 'linear');
 });

$("ul.franja-bot").ready(function(e) {
  $("ul.franja-bot li:nth-of-type(1)").animate({opacity: 1, width: "25%"}, 2000, 'linear');
  $("ul.franja-bot li:nth-of-type(2)").animate({opacity: 1, width: "10%"}, 1500, 'linear');
  $("ul.franja-bot li:nth-of-type(3)").animate({opacity: 1, width: "10%"}, 1000, 'linear');
  $("ul.franja-bot li:nth-of-type(4)").animate({opacity: 1, width: "10%"}, 500, 'linear');
  $("ul.franja-bot li:nth-of-type(5)").animate({opacity: 1, width: "10%"}, 1000, 'linear');
  $("ul.franja-bot li:nth-of-type(6)").animate({opacity: 1, width: "10%"}, 1500, 'linear');
  $("ul.franja-bot li:nth-of-type(7)").animate({opacity: 1, width: "25%"}, 2000, 'linear');
 });


});

jQuery(function( $ ){
 /**
  * Demo binding and preparation, no need to read this part
  */
 //borrowed from jQuery easing plugin
 //http://gsgd.co.uk/sandbox/jquery.easing.php
 $.easing.elasout = function(x, t, b, c, d) {
  var s=1.70158;var p=0;var a=c;
  if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
  if (a < Math.abs(c)) { a=c; var s=p/4; }
  else var s = p/(2*Math.PI) * Math.asin (c/a);
  return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
 };

 });






