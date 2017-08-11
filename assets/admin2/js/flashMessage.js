(function ($) {

          var defaultOptions = {
              delay: 50,
              duration: 5000
          };

          $.fn.sfFlash = function(options) {

              var settings = $.extend(defaultOptions, options);

              var flashMessage = this;

              $(document).on("DOMSubtreeModified", function() {
                  // We refresh the selector to include new elements. Unfortunately, there is no better way to do this today.
                  flashMessage = $(flashMessage.selector);
                  main();
              });

              var main = function() {
                  if (flashMessage) {
                      window.setTimeout(function(){
                          if ($( flashMessage ).hasClass( "flashMessage-danger" ) ) {
                            flashMessage.show().addClass('tada animated');  
                          }
                          if ($( flashMessage ).hasClass( "flashMessage-success" ) ) {
                            flashMessage.show().addClass('fadeInUp animated');  
                          }
                          if ($( flashMessage ).hasClass( "flashMessage-info" ) ) {
                            flashMessage.show().addClass('fadeInUp animated');  
                          }
                          if ($( flashMessage ).hasClass( "flashMessage-warning" ) ) {
                            flashMessage.show().addClass('fadeInUp animated');  
                          }
                          
                      }, settings.delay);

                      window.setTimeout(function(){
                          flashMessage.addClass('fadeOutDown animated');
                      }, settings.duration);
                  }
              }

              main();
          }
          $('.flashMessage-danger').sfFlash();
          $('.flashMessage-success').sfFlash();
          $('.flashMessage-info').sfFlash();
          $('.flashMessage-warning').sfFlash();
      } (jQuery));