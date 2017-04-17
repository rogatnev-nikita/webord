function sendform() {
    console.log('function sendform');
    var msg = $('#contactform').serialize();
    document.contactform.submit.disabled = true;
    document.contactform.submit.value = "Подождите...";
    $.ajax({
        type: 'POST',
        url: "http://webord.ru/mail/contact.php",
        data: msg + "&action=sendform",
        cache: false,
        success: function(data) {
            console.log('error');
            $("#error").html(data);
            document.contactform.submit.disabled = false;
            document.contactform.submit.value = "Отправить";
        }
    });
}

function clsmesg(tre) {
    $(tre).parent().slideUp(350);
}

function inputClickDisabled(d) {

    var num = 0;
    $(".order_form_2 input:disabled + label").click(function() {
        num++;
        if (num == 1) $(".note_form").css('opacity', '1').text('Вы можете выбрать не более 2х вариантов одновременно.');
        if (num == 2) $(".note_form").css('opacity', '1').text('Настойчивость - важное качество Заказчика.');
        if (num == 3) $(".note_form").css('opacity', '1').text('Вообще мы проверяли эту форму много раз, но что-то могло сломаться...');
        if (num == 4) $(".note_form").css('opacity', '1').text('13070 человек нажали эту кнопку не менее четырех раз. Поздравляем, вы один из них.');
        if (num == 5) $(".note_form").css('opacity', '1').text('С вами был я, спасибо за внимание.Ты кто такой?! Давай до свидания!');
    });

}


function inputCountChecked() {
    var inputNum = $(".step0 input:checked");
    console.log('function inputCountChecked');
    console.log(inputNum.length);
    return inputNum.length;
}


function inputCountCheckedFortwo() {
    var inputNum = $(".step0_2 input:checked");
    console.log('function inputCountCheckedFortwo');
    console.log(inputNum.length);
    return inputNum.length;

}
    
    
    

