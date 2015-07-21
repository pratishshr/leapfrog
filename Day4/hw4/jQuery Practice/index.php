<html>
<head>
	<title> jQuery Practice </title>
	<script src="assets/js/jquery.min.js"></script>
</head>
<body>
	<div id="box"></div>
	<br/>
	<button id="btn">ANIMATE! </button>
	<br/>
	<br/>

	<div class="color"> Animated Box</div>
	<br/>
	<div class="color"> Second Animated Box </div>
	<br/>

	<button id="btn2"> ANIMATE Another! </button>
	<button  id="reset"> Reset Position </button>
	<div id="zoom" style="position:absolute;"> Zoom! </div>
	<br/>
	<br/>
	<div> Press Arrow keys to move about Word </div>
	<br/>
	<a href="ajax.php"> AJAX PRACTICE </a>

<!--	<script>
		document.getElementById("box").style.height="100px";
		document.getElementById("box").style.width="200px";
		document.getElementById("box").style.border="1px solid black";
	</script> -->
	
	

	<script>
		$(document).on("ready",function(){

			var box = $("#box");
			box.html("HELLO WORLD!");
			box.css("height","200px").css("width","300px").css("border","1px solid black");
			box.css("display","none");
			setInterval(function(){box.fadeIn("slow",function(){
				$(this).fadeOut("slow");
			});});

			var color = $(".color");
			color.css("height","50px").css("width","100px").css("border","1px solid black");

			var btn = $("#btn");
			
			btn.on("click",function(){
				
				color.slideToggle();
			});

			var btn2= $("#btn2");
			var reset= $("#reset");
			var zoom = $("#zoom");


			btn2.on("click",function(){
				zoom.animate({
					left : "+=200px"
				});
			});

			reset.on("click",function(){
				zoom.animate({
					left : "9px"
				});
			});

			zoom.on("mouseenter",function(){
				zoom.fadeOut();

			});
			zoom.on("mouseleave",function(){
				zoom.fadeIn	();

			});
			
			$(document).keydown(function(e) {
				if(e.keyCode==37){
					zoom.animate({
					left : "-=100px"
				});
				}else if(e.keyCode==38){
					zoom.animate({
					top : "-=100px"
					});
				}else if(e.keyCode==39){
					zoom.animate({
					left : "+=100"
					});
				}else if(e.keyCode==40){
					zoom.animate({
					top : "+=100px"
					});
				}
			});

		});	
			
	</script>

</body>
</html>
