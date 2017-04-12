 <!DOCTYPE html>
<html lang="ru">
<head>
	<title></title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/site-files/main.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Хипернатор -->
	<script src="/site-files/hypernator/hyphernator.js"></script>
	<!-- Типограф -->
	<script src="/site-files/typograf/dist/typograf.min.js"></script>

</head>
<body>

	<!-- Меню -->
	<?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/menu.html'); ?>

	<div class="notes hyphenate">
		<p>"Мир" - мой мир!!</p>
		<p>Я - не я</p>
	</div>

	<!-- Футер -->
	<?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/footer.html'); ?>
	
	<!-- Метрика -->
	<?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/metrika.html'); ?>

	<!-- Вызов типографа -->
	<script>
 		var tpRu = new Typograf({locale: 'ru'});
    	tpRu.enableRule('*');
	</script>

</body>
</html>
