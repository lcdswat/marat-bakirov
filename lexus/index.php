<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="lexus.css">

	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript" src="rangeslider/rangeslider.min.js"></script>
	<link rel="stylesheet" type="text/css" href="rangeslider/rangeslider.css">

</head> 
<body>

<a href="/lexus/"><div id="logo"></div></a>
<h1>Как вы оцениваете работу дилерского центра?</h1>

<output></output>
<div id="output-text"></div>
<input type="range" min="1" max="5" step="1" value="4">

<h2>Хотите оставить отзыв?</h2>

<textarea></textarea>

<a href="thx.php" class="button">Отправить</a>



<script type="text/javascript">
$(function() {
  const $input = $('input[type=range]');
  const $output = $('output');
  const $outputText = $('#output-text');
  const valueMapping = [
    '😤',
    '🙁',
    '😐',
    '🙂',
    '😃'
  ];
  const valueMappingText = [
    'Плохо',
    'Средне',
    'Хорошо',
    'Отлично',
    'Превосходно'
  ];
  
  function updateOutput(value) {
    $output[0].textContent = valueMapping[value - 1];
    $outputText[0].textContent = valueMappingText[value - 1];
  }
  
  $input.on('input', function(e) {
    updateOutput(e.target.value);
  });
  
  $input.rangeslider({
    polyfill: false
  });
  
  updateOutput($input[0].value);
});
</script>

</body>
</html>