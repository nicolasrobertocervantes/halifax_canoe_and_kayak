(function($){
    $(document).ready(function(){
        const hamburger = $('.hamburger img');
        const nav = $('#main-navigation');

        hamburger.click(function(){
             nav.slideToggle();
        });
    });
}(jQuery));