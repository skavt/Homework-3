<?php

require_once 'template.php';

$temp = new template('src/main.php');

$temp->set('username', 'skavt');
$temp->set('age', '19');
$temp->set('city', 'Tbilisi');

$temp->set('header', $temp->getFile('src/header.php'));

$temp->render();