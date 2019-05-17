
//structuring JS like this instead of using revealing module pattern is bad because you have no encapsulation.
jQuery(function() {

	initHeader();
	initNav();
	initTrackClick();
	initCustomCollapse();
	initGallery();
	initVideoGallery();
	initVideo();
	// initScrollTo();
	initCollapseVideo();
	initSignup();
	// initReviewCarousel();
	// initCalendar();
	// scrollDown();
	// initCookiePolicy();
	initMCForm();
	//General
	// $('.video-trailer').on('click', function(e) {
	// 	e.preventDefault();
	// 	console.log('teaser');
	// 	$(this).text(function(i, text) {
	// 		return text === "Close video" ? "SEE WHAT OUR MANCHESTER AUDIENCES THINK!" : "Close video";
	// 	});
	// });

	// Cookies notice bar
    if ($('.cookies').length > 0) {
        // Read the cookie
        var noticeCookieName = 'cookies_agreed';

        if (Cookies.get(noticeCookieName) == undefined) {
            $('.cookies').css('display', 'block');
			$('.toggle-nav, .watch-trailer').css('padding-top', $('.cookies').outerHeight() - 10);
            // $('.main-header__tickets').css('padding-top', $('.cookies').outerHeight() + 20);
        } else {
			$('.toggle-nav, .watch-trailer').css('padding-top', '0');
        	// $('.main-header__tickets').css('padding-top', '20px');
        }

        // Button click handler
        $('.cookies .btn.accept-cookies').on('click', {noticeCookieName: noticeCookieName}, function(e) {
            e.preventDefault();
            Cookies.set(noticeCookieName, noticeCookieName, { expires: 365, path: '/' });
            $('.cookies').slideUp(600);
			$('.toggle-nav, .watch-trailer, .main-header__tickets').css('padding-top', 'initial');
            $('.main-header__tickets').css('padding-top', '20px');
		});
	
    }
	

});

var initGallery = function () {
    $('#photo-gallery').lightGallery({
        selector: '.item',
        download: false,

        // thumbnail:true
    });
};
var initTrackClick = function() {

    $('[data-track]').on('click', function(event) {
        ga('send', 'event', {
            eventCategory: $(this).data('track'),
            eventAction: 'click',
            eventLabel: $(this).attr('href')
        });
    });

    $('[data-track]').on('click', function(event) {
        // Check if google analytics loaded
        if(window.ga && ga.create) {
            // Send click event to google analytics
            ga('send', 'event', {
                eventCategory: $(this).data('track'),
                eventAction: 'click',
                eventLabel: $(this).attr('href'),
                eventValue: $(this).data('value')
            });
        }
    });
    
};
var initNav = function () {
$(".toggle").click(function () {
	$(this).toggleClass("open");
	$(".menu").toggleClass("opened");
});
};



function initCollapseVideo() {

	// Trailer 
	
	// $('#watch-trailer').on('show.bs.modal', function (e) {
	// 	var src = e.relatedTarget.dataset['src'];

	// 	$(this).find('iframe').attr('src', src);
	// });

	// $('#watch-trailer').on('hide.bs.modal', function (e) {
	// 	$(this).find('iframe').attr('src', '');
	// });


}		

var initMCForm = function () {

	validated = true;
	changed = false;

	function checkValidation() {
		$("#success-msg").hide();
		changed = true;
		validated = true;
		$('#mc_embed_signup input.required').each(function () {
			if ($(this).val() == "") {
				validated = false;
			}
		});

		termsCheck();

		if (validated) {
			$('#mc-embedded-subscribe').removeAttr('disabled');
		} else {
			$('#mc-embedded-subscribe').attr('disabled', 'disabled');

		}
	}

	$('#mc_embed_signup input.required').on('keyup', function () {
		checkValidation();
	});

	$('#termsCheck').on('change', function () {
		checkValidation();
	});

	$('#mc-embedded-subscribe').on('click', function () {
		termsCheck();
	});


	function termsCheck() {

		if (!$('#termsCheck').is(':checked')) {
			validated = false;
			var err_msg = 'Please accept our terms.';
			if ($('.termsError').length <= 0) {
				$('.termsCheckWrap').after('<p class="termsError">' + err_msg + '</p>');
			}
		} else {
			$('.termsError').remove();
		}

	}

};

