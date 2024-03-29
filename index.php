<?php
$page = $_GET["page"];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Life-Studios &bull; UserCP</title>
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/pace.css">
	<link rel="stylesheet" href="css/external.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	
	<script src="javascript/jquery.js"></script>
	<script src="javascript/pace.js"></script>
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
<div class="container-page">
	<div class="logo-container">
		<img src="images/logo.png" class="lslogo">
	</div>
	<div class="navigation-menu">
		<div class="inner-navigation">
			<a href="index.php?page=home" class="button">
				<img src="images/home.png" class="img-button">
			</a>
			<a href="index.php?page=stats" class="button">
				<img src="images/stats.png" class="img-button">
			</a>
			<a href="index.php?page=support" class="button">
				<img src="images/stats.png" class="img-button">
			</a>
			<a href="index.php?page=gangcp" class="button">
				<img src="images/gangcp.png" class="img-button">
			</a>
			<a href="index.php?page=police" class="button">
				<img src="images/police.png" class="img-button">
			</a>
			<a href="index.php?page=ems" class="button">
				<img src="images/ems.png" class="img-button">
			</a>
		</div>
	</div>
	<div class="main-container">
	
	<?php if(($page == "") || ($page == "home")){ ?>
		<div class="content-container">
			<div class="container-welcome">
				Welcome back <b>Jarvis Westen</b>!
			</div>
		</div>
	<?php }elseif($page == "stats"){ ?>
		 <div class="content-container">
			<b>Statistics</b>
		 </div>
	<?php }elseif($page == "support"){ ?>
		 <div class="content-container">
			<b>Support Panel</b>
		 </div>
	<?php }elseif($page == "gangcp"){ ?>
		<div class="content-container">
			<b>Gang CP</b>
		</div>
	<?php }elseif($page == "police"){ ?>
		<div class="content-container">
			<b>Police CP</b>
		</div>
	<?php }elseif($page == "ems"){ ?>
		<div class="content-container">
			<b>EMS CP</b>
		</div>
	<?php }?>
	
	</div>
	<div class="footer">
	</div>
</div>
<script type="text/javascript"> 
	ChangeIt();
</script> 
</body>
</html>