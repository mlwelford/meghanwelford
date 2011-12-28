<?
include('db.php');
connect_home();


// GET CONTENT
function content($category,$sort){
	global $content;
	global $img;
	
	// BEGIN ALL QUERIES
	$query		 =	"SELECT DISTINCT c.id, c.heading, c.sub_heading, c.content, c.link, c.date ";
	
	// If CATEGORY EXISTS
	if($category != ''){
		$query		.=	"FROM content_category cc JOIN content c ";
		$query		.=	"ON cc.content_id = c.id ";
		$query		.=	"WHERE cc.category_abbrev = '$category' ";
		}	
	//IF CATEGORY DOES NOT EXIST, GET ALL
	else{
		$query		.=	"FROM content c ";
		}
			
	//IF SORT IS SPECIFIED
	if($sort != ''){
		$query		.=	"ORDER BY $sort ";
	} else{
		$query		.=	"ORDER BY c.date DESC ";
	}
	
	//END QUERY
	
	$result			 =	mysql_query($query);
	
	$i = 0;
	while($row = mysql_fetch_array($result,MYSQL_ASSOC)){
		$content[$i] = $row;
		
		//GET MAIN COVER IMAGE
		$c_id = $row['id'];
		images($c_id,'1');
		$content[$i]['img'] = $img[$c_id][0];
		$i++;
	}	
}

// GET ASSOCIATED IMAGES
function images($content_id,$limit){
	global $img;
	$query 		 =	"SELECT img, priority FROM ";
	$query 		.=	"content_images ";
	$query		.=	"WHERE content_id = '$content_id' ";
	$query 		.=	"ORDER BY priority ASC, date DESC ";
	
	if($limit != ''){
	$query		.=	"LIMIT $limit "; 
	}
	
	$result = mysql_query($query);
	
	while($row = mysql_fetch_array($result,MYSQL_ASSOC)){
		$img[$content_id][] = $row['img'];
	}
}

?>