<!DOCTYPE html>
<html>
<head>
	<title>Годовой отчет ПГК 2020</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="main.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>

<div id="preloader"></div>

<?php include('menu.html'); ?>

<div id="cover">
	<video width="100%" height="100%" muted loop>
		<source src="cover.mp4" type="video/mp4">
	</video>
</div>

<!-- ПДФ О компании -->
<?php
	for($i=1; $i<4; $i++){
		$s = '<div class="reader"><object id="'. $i .'" data="'. $i .'.pdf#toolbar=0&navpanes=0&scrollbar=0&view=Fit&viewrect=90,90,90,90" type="application/pdf" width="100%" height="100%" class="pdf"></object></div>';
	printf("%s\n", $s);
	}
?>

<div class="shmutz">
	<video width="100%" height="100%" muted id="shmutz-01">
		<source src="shmutz.mp4" type="video/mp4">
	</video>
</div>

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

<!-- Старт видео на шмуце -->
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
	    $('#shmutz-01').get(0).play();
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