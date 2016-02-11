$(document).ready(function() {
	
	
	


		    
	
	$(function()
{
	$('.scroll-pane').jScrollPane(
		{
			verticalDragMinHeight: 46,
			verticalDragMaxHeight: 46,
			horizontalDragMinWidth: 20,
			horizontalDragMaxWidth: 20
		}
	);
});

$(function()
{
	$('.scroll-pane-2').jScrollPane(
		{
			verticalDragMinHeight: 46,
			verticalDragMaxHeight: 46,
			horizontalDragMinWidth: 20,
			horizontalDragMaxWidth: 20
		}
	);
});

	
	
	$("#topnav li").hover(function(){
  $(this).animate({top:'-3px' }, 250);
  }, function () {
  $(this).animate({top:'0px'}, 250); });
		
  $(".m1").hover(function(){
  $(this).animate({top:'-10px' }, 250);
  }, function () {
  $(this).animate({top:'0px'}, 250); });
		
  $(".m2").hover(function(){
  $(this).animate({top:'10px' }, 250);
  }, function () {
  $(this).animate({top:'0px'}, 250); });	
  
  $(".m3").hover(function(){
  $(this).animate({top:'-10px' }, 250);
  }, function () {
  $(this).animate({top:'0px'}, 250); });	
  
  $(".m4").hover(function(){
  $(this).animate({top:'-10px' }, 250);
  }, function () {
  $(this).animate({top:'0px'}, 250); });
  
   $(".m5").hover(function(){
  $(this).animate({top:'20px' }, 250);
  }, function () {
  $(this).animate({top:'0px'}, 250); });	
  
  $(".m6").hover(function(){
  $(this).animate({top:'-10px' }, 250);
  }, function () {
  $(this).animate({top:'0px'}, 250); });
  
  	
  
  		$(function() {

			var $tabs = $('#tabs').tabs();
	
			$(".ui-tabs-panel").each(function(i){
	
			  var totalSize = $(".ui-tabs-panel").size() - 1;
	
			  if (i != totalSize) {
			      next = i + 2;
		   		  $(this).append("<a href='#' class='next-tab mover' rel='" + next + "'></a>");
			  }
	  
			  if (i != 0) {
			      prev = i;
		   		  $(this).append("<a href='#' class='prev-tab mover' rel='" + prev + "'></a>");
			  }
   		
			});
	
			$('.next-tab, .prev-tab').click(function() { 
		           $tabs.tabs('select', $(this).attr("rel"));
		           return false;
		       });
       

		});
		
$('#seb').validationEngine();
		
		
});


			