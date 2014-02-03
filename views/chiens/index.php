<div class="container">
  <div class="row">
    <h3>Please design this page</h3>
  </div>
</div>

<ul>
<?php
$doglists = helper::get_dogs_list();

foreach($doglists as $dog) {
  echo "<li><a href='/index.php/chiens/show/".$dog->id."'>".$dog->name."</a></li>";

}
?>
</ul>