function initCustomCollapse() {

	//On click toggle classes, set margins
	$('.custom_collapse_button, .custom_collapse_close').on('click', function(e) {

		e.preventDefault();

		var container = $(this).closest('.custom_collapse'),
			item = $(this).closest('.custom_collapse_item'),
			itemContent = item.find('.custom_collapse_content');

		if (item.hasClass('active')) {
			item.removeClass('active');
			item.css('margin-bottom', 0);
		} else {
			container.find('.custom_collapse_item.active').removeClass('active').css('margin-bottom', 0);
			item.addClass('active');
			item.css('margin-bottom', itemContent.outerHeight());
		}

		$('body').animate({ 
            scrollTop: $(this).offset().top
        }, 700);

	});

	// //Set margin on load
	$(window).on('load', function() {
		$('.custom_collapse').each(function() {
			var activeItem = $(this).find('.custom_collapse_item.active');
			activeItem.css('margin-bottom', activeItem.find('.custom_collapse_content').outerHeight());
		});
	});

	//On resize
	$(window).on('resize', function() {
		$('.custom_collapse').each(function() {
			var activeItem = $(this).find('.custom_collapse_item.active');
			activeItem.css('margin-bottom', activeItem.find('.custom_collapse_content').outerHeight());
		});
	});

	// contentBorder();

	// function contentBorder() {

	// 	var activeItem = $(this).find('.custom_collapse_item.active'),
	// 	    activeItemAfter = $(this).find('.custom_collapse_item.active:after'),
	// 	    activeItemBefore= $(this).find('.custom_collapse_item.active:before');

	// 	$(activeItemAfter).css('left', '200px');

	// }

}
function initVideo() {

	/* webflow only this section swiper pagination */
	$( document ).ready(function() {
		/* add html by js (no way to add this HTML by webflow UI beacuse this is CMS list*/
	var part1 = '<div class=swiper-pagination></div>';
	//  var part2 = '<div class="swiper-button-prev"></div>';
	//var part3 = '<div class="swiper-button-next"></div>';  
	// var swiperString = part1.concat(part2, part3);
		$('#swiper-press').append(part1);
	});

	/* change active class when click */
	$(".swiper-container-videos .swiper-wrapper .swiper-slide a").click(function() {
	$(this).closest( ".swiper-slide").addClass("selected").siblings().removeClass("selected");
	mySwiper1.slideTo(mySwiper1.clickedIndex);
	});

	$(".swiper-container-videos .swiper-slide").first().addClass("selected");

	/* 1 of 2 : SWIPER */
	var mySwiper1 = new Swiper(".swiper-container-videos", {
	// If loop true set photoswipe - counterEl: false
	loop: false,
	/* slidesPerView || auto - if you want to set width by css like flickity.js layout - in this case width:80% by CSS */
	slidesPerView: "auto",
	spaceBetween: 15,
	centeredSlides: false,

	// If we need pagination
	pagination: {
	el: ".swiper-pagination",
	clickable: true
	},
	navigation: {
		nextEl: '.swiper-custom-next',
		prevEl: '.swiper-custom-prev',
	},

	keyboard: {
	enabled: true,
	onlyInViewport: true,
	},
	});

	/*jshint browser:true */
	/*!
	* FitVids 1.1
	* Copyright 2013, Chris Coyier - https://css-tricks.com + Dave Rupert - http://daverupert.com
	* Credit to Thierry Koblentz - http://www.alistapart.com/articles/creating-intrinsic-ratios-for-video/
	* Released under the WTFPL license - http://sam.zoy.org/wtfpl/
	*
	*/
	!(function(t) {
	"use strict";
	(t.fn.fitVids = function(e) {
	var i = { customSelector: null, ignore: null };
	if (!document.getElementById("fit-vids-style")) {
		var r = document.head || document.getElementsByTagName("head")[0],
		a =
			".fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}",
		d = document.createElement("div");
		(d.innerHTML = '<p>x</p><style id="fit-vids-style">' + a + "</style>"),
		r.appendChild(d.childNodes[1]);
	}
	return (
		e && t.extend(i, e),
		this.each(function() {
		var e = [
			'iframe[src*="player.vimeo.com"]',
			'iframe[src*="youtube.com"]',
			'iframe[src*="youtube-nocookie.com"]',
			'iframe[src*="kickstarter.com"][src*="video.html"]',
			"object",
			"embed"
		];
		i.customSelector && e.push(i.customSelector);
		var r = ".fitvidsignore";
		i.ignore && (r = r + ", " + i.ignore);
		var a = t(this).find(e.join(","));
		(a = a.not("object object")),
			(a = a.not(r)),
			a.each(function() {
			var e = t(this);
			if (
				!(
				e.parents(r).length > 0 ||
				("embed" === this.tagName.toLowerCase() &&
					e.parent("object").length) ||
				e.parent(".fluid-width-video-wrapper").length
				)
			) {
				e.css("height") ||
				e.css("width") ||
				(!isNaN(e.attr("height")) && !isNaN(e.attr("width"))) ||
				(e.attr("height", 9), e.attr("width", 16));
				var i =
					"object" === this.tagName.toLowerCase() ||
					(e.attr("height") && !isNaN(parseInt(e.attr("height"), 10))) ? parseInt(e.attr("height"), 10)
					: e.height(),
				a = isNaN(parseInt(e.attr("width"), 10)) ? e.width()
					: parseInt(e.attr("width"), 10),
				d = i / a;
				if (!e.attr("name")) {
				var o = "fitvid" + t.fn.fitVids._count;
				e.attr("name", o), t.fn.fitVids._count++;
				}
				e
				.wrap('<div class="fluid-width-video-wrapper"></div>')
				.parent(".fluid-width-video-wrapper")
				.css("padding-top", 100 * d + "%"),
				e.removeAttr("height").removeAttr("width");
			}
			});
		})
	);
	}),
	(t.fn.fitVids._count = 0);
	})(window.jQuery || window.Zepto);
	//# sourceMappingURL=jquery.fitvids.min.js.map

	/* This is what makes the videos responsive. You can either include this in a <script> tag in the markup, or better yet, include it in a separata JavaScript file.*/
	$(function() {
	//Look for all the videos inside this element and make them responsive
	$(".vid-container").fitVids();
	});

	/*JS FOR SCROLLING THE ROW OF THUMBNAILS*/

	$(".vid-item").each(function(index) {
	$(this).on("click", function() {
		var current_index = index + 1;
		$(".vid-item .thumb").removeClass("active");
		$(".vid-item:nth-child(" + current_index + ") .thumb").addClass("active");
	});
	});
	


}

