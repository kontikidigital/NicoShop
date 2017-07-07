jQuery(document).ready(function($) {
 
	$(window).load(function() {
		if (window.innerWidth > 1024) {
			$('.woocommerce ul.products li.product h3, span.price').equalHeights();
		}
	});
 
	$(window).resize(function(){
		if (window.innerWidth > 1024) {
			$('.woocommerce ul.products li.product h3, span.price').height('auto');
			$('.woocommerce ul.products li.product h3, span.price').equalHeights();
		}
	});
 
});