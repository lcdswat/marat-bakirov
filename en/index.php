 <!DOCTYPE html>
<html>
<head>
	<title>Marat Bakirov's portofolio</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/site-files/main.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="shortcut icon" href="/site-files/favicon.png" type="image/png">

</head>
<body>

	<a name="top"></a>

	<!-- Меню -->
	<?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/menu-en.html'); ?>

	<div id="black-bg"></div>
	<div class="grid" id="header">
		<?php
			$quotes[] =	'<span>&mdash;&nbsp;Can I see your portfolio?</span>
						<span>&mdash;&nbsp;Yeah, sure:</span>';
			srand ((double) microtime() * 1000000);
		    $random_number = rand(0,count($quotes)-1);
			echo ($quotes[$random_number]);  
		?>
	</div>

	<!-- Абдульманов -->
	<p class="white">
	Azamat Abdulmanov's website<br>
	Publish date: 10.03.2017 г.<br>
	<a href="https://abdulmanov.com/">www.abdulmanov.com</a>
	</p>
	<img src="/i/abdulmanov-1.png" class="grid-i">
	<img src="/i/abdulmanov-2.png" class="grid-i">
	<img src="/i/abdulmanov-3.png" class="grid-i">
	<!-- EOF Абдульманов -->

	<!-- Инфобот рассылки -->
	<p>
	Newsletter templates for Infobot service<br>
	Publish date: 05.03.2017 г.
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
	Website for «Delosiped» bikeshop<br>
	Publish date: 05.05.2016 г.<br>
	</p>
	<div class="grid">
		<img src="/i/delosiped.jpg" class="grid-i">
	</div>
	<!-- EOF Делосипед -->

	<!-- Инфобот попарт -->
	<p>
	Infobot poster<br>
	Making date: 20.12.2016 г.
	</p>
	<div class="grid">
		<img src="/i/infobot-popart.jpg" class="shadow">
	</div>
	<!-- EOF Инфобот попарт -->

	<!-- Футер -->
	<?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/footer-en.html'); ?>
	
	<!-- Метрика -->
	<?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/metrika.html'); ?>
</body>
</html>
