var urlCalendar;
(function($){

	$(window).on('popstate', function() {
		var anchor = location.hash || $("a[data-toggle=tab]").first().attr("href");
    	$('a[href=' + anchor + ']').tab('show');
    	//$("body,html").animate({scrollTop:0}, 100);
	});
	
	
	$(document).ready(function(){



		$(window).load(function() {
			$("body").removeClass("no-trans");
			$("body,html").animate({scrollTop:0}, 100);
		});


		$('[data-toggle="tooltip"]').tooltip();


		if( $('#calendar-event').length ) {

			var razdel = $('#calendar-event').attr('razdel');

			var urlCalendar = 'ajax/event/index';
			if( razdel == 'rheumatology' ) {
				urlCalendar = 'ajax/event/rheumatology';
			}
			else if( razdel == 'neurology' ) {
				urlCalendar = 'ajax/event/neurology';
			}

			setUrlCalendar(urlCalendar);

			// $("#calendar-event").zabuto_calendar({
			// 	language: "ru",
			// 	cell_border: true,
			// 	today: true,
			// 	ajax: {
			// 		url: urlCalendar,
			// 		modal: false
			// 	}
			// });
		}


		if( $('#indexNews').length ) {
			var razdel = $('#indexNews').attr('razdel');

			$.ajax({
				type: "POST",
				url: "/ajax/news/index",
				data: {
					'page' : 1,
					'razdel' : razdel
				},
				success: function(data){
					$('#indexNews').html(data);
				},
			});
		}

		$('.video_start').on( "click", function() {
			var id_video = this.getAttribute("id_video");
			var time = this.getAttribute("time");

			var srcVideo = $('#' + id_video + ' iframe')[0].src.split('?');

			srcVideo = srcVideo[0];

			$('#' + id_video + ' iframe')[0].src = srcVideo + "?autoplay=0";
			$('#' + id_video + ' iframe')[0].src = srcVideo + '?start='+ time +'&autoplay=1';
			return false;

		});


		if(location.hash) {
			$('a[href=' + location.hash + ']').tab('show');
			$("body,html").animate({scrollTop:0},0);
		}
		$(document.body).on("click", "a[data-toggle=tab]", function(event) {

			 location.hash = this.getAttribute("href");
			 $("body,html").animate({scrollTop:0}, 100);
		});

		$('#h2Comment').on( "click", function() {
			$("html, body").animate({
		        scrollTop: $(".comments-form").offset().top - 180
		    }, 400);

		    $( "#comment-form #commentTitle" ).focus();


		    return;
		});


      /*  var hash = window.location.hash;
        hash && $('ul.nav a[href="' + hash + '"]').tab('show');

        $('.nav-tabs a').click(function (e) {
            $(this).tab('show');
            var scrollmem = $('body').scrollTop();
            window.location.hash = this.hash;
            $('html,body').scrollTop(scrollmem);
        });*/





		//Show dropdown on hover only for desktop devices
		//-----------------------------------------------
		var delay=0, setTimeoutConst;
		if ((Modernizr.mq('only all and (min-width: 768px)') && !Modernizr.touch) || $("html.ie8").length>0) {
			$('.main-navigation .navbar-nav>li.dropdown, .main-navigation li.dropdown>ul>li.dropdown').hover(
			function(){
				var $this = $(this);
				setTimeoutConst = setTimeout(function(){
					$this.addClass('open').slideDown();
					$this.find('.dropdown-toggle').addClass('disabled');
				}, delay);

			},	function(){
				clearTimeout(setTimeoutConst );
				$(this).removeClass('open');
				$(this).find('.dropdown-toggle').removeClass('disabled');
			});
		};

		//Show dropdown on click only for mobile devices
		//-----------------------------------------------
		if (Modernizr.mq('only all and (max-width: 767px)') || Modernizr.touch) {
			$('.main-navigation [data-toggle=dropdown], .header-top [data-toggle=dropdown]').on('click', function(event) {
			// Avoid following the href location when clicking
			event.preventDefault();
			// Avoid having the menu to close when clicking
			event.stopPropagation();
			// close all the siblings
			$(this).parent().siblings().removeClass('open');
			// close all the submenus of siblings
			$(this).parent().siblings().find('[data-toggle=dropdown]').parent().removeClass('open');
			// opening the one you clicked on
			$(this).parent().toggleClass('open');
			});
		};

		//Main slider
		//-----------------------------------------------

		//Revolution Slider
		if ($(".slider-banner-container").length>0) {

			$(".tp-bannertimer").show();

			$('.slider-banner-container .slider-banner').show().revolution({
				delay:10000,
				startwidth:1140,
				startheight:520,

				navigationArrows:"solo",

				navigationStyle: "round",
				navigationHAlign:"center",
				navigationVAlign:"bottom",
				navigationHOffset:0,
				navigationVOffset:20,

				soloArrowLeftHalign:"left",
				soloArrowLeftValign:"center",
				soloArrowLeftHOffset:20,
				soloArrowLeftVOffset:0,

				soloArrowRightHalign:"right",
				soloArrowRightValign:"center",
				soloArrowRightHOffset:20,
				soloArrowRightVOffset:0,

				fullWidth:"on",

				spinner:"spinner0",

				stopLoop:"off",
				stopAfterLoops:-1,
				stopAtSlide:-1,
				onHoverStop: "off",

				shuffle:"off",

				autoHeight:"off",
				forceFullWidth:"off",

				hideThumbsOnMobile:"off",
				hideNavDelayOnMobile:1500,
				hideBulletsOnMobile:"off",
				hideArrowsOnMobile:"off",
				hideThumbsUnderResolution:0,

				hideSliderAtLimit:0,
				hideCaptionAtLimit:0,
				hideAllCaptionAtLilmit:0,
				startWithSlide:0
			});

			$('.slider-banner-container .slider-banner-2').show().revolution({
				delay:10000,
				startwidth:1140,
				startheight:520,

				navigationArrows:"solo",

				navigationStyle: "preview4",
				navigationHAlign:"center",
				navigationVAlign:"bottom",
				navigationHOffset:0,
				navigationVOffset:20,

				soloArrowLeftHalign:"left",
				soloArrowLeftValign:"center",
				soloArrowLeftHOffset:20,
				soloArrowLeftVOffset:0,

				soloArrowRightHalign:"right",
				soloArrowRightValign:"center",
				soloArrowRightHOffset:20,
				soloArrowRightVOffset:0,

				fullWidth:"on",

				spinner:"spinner0",

				stopLoop:"off",
				stopAfterLoops:-1,
				stopAtSlide:-1,
				onHoverStop: "off",

				shuffle:"off",

				autoHeight:"off",
				forceFullWidth:"off",

				hideThumbsOnMobile:"off",
				hideNavDelayOnMobile:1500,
				hideBulletsOnMobile:"off",
				hideArrowsOnMobile:"off",
				hideThumbsUnderResolution:0,

				hideSliderAtLimit:0,
				hideCaptionAtLimit:0,
				hideAllCaptionAtLilmit:0,
				startWithSlide:0
			});

			$('.slider-banner-container .slider-banner-3').show().revolution({
				delay:10000,
				startwidth:1140,
				startheight:520,
				dottedOverlay: "twoxtwo",

				parallax:"mouse",
				parallaxBgFreeze:"on",
				parallaxLevels:[3,2,1],

				navigationArrows:"solo",

				navigationStyle: "preview5",
				navigationHAlign:"center",
				navigationVAlign:"bottom",
				navigationHOffset:0,
				navigationVOffset:20,

				soloArrowLeftHalign:"left",
				soloArrowLeftValign:"center",
				soloArrowLeftHOffset:20,
				soloArrowLeftVOffset:0,

				soloArrowRightHalign:"right",
				soloArrowRightValign:"center",
				soloArrowRightHOffset:20,
				soloArrowRightVOffset:0,

				fullWidth:"on",

				spinner:"spinner0",

				stopLoop:"off",
				stopAfterLoops:-1,
				stopAtSlide:-1,
				onHoverStop: "off",

				shuffle:"off",

				autoHeight:"off",
				forceFullWidth:"off",

				hideThumbsOnMobile:"off",
				hideNavDelayOnMobile:1500,
				hideBulletsOnMobile:"off",
				hideArrowsOnMobile:"off",
				hideThumbsUnderResolution:0,

				hideSliderAtLimit:0,
				hideCaptionAtLimit:0,
				hideAllCaptionAtLilmit:0,
				startWithSlide:0
			});

			$('.slider-banner-container .slider-banner-fullscreen').show().revolution({
				delay:10000,
				startwidth:1140,
				startheight:520,
				fullWidth:"off",
				fullScreen:"on",
				fullScreenOffsetContainer: "",
				fullScreenOffset: "82px",

				navigationArrows:"solo",

				navigationStyle: "preview4",
				navigationHAlign:"center",
				navigationVAlign:"bottom",
				navigationHOffset:0,
				navigationVOffset:20,

				soloArrowLeftHalign:"left",
				soloArrowLeftValign:"center",
				soloArrowLeftHOffset:20,
				soloArrowLeftVOffset:0,

				soloArrowRightHalign:"right",
				soloArrowRightValign:"center",
				soloArrowRightHOffset:20,
				soloArrowRightVOffset:0,

				spinner:"spinner4",

				stopLoop:"off",
				stopAfterLoops:-1,
				stopAtSlide:-1,
				onHoverStop: "off",

				shuffle:"off",
				hideTimerBar:"on",

				autoHeight:"off",
				forceFullWidth:"off",

				hideThumbsOnMobile:"off",
				hideNavDelayOnMobile:1500,
				hideBulletsOnMobile:"off",
				hideArrowsOnMobile:"off",
				hideThumbsUnderResolution:0,

				hideSliderAtLimit:0,
				hideCaptionAtLimit:0,
				hideAllCaptionAtLilmit:0,
				startWithSlide:0
			});

		};

		//Owl carousel
		//-----------------------------------------------
		if ($('.owl-carousel').length>0) {
			$(".owl-carousel.carousel").owlCarousel({
				items: 4,
				pagination: false,
				navigation: true,
				navigationText: false
			});
			$(".owl-carousel.carousel-autoplay").owlCarousel({
				items: 4,
				autoPlay: 5000,
				pagination: false,
				navigation: true,
				navigationText: false
			});
			$(".owl-carousel.clients").owlCarousel({
				items: 4,
				autoPlay: true,
				pagination: false,
				itemsDesktopSmall: [992,5],
				itemsTablet: [768,4],
				itemsMobile: [479,3]
			});
			$(".owl-carousel.content-slider").owlCarousel({
				singleItem: true,
				autoPlay: 5000,
				navigation: false,
				navigationText: false,
				pagination: false
			});
			$(".owl-carousel.content-slider-with-controls").owlCarousel({
				singleItem: true,
				autoPlay: false,
				navigation: true,
				navigationText: false,
				pagination: true
			});
			$(".owl-carousel.content-slider-with-controls-autoplay").owlCarousel({
				singleItem: true,
				autoPlay: 5000,
				navigation: true,
				navigationText: false,
				pagination: true
			});
			$(".owl-carousel.content-slider-with-controls-bottom").owlCarousel({
				singleItem: true,
				autoPlay: false,
				navigation: true,
				navigationText: false,
				pagination: true
			});
		};

		// Animations
		//-----------------------------------------------
		if (($("[data-animation-effect]").length>0) && !Modernizr.touch) {
			$("[data-animation-effect]").each(function() {
				var $this = $(this),
				animationEffect = $this.attr("data-animation-effect");
				if(Modernizr.mq('only all and (min-width: 768px)') && Modernizr.csstransitions) {
					$this.appear(function() {
						var delay = ($this.attr("data-effect-delay") ? $this.attr("data-effect-delay") : 1);
						if(delay > 1) $this.css("effect-delay", delay + "ms");
						setTimeout(function() {
							$this.addClass('animated object-visible ' + animationEffect);
						}, delay);
					}, {accX: 0, accY: -130});
				} else {
					$this.addClass('object-visible');
				}
			});
		};

		// Stats Count To
		//-----------------------------------------------
		if ($(".stats [data-to]").length>0) {
			$(".stats [data-to]").each(function() {
				var $this = $(this),
				offset = $this.offset().top;
				if($(window).scrollTop() > (offset - 800) && !($this.hasClass('counting'))) {
					$this.addClass('counting');
					$this.countTo();
				};
				$(window).scroll(function() {
					if($(window).scrollTop() > (offset - 800) && !($this.hasClass('counting'))) {
						$this.addClass('counting');
						$this.countTo();
					}
				});
			});
		};

		// Isotope filters
		//-----------------------------------------------
		if ($('.isotope-container').length>0 || $('.masonry-grid').length>0 || $('.masonry-grid-fitrows').length>0) {
			$(window).load(function() {
				$('.masonry-grid').isotope({
					itemSelector: '.masonry-grid-item',
					layoutMode: 'masonry'
				});
				$('.masonry-grid-fitrows').isotope({
					itemSelector: '.masonry-grid-item',
					layoutMode: 'fitRows'
				});
				$('.isotope-container').fadeIn();
				var $container = $('.isotope-container').isotope({
					itemSelector: '.isotope-item',
					layoutMode: 'masonry',
					transitionDuration: '0.6s',
					filter: "*"
				});
				// filter items on button click
				$('.filters').on( 'click', 'ul.nav li a', function() {
					var filterValue = $(this).attr('data-filter');
					$(".filters").find("li.active").removeClass("active");
					$(this).parent().addClass("active");
					$container.isotope({ filter: filterValue });
					return false;
				});
			});
		};

		//hc-tabs
		//-----------------------------------------------
		if ($('.hc-tabs').length>0) {
			$(window).load(function() {
				var currentTab = $(".hc-tabs .nav.nav-tabs li.active a").attr("href"),
				tabsImageAnimation = $(".hc-tabs-top").find("[data-tab='" + currentTab + "']").attr("data-tab-animation-effect");
				$(".hc-tabs-top").find("[data-tab='" + currentTab + "']").addClass("current-img show " + tabsImageAnimation + " animated");

				$('.hc-tabs .nav.nav-tabs li a').on('click', function(event) {
					var currentTab = $(this).attr("href"),
					tabsImageAnimation = $(".hc-tabs-top").find("[data-tab='" + currentTab + "']").attr("data-tab-animation-effect");
					$(".current-img").removeClass("current-img show " + tabsImageAnimation + " animated");
					$(".hc-tabs-top").find("[data-tab='" + currentTab + "']").addClass("current-img show " + tabsImageAnimation + " animated");
				});
			});

		}

		// Animated Progress Bars
		//-----------------------------------------------
		if ($("[data-animate-width]").length>0) {
			$("[data-animate-width]").each(function() {
				var $this = $(this);
				$this.appear(function() {
					$this.animate({
						width: $this.attr("data-animate-width")
					}, 800 );
				}, {accX: 0, accY: -100});
			});
		};

		// Animated Progress Bars
		//-----------------------------------------------
		if ($(".knob").length>0) {
			$(".knob").knob();
		}

		// Magnific popup
		//-----------------------------------------------
		if (($(".popup-img").length > 0) || ($(".popup-iframe").length > 0) || ($(".popup-img-single").length > 0)) {
			$(".popup-img").magnificPopup({
				type:"image",
				gallery: {
					enabled: true,
				}
			});
			$(".popup-img-single").magnificPopup({
				type:"image",
				gallery: {
					enabled: false,
				}
			});
			$('.popup-iframe').magnificPopup({
				disableOn: 700,
				type: 'iframe',
				preloader: false,
				fixedContentPos: false
			});
		};

		// Fixed header
		//-----------------------------------------------
		var	headerTopHeight = $(".header-top").outerHeight(),
		headerHeight = $("header.header.fixed").outerHeight();
		$(window).scroll(function() {
			if (($(".header.fixed").length > 0)) {
				if(($(this).scrollTop() > headerTopHeight+headerHeight) && ($(window).width() > 767)) {
					$("body").addClass("fixed-header-on");
					$(".header.fixed").addClass('animated object-visible fadeInDown');
					if ($(".banner:not(.header-top)").length>0) {
						$(".banner").css("marginTop", (headerHeight)+"px");
					} else if ($(".page-intro").length>0) {
						$(".page-intro").css("marginTop", (headerHeight)+"px");
					} else if ($(".page-top").length>0) {
						$(".page-top").css("marginTop", (headerHeight)+"px");
					} else {
						$("section.main-container").css("marginTop", (headerHeight)+"px");
					}
				} else {
					$("body").removeClass("fixed-header-on");
					$("section.main-container").css("marginTop", (0)+"px");
					$(".banner").css("marginTop", (0)+"px");
					$(".page-intro").css("marginTop", (0)+"px");
					$(".page-top").css("marginTop", (0)+"px");
					$(".header.fixed").removeClass('animated object-visible fadeInDown');
				}
			};
		});

		// Sharrre plugin
		//-----------------------------------------------
		if ($('#share').length>0) {
			$('#share').sharrre({
				share: {
					twitter: true,
					facebook: true,
					googlePlus: true
				},
				template: '<ul class="social-links clearfix"><li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li><li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li><li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li></ul>',
				enableHover: false,
				enableTracking: true,
				render: function(api, options){
					$(api.element).on('click', '.twitter a', function() {
						api.openPopup('twitter');
					});
					$(api.element).on('click', '.facebook a', function() {
						api.openPopup('facebook');
					});
					$(api.element).on('click', '.googleplus a', function() {
						api.openPopup('googlePlus');
					});
				}
			});
		};

		// Contact forms validation
		//-----------------------------------------------
		if($("#register-form").length>0) {
            $("#register-form").validate({
                submitHandler: function(form) {

                    var submitButton = $(this.submitButton);
                    submitButton.button("Ожидайте");

                    $.ajax({
                        type: "POST",
                        url: "/profile/register",
                        data: {
                            "fio": $("#register-form #fio").val(),
                            "password": $("#register-form #password").val(),
                            "position": $("#register-form #position").val(),
                            "specialty": $("#register-form #specialty").val(),
                            "phone": $("#register-form #phone").val(),
                            "email": $("#register-form #email").val(),
                            "city": $("#register-form #city").val(),
							"razdel_id": $("#register-form #razdel_id").val(),

							"spam_email": $("#register-form input[name=spam_email]:checked").val(),
							"spam_rheumatology": $("#register-form input[name=spam_rheumatology]:checked").val(),
							"spam_neurology": $("#register-form input[name=spam_neurology]:checked").val(),
							//"lso": $("#register-form input[name=lso]:checked").val(),
							//"loz": $("#register-form input[name=loz]:checked").val(),
							//"dzn": $("#register-form input[name=dzn]:checked").val(),
							"processing": $("#register-form input[name=processing]:checked").val()
                        },
                        dataType: "json",
                        success: function (data) {
                            if (data.response == "success") {

                                $("#registerSuccess").removeClass("hidden");
                                $("#registerError").addClass("hidden");

                                $("#register-form").hide();
                                // Reset Form
                                $("#register-form .form-control")
                                    .val("")
                                    .blur()
                                    .parent()
                                    .removeClass("has-success")
                                    .removeClass("has-error")
                                    .find("label")
                                    .removeClass("hide")
                                    .parent()
                                    .find("span.error")
                                    .remove();

                                if(($("#registerSuccess").position().top - 80) < $(window).scrollTop()){
                                    $("html, body").animate({
                                        scrollTop: $("#registerSuccess").offset().top - 80
                                    }, 300);
                                }

                            } else {

                                $("#registerError").removeClass("hidden");
                                $("#registerSuccess").addClass("hidden");

                                var message = '';

                                for (var prop in data.errors) {
                                    message = message + data.errors[prop] + '<br />';
                                }

                                $("#registerError").html('<strong>Ошибка</strong> ' + message);

                                if(($("#registerError").position().top - 80) < $(window).scrollTop()){
                                    $("html, body").animate({
                                        scrollTop: $("#registerError").offset().top - 80
                                    }, 300);

                                }

                            }
                        },
                        complete: function () {
                            submitButton.button("reset");
                        }
                    });
                },
                // debug: true,
                errorPlacement: function(error, element) {
                    error.insertBefore( element );
                },
                onkeyup: false,
                onclick: false,
                rules: {
                    fio: {
                        required: true,
                        minlength: 6
                    },
                    password: {
                        required: true,
                        minlength: 6
                    },
                    position: {
                        required: true,
                        minlength: 3
                    },
                    phone: {
                        required: true,
                        minlength: 7
                    },


                    email: {
                        required: true,
                        email: true
                    },
                    city: {
                        required: true
                    }
                },
                messages: {
                    fio: {
                        required: "Пожалуйста, укажите Ф.И.О",
                        minlength: "Ваше Ф.И.О должно быть больше, чем 6 символов"
                    },
                    password: {
                        required: "Пожалуйста, укажите пароль",
                        minlength: "Ваш пароль должно быть больше, чем 6 символов"
                    },
                    position: {
                        required: "Пожалуйста, укажите должность",
                        minlength: "Ваша должность должно быть больше, чем 3 символов"
                    },
                    phone: {
                        required: "Пожалуйста, укажите мобильный телефон",
                        minlength: "Ваш мобильный телефон должно быть больше, чем 7 символов"
                    },
                    email: {
                        required: "Пожалуйста, укажите электронную почту",
                        email: "Пожалуйста, введите корректный адрес электронной почты"
                    },
                    city: {
                        required: "Пожалуйста, укажите город"
                    }
                },
                errorElement: "span",
                highlight: function (element) {
                    $(element).parent().removeClass("has-success").addClass("has-error");
                    $(element).siblings("label").addClass("hide");
                },
                success: function (element) {
                    $(element).parent().removeClass("has-error").addClass("has-success");
                    $(element).siblings("label").removeClass("hide");
                }
            });
        };

        // ФОрма регистрации на конференцию
        if($("#register-conference-form").length>0) {
            $("#register-conference-form").validate({
                submitHandler: function(form) {

                    var submitButton = $(this.submitButton);
                    submitButton.button("Ожидайте");

                    $.ajax({
                        type: "POST",
                        url: "/registracia/send",
                        data: {
                            "name": $("#register-conference-form #name").val(),
                            "work": $("#register-conference-form #work").val(),
                            "position": $("#register-conference-form #position").val(),
                            "specialty": $("#register-conference-form #specialty").val(),
                            "telefon": $("#register-conference-form #telefon").val(),
                            "password": $("#register-conference-form #password").val(),
                            "email": $("#register-conference-form #email").val(),
                            "city": $("#register-conference-form #city").val(),
                            "reg_site" : $("#register-conference-form #reg_site").is(':checked') ? 1 : 0
                        },
                        dataType: "json",
                        success: function (data) {
                            if (data.response == "success") {

                                $("#registerSuccess").removeClass("hidden");
                                $("#registerError").addClass("hidden");

                                $("#register-conference-form").hide();
                                $(".tabs-style-2").hide();

                                // Reset Form
                                $("#register-conference-form .form-control")
                                    .val("")
                                    .blur()
                                    .parent()
                                    .removeClass("has-success")
                                    .removeClass("has-error")
                                    .find("label")
                                    .removeClass("hide")
                                    .parent()
                                    .find("span.error")
                                    .remove();

                                if(($("#registerSuccess").position().top - 80) < $(window).scrollTop()){
                                    $("html, body").animate({
                                        scrollTop: $("#registerSuccess").offset().top - 80
                                    }, 300);
                                }

                            } else {

                                $("#registerError").removeClass("hidden");
                                $("#registerSuccess").addClass("hidden");

                                var message = '';

                                for (var prop in data.errors) {
                                    message = message + data.errors[prop] + '<br />';
                                }



                                $("#registerError").html('<strong>Ошибка</strong> ' + message);

                                if(($("#registerError").position().top - 80) < $(window).scrollTop()){
                                    $("html, body").animate({
                                        scrollTop: $("#registerError").offset().top - 80
                                    }, 300);

                                }

                            }

                            if(data.userAdd == 1) {
                                $("#addUserSuccess").removeClass("hidden");
                            }
                            else if ( data.userAdd == 0 ) {
                                $("#userError").addClass("hidden");

                                $("#userError").removeClass("hidden");
                                $("#addUserSuccess").addClass("hidden");

                                var message = '';

                                for (var prop in data.userError) {
                                    message = message + data.userError[prop] + '<br />';
                                }

                                $("#userError").html('<strong>Ошибка при регистрации пользователя</strong> ' + message);

                                if(($("#userError").position().top - 80) < $(window).scrollTop()){
                                    $("html, body").animate({
                                        scrollTop: $("#userError").offset().top - 80
                                    }, 300);

                                }
                            }

                        },
                        complete: function () {
                            submitButton.button("reset");
                        }
                    });
                },
                // debug: true,
                errorPlacement: function(error, element) {
                    error.insertBefore( element );
                },
                onkeyup: false,
                onclick: false,
                rules: {
                    name: {
                        required: true,
                        minlength: 6
                    },
                    work: {
                        required: true,
                        minlength: 3
                    },
                    position: {
                        required: true,
                        minlength: 3
                    },
                    telefon: {
                        required: true,
                        minlength: 5
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    city: {
                        required: true
                    },
                    password: {
                        required: true,
                        minlength: 6
                    }
                },
                messages: {
                    name: {
                        required: "Пожалуйста, укажите Ф.И.О",
                        minlength: "Ваше Ф.И.О должно быть больше, чем 6 символов"
                    },
                    work: {
                        required: "Пожалуйста, укажите место работы",
                        minlength: "Ваш пароль должно быть больше, чем 6 символов"
                    },
                    position: {
                        required: "Пожалуйста, укажите должность",
                        minlength: "Ваша должность должно быть больше, чем 3 символов"
                    },
                    telefon: {
                        required: "Пожалуйста, укажите телефон",
                        minlength: "Ваш мобильный телефон должно быть больше, чем 7 символов"
                    },
                    email: {
                        required: "Пожалуйста, укажите электронную почту",
                        email: "Пожалуйста, введите корректный адрес электронной почты"
                    },
                    city: {
                        required: "Пожалуйста, укажите город"
                    },
                    password: {
                        required: "Пожалуйста, укажите пароль",
                        minlength: "Ваш пароль должно быть больше, чем 6 символов"
                    }
                },
                errorElement: "span",
                highlight: function (element) {
                    $(element).parent().removeClass("has-success").addClass("has-error");
                    $(element).siblings("label").addClass("hide");
                },
                success: function (element) {
                    $(element).parent().removeClass("has-error").addClass("has-success");
                    $(element).siblings("label").removeClass("hide");
                }
            });
        };

        // ФОрма регистрации на конференцию
        if($("#register-conference-form-2").length>0) {
            $("#register-conference-form-2").validate({
                submitHandler: function(form) {

                    var submitButton = $(this.submitButton);
                    submitButton.button("Ожидайте");

                    $.ajax({
                        type: "POST",
                        url: "/registracia/send",
                        data: {
                            "name": $("#register-conference-form-2 #name").val(),
                            "work": $("#register-conference-form-2 #work").val(),
                            "position": $("#register-conference-form-2 #position").val(),
                            "specialty": $("#register-conference-form-2 #specialty").val(),
                            "telefon": $("#register-conference-form-2 #telefon").val(),
                            "email": $("#register-conference-form-2 #email").val(),
                            "city": $("#register-conference-form-2 #city").val(),
                        },
                        dataType: "json",
                        success: function (data) {
                            if (data.response == "success") {

                                $("#registerSuccess").removeClass("hidden");
                                $("#registerError").addClass("hidden");

                                $("#register-conference-form-2").hide();
                                $(".tabs-style-2").hide();

                                // Reset Form
                                $("#register-conference-form-2 .form-control")
                                    .val("")
                                    .blur()
                                    .parent()
                                    .removeClass("has-success")
                                    .removeClass("has-error")
                                    .find("label")
                                    .removeClass("hide")
                                    .parent()
                                    .find("span.error")
                                    .remove();

                                if(($("#registerSuccess").position().top - 80) < $(window).scrollTop()){
                                    $("html, body").animate({
                                        scrollTop: $("#registerSuccess").offset().top - 80
                                    }, 300);
                                }

                            } else {

                                $("#registerError").removeClass("hidden");
                                $("#registerSuccess").addClass("hidden");

                                var message = '';

                                for (var prop in data.errors) {
                                    message = message + data.errors[prop] + '<br />';
                                }



                                $("#registerError").html('<strong>Ошибка</strong> ' + message);

                                if(($("#registerError").position().top - 80) < $(window).scrollTop()){
                                    $("html, body").animate({
                                        scrollTop: $("#registerError").offset().top - 80
                                    }, 300);

                                }

                            }
                        },
                        complete: function () {
                            submitButton.button("reset");
                        }
                    });
                },
                // debug: true,
                errorPlacement: function(error, element) {
                    error.insertBefore( element );
                },
                onkeyup: false,
                onclick: false,
                rules: {
                    name: {
                        required: true,
                        minlength: 6
                    },
                    work: {
                        required: true,
                        minlength: 3
                    },
                    position: {
                        required: true,
                        minlength: 3
                    },
                    telefon: {
                        required: true,
                        minlength: 5
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    city: {
                        required: true
                    }
                },
                messages: {
                    name: {
                        required: "Пожалуйста, укажите Ф.И.О",
                        minlength: "Ваше Ф.И.О должно быть больше, чем 6 символов"
                    },
                    work: {
                        required: "Пожалуйста, укажите место работы",
                        minlength: "Ваш пароль должно быть больше, чем 6 символов"
                    },
                    position: {
                        required: "Пожалуйста, укажите должность",
                        minlength: "Ваша должность должно быть больше, чем 3 символов"
                    },
                    telefon: {
                        required: "Пожалуйста, укажите телефон",
                        minlength: "Ваш мобильный телефон должно быть больше, чем 7 символов"
                    },
                    email: {
                        required: "Пожалуйста, укажите электронную почту",
                        email: "Пожалуйста, введите корректный адрес электронной почты"
                    },
                    city: {
                        required: "Пожалуйста, укажите город"
                    },

                },
                errorElement: "span",
                highlight: function (element) {
                    $(element).parent().removeClass("has-success").addClass("has-error");
                    $(element).siblings("label").addClass("hide");
                },
                success: function (element) {
                    $(element).parent().removeClass("has-error").addClass("has-success");
                    $(element).siblings("label").removeClass("hide");
                }
            });
        };

        // Comment form
        if($("#comment-form").length>0) {
            $("#comment-form").validate({
                submitHandler: function(form) {

                    var submitButton = $(this.submitButton);
                    submitButton.button("Ожидайте");

                    $.ajax({
                        type: "POST",
                        url: "/ajax/comment/add",
                        data: {
                            "scope": $("#comment-form #scope").val(),
                            "reply": $("#comment-form #reply").val(),
                            "commentTitle": $("#comment-form #commentTitle").val(),
                            "commentText": $("#comment-form #commentText").val()
                        },
                        dataType: "json",
                        success: function (data) {
                            if (data.success == true) {

                                $("#commentSuccess").removeClass("hidden");
                                $("#commentError").addClass("hidden");

                                $(".comments-form").hide();
                                // Reset Form
                                $("#register-form .form-control")
                                    .val("")
                                    .blur()
                                    .parent()
                                    .removeClass("has-success")
                                    .removeClass("has-error")
                                    .find("label")
                                    .removeClass("hide")
                                    .parent()
                                    .find("span.error")
                                    .remove();

                                if(($("#commentSuccess").position().top - 80) < $(window).scrollTop()){
                                    $("html, body").animate({
                                        scrollTop: $("#commentSuccess").offset().top - 80
                                    }, 300);
                                }

                            } else {

                                $("#registerError").removeClass("hidden");
                                $("#registerSuccess").addClass("hidden");

                                var message = '';

                                for (var prop in data.errors) {
                                    message = message + data.errors[prop] + '<br />';
                                }

                                $("#registerError").html('<strong>Ошибка</strong> ' + message);

                                if(($("#registerError").position().top - 80) < $(window).scrollTop()){
                                    $("html, body").animate({
                                        scrollTop: $("#registerError").offset().top - 80
                                    }, 300);

                                }

                            }
                        },
                        complete: function () {
                            submitButton.button("reset");
                        }
                    });
                },
                // debug: true,
                errorPlacement: function(error, element) {
                    error.insertBefore( element );
                },
                onkeyup: false,
                onclick: false,
                rules: {
                    commentText: {
                        required: true,
                        minlength: 10
                    }
                },
                messages: {
                    commentText: {
                        required: "Пожалуйста, укажите текст комметария",
                        minlength: "Ваш текст комметария должно быть больше, чем 10 символов"
                    }
                },
                errorElement: "span",
                highlight: function (element) {
                    $(element).parent().removeClass("has-success").addClass("has-error");
                    $(element).siblings("label").addClass("hide");
                },
                success: function (element) {
                    $(element).parent().removeClass("has-error").addClass("has-success");
                    $(element).siblings("label").removeClass("hide");
                }
            });
        };
        // <-- comment form

        // feedback
        if($("#feedback-form").length>0) {
            $("#feedback-form").validate({
                submitHandler: function(form) {

                    var submitButton = $(this.submitButton);
                    submitButton.button("Ожидайте");

                    $.ajax({
                        type: "POST",
                        url: "/ajax/feedback",
                        data: {
                            "name": $("#feedback-form #name").val(),
                            "email": $("#feedback-form #email").val(),
                            "message": $("#feedback-form #message").val()
                        },
                        dataType: "json",
                        success: function (data) {
                            if (data.success == true) {

                                $("#feedback-form").remove();
                                $('#feedbackModal #message-send').removeClass('hidden');

                               //
                                // Reset Form
                                $("#register-form .form-control")
                                    .val("")
                                    .blur()
                                    .parent()
                                    .removeClass("has-success")
                                    .removeClass("has-error")
                                    .find("label")
                                    .removeClass("hide")
                                    .parent()
                                    .find("span.error")
                                    .remove();

                                if(($("#registerSuccess").position().top - 80) < $(window).scrollTop()){
                                    $("html, body").animate({
                                        scrollTop: $("#registerSuccess").offset().top - 80
                                    }, 300);
                                }

                            } else {

                                $("#registerError").removeClass("hidden");
                                $("#registerSuccess").addClass("hidden");

                                var message = '';

                                for (var prop in data.errors) {
                                    message = message + data.errors[prop] + '<br />';
                                }

                                $("#registerError").html('<strong>Ошибка</strong> ' + message);

                                if(($("#registerError").position().top - 80) < $(window).scrollTop()){
                                    $("html, body").animate({
                                        scrollTop: $("#registerError").offset().top - 80
                                    }, 300);

                                }

                            }
                        },
                        complete: function () {
                            submitButton.button("reset");
                        }
                    });
                },
                // debug: true,
                errorPlacement: function(error, element) {
                    error.insertBefore( element );
                },
                onkeyup: false,
                onclick: false,
                rules: {
                    name: {
                        required: true,
                        minlength: 4
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
                messages: {
                    name: {
                        required: "Пожалуйста, укажите Ваше имя",
                        minlength: "Имя должно быть больше, чем 4 символа"
                    },
                    email: {
                        required: "Пожалуйста, укажите электронную почту",
                        email: "Пожалуйста, введите корректный адрес электронной почты"
                    },
                    city: {
                        minlength: "Сообщение должно быть больше, чем 10 символов",
                        required: "Пожалуйста, укажите сообщение"
                    }
                },
                errorElement: "span",
                highlight: function (element) {
                    $(element).parent().removeClass("has-success").addClass("has-error");
                    $(element).siblings("label").addClass("hide");
                },
                success: function (element) {
                    $(element).parent().removeClass("has-error").addClass("has-success");
                    $(element).siblings("label").removeClass("hide");
                }
            });
        };
        // feedback

		if($("#sidebar-form").length>0) {

			$("#sidebar-form").validate({
				submitHandler: function(form) {

					var submitButton = $(this.submitButton);
					submitButton.button("loading");

					$.ajax({
						type: "POST",
						url: "php/contact-form.php",
						data: {
							"name": $("#sidebar-form #name3").val(),
							"email": $("#sidebar-form #email3").val(),
							"subject": "Message from FAQ page",
							"category": $("#sidebar-form #category").val(),
							"message": $("#sidebar-form #message3").val()
						},
						dataType: "json",
						success: function (data) {
							if (data.response == "success") {

								$("#contactSuccess3").removeClass("hidden");
								$("#contactError3").addClass("hidden");

								// Reset Form
								$("#sidebar-form .form-control")
									.val("")
									.blur()
									.parent()
									.removeClass("has-success")
									.removeClass("has-error")
									.find("label")
									.removeClass("hide")
									.parent()
									.find("span.error")
									.remove();

								if(($("#contactSuccess3").position().top - 80) < $(window).scrollTop()){
									$("html, body").animate({
										 scrollTop: $("#contactSuccess3").offset().top - 80
									}, 300);
								}

							} else {

								$("#contactError3").removeClass("hidden");
								$("#contactSuccess3").addClass("hidden");

								if(($("#contactError3").position().top - 80) < $(window).scrollTop()){
									$("html, body").animate({
										 scrollTop: $("#contactError3").offset().top - 80
									}, 300);
								}

							}
						},
						complete: function () {
							submitButton.button("reset");
						}
					});
				},
				// debug: true,
				errorPlacement: function(error, element) {
					error.insertAfter( element );
				},
				onkeyup: false,
				onclick: false,
				rules: {
					name3: {
						required: true,
						minlength: 2
					},
					email3: {
						required: true,
						email: true
					},
					message3: {
						required: true,
						minlength: 10
					}
				},
				messages: {
					name3: {
						required: "Please specify your name",
						minlength: "Your name must be longer than 2 characters"
					},
					email3: {
						required: "We need your email address to contact you",
						email: "Please enter a valid email address e.g. name@domain.com"
					},
					message3: {
						required: "Please enter a message",
						minlength: "Your message must be longer than 10 characters"
					}
				},
				errorElement: "span",
				highlight: function (element) {
					$(element).parent().removeClass("has-success").addClass("has-error");
				},
				success: function (element) {
					$(element).parent().removeClass("has-error").addClass("has-success");
				}
			});

		};

		// Affix plugin
		//-----------------------------------------------
		if ($("#affix").length>0) {
			$(window).load(function() {

				var affixBottom = $(".footer").outerHeight(true) + $(".subfooter").outerHeight(true) + $(".blogpost footer").outerHeight(true),
				affixTop = $("#affix").offset().top;

				if ($(".comments").length>0) {
					affixBottom = affixBottom + $(".comments").outerHeight(true);
				}

				if ($(".comments-form").length>0) {
					affixBottom = affixBottom + $(".comments-form").outerHeight(true);
				}

				if ($(".footer-top").length>0) {
					affixBottom = affixBottom + $(".footer-top").outerHeight(true);
				}

				if ($(".header.fixed").length>0) {
					$("#affix").affix({
				        offset: {
				          top: affixTop-150,
				          bottom: affixBottom+100
				        }
				    });
				} else {
					$("#affix").affix({
				        offset: {
				          top: affixTop-35,
				          bottom: affixBottom+100
				        }
				    });
				}

			});
		}
		if ($(".affix-menu").length>0) {
			setTimeout(function () {
				var $sideBar = $('.sidebar')

				$sideBar.affix({
					offset: {
						top: function () {
							var offsetTop      = $sideBar.offset().top
							return (this.top = offsetTop - 65)
						},
						bottom: function () {
							var affixBottom = $(".footer").outerHeight(true) + $(".subfooter").outerHeight(true)
							if ($(".footer-top").length>0) {
								affixBottom = affixBottom + $(".footer-top").outerHeight(true)
							}
							return (this.bottom = affixBottom+50)
						}
					}
				})
			}, 100)
		}

		//Smooth Scroll
		//-----------------------------------------------
		if ($(".smooth-scroll").length>0) {
			if($(".header.fixed").length>0) {
				$('.smooth-scroll a[href*=#]:not([href=#]), a[href*=#]:not([href=#]).smooth-scroll').click(function() {
					if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
						var target = $(this.hash);
						target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
						if (target.length) {
							$('html,body').animate({
								scrollTop: target.offset().top-65
							}, 1000);
							return false;
						}
					}
				});
			} else {
				$('.smooth-scroll a[href*=#]:not([href=#]), a[href*=#]:not([href=#]).smooth-scroll').click(function() {
					if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
						var target = $(this.hash);
						target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
						if (target.length) {
							$('html,body').animate({
								scrollTop: target.offset().top
							}, 1000);
							return false;
						}
					}
				});
			}
		}

		//Scroll Spy
		//-----------------------------------------------
		if($(".scrollspy").length>0) {
			$("body").addClass("scroll-spy");
			if($(".fixed.header").length>0) {
				$('body').scrollspy({
					target: '.scrollspy',
					offset: 85
				});
			} else {
				$('body').scrollspy({
					target: '.scrollspy',
					offset: 20
				});
			}
		}

		//Scroll totop
		//-----------------------------------------------
		$(window).scroll(function() {
			if($(this).scrollTop() != 0) {

				$("#site_razdel_panel").fadeOut();
				$(".scrollToTop").fadeIn();
			} else {
				$("#site_razdel_panel").fadeIn();
				$(".scrollToTop").fadeOut();
			}
		});

		$(window).scroll(function() {
			if($(this).scrollTop() != 0) {

				$("#site_razdel_panel_1").fadeOut();
				$(".scrollToTop").fadeIn();
			} else {
				$("#site_razdel_panel_1").fadeIn();
				$(".scrollToTop").fadeOut();
			}
		});

		$(window).scroll(function() {
			if($(this).scrollTop() != 0) {

				$("#site_razdel_panel_2").fadeOut();
				$(".scrollToTop").fadeIn();
			} else {
				$("#site_razdel_panel_2").fadeIn();
				$(".scrollToTop").fadeOut();
			}
		});

		$(window).scroll(function() {
			if($(this).scrollTop() != 0) {

				$("#site_razdel_panel_3").fadeOut();
				$(".scrollToTop").fadeIn();
			} else {
				$("#site_razdel_panel_3").fadeIn();
				$(".scrollToTop").fadeOut();
			}
		});

		$(".scrollToTop").click(function() {
			$("body,html").animate({scrollTop:0},800);
		});

		//Modal
		//-----------------------------------------------
		if($(".modal").length>0) {
			$(".modal").each(function() {
				$(".modal").prependTo( "body" );
			});
		}

		// Pricing tables popovers
		//-----------------------------------------------
		if ($(".pricing-tables").length>0) {
			$(".plan .pt-popover").popover({
				trigger: 'hover'
			});
		};

		// Parallax section
		//-----------------------------------------------
		if (($(".parallax").length>0)  && !Modernizr.touch ){
			$(".parallax").parallax("50%", 0.2, false);
		};

		// Remove Button
		//-----------------------------------------------
		$(".btn-remove").click(function() {
			$(this).closest(".remove-data").remove();
		});

		// Shipping Checkbox
		//-----------------------------------------------
		if ($("#shipping-info-check").is(':checked')) {
			$("#shipping-information").hide();
		}
		$("#shipping-info-check").change(function(){
			if ($(this).is(':checked')) {
				$("#shipping-information").slideToggle();
			} else {
				$("#shipping-information").slideToggle();
			}
		});

		//This will prevent the event from bubbling up and close the dropdown when you type/click on text boxes (Header Top).
		//-----------------------------------------------
		$('.header-top .dropdown-menu input').click(function(e) {
			e.stopPropagation();
		});

		var wrapWidth = $(document).find('.hexagon-elements-wrap').parent().width();
		var hexagonWidth = $(this).find('.single-hexagon-element:first').width()+4;
		var itemCount = $(this).find('.single-hexagon-element').length;
		var itemsInRow = parseInt(wrapWidth / hexagonWidth);
		if(itemsInRow < 1){
			itemsInRow = 1;
		}
		itemsInRowGlobal = itemsInRow;
		portHexagonSet(itemsInRow, itemCount, wrapWidth);


		// Fancybox

		$('.fancybox').fancybox({
			openEffect: 'none',
			protect: true
		});

		var today = new Date();
		var year = today.getFullYear();
		var month = today.getMonth()+1;
		var dates = {year: year, month: month};
		getCalendarEvents(dates);
		// var data = [
		// 	{ "date": "2020-12-21 10:15:20", "title": "Событие 1", "description": "Какая-то конфа или еще что-то", "url": "http://www.test.com/" },
		// 	{ "date": "2020-12-21 11:15:20", "title": "Событие 2", "description": "Какая-то конфа или еще что-то", "url": "" },
		// 	{ "date": "2020-12-21 12:15:20", "title": "Событие 3", "description": "Какая-то конфа или еще что-то", "url": "http://www.test.com/" },
		// 	{ "date": "2020-12-25 10:15:20", "title": "Событие 4", "description": "Какая-то конфа или еще что-то", "url": "http://www.test.com/" },
		// ];

	}); // End document ready

})(this.jQuery);

$(window).resize(function(){
	var wrapWidth = $(document).find('.hexagon-elements-wrap').width();
	var hexagonWidth = $(document).find('.single-hexagon-element:first').width()+4;
	var itemCount = $(document).find('.single-hexagon-element').length;
	var itemsInRow = parseInt(wrapWidth / hexagonWidth);
	if(itemsInRow != itemsInRowGlobal) {
		$(document).find('.hexagon-elements-wrap').find('br').each(function(){
			$(this).remove();
		});
		if(itemsInRow < 1){
			itemsInRow = 1;
		}
		itemsInRowGlobal = itemsInRow;
		portHexagonSet(itemsInRow, itemCount, wrapWidth);
	}
});
function portHexagonSet(itemsInRow, itemCount, wrapWidth){

	$(document).find('.hexagon-elements-wrap').find('br').each(function(){
		$(this).remove();
	});
	var parS = false;
	var itemCounter = 0;
	var curentItemEven = (itemsInRow-2)+itemCounter;
	var curentItemOdd = (itemsInRow-1)+itemCounter;
	var defaultCssValue = $(document).find('.hexagon').css('height');
	if(wrapWidth < 500){
		$(document).find('.hexagon-elements-wrap .single-hexagon-element').each(function(){
			$(this).addClass('single-hex');
			$(this).addClass('fullwidth');
			$(this).find('.hexagon').addClass('fullwidth');
			var hexHeight = $('.hexagon.fullwidth').width() * 2;
			var hexMargin = -90*$(this).width() /162;
			$(this).find('.hexagon.fullwidth').css({height : hexHeight, marginTop: hexMargin, marginBottom: hexMargin});
			var $singleBlockHeight = ( $(this).width() ) * 24/162;
			$(this).css({paddingTop : $singleBlockHeight, paddingBottom: $singleBlockHeight});
		});
	}
	else{
		$(document).find('.hexagon-elements-wrap .single-hexagon-element').each(function(){
			$(this).find('.hexagon.fullwidth').css({height : hexHeight, marginTop: -136, marginBottom: -136});
			$(this).removeClass('single-hex');
			$(this).removeClass('fullwidth');
			$(this).find('.hexagon').removeClass('fullwidth');
			var hexHeight = $('.hexagon').width() * 2;
			$(this).find('.hexagon').css({height : hexHeight});
			$(this).css({margin : 0, padding: 0});
		});
	}

	while(itemCounter < itemCount) {

		if(parS == false){
			$('<br />').insertAfter($('.hexagon-elements-wrap').find('.single-hexagon-element').eq(curentItemEven));
			if(itemsInRow != 1) parS = true;
			itemCounter = curentItemEven
		}
		else {
			$('<br />').insertAfter($('.hexagon-elements-wrap').find('.single-hexagon-element').eq(curentItemEven));
			parS = false;
			itemCounter = curentItemOdd
		}
		curentItemEven = itemsInRow + itemCounter;
		curentItemOdd = (itemsInRow-1) + itemCounter;
	}
	var hexWidth = $('.single-hexagon-element').outerWidth()+6;
	$('.hexagon-elements-wrap').find('br:last + .single-hexagon-element').css({marginLeft : -hexWidth});
}

if (jQuery(".btn-print").length>0) {
	function print_window() {
		var mywindow = window;
		mywindow.document.close();
		mywindow.focus();
		mywindow.print();
		mywindow.close();
	}
}

function replyComment( id ) {
    $("html, body").animate({
        scrollTop: $(".comments-form").offset().top - 180
    }, 400);

    if( id > 0 ) {

        $('.comments-form .title').text('Добавить ответ на комментарий:');
        $('.comments-form #reply-comment-text')
            .html( '<blockquote><p>' + $('#comment-text-' + id).text() + '</p><footer><cite title="Source Title">' +$('#comment-author-' + id ).text() + '</cite></footer></blockquote>')
            .removeClass('hidden');
        // <small>dsfs</small>
        $('#comment-form #reply').val(id);
    }
    
    $( "#comment-form #commentTitle" ).focus();
}

function refreshComment(controller, subject_id, is_comments) {

	$.ajax({
		type: "POST",
		url: "/ajax/comment/refresh",
		data: {
			"controller": controller,
			"subject_id": subject_id,
			"is_comments": is_comments
		},
		success: function (data) {

			$("#commentSuccess").addClass("hidden");
			// Почистим поля
			$("#comment-form #reply").val( $('#firstID').attr('firstID') );
			$("#comment-form #commentTitle").val('');
			$("#comment-form #commentText").val('');
			$('.comments-form .title').text('Написать комментарий');
			$('.comments-form #reply-comment-text').html('').hide();
			// Показываем форму
			$(".comments-form").show();
			$('#comment').html(data);

		},
		complete: function () {
			//submitButton.button("reset");
		}
	});

	///

}


function adminComment( action, id ) {

    if( action == 'delete' ) {
        if ( ! confirm("Прежде чем удалить, комментарий удалите все ответы")) {
            return false;
        }
    }

    $.ajax({
        type: "POST",
        url: "/ajax/comment",
        data: {
            "action": action,
            "id": id
        },
        dataType: "json",
        success: function (data) {
            if (data.success == true) {
                location.reload();
            }
        },
        complete: function () {
            //submitButton.button("reset");
        }
    });

}

function registraciaConference()
{
    if ($("#register-conference-form #reg_site").is(":checked")) {
        $('#register-conference-form #register').removeClass('hidden');
    }
    else {
        $('#register-conference-form #register').addClass('hidden');
    }
}

function getIndexPageNews( pageNum ) {
	$.ajax({
		type: "POST",
		url: "/ajax/news/index",
		data: { "page": pageNum },
		success: function(data){

			$('#indexNews').html(data);
		}
	});
}

function setUrlCalendar(url) {
	urlCalendar = url;
}

function getCalendarEvents(dates) {
	$.ajax({
		type: 'GET',
		url: urlCalendar,
		data: dates,
		dataType: 'json'
	}).done(function(response) {
		var events = [];
		$.each(response.data, function (k, v) {
			events.push(response.data[k]);
		});
		drawCalendar(events);
	});
}

function drawCalendar(data) {
	$('#eventCalendar').eventCalendar({
		jsonData: data,
		eventsjson: 'data.json',
		jsonDateFormat: 'human',
		startWeekOnMonday: true,
		openEventInNewWindow: false,
		dateFormat: 'DD-MM-YYYY',
		showDescription: false,
		locales: {
			locale: "ru",
			txt_noEvents: "Нет запланированных событий",
			txt_SpecificEvents_prev: "",
			txt_SpecificEvents_after: "события:",
			txt_NextEvents: "Следующие события:",
			txt_GoToEventUrl: "Смотреть",
			moment: {
				"months" : [ "Январь", "Февраль", "Март", "Апрель", "Май", "Июнь",
					"Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь" ],
				"monthsShort" : [ "Янв", "Фев", "Мар", "Апр", "Май", "Июн",
					"Июл", "Авг", "Сен", "Окт", "Ноя", "Дек" ],
				"weekdays" : [ "Воскресенье", "Понедельник","Вторник","Среда","Четверг",
					"Пятница","Суббота" ],
				"weekdaysShort" : [ "Вс","Пн","Вт","Ср","Чт",
					"Пт","Сб" ],
				"weekdaysMin" : [ "Вс","Пн","Вт","Ср","Чт",
					"Пт","Сб" ]
			}
		}
	});
}


