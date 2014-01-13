<?php

require_once __DIR__ . '/../ActiveRecord/ActiveRecord.php';

ActiveRecord\Config::initialize(function($cfg)
{
    $cfg->set_model_directory('models');
    $cfg->set_connections(array(
        'development' => 'mysql://root:mysql@localhost/celestia-dev'));
});

?>
