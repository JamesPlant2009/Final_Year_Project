<?php
spl_autoload_register(function ($class_name)
{
$file_path_and_name = '';
$directories = [];

$file_name = $class_name . '.php';

$directories = array_diff(scandir(CLASS_PATH), array('..', '.'));

foreach ($directories as $directory)
{
$file_path_and_name = CLASS_PATH . $directory . DIRSEP . $file_name;

if (file_exists($file_path_and_name))
{
require_once $file_path_and_name;
break;
}
}
});