function initVideoGallery() {

     $(".arrow-right").bind("click", function (event) {
         event.preventDefault();
         $(".vid-list-container").stop().animate({
             scrollLeft: "+=336"
         }, 750);
     });
     $(".arrow-left").bind("click", function (event) {
         event.preventDefault();
         $(".vid-list-container").stop().animate({
             scrollLeft: "-=336"
         }, 750);
     });
}

function initGallery() {

	// On click go to slide
	$('.gallery .item .btn').on('click', function() {

		var carouselID = $(this).attr('data-modal-gallery'),
			carouselItem = $(this).attr('data-carosuel-item');
			modalID = $(this).attr('data-target');

		$(modalID).on('show.bs.modal', function (e) {
			$(carouselID).carousel(parseInt(carouselItem));
		});

	});

}
function scrollDown() {
	$(".down").click(function () {
		$('html, body').animate({
			scrollTop: $(".home").offset().top
		}, 1000);
	});
}
function initHeader() {

	function centerLogo() {
		//Centering logo due to transform being taken up
		var logo = $('.main-header.general').find('.logo'),
			windowWidth = $(window).width(),
			logoWidth = logo.width();
		// console.log(windowWidth);
		// console.log(logoWidth);
		logo.css('left', (windowWidth - logoWidth) / 2);
	}

	window.addEventListener('load', centerLogo());
	window.addEventListener('resize', centerLogo());

}
// var initSignup = function() {

//         var base_url = $('base').attr('href');

