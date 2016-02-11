// JavaScript Document
$(document).ready(function() {
	
	
	var first = getUrlVars()["t1"];
	var second = getUrlVars()["t2"];
	
	
	if(first != '' || first != 'null'){
		var tab1 = first;
		var tab2 = second;
		gotoTab(tab1, tab2);
	}	
	$.fn.gotoTab = function(tab, subtab) {
		$('#mainTab').liteTabs({ rounded: true, borders: true, width: 996, selectedTab: tab});
		$('#subTab'+tab).liteTabs({width: 939, widthVertical:749, selectedTab: subtab});
	}
	$('.inside').click(function (e) {
		e.preventDefault();
		var from = '';
		if ($(this).parent().parent().attr('name') == undefined){
			from = $(this).parent().attr('name').replace('#','');
		}else {
			from = $(this).parent().parent().attr('name').replace('#','');
		}
		var fromsplit = from.split('_');
		$('.returnTab').attr('href', 'javascript:this.$.fn.gotoTab('+fromsplit[0]+','+fromsplit[1]+')');
		var href = $(this).attr('href').split(',')
		//alert($(this).attr('class'))
		gotoTab(href[0], href[1]);
	})
	function gotoTab(tab, subtab) {
		$('#mainTab').liteTabs({ rounded: true, borders: true, width: 996, selectedTab: tab});
		$('#subTab'+tab).liteTabs({width: 939, widthVertical:749, selectedTab: subtab});
	}
	
	function getUrlVars() {
		var vars = {};
		var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
			vars[key] = value;
		});
		return vars;
	}
	
	$('.subTab ul li a').click(function(){
        $('html, body').animate({scrollTop:100}, 'slow');
        return false;
    });

})