/**
 * Serialize Object
 * 
 * @author: Rigo B Castro - @rigobcastro - imaginamos.com
 */
(function(a){a.fn.serializeObject=function(){var c={};var b=this.serializeArray();a.each(b,function(){if(c[this.name]){if(!c[this.name].push){c[this.name]=[c[this.name]]}c[this.name].push(this.value||"")}else{c[this.name]=this.value||""}});return c}})(jQuery);
/*
 * jQuery replaceText - v1.1 - 11/21/2009
 * http://benalman.com/projects/jquery-replacetext-plugin/
 * 
 * Copyright (c) 2009 "Cowboy" Ben Alman
 * Dual licensed under the MIT and GPL licenses.
 * http://benalman.com/about/license/
 */
(function($){$.fn.replaceText=function(b,a,c){return this.each(function(){var f=this.firstChild,g,e,d=[];if(f){do{if(f.nodeType===3){g=f.nodeValue;e=g.replace(b,a);if(e!==g){if(!c&&/</.test(e)){$(f).before(e);d.push(f)}else{f.nodeValue=e}}}}while(f=f.nextSibling)}d.length&&$(d).remove()})}})(jQuery);