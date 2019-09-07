import 'jquery';
import './css/main.scss';
import './img/image.png';
import '../js/global-scripts.js'
import '../js/skrollr.min.js'


$(function () 
{
    // Init function
    function skrollrInit() 
    {
      skrollr.init(yourOptions);
    }
  
    // If window width is large enough, initialize skrollr
    if ($(window).width() > 767) 
    {
      skrollrInit();
      forceHeight: false
    }
  
    // On resize, check window width, if too small
    // and skrollr instance exists, destroy;
    // Otherwise, if window is large enough
    // and skrollr instance does not exist, initialize skrollr.
    $(window).on('resize', function () 
    {
      var _skrollr = skrollr.get(); // get() returns the skrollr instance or undefined
      var windowWidth = $(window).width();
  
      if ( windowWidth <= 767 && _skrollr !== undefined ) 
      {
        _skrollr.destroy();
      } 
      else if ( windowWidth > 767 && _skrollr === undefined ) 
      {
        skrollrInit();
      }
    });
});
