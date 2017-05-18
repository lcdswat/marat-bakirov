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
		body {background-color: #ec2c42;}
	</style>
</head>
<body>

	<div id="aboutme">
		<img src="/site-files/me-pixel-about.gif">
		<div id="messages">
			<div class="bubles" id="one">bla-bla</div>
			<div class="bubles" id="2">bla-bla-bla</div>
			<div class="bubles" id="3">bla</div>
			<div class="bubles" id="4">Message</div>
			<div class="bubles" id="5">Message</div>
		</div>
	</div>

	<script type="text/javascript">
		$(function(){
			setTimeout(function() {$('#one').show(400);}, 1000);
			setTimeout(function() {$('#2').show(400);}, 2000);
			setTimeout(function() {$('#3').show(400);}, 3000);
			setTimeout(function() {$('#one').hide(400); $('#4').show(400);}, 4000);
			setTimeout(function() {$('#2').hide(400); $('#5').show(400);}, 5000);
		});
	</script>

	<!-- Меню -->
	<?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/menu.html'); ?>

	<!-- Метрика -->
	<?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/metrika.html'); ?>
</body>
</html>
