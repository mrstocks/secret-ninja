<?php
/****
* This class just saves typing too much and take the logic of the view out of
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
                        'level'        => '1',
                        'title'        => $info[0],
                        'info'        => $info[1]
                ));

                $host = $_SERVER['HTTP_HOST'];
                $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
                header("Location: http://$host$uri");
                exit;
        }

        /**
         * Save typing using size of the image
         *
         */
        public  static function image_tag($filename, $class) {
                list($width, $height, $type, $attr) = getimagesize(__PATH__ . "/".$filename);

                $host = $_SERVER['HTTP_HOST'];

                return "<img src='http://$host/$filename' height='".$height."' width='".$width."' class='". $class ."' />";
        }
	
	public static function cdn_image($filename, $module, $id, $view, $class) {
		return "<img src='http://cdn.elevage-fees-de-celestia.fr/uploads/$module/$view/$id/$filename' class='$class'/>";
	}

	public static function cdn_static($filename, $class) {
		return "<img src='http://cdn.elevage-fees-de-celestia.fr/static/".$filename."' class='".$class."' />";
	}
        /**
         * display an image with custom size
         * attibutes: $option array heigh, width, class
         */
        public static function image_tag_with_options($filename, $options) {
                $host = $_SERVER['HTTP_HOST'];
                $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');

                return "<img src='http://$host$filename' height='". $options['height']."' width='".$options['width']."' class='". $options['class'] ."' />";

        }

        /**
         * Back link
         *
        */
        public static  function back_link($class, $name) {
                $host = $_SERVER['HTTP_HOST'];

                return "<a href='http://$host' class='btn btn-block btn-lg $class'>$name</a>";

        }

        /**
         * Carrousel
         *
         */
        public static function carrousel($data_object, $module) {
                echo '<div id="carousel-example-generic" class="carousel slide rounded img-thumbnail" data-ride="carousel">';

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
                                        '. self::cdn_image($value->filename,$module,$value->id,"filename" ,"").'
                                        <div class="carousel-caption">
                                        '.$value->title.'
                                        </div>
                                </div>';
                           } else {
                                    echo '<div class="item">'.self::cdn_image($value->filename,$module,$value->id,"filename" ,"").'<div class="carousel-caption">'.$value->title.' </div></div>';
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

	/***
	 *
	 */
        public static function puppylist($mating_title, $image, $sex, $color, $price, $name, $information)
        {
            echo '  <div class="chiot rounded-border">
                      <div class="panel panel-default">
                      <div class="panel-heading">
                      <span class="badge pull-right"> '.$price .'&euro;</span>
                        <h3 class="panel-title"> '.$name.'</h3>
                      </div>
                      <div class="panel-body">
                          <div class="col-md-4 img-thumbnail">
                            <img src="'.$image.'" alt="Dog Image">
                          </div>
                          <div class="col-md-8">
                            <p><span>Accouplement:</span> '.$mating_title.'</p>
                            <p><span>Pris:</span> '.$price.' &euro;</p>
                            <p><span>Sexe:</span> '.$sex.'</p>
                            <p><span>Couleur:</span> '.$color.'</p>
                            <p><span>Plus d\'informations:</span><br/> '.$information.'</p>
                            <p><span>Plus de photo? ou De l\'aide? <a href="/index.php/contact">Contactez nous</a></span></p>
                          </div>
                      </div>
                    </div>
                    </div> ';
        }


        /**
         * Shuffles an associative array
         * @param  reference to the array to  be shuffled
         * @return  true if the array has been shuffled
         */
        public static function shuffle_array(&$array) 
        {
           $keys = array_keys($array);

           shuffle($keys);

           foreach($keys as $key) {
              $new[$key] = $array[$key];
           }

           $array = $new;
           return true;
        }

        public static function gallery_tile($data_object)
        {
            Helper::shuffle_array($data_object);
            foreach ($data_object as $id => $value)
            {
              if( ($id + rand()) % 9== 0)
              {
                  echo ' <div class="gallery-tile lg col-md-8">';
              }
              else
              {
                  if($id % 2 == 0)
                  {
                      echo '<div class="gallery-tile ln col-md-4">';
                  }

                  else
                  {
                      echo '<div class="gallery-tile col-md-4">';
                  }
              }
              echo '<div class="tile-item">';
              echo '<a href="'.$value->filename.'" data-lightbox="image-1" title="'.$value->title.'"><img src="',$value->filename. '"/></a>';

              // IF dog is available for sale
              if ($value->available)
              {
                  echo '<figcaption><p>
                              <a class="btn btn-info" href="/index.php/chiens/show/'. $value->dog_id.'">More Information
                              </a></p>
                      </figcaption>';
              }
              echo '<div class="tile-caption"><p>'.$value->title.'</p>
                      <div class="box-tag">
                        <div class="tag-bottom">
                          <div class="tag-text">';

              if($value->available)
              {
                  echo '<span class="glyphicon glyphicon-ok-sign"></span>Disponible';        
              }
              else 
              {
              echo '<span class="glyphicon glyphicon-remove-sign"></span>Vendu';
              }

              echo '</div></div><div class="tag-top"><span class="glyphicon glyphicon-pushpin"></span></div></div></div></div></div>';
            }
      }

      public static function featured_posts($post_info)
      {
        foreach ($post_info as $id => $value)
        {
          echo  '<article class="col-md-4 featured-post">
                  	<div class="post-image">
                    		'.self::cdn_image($value->filename,'frontpagepost', $value->id, 'filename','').'
                    	</div>
                    	<div clas="post-caption">
	                    <h5>'.$value->name. '</h5>
	                        <p>'.$value->caption.'</p>
	                    </div>
	             </article>';
        }
      }
}

$helper = New Helper();
?>
