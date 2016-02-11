$(document).ready(function(){
    $(function() {
        $('#scroll1').jScrollPane();
    });
    $(function() {
        $('#scroll2').jScrollPane();
    });
    $(function() {
        $('#scroll3').jScrollPane();
    });
    $(function() {
        $('#scroll4').jScrollPane();
    });
    $(function() {
        $('#scroll9').jScrollPane();
    });
    $(function() {
        $('#scroll5').jScrollPane();
    });
    $(".miembros-pop").colorbox({
        iframe:true, 
        innerWidth:"1050", 
        innerHeight:"600"
    });
  
    var estado2 = 0;
  
  
    $(".t6").addClass("active").show();
   
    $(".instrumento2").click(function(){
        $(function() {
            $('#scroll5').jScrollPane();
        });
    })
    $("#contenu3").scrollbar(428);
    $(".t8").click(function()
    {
        $(function() {
            $('#scroll1').jScrollPane();
        });
        $(function() {
            $('#scroll2').jScrollPane();
        });
				
        var numThumbs = $(".sel-inst-cont div.instrumento2").size();
        var thumbsWidth = $(".sel-inst-cont div.instrumento2").width();
        var marg_tot = numThumbs * 10;
			
        var widthBox = thumbsWidth * numThumbs + marg_tot;
        $(".sel-inst-cont").width(widthBox);
        $(function() {
            $('#scroll4').jScrollPane();
        });
        $(".filtros-inst-cont").css({
            "height" : '0'
				
        });
		
			
    });
		
	
    $(".banda-nom").click(function()
    {
           
        if (estado2 == 0){
            $("#contenu5").scrollbar4(186);
            $("#contenu6").scrollbar5(330);
            $(".musicos3").scrollbar7(120);
            estado2 = 1;
        }
		
			
    });
    $(".editar").click(function()
    {
           
        if (estado2 == 0){
            $("#contenu5").scrollbar4(186);
            $("#contenu6").scrollbar5(330);
            $(".musicos3").scrollbar7(120);
            var numThumbs = $(".sel-inst-cont div.instrumento2").size();
            var thumbsWidth = $(".sel-inst-cont div.instrumento2").width();
            var marg_tot = numThumbs * 10;
			
            var widthBox = thumbsWidth * numThumbs + marg_tot;
            $(".sel-inst-cont").width(widthBox);
            $(function() {
                $('#scroll3').jScrollPane();
            });
            $(function() {
                $('#scroll9').jScrollPane();
            });
            $(".filtros-inst-cont").css({
                "height" : '0'
				
            });
            estado2 = 1;
        }
		
			
    });
    $(".comboBox1").msDropDown().data("dd");
		
    var estado_m=0;
    var estado_m2=0;
    $(".elegir-m").colorbox({
        iframe:true, 
        innerWidth:"1050", 
        innerHeight:"300"
    });
    $(".invitar-m").colorbox({
        iframe:true, 
        innerWidth:"500", 
        innerHeight:"300"
    });
    $(".agregar-m").colorbox({
        iframe:true, 
        innerWidth:"500", 
        innerHeight:"300"
    });
    $("#buscar-m").click( function(){
        if(estado_m == 0){
            $(".band-desp").css({
                'display' : "block"
					
					
            });
            estado_m=1;
        }else{
            $(".band-desp").css({
                'display' : "none"
					
            });
            estado_m=0;
        }
			
			
			
    });
	
	
	
	
    $(".sel-inst-cont .instrumento2").click(function()
    {
        $(".filtros-inst-cont").css({
            "height" : '100%'
				
        });
           
    });
		
    $(".sel-inst-cont .instrumento2").hover(
        function(){
            $(".b_cerrar", this).css({
                "display" : 'block'
				
            });
        },
        function(){
            $(".b_cerrar", this).css({
                "display" : 'none'
				
            });
        }
        );
		
                
                
    
    $(function(){
        $('.fancybox-modal').fancybox();
    });

   
});