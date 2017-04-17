/*  форма заказа */

var Site={serverName: 'webord.ru'}
function sendorderform(){
	var msgorder = $('#order_form').serialize();
    console.log(JSON.stringify(msgorder));

	document.order_form.submit.disabled=true;
	document.order_form.submit.value="Подождите..."; 

	$.ajax({
		type:'POST',
		url:"http://webord.ru/mail/brif.php",
		data:msgorder+"&action=sendorderform",
		dataType: "json",
		cache:false,
		success:function(data){
			$("#error_order").html(data);
			document.order_form.submit.disabled=false;
			document.order_form.submit.value="Отправить";
		}
	});
}

function sendorder2form(){
	var msgorder = $('#order_form').serialize();
    console.log(JSON.stringify(msgorder));

	document.order_form.submit.disabled=true;
	document.order_form.submit.value="Подождите..."; 

	$.ajax({
		type:'POST',
		url:"http://webord.ru/mail/brif.php",
		data:msgorder+"&action=sendorderform",
		cache:false,
		success:function(data){
			$("#error_order").html(data);
			document.order_form.submit.disabled=false;
			document.order_form.submit.value="Отправить";
		}
	});
}



/* бриф 1 */

$(document).ready(function() {	

	function inputCountChecked() {
		var inputNum = $(".step0 input:checked");
		return inputNum.length;
	}
	
	$(".step0").on('click', 'input', function() {

		var i = inputCountChecked();

		if (i == 2) {
			$(".step0 input:not(:checked)").attr('disabled','disabled');
			$(".step0 input:not(:checked) + label").attr('disabled','disabled').addClass('disabled');
			$(".btn_step0").css('display', 'block');
		}
		else{
			$(".step0 input:not(:checked)").removeAttr('disabled','disabled');
			$(".step0 input:not(:checked) + label").removeAttr('disabled','disabled').removeClass('disabled');
			$(".btn_step0").css('display', 'none');
		}

		var l = $('.order_form input:checked');
	
	if(i == 0){
		$(".note_form").css('opacity', '0');
	}
	if (i == 1) {
		if (l.val() == 'быстро') {
			$(".note_form").css('opacity', '1').text('Отлично, мы тоже ценим ваше время.');
		} else if (l.val() == 'дешево') {
			$(".note_form").css('opacity', '1').text('Что ж, этого стоило ожидать.');
		} else if (l.val() == 'качественно'){
			$(".note_form").css('opacity', '1').text('По-другому мы не работаем.');
		}
	}
	if (i == 2) {

		var s = "";
		for( var j = 0; j < l.length; j++){
			var o = l[j];
			s = s + o.value + " ";
		}
		s = $.trim(s);

		if (s == "быстро дешево") {
			$(".note_form").css('opacity', '1').text('Отбросим все лишнее, оставив только самое необходимое.');
		} else if (s == "быстро качественно") {
			$(".note_form").css('opacity', '1').text('Это верный подход. Мы обожаем большие бюджеты!');
		} else if (s == "дешево быстро"){
			$(".note_form").css('opacity', '1').text('Отбросим все лишнее, оставив только самое необходимое.');
		} else if (s == "дешево качественно"){
			$(".note_form").css('opacity', '1').text('Вы никуда не торопитесь, и времени на проект предостаточно, верно?');
		} else if (s == "качественно быстро"){
			$(".note_form").css('opacity', '1').text('Это верный подход. Мы обожаем большие бюджеты!');
		} else if (s == "качественно дешово"){
			$(".note_form").css('opacity', '1').text('Вы никуда не торопитесь, и времени на проект предостаточно, верно?');
		}
	}
var num = 0;
	$(".order_form input:disabled + label").click( function() {
		num++;
		if(num == 1)
			$(".note_form").css('opacity', '1').text('Вы можете выбрать не более 2х вариантов одновременно.');
		if(num == 2)
			$(".note_form").css('opacity', '1').text('Настойчивость - важное качество Заказчика.');
		if(num == 3)
			$(".note_form").css('opacity', '1').text('Вообще мы проверяли эту форму много раз, но что-то могло сломаться...');
		if(num == 4)
			$(".note_form").css('opacity', '1').text('13070 человек нажали эту кнопку не менее четырех раз. Поздравляем, вы один из них.');
		if(num == 5)
			$(".note_form").css('opacity', '1').text('С вами был я, спасибо за внимание.Ты кто такой?! Давай до свидания!');
	});
		var d = $(this);
		

	});

	$('.order_form .btn').click(function() {

		if ($(this).hasClass('btn_step0')) {
			$(this).removeClass('btn_step0').addClass('btn_step1');
			$('.step1').slideDown(500);
            $('html, body').animate({scrollTop: $(".step1").offset().top - 30}, 500);;
		} 
		else if ($(this).hasClass('btn_step1')) {
			$(this).removeClass('btn_step1').addClass('btn_step2');
			$('.step2').slideDown(500);
            $('html, body').animate({scrollTop: $(".step2").offset().top - 30}, 500);;
		} 
		else if ($(this).hasClass('btn_step2')) {
			$(this).css('display', 'none');
			$('.step3').slideDown(500);
			$('.btn_sendform').css('display', 'block');
            $('html, body').animate({scrollTop: $(".step3").offset().top - 30}, 500);;
		}

	});

	$('.tz input').click(function() {

		if($(".tz #yes_tz").is(":checked")){
			$(".load_tz").slideDown(500);
		}
		else{
			$(".load_tz").slideUp(500);
		}

	});

	$('.design input').click(function() {

		if($(".design #no_design").is(":checked"))
			$(".load_design").slideDown(500);
		else
			$(".load_design").slideUp(500);

	});

});




