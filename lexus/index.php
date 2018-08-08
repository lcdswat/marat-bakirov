<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="lexus.css">
	<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
</head> 
<body>

<div id="logo"></div>
<h1>Как вы оцениваете работу дилерского центра?</h1>

<div class="rate">
	<div class="emoji">😑</div>
	<input type="range" min="1" max="5" step="1" value="2">
</div>



<script type="text/javascript">
	var emojis = ['😠','😦','😑','😀','😍'];
	$("input").mousemove(function(){
		var i = $(this).val();
		$(".emoji").html(emojis[i]);
	});
</script>

</body>
</html>