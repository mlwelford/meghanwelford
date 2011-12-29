<?
	// HOME PAGE CONTENT - DISPLAY ALL
	content($category,$sort);
	if(count($content)!=0):
		foreach($content as $c): 
		?>
	
		<div class="content" id="main">
			<? if($c['img']): ?>
				<div class="image"><a href="item.php?cid=<? echo $c['id'];?>">
					<img src="assets/images/<? echo $c['img'];?>" 
					alt="<? echo $c['title'];?>" width="100%" 
					oncontextmenu="return false;" 
					onmousedown="event.preventDefault ? event.preventDefault() : event.returnValue = false"></a></div>
			<? endif; ?>
			<h2><? echo $c['heading'];?></h2>
			<? echo $c['content'];?>
		
			<!-- IF AN IMAGE EXISTS, LINK TO THE SLIDESHOW PAGE -->
			<? if($c['img']): ?>
			<p><a href="item.php?cid=<? echo $c['id'];?>">Check it out &rarr;</a></p>
			<? endif; ?>
		</div>
		<? 
		endforeach;
	
	else:?>
		<div class="content" id="main">
			<h2 align="center">Sorry, there are no matches!</h2>
		</div>
	<?
	endif;
	?>


