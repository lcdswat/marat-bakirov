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

</div>

<!-- ПДФ О компании -->
<?php
	for($i=1; $i<4; $i++){
		$s = '<div class="reader"><object id="'. $i .'" data="'. $i .'.pdf#toolbar=0&navpanes=0&scrollbar=0&view=Fit&viewrect=90,90,90,90" type="application/pdf" width="100%" height="100%" class="pdf"></object></div>';
	printf("%s\n", $s);
	}
?>

<div class="shmuz">
	<content>
		<h1>Обзор результатов</h1>
	</content>
</div>

<!-- Прелоадер -->
<script type="text/javascript">
	$(window).on('load', function () {
	    setTimeout(function(){
	    	$('#preloader').fadeOut('slow');
	    },1000);
	});
</script>

<!-- Убираем тулбар на мозиле -->
<style type="text/css">
	
</style>

</body>
</html>