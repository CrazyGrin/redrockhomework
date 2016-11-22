<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		div{
			width: 100px;
			height: 100px;
			float: left;
		}
		.one{
			background-color: rgba(132,255,132,1);
		}
		.two{
			background-color: rgba(2,176,80,1);
		}
		.three{
			background-color: rgba(32,85,132,1);
		}
	</style>
</head>
<body>
	<?php 
	function demo(){
		$one = '<div class="one"></div>';
		$two = '<div class="two"></div>';
		$three = '<div class="three"></div>';
		$array = array("$one","$two","$three");
		foreach ($array as $value) {
			echo $value;
		};
	};
	demo();
?>
</body>
</html>