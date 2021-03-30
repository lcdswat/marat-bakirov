<!DOCTYPE html>
<html>
<head>
	<title>Годовой отчет ПГК 2020</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="content/main.css">
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
	<video width="100%" height="100%" id="cover-video" muted playsinline>
		<source src="content/cover.mp4" type="video/mp4">
	</video>
</div>

<!-- Титул -->
<object type="image/svg+xml" data="content/2.svg" class="polosa" id="2"></object>

<!-- Обращение -->
<div class="speech" id="3">
	<div class="gradient" id="top"></div>
	<div class="text" id="voloshin" data-simplebar data-simplebar-auto-hide="false">
		<?php include('content/voloshin.html'); ?>
	</div>
	<div class="gradient" id="bottom"></div>
	<object type="image/svg+xml" data="content/speech.svg" class="polosa"></object>
</div>
<div class="speech" id="4">
	<div class="gradient" id="top"></div>
	<div class="text" id="karataev" data-simplebar data-simplebar-auto-hide="false">
		<?php include('content/karataev.html'); ?>
	</div>
	<div class="gradient" id="bottom"></div>
	<object type="image/svg+xml" data="content/speech-karataev.svg" class="polosa"></object>
</div>

<!-- Шмуц 01 -->
<object type="image/svg+xml" data="content/5.svg" class="polosa" id="shmutz-01"></object>

<!-- 6 полоса -->
<object type="image/svg+xml" data="content/6.svg" class="polosa" id="6"></object>

<!-- География -->
<?php include('content/map.html'); ?>

<!-- 8—31 -->
<?php
	for($i=8; $i<=31; $i++){
		$s = '<object type="image/svg+xml" data="content/'. $i .'.svg" class="polosa" id="'. $i .'"></object>';
	printf("%s\n", $s);
	}
?>

<!-- Личный кабинет -->
<div class="mockup-animation" id="32">
	<video muted autoplay loop playsinline>
		<source src="content/mockup.mp4" type="video/mp4">
	</video>
	<object type="image/svg+xml" data="content/32.svg" class="polosa"></object>
</div>
<div class="browser-animation" id="33">
	<video muted autoplay loop playsinline>
		<source src="content/browser-animation.mp4" type="video/mp4">
	</video>
	<object type="image/svg+xml" data="content/33.svg" class="polosa"></object>
</div>
<object type="image/svg+xml" data="content/34.svg" class="polosa"></object>

<!-- 35—49 -->
<?php
	for($i=35; $i<=49; $i++){
		$s = '<object type="image/svg+xml" data="content/'. $i .'.svg" class="polosa" id="'. $i .'"></object>';
	printf("%s\n", $s);
	}
?>

<!-- Шмуц 02 -->
<object type="image/svg+xml" data="content/50.svg" class="polosa" id="shmutz-02"></object>

<!-- 51—83 -->
<?php
	for($i=51; $i<=83; $i++){
		$s = '<object type="image/svg+xml" data="content/'. $i .'.svg" class="polosa" id="'. $i .'"></object>';
	printf("%s\n", $s);
	}
?>

<!-- Шмуц 03 -->
<object type="image/svg+xml" data="content/84.svg" class="polosa" id="shmutz-03"></object>

<!-- 85—97 -->
<?php
	for($i=85; $i<=97; $i++){
		$s = '<object type="image/svg+xml" data="content/'. $i .'.svg" class="polosa" id="'. $i .'"></object>';
	printf("%s\n", $s);
	}
?>

<!-- Шмуц 04 -->
<object type="image/svg+xml" data="content/98.svg" class="polosa" id="shmutz-04"></object>

<!-- 99-103 -->
<?php
	for($i=99; $i<=103; $i++){
		$s = '<object type="image/svg+xml" data="content/'. $i .'.svg" class="polosa" id="'. $i .'"></object>';
	printf("%s\n", $s);
	}
?>

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
	    	$('#cover video').get(0).play();
	    },1000);
	});
</script>

<!-- Анимация на шмуце 01 -->
<script type="text/javascript">
	$(document).ready(function(){   
	    var $element = $('#shmutz-01');
	    let counter = 0;
	$(window).scroll(function() {
	  var scroll = $(window).scrollTop() + $(window).height();
	  //Если скролл до конца елемента
	  var offset = $element.offset().top + $element.height();
	  //Если скролл до начала елемента
	  //var offset = $element.offset().top
	 
	  if (scroll > offset && counter == 0) {
	    $('.7df4bcb0-90da-44d5-95ea-5c25244e9685').css('display: none;');
	    counter = 1;
	  }
	});
	$('#shmutz-01').click(function(){
		$('#shmutz-01').get(0).play();
	});
	 
	   });
</script>


</body>
</html>