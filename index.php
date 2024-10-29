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
		  }, 25500);
		  setTimeout(function() {
		    $('#wait').hide();
		    $('#bub-2').hide(400);
		    $('#bub-5').fadeIn(400);
		  }, 27000);
		  setTimeout(function() {
		    $('#wait').show(400);
		  }, 39500);
		  setTimeout(function() {
		    $('#wait').hide();
		    $('#bub-3').hide(400);
		    $('#bub-6').fadeIn(400);
		  }, 40500);
		});
	</script>

	<div id="aboutme">
		<img src="/site-files/me-pixel-about.gif">
		<div id="messages">
			<div class="bubles" id="bub-1"><span></span>Hey! My name is Marat Bakirov</div>
			<div class="bubles" id="bub-2">I’m a designer with over 15 years of experience</div>
			<div class="bubles" id="bub-3">You can check out my work on <a href="https://www.behance.net/marat-bakirov">Behance</a></div>
			<div class="bubles" id="bub-4">Feel free to reach out via <a href="mailto:lcd-swat@yandex.ru"><nobr>e-mail</nobr></a> or <a href="https://t.me/lcdswat"><nobr>Telegram</nobr></a>!</div>
			<div class="bubles" id="bub-5">I will wait you here</div>
			<div class="bubles" id="bub-6">Hello?</div>
			<span id="wait"></span>
		</div>
	</div>

	<!-- Меню -->
	<?php //include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/menu.html'); ?>

	<!-- Метрика -->
	<?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/metrika.html'); ?>
</body>
</html>
