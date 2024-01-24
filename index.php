<?php

const APP_DIR = __DIR__ . '/';
require_once APP_DIR . "classes/Text.php";
require_once APP_DIR . "classes/TextChild.php";


$text = new Text();
$textChild = new TextChild();
$text->print();
$textChild->print();
