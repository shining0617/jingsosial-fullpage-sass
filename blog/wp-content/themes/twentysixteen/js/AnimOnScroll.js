(function($) {

  /**
   * Copyright 2012, Digital Fusion
   * Licensed under the MIT license.
   * http://teamdf.com/jquery-plugins/license/
   *
   * @author Sam Sehnert
   * @desc A small plugin that checks whether elements are within
   *     the user visible viewport of a web browser.
   *     only accounts for vertical position, not horizontal.
   */

  $.fn.visible = function(partial) {
    
      var $t            = $(this),
          $w            = $(window),
          viewTop       = $w.scrollTop(),
          viewBottom    = viewTop + $w.height(),
          _top          = $t.offset().top,
          _bottom       = _top + $t.height(),
          compareTop    = partial === true ? _bottom : _top,
          compareBottom = partial === true ? _top : _bottom;
    
    return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

  };
    
})(jQuery);


jQuery(function(){
  
	var win = jQuery(window),
	  items = jQuery(".post");

	win.scroll(function(event) {
	items.each(function(i, el) {
	  var el = jQuery(el);
	  if (el.visible(true)) {
	    el.addClass("past"); 
	  } 
	});

	});
	win.load(function(event) {
	items.each(function(i, el) {
	  var el = jQuery(el);
	  if (el.visible(true)) {
	    el.addClass("past"); 
	  } 
	});
	}) 

	jQuery(".categoryOptions").find("a").each(function(){
		jQuery(this).click(function(){
			jQuery(".categoryTitle").text(jQuery(this).text());
			console.log('2');
		})
	}) 

	jQuery(".searchBtn").click(function(){
		jQuery(".searchBtnField,.search-form").addClass("active");
	})
	jQuery(".hideBtn").click(function(){
		jQuery(".searchBtnField,.search-form").removeClass("active");
	})
})
  
