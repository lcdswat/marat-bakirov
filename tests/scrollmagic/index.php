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
	<img id="myimg" src="glass-sphere/img-0010.png">
</div>
<div class="spacer s2"></div>
<script>
	// define images
	var images = [
		"glass-sphere/img-0010.png",
		"glass-sphere/img-0011.png",
		"glass-sphere/img-0012.png",
		"glass-sphere/img-0013.png",
		"glass-sphere/img-0014.png",
		"glass-sphere/img-0015.png",
		"glass-sphere/img-0016.png",
		"glass-sphere/img-0017.png",
		"glass-sphere/img-0018.png",
		"glass-sphere/img-0019.png",
		"glass-sphere/img-0020.png",
		"glass-sphere/img-0021.png",
		"glass-sphere/img-0022.png",
		"glass-sphere/img-0023.png",
		"glass-sphere/img-0024.png",
		"glass-sphere/img-0025.png",
		"glass-sphere/img-0026.png",
		"glass-sphere/img-0027.png",
		"glass-sphere/img-0028.png",
		"glass-sphere/img-0029.png",
		"glass-sphere/img-0030.png",
		"glass-sphere/img-0031.png",
		"glass-sphere/img-0032.png",
		"glass-sphere/img-0033.png",
		"glass-sphere/img-0034.png",
		"glass-sphere/img-0035.png",
		"glass-sphere/img-0036.png",
		"glass-sphere/img-0037.png",
		"glass-sphere/img-0038.png",
		"glass-sphere/img-0039.png",
		"glass-sphere/img-0040.png",
		"glass-sphere/img-0041.png",
		"glass-sphere/img-0042.png",
		"glass-sphere/img-0043.png",
		"glass-sphere/img-0044.png",
		"glass-sphere/img-0045.png"
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
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger", duration: 675, triggerHook: 0})
					.setPin('#imagesequence')
					.setTween(tween)
					.addIndicators() // add indicators (requires plugin)
					.addTo(controller);
	

</script>

</body>
</html>