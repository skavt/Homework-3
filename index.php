<?php

require_once 'Template.php';

$temp = new Template('src/main.php');

$temp->set('username', 'skavt');
$temp->set('age', '19');
$temp->set('city', 'Tbilisi');

$temp->set('header', $temp->getFile('src/header.php'));

$temp->render();
