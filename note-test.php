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

	<div class="notes hyphenate"><br><br><br>
<p>Как видно из&nbsp;скриншота, наша понарошковая книга состоит из&nbsp;8&nbsp;страниц и&nbsp;трех стилей абзаца&nbsp;&mdash; &laquo;Рубрика&raquo;, &laquo;Заголовок&raquo; и&nbsp;Basic Paragraph для основного текста. В&nbsp;содержании мы&nbsp;будем указывать рубрику и&nbsp;заголовок статьи в&nbsp;ней, поэтому нам нужны первые два стиля абзаца.</p>
<p>Переходим на&nbsp;первую страницу и&nbsp;находим в&nbsp;меню Layout&nbsp;&mdash; Table Of&nbsp;Content. </p>
<p>Перед нами теперь панель настройки нашего будущего содержания.
В&nbsp;этом окне вы&nbsp;можете настроить, что выводить в&nbsp;содержании, какие будут стили у&nbsp;любого элемента и&nbsp;так далее.
Главный смысл всего такой&nbsp;&mdash; вам нужно выбрать те&nbsp;стили абзаца, которые индизайн вставит в&nbsp;будущее содержание. В&nbsp;моём случае должно выводиться название рубрики, и&nbsp;ниже заголовок статьи с&nbsp;номером страницы. 
Поэтому в&nbsp;поле Other Styles я&nbsp;выбираю нужные мне стили и&nbsp;переношу их&nbsp;кнопкой Add в&nbsp;поле Include Paragraph Styles.</p>
	</div>

	<!-- Футер -->
	<?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/footer.html'); ?>
	
	<!-- Метрика -->
	<?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/metrika.html'); ?>

	<!-- Вызов типографа -->
	<script>
 		var tpRu = new Typograf({locale: 'ru'});
 		tpRu.execute('     Мир - мой мир!!      ');
	</script>

</body>
</html>
