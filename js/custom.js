(function($){
    $(document).ready(function(){
        const hamburger = $('.hamburger img');
        const nav = $('#main-navigation');

        console.log(hamburger);

        hamburger.click(function(){
             nav.slideToggle();
        });
    });
    

}(jQuery));