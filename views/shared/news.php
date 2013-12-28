<br />
<p>Plus de lecture</p>

<?php

// TODO get the last 10 news
$options = array(
			'limit' => 10,
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
