<?php

// TODO get the last 4 news
$options = array(
			'limit' => 4,
			'order' => "ID DESC"
		);

$news = News::all($options); 

echo "<ul>";
foreach($news as $new) {
	echo "<li><small><a href='index.php/news/view/".$new->id ."'>". $new->title ."</a></small></li>";
}
echo "</ul>";

// ul li news title w/ link
?>
