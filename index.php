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
<div class="container">
	<div class="logo-container">
		<img src="images/logo.png" class="lslogo">
	</div>
	<div class="navigation-menu">
		<div class="inner-navigation">
			<a href="index.php?page=home" class="button">
				Home
			</a>
			<a href="index.php?page=stats" class="button">
				Statistics
			</a>
			<a href="index.php?page=gangcp" class="button">
				GangCP
			</a>
			<a href="index.php?page=police" class="button">
				Police
			</a>
			<a href="index.php?page=ems" class="button">
				EMS
			</a>
			<a href="#" class="button">
			<img src="http://placehold.it/48x48"> Username
			</a>
		</div>
	</div>
	<div class="main-container">
	
	<?php if(($page == "") || ($page == "home")){ ?>
		 <b>Home Page</b>
	<?php }elseif($page == "stats"){ ?>
		 <b>Stats</b>
	<?php }elseif($page == "gangcp"){ ?>
		 <b>Gang CP</b>
	<?php }elseif($page == "police"){ ?>
		 <b>Police CP</b>
	<?php }elseif($page == "ems"){ ?>
		 <b>EMS CP</b>
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