function init() {

    $('input', '.step0').on('click', function() {
		
		$('.note_form').show();
		$('#error_form').html('');	
		
        var form = $(this).parents('.form'),
            firstStep = $('.step0', form),
            l = $('input:checked', firstStep),
            note = $('.note_form_2', firstStep),
            num = 0,
            i = inputCountChecked(firstStep);
        if (i == 2) {
            $("input:not(:checked)", firstStep).attr('disabled', 'disabled');
            $("input:not(:checked) + label", firstStep).attr('disabled', 'disabled').addClass('disabled');
            $(".evaluate", form).css('display', 'block');
            $(".step1").css('display', 'block');
        } else {
            $("input:not(:checked)", firstStep).removeAttr('disabled', 'disabled');
            $("input:not(:checked) + label", firstStep).removeAttr('disabled', 'disabled').removeClass('disabled');
            $(".evaluate", form).css('display', 'none');
            $(".step1").css('display', 'none');
        }
        if (i == 0) {
            $(note).css('opacity', '0');
        }
        if (i == 1) {
            if (l.val() == 'быстро') {
                $(note).css('opacity', '1').text('Отлично, мы тоже ценим ваше время.');
            } else if (l.val() == 'дешево') {
                $(note).css('opacity', '1').text('Что ж, этого стоило ожидать.');
            } else if (l.val() == 'качественно') {
                $(note).css('opacity', '1').text('По-другому мы не работаем.');
            }
        }
        if (i == 2) {
            var s = "";
            for (var j = 0; j < l.length; j++) {
                var o = l[j];
                s = s + o.value + " ";
            }
            s = $.trim(s);
            if (s == "быстро дешево") {
                $(note).css('opacity', '1').text('Отбросим все лишнее, оставив только самое необходимое.');
            } else if (s == "быстро качественно") {
                $(note).css('opacity', '1').text('Это верный подход. Мы обожаем большие бюджеты!');
            } else if (s == "дешево быстро") {
                $(note).css('opacity', '1').text('Отбросим все лишнее, оставив только самое необходимое.');
            } else if (s == "дешево качественно") {
                $(note).css('opacity', '1').text('Вы никуда не торопитесь, и времени на проект предостаточно, верно?');
            } else if (s == "качественно быстро") {
                $(note).css('opacity', '1').text('Это верный подход. Мы обожаем большие бюджеты!');
            } else if (s == "качественно дешово") {
                $(note).css('opacity', '1').text('Вы никуда не торопитесь, и времени на проект предостаточно, верно?');
            }
        }
        $("input:disabled + label", firstStep).on('click', function() {
            num++;
            if (num == 1) $(note).css('opacity', '1').text('Вы можете выбрать не более 2х вариантов одновременно.');
            if (num == 2) $(note).css('opacity', '1').text('Настойчивость - важное качество Заказчика.');
            if (num == 3) $(note).css('opacity', '1').text('Вообще мы проверяли эту форму много раз, но что-то могло сломаться...');
            if (num == 4) $(note).css('opacity', '1').text('13070 человек нажали эту кнопку не менее четырех раз. Поздравляем, вы один из них.');
            if (num == 5) $(note).css('opacity', '1').text('С вами был я, спасибо за внимание.Ты кто такой?! Давай до свидания!');
        });
    });








    $('input', '.step0_2').on('click', function() {
		
		$('.note_form').show();
		$('#error_form').html('');
		
        var form = $(this).parents('.form'),
            firstStep = $('.step0_2', form),
            l = $('input:checked', firstStep),
            note = $('.note_form', firstStep),
            num = 0,
            i = inputCountCheckedFortwo(firstStep);
        if (i == 2) {
            $("input:not(:checked)", firstStep).attr('disabled', 'disabled');
            $("input:not(:checked) + label", firstStep).attr('disabled', 'disabled').addClass('disabled');
            $(".evaluate", form).css('display', 'block');
            $(".step2").css('display', 'block');
        } else {
            $("input:not(:checked)", firstStep).removeAttr('disabled', 'disabled');
            $("input:not(:checked) + label", firstStep).removeAttr('disabled', 'disabled').removeClass('disabled');
            $(".evaluate", form).css('display', 'none');
            $(".step2").css('display', 'none');
        }
        if (i == 0) {
            $(note).css('opacity', '0');
        }
        if (i == 1) {
            if (l.val() == 'быстро') {
                $(note).css('opacity', '1').text('Отлично, мы тоже ценим ваше время.');
            } else if (l.val() == 'дешево') {
                $(note).css('opacity', '1').text('Что ж, этого стоило ожидать.');
            } else if (l.val() == 'качественно') {
                $(note).css('opacity', '1').text('По-другому мы не работаем.');
            }
        }
        if (i == 2) {
            var s = "";
            for (var j = 0; j < l.length; j++) {
                var o = l[j];
                s = s + o.value + " ";
            }
            s = $.trim(s);
            if (s == "быстро дешево") {
                $(note).css('opacity', '1').text('Отбросим все лишнее, оставив только самое необходимое.');
            } else if (s == "быстро качественно") {
                $(note).css('opacity', '1').text('Это верный подход. Мы обожаем большие бюджеты!');
            } else if (s == "дешево быстро") {
                $(note).css('opacity', '1').text('Отбросим все лишнее, оставив только самое необходимое.');
            } else if (s == "дешево качественно") {
                $(note).css('opacity', '1').text('Вы никуда не торопитесь, и времени на проект предостаточно, верно?');
            } else if (s == "качественно быстро") {
                $(note).css('opacity', '1').text('Это верный подход. Мы обожаем большие бюджеты!');
            } else if (s == "качественно дешово") {
                $(note).css('opacity', '1').text('Вы никуда не торопитесь, и времени на проект предостаточно, верно?');
            }
        }
        $("input:disabled + label", firstStep).on('click', function() {
            num++;
            if (num == 1) $(note).css('opacity', '1').text('Вы можете выбрать не более 2х вариантов одновременно.');
            if (num == 2) $(note).css('opacity', '1').text('Настойчивость - важное качество Заказчика.');
            if (num == 3) $(note).css('opacity', '1').text('Вообще мы проверяли эту форму много раз, но что-то могло сломаться...');
            if (num == 4) $(note).css('opacity', '1').text('13070 человек нажали эту кнопку не менее четырех раз. Поздравляем, вы один из них.');
            if (num == 5) $(note).css('opacity', '1').text('С вами был я, спасибо за внимание.Ты кто такой?! Давай до свидания!');
        });
    });


	/*

    $('.order_form_2 .btn').click(function() {
		
        if ($(this).hasClass('btn_step0_2')) {
            $(this).removeClass('btn_step0_2').addClass('btn_step1_2');
            $('.step1_2').slideDown(500);
            $('html, body').animate({
                scrollTop: $(".step1_2").offset().top - 30
            }, 500);;
        } else if ($(this).hasClass('btn_step1_2')) {
            $(this).removeClass('btn_step1_2').addClass('btn_step2_2');
            $('.step2_2').slideDown(500);
            $('html, body').animate({
                scrollTop: $(".step2_2").offset().top - 30
            }, 500);
        } else if ($(this).hasClass('btn_step2_2')) {
            $(this).css('display', 'none');
            $('.step3_2').slideDown(500);
            $('.btn_sendform_2').css('display', 'block');
            $('html, body').animate({
                scrollTop: $(".step3_2").offset().top - 30
            }, 500);;
        }

    });
	
	*/
	
	

    $('.evaluate', '.form').click(function() {
      
		var form = $(this).parents('.form');
		
        if ($(this).hasClass('btn_step0')) {
			
            $(this).removeClass('btn_step0').addClass('btn_step1');
            $('.step1', form).slideDown(500);
            $('html, body').animate({
                scrollTop: $(".step1", form).offset().top - 30
            }, 500);
			
        } else if ($(this).hasClass('btn_step1')) {
			
            $(this).removeClass('btn_step1').addClass('btn_step2');
            $('.step2', form).slideDown(500);
            $('html, body').animate({
                scrollTop: $(".step2", form).offset().top - 30
            }, 500);
			
        } else if ($(this).hasClass('btn_step2')) {
			
            $(this).css('display', 'none');
            $('.step3', form).slideDown(500);
            $('.btn_sendform', form).css('display', 'block');
            $('html, body').animate({
                scrollTop: $(".step3", form).offset().top - 30
            }, 500);
			
        }

    });

    //$('.tz input').on('click', function() {
    //    var form = $(this).parents('.form');
        //$(".tz #yes_tz", form).is(":checked") ? $(".load_tz", form).slideDown(500) : $(".load_tz", form).slideUp(500);
        //$(".tz #yes_tz_2", form).is(":checked") ? $(".load_tz_2", form).slideDown(500) : $(".load_tz_2", form).slideUp(500)
    //});

    //$('.design input').click(function() {
    //   var form = $(this).parents('.form');
    //    $(".design #no_design", form).is(":checked") ? $(".load_design", form).slideDown(500) : $(".load_design", form).slideUp(500);
    //    $(".design #no_design_2", form).is(":checked") ? $(".load_design_2", form).slideDown(500) : $(".load_design_2", form).slideUp(500);
    //});
	

}

