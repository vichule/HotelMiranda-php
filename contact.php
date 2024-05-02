<?php
require_once(__DIR__ . '/utils/renderTemplate.php');

$name = 'contact';
$variables = ['title' => 'Contact'];
renderTemplate($name, $variables);