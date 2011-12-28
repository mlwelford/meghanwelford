<?
include('db.php');
connect_home();


// Get Content
function content($category,$sort){
	global $content;
	// BEGIN ALL QUERIES
	$query		 =	"SELECT DISTINCT c.id, c.heading, c.sub_heading, c.content, c.img, c.link, c.date ";
	
	// If CATEGORY EXISTS
	if($category != ''){
		$query		.=	"FROM content_category cc JOIN content c ";
		$query		.=	"ON cc.content_id = c.id ";
		}	
	//IF CATEGORY DOES NOT EXIST, GET ALL
	else{
		$query		.=	"FROM content c ";
		}
	
	//IF SORT IS SPECIFIED
	if($sort != ''){
		$query		.=	"ORDER BY $sort ";
	} else{
		$query		.=	"ORDER BY c.date ";
	}
	//END QUERY
	
	$result			 =	mysql_query($query);
	
	while($row = mysql_fetch_array($result,MYSQL_ASSOC)){
		$content[] = $row;
	}
	
	
}

?>