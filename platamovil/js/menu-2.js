


   
$(document).ready(function(){
	

	$("#open").click(
		
			function(){
				$(".acceso-nav").stop(true);
				$(".acceso-nav").animate({
				'margin-left': "121"				
				
				
				})
				
			}
		);	
		
	$("#close").click(
		
			
			function(){
				$(".acceso-nav").stop(true);
				$(".acceso-nav").animate({
				'margin-left': "0"
				
				
				
				})
				
			}
		);	
		
		$("#toggle a").click(function () {
		$("#toggle a").toggle();
	});	
		
	
});