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
<?php
	for($i=3; $i<=7; $i++){
		$s = '<object type="image/svg+xml" data="content/'. $i .'.svg" class="polosa" id="'. $i .'"></object>';
	printf("%s\n", $s);
	}
?>

<!-- Содержание -->
<div class="TOC-wrapper">
	<div class="TOC-TOC">
		<a href="#9"><span>01&nbsp;&nbsp;О компании</span></a><br>
		<a href="#3">3&nbsp;&nbsp;Обращение Председателя Совета директоров</a><br>
		<a href="#5">5&nbsp;&nbsp;Обращение Генерального директора</a><br>
		<a href="#10">10&nbsp;&nbsp;Компания сегодня</a><br>
		<a href="#11">11&nbsp;&nbsp;География</a><br>
		<a href="#12">12&nbsp;&nbsp;Вагонный парк</a><br>
		<a href="#13">13&nbsp;&nbsp;Грузооборот ПГК в 2020 году</a><br>
		<a href="#14">14&nbsp;&nbsp;Итоги 2020 года</a><br>
		<a href="#15">15&nbsp;&nbsp;Эффективный ответ на вызовы пандемии COVID-19</a><br>
		<a href="#17">17&nbsp;&nbsp;Основные события года</a><br>
		<a href="#20">20&nbsp;&nbsp;Управление устойчивым развитием</a><br>
		<a href="#23">23&nbsp;&nbsp;Стратегические цели Компании</a><br>
		<a href="#24">24&nbsp;&nbsp;Обзор рыночного окружения</a><br>
		<a href="#27">27&nbsp;&nbsp;Обзор операционной деятельности</a><br>
		<a href="#33">33&nbsp;&nbsp;Проекты цифровизации ПГК</a><br>
		<a href="#36">36&nbsp;&nbsp;Анализ финансовых результатов и финансового положения</a><br>
		<a href="#37">37&nbsp;&nbsp;Ключевые результаты</a><br>
		<a href="#45">45&nbsp;&nbsp;Финансовая отчетность по МСФО</a><br>
		<a href="#50">50&nbsp;&nbsp;Основные показатели за 3 года</a>
	</div>
	<div class="TOC-TOC" id="TOC-02-RUS">
		<a href="#51"><span>02&nbsp;&nbsp;КОРПОРАТИВНОЕ УПРАВЛЕНИЕ</span></a><br>
		<a href="#52">52&nbsp;&nbsp;Система корпоративного управления</a><br>
		<a href="#52">52&nbsp;&nbsp;Принципы корпоративного управления</a><br>
		<a href="#54">54&nbsp;&nbsp;Структура корпоративного управления</a><br>
		<a href="#56">56&nbsp;&nbsp;Уставный капитал и акционерная структура</a><br>
		<a href="#57">57&nbsp;&nbsp;Совет директоров</a><br>
		<a href="#70">70&nbsp;&nbsp;Исполнительные органы управления</a><br>
		<a href="#77">77&nbsp;&nbsp;Органы контроля</a><br>
		<a href="#79">79&nbsp;&nbsp;Управление рисками</a><br>
		<a href="#82">82&nbsp;&nbsp;Информационная политика</a><br>
		<a href="#83">83&nbsp;&nbsp;Противодействие коррупции</a>
	</div>
	<div class="TOC-TOC" id="TOC-03-RUS">
		<a href="#84"><span>03&nbsp;&nbsp;НАША КОМАНДА</span></a><br>
		<a href="#85">85&nbsp;&nbsp;Взаимодействие с заинтересованными<br>сторонами</a><br>
		<a href="#88">88&nbsp;&nbsp;Принципы ПГК при управлении персоналом</a><br>
		<a href="#91">91&nbsp;&nbsp;Социальная ответственность</a><br>
		<a href="#93">93&nbsp;&nbsp;Охрана труда и промышленная безопасность</a><br>
		<a href="#95">95&nbsp;&nbsp;Экология и рациональное использование ресурсов</a>
	</div>
	<div class="TOC-TOC" id="TOC-04-RUS">
		<a href="#97"><span>04&nbsp;&nbsp;ПРИЛОЖЕНИЯ</span></a><br>
		<a href="#98">98&nbsp;&nbsp;Cведения о сделках, в совершении которых<br>имеется заинтересованность. Крупные сделки</a><br>
		<a href="#99">99&nbsp;&nbsp;Заключение Управления внутреннего аудита<br>об управлении рисками и внутреннем контроле<br>Общества за&nbsp;2020 год</a><br>
		<a href="#100">100&nbsp;&nbsp;Глоссарий</a><br>
		<a href="#102">102&nbsp;&nbsp;Контактная информация для акционеров<br>и инвесторов</a>
	</div>
	<object type="image/svg+xml" data="content/8.svg" class="polosa" id="8"></object>
</div>

