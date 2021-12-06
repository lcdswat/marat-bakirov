 <!DOCTYPE html>
<html>
<head>
	<title>Обо мне — Марат Бакиров</title>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/header.html'); ?>
	<style type="text/css">
		body {background-color: #201723;}
	</style>
</head>
<body>

	<script type="text/javascript">
		$(function() {
		  $('#wait').hide();
		  setTimeout(function() {
		    $('#wait').show(400);
		  }, 500);		  
		  setTimeout(function() {
		    $('#wait').hide();
		    $('#bub-2').fadeIn(400);
		  }, 3000);
		  setTimeout(function() {
		    $('#wait').show(400);
		  }, 6000);		
		  setTimeout(function() {
		    $('#wait').hide();
		    $('#bub-3').fadeIn(400);
		  }, 8000);
		  setTimeout(function() {
		    $('#wait').show(400);
		  }, 9000);
		  setTimeout(function() {
		    $('#wait').hide();
		    $('#bub-1').hide(400);
		    $('#bub-4').fadeIn(400);
		  }, 9500);
		  setTimeout(function() {
		    $('#wait').show(400);
		  }, 15500);
		  setTimeout(function() {
		    $('#wait').hide();
		    $('#bub-2').hide(400);
		    $('#bub-5').fadeIn(400);
		  }, 17000);
		});
	</script>

	<div id="aboutme">
		<img src="/site-files/me-pixel-about.gif">
		<div id="messages">
			<div class="bubles" id="bub-1"><span></span>Привет! Меня зовут Марат Бакиров</div>
			<div class="bubles" id="bub-2">Я занимаюсь графическим дизайном и&nbsp;вёрсткой с&nbsp;2007 года. Обалдеть, конечно. Время летит!</div>
			<div class="bubles" id="bub-3">Посмотрите портфолио на <a href="https://www.behance.net/marat-bakirov">бихансе</a></div>
			<div class="bubles" id="bub-4">Если что&nbsp;&mdash; пишите на&nbsp;почту <a href="mailto:lcd-swat@yandex.ru"><nobr>lcd-swat@yandex.ru</nobr></a><br>или в <a href="https://t.me/lcdswat"><nobr>телеграм</nobr></a></div>
			<div class="bubles" id="bub-5">А я пока тут постою. В майке и шортах зимой и летом</div>
			<span id="wait"></span>
		</div>
	</div>

	<!-- Меню -->
	<?php //include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/menu.html'); ?>

	<!-- Метрика -->
	<?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/metrika.html'); ?>
</body>
</html>
