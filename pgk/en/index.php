<!DOCTYPE html>
<html>
<head>
	<title>Annual Report Freight One 2020</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../content/main.css">
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
		<source src="content/cover-eng.mp4" type="video/mp4">
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
		<a href="#9"><span>01&nbsp;&nbsp;ABOUT THE COMPANY</span></a><br>
		<a href="#3">3&nbsp;&nbsp;A message from the Chairman<br>of the Board of Directors</a><br>
		<a href="#5">5&nbsp;&nbsp;A message from the Chief Executive Officer</a><br>
		<a href="#10">10&nbsp;&nbsp;The Company today</a><br>
		<a href="#11">11&nbsp;&nbsp;Where Freight One operates</a><br>
		<a href="#12">12&nbsp;&nbsp;Railcar fleet</a><br>
		<a href="#13">13&nbsp;&nbsp;Freight One freight turnover in 2020</a><br>
		<a href="#14">14&nbsp;&nbsp;Results for 2020</a><br>
		<a href="#15">15&nbsp;&nbsp;An effective response to the challenges<br>of the COVID-19 pandemic</a><br>
		<a href="#17">17&nbsp;&nbsp;Key events of 2020</a><br>
		<a href="#20">20&nbsp;&nbsp;Sustainable development management</a><br>
		<a href="#23">23&nbsp;&nbsp;Freight One strategic goals</a><br>
		<a href="#24">24&nbsp;&nbsp;Market overview</a><br>
		<a href="#27">27&nbsp;&nbsp;Overview of operating activities</a><br>
		<a href="#33">33&nbsp;&nbsp;Freight One digitalization projects</a><br>
		<a href="#36">36&nbsp;&nbsp;Analysis of financial results and financial position</a><br>
		<a href="#37">37&nbsp;&nbsp;Key results</a><br>
		<a href="#45">45&nbsp;&nbsp;Financial statements in accordance with IFRS</a><br>
		<a href="#50">50&nbsp;&nbsp;Key indicators for the last three years</a>
	</div>
	<div class="TOC-TOC" id="TOC-02">
		<a href="#51"><span>02&nbsp;&nbsp;CORPORATE GOVERNANCE</span></a><br>
		<a href="#52">52&nbsp;&nbsp;Corporate governance system</a><br>
		<a href="#52">52&nbsp;&nbsp;Corporate governance principles</a><br>
		<a href="#54">54&nbsp;&nbsp;Corporate governance structure</a><br>
		<a href="#56">56&nbsp;&nbsp;Share capital and shareholder<br>structure</a><br>
		<a href="#57">57&nbsp;&nbsp;Board of Directors</a><br>
		<a href="#70">70&nbsp;&nbsp;Executive bodies</a><br>
		<a href="#77">77&nbsp;&nbsp;Supervisory bodies</a><br>
		<a href="#79">79&nbsp;&nbsp;Risk management</a><br>
		<a href="#82">82&nbsp;&nbsp;Information policy</a><br>
		<a href="#83">83&nbsp;&nbsp;Countering corruption</a>
	</div>
	<div class="TOC-TOC" id="TOC-03">
		<a href="#84"><span>03&nbsp;&nbsp;OUR TEAM</span></a><br>
		<a href="#85">85&nbsp;&nbsp;Stakeholder relations</a><br>
		<a href="#88">88&nbsp;&nbsp;Our HR management principles</a><br>
		<a href="#91">91&nbsp;&nbsp;Social responsibility</a><br>
		<a href="#93">93&nbsp;&nbsp;Occupational health and safety</a><br>
		<a href="#95">95&nbsp;&nbsp;The environment and sustainable<br>use of resources</a>
	</div>
	<div class="TOC-TOC" id="TOC-04">
		<a href="#97"><span>04&nbsp;&nbsp;APPENDICES</span></a><br>
		<a href="#98">98&nbsp;&nbsp;Information on interested-party agreements.<br>Major agreements</a><br>
		<a href="#99">99&nbsp;&nbsp;Opinion of the Internal Audit Department on the<br>Company’s risk management and internal control<br>in 2020</a><br>
		<a href="#100">100&nbsp;&nbsp;Glossary</a><br>
		<a href="#102">102&nbsp;&nbsp;Contact information for shareholders<br>and investors</a>
	</div>
	<object type="image/svg+xml" data="content/8.svg" class="polosa" id="8"></object>
