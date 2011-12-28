<? include('assets/php/functions.php');?>
<?
	$content_id = $_REQUEST['cid'];
	// $category = $_REQUEST['c'];		if(!$category){$category = '';}
	// 	$sort = $_REQUEST['s'];			if(!$sort){$sort = '';}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en">
<head>
	<!--[if lt IE 9]>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,800italic,300italic,600italic,400,300,600,700,800' 
		rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
	<![endif]-->
	<base href="<? echo curPageURL(); ?>" />
		
	<link rel="stylesheet" type="text/css" href="assets/css/reset.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/main.css" />
	
	<!-- SLIDER -->
	<link rel="stylesheet" href="assets/css/jshowoff.css" type="text/css" media="screen, projection" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script> 
	<script type="text/javascript" src="assets/js/jquery.jshowoff.min.js"></script>
	<!-- END SLIDER -->

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Meghan Welford | Portfolio </title>
	<meta name="generator" content="TextMate http://macromates.com/">
	<meta name="author" content="Meghan Welford">
	
	<!-- Google Analytics -->
	<script src="assets/js/google_analytics.js" type="text/javascript"></script>
	
	<!-- Share This Widget -->
	<script type="text/javascript">var switchTo5x=true;</script><script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
	<script type="text/javascript">stLight.options({publisher:'376f0fc1-9bad-4a27-ac42-7d790c6a7b78'});</script>
</head>
<body>
	<? 
		include ('assets/php/header.php');
	?>
	
	<h1 class="mw"><? if($content_id!=''){echo $content_id;}else{echo 'Meghan Welford';}?></h1>
	
	<!-- LEFT COLUMN -->
	
		<div id="features">
			<!-- BEGIN FEATURE A -->
			<? images($content_id,'');
			foreach($image as $i):?>
			<div>
				<!-- PICTURE -->
				<div class="left">
					<div class="content" style="padding-bottom: 0;">
					<a href="<? echo $i['link'];?>">
					<img src="assets/images/<? echo $i['img'];?>" />
					</a>
					</div>
				</div>
				<!-- DESCRIPTION -->
				<div class="right">
					<div class="content">
						<h3><? echo $i['title'];?></h3>
						<? echo $i['description'];?>
					</div>
				</div>
			</div>
			<? endforeach;?>
		</div>

			<script type="text/javascript">		
			$(document).ready(function(){ $('#features').jshowoff(); });
			</script>

		</div>

</body>
</html>
