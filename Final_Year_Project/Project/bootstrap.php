<?php

include_once 'autoload.php';

include_once 'settings.php';

session_start();

$router = Factory::buildObject('Router');
$router->routing();
$html_output = $router->getHtmlOutput();

echo $html_output;
