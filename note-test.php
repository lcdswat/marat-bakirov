 <!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/site-files/main.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

	<a name="top"></a>

	<!-- Меню -->
	<?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/menu.html'); ?>

	<div class="notes">
		<p>Всем привет! Сегодня расскажу о&nbsp;том, как сделать нумерацию в&nbsp;индизайне. Эта функция называется &laquo;Объединение данных&raquo; и&nbsp;принцип её&nbsp;работы заключается в&nbsp;том, что вы&nbsp;можете вставлять в&nbsp;индизайновский документ динамические данные из&nbsp;отдельного файла. Для новичков, возможно, звучит мудрено, но&nbsp;по&nbsp;ходу дела всё станет понятно.</p>
		<p>Чтобы создать файл с&nbsp;данными, нам понадобится эксель. В&nbsp;моем случае лицензии на&nbsp;эксель нет, поэтому я&nbsp;заменяю его бесплатным Опен Офисом.</p>
		<p>Мы&nbsp;рассмотрим несколько вариантов применения этой функции и&nbsp;начнём, как водится, с&nbsp;простого.</p>
		<p>Итак, предположим, что у&nbsp;нас есть документ, который представляет из&nbsp;себя входной билет в&nbsp;цирк. В&nbsp;определенном месте на&nbsp;билете должен стоять уникальный порядковый номер. Всего у&nbsp;нас 100&nbsp;билетов. Допустим, номер должен стоять в&nbsp;двух местах&nbsp;&mdash; на&nbsp;отрывном корешке и&nbsp;на&nbsp;основной части.</p>
	</div>

	<!-- Футер -->
	<?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/footer.html'); ?>
	
	<!-- Метрика -->
	<?php include($_SERVER['DOCUMENT_ROOT'].'/site-files/includes/metrika.html'); ?>
</body>
</html>
