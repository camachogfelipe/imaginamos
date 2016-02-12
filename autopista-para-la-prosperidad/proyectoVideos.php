<?php include './cms/core/mapping/include.mapping.php';?>
<div class="scrollable">


		

		<?php pintar_videos(); ?>


</div>

		<script>
		(function(){
			$('.rightContet .verBtn').on('click', function(e){
				e.preventDefault();
				var theURL = 'error';
				if($(this).attr('href') != '#'){
					theURL = $(this).attr('href');
				}
				$.ajax({
					url: theURL,
					type: 'POST',
					success: function(data, textStatus, xhr) {
						$('.rightContet').empty();
						$('.rightContet').append(data);
					},
					error: function(xhr, textStatus, errorThrown) {
						$('.rightContet').empty();
						$('.rightContet').append('Oops. No hemos encontrado esta pagina!');
					}
				});
			})
		})();
		</script>

