$('.checkbox').change(function(){
	$('.hide').slideToggle();
	$('.show').slideToggle();
});

$('#title').on("keyup", function(){
	var title = $('#title').val();
	title = "/" + title.replace(/ /g, "-");
	$('#generated').val(title.toLowerCase());
});

function nothing () {
	alert("This button does nothing, but it's kinda fun to push :)");
}