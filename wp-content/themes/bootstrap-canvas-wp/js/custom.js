function toggleResponsive() {
    var x = document.getElementById("primary-menu");
    var menu = $('#primary-menu');
    if (x.className === "nav-menu") {
        x.className += " responsive";
    } else {
        x.className = "nav-menu";
    }
    menu.slideToggle( "fast", function() {
		// Done!
	});
}

// (function ($) {
//   $(document).ready(function () {
//   	$('.menu-toggle').on('click touch', function(){
// 		$('.nav-menu').slideToggle( "fast", function() {
// 			toggleResponsive();
// 		});
//   	});
//   });
// }) (jQuery);