$(document).ready(function() {
    var swipers = [],
        winW, winH, winScr, _isresponsive, smPoint = 768,
        mdPoint = 992,
        lgPoint = 1200,
        addPoint = 1600,
        _ismobile = navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i);

    function pageCalculations() {
        winW = $(window).width();
        winH = $(window).height();
    }

    pageCalculations();


    function updateSlidesPerView(swiperContainer) {
        if (winW >= addPoint) return parseInt(swiperContainer.attr('data-add-slides'), 10);
        else if (winW >= lgPoint) return parseInt(swiperContainer.attr('data-lg-slides'), 10);
        else if (winW >= mdPoint) return parseInt(swiperContainer.attr('data-md-slides'), 10);
        else if (winW >= smPoint) return parseInt(swiperContainer.attr('data-sm-slides'), 10);
        else return parseInt(swiperContainer.attr('data-xs-slides'), 10);
    }

    function resizeCall() {
        pageCalculations();

        $('.swiper-container.initialized[data-slides-per-view="responsive"]').each(function() {
            var thisSwiper = swipers['swiper-' + $(this).attr('id')],
                $t = $(this),
                slidesPerViewVar = updateSlidesPerView($t),
                centerVar = thisSwiper.params.centeredSlides;
            thisSwiper.params.slidesPerView = slidesPerViewVar;
            thisSwiper.reInit();
            if (!centerVar) {
                var paginationSpan = $t.find('.pagination span');
                var paginationSlice = paginationSpan.hide().slice(0, (paginationSpan.length + 1 - slidesPerViewVar));
                if (paginationSlice.length <= 1 || slidesPerViewVar >= $t.find('.swiper-slide').length) $t.addClass('pagination-hidden');
                else $t.removeClass('pagination-hidden');
                paginationSlice.show();
            }
        });
    }

    $('.testimonials-icons .entry div').on('click', function() {
        if ($(this).hasClass('active')) return false;
        var val = $(this).parent().parent().find('.entry').index($(this).parent());
        swipers['swiper-' + $(this).closest('.testimonials-wrapper').find('.testimonials-container .swiper-container').attr('id')].swipeTo(val);

        var parentSwiper = $(this).closest('.testimonials-wrapper').find('.testimonials-icons').parent();
        if (parentSwiper.hasClass('swiper-container')) swipers['swiper-' + parentSwiper.attr('id')].swipeTo(val);
        $(this).parent().parent().find('div.active').removeClass('active');
        $(this).addClass('active');
    });

    function initSwiper() {
        var initIterator = 0;
        $('.swiper-container').each(function() {
            var $t = $(this);

            var index = 'swiper-unique-id-' + initIterator;

            $t.addClass('swiper-' + index + ' initialized').attr('id', index);
            $t.find('.pagination').addClass('pagination-' + index);

            var autoPlayVar = parseInt($t.attr('data-autoplay'), 10);

            var slidesPerViewVar = $t.attr('data-slides-per-view');
            if (slidesPerViewVar == 'responsive') {
                slidesPerViewVar = updateSlidesPerView($t);
            } else slidesPerViewVar = parseInt(slidesPerViewVar, 10);

            var loopVar = parseInt($t.attr('data-loop'), 10);
            var speedVar = parseInt($t.attr('data-speed'), 10);
            var centerVar = parseInt($t.attr('data-center'), 10);


            if ($('.swiper-container')[1]) {

                swipers['swiper-' + index] = new Swiper('.swiper-' + index, {
                    speed: speedVar,
                    pagination: '.pagination-' + index,
                    loop: loopVar,
                    paginationClickable: true,
                    autoplay: autoPlayVar,
                    slidesPerView: slidesPerViewVar,
                    keyboardControl: true,
                    calculateHeight: true,
                    simulateTouch: true,
                    roundLengths: true,
                    centeredSlides: centerVar,
                    onSlideChangeStart: function(swiper) {
                        var activeIndex = (loopVar === true) ? swiper.activeIndex : swiper.activeLoopIndex;
                        if ($t.closest('.testimonials-container').length) {
                            $t.closest('.testimonials-wrapper').find('.testimonials-icons .entry div.active').removeClass('active');
                            $t.closest('.testimonials-wrapper').find('.testimonials-icons .entry div').eq(activeIndex).addClass('active');
                        }
                    },
                    onSlideClick: function(swiper) {
                        if ($t.closest('.circle-slide-box').length) swiper.swipeTo(swiper.clickedSlideIndex);
                    }
                });
                swipers['swiper-' + index].reInit();
                if ($t.attr('data-slides-per-view') == 'responsive') {
                    var paginationSpan = $t.find('.pagination span');
                    var paginationSlice = paginationSpan.hide().slice(0, (paginationSpan.length + 1 - slidesPerViewVar));
                    if (paginationSlice.length <= 1 || slidesPerViewVar >= $t.find('.swiper-slide').length) $t.addClass('pagination-hidden');
                    else $t.removeClass('pagination-hidden');
                    paginationSlice.show();
                }
            } else {

                swipers['swiper-swiper-unique-id-0'] = new Swiper('.swiper-swiper-unique-id-0', {
                    speed: speedVar,

                    loop: loopVar,
                    paginationClickable: true,
                    autoplay: autoPlayVar,
                    slidesPerView: slidesPerViewVar,
                    keyboardControl: true,
                    calculateHeight: true,
                    simulateTouch: true,
                    roundLengths: true,
                    centeredSlides: centerVar,
                    onSlideChangeStart: function(swiper) {
                        var activeIndex = (loopVar === true) ? swiper.activeIndex : swiper.activeLoopIndex;
                        if ($t.closest('.testimonials-container').length) {
                            $t.closest('.testimonials-wrapper').find('.testimonials-icons .entry div.active').removeClass('active');
                            $t.closest('.testimonials-wrapper').find('.testimonials-icons .entry div').eq(activeIndex).addClass('active');
                        }
                    },
                    onSlideClick: function(swiper) {
                        if ($t.closest('.circle-slide-box').length) swiper.swipeTo(swiper.clickedSlideIndex);
                    }
                });
                swipers['swiper-swiper-unique-id-0'].reInit();
                if ($t.attr('data-slides-per-view') == 'responsive') {
                    var paginationSpan = $t.find('.pagination span');
                    var paginationSlice = paginationSpan.hide().slice(0, (paginationSpan.length + 1 - slidesPerViewVar));
                    if (paginationSlice.length <= 1 || slidesPerViewVar >= $t.find('.swiper-slide').length) $t.addClass('pagination-hidden');
                    else $t.removeClass('pagination-hidden');
                    paginationSlice.show();
                }
            }

            initIterator++;
        });

        $('.swiper-container.connected-to-bottom-swiper').each(function() {
            var $t = $(this);
            if ($t.closest('.testi-wrapper').find('.connected-to-top-swiper').length) {
                swipers['swiper-' + $t.attr('id')].addCallback('SlideChangeStart', function(swiper) {
                    swipers['swiper-' + $t.closest('.testi-wrapper').find('.connected-to-top-swiper').attr('id')].swipeTo(swiper.activeIndex);
                });
            }
        });
    }

    //if($('.swiper-container')[1]){  console.log('true' )}
    if ($('.swiper-container')) {
        console.log('swiper-container');
        initSwiper();
    }
    //

    $('.swiper-arrow-left').on('click', function() {
        swipers['swiper-' + $(this).parent().parent().find('.swiper-container').attr('id')].swipePrev();
    });

    $('.swiper-arrow-right').on('click', function() {
        swipers['swiper-' + $(this).parent().parent().find('.swiper-container').attr('id')].swipeNext();
    });



    $('.swiper-arrow-left').on('click', function() {
        swipers['swiper-' + $(this).parent().parent().find('.swiper-container').attr('id')].swipePrev();
    });

    $('.swiper-arrow-right').on('click', function() {
        swipers['swiper-' + $(this).parent().parent().find('.swiper-container').attr('id')].swipeNext();
    });

    //testimonials

    $('.testimonials-icons .entry div').on('click', function() {
        if ($(this).hasClass('active')) return false;
        var val = $(this).parent().parent().find('.entry').index($(this).parent());
        swipers['swiper-' + $(this).closest('.testimonials-wrapper').find('.testimonials-container .swiper-container').attr('id')].swipeTo(val);

        var parentSwiper = $(this).closest('.testimonials-wrapper').find('.testimonials-icons').parent();
        if (parentSwiper.hasClass('swiper-container')) swipers['swiper-' + parentSwiper.attr('id')].swipeTo(val);
        $(this).parent().parent().find('div.active').removeClass('active');
        $(this).addClass('active');
    });

	init();
	
    $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });
    
        /*============================*/
    /* MOBILE MENU */
    /*============================*/

    $('.nav-menu-icon a').on('click', function() {
        if ($('nav').hasClass('slide-menu')) {
            $('nav').removeClass('slide-menu');
            $(this).removeClass('active');
        } else {
            $('nav').addClass('slide-menu');
            $(this).addClass('active');
        }
        return false;
    });

    if ($(window).width() < 992) {
        $('.open-drop').on('click', function() {
            if ($(this).parent().parent().find('.dropmenu').hasClass('active')) {
                $(this).removeClass('active');
                $(this).parent().parent().find('.dropmenu').removeClass('active');
            } else {
                $(this).addClass('active');
                $('.dropmenu').removeClass('active');
                $(this).parent().parent().find('.dropmenu').addClass('active');
            }
            return false;
        });
    }


    //accordeon
    $('.accordeon-entry h5').on('click', function() {
        console.log('accordeon-entry click')
        $(this).parent().toggleClass('active');
        $(this).next().toggleClass('active');
    });

    //tabs switch
    $('.tabs-desktop div').on('click', function() {
        var $t = $(this);
        var curVal = $t.parent().find('div').index(this);

        $t.closest('.tabs-wrapper').find('.tabs-container:visible').fadeOut(300, function() {
            $t.closest('.tabs-wrapper').find('.tabs-container').eq(curVal).fadeIn(300);
        });

        $t.parent().find('.active').removeClass('active');
        $t.addClass('active');
        $t.parent().parent().find('.tabs-select-text .text').text($t.text());
    });

    $('.tabs-switch-box select').change(function() {
        var curValue = $(this).val();
        $(this).parent().find('.tabs-desktop div').filter(function() {
            return $(this).text() == curValue;
        }).on('click');
    });
    if ($('.accordions').length) {
        $('.accordions').zAccordion({
            startingSlide: 1,
            auto: false,
            tabWidth: "20%",
            width: "100%",
            height: "auto",
            trigger: "click",
            speed: 800
        });
    }
    $('.acor-slide').on('click', function() {
        $('.acor-slide').removeClass('anime');
        $(this).addClass('anime');
    });

    var Site={serverName: 'webord.ru'};
	
});

