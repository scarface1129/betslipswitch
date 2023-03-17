"use strict";

// *** General Variables *** //
var $window = $(window),
	$document = $(document),
	$this = $(this),
	$html = $("html"),
	$body = $("body");


// *** On ready *** //
$document.on("ready", function () {
	responsiveClasses();
	fullscreenSection();
	imageBG();
	fitVideos();
	BGVideoYTPlayer();
	lightboxImage();
	lightboxGallery();
	lightboxIframe();
	bannerParallaxImageBG();
	sectionParallaxImageBG();
	scrollToAnchor();
	counterStats();
	sliderClients();
	sliderTestimonials();
});


// *** On load *** //
$window.on("load", function () {
	// parallaxStellar();
	switcherLoad();
})

	// *** On resize *** //
	.on("resize", function () {
		responsiveClasses();
		fullscreenSection();
		// parallaxStellar();
	})

	// *** On scroll *** //
	.on("scroll", function () {
		scrollTopIcon();
	});



// *** Responsive Classes *** //
function responsiveClasses() {
	var jRes = jRespond([
		{
			label: "smallest",
			enter: 0,
			exit: 479
		}, {
			label: "handheld",
			enter: 480,
			exit: 767
		}, {
			label: "tablet",
			enter: 768,
			exit: 991
		}, {
			label: "laptop",
			enter: 992,
			exit: 1199
		}, {
			label: "desktop",
			enter: 1200,
			exit: 10000
		}
	]);
	jRes.addFunc([
		{
			breakpoint: "desktop",
			enter: function () { $body.addClass("device-lg"); },
			exit: function () { $body.removeClass("device-lg"); }
		}, {
			breakpoint: "laptop",
			enter: function () { $body.addClass("device-md"); },
			exit: function () { $body.removeClass("device-md"); }
		}, {
			breakpoint: "tablet",
			enter: function () { $body.addClass("device-sm"); },
			exit: function () { $body.removeClass("device-sm"); }
		}, {
			breakpoint: "handheld",
			enter: function () { $body.addClass("device-xs"); },
			exit: function () { $body.removeClass("device-xs"); }
		}, {
			breakpoint: "smallest",
			enter: function () { $body.addClass("device-xxs"); },
			exit: function () { $body.removeClass("device-xxs"); }
		}
	]);
}


// *** Fullscreen Section *** //
function fullscreenSection() {
	$(".fullscreen").css("height", $(window).height());
}


// *** RTL Case *** //
var HTMLDir = $("html").css("direction"),
	carouselRtl,
	selectRtl,
	slickDirection;

// If page is RTL
if (HTMLDir == "rtl") {
	$("body").addClass("direction-rtl");
	
	carouselRtl = true;
	selectRtl = "rtl";
	slickDirection = true;
} else {
	carouselRtl = false;
	selectRtl = false;
	slickDirection = false;
}


// *** Image Background *** //
function imageBG() {
	$(".img-bg").each(function () {
		var $this = $(this),
			imgSrc = $this.find("img").attr("src");

		if ($this.parent(".section-image").length) {
			$this.css("background-image", "url('" + imgSrc + "')");
		} else {
			$this.prepend("<div class='bg-element'></div>");
			var bgElement = $this.find(".bg-element");
			bgElement.css("background-image", "url('" + imgSrc + "')");
		}
		$this.find("img").css({ "opacity": 0, "visibility": "hidden" });
	});
}


// *** Fit Videos *** //
function fitVideos() {
	$("#full-container").fitVids();
}


// *** Background Videos *** //
function BGVideoYTPlayer() {
	$(".video-background").each( function() {
		$( this ).YTPlayer({
			mute: false,
			autoPlay: true,
			opacity: 1,
			containment: ".video-background",
			showControls: false,
			startAt: 0,
			addRaster: true,
			showYTLogo: false,
			stopMovieOnBlur: false
		});
	});
}


// *** Stellar Parallax *** //
function parallaxStellar() {
	$(function () {
		if ($body.hasClass("device-lg") || $body.hasClass("device-md") || $body.hasClass("device-sm")) {
			$.stellar({
				horizontalScrolling: false, // don't change this option
				// verticalScrolling: false,
				verticalOffset: 0,
				responsive: true, // false
			});
		}
	});
}


// *** Lightbox Iframe *** //
function lightboxIframe() {
	$(".lightbox-iframe").magnificPopup({
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,
		fixedContentPos: false
	});
}


// *** Lightbox Image *** //
function lightboxImage() {
	$(".lightbox-img").magnificPopup({
		type: 'image',
		gallery: {
			enabled: false
		},
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,
		fixedContentPos: false
	});
}


// *** Lightbox Gallery *** //
function lightboxGallery() {
	$(".lightbox-gallery").magnificPopup({
		type: 'image',
		gallery: {
			enabled: true
		},
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,
		fixedContentPos: false
	});
}


// *** Scroll Top Icon *** //
function scrollTopIcon() {
	var windowScroll = $(window).scrollTop();
	if (windowScroll > 800) {
		$(".scroll-top-icon").addClass("show");
	} else {
		$(".scroll-top-icon").removeClass("show");
	}
}

