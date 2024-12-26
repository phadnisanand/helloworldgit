<?php

require_once __DIR__ . '/vendor/autoload.php';

use Sfmok\HelloWorld\HelloWorld;

$greeting = new HelloWorld();

echo $greeting->hello();