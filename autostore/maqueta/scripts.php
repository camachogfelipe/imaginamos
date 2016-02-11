 <!-- Scripts -->
 <script src="assets/js/lib/jquery-1.8.3.min.js"></script>

 <!-- Estilizar
================================================== -->
  <!--script type="text/javascript" src="assets/js/lib/dd/jquery.dd.js"></script-->
 
  <!-- Easing -->
  <!--script src="assets/js/lib/parallax/jquery.easing.1.3.js"></script>
  <script src="assets/js/lib/parallax/jquery.mousewheel.js"></script-->

  <!-- Bootstrap
  ================================================== -->
  <script src="assets/js/lib/bootstrap/js/bootstrap-transition.js"></script>
  <script src="assets/js/lib/bootstrap/js/bootstrap-alert.js"></script>
  <script src="assets/js/lib/bootstrap/js/bootstrap-modal.js"></script>
  <script src="assets/js/lib/bootstrap/js/bootstrap-dropdown.js"></script>
  <script src="assets/js/lib/bootstrap/js/bootstrap-scrollspy.js"></script>
  <script src="assets/js/lib/bootstrap/js/bootstrap-tab.js"></script>
  <script src="assets/js/lib/bootstrap/js/bootstrap-tooltip.js"></script>
  <script src="assets/js/lib/bootstrap/js/bootstrap-popover.js"></script>
  <script src="assets/js/lib/bootstrap/js/bootstrap-button.js"></script>
  <script src="assets/js/lib/bootstrap/js/bootstrap-collapse.js"></script>
  <script src="assets/js/lib/bootstrap/js/bootstrap-carousel.js"></script>
  <script src="assets/js/lib/bootstrap/js/bootstrap-typeahead.js"></script> 
  <script src="assets/js/lib/bootstrap/js/bootstrap-fileupload.js"></script> 


       <!-- Isotopo
  ================================================== -->
  <!--script src="assets/js/lib/isotope/jquery.isotope.js"></script-->


  <!-- Fancybox
================================================== -->

  <script type="text/javascript" src="assets/js/lib/source/jquery.fancybox.js"></script>

  <!-- Add Button helper (this is optional) -->
  <script type="text/javascript" src="assets/js/lib/source/helpers/jquery.fancybox-buttons.js"></script>

  <!-- Add Thumbnail helper (this is optional) -->
  <script type="text/javascript" src="assets/js/lib/source/helpers/jquery.fancybox-thumbs.js"></script>

  <!-- Media (this is optional) -->
  <script type="text/javascript" src="assets/js/lib/source/helpers/jquery.fancybox-media.js"></script>

  <!-- Acciones
================================================== -->

<!-- Slider
================================================== -->
  <script type="text/javascript" src="assets/js/lib/bxslider/js/jquery.bxslider.js"></script>

<!-- UI
================================================== -->
	<!--script src="assets/js/lib/ui/js/jquery-ui.js"></script-->
  <script src="assets/js/lib/ui/js/jquery.ui.position.js"></script>
	<script src="assets/js/lib/ui/js/jquery.ui.core.js"></script>
	<script src="assets/js/lib/ui/js/jquery.ui.widget.js"></script>
	<script src="assets/js/lib/ui/js/jquery.ui.mouse.js"></script>
	<script src="assets/js/lib/ui/js/jquery.ui.draggable.js"></script>
	<script src="assets/js/lib/ui/js/jquery.ui.droppable.js"></script>
	<script src="assets/js/lib/ui/js/jquery.ui.resizable.js"></script>
	<script src="assets/js/lib/ui/js/jquery.ui.dialog.js"></script>
  

<!-- Validate
================================================== -->
<script src="assets/js/lib/validate.js"></script>


<!-- Acciones
================================================== -->
<script src="assets/js/actions.js"></script>

