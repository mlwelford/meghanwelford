<?
// Your Server Name:		meghanwelfordcom.ipagemysql.com
// Database Name:			mw_home01
// Database Username:		mw_admin01
// Database Password:		ADMIN1234

function connect_home(){
	$server 	=	'meghanwelfordcom.ipagemysql.com';
	$db_user	=	'mw_admin01';
	$db_pw		=	'ADMIN1234';
	$db_name	=	'mw_home01';
	
	
	$link = mysql_connect($server, $db_user, $db_pw); 
	if (!$link) { 
	    die('Could not connect: ' . mysql_error()); 
	} 
	echo 'Connected successfully'; 
	mysql_select_db($db_name);
}



?>