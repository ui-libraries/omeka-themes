// When DOM is fully loaded
jQuery(document).ready(function ($) {
	
	/* FlexSlider
	--------------------------------------------------*/
	
	$('.flexslider').flexslider({
	    namespace           : "flex-",           //{NEW} String: Prefix string attached to the class of every element generated by the plugin
	    selector            : ".slides > li",    //{NEW} Selector: Must match a simple pattern. '{container} > {slide}' -- Ignore pattern at your own peril
	    animation           : "fade",            //String: Select your animation type, "fade" or "slide"
	    easing              : "swing",           //{NEW} String: Determines the easing method used in jQuery transitions. jQuery easing plugin is supported!
	    direction           : "horizontal",      //String: Select the sliding direction, "horizontal" or "vertical"
	    reverse             : false,             //{NEW} Boolean: Reverse the animation direction
	    animationLoop       : true,              //Boolean: Should the animation loop? If false, directionNav will received "disable" classes at either end
	    smoothHeight        : false,             //{NEW} Boolean: Allow height of the slider to animate smoothly in horizontal mode
	    startAt             : 0,                 //Integer: The slide that the slider should start on. Array notation (0 = first slide)
	    slideshow           : true,              //Boolean: Animate slider automatically
	    slideshowSpeed      : 7000,              //Integer: Set the speed of the slideshow cycling, in milliseconds
	    animationSpeed      : 600,               //Integer: Set the speed of animations, in milliseconds
	    initDelay           : 0,                 //{NEW} Integer: Set an initialization delay, in milliseconds
	    randomize           : false,             //Boolean: Randomize slide order
	     
	    // Usability features
	    pauseOnAction       : true,              //Boolean: Pause the slideshow when interacting with control elements, highly recommended.
	    pauseOnHover        : false,             //Boolean: Pause the slideshow when hovering over slider, then resume when no longer hovering
	    useCSS              : true,              //{NEW} Boolean: Slider will use CSS3 transitions if available
	    touch               : true,              //{NEW} Boolean: Allow touch swipe navigation of the slider on touch-enabled devices
	    video               : false,             //{NEW} Boolean: If using video in the slider, will prevent CSS3 3D Transforms to avoid graphical glitches
	     
	    // Primary Controls
	    controlNav          : true,              //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
	    directionNav        : true,              //Boolean: Create navigation for previous/next navigation? (true/false)
	    prevText            : "Previous",        //String: Set the text for the "previous" directionNav item
	    nextText            : "Next",            //String: Set the text for the "next" directionNav item
	     
	    // Secondary Navigation
	    keyboard            : true,              //Boolean: Allow slider navigating via keyboard left/right keys
	    multipleKeyboard    : false,             //{NEW} Boolean: Allow keyboard navigation to affect multiple sliders. Default behavior cuts out keyboard navigation with more than one slider present.
	    mousewheel          : false,             //{UPDATED} Boolean: Requires jquery.mousewheel.js (https://github.com/brandonaaron/jquery-mousewheel) - Allows slider navigating via mousewheel
	    pausePlay           : false,             //Boolean: Create pause/play dynamic element
	    pauseText           : 'Pause',           //String: Set the text for the "pause" pausePlay item
	    playText            : 'Play',            //String: Set the text for the "play" pausePlay item
	     
	    // Special properties
	    controlsContainer   : "",                //{UPDATED} Selector: USE CLASS SELECTOR. Declare which container the navigation elements should be appended too. Default container is the FlexSlider element. Example use would be ".flexslider-container". Property is ignored if given element is not found.
	    manualControls      : "",                //Selector: Declare custom control navigation. Examples would be ".flex-control-nav li" or "#tabs-nav li img", etc. The number of elements in your controlNav should match the number of slides/tabs.
	    sync                : "",                //{NEW} Selector: Mirror the actions performed on this slider with another slider. Use with care.
	    asNavFor            : "",                //{NEW} Selector: Internal property exposed for turning the slider into a thumbnail navigation for another slider
	});
	
	/* Quote/Testimonials Rotator
	--------------------------------------------------*/

	$('ul#quotes').quote_rotator();

	/* FancyBox Image Lightbox
	--------------------------------------------------*/
	
	$(".fancybox").fancybox();

	/* FitVids Responsive Video
	--------------------------------------------------*/

	$(".container").fitVids();
	    
	/* Twitter Feed
	--------------------------------------------------*/
	
    $(".tweet").tweet({
        join_text: "auto",
        username: "guuthemes",
        avatar_size: 48,
        count: 2,
        loading_text: "loading tweets, hold on..."
    });
	
	/* Google Map
	--------------------------------------------------*/
	    
	if ($('body.contact').length) {
	    var map;
	    map = new GMaps({
	        div: '#map',
	        lat: 40.769459,
	        lng: -73.983227,
	        zoomControlOptions: {
	            style: google.maps.ZoomControlStyle.SMALL,
	            position: google.maps.ControlPosition.TOP_LEFT
	        },
	        scrollwheel: true,
	        panControl: true,
	        mapTypeControl: true,
	        scaleControl: true,
	        streetViewControl: false,
	        //mapTypeId: google.maps.MapTypeId.TERRAIN
	    });
	    map.drawOverlay({
	        lat: 40.769459,
	        lng: -73.983227,
	        content: '<div class="map-overlay"><i class="icon-star icon-large"></i><br />You can find us here<div class="map-overlay_arrow above"></div></div>',
	        verticalAlign: 'top',
	        horizontalAlign: 'center'
	    });
	    // The styles below present your map in Monochrome. If you would like to use a normal coloured map with your theme, then please remove the code below, from lines 107 to 225, and uncomment line 96 above.
	    var styles = [{
	        featureType: "water",
	        elementType: "all",
	        stylers: [{
	            visibility: "on"
	        }, {
	            hue: "#000000"
	        }, {
	            saturation: -40
	        }, {
	            gamma: 0.84
	        }]
	    }, {
	        featureType: "landscape.man_made",
	        elementType: "all",
	        stylers: [{
	            saturation: -40
	        }, {
	            hue: "#000000"
	        }, {
	            visibility: "off"
	        }]
	    }, {
	        featureType: "landscape",
	        elementType: "all",
	        stylers: [{
	            saturation: -100
	        }, {
	            lightness: 10
	        }, {
	            hue: "#333333"
	        }]
	    }, {
	        featureType: "administrative.land_parcel",
	        elementType: "all",
	        stylers: [{
	            visibility: "off"
	        }]
	    }, {
	        featureType: "road.local",
	        elementType: "all",
	        stylers: [{
	            saturation: -100
	        }, {
	            lightness: 5
	        }, {
	            visibility: "on"
	        }]
	    }, {
	        featureType: "poi.park",
	        elementType: "geometry",
	        stylers: [{
	            hue: "#000000"
	        }, {
	            saturation: -100
	        }, {
	            lightness: 46
	        }]
	    }, {
	        featureType: "poi",
	        elementType: "labels",
	        stylers: [{
	            hue: "#ffc300"
	        }, {
	            saturation: -100
	        }, {
	            visibility: "off"
	        }]
	    }, {
	        featureType: "road",
	        elementType: "labels",
	        stylers: [{
	            hue: "#FFFFFF"
	        }, {
	            saturation: -100
	        }, {
	            gamma: 1.5
	        }, {
	            visibility: "on"
	        }]
	    }, {
	        featureType: "landscape",
	        elementType: "labels",
	        stylers: [{
	            visibility: "off"
	        }]
	    }, {
	        featureType: "water",
	        elementType: "labels",
	        stylers: [{
	            visibility: "off"
	        }]
	    }, {
	        featureType: "water",
	        elementType: "geometry",
	        stylers: [{
	            saturation: -100
	        }, {
	            visibility: "on"
	        }]
	    }, {
	        featureType: "road.arterial",
	        elementType: "all",
	        stylers: [{
	            hue: "#ffcc00"
	        }, {
	            lightness: 30
	        }, {
	            saturation: -100
	        }]
	    }, {
	        featureType: "road.highway",
	        elementType: "geometry",
	        stylers: [{
	            hue: "#ffc300"
	        }, {
	            saturation: -100
	        }, {
	            lightness: 10
	        }]
	    }, {
	        featureType: "landscape.natural",
	        elementType: "all",
	        stylers: [{
	            visibility: "off"
	        }]
	    }, {
	        featureType: "all",
	        elementType: "all",
	        stylers: []
	    }, {
	        featureType: "poi",
	        elementType: "geometry",
	        stylers: [{
	            visibility: "off"
	        }]
	    }, {
	        featureType: "transit",
	        elementType: "labels",
	        stylers: [{
	            visibility: "off"
	        }]
	    }, {
	        featureType: "transit.line",
	        elementType: "geometry",
	        stylers: [{
	            visibility: "off"
	        }]
	    }, {
	        featureType: "all",
	        elementType: "all",
	        stylers: []
	    }];
	    map.setOptions({
	        styles: styles
	    });
	}
		
	/* Back to Top Button
	--------------------------------------------------*/
	
	$("#back-to-top").hide();
	$(function () {
	    $(window).scroll(function () {
	        if ($(this).scrollTop() > 100) {
	            $('#back-to-top').fadeIn();
	        } else {
	            $('#back-to-top').fadeOut();
	        }
	    });
	    $('#back-to-top a').click(function () {
	        $('body,html').animate({
	            scrollTop: 0
	        }, 800);
	        return false;
	    });
	});
	    
	/* Header Navigation
	--------------------------------------------------*/
	
	var $navigation = $('#navigation');
	// Regular nav
	$navigation.on('mouseenter', 'li', function () {
	    var $this = $(this),
	        $subMenu = $this.children('ul');
	    if ($subMenu.length) $this.addClass('hover');
	    $subMenu.hide().stop(true, true).fadeIn(150);
	}).on('mouseleave', 'li', function () {
	    $(this).removeClass('hover').children('ul').stop(true, true).fadeOut(70);
	});
	// Responsive nav
	selectnav('navigation', {
	    label: 'NAVIGATE...',
	    autoselect: false,
	    nested: true,
	    indent: '-'
	});
	
	/* Header Navigation Blur Effect
	--------------------------------------------------*/
	
	$("#header-navigation li, #filter li").mouseover(function () {
	    $(this).siblings().addClass("fade");
	}).mouseout(function () {
	    $(this).siblings().removeClass("fade");
	});
	
	/* Isotope (http://isotope.metafizzy.co)
	--------------------------------------------------*/
	
	$(window).load(function () {
	    var $container = $('#portfolio-items');
	    var $filter = $('#filter');
	    // Initialize isotope 
	    $container.isotope({
	        filter: '*',
	        layoutMode: 'fitRows',
	        animationOptions: {
	            duration: 750,
	            easing: 'linear'
	        }
	    });
	    // Filter items when filter link is clicked
	    $filter.find('a').click(function () {
	        var selector = $(this).attr('data-filter');
	        $filter.find('a').removeClass('current');
	        $(this).addClass('current');
	        $container.isotope({
	            filter: selector,
	            animationOptions: {
	                animationDuration: 750,
	                easing: 'linear',
	                queue: false,
	            }
	        });
	        return false;
	    });
	});
		
	/* Accordion Widget
	--------------------------------------------------*/
	
	//Add Inactive Class To All Accordion Headers
	$('.accordion-header').toggleClass('inactive-header');
	//Set The Accordion Content Width
	var contentwidth = $('.accordion-header').width();
	$('.accordion-content').css({
	    'width': contentwidth
	});
	//Open The First Accordion Section When Page Loads
	$('.accordion-header').first().toggleClass('active-header').toggleClass('inactive-header');
	$('.accordion-content').first().slideDown().toggleClass('open-content');
	// The Accordion Effect
	$('.accordion-header').click(function () {
	    if ($(this).is('.inactive-header')) {
	        $('.active-header').toggleClass('active-header').toggleClass('inactive-header').next().slideToggle().toggleClass('open-content');
	        $(this).toggleClass('active-header').toggleClass('inactive-header');
	        $(this).next().slideToggle().toggleClass('open-content');
	    } else {
	        $(this).toggleClass('active-header').toggleClass('inactive-header');
	        $(this).next().slideToggle().toggleClass('open-content');
	    }
	});
			
	/* Tabbed Content Widget
	--------------------------------------------------*/
	
	$(".tab_content").hide();
	$(".tab_content:first").show();
	$("ul.tabs li").click(function () {
	    $("ul.tabs li").removeClass("active");
	    $(this).addClass("active");
	    $(".tab_content").hide();
	    var activeTab = $(this).attr("data-id");
	    $("#" + activeTab).fadeIn();
	});
	
	/* Contact Form
	--------------------------------------------------*/

	// Validate the contact form
	$('#contact-form').validate({
	    // Add requirements to each of the fields
	    rules: {
	        name: {
	            required: true,
	            minlength: 2
	        },
	        email: {
	            required: true,
	            email: true
	        },
	        message: {
	            required: true,
	            minlength: 10
	        }
	    },
	    // Specify what error messages to display
	    // when the user does something horrid
	    messages: {
	        name: {
	            required: "Please enter your name.",
	            minlength: jQuery.format("At least {0} characters required.")
	        },
	        email: {
	            required: "Please enter your email.",
	            email: "Please enter a valid email."
	        },
	        message: {
	            required: "Please enter a message.",
	            minlength: jQuery.format("At least {0} characters required.")
	        }
	    },
	    // Use Ajax to send everything to php/form.php
	    submitHandler: function (form) {
	        $("#submit").attr("value", "Sending...");
	        $(form).ajaxSubmit({
	            target: "#response",
	            success: function (responseText, statusText, xhr, $form) {
	                $(form).slideUp("fast");
	                $("#response").html(responseText).hide().slideDown("fast");
	            }
	        });
	        return false;
	    }
	});
		
	/* Overlay Vertical Alignment
	--------------------------------------------------*/

	$.fn.extend({
	    verticalAlign: function () {
	        //Iterate over the current set of matched elements
	        return this.each(function () {
	            var obj = $(this);
	            // calculate the new padding and height
	            var childHeight = obj.height();
	            var parentHeight = obj.parent().height();
	            var diff = Math.round(((parentHeight - childHeight) / 2));
	            // apply new values
	            obj.css({
	                "display": "block",
	                "margin-top": diff
	            });
	        });
	    }
	});
	var callback = function () {
	    $(".project-item .overlay .details").verticalAlign();
	};
	$(document).ready(callback);
	$(window).resize(callback);
	$(window).load(callback);
	
	/* Form Placeholder Functionality for IE8/IE9
	--------------------------------------------------*/
	
	if (!Modernizr.input.placeholder) {
	    $(document).on('focus', '[placeholder]', function () {
	        var input = $(this);
	        if (input.val() == input.attr('placeholder')) {
	            input.val('');
	            input.removeClass('placeholder');
	        }
	    })
	    $(document).on('blur', '[placeholder]', function () {
	        var input = $(this);
	        if (input.val() == '' || input.val() == input.attr('placeholder')) {
	            input.addClass('placeholder');
	            input.val(input.attr('placeholder'));
	        }
	    })
	    $('[placeholder]').blur();
	    $(document).on('submit', 'form', function () {
	        $(this).find('[placeholder]').each(function () {
	            var input = $(this);
	            if (input.hasClass('placeholder') && input.val() == input.attr('placeholder')) {
	                input.val('');
	            }
	        })
	    });
	}
	
	/* End all Custom Functions */
		
});