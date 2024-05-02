<?php
require_once(__DIR__ . '/utils/renderTemplate.php');

$name = 'room_details';
$variables = ['title' => 'Room Details'];
renderTemplate($name, $variables);