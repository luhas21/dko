(function($, window) {
	$(function() {

		// Menu Opener

		var $body = $(document.body);

		$("#menu-opener").click(function() {
			$body.toggleClass('menu-opened');
		});

		// Text Toggle

		$('.list-item.toggle .category-image a').click(function (e) {
			e.preventDefault();
			$(this).parents('.list-item.toggle').toggleClass('opened');
		});

	});
})(jQuery, window);
