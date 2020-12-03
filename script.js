// Everything is loaded including images.
$(window).on("load", function(){

    // Render the page on modern browser only.
    if(renderPage) {
      // Remove loader
        $('body').addClass('loaded');}})