if (typeof jQuery != 'undefined'){
	jQuery(document).ready(function($) {
		Webcom.slideshow($);
		Webcom.analytics($);
		Webcom.handleExternalLinks($);
		Webcom.loadMoreSearchResults($);
		
		$('.select-links')
			.change(function() {
				var selected = $(this).children('option:selected');
				if(typeof selected != 'undefined') {
					var url = selected.val();
					if(url != '') {
						window.location = url;
					}
				}
			});
		$('#home-images-carousel').carousel('cycle');
		
		$('.menu li:last-child').addClass('last');
		if ($.browser.msie && $.browser.version < 9) {
			$('.menu li').append('<span class="ieseparator">•</span>');
			$('.menu li.last .ieseparator').remove();
		}
	});
}else{console.log('jQuery dependancy failed to load');}