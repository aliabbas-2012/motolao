jQuery(document).ready(function($){
	
	/* ------------------- Client Carousel --------------------- */

	$('.clients-carousel').flexslider({
	    animation: "slide",
		easing: "swing",
	    animationLoop: true,
	    itemWidth: 900,
	    itemMargin: 0,
	    minItems: 1,
	    maxItems: 1,
		controlNav: false,
		directionNav: false,
		move: 1
      });


	/* ------------------ Back To Top ------------------- */

	jQuery('#footer-menu-back-to-top a').click(function(){
		jQuery('html, body').animate({scrollTop:0}, 300); 
		return false; 
	});
	
	/* ------------------ Progress Bar ------------------- */	
	$(function() {
		$(".meter > span").each(function() {
			$(this)
			.data("origWidth", $(this).width())
			.width(0)
			.animate({
				width: $(this).data("origWidth")
			}, 1200);
		});
	});

	/* --------------------- Tabs ------------------------ */	

		(function() {

			var $tabsNav    = $('.tabs-nav'),
				$tabsNavLis = $tabsNav.children('li'),
				$tabContent = $('.tab-content');

			$tabsNav.each(function() {
				var $this = $(this);

				$this.next().children('.tab-content').stop(true,true).hide()
													 .first().show();

				$this.children('li').first().addClass('active').stop(true,true).show();
			});

			$tabsNavLis.on('click', function(e) {
				var $this = $(this);

				$this.siblings().removeClass('active').end()
					 .addClass('active');

				$this.parent().next().children('.tab-content').stop(true,true).hide()
															  .siblings( $this.find('a').attr('href') ).fadeIn();

				e.preventDefault();
			});

		})();
		
			
});


/* ------------------- Parallax --------------------- */

jQuery(document).ready(function($){
	
    $('#da-slider').cslider({
            autoplay	: true,
            bgincrement	: 500

    });

});

function showDiaryTarget(obj){
    elem_id = $(obj).attr("data-id-target");
    $(".sub-part").hide();
    $("#"+elem_id).show("slow");
    return false;
}