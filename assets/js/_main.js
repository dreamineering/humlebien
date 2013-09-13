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


// function LightenDarkenColor(col, amt) {

//   var usePound = false;

//   if (col[0] == "#") {
//       col = col.slice(1);
//       usePound = true;
//   }

//   var num = parseInt(col,16);

//   var r = (num >> 16) + amt;

//   if (r > 255) r = 255;
//   else if  (r < 0) r = 0;

//   var b = ((num >> 8) & 0x00FF) + amt;

//   if (b > 255) b = 255;
//   else if  (b < 0) b = 0;

//   var g = (num & 0x0000FF) + amt;

//   if (g > 255) g = 255;
//   else if (g < 0) g = 0;

//   return (usePound ? "#" : "") + (g | (b << 8) | (r << 16)).toString(16);

// }