function sendorderform(name_form) {
	
	var msgorder = $('#'+name_form+' input').serialize();
	
	$.ajax({
		type:'POST',
		url:"../mail/brif.php",
		data: msgorder + "&action=sendorderform&mess_order="+$('.mess_order', '#' + name_form).val(),
		cache:false,
		dataType: 'JSON',
		type: 'POST',
		beforeSend: function() {
			$('.js__sendform', '#' + name_form).html('Отправляем...');
			$('.js__sendform', '#' + name_form).attr('onclick','return false');
		},	
		success:function(response){
			if (response.status == 1) {
				$($('input[name="how_group[]"]')[0], '#' + name_form).attr('checked',false);
				$($('input[name="how_group[]"]')[1], '#' + name_form).attr('checked',false);
				$($('input[name="how_group[]"]')[2], '#' + name_form).attr('checked',false);
				
				if (name_form == 'order_form_2') {
					$('body').scrollTop($('.' + name_form).offset().top-200);
				} else {
					$('body').scrollTop($('.' + name_form).offset().top);
				}
				
				get_block((name_form=='order_form_2'? 'order-form-second' : 'order-form'),function() {
					init();
					$("#error_form", '#' + (name_form=='order_form'? 'order-form' : 'order_form_2')).html(response.body);
				},(name_form=='order_form'? 'order-form' : 'order_form_2'));
				
			} else {
				$('.js__sendform', '#' + name_form).html('Отправить');
				$('.js__sendform', '#' + name_form).attr('onclick','sendorderform(\''+name_form+'\')');
				$("#error_form", '#' + name_form).html(response.body);
			}
		}
	});
	
}

