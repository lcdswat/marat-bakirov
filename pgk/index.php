<!DOCTYPE html>
<html>
<head>
	<title>Годовой отчет ПГК 2020</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="main.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<!-- Скроллбар -->
	<link rel="stylesheet" href="https://unpkg.com/simplebar@latest/dist/simplebar.css"/>
	<script src="https://unpkg.com/simplebar@latest/dist/simplebar.min.js"></script>
</head>
<body>

<div id="preloader"></div>

<?php include('menu.html'); ?>

<!-- Обложка -->
<div id="cover">
	<video width="100%" height="100%" muted>
		<source src="mp4/cover-new.mp4" type="video/mp4">
	</video>
</div>

<!-- Титул -->
<object type="image/svg+xml" data="svg/2.svg" class="polosa"></object>

<!-- Обращение -->
<div class="speech">
	<div class="text" id="voloshin" data-simplebar data-simplebar-auto-hide="false">
		<?php include('svg/voloshin.html'); ?>
	</div>
	<object type="image/svg+xml" data="svg/speech.svg" class="polosa"></object>
</div>

<object type="image/svg+xml" data="svg/2.svg" class="polosa"></object>


<!-- Прелоадер -->
<script type="text/javascript">
	$(window).on('load', function () {
	    setTimeout(function(){
	    	$('#preloader').fadeOut('slow');
	    },1000);
	});
</script>

<!-- Старт видео -->
<script type="text/javascript">
	$(window).on('load', function () {
	    setTimeout(function(){
	    	$('video').get(0).play();
	    },1000);
	});
</script>


</body>
</html>