$(".scroll-top").on("click", function (e) {
	e.preventDefault();
	$("html, body").animate({
		scrollTop: 0
	}, 1200); //1200 easeInOutExpo
});


// *** Banner Parallax Image BG *** //
function bannerParallaxImageBG() {
	var bannerParallax = $(".banner-parallax"),
		imgSrc = bannerParallax.children("img:first-child").attr("src");

	bannerParallax.prepend("<div class='bg-element'></div>");
	var bgElement = bannerParallax.find("> .bg-element");
	bgElement.css("background-image", "url('" + imgSrc + "')").attr("data-stellar-background-ratio", 0.2);
}



// *** Scroll To Anchor *** //
function scrollToAnchor() {
	var stickyBar = $(".header-bar.sticky"),
		stickyBarHeight = stickyBar.height(),
		offsetDifference = (!stickyBar) ? 0 : stickyBarHeight;

	$(".scroll-to").on("click", function (e) {
		e.preventDefault();
		var $anchor = $(this);

		// scroll to specific anchor
		$("html, body").stop().animate({
			scrollTop: $($anchor.attr("href")).offset().top - offsetDifference
		}, 800 );
	});
}


// Custom banner height
$(".banner-parallax").each(function () {
	var customBannerHeight = $(this).data("banner-height"),
		boxContent = $(this).find(".row > [class*='col-']");
	$(this).css("min-height", customBannerHeight);
	$(boxContent).css("min-height", customBannerHeight);
});

// *** Section Parallax Image BG *** //
function sectionParallaxImageBG() {
	$(".section-parallax").each(function () {
		var parallaxSection = $(this),
			imgSrc = parallaxSection.children("img:first-child").attr("src");

		parallaxSection.prepend("<div class='bg-element'></div>");
		var bgElement = parallaxSection.find("> .bg-element");
		bgElement.css("background-image", "url('" + imgSrc + "')").attr("data-stellar-background-ratio", 0.1);
	});
}


// *** Counter Stats *** //
function counterStats() {
	$(".counter-stats").each(function () {
		var thisEl = $(this);
		var thisVal = thisEl.text();

		// put digits in a span
		var digits = thisVal.toString().replace(/(\d)/g, "<span class='digit'><span class='digit-value'>$1</span></span>");
		thisEl.html(digits + "<div class='main'>" + thisVal + "</span>");

		// add the ul list
		thisEl.find(".digit").each(function () {
			var digit = $(this);
			var digitValue = digit.find(".digit-value").text();
			digit.append(
				"<div class='counter-animator' data-value='" + digitValue + "'>" +
				"<ul>" +
				"<li>0</li>" +
				"<li>1</li>" +
				"<li>2</li>" +
				"<li>3</li>" +
				"<li>4</li>" +
				"<li>5</li>" +
				"<li>6</li>" +
				"<li>7</li>" +
				"<li>8</li>" +
				"<li>9</li>" +
				"</ul>" +
				"</div>"
			);
		});
	});

	$(".counter-stats").each(function (k) {
		var counter = $(this);
		var inview = new Waypoint({
			element: counter,
			handler: function (direction) {
				setTimeout(function () {
					setTimeout(function () {
						if ($(window).width() > 1) {
							counter.find(".counter-animator").each(function () {
								var animator = $(this);
								var value = animator.data("value") * 10;
								animator.find("ul").css({
									"transform": "translateY(-" + value + "%)",
									"-webkit-transform": "translateY(-" + value + "%)",
									"-moz-transform": "translateY(-" + value + "%)",
									"-ms-transform": "translateY(-" + value + "%)",
									"-o-transform": "translateY(-" + value + "%)"
								});
							});
						}
					}, k * 0); // firing sequencely delay
				}, 0); // initial delay
			},
			offset: '100%'
		});
	});
}


// *** Slider Clients *** //
function sliderClients() {
	var sliderClients = $('.slider-clients > .slick-slider');
	sliderClients.slick({
		slidesToShow: 6,
		slidesToScroll: 1,
		dots: false,
		infinite: true,
		rtl: slickDirection,
		arrows: false,
		touchThreshold: 20,
		responsive: [
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 5
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 4
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 3
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 2
				}
			}
		]
	});
}


// *** Slider Testimonials *** //
function sliderTestimonials() {
	var sliderTestimonials = $('.slider-testimonials > .slick-slider');
	sliderTestimonials.slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		dots: false,
		infinite: false,
		rtl: slickDirection,
		arrows: false,
		touchThreshold: 20,
		// centerMode: true,
		responsive: [
			{
				breakpoint: 1400,
				settings: {
					slidesToShow: 3
				}
			},
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 2
				}
			},
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 2
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1
				}
			}
		]
	});
}