function get_block(name,callback,custom_name) {
	$.ajax({
		type:'POST',
		url:"/get_block.php",
		data: {name: name,custom_name:custom_name},
		cache:false,
		dataType: 'html',
		type: 'POST',
		success:function(response){
			if (custom_name) {
				$('.block_' + custom_name).html(response);
			} else {
				$('.block_' + name).html(response);
			}
			callback();
		}
	});
}

$('#yes_tz').click(function(){
	$('#drop_tz a')[0].click();
});
$('#load_design').click(function(){
	$('#drop_design a')[0].click();
});
$('#yes_tz_2').click(function(){
	$('#drop_tz_2 a')[0].click();
});
$('#no_design_2').click(function(){
	$('#drop_design_2 a')[0].click();
});

$ (function(){

    var ul_design = $('#upload_design ul');

    $('#drop_design a').click(function(){
        // Simulate a click on the file input button
        // to show the file browser dialog
        $(this).parent().find('input').click();
    });

    // Initialize the jQuery File Upload plugin
    $('#upload_design').fileupload({

        // This element will accept file drag/drop uploading
        dropZone: $('#drop_design'),

        // This function is called when a file is added to the queue;
        // either via the browse button, or via drag/drop:
        add: function (e, data) {
			
			if (data.originalFiles.length>30) {
				alert('Максимальное количество файлов для загрузки 30');
				return false;
			}
			
			if ($('ul li', '.load_design').length >= 30) {
				alert('Максимальное количество файлов для загрузки 30');
				return false;
			}

            var tpl = $('<li class="working"><input type="text" value="0" data-width="18" data-height="18"'+
                ' data-fgColor="#0788a5" data-readOnly="1" data-bgColor="#3e4043" /><p></p><span></span></li>');

            // Append the file name and file size
            tpl.find('p').text(data.files[0].name)
                         .append('<i>' + formatFileSize(data.files[0].size) + '</i>');

            // Add the HTML to the UL element
            data.context = tpl.appendTo(ul_design);

            // Initialize the knob plugin
            tpl.find('input').knob();

            // Listen for clicks on the cancel icon
            tpl.find('span').click(function(){
				
				$.ajax({
					url: '/upload.php?mode=delete&act=design',
					data: {name: $(tpl).attr('data-name')},
					success: function() {
						tpl.fadeOut(function(){
							tpl.remove();
						});
						if ($('ul li', '.load_design').length <= 1) {
							$('#yes_design').attr('checked',true);
						}
					}
				});				
            });

			var jqXHR = data.submit();
        },
		
		done: function(e, data){
			data.context.attr('data-name',data.result.file_name);
		},

        progress: function(e, data){

            // Calculate the completion percentage of the upload
            var progress = parseInt(data.loaded / data.total * 100, 10);

            // Update the hidden input field and trigger a change
            // so that the jQuery knob plugin knows to update the dial
            data.context.find('input').val(progress).change();
			
            if(progress == 100){
                data.context.removeClass('working');
            }
        },

        fail:function(e, data){
            // Something has gone wrong!
            data.context.addClass('error');
        }

    });

    var ul_tz = $('#upload_tz ul');

    $('#drop_tz a').click(function(){
        // Simulate a click on the file input button
        // to show the file browser dialog
        $(this).parent().find('input').click();
    });

    // Initialize the jQuery File Upload plugin
    $('#upload_tz').fileupload({

        // This element will accept file drag/drop uploading
        dropZone: $('#drop_tz'),

        // This function is called when a file is added to the queue;
        // either via the browse button, or via drag/drop:
        add: function (e, data) {
			
			if (data.originalFiles.length>30) {
				alert('Максимальное количество файлов для загрузки 30');
				return false;
			}
			
			if ($('ul li', '.load_tz').length >= 30) {
				alert('Максимальное количество файлов для загрузки 30');
				return false;
			}

            var tpl = $('<li class="working"><input type="text" value="0" data-width="18" data-height="18"'+
                ' data-fgColor="#0788a5" data-readOnly="1" data-bgColor="#3e4043" /><p></p><span></span></li>');

            // Append the file name and file size
            tpl.find('p').text(data.files[0].name)
                         .append('<i>' + formatFileSize(data.files[0].size) + '</i>');

            // Add the HTML to the UL element
            data.context = tpl.appendTo(ul_tz);

            // Initialize the knob plugin
            tpl.find('input').knob();

            // Listen for clicks on the cancel icon
            tpl.find('span').click(function(){
				$.ajax({
					url: '/upload.php?mode=delete&act=tz',
					data: {name: $(tpl).attr('data-name')},
					success: function() {
						tpl.fadeOut(function(){
							tpl.remove();
						});
					}
				});				
            });

			var jqXHR = data.submit();
        },
		
		done: function(e, data){
			data.context.attr('data-name',data.result.file_name);
		},

        progress: function(e, data){

            // Calculate the completion percentage of the upload
            var progress = parseInt(data.loaded / data.total * 100, 10);

            // Update the hidden input field and trigger a change
            // so that the jQuery knob plugin knows to update the dial
            data.context.find('input').val(progress).change();
			
            if(progress == 100){
                data.context.removeClass('working');
            }
        },

        fail:function(e, data){
            // Something has gone wrong!
            data.context.addClass('error');
        }

    });

    var ul_design_2 = $('#upload_design_2 ul');

    $('#drop_design_2 a').click(function(){
        // Simulate a click on the file input button
        // to show the file browser dialog
        $(this).parent().find('input').click();
    });

    // Initialize the jQuery File Upload plugin
    $('#upload_design_2').fileupload({

        // This element will accept file drag/drop uploading
        dropZone: $('#drop_design_2'),

        // This function is called when a file is added to the queue;
        // either via the browse button, or via drag/drop:
        add: function (e, data) {
			
			if (data.originalFiles.length>30) {
				alert('Максимальное количество файлов для загрузки 30');
				return false;
			}
			
			if ($('ul li', '.upload_design_2').length >= 30) {
				alert('Максимальное количество файлов для загрузки 30');
				return false;
			}

            var tpl = $('<li class="working"><input type="text" value="0" data-width="18" data-height="18"'+
                ' data-fgColor="#0788a5" data-readOnly="1" data-bgColor="#3e4043" /><p></p><span></span></li>');

            // Append the file name and file size
            tpl.find('p').text(data.files[0].name)
                         .append('<i>' + formatFileSize(data.files[0].size) + '</i>');

            // Add the HTML to the UL element
            data.context = tpl.appendTo(ul_design_2);

            // Initialize the knob plugin
            tpl.find('input').knob();

            // Listen for clicks on the cancel icon
            tpl.find('span').click(function(){
				$.ajax({
					url: '/upload.php?mode=delete&act=design',
					data: {name: $(tpl).attr('data-name')},
					success: function() {
						tpl.fadeOut(function(){
							tpl.remove();
						});
					}
				});				
            });

			var jqXHR = data.submit();
        },
		
		done: function(e, data){
			data.context.attr('data-name',data.result.file_name);
		},

        progress: function(e, data){

            // Calculate the completion percentage of the upload
            var progress = parseInt(data.loaded / data.total * 100, 10);

            // Update the hidden input field and trigger a change
            // so that the jQuery knob plugin knows to update the dial
            data.context.find('input').val(progress).change();
			
            if(progress == 100){
                data.context.removeClass('working');
            }
        },

        fail:function(e, data){
            // Something has gone wrong!
            data.context.addClass('error');
        }

    });	

	
    var upload_tz_2 = $('#upload_tz_2 ul');

    $('#drop_tz_2 a').click(function(){
        // Simulate a click on the file input button
        // to show the file browser dialog
        $(this).parent().find('input').click();
    });

    // Initialize the jQuery File Upload plugin
    $('#upload_tz_2').fileupload({

        // This element will accept file drag/drop uploading
        dropZone: $('#drop_tz_2'),

        // This function is called when a file is added to the queue;
        // either via the browse button, or via drag/drop:
        add: function (e, data) {
			
			if (data.originalFiles.length>30) {
				alert('Максимальное количество файлов для загрузки 30');
				return false;
			}
			
			if ($('ul li', '.load_tz_2').length >= 30) {
				alert('Максимальное количество файлов для загрузки 30');
				return false;
			}

            var tpl = $('<li class="working"><input type="text" value="0" data-width="18" data-height="18"'+
                ' data-fgColor="#0788a5" data-readOnly="1" data-bgColor="#3e4043" /><p></p><span></span></li>');

            // Append the file name and file size
            tpl.find('p').text(data.files[0].name)
                         .append('<i>' + formatFileSize(data.files[0].size) + '</i>');

            // Add the HTML to the UL element
            data.context = tpl.appendTo(upload_tz_2);

            // Initialize the knob plugin
            tpl.find('input').knob();

            // Listen for clicks on the cancel icon
            tpl.find('span').click(function(){
				$.ajax({
					url: '/upload.php?mode=delete&act=tz',
					data: {name: $(tpl).attr('data-name')},
					success: function() {
						tpl.fadeOut(function(){
							tpl.remove();
						});
					}
				});				
            });

			var jqXHR = data.submit();
        },
		
		done: function(e, data){
			data.context.attr('data-name',data.result.file_name);
		},

        progress: function(e, data){

            // Calculate the completion percentage of the upload
            var progress = parseInt(data.loaded / data.total * 100, 10);

            // Update the hidden input field and trigger a change
            // so that the jQuery knob plugin knows to update the dial
            data.context.find('input').val(progress).change();
			
            if(progress == 100){
                data.context.removeClass('working');
            }
        },

        fail:function(e, data){
            // Something has gone wrong!
            data.context.addClass('error');
        }

    });	

    // Helper function that formats the file sizes
    function formatFileSize(bytes) {
        if (typeof bytes !== 'number') {
            return '';
        }

        if (bytes >= 1000000000) {
            return (bytes / 1000000000).toFixed(2) + ' GB';
        }

        if (bytes >= 1000000) {
            return (bytes / 1000000).toFixed(2) + ' MB';
        }

        return (bytes / 1000).toFixed(2) + ' KB';
    }

});