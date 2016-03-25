
<html>
<body>


<script src="jquery.js"></script>
<script src="city3.js"></script>

<script>
	$.post(
	'server.php',
	'ajax:post',
	function(data){
	var city=data;
	},'json'
	);
	console.log(cityData3);
</script>
</body>
</html>