// *** Loading Progress *** //
$("body").waitForImages({
	finished: function () {
		setTimeout(function () {
			$(".lp-content, #loading-progress .logo").css({ "opacity": 0 });
			$("#loading-progress").addClass("hide-it");
			setTimeout(function () {
				$(".banner-parallax > .bg-element, .banner-parallax > .overlay-pattern").addClass("appeared");
			}, 1500);
		}, 0);
	},
	each: function (loaded, total, success) {
		var loadPercent = Math.floor((loaded + 1) / total * 100);
		$("#lp-counter").animate({
			$this: loadPercent
		},
			{
				duration: 150,
				easing: "",
				queue: false,
				step: function (e) {
					var data = Math.round(e);
					$("#lp-counter").text(data + "%");
				}
			});

		$("#lp-bar").animate({ width: loadPercent + "%" }, 0);

		// console.log( loaded + " is loaded." );

		// when half of images are loaded
		if (loaded / total >= .5) {
			// console.log( loaded + " is the middle image!!" );
			// alert( "It's the middle of images flow.." );
		}
	},
	waitForAll: true
});


// *** Scroll To *** //
$(".scroll-to").on("click", function (e) {
	e.preventDefault();
	var $anchor = $(this);

	// scroll to specific anchor
	$("html, body").stop().animate({
		scrollTop: $($anchor.attr("href")).offset().top
	}, 1200);
});


// *** Style Switcher *** //
function switcherFire() {

	// Show Style Switcher After Load
	setTimeout(function () {
		$(".style-switcher").addClass("show")
		$(".ss-icon").toggleClass("rotating");
	}, 2000);

	// Demo Preview Image
	$(".demos-preview li a").each(function () {
		var $this = $(this);

		$this.hover(function () {
			var imgSrc = $this.find("img").attr("src");
			$(".dp-img").attr("src", imgSrc).toggleClass("appeared");
		});
	});

	$(".ss-icon").on("click", function (event) {
		event.preventDefault();
		$(".style-switcher").toggleClass("show");
		$(this).toggleClass("rotating");
	});

	// Switches Toggles
	$(".switch-button").each(function () {
		$(this).on("click", function () {
			$(this).toggleClass("active");
			$(this).next().toggleClass("active");
			$(this).prev().toggleClass("active");
		});

		// Prev
		$(this).prev("span").on("click", function () {
			$(this).addClass("active");
			$(this).nextAll().removeClass("active");
		});

		// Next
		$(this).next("span").on("click", function () {
			$(this).addClass("active");
			$(this).prev(".switch-button").addClass("active").prevAll("span:first-child").removeClass("active");
		});
	});

	// Patterns options
	$(".list-patterns li button").each(function () {
		$(this).on("click", function () {

			$("body").addClass("boxed");
			$('.slider-banner .slick-slider').slick('setPosition');

			// Toggle switcher & left and right titles
			$(".page-width-option .switch-button").addClass("active");
			$(".page-width-option .switch-button").next().addClass("active");
			$(".page-width-option .switch-button").prev().removeClass("active");

			// Patterns Switching
			var clickedPattern = "bg-pattern-" + $(this).attr("class");
			$("body").removeClass(function (index, css) {
				return (css.match(/(^|\s)bg-pattern-\S+/g) || []).join(' ');
			});
			// $( "body" ).removeClass( "[class*='bg-pattern-']" ).addClass( clickedPattern );
			$("body").addClass(clickedPattern);

			// Active pattern
			$(".list-patterns li button").removeClass("active");
			$(this).addClass("active");
		});
	});

	// Page Width Option
	$(".page-width-option .switch-button").each(function () {
		// $( ".list-patterns" ).addClass( "hidden" );
		if ($("body").hasClass("boxed")) {
			$(this).addClass("active");
			$(this).prev("span").removeClass("active");
			$(this).next("span").addClass("active");
			$(".list-patterns").removeClass("hidden");
		}

		$(this).on("click", function () {
			$("body").toggleClass("boxed");
			$('.slider-banner .slick-slider').slick('setPosition');
			// $( ".list-patterns" ).toggleClass( "hidden" );
			// when layout change from fullwidth to boxed width
			if ($("body").hasClass("boxed")) {

				// if body don't have bg pattern when transitioning
				// from fullwidth to fixed width
				if (!$("body").is("[class*='bg-pattern-']")) {
					// adding bg pattern for the first time when
					// layout change from fullwidth to boxed width
					// $( "body" ).addClass( "bg-pattern-texture-1" );
				}
			}
		});

		// Prev
		$(this).prev("span").on("click", function () {
			$("body").removeClass("boxed");
		});

		// Next
		$(this).next("span").on("click", function () {
			$("body").addClass("boxed");
		});
	});
}

function switcherLoad() {
	$("<div class='style-switcher'></div>").insertAfter("#full-container");

	var switcherUrl = "switcher.html";

	$(".style-switcher").load(switcherUrl, function () {
		$(this).append("<img class='dp-img' src='images/files/style-switcher/img-1.jpg'>");

		switcherFire();

		// For Scroll Purpose
		var styleSwitcherScroll = document.querySelector(".style-switcher-content");
		SimpleScrollbar.initEl(styleSwitcherScroll);
	});
}




