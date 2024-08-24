(function ($) {
	"use strict";

  if ( $('.theme-browser').length ) {
    var theme = 'cvio';
    var changelog = 'https://bslthemes.com/product/cvio-cv-resume-wordpress-theme/#item-description__changelog';

    $(window).on('load', function(){
      for ( var i = 250; i<=2500; i += 250 ) {
        setTimeout(function(){
          if ( location.href.indexOf(theme) != -1 ) {
            if ( $('.open-plugin-details-modal').hasClass('thickbox') ) {
              $('.open-plugin-details-modal').attr('href', changelog).attr('target', '_blank').removeClass('thickbox');
            }
          }
        }, i );
      }
    });
    $(document).on('click', '.theme[data-slug="'+theme+'"]', function() {
      if ( location.href.indexOf(theme) != -1 ) {
        for ( var i = 250; i<=2500; i += 250 ){
          setTimeout(function(){
            if ( $('.open-plugin-details-modal').hasClass('thickbox') ) {
              $('.open-plugin-details-modal').attr('href', changelog).attr('target', '_blank').removeClass('thickbox');
            }
          }, i );
        }
      }
    });
  }

})(jQuery);
