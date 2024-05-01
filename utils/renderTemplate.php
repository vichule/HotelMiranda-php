<?php

require_once(__DIR__ .'/setup.php');

function renderTemplate($name, $variables) {
    global $blade;
    echo $blade->run($name, $variables);
}