<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Белый Свет — METEOR</title>
	<link rel="stylesheet" href="site-files/style.css" type="text/css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="site-files/module.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="site-files/jquery.bxslider.min.js"></script>
	<script src="site-files/jquery.scrollTo.js"></script>
	<script src="site-files/common.js"></script>
	<!-- Шрифт -->
	<link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700|PT+Sans:400,400i,700,700i&amp;subset=cyrillic-ext" rel="stylesheet">
</head>

<body>

<div id="wrapper">

<!-- Меню -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/light/includes/menu.html'); ?>
<!-- EOF Меню -->

	<!-- Продукт -->
	<div class="item-container">

		<div id="item-wrapper">

			<div id="left">
				<a href="kontur" class="arrow-left">KONTUR</a>
				<span>METEOR</span>
				<img src="site-files/meteor.png"><br><br>
				<div class="icons">
					<img src="site-files/icons/led.svg" id="led">
					<img src="site-files/icons/ip65.svg" id="ip65">
					<img src="site-files/icons/sqr.svg" id="sqr">
					<img src="site-files/icons/pkt.svg" id="pkt">
					<img src="site-files/icons/white-9016.svg" id="white-9016">
					<img src="site-files/icons/temp-1-35.svg" id="temp-1-35">
					<img src="site-files/icons/right2.svg" id="right2">
					<img src="site-files/icons/up2.svg" id="up2">
					<img src="site-files/icons/eac.svg" id="eac">
					<img src="site-files/icons/icon-1.svg" id="icon-1">
				</div>
			</div>

			<div id="right">
				<a href="mitra" class="arrow-right">MITRA</a>
				<b>Габаритные размеры:</b><br><br><br><br>
				<img src="site-files/meteor-schema-1.png"><br><br><br><br>
				Аксессуары не предусмотрены<br><br><br><br>
			</div>
			<div class="clean"></div>

			<!-- Характеристки продукта -->
<div id="item-ttx">
	<span class="item-ttx-header">Характеристики</span>
	<table cellpadding="0" cellspacing="0" border="0">
		
		<!-- Шапка таблицы -->
		<tr>
			<td class="a">
				Артикул
			</td>
			<td id="b">
				Наименование<br>позиции
			</td>
			<td id="c">
				Режим<br>работы
			</td>
			<td id="d">
				Источник<br>питания
			</td>
			<td id="e">
				Срок службы источника света, час
			</td>
			<td id="f">
				Время<br>работы в аварийном режиме,<br>час
			</td>
			<td id="g">
				Номинальный световой поток, лм нормальный режим / аварийный режим
			</td>
			<td id="h">
				Номинальная потребляемая мощность, Вт
			</td>
			<td id="i">
				Коэф.<br>мощности
			</td>
			<td class="j">
				Масса,<br>кг
			</td>
		</tr>
		<tr>
			<td colspan="10" class="zag">
				№1 Автономная система аварийного освещения с функцией TELECONTROL
			</td>
		</tr>
		<tr>
			<td colspan="10" class="podzag">
				Автономный аварийный светильник эвакуационного освещения с функцией TELECONTROL
			</td>
		</tr>
		<tr>
			<td class="a">a15944</td>
			<td> BS-METEOR-51-L1-INEXI2</td>
			<td>универсальный</td>
			<td>INEXI-2C</td>
			<td>100 000</td>
			<td>1</td>
			<td>900/900</td>
			<td>11,4</td>
			<td>0,9</td>
			<td class="j">1,80</td>
		</tr>
		<tr>
			<td class="a">a15945</td>
			<td> BS-METEOR-53-L1-INEXI2</td>
			<td>универсальный</td>
			<td>INEXI-2C</td>
			<td>100 000</td>
			<td>3</td>
			<td>900/900</td>
			<td>13,4</td>
			<td>0,9</td>
			<td class="j">2,40</td>
		</tr>
	</table>
</div>
			<!-- EOF Характеристки продукта -->

			<!-- Остальные модели -->
			<style type="text/css">#item-METEOR {display: none;}</style>
			<div class="title" id="menu1">Другие Модели</div>
			<?php include($_SERVER['DOCUMENT_ROOT'].'/light/includes/models.html'); ?>
			<!-- EOF Остальные модели -->

		</div>
	</div>

	<!-- Форма -->
	<section id="middle">
		<div class="container">

			<div class="contact_form" id="menu8">
				<div class="contact_form_title">
					Остались вопросы? Свяжитесь с нами.<br> 
					Наш специалист перезвонит вам в течении дня.

				</div>

				<div class="contact_form_wrap">
					<form>
					<input type="text" name="fam" placeholder="Фамилия" required="">
					<input type="text" name="nme" placeholder="Имя" required="">
					
					<select required="" name="org">
						<option>Организация</option>
						<option value="Торговая">Торговая</option>
						<option value="Проектная">Проектная</option>
						<option value="Монтажная">Монтажная</option>
						<option value="Строительная">Строительная</option>
						<option value="Другое">Другое</option>
                                
					</select>
					<input type="text" name="city" placeholder="Город" required="">
					<textarea name="comment" placeholder="Комментарий"></textarea>
					<div class="offrt">
						<label>
							<input type="checkbox">
							Я согласен на обработку персональных данных
						</label>
					</div>
					<input type="submit" value="Отправить">
					</form>
				</div>

			</div>

		</div>

	</section><!-- #middle-->

</div><!-- #wrapper -->

<footer id="footer">
	
</footer><!-- #footer -->
<div class="overlay"></div>
<div class="sended">Спасибо! Ваша заявка принята!</div>

</body>

</html>