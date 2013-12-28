<br />
<b>Autres news!</b>

<?php

// TODO get the last 10 news
$options = array('limit' => 10);
$news = News::find($options); 

echo "<ul>";
foreach($news as $new) {
	echo "<li><a href=''>". $news->title ."</a></li>";
}
echo "</ul>";

// ul li news title w/ link
?>
