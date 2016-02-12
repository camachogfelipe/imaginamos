<?php include './cms/core/mapping/include.mapping.php';?>
<?php 
    $id = $_GET['id'];
    pintar_video_detalle($id)
?>

		

		<script>
		(function(){
			$('.rightContet .volverBtn').on('click', function(e){
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