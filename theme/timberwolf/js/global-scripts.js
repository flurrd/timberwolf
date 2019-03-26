/* import './customizer.js' */
import './skip-link-focus-fix.js'


jQuery(document).ready(function($) {

    var bodyEl = document.body;

    
    $(".hamburger").click(function()
    {
        $(this).toggleClass("hamburger--is-active");
        $(document.body).toggleClass("mobile-menu-open");
    });    
    
    $(".push-menu-tint").click(function()
    {
        $(".hamburger").toggleClass("hamburger--is-active");
        $(document.body).toggleClass("mobile-menu-open");
    });    
    
    
});
    
    