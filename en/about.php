 <!DOCTYPE html>
<html>
<head>
	<title>About Me | Marat Bakirov</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/site-files/main.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
	<link rel="shortcut icon" href="/site-files/favicon.png" type="image/png">
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
			<div class="bubles" id="one"><span></span>Hi! My name is Marat Bakirov</div>
			<div class="bubles" id="2">I'm graphic designer and layout maker<br>with 10 years of experience</div>
			<div class="bubles" id="3">I love indesign and nice layouts</div>
			<div class="bubles" id="4">I also make web sites and know HTML and CSS</div>
			<div class="bubles" id="5">Contact me with <a href="mailto:lcd-swat@yandex.ru">email</a> or <a href="https://t.me/lcdswat">telegram</a></div>
			<span id="wait"></span>
		</div>
	</div>

	<!-- Меню -->
	<?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/menu-en.html'); ?>

	<!-- Метрика -->
	<?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/metrika.html'); ?>
</body>
</html>
