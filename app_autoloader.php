<?php

$mapping = [
   
    // app classes
    'JWT' => 'app_jwt.php',
    'Requests' => 'Requests/Requests.php',
    'Ether' => 'Requests/Ether.php',
    'ERC20' => 'Requests/ERC20.php',
    'BTC' => 'Requests/BTC.php',
 ];

//----------------------------------------------------------------------------------------------------------------------
spl_autoload_register(function ($class) use ($mapping) {
    if (isset($mapping[$class])) {
        require_once $mapping[$class];
    }
}, true);
