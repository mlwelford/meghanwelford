<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>CSS3 Border Radius Generator</title>

<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:100,light,regular' rel='stylesheet' type='text/css'>
<link href='css/main.css' rel='stylesheet' type='text/css'>

<?php require_once('include/br.php');

$check_wk = $_POST['webkit'];
$check_moz = $_POST['moz'];
$check_css3 = $_POST['css3'];

?>

<style>
	.borderradius {
		
		<?php 
		foreach($bord as $b){
			echo $b;}
		foreach($moz as $mz){
			echo $mz;}
		foreach($webkit as $wk){
			echo $wk;}
		?>
		
		
		}
</style>

</head>

<body>

<h1>Border Radius Generator</h1>
<h3>by Meghan Welford</h3>

<div class="borderradius">

<form method="post" id="corners">
<input type="text" name="tl" class="tl" placeholder="0" value="<?php echo $tl;?>" 
onChange="this.form.submit()"/>
<input type="text" name="tr" class="tr" placeholder="0" value="<?php echo $tr;?>"
onChange="this.form.submit()"/>
<input type="text" name="bl" class="bl" placeholder="0" value="<?php echo $bl;?>"
onChange="this.form.submit()"/>
<input type="text" name="br" class="br" placeholder="0" value="<?php echo $br;?>"
onChange="this.form.submit()"/>
</form>

<textarea class="code" readonly="readonly">
<?php
if(isset($_POST)){
foreach($bord as $b){
	echo $b;}
foreach($moz as $mz){
	echo $mz;}
foreach($webkit as $wk){
	echo $wk;}
}
?>
</textarea>

</div>

<?php

require_once('include/compatibility.php');





 ?>


</body>
</html>