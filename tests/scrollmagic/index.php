<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>scrollmagic test</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.14.2/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.3/ScrollMagic.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.3/plugins/animation.gsap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.3/plugins/debug.addIndicators.js"></script>
		<link rel="preload" as="image" href="kv-1/kv-1-0000.jpg">
		<link rel="preload" as="image" href="kv-1/kv-1-0001.jpg">
		<link rel="preload" as="image" href="kv-1/kv-1-0002.jpg">
		<link rel="preload" as="image" href="kv-1/kv-1-0003.jpg">
		<link rel="preload" as="image" href="kv-1/kv-1-0004.jpg">
		<link rel="preload" as="image" href="kv-1/kv-1-0005.jpg">
		<link rel="preload" as="image" href="kv-1/kv-1-0006.jpg">
		<link rel="preload" as="image" href="kv-1/kv-1-0007.jpg">
		<link rel="preload" as="image" href="kv-1/kv-1-0008.jpg">
		<link rel="preload" as="image" href="kv-1/kv-1-0009.jpg">
		<link rel="preload" as="image" href="kv-1/kv-1-0010.jpg">
		<link rel="preload" as="image" href="kv-1/kv-1-0011.jpg">
		<link rel="preload" as="image" href="kv-1/kv-1-0012.jpg">
		<link rel="preload" as="image" href="kv-1/kv-1-0013.jpg">
		<link rel="preload" as="image" href="kv-1/kv-1-0014.jpg">
		<link rel="preload" as="image" href="kv-1/kv-1-0015.jpg">
		<link rel="preload" as="image" href="kv-1/kv-1-0016.jpg">
		<link rel="preload" as="image" href="kv-1/kv-1-0017.jpg">
		<link rel="preload" as="image" href="kv-1/kv-1-0018.jpg">
		<link rel="preload" as="image" href="kv-1/kv-1-0019.jpg">
		<link rel="preload" as="image" href="kv-1/kv-1-0020.jpg">
		<link rel="preload" as="image" href="kv-1/kv-1-0021.jpg">
		<link rel="preload" as="image" href="kv-1/kv-1-0022.jpg">
		<link rel="preload" as="image" href="kv-1/kv-1-0023.jpg">
		<link rel="preload" as="image" href="kv-1/kv-1-0024.jpg">
		<link rel="preload" as="image" href="kv-1/kv-1-0025.jpg">
		<link rel="preload" as="image" href="kv-1/kv-1-0026.jpg">
		<link rel="preload" as="image" href="kv-1/kv-1-0027.jpg">
		<link rel="preload" as="image" href="kv-1/kv-1-0028.jpg">
		<link rel="preload" as="image" href="kv-1/kv-1-0029.jpg">
		<link rel="preload" as="image" href="kv-1/kv-1-0030.jpg">
		<link rel="preload" as="image" href="kv-1/kv-1-0031.jpg">
		<link rel="preload" as="image" href="kv-1/kv-1-0032.jpg">
		<link rel="preload" as="image" href="kv-1/kv-1-0033.jpg">
		<link rel="preload" as="image" href="kv-1/kv-1-0034.jpg">
		<link rel="preload" as="image" href="kv-1/kv-1-0035.jpg">
		<link rel="preload" as="image" href="kv-1/kv-1-0036.jpg">
		<link rel="preload" as="image" href="kv-1/kv-1-0037.jpg">
		<link rel="preload" as="image" href="kv-1/kv-1-0038.jpg">
		<link rel="preload" as="image" href="kv-1/kv-1-0039.jpg">
		<link rel="preload" as="image" href="kv-1/kv-1-0040.jpg">

	<style type="text/css">
		body {
			margin: 0;
			padding: 0;
			background-color: black;
		}

		.spacer.s2 {
			min-height: 1000px;
		}

		.spacer.s0 {
			min-height: 1px;
		}

		#imagesequence {
			margin: 0;
			padding: 0;
			width: 100%;
			height: 100vh;
			margin: 0 auto 0 auto;
		}

		#imagesequence div {
			width: 100%;
			height: 100%;
			background-size: cover;
			background-position: center bottom;
		}

		#imagesequence img {
			width: 100%;
		}
	</style>
</head>
<body>
<!-- <div class="spacer s2"></div> -->
<div class="spacer s0" id="trigger"></div>
<div id="imagesequence">
	<!-- <div id="myimg" style="background-image: url('glass-sphere/img-0010.png');"> -->
	<img id="myimg" src="kv-1/kv-1-0000.jpg">
</div>
<div class="spacer s2"></div>
<script>
	// define images
	var images = [
		"kv-1/kv-1-0000.jpg",
		"kv-1/kv-1-0001.jpg",
		"kv-1/kv-1-0002.jpg",
		"kv-1/kv-1-0003.jpg",
		"kv-1/kv-1-0004.jpg",
		"kv-1/kv-1-0005.jpg",
		"kv-1/kv-1-0006.jpg",
		"kv-1/kv-1-0007.jpg",
		"kv-1/kv-1-0008.jpg",
		"kv-1/kv-1-0009.jpg",
		"kv-1/kv-1-0010.jpg",
		"kv-1/kv-1-0011.jpg",
		"kv-1/kv-1-0012.jpg",
		"kv-1/kv-1-0013.jpg",
		"kv-1/kv-1-0014.jpg",
		"kv-1/kv-1-0015.jpg",
		"kv-1/kv-1-0016.jpg",
		"kv-1/kv-1-0017.jpg",
		"kv-1/kv-1-0018.jpg",
		"kv-1/kv-1-0019.jpg",
		"kv-1/kv-1-0020.jpg",
		"kv-1/kv-1-0021.jpg",
		"kv-1/kv-1-0022.jpg",
		"kv-1/kv-1-0023.jpg",
		"kv-1/kv-1-0024.jpg",
		"kv-1/kv-1-0025.jpg",
		"kv-1/kv-1-0026.jpg",
		"kv-1/kv-1-0027.jpg",
		"kv-1/kv-1-0028.jpg",
		"kv-1/kv-1-0029.jpg",
		"kv-1/kv-1-0030.jpg",
		"kv-1/kv-1-0031.jpg",
		"kv-1/kv-1-0032.jpg",
		"kv-1/kv-1-0033.jpg",
		"kv-1/kv-1-0034.jpg",
		"kv-1/kv-1-0035.jpg",
		"kv-1/kv-1-0036.jpg",
		"kv-1/kv-1-0037.jpg",
		"kv-1/kv-1-0038.jpg",
		"kv-1/kv-1-0039.jpg",
		"kv-1/kv-1-0040.jpg"
	];

	// TweenMax can tween any property of any object. We use this object to cycle through the array
	var obj = {curImg: 0};

	// create tween
	var tween = TweenMax.to(obj, 1,
		{
			curImg: images.length - 1,	// animate propery curImg to number of images
			roundProps: "curImg",				// only integers so it can be used as an array index
			repeat: 0,									// repeat 3 times
			immediateRender: true,			// load first image automatically
			ease: Linear.easeNone,			// show every image the same ammount of time
			onUpdate: function () {
			  $("#myimg").attr("src", images[obj.curImg]); // set the image source
			  // $("#myimg").css('background-image', 'url(' + images[obj.curImg] + ')'); // set the image source
			}
		}
	);

	// init controller
	var controller = new ScrollMagic.Controller();

	// build scene
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger", duration: 4000, triggerHook: 0})
					.setPin('#imagesequence')
					.setTween(tween)
					.addIndicators() // add indicators (requires plugin)
					.addTo(controller);
	

</script>

</body>
</html>