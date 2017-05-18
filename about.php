 <!DOCTYPE html>
<html>
<head>
	<title>About Me | Marat Bakirov</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/site-files/main.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="shortcut icon" href="/site-files/favicon.png" type="image/png">
	<style type="text/css">
		body {background-color: #ec2c42;}
	</style>
</head>
<body>

	<div id="aboutme">
		<div class="message" id="1">Один</div>
		<div class="message" id="2">Два</div>
		<div class="message" id="3">Три</div>
		<div class="message" id="4">Четыре</div>
		<div class="message" id="5">Пять</div>
	</div>

	<script type="text/javascript">
		$(function(){
			setTimeout(function() {$('#1').show(400);}, 1000);
			setTimeout(function() {$('#2').show(400);}, 2000);
			setTimeout(function() {$('#3').show(400);}, 3000);
			setTimeout(function() {$('#1').hide(400); $('#4').show(400);}, 4000);
			setTimeout(function() {$('#2').hide(400); $('#5').show(400);}, 5000);
		});
	</script>

	<!-- Меню -->
	<?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/menu.html'); ?>

	<!-- Метрика -->
	<?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/metrika.html'); ?>
</body>
</html>
