$(document).ready(function(){
    var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
        $(window).scroll(function () {
            var height = $(window).scrollTop();
            if (height > 20) {
                $("#nav-menu").addClass('nav-color');
            }
            else {
                $("#nav-menu").removeClass('nav-color');
            }
        });
});
// AOS.init();