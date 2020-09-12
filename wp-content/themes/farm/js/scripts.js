$( document ).ready(function() {
	$(".top_nav li a,.m_cls_first a").click(function() {
		id=$(this).attr("href")
		$('html, body').animate({
			scrollTop: $(id).offset().top
		}, 2000);
	});
	
	$('#nav-icon').click(function(){
		$(this).toggleClass('open');
		$('.top_nav').slideToggle();
	});
	
	
  wow = new WOW(
    {
      boxClass:     'wow',      // default
      animateClass: 'animated', // default
      offset:       0,          // default
      mobile:       true,       // default
      live:         true        // default
    }
  )
  wow.init();

	
	
});