<!-- Шмуц 01 -->
<div class="shmutz-wrapper" id="shmutz-01">
	<div class="shmutz-TOC">
		<a href="#3">3&nbsp;&nbsp;Обращение Председателя Совета директоров</a><br>
		<a href="#5">5&nbsp;&nbsp;Обращение Генерального директора</a><br>
		<a href="#10">10&nbsp;&nbsp;Компания сегодня</a><br>
		<a href="#11">11&nbsp;&nbsp;География</a><br>
		<a href="#12">12&nbsp;&nbsp;Вагонный парк</a><br>
		<a href="#13">13&nbsp;&nbsp;Грузооборот ПГК в 2020 году</a><br>
		<a href="#14">14&nbsp;&nbsp;Итоги 2020 года</a><br>
		<a href="#15">15&nbsp;&nbsp;Эффективный ответ на вызовы пандемии COVID-19</a><br>
		<a href="#17">17&nbsp;&nbsp;Основные события года</a><br>
		<a href="#20">20&nbsp;&nbsp;Управление устойчивым развитием</a><br>
		<a href="#23">23&nbsp;&nbsp;Стратегические цели Компании</a><br>
		<a href="#24">24&nbsp;&nbsp;Обзор рыночного окружения</a><br>
		<a href="#27">27&nbsp;&nbsp;Обзор операционной деятельности</a><br>
		<a href="#33">33&nbsp;&nbsp;Проекты цифровизации ПГК</a><br>
		<a href="#36">36&nbsp;&nbsp;Анализ финансовых результатов и финансового положения</a><br>
		<a href="#37">37&nbsp;&nbsp;Ключевые результаты</a><br>
		<a href="#45">45&nbsp;&nbsp;Финансовая отчетность по МСФО</a><br>
		<a href="#50">50&nbsp;&nbsp;Основные показатели за 3 года</a>
	</div>
	<object type="image/svg+xml" data="content/9.svg" class="polosa"></object>
</div>

<!-- 10 полоса -->
<object type="image/svg+xml" data="content/10.svg" class="polosa" id="10"></object>

<!-- География -->
<?php include('content/map.html'); ?>

<!-- 12—32 -->
<?php
	for($i=12; $i<=32; $i++){
		$s = '<object type="image/svg+xml" data="content/'. $i .'.svg" class="polosa" id="'. $i .'"></object>';
	printf("%s\n", $s);
	}
?>

<!-- Личный кабинет -->
<div class="mockup-animation" id="33">
	<video muted autoplay loop playsinline>
		<source src="content/mockup.mp4" type="video/mp4">
	</video>
	<object type="image/svg+xml" data="content/33.svg" class="polosa"></object>
</div>
<div class="browser-animation" id="34">
	<video muted autoplay loop playsinline>
		<source src="content/browser-animation.mp4" type="video/mp4">
	</video>
	<object type="image/svg+xml" data="content/34.svg" class="polosa"></object>
</div>
<object type="image/svg+xml" data="content/35.svg" class="polosa" id="35"></object>

<!-- 36—50 -->
<?php
	for($i=36; $i<=50; $i++){
		$s = '<object type="image/svg+xml" data="content/'. $i .'.svg" class="polosa" id="'. $i .'"></object>';
	printf("%s\n", $s);
	}
?>

<!-- Шмуц 02 -->
<div class="shmutz-wrapper" id="shmutz-02">
	<div class="shmutz-TOC">
		<a href="#52">52&nbsp;&nbsp;Система корпоративного управления</a><br>
		<a href="#52">52&nbsp;&nbsp;Принципы корпоративного управления</a><br>
		<a href="#54">54&nbsp;&nbsp;Структура корпоративного управления</a><br>
		<a href="#56">56&nbsp;&nbsp;Уставный капитал и акционерная структура</a><br>
		<a href="#57">57&nbsp;&nbsp;Совет директоров</a><br>
		<a href="#70">70&nbsp;&nbsp;Исполнительные органы управления</a><br>
		<a href="#77">77&nbsp;&nbsp;Органы контроля</a><br>
		<a href="#79">79&nbsp;&nbsp;Управление рисками</a><br>
		<a href="#82">82&nbsp;&nbsp;Информационная политика</a><br>
		<a href="#83">83&nbsp;&nbsp;Противодействие коррупции</a>
	</div>
	<object type="image/svg+xml" data="content/51.svg" class="polosa"></object>
</div>

<!-- 52—83 -->
<?php
	for($i=52; $i<=83; $i++){
		$s = '<object type="image/svg+xml" data="content/'. $i .'.svg" class="polosa" id="'. $i .'"></object>';
	printf("%s\n", $s);
	}
?>

<!-- Шмуц 03 -->
<div class="shmutz-wrapper" id="shmutz-03">
	<div class="shmutz-TOC">
		<a href="#85">85&nbsp;&nbsp;Взаимодействие с заинтересованными сторонами</a><br>
		<a href="#88">88&nbsp;&nbsp;Принципы ПГК при управлении персоналом</a><br>
		<a href="#91">91&nbsp;&nbsp;Социальная ответственность</a><br>
		<a href="#93">93&nbsp;&nbsp;Охрана труда и промышленная безопасность</a><br>
		<a href="#95">95&nbsp;&nbsp;Экология и рациональное использование ресурсов</a>
	</div>
	<object type="image/svg+xml" data="content/84.svg" class="polosa"></object>
</div>

<!-- 85—97 -->
<?php
	for($i=85; $i<=96; $i++){
		$s = '<object type="image/svg+xml" data="content/'. $i .'.svg" class="polosa" id="'. $i .'"></object>';
	printf("%s\n", $s);
	}
?>

<!-- Шмуц 04 -->
<div class="shmutz-wrapper" id="shmutz-04">
	<div class="shmutz-TOC">
		<a href="#98">98&nbsp;&nbsp;Cведения о сделках, в совершении которых имеется заинтересованность. Крупные сделки</a><br>
		<a href="#99">99&nbsp;&nbsp;Заключение Управления внутреннего аудита об управлении рисками и внутреннем контроле Общества за&nbsp;2020 год</a><br>
		<a href="#100">100&nbsp;&nbsp;Глоссарий</a><br>
		<a href="#102">102&nbsp;&nbsp;Контактная информация для акционеров и инвесторов</a>
	</div>
	<object type="image/svg+xml" data="content/97.svg" class="polosa"></object>
</div>

<!-- 98-103 -->
<?php
	for($i=98; $i<=103; $i++){
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


</body>
</html>