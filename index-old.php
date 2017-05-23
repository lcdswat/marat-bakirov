 <!DOCTYPE html>
<html>
<head>
	<title>Портфолио Марата Бакирова</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/site-files/main.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="shortcut icon" href="/site-files/favicon.png" type="image/png">

</head>
<body>

	<a name="top"></a>

	<!-- Меню -->
	<?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/menu.html'); ?>

	<div id="black-bg"></div>
	<div class="grid" id="header">
		<?php
			$quotes[] =	'<span>&mdash;&nbsp;А&nbsp;есть портфолио?</span>
						<span>&mdash;&nbsp;Да, конечно:</span>';
			$quotes[] = '<span>&mdash;&nbsp;Можно портфолио посмотреть?</span>
						<span>&mdash;&nbsp;Вот, смотрите:</span>';
			$quotes[] = '<span>&mdash;&nbsp;А есть какое-то портфолио?</span>
						<span>&mdash;&nbsp;Да, вот:</span>';
			$quotes[] = '<span>&mdash;&nbsp;Где можно ваши работы посмотреть?</span>
						<span>&mdash;&nbsp;Здесь:</span>';
			$quotes[] = '<span>&mdash;&nbsp;Портфолио покажете?</span>
						<span>&mdash;&nbsp;Да, пожалуйста:</span>';
			srand ((double) microtime() * 1000000);
		    $random_number = rand(0,count($quotes)-1);
			echo ($quotes[$random_number]);  
		?>
	</div>

	<!-- Абдульманов -->
	<p class="white">
	Сайт для ведущего Азамата Абдульманова<br>
	Дата релиза: 10.03.2017 г.<br>
	<a href="https://abdulmanov.com/">www.abdulmanov.com</a>
	</p>
	<img src="/i/abdulmanov-1.png" class="grid-i">
	<img src="/i/abdulmanov-2.png" class="grid-i">
	<img src="/i/abdulmanov-3.png" class="grid-i">
	<!-- EOF Абдульманов -->

	<!-- Инфобот рассылки -->
	<p>
	Шаблоны почтовых рассылок сервиса «Инфобот»<br>
	Дата релиза: 05.03.2017 г.
	</p>
	<div class="grid">
		<img src="/i/infobot-mail-1.png" class="fleft shadow" width="610px">
		<img src="/i/infobot-mail-2.png" class="fright shadow" width="350px"><br><br>
		<img src="/i/infobot-mail-3.png" class="fright shadow" width="350px">
		<img src="/i/infobot-mail-4.png" class="fright shadow" width="350px">
		<div class="clean"></div>
	</div>
	<!-- EOF Инфобот рассылки -->

	<!-- Делосипед -->
	<p>
	Дизайн сайта веломастерской «Делосипед»<br>
	Дата разработки: 05.05.2016 г.<br>
	</p>
	<div class="grid">
		<img src="/i/delosiped.jpg" class="grid-i">
	</div>
	<!-- EOF Делосипед -->

	<!-- Инфобот попарт -->
	<p>
	Постер для сервиса «Инфобот»<br>
	Дата разработки: 20.12.2016 г.
	</p>
	<div class="grid">
		<img src="/i/infobot-popart.jpg" class="shadow">
	</div>
	<!-- EOF Инфобот попарт -->

	<!-- Футер -->
	<?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/footer.html'); ?>
	
	<!-- Метрика -->
	<?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/metrika.html'); ?>
</body>
</html>