function inputClickDisabled(d) {

	var num = 0;
	$("input:disabled + label").click( function() {
		num++;
		if(num == 1)
			$(".note_form").css('opacity', '1').text('Вы можете выбрать не более 2х вариантов одновременно.');
		if(num == 2)
			$(".note_form").css('opacity', '1').text('Настойчивость - важное качество Заказчика.');
		if(num == 3)
			$(".note_form").css('opacity', '1').text('Вообще мы проверяли эту форму много раз, но что-то могло сломаться...');
		if(num == 4)
			$(".note_form").css('opacity', '1').text('13070 человек нажали эту кнопку не менее четырех раз. Поздравляем, вы один из них.');
		if(num == 5)
			$(".note_form").css('opacity', '1').text('С вами был я, спасибо за внимание.Ты кто такой?! Давай до свидания!');
	});

}













/* бриф 2 */


$(document).ready(function() {	
	
function inputClickDisabled(d) {

	var num = 0;
	$(".order_form_2 input:disabled + label").click( function() {
		num++;
		if(num == 1)
			$(".note_form_2").css('opacity', '1').text('Вы можете выбрать не более 2х вариантов одновременно.');
		if(num == 2)
			$(".note_form_2").css('opacity', '1').text('Настойчивость - важное качество Заказчика.');
		if(num == 3)
			$(".note_form_2").css('opacity', '1').text('Вообще мы проверяли эту форму много раз, но что-то могло сломаться...');
		if(num == 4)
			$(".note_form_2").css('opacity', '1').text('13070 человек нажали эту кнопку не менее четырех раз. Поздравляем, вы один из них.');
		if(num == 5)
			$(".note_form_2").css('opacity', '1').text('С вами был я, спасибо за внимание.Ты кто такой?! Давай до свидания!');
	});

}

	$(".step0_2").on('click', 'input', function() {

		var i = inputCountChecked();

		if (i == 2) {
			$(".step0_2 input:not(:checked)").attr('disabled','disabled');
			$(".step0_2 input:not(:checked) + label").attr('disabled','disabled').addClass('disabled');
			$(".btn_step0_2").css('display', 'block');
		}
		else{
			$(".step0_2 input:not(:checked)").removeAttr('disabled','disabled');
			$(".step0_2 input:not(:checked) + label").removeAttr('disabled','disabled').removeClass('disabled');
			$(".btn_step0_2").css('display', 'none');
		}

	var l = $('.order_form_2 input:checked');

	if(i == 0){
		$(".note_form_2").css('opacity', '0');
	}
	if (i == 1) {
		if (l.val() == 'быстро_2') {
			$(".note_form_2").css('opacity', '1').text('Отлично, мы тоже ценим ваше время.');
		} else if (l.val() == 'дешево_2') {
			$(".note_form_2").css('opacity', '1').text('Что ж, этого стоило ожидать.');
		} else if (l.val() == 'качественно_2'){
			$(".note_form_2").css('opacity', '1').text('По-другому мы не работаем.');
		}
	}
	if (i == 2) {

		var s = "";
		for( var j = 0; j < l.length; j++){
			var o = l[j];
			s = s + o.value + " ";
		}
		s = $.trim(s);

		if (s == "быстро_2 дешево_2") {
			$(".note_form_2").css('opacity', '1').text('Отбросим все лишнее, оставив только самое необходимое.');
		} else if (s == "быстро_2 качественно_2") {
			$(".note_form_2").css('opacity', '1').text('Это верный подход. Мы обожаем большие бюджеты!');
		} else if (s == "дешево_2 быстро_2"){
			$(".note_form_2").css('opacity', '1').text('Отбросим все лишнее, оставив только самое необходимое.');
		} else if (s == "дешево_2 качественно_2"){
			$(".note_form_2").css('opacity', '1').text('Вы никуда не торопитесь, и времени на проект предостаточно, верно?');
		} else if (s == "качественно_2 быстро_2"){
			$(".note_form_2").css('opacity', '1').text('Это верный подход. Мы обожаем большие бюджеты!');
		} else if (s == "качественно_2 дешово_2"){
			$(".note_form_2").css('opacity', '1').text('Вы никуда не торопитесь, и времени на проект предостаточно, верно?');
		}
	}

		var d = $(this);
		inputClickDisabled(d);

	});

	$('.order_form_2 .btn').click(function() {

		if ($(this).hasClass('btn_step0_2')) {
			$(this).removeClass('btn_step0_2').addClass('btn_step1_2');
			$('.step1_2').slideDown(500);
            $('html, body').animate({scrollTop: $(".step1_2").offset().top - 30}, 500);;
		} 
		else if ($(this).hasClass('btn_step1_2')) {
			$(this).removeClass('btn_step1_2').addClass('btn_step2_2');
			$('.step2_2').slideDown(500);
            $('html, body').animate({scrollTop: $(".step2_2").offset().top - 30}, 500);;
		} 
		else if ($(this).hasClass('btn_step2_2')) {
			$(this).css('display', 'none');
			$('.step3_2').slideDown(500);
			$('.btn_sendform_2').css('display', 'block');
            $('html, body').animate({scrollTop: $(".step3_2").offset().top - 30}, 500);;
		}

	});

	$('.tz_2 input').click(function() {

		if($(".tz_2 #yes_tz_2").is(":checked")){
			$(".load_tz_2").slideDown(500);
		}
		else{
			$(".load_tz_2").slideUp(500);
		}

	});

	$('.design_2 input').click(function() {

		if($(".design_2 #no_design_2").is(":checked"))
			$(".load_design_2").slideDown(500);
		else
			$(".load_design_2").slideUp(500);

	});

});

function inputCountChecked() {
	var inputNum = $(".step0_2 input:checked");
	return inputNum.length;
}