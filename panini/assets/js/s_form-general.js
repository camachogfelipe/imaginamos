// JavaScript Document


$(window).resize(function(){
	var win_width = document.documentElement.offsetWidth;
	//console.log (win_width);
})

$(document).ready(function () {
	
	$(function() {
	 $('input, textarea').placeholder();
	});
		
		
	if($('.s_form select').length) {
		$(".s_form select").select2({
			placeholder: "Seleccione una opción",
			allowClear: true
		});
	}
	if($('.multi_upload').length) {
		$(".multi_upload").pluploadQueue({
			// General settings
			runtimes : 'html5,flash,silverlight',
			url : 'assets/js/lib/plupload/examples/dump.php',
			max_file_size : '10mb',
			chunk_size : '1mb',
			unique_names : true,
			browse_button : 'pickfiles',
	
			// Specify what files to browse for
			filters : [
				{title : "Image files", extensions : "jpg,gif,png"},
				{title : "Zip files", extensions : "zip"}
			],
	
			// Flash settings
			flash_swf_url : 'assets/js/lib/plupload/js/plupload.flash.swf',
	
			// Silverlight settings
			silverlight_xap_url : 'assets/js/lib/plupload/js/plupload.silverlight.xap'
		});
		$('.plupload_header').remove();
	}
	if($('.datepicker').length) {
		$('.datepicker').datepicker()
	}
	if( ($('.dpStart').length) && ($('.dpEnd').length) ) {
		$('.dpStart').datepicker().on('changeDate', function(ev){
			var dateText = $(this).data('date'),
				endDateTextBox = $('.dpEnd input');
			if (endDateTextBox.val() != '') {
				var testStartDate = new Date(dateText),
					testEndDate = new Date(endDateTextBox.val());
				if (testStartDate > testEndDate) {
					endDateTextBox.val(dateText);
				}
			} else {
				endDateTextBox.text(dateText);
			};
			$('.dpEnd').datepicker('setStartDate', dateText);
			$('.dpStart').datepicker('hide');
		});
		$('.dpEnd').datepicker().on('changeDate', function(ev){
			var dateText = $(this).data('date'),
				startDateTextBox = $('.dpStart input');
			if (startDateTextBox.val() != '') {
				var testStartDate = new Date(startDateTextBox.val()),
					testEndDate = new Date(dateText);
				if (testStartDate > testEndDate) {
					startDateTextBox.text(dateText);
				}
			} else {
				startDateTextBox.val(dateText);
			};
			$('.dpStart').datepicker('setEndDate', dateText)
			$('.dpEnd').datepicker('hide')
		});
	}
	if($('input[type="radio"]').length) {
		$('input').ezMark();
	}



	$.validator.addClassRules( "s2-required", {
		   required : true
	   });
	

	if($('.s_form').length) {
		
		$('.s_form').validate({
			onkeyup: false,
			errorClass: 'error',
			validClass: 'valid',
			highlight: function(element) {
				$(element).closest('fieldset').addClass("f-error");
			},
			unhighlight: function(element) {
				$(element).closest('fieldset').removeClass("f-error");
			},
			errorPlacement: function(error, element) {
				$(element).closest('fieldset').append(error);
			},
			
			invalidHandler: function(form, validator) {
				// callback
			}
		})
		
		var settings = $.data($('.s_form')[0], 'validator').settings;
		// select2
		settings.ignore += ':not(.s2-required)';
	}
			
	
	
			
	
	
	
	
})

