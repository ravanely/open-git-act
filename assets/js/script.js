$(document).ready(function(){

	var img = $('#img');
	width = img.width();
	height = img.height();
	console.log('Width : '+width+' heigh : '+height);

	$('#modif').on('click', function(){
		$(img).width(300).height(200);
	});
});


