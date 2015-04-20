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
			<a href="index.php?page=support" class="button">
				Support
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
			<table>
			  <thead>
				<tr>
				  <th>Option</th>
				  <th>Default</th>
				  <th>Description</th>
				</tr>
			  </thead>
			  <tbody>
				<tr>
				  <td><strong>showSpeed</strong></td>
				  <td>15</td>
				  <td>The speed of the show/reveal</td>
				</tr>
				<tr>
				  <td><strong>showEasing</strong></td>
				  <td>'linear'</td>
				  <td>The easing of the show/reveal</td>
				</tr>
				<tr>
				  <td><strong>hideSpeed</strong></td>
				  <td>50</td>
				  <td>The speed of the hide/conceal</td>
				</tr>
				<tr>
				  <td><strong>hideEasing</strong></td>
				  <td>'linear'</td>
				  <td>The easing of the hide/conceal</td>
				</tr>					
				<tr>
				  <td><strong>width</strong></td>
				  <td>'auto'</td>
				  <td>The width that the data will be truncated to - <em>('auto' or px amount)</em></td>
				</tr>
				<tr>
				  <td><strong>ellipsis</strong></td>
				  <td>true</td>
				  <td>Set to true to enable the ellipsis</td>
				</tr>
				<tr>
				  <td><strong>title</strong></td>
				  <td>false</td>
				  <td>Set to true to show the full data on hover</td>
				</tr>
				<tr>
				  <td><strong>afterShow</strong></td>
				  <td> $.noop</td>
				  <td>The callback fired after the show/reveal</td>
				</tr>
				<tr>
				  <td><strong>afterHide</strong></td>
				  <td>$.noop</td>
				  <td>The callback fired after the hide/conceal</td>
				</tr>
			  </tbody>
			</table>
		 </div>
	<?php }elseif($page == "support"){ ?>
		 <div class="content-container">
			<b>Stats</b>
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