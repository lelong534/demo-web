$(document).on('click', '#modal-close-btn', function(){
	$('#uploadCV').modal('hide');
})
$(document).on('change', '.custom-input-file input[type="file"]', function(e){
	if (typeof (e.target.files) != "undefined") {
		$('.file-upload-label').text(e.target.files[0].name);
	}
})
$(document).on('keypress', '.input-box input[type="text"]', function(e){
	$(this).siblings('.icon-require').hide();
})
$('.input-box input[type="text"]').blur(function()
{
	if( !$(this).val() ) {
     	$(this).siblings('.icon-require').show();
	}
});