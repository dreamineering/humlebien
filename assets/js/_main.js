// Modified http://paulirish.com/2009/markup-based-unobtrusive-comprehensive-dom-ready-execution/
// Only fires on body class (working off strictly WordPress body_class)

(function($) {
  // Within this function, $ will always refer to jQuery  

  var ExampleSite = {
    // All pages
    common: {
      init: function() {
        // JS here
         console.log("hi from common");
      },
      finalize: function() { }
    },
    // Home page
    home: {
      init: function() {
        // JS here
        console.log("hi from home");
      }
    },
    // About page
    about: {
      init: function() {
        // JS here
        console.log("hi from about");
      }
    }
  };

  var UTIL = {
    fire: function(func, funcname, args) {
      var namespace = ExampleSite;
      funcname = (funcname === undefined) ? 'init' : funcname;
      if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {

      UTIL.fire('common');

      $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
        UTIL.fire(classnm);
      });

      UTIL.fire('common', 'finalize');
    }
  };

  $(document).ready(UTIL.loadEvents);

})(jQuery);