//         // When user clicks submit process form
//         $('#signup').submit(function(e) {
//             e.preventDefault();
//             var mailchimpform = $(this);
//             mailchimpform.find('.help-block').empty();
//             $.ajax({
//                 url: 'inc/subscribe.php',
//                 type: 'POST',
//                 data: mailchimpform.serialize()
//             }).done(function( data ) {
//                 //got a result  
//                 if (data.result && data.result=='success') {
//                     $('form .form-wrapper').css('display', 'none');
//                     $('.thankyou').css('display', 'block');
//                 } else {
//                     failure
//                     is there a failure array?
//                     console.log(data.errors);
//                     if (typeof data.errors != 'undefined') {
//                         $.each(data.errors, function(key, val) {
//                             console.log('setting #'+key+' to', val);
//                             mailchimpform.find('#'+key).parent().find('.help-block').html(val);
//                         });
//                     } else if (typeof data.message != 'undefined') {
//                         mailchimpform.replaceWith('<p class="response">'+data.message+'</p>');
//                     }
//                 }
//             }).fail(function(jqXHR, textStatus, errorThrown) {
//                 console.log('got an error when submitting form');
//                 console.log( jqXHR );
//                 console.log( textStatus );
//                 mailchimpform.replaceWith('<p class="response text-center">Error submitting request. Please try again later.</p>');
//             });
//         });

//     };

$('#signUp').on('hidden.bs.modal', function () {
	location.reload();
});
function initSignup() {

		// $('#submit').attr('disabled','disabled').addClass('disabled');
		// $('input[type="text"]').keyup(function() {
		// 	if($(this).val() != '') {
		// 		$('input[type="submit"]').removeAttr('disabled');
		// 	}
		// });

	$('a[data-target="#signUp"]').on('click', function () {
		var url = $(this).data('url');
		$('#mc-embedded-subscribe-form').trigger("reset");
		$('#mc-embedded-subscribe-form').attr('action', url);
	});

	 	// When user clicks submit process form
	$('form[name="mc-embedded-subscribe-form"]').submit(function () {
		var mailchimpform = $(this);
		var url = mailchimpform.attr('action');
		$.ajax({
			url: url,
			type:'POST',
			data:mailchimpform.serialize(),
			success:function(data){
				$('form').append(data);
				// Check if data is not empty
				// if (data.length > 0) {
				// 	if(data.indexOf(':400') > 0) {
				// 		$("#response").html("<h4>Emails matches!</h4>").css('color', 'white');
				// 	}
				// }
			}
		});
		return false;
	});

	// $('#signUpUK').submit(function () {
	// 	var mailchimpform = $(this);
	// 	$.ajax({
	// 		url: '//batoutofhellmusical.us1.list-manage.com/subscribe/post?u=2f36c1eba84f0edbfa535ad91&amp;id=eba3f50307',
	// 		type: 'POST',
	// 		data: mailchimpform.serialize(),
	// 		success: function (data) {
	// 			$('form').append(data);
	// 			// Check if data is not empty
	// 			// if (data.length > 0) {
	// 			// 	if(data.indexOf(':400') > 0) {
	// 			// 		$("#response").html("<h4>Emails matches!</h4>").css('color', 'white');
	// 			// 	}
	// 			// }
	// 		}
	// 	});
	// 	return false;
	// });

}

$('.close').click(function () {
    $(".panel-collapse").removeClass("in");
});


// $('#watch-trailer').on('show.bs.modal', function (e) {
// 	var src = e.relatedTarget.dataset['src'];

// 	$(this).find('iframe').attr('src', src);
// });

// $('#watch-trailer').on('hide.bs.modal', function (e) {
// 	$(this).find('iframe').attr('src', '');
// });
$(document).ready(function() {

// Gets the video src from the data-src on each button

var $videoSrc;  
$('.video-btn').click(function() {
	$videoSrc = $(this).data( "src" );
});
console.log($videoSrc);



// when the modal is opened autoplay it  
$('#watch-trailer').on('shown.bs.modal', function (e) {

// set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
$("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" ); 
})



// stop playing the youtube video when I close the modal
$('#watch-trailer').on('hide.bs.modal', function (e) {
	// a poor man's stop video
	$("#video").attr('src',$videoSrc); 
}) 






// document ready  
});


	

