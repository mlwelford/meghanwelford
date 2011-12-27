<?php

//Get Variables
$tl = $_POST['tl'];	
$tr = $_POST['tr'];		if($tr == ''){$tr = $tl;}
$bl = $_POST['bl'];		if($bl == ''){$bl = $tl;}
$br = $_POST['br'];		if($br == ''){$br = $tl;}

$radius = array($tl,$tr,$bl,$br);
$radius = array_unique($radius);

$position[$tl][] = 'top-left';
$position[$tr][] = 'top-right';
$position[$bl][] = 'bottom-left';
$position[$br][] = 'bottom-right';

$count_tl = count($position[$tl]);

$i = 1;
foreach($radius as $corner){
	
	$count = count($position[$corner]);
	
	if($count >= '2' && $corner == $tl){
		if($corner !='0' && $corner !=''){
		$webkit[0] = nl2br('-webkit-border-radius: ' . $corner . 'px;/n');
		$moz[0] = nl2br('-moz-border-radius: ' . $corner .'px;/n');
		$bord[0] = nl2br('border-radius: ' . $corner . 'px;/n');
		}
	}
	else if($count >= '2' && $count_tl == '1'){
		if($corner !='0' && $corner !=''){
		$webkit[0] = nl2br('-webkit-border-radius: ' . $corner . 'px;/n');
		$moz[0] = nl2br('-moz-border-radius: ' . $corner .'px;/n');
		$bord[0] = nl2br('border-radius: ' . $corner . 'px;/n');
		}
		}
	else{
		foreach($position[$corner] as $pos){
			$webkit[$i] = nl2br('-webkit-border-' . $pos . '-radius: ' . $corner . 'px;/n');
			$moz[$i] = nl2br('-moz-border-radius-' . str_replace('-','',$pos) . ':' . $corner . 'px;/n');
			$bord[$i] = nl2br('border-' . $pos . '-radius: ' . $corner . 'px;/n');
			$i++;
		}
	}
	
	
}

ksort($webkit);
ksort($moz);
ksort($bord);

?>