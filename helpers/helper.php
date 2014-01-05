<?php
/****
 * This class just saves typeing too much and take the legic of the view out of
 * the controller
 *
 */

class Helper {

	/**
	 * Get the list of the dogs for the menu
         *
         */
	public function get_dogs_list() {
		// Only get the id and the name
		$dogs = Dog::find('all', array('select' => 'id, name'));

		return $dogs;
	}

	/**
	 * Call if not found
         *
         */
	public function not_found($info) {
		$error = Errors::create(array(
			'level'	=> '1',
			'title'	=> $info[0],
			'info'	=> $info[1]
		));

		$host  = $_SERVER['HTTP_HOST'];
		$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		header("Location: http://$host$uri");
		exit;
	}

	/**
	 * Save typing using size of the image
	 *
	 */
	public function image_tag($filename, $class) {
		list($width, $height, $type, $attr) = getimagesize(__PATH__ . $filename);

		$host  = $_SERVER['HTTP_HOST'];

		return "<img src='http://$host$filename' height='".$height."' width='".$width."' class='". $class ."' />";
	}

	/**
	 * display an image with custom size
	 * attibutes: $option array heigh, width, class
	 */
	public function image_tag_with_options($filename, $options) {
		$host  = $_SERVER['HTTP_HOST'];
		$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

		return "<img src='http://$host$filename' height='". $options['height']."' width='".$options['width']."' class='". $options['class'] ."' />";

	}

	/**
	 * Back link
         *
         */
	public function back_link($class, $name) {
		$host  = $_SERVER['HTTP_HOST'];

		return "<a href='http://$host' class='btn btn-block btn-lg $class'>$name</a>";

	}

	/**
	 * Carrousel
	 *
	 */
	public static function carrousel($data_object) {
		echo '<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">';

		// Indicators
		echo '<ol class="carousel-indicators">';
		foreach ($data_object as $id => $value) {
			if ($id == 0) {
			echo '<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>';
			} else {
				echo '<li data-target="#carousel-example-generic" data-slide-to="' . $id . '"></li>';
			}

		}
		echo '</ol>';

		echo '<div class="carousel-inner">';

		foreach ($data_object as $id => $value) {
			if ($id == 0) {
				echo '
     				<div class="item active">
					'. self::image_tag($value->filename,'rounded').'
      					<div class="carousel-caption">
        					'.$value->title.'
      					</div>
    				</div>';
   			} else {
    				echo '<div class="item">'. self::image_tag($value->filename,'rounded').'<div class="carousel-caption">'.$value->title.'</div></div>';
			}
		}

		echo '</div>';
		self::carrousel_controls();
		echo '</div>';

	}

	/**
	 * Pointless function for the carrousel
	 */
	public static function carrousel_controls() {

		echo'<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
		<a class="right carousel-control" href="#carousel-example-generic" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
		';
	}

	public static function accordion($id,$title,$info) {
		#TO DO change the button
		echo '
		<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal'.$id.'" style="margin: 15px;">
  			'.$title.'
		</button>

		<div class="modal fade" id="myModal'.$id.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">'.$title.'</h4>
					</div>
					<div class="modal-body">
						'.$info.'
						<hr />
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		';
	}
}
$helper = New Helper();
?>