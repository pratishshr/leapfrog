<html>
<head>
	<title> Ajax Practice </title>
	<script src="assets/js/jquery.min.js"></script>
<body>
	<button id="serverdate"> Get Server DATE </button>
	<div id="result"></div>
	<input type="text" id="value" name="value">
	<div id="result2"></div>
	<div id="result3"></div>
	<script>	
		$(document).on("ready",function(){

			$("#serverdate").on("click",function(){
					setInterval(function(){
						getserverdate();
					});
					
			});

			$("#value").on("keyup",function(){
				
				getservervalue();
				getdata();
			});
		});

		function getserverdate(){
			$.get("partial/serverdate.php",null,function(data){
				$("#result").html(data);
			});
		};

		function getservervalue(){
			$.get("partial/servervalue.php","value=" +   $("#value").val(),function(data){
				
				$("#result2").html(data);
		
			
			});
		}	

		function getdata(){

			$.get("partial/array.php","value=" + $("#value").val(),function(data){
				if(data=="true"){
					$("#result3").html("Not Available");
				}else
					$("#result3").html("Available");
			});
		}	
		
	</script>

</body>	
</head>
</html>