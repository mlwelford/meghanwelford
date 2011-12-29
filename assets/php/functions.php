<?
include('db.php');
connect_home();

//CURRENT PAGE URL
	function curPageURL() {
	 $pageURL = 'http';
	 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
	 $pageURL .= "://";
	 if ($_SERVER["SERVER_PORT"] != "80") {
	  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	 } else {
	  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	 }
	 return $pageURL;
	echo $pageURL;
	}

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
		global $image;
		$query 		 =	"SELECT img, priority, link, description, title FROM ";
		$query 		.=	"content_images ";
		$query		.=	"WHERE content_id = '$content_id' ";
		$query 		.=	"ORDER BY priority ASC, date DESC ";
	
		if($limit != ''){
		$query		.=	"LIMIT $limit "; 
		}
	
		$result = mysql_query($query);
	
		while($row = mysql_fetch_array($result,MYSQL_ASSOC)){
			$img[$content_id][] = $row['img'];
		
			$image[] = $row;
		}
	}

//GET CATEGORY NAME
	function category_name($cat){
		$query 		=	"SELECT name FROM category WHERE abbrev = '$cat'";
		$result		=	mysql_query($query);
	
		$name 		=	mysql_fetch_row($result);
		return $name[0];
	}

//GET CONTENT HEADING
	function content_heading($content_id){
		$query		=	"SELECT heading FROM content WHERE id='$content_id'";
		$result 	=	mysql_query($query);
		$row		=	mysql_fetch_row($result);
		return $row[0];
	}

?>