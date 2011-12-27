<?php

$compatible['chrome3+']['file'] = "chrome_3+.png"; 		$compatible['chrome3+']['alt'] = "Google Chrome 3+"; 
$compatible['chrome5+']['file'] = "chrome_5+.png";		$compatible['chrome5+']['alt'] = "Google Chrome 5+";
 
$compatible['firefox1+']['file'] = "firefox_1+.png";	$compatible['firefox1+']['alt'] = "Mozilla Firefox 1+";	

$compatible['ie9+']['file'] = "ie_9+.png";  			$compatible['ie9+']['alt'] = "Internet Explorer 9+";

$compatible['opera10.5+']['file'] = "opera_10.5+.png"; 	$compatible['opera10.5+']['alt'] = "Opera 10.5+";

$compatible['safari3+']['file'] = "safari_3+.png";		$compatible['safari3+']['alt'] = "Safari 3+"; 		
$compatible['safari5+']['file'] = "safari_5+.png";		$compatible['safari3+']['alt'] = "Safari 5+";


$array['border_radius'] = array('chrome5+','safari5+','opera10.5+','ie9+');
$array['mozilla'] = array('firefox1+');
$array['webkit'] = array('chrome3+','safari3+');

$categories = array('border_radius','mozilla','webkit');
$title['border_radius'] = 'border-radius';
$title['mozilla'] = '-moz';
$title['webkit'] = "-webkit";

echo '<div class="bottom">';
echo '<span class="compat">Browser Compatibility</span>';
echo '<table><tr>';

foreach($categories as $arrays){
	echo '<td class="main">';
	echo $title[$arrays];
	echo '<br/>';
	foreach($array[$arrays] as $browser){
		$file = $compatible[$browser]['file'];
		$alt = $compatible[$browser]['alt'];
		
		echo '<img src="images/' . $file . '" alt="' . $alt . '"/>';
		}
	
	echo '</td>';
}
echo '</tr></table>';
echo '</div>';
?>
