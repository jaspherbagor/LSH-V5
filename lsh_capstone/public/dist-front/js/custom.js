(function ($) {

	"use strict";

	$(".scroll-top").hide();
	$(window).on("scroll", function () {
		if ($(this).scrollTop() > 300) {
			$(".scroll-top").fadeIn();
		} else {
			$(".scroll-top").fadeOut();
		}
	});
	$(".scroll-top").on("click", function () {
		$("html, body").animate({
			scrollTop: 0,
		}, 700)
	});

	$(document).ready(function() {
		$('#transact_form_gcash').hide();
		$('#transact_form_maya').hide();
		$('.select2').select2({
			theme: "bootstrap"
		});

		$('#checkShipping').on('change',function() {
	        $('.shipping-form').toggle();
	    });

		$('.gcash').hide();
		$('.maya').hide();
	    $('.stripe').hide();
	    $('.bank').hide();
	    $('.cash-on-delivery').hide();


		$('#paymentMethodChange').on('change',function() {

			if($('#paymentMethodChange').val() == 'Stripe')
		    {
		        $('.gcash').hide();
				$('.maya').hide();
		        $('.stripe').show();
		        $('.bank').hide();
				$('#transact_form_gcash').hide();
				$('#transact_form_maya').hide();
		        $('.cash-on-delivery').hide();
		    }

			else if($('#paymentMethodChange').val() == 'Gcash')
			{
				$('.maya').hide();
				$('.gcash').show();
				$('.stripe').hide();
				$('#transact_form_gcash').show();
				$('#transact_form_maya').hide();
				$('.bank').hide();
				$('.cash-on-delivery').hide();
			}

			else if($('#paymentMethodChange').val() == 'Maya')
			{
				$('.gcash').hide();
				$('.maya').show();
				$('.stripe').hide();
				$('#transact_form_gcash').hide();
				$('#transact_form_maya').show();
				$('.bank').hide();
				$('.cash-on-delivery').hide();
			}

		    else if($('#paymentMethodChange').val() == '')
		    {
		    	$('.maya').hide();
				$('.gcash').hide();
		        $('.stripe').hide();
		        $('.bank').hide();
				$('#transact_form_gcash').hide();
				$('#transact_form_maya').hide();
		        $('.cash-on-delivery').hide();
		    }

		});

	});
		
	new WOW().init();

	$('.video-button').magnificPopup({
	  	type: 'iframe',
		gallery:{
			enabled:true
		}
	});

	$('.magnific').magnificPopup({
	  	type: 'image',
		gallery:{
			enabled:true
		}
	});

    $('.slide-carousel').owlCarousel({
        loop: true,
        autoplay: true,
		autoplaySpeed: 1500,
		smartSpeed: 1500,
        autoplayHoverPause: true,
        margin: 0,
        mouseDrag: false,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        nav: true,
        navText: ["<i class='fa fa-caret-left'></i>", "<i class='fa fa-caret-right'></i>"],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

	$('.testimonial-carousel').owlCarousel({
		loop: true,
		autoplay: true,
		autoplayHoverPause: true,
		autoplaySpeed: 1500,
		smartSpeed: 1500,
		margin: 30,
		nav: false,
		animateIn: 'fadeIn',
        animateOut: 'fadeOut',
		navText: ["<i class='fa fa-caret-left'></i>", "<i class='fa fa-caret-right'></i>"],
		responsive: {
			0: {
				items: 1,
				dots: false,
				nav: true,
			},
			768: {
				items: 1
			},
			992: {
				items: 1
			}
		}
	});

	$('.room-detail-carousel').owlCarousel({
        loop: true,
        autoplay: false,
        autoplayHoverPause: true,
        margin: 0,
        mouseDrag: false,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        nav: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

	jQuery('.mean-menu').meanmenu({
		meanScreenWidth: "991"
	});

    $('.daterange1').daterangepicker({
        autoUpdateInput: false,
        minDate:new Date(),
		"showDropdowns": false,
        locale: {
            format: 'DD/MM/YYYY',
            cancelLabel: 'Clear'
        }
    });
  
    $('.daterange1').on('apply.daterangepicker', function(ev, picker) {
        $(this).val(picker.startDate.format('DD/MM/YYYY') + ' - ' + picker.endDate.format('DD/MM/YYYY'));
    });
  
    $('.daterange1').on('cancel.daterangepicker', function(ev, picker) {
        $(this).val('');
    });

	if($(window).width() > 767) {
		$("#sticky_sidebar").stickit({
			top: 80,
		})
	}
	
})(jQuery);