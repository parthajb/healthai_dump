/**
* Plugin main Frontend JavaScript file
*/
(function($){
$(document).ready(function() {

  'use strict';


  /**
  * Social share for products
  */

  function cryptibit_socialshare(type, post_url, post_title, post_image) {

    switch (type) {
      case 'facebook':
        window.open( 'https://www.facebook.com/sharer/sharer.php?u='+post_url, "facebookWindow", "height=380,width=660,resizable=0,toolbar=0,menubar=0,status=0,location=0,scrollbars=0" );
        break;
      case 'twitter':
        window.open( 'http://twitter.com/intent/tweet?text='+post_title + ' ' + post_url, "twitterWindow", "height=370,width=600,resizable=0,toolbar=0,menubar=0,status=0,location=0,scrollbars=0" );
        break;
      case 'pinterest':
        window.open( 'http://pinterest.com/pin/create/button/?url='+post_url+'&media='+post_image+'&description='+post_title, "pinterestWindow", "height=620,width=600,resizable=0,toolbar=0,menubar=0,status=0,location=0,scrollbars=0" );
        break;
      case 'whatsapp':
        window.open( 'https://api.whatsapp.com/send?text='+post_title+' '+post_url, "whatsupWindow", "height=620,width=600,resizable=0,toolbar=0,menubar=0,status=0,location=0,scrollbars=0" );
      break;
      case 'stumbleupon':
        window.open( 'https://www.stumbleupon.com/badge?url='+post_url+'&title='+post_title, "stumbleuponWindow", "height=620,width=600,resizable=0,toolbar=0,menubar=0,status=0,location=0,scrollbars=0" );
      break;
      case 'vk':
        window.open( 'https://vk.com/share.php?url='+post_url+'&title='+post_title+'&description=&image='+post_image, "vkWindow", "height=620,width=600,resizable=0,toolbar=0,menubar=0,status=0,location=0,scrollbars=0" );
      break;
      case 'linkedin':
        window.open( 'https://www.linkedin.com/shareArticle?url='+post_url+'&title='+post_title, "linkedinWindow", "height=620,width=600,resizable=0,toolbar=0,menubar=0,status=0,location=0,scrollbars=0" );
      break;
      default:

    }

    return false;
  }

  $('.post-social a').on('click', function(e){

    e.preventDefault();
    e.stopPropagation();

    var share_type = $(this).data('type');
    var post_image = $(this).data('image');
    var post_title = encodeURIComponent($(this).data('title'));
    var post_url = $(this).attr('href');

    cryptibit_socialshare(share_type, post_url, post_title, post_image);

  });

});
})(jQuery);
