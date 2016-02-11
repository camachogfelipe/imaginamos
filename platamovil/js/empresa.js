// JavaScript Document
// JavaScript Document
$(document).ready(function(){
	
	
	$('.subTab ul li a').click(function(){
        $('html, body').animate({scrollTop:165}, 'slow');
        return false;
    });
	$("#tit2").css({
			'opacity': "0"
		});
	$("#tit3").css({
			'opacity': "0"
		});
	$("#tit4").css({
			'opacity': "0"
		});
	$("#tit5").css({
			'opacity': "0"
		});

	
	var first = getUrlVars()["t1"];
	var second = getUrlVars()["t2"];
	
	
	if(first != '' || first != 'null'){
		var tab1 = first;
		var tab2 = second;
		gotoTab(tab1, tab2);
	}	
	
	
	
	
	$("#tit2, #tit3, #tit4, #tit5").css('opacity', 0);
	function gotoTab(tab, subtab) {
		$('#mainTab').liteTabs({ rounded: true, borders: true, width: 997, selectedTab: tab});
		$('#subTab'+tab).liteTabs({width: 997, selectedTab: subtab});
		
		if(tab == 2){
			$("#p1").animate({
			'opacity': "0"
		});
		$("#p2").animate({
			'opacity': "1"
		});
		$("#p3").animate({
			'opacity': "0"
		});
		$("#p4").animate({
			'opacity': "0"
		});
		$("#p5").animate({
			'opacity': "0"
		});
		
		$("#tit1").animate({
			'opacity': "0"
		});
		$("#tit2").animate({
			'opacity': "1"
		});
		$("#tit3").animate({
			'opacity': "0"
		});
		$("#tit4").animate({
			'opacity': "0"
		});
		$("#tit5").animate({
			'opacity': "0"
		});
		}
		
		if(tab == 3){
			$("#p1").animate({
			'opacity': "0"
		});
		$("#p2").animate({
			'opacity': "0"
		});
		$("#p3").animate({
			'opacity': "1"
		});
		$("#p4").animate({
			'opacity': "0"
		});
		$("#p5").animate({
			'opacity': "0"
		});
		
		$("#tit1").animate({
			'opacity': "0"
		});
		$("#tit2").animate({
			'opacity': "0"
		});
		$("#tit3").animate({
			'opacity': "1"
		});
		$("#tit4").animate({
			'opacity': "0"
		});
		$("#tit5").animate({
			'opacity': "0"
		});
		}
		
		if(tab == 4){
		$("#p1").animate({
			'opacity': "0"
		});
		$("#p2").animate({
			'opacity': "0"
		});
		$("#p3").animate({
			'opacity': "0"
		});
		$("#p4").animate({
			'opacity': "1"
		});
		$("#p5").animate({
			'opacity': "0"
		});
		
		$("#tit1").animate({
			'opacity': "0"
		});
		$("#tit2").animate({
			'opacity': "0"
		});
		$("#tit3").animate({
			'opacity': "0"
		});
		$("#tit4").animate({
			'opacity': "1"
		});
		$("#tit5").animate({
			'opacity': "0"
		});
		}
		
	}
	
	$("#t1").click(function(e){
		e.preventDefault()
		$("#p1").animate({
			'opacity': "1"
		});
		$("#p2").animate({
			'opacity': "0"
		});
		$("#p3").animate({
			'opacity': "0"
		});
		$("#p4").animate({
			'opacity': "0"
		});
		$("#p5").animate({
			'opacity': "0"
		});
		
		$("#tit1").animate({
			'opacity': "1"
		});
		$("#tit2").animate({
			'opacity': "0"
		});
		$("#tit3").animate({
			'opacity': "0"
		});
		$("#tit4").animate({
			'opacity': "0"
		});
		$("#tit5").animate({
			'opacity': "0"
		});
	});
	
	$("#t2").click(function(e){
		e.preventDefault()
		$("#p1").animate({
			'opacity': "0"
		});
		$("#p2").animate({
			'opacity': "1"
		});
		$("#p3").animate({
			'opacity': "0"
		});
		$("#p4").animate({
			'opacity': "0"
		});
		$("#p5").animate({
			'opacity': "0"
		});
		
		$("#tit1").animate({
			'opacity': "0"
		});
		$("#tit2").animate({
			'opacity': "1"
		});
		$("#tit3").animate({
			'opacity': "0"
		});
		$("#tit4").animate({
			'opacity': "0"
		});
		$("#tit5").animate({
			'opacity': "0"
		});
	});
	
	$("#t3, #sub-t3").click(function(e){
		e.preventDefault()
		$("#p1").animate({
			'opacity': "0"
		});
		$("#p2").animate({
			'opacity': "0"
		});
		$("#p3").animate({
			'opacity': "1"
		});
		$("#p4").animate({
			'opacity': "0"
		});
		$("#p5").animate({
			'opacity': "0"
		});
		
		$("#tit1").animate({
			'opacity': "0"
		});
		$("#tit2").animate({
			'opacity': "0"
		});
		$("#tit3").animate({
			'opacity': "1"
		});
		$("#tit4").animate({
			'opacity': "0"
		});
		$("#tit5").animate({
			'opacity': "0"
		});
	});
	
	$("#t4").click(function(e){
		e.preventDefault()
		$("#p1").animate({
			'opacity': "0"
		});
		$("#p2").animate({
			'opacity': "0"
		});
		$("#p3").animate({
			'opacity': "0"
		});
		$("#p4").animate({
			'opacity': "1"
		});
		$("#p5").animate({
			'opacity': "0"
		});
		
		$("#tit1").animate({
			'opacity': "0"
		});
		$("#tit2").animate({
			'opacity': "0"
		});
		$("#tit3").animate({
			'opacity': "0"
		});
		$("#tit4").animate({
			'opacity': "1"
		});
		$("#tit5").animate({
			'opacity': "0"
		});
	});
	
	$("#t5").click(function(e){
		e.preventDefault()
		$("#p1").animate({
			'opacity': "0"
		});
		$("#p2").animate({
			'opacity': "0"
		});
		$("#p3").animate({
			'opacity': "0"
		});
		$("#p4").animate({
			'opacity': "0"
		});
		$("#p5").animate({
			'opacity': "1"
		});
		
		$("#tit1").animate({
			'opacity': "0"
		});
		$("#tit2").animate({
			'opacity': "0"
		});
		$("#tit3").animate({
			'opacity': "0"
		});
		$("#tit4").animate({
			'opacity': "0"
		});
		$("#tit5").animate({
			'opacity': "1"
		});
	});
	
	
	$.fn.gotoTab = function(tab, subtab) {
		$('#mainTab').liteTabs({ rounded: true, borders: true, width: 997, selectedTab: tab});
		$('#subTab'+tab).liteTabs({width: 997, selectedTab: subtab});
		
		if(tab == 2){
			$("#p1").animate({
			'opacity': "0"
		});
		$("#p2").animate({
			'opacity': "1"
		});
		$("#p3").animate({
			'opacity': "0"
		});
		$("#p4").animate({
			'opacity': "0"
		});
		$("#p5").animate({
			'opacity': "0"
		});
		
		$("#tit1").animate({
			'opacity': "0"
		});
		$("#tit2").animate({
			'opacity': "1"
		});
		$("#tit3").animate({
			'opacity': "0"
		});
		$("#tit4").animate({
			'opacity': "0"
		});
		$("#tit5").animate({
			'opacity': "0"
		});
		}
		
		if(tab == 3){
			$("#p1").animate({
			'opacity': "0"
		});
		$("#p2").animate({
			'opacity': "0"
		});
		$("#p3").animate({
			'opacity': "1"
		});
		$("#p4").animate({
			'opacity': "0"
		});
		$("#p5").animate({
			'opacity': "0"
		});
		
		$("#tit1").animate({
			'opacity': "0"
		});
		$("#tit2").animate({
			'opacity': "0"
		});
		$("#tit3").animate({
			'opacity': "1"
		});
		$("#tit4").animate({
			'opacity': "0"
		});
		$("#tit5").animate({
			'opacity': "0"
		});
		}
		
		if(tab == 4){
		$("#p1").animate({
			'opacity': "0"
		});
		$("#p2").animate({
			'opacity': "0"
		});
		$("#p3").animate({
			'opacity': "0"
		});
		$("#p4").animate({
			'opacity': "1"
		});
		$("#p5").animate({
			'opacity': "0"
		});
		
		$("#tit1").animate({
			'opacity': "0"
		});
		$("#tit2").animate({
			'opacity': "0"
		});
		$("#tit3").animate({
			'opacity': "0"
		});
		$("#tit4").animate({
			'opacity': "1"
		});
		$("#tit5").animate({
			'opacity': "0"
		});
		}
		
	}
	
	$("#t1").click(function(e){
		e.preventDefault()
		$("#p1").animate({
			'opacity': "1"
		});
		$("#p2").animate({
			'opacity': "0"
		});
		$("#p3").animate({
			'opacity': "0"
		});
		$("#p4").animate({
			'opacity': "0"
		});
		$("#p5").animate({
			'opacity': "0"
		});
		
		$("#tit1").animate({
			'opacity': "1"
		});
		$("#tit2").animate({
			'opacity': "0"
		});
		$("#tit3").animate({
			'opacity': "0"
		});
		$("#tit4").animate({
			'opacity': "0"
		});
		$("#tit5").animate({
			'opacity': "0"
		});
	});
	
	$("#t2").click(function(e){
		e.preventDefault()
		$("#p1").animate({
			'opacity': "0"
		});
		$("#p2").animate({
			'opacity': "1"
		});
		$("#p3").animate({
			'opacity': "0"
		});
		$("#p4").animate({
			'opacity': "0"
		});
		$("#p5").animate({
			'opacity': "0"
		});
		
		$("#tit1").animate({
			'opacity': "0"
		});
		$("#tit2").animate({
			'opacity': "1"
		});
		$("#tit3").animate({
			'opacity': "0"
		});
		$("#tit4").animate({
			'opacity': "0"
		});
		$("#tit5").animate({
			'opacity': "0"
		});
	});
	
	$("#t3, #sub-t3").click(function(e){
		e.preventDefault()
		$("#p1").animate({
			'opacity': "0"
		});
		$("#p2").animate({
			'opacity': "0"
		});
		$("#p3").animate({
			'opacity': "1"
		});
		$("#p4").animate({
			'opacity': "0"
		});
		$("#p5").animate({
			'opacity': "0"
		});
		
		$("#tit1").animate({
			'opacity': "0"
		});
		$("#tit2").animate({
			'opacity': "0"
		});
		$("#tit3").animate({
			'opacity': "1"
		});
		$("#tit4").animate({
			'opacity': "0"
		});
		$("#tit5").animate({
			'opacity': "0"
		});
	});
	
	$("#t4").click(function(e){
		e.preventDefault()
		$("#p1").animate({
			'opacity': "0"
		});
		$("#p2").animate({
			'opacity': "0"
		});
		$("#p3").animate({
			'opacity': "0"
		});
		$("#p4").animate({
			'opacity': "1"
		});
		$("#p5").animate({
			'opacity': "0"
		});
		
		$("#tit1").animate({
			'opacity': "0"
		});
		$("#tit2").animate({
			'opacity': "0"
		});
		$("#tit3").animate({
			'opacity': "0"
		});
		$("#tit4").animate({
			'opacity': "1"
		});
		$("#tit5").animate({
			'opacity': "0"
		});
	});
	
	$("#t5").click(function(e){
		e.preventDefault()
		$("#p1").animate({
			'opacity': "0"
		});
		$("#p2").animate({
			'opacity': "0"
		});
		$("#p3").animate({
			'opacity': "0"
		});
		$("#p4").animate({
			'opacity': "0"
		});
		$("#p5").animate({
			'opacity': "1"
		});
		
		$("#tit1").animate({
			'opacity': "0"
		});
		$("#tit2").animate({
			'opacity': "0"
		});
		$("#tit3").animate({
			'opacity': "0"
		});
		$("#tit4").animate({
			'opacity': "0"
		});
		$("#tit5").animate({
			'opacity': "1"
		});
	});
	
	function getUrlVars() {
		var vars = {};
		var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
			vars[key] = value;
		});
		return vars;
	}
}) 