<?php
require_once(__DIR__ . '/utils/renderTemplate.php');

$name = 'rooms';
$variables = ['title' => 'Rooms'];
renderTemplate($name, $variables);