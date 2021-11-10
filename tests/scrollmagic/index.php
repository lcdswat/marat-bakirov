<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>scrollmagic test</title>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.14.2/TweenMax.min.js"></script>
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
			width: 100%;
			margin: 0 auto 0 auto;
			height: 700px;
		}

		/*#wrapper {
			width: 100%;
			height: 100vw;
			overflow: hidden;
		}*/
	</style>
</head>
<body>
<div class="spacer s0"></div>
<div id="imagesequence">
	<img id="myimg" src="hyperspace/hyperspace_bg_00000.png">
</div>
<div class="spacer s2"></div>
<script>
	// define images
	var images = [
		"hyperspace/hyperspace_bg_00000.png",
		"hyperspace/hyperspace_bg_00001.png",
		"hyperspace/hyperspace_bg_00002.png",
		"hyperspace/hyperspace_bg_00003.png",
		"hyperspace/hyperspace_bg_00004.png",
		"hyperspace/hyperspace_bg_00005.png",
		"hyperspace/hyperspace_bg_00006.png",
		"hyperspace/hyperspace_bg_00007.png",
		"hyperspace/hyperspace_bg_00008.png",
		"hyperspace/hyperspace_bg_00009.png",
		"hyperspace/hyperspace_bg_00010.png",
		"hyperspace/hyperspace_bg_00011.png",
		"hyperspace/hyperspace_bg_00012.png",
		"hyperspace/hyperspace_bg_00013.png",
		"hyperspace/hyperspace_bg_00014.png",
		"hyperspace/hyperspace_bg_00015.png",
		"hyperspace/hyperspace_bg_00016.png",
		"hyperspace/hyperspace_bg_00017.png",
		"hyperspace/hyperspace_bg_00018.png",
		"hyperspace/hyperspace_bg_00019.png",
		"hyperspace/hyperspace_bg_00020.png",
		"hyperspace/hyperspace_bg_00021.png",
		"hyperspace/hyperspace_bg_00022.png",
		"hyperspace/hyperspace_bg_00023.png",
		"hyperspace/hyperspace_bg_00024.png"

	];

	// TweenMax can tween any property of any object. We use this object to cycle through the array
	var obj = {curImg: 0};

	// create tween
	var tween = TweenMax.to(obj, 0.5,
		{
			curImg: images.length - 1,	// animate propery curImg to number of images
			roundProps: "curImg",				// only integers so it can be used as an array index
			repeat: 3,									// repeat 3 times
			immediateRender: true,			// load first image automatically
			ease: Linear.easeNone,			// show every image the same ammount of time
			onUpdate: function () {
			  $("#myimg").attr("src", images[obj.curImg]); // set the image source
			}
		}
	);

	// init controller
	var controller = new ScrollMagic.Controller();

	// build scene
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger", duration: 1000})
					.setPin('#imagesequence')
					.setTween(tween)
					.addIndicators() // add indicators (requires plugin)
					.addTo(controller);
</script>

</body>
</html>