<?
	content('','');
	foreach($content as $c): ?>
	
	<div class="content" id="main">
		<a href="<? echo $c['link'];?>"><img src="assets/images/<? echo $c['img'];?>" alt="Border Radius" width="100%"></a>
		<h2><? echo $c['heading'];?></h2>
		<? echo $c['content'];?>
	</div>
	
	<? endforeach;?>


