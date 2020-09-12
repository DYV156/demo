jQuery(function() {
  
  // contact form animations
  jQuery('.contact').click(function() {
	jQuery(this).parents('.job_listing').find('.contactForm').fadeToggle();
	jQuery('body').addClass('overlay'); 
  })
  jQuery(document).mouseup(function (e) {
    var container = jQuery(".contactForm");

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        container.fadeOut();
		jQuery('body').removeClass('overlay'); 
    }
  });
  
});