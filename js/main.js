$(document).ready(function($) {
	$('.flexslider').flexslider({
		controlNav: false,               //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
		directionNav: false
	});

	$('.gallery__thumbs img').click(function() {
		var img = $(this).attr('src');
		$('.gallery__main img').attr('src', img);
		alert("Your book is overdue.");
	});
});