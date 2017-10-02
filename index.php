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
		    $('#2').show(400);
		  }, 3000);
		  setTimeout(function() {
		    $('#wait').show(400);
		  }, 6000);		
		  setTimeout(function() {
		    $('#wait').hide();
		    $('#3').show(400);
		  }, 8000);
		  setTimeout(function() {
		    $('#wait').show(400);
		  }, 11000);
		  setTimeout(function() {
		    $('#wait').hide();
		    $('#one').hide(400);
		    $('#4').show(400);
		  }, 13000);
		  setTimeout(function() {
		    $('#wait').show(400);
		  }, 13500);
		  setTimeout(function() {
		    $('#wait').hide();
		    $('#2').hide(400);
		    $('#5').show(400);
		  }, 14000);
		});
	</script>

	<div id="aboutme">
		<img src="/site-files/me-pixel-about.gif">
		<div id="messages">
			<div class="bubles" id="one"><span></span>Привет! Меня зовут Марат Бакиров</div>
			<div class="bubles" id="2">Я занимаюсь графическим дизайном<br>и вёрсткой более 10 лет</div>
			<div class="bubles" id="3">Люблю индизайн и хорошую вёрстку</div>
			<div class="bubles" id="4">Ещё я делаю сайты и всякое такое</div>
			<div class="bubles" id="5">Если что&nbsp;&mdash; пишите на почту <a href="mailto:lcd-swat@yandex.ru">lcd-swat@yandex.ru</a><br>или в <a href="https://t.me/lcdswat">телеграм</a></div>
			<span id="wait"></span>
		</div>
	</div>

	<!-- Меню -->
	<?php // include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/menu.html'); ?>

	<!-- Метрика -->
	<?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/metrika.html'); ?>
</body>
</html>
