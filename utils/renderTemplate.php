<?php

require_once(__DIR__ .'/setup.php');
require_once __DIR__ .'/discountPrice.php';

function renderTemplate($name, $variables) {
    global $blade;
    echo $blade->run($name, $variables);
}