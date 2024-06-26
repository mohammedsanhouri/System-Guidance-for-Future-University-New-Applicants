(function($) {

	var	$window = $(window),
		$header = $('#header'),
		$body = $('body');

	// Play initial animations on page load.
		$window.on('load', function() {
			window.setTimeout(function() {
				$body.removeClass('is-preload');
			}, 100);
		});
		breakpoints({
			xlarge:   [ '1281px',  '1680px' ],
			large:    [ '981px',   '1280px' ],
			medium:   [ '737px',   '980px'  ],
			small:    [ '481px',   '736px'  ],
			xsmall:   [ null,      '480px'  ]
		});
		$('.scrolly').scrolly({
			speed: 2000
		});

	// Dropdowns.
		$('#nav > ul').dropotron({
			alignment: 'right',
			hideDelay: 350
		});
	// Scrolly.
	if (browser.name == 'ie'
	||	browser.mobile) {

		$.fn._parallax = function() {

			return $(this);

		};

	}
	else {

		$.fn._parallax = function() {

			$(this).each(function() {

				var $this = $(this),
					on, off;

				on = function() {

					$this
						.css('background-position', 'center 0px');

					$window
						.on('scroll._parallax', function() {

							var pos = parseInt($window.scrollTop()) - parseInt($this.position().top);

							$this.css('background-position', 'center ' + (pos * -0.15) + 'px');

						});

				};

				off = function() {

					$this
						.css('background-position', '');

					$window
						.off('scroll._parallax');

				};

				breakpoints.on('<=medium', off);
				breakpoints.on('>medium', on);

			});

			return $(this);

		};

		$window
			.on('load resize', function() {
				$window.trigger('scroll');
			});

	}

// Spotlights.
	var $spotlights = $('.spotlight');

	$spotlights
		._parallax()
		.each(function() {

			var $this = $(this),
				on, off;

			on = function() {

				var top, bottom, mode;

				// Use main <img>'s src as this spotlight's background.
					$this.css('background-image', 'url("' + $this.find('.image.main > img').attr('src') + '")');

				// Side-specific scrollex tweaks.
					if ($this.hasClass('top')) {

						mode = 'top';
						top = '-20%';
						bottom = 0;

					}
					else if ($this.hasClass('bottom')) {

						mode = 'bottom-only';
						top = 0;
						bottom = '20%';

					}
					else {

						mode = 'middle';
						top = 0;
						bottom = 0;

					}

				// Add scrollex.
					$this.scrollex({
						mode:		mode,
						top:		top,
						bottom:		bottom,
						initialize:	function(t) { $this.addClass('inactive'); },
						terminate:	function(t) { $this.removeClass('inactive'); },
						enter:		function(t) { $this.removeClass('inactive'); },

						// Uncomment the line below to "rewind" when this spotlight scrolls out of view.

						//leave:	function(t) { $this.addClass('inactive'); },

					});

			};

			off = function() {

				// Clear spotlight's background.
					$this.css('background-image', '');

				// Remove scrollex.
					$this.unscrollex();

			};

			breakpoints.on('<=medium', off);
			breakpoints.on('>medium', on);

		});

// Wrappers.
	var $wrappers = $('.wrapper');

	$wrappers
		.each(function() {

			var $this = $(this),
				on, off;

			on = function() {

				$this.scrollex({
					top:		250,
					bottom:		0,
					initialize:	function(t) { $this.addClass('inactive'); },
					terminate:	function(t) { $this.removeClass('inactive'); },
					enter:		function(t) { $this.removeClass('inactive'); },

					// Uncomment the line below to "rewind" when this wrapper scrolls out of view.

					//leave:	function(t) { $this.addClass('inactive'); },

				});

			};

			off = function() {
				$this.unscrollex();
			};

			breakpoints.on('<=medium', off);
			breakpoints.on('>medium', on);

		});

// Banner.
	var $banner = $('#banner');

	$banner
		._parallax();

	// Forms.
		var $form = $('form');

		// Auto-resizing textareas.
			$form.find('textarea').each(function() {

				var $this = $(this),
					$wrapper = $('<div class="textarea-wrapper"></div>'),
					$submits = $this.find('input[type="submit"]');

				$this
					.wrap($wrapper)
					.attr('rows', 1)
					.css('overflow', 'hidden')
					.css('resize', 'none')
					.on('keydown', function(event) {

						if (event.keyCode == 13
						&&	event.ctrlKey) {

							event.preventDefault();
							event.stopPropagation();

							$(this).blur();

						}

					})
					.on('blur focus', function() {
						$this.val($.trim($this.val()));
					})
					.on('input blur focus --init', function() {

						$wrapper
							.css('height', $this.height());

						$this
							.css('height', 'auto')
							.css('height', $this.prop('scrollHeight') + 'px');

					})
					.on('keyup', function(event) {

						if (event.keyCode == 9)
							$this
								.select();

					})
					.triggerHandler('--init');

			});

	// Menu.
		var $menu = $('#menu');

		$menu.wrapInner('<div class="inner"></div>');

		$menu._locked = false;

		$menu._lock = function() {

			if ($menu._locked)
				return false;

			$menu._locked = true;

			window.setTimeout(function() {
				$menu._locked = false;
			}, 350);

			return true;

		};

		$menu._show = function() {

			if ($menu._lock())
				$body.addClass('is-menu-visible');

		};

		$menu._hide = function() {

			if ($menu._lock())
				$body.removeClass('is-menu-visible');

		};

		$menu._toggle = function() {

			if ($menu._lock())
				$body.toggleClass('is-menu-visible');

		};

		$menu
			.appendTo($body)
			.on('click', function(event) {
				event.stopPropagation();
			})
			.on('click', 'a', function(event) {

				var href = $(this).attr('href');

				event.preventDefault();
				event.stopPropagation();

				// Hide.
					$menu._hide();

				// Redirect.
					if (href == '#menu')
						return;

					window.setTimeout(function() {
						window.location.href = href;
					}, 350);

			})
			.append('<a class="close" href="#menu">Close</a>');

		$body
			.on('click', 'a[href="#menu"]', function(event) {

				event.stopPropagation();
				event.preventDefault();

				// Toggle.
					$menu._toggle();

			})
			.on('click', function(event) {

				// Hide.
					$menu._hide();

			})
			.on('keydown', function(event) {

				// Hide on escape.
					if (event.keyCode == 27)
						$menu._hide();

			});

})(jQuery);