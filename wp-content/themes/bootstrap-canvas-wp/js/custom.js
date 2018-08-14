function toggleResponsive() {
    var x = document.getElementById("primary-menu");
    var menu = $('#primary-menu');
    if (x.className === "nav-menu") {
        x.className += " responsive";
    } else {
        x.className = "nav-menu";
    }
    if(menu.hasClass('responsive')){
        menu.slideDown('fast');
    } else {
        menu.slideUp();
    }
}

$( window ).resize(function() {
  if ($(window).width() > 860) {
    if($('#primary-menu').css('display') == 'none'){
        $('#primary-menu').css('display', 'block');
    }
  }
});
