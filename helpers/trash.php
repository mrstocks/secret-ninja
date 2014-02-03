	
	public static function cdn_image($filename, $module, $id, $view, $class) {
		return "<img src='http://cdn.elevage-fees-de-celestia.fr/uploads/$module/$view/$id/$filename' class='$class'/>";
	}

	public static function cdn_static($filename, $class) {
		return "<img src='http://cdn.elevage-fees-de-celestia.fr/static/".$filename."' class='".$class."' />";
	}
 
