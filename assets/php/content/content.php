<?
	// HOME PAGE CONTENT - DISPLAY ALL
	content($category,$sort);
	foreach($content as $c): 
	?>
	
	<div class="content" id="main">
		<? if($c['img']){ ?>
			<div class="image"><a href="<? echo $c['link'];?>"><img src="assets/images/<? echo $c['img'];?>" alt="Border Radius" width="100%"></a></div>
		<? }?>
		<h2><? echo $c['heading'];?></h2>
		<? echo $c['content'];?>
	</div>
	
	<? endforeach;?>