<script type="text/javascript">
   
 
    $(function(){
        $('#footerForm').validate({
            rules :{
                mi_email : {
                    required : true, //para validar campo vacio
                    email    : true  //para validar formato email
                }

            }
        });    
    });

    $(function(){
        $('#contactoForm').validate({
            rules :{
                mi_email : {
                    required : true, //para validar campo vacio
                    email    : true  //para validar formato email
                },
                telefono : {
                    required : true,
                    number : true   //para validar campo solo numeros
                }

            }
        });    
    });
  
  $('.slider_home').bxSlider({
    /*slideWidth: 1400,*/
    minSlides: 1,
    maxSlides: 1,
    pager: false,
    moveSlides: 1,
    auto: true,
    autoHover: false,
		pause: 6000
  });


  $('.slider_marcas').bxSlider({
    slideWidth: 222,
		controls: false,
    minSlides: 1,
    maxSlides: 4,
    pager: false,
    slideMargin: 5,
		speed: 20000,
		ticker: true
  });
	
	$('.slider_marcas2').bxSlider({
		slideWidth: 222,
		controls: false,
    minSlides: 1,
    maxSlides: 4,
    pager: false,
    slideMargin: 5,
		speed: 20000,
		ticker: true
    /*slideWidth: 222,
    minSlides: 1,
    maxSlides: 4,
    pager: false,
    moveSlides: 1,
    auto: true,
    autoHover: false,
    slideMargin: 5*/
  });

  $('.slider_detalle').bxSlider({
    slideWidth: 460,
    minSlides: 1,
    maxSlides: 4,
    pager: false,
    moveSlides: 1,
    auto: false,
    autoHover: false,
    slideMargin: 5
  });

  $(".carga_comprar").fancybox({
    'width' : 640,
		'height': 460,
    fitToView : false,
    autoSize : false,
    'transitionIn' : 'none',
    'transitionOut' : 'none',
    'type' : 'iframe',
    'padding' : 20
  }); 
	
	
	$(function() {
		// there's the gallery and the trash
		var $gallery = $( "#ul_productosmes" ),
			$trash = $( "#bt_tiendaflotante" );
		// let the gallery items be draggable
		$( "li", $gallery ).draggable({
			cancel: "a.ui-icon", // clicking an icon won't initiate dragging
			revert: "invalid", // when not dropped, the item will revert back to its initial position
			containment: "document",
			helper: "clone",
			cursor: "move"
		});
		// let the trash be droppable, accepting the gallery items
		$trash.droppable({
			accept: "#ul_productosmes > li",
			activeClass: "ui-state-highlight",
			drop: function( event, ui ) {
				deleteImage( ui.draggable );
			}
		});
		// let the gallery be droppable as well, accepting items from the trash
		$gallery.droppable({
			accept: "#bt_tiendaflotante li",
			activeClass: "custom-state-active",
			drop: function( event, ui ) {
				recycleImage( ui.draggable );
			}
		});
		// image deletion function
		var recycle_icon = "<a href='link/to/recycle/script/when/we/have/js/off' title='Recycle this image' class='ui-icon ui-icon-refresh'>Recycle image</a>";
		function deleteImage( $item ) {
			$item.fadeOut(function(){
				var $list = $( "ul", $trash ).length ?
				$( "ul", $trash ) :
				$( "<ul class='gallery ui-helper-reset'/>" ).appendTo( $trash );
				$item.find( "a.ui-icon-trash" ).remove();
			});
		}
	});
	


/*$(function() {
  var $gallery = $( "#ul_productosmes" ),
  $trash = $( "#bt_tiendaflotante" );
  // let the gallery items be draggable
  $( "li", $gallery ).draggable({
    cancel: "a.ui-icon", // clicking an icon won't initiate dragging
    revert: "invalid", // when not dropped, the item will revert back to its initial position
    containment: "document",
    helper: "clone",
    cursor: "move"
  });

   // let the trash be droppable, accepting the gallery items
  $trash.droppable({
    accept: "#ul_productosmes > li",
    activeClass: "ui-state-highlight",
    drop: function( event, ui ) {
    deleteImage( ui.draggable );
    }
  });

   // let the gallery be droppable as well, accepting items from the trash
  $gallery.droppable({
    accept: "#ul_productosmes li",
    activeClass: "custom-state-active",
    drop: function( event, ui ) {
    recycleImage( ui.draggable );
    }
  });

   // image deletion function
  var recycle_icon = "<a href='link/to/recycle/script/when/we/have/js/off' title='Recycle this image' class='ui-icon ui-icon-refresh'>Recycle image</a>";
  function deleteImage( $item ) {
    $item.fadeOut(function() {
    var $list = $( "ul", $trash ).length ?
    $( "ul", $trash ) :
    $( "<ul class='gallery ui-helper-reset'/>" ).appendTo( $trash );
    $item.find( "a.ui-icon-trash" ).remove();
    });
  }


});*/


</script>

<script type="text/javascript">
  $(document).ready(function() {
    // Boton Flotante
    var tiendahome = $('.cont_tiendahome');
    var tiendahome_offset = tiendahome.offset();
    $(window).on('scroll', function() {
    if($(window).scrollTop() > tiendahome_offset.top) {
      tiendahome.addClass('fijo');
      } else {
      tiendahome.removeClass('fijo');
    }
    });
  });
</script>
