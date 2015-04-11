<!DOCTYPE html>
<html>
<head>
	<title>Life-Studios &bull; UserCP</title>
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="javascript/jquery.js"></script>
	<script type="text/javascript"> 
		var totalCount = 4;
		function ChangeIt() 
		{
		var num = Math.ceil( Math.random() * totalCount );
		document.body.background = 'images/backgrounds/'+num+'.png';
		document.body.style.backgroundRepeat = "repeat";// Background repeat
		}
	</script>
</head>
<body>
<div class="container">
	<div class="logo-container">
		<img src="images/logo.png" class="lslogo">
	</div>
	<div class="navigation-menu">
		<div class="inner-navigation">
			<a href="index.php?page=home" class="button">
				<img src="images/home.png" class="button-img">
			</a>
			<a href="index.php?page=stats" class="button">
				<img src="images/stats.png" class="button-img">
			</a>
			<a href="index.php?page=gangcp" class="button">
				<img src="images/gangcp.png" class="button-img">
			</a>
			<a href="index.php?page=police" class="button">
				<img src="images/police.png" class="button-img">
			</a>
			<a href="index.php?page=ems" class="button">
				<img src="images/ems.png" class="button-img">
			</a>	
		</div>
	</div>
	<div class="main-container">
	
	</div>
</div>
<script type="text/javascript"> 
	ChangeIt();
</script> 
</body>
</html>