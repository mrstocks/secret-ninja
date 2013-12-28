<?php

require_once __DIR__ . '/../ActiveRecord/ActiveRecord.php';

$connections = array(
	'delevelopement' => 'mysql://root:mysql@127.0.0.1/celestia'
);

ActiveRecord\Config::initialize(function($cfg)
{
    $cfg->set_model_directory('models');
    $cfg->set_connections(array(
        'development' => 'mysql://root:mysql@localhost/celestia-dev'));
});


?>
