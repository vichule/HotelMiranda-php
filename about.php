<?php
require_once(__DIR__ . '/utils/renderTemplate.php');

$name = 'about';
$variables = ['title' => 'About Us'];
renderTemplate($name, $variables);
