<?php

//V2 Router::connect('/oauth/:action/*', array('controller' => 'OAuth', 'plugin' => 'o_auth'));
Router::connect('/oauth/:action/*', array('plugin' => 'o_auth', 'controller' => 'o_auth'));

?>
