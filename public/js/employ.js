$(document).on('click', '#modal-close-btn', function(){
	$('#uploadCV').modal('hide');
})
$(document).on('change', '.custom-input-file input[type="file"]', function(e){
	$('.file-upload-label').text(e.target.files[0].name);
})
