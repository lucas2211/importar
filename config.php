<?php

require 'environment.php';
global $config;


$config = array();
if (ENVIRONMENT == 'development') {
    define("BASE", "http://localhost/importar/");
    $config['dbname'] = 'go_central';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
} else {
    define("BASE", "https://xxxxx.com/");
    $config['dbname'] = 'xxxx';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'xxxxxx';
    $config['dbpass'] = 'xxxxx';
}
?>