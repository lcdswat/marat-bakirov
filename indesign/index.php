<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="indesign.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
	<script type="text/javascript" src="jquery.stellar.js"></script>
</head>
<body>

<div class="parallax">
	<div class="parallax__layer parallax__layer--back">
		<img src="bg.svg">
	</div>
	
	<!-- Контент -->
	<div class="parallax__layer parallax__layer--base" data-stellar-background-ratio="0.5">
		<div id="grid-bg">
			<div class="grid">
				<!-- Заголовок -->
				<h1>Верстаем<br>быстро</h1>
				
				<!-- Осталось мест -->
				<div id="place-count">
					<span>10/10</span>
					Осталось десять свободных&nbsp;мест.<br><a href="/">Записаться</a>.
				</div>
				<div class="clean"></div>
				<p>Двухдневный интенсив Марата Бакирова<br>на&nbsp;тему оптимизации вёрстки в&nbsp;индизайне.</p>

				<!-- Что где когда -->
				<div class="column">
					10—11 апреля<br>С 12:00 до 16:00
				</div>
				<div class="column">
					«Фактуры»<br><a href="/">Уфа, ул. Мендеелева, 205а</a>
				</div>
				<div class="column" style="margin: 125px 0 0 0;">
					Стоимость участия<br>2000 рублей
				</div>
				<div class="clean"></div>

				<!-- Кому будет полезно -->
				<h2>Кому это будет полезно?</h2>
				<p id="for-who">Интенсив расчитан на&nbsp;дизайнеров и&nbsp;верстальщиков, которые хотя&nbsp;бы приблизительно знакомы с&nbsp;индизайном и&nbsp;хотят повысить навыки работы с&nbsp;ним. В&nbsp;программе не&nbsp;будет размышлений о&nbsp;модульных сетках, типографике и&nbsp;стиле. Только прикладные советы направленные на&nbsp;облегчение и&nbsp;ускорение вёрстки в&nbsp;индизайне.</p>

				<!-- Панель стиль абзаца -->
				<div id="panel-one"></div>

				<div class="clean"></div>

				<div class="programm-column">
				<h2>1 день &mdash; теория</h2>
				<p>В&nbsp;первый день я&nbsp;расскажу всё что знаю об&nbsp;индизайне и&nbsp;о&nbsp;том как использовать эту программу эффективно для любой вёрстки&nbsp;&mdash; от&nbsp;книг до&nbsp;веба.<br><br>
				В&nbsp;программе: подготовка рабочего окружения; горячие клавиши; стили абзаца и&nbsp;символа; использование GREP; вёрстка таблиц, объединение данных и&nbsp;прочие маленькие хитрости.</p>
				</div>

				<div class="programm-column" style="margin: 220px 0 0 0;">
				<h2>2 день &mdash; практика</h2>
				<p>Во&nbsp;второй день вы&nbsp;сможете применить полученные знания на&nbsp;практике&nbsp;&mdash; каждому участнику будет выдан материал для вёрстки, который нужно будет закончить в&nbsp;определенный срок.<br><br>
				В&nbsp;процессе работы я&nbsp;буду отвечать на&nbsp;возникающие вопросы и&nbsp;подсказывать</p>
				</div>
				
				<div class="clean"></div>

				<!-- Панель скриптов -->
				<div id="panel-two"></div>

				<div id="about-me">
					<h2>Немного обо мне &mdash;</h2>
					<p>Меня зовут Марат Бакиров. Так уж случилось, что последние 10 лет каждый рабочий день первая программа, которую я запускаю на компьютере - это индизайн.
					<br><br>
					Впервые с многостраничной вёрсткой я столкнулся в 2007 году, когда случайно занял место уволившегося верстальщика в местном журнале. Свой первый номер я верстал 4 суток почти без перерывов на сон и еду и уже тогда понял - тут что-то не так.
					<br><br>
					С тех пор прошло много тысяч проведенных за вёрсткой часов и теперь я хочу поделиться некоторыми советами и приемами которые знаю с начинающими дизайнерами.</p>
				</div>

				<div id="photo"></div>

				<div id="photo-text">Волосяные шпации преследуют меня во сне</div>

				<div class="clean"></div>

				<h2>Хотите принять участие?</h2>
				<p>
					Чтобы записаться на&nbsp;интенсив<br>
					свяжитесь со&nbsp;мной любым способом:<br>
					&mdash;&nbsp;вконтакте vk.com/lcdswat;<br>
					&mdash;&nbsp;по&nbsp;телефону +7&nbsp;999&nbsp;133 15 96;<br>
					&mdash;&nbsp;по&nbsp;электронной почте lcd-swat@yandex.ru.
				</p>

				<!-- Панель данных -->
				<div id="panel-three"></div>

				<div class="clean"></div>

				<br><br><br><br>

			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
$(function(){	
	$('.parallax__layer--back').stellar();
});
</script>

</body>
</html>