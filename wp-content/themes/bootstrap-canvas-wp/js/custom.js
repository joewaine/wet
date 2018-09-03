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

function mobileCalc(){
  if ($(window).width() > 860) {
    if($('#primary-menu').css('display') == 'none'){
        $('#primary-menu').css('display', 'block');
    }
    if($('body').hasClass('mobile')){
        $('body').removeClass('mobile');
    }
  } else {
    if(!$('body').hasClass('mobile')){
        $('body').addClass('mobile');
    } else {

    }
  }
}

$(document).ready(function () {
    mobileCalc();
    $('body.mobile .main-navigation .menu-item-has-children > a').on('click touch', function(event){
        event.preventDefault();
        if($(this).siblings('.sub-menu').css('display') == 'block'){
            $(this).siblings('.sub-menu').css('display', 'none');
        } else if($(this).siblings('.sub-menu').css('display') == 'none') {
            $(this).siblings('.sub-menu').css('display', 'block');
        }  
    });
});


$(window).resize(function() {
    mobileCalc();
});