</div>


<!-- Шмуц 01 -->
<div class="shmutz-wrapper" id="shmutz-01">
	<div class="shmutz-TOC">
		<a href="#3">3&nbsp;&nbsp;A message from the Chairman of the Board of Directors</a><br>
		<a href="#5">5&nbsp;&nbsp;A message from the Chief Executive Officer</a><br>
		<a href="#10">10&nbsp;&nbsp;The Company today</a><br>
		<a href="#11">11&nbsp;&nbsp;Where Freight One operates</a><br>
		<a href="#12">12&nbsp;&nbsp;Railcar fleet</a><br>
		<a href="#13">13&nbsp;&nbsp;Freight One freight turnover in 2020</a><br>
		<a href="#14">14&nbsp;&nbsp;Results for 2020</a><br>
		<a href="#15">15&nbsp;&nbsp;An effective response to the challenges of the COVID-19 pandemic</a><br>
		<a href="#17">17&nbsp;&nbsp;Key events of 2020</a><br>
		<a href="#20">20&nbsp;&nbsp;Sustainable development management</a><br>
		<a href="#23">23&nbsp;&nbsp;Freight One strategic goals</a><br>
		<a href="#24">24&nbsp;&nbsp;Market overview</a><br>
		<a href="#27">27&nbsp;&nbsp;Overview of operating activities</a><br>
		<a href="#33">33&nbsp;&nbsp;Freight One digitalization projects</a><br>
		<a href="#36">36&nbsp;&nbsp;Analysis of financial results and financial position</a><br>
		<a href="#37">37&nbsp;&nbsp;Key results</a><br>
		<a href="#45">45&nbsp;&nbsp;Financial statements in accordance with IFRS</a><br>
		<a href="#50">50&nbsp;&nbsp;Key indicators for the last three years</a>
	</div>
	<object type="image/svg+xml" data="content/9.svg" class="polosa" id="9"></object>
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
		<source src="../content/mockup.mp4" type="video/mp4">
	</video>
	<object type="image/svg+xml" data="content/33.svg" class="polosa"></object>
</div>
<div class="browser-animation" id="34">
	<video muted autoplay loop playsinline>
		<source src="../content/browser-animation.mp4" type="video/mp4">
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
		<a href="#52">52&nbsp;&nbsp;Corporate governance system</a><br>
		<a href="#52">52&nbsp;&nbsp;Corporate governance principles</a><br>
		<a href="#54">54&nbsp;&nbsp;Corporate governance structure</a><br>
		<a href="#56">56&nbsp;&nbsp;Share capital and shareholder structure</a><br>
		<a href="#57">57&nbsp;&nbsp;Board of Directors</a><br>
		<a href="#70">70&nbsp;&nbsp;Executive bodies</a><br>
		<a href="#77">77&nbsp;&nbsp;Supervisory bodies</a><br>
		<a href="#79">79&nbsp;&nbsp;Risk management</a><br>
		<a href="#82">82&nbsp;&nbsp;Information policy</a><br>
		<a href="#83">83&nbsp;&nbsp;Countering corruption</a>
	</div>
	<object type="image/svg+xml" data="content/51.svg" class="polosa" id="51"></object>
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
		<a href="#85">85&nbsp;&nbsp;Stakeholder relations</a><br>
		<a href="#88">88&nbsp;&nbsp;Our HR management principles</a><br>
		<a href="#91">91&nbsp;&nbsp;Social responsibility</a><br>
		<a href="#93">93&nbsp;&nbsp;Occupational health and safety</a><br>
		<a href="#95">95&nbsp;&nbsp;The environment and sustainable use of resources</a>
	</div>
	<object type="image/svg+xml" data="content/84.svg" class="polosa" id="84"></object>
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
		<a href="#98">98&nbsp;&nbsp;Information on interested-party agreements. Major agreements</a><br>
		<a href="#99">99&nbsp;&nbsp;Opinion of the Internal Audit Department on the Company’s risk management and internal control in 2020</a><br>
		<a href="#100">100&nbsp;&nbsp;Glossary</a><br>
		<a href="#102">102&nbsp;&nbsp;Contact information for shareholders and investors</a>
	</div>
	<object type="image/svg+xml" data="content/97.svg" class="polosa" id="97"></object>
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