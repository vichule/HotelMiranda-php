<?php

require_once(__DIR__ .'/setup.php');

function renderTemplate($name) {
    global $blade;
    echo $blade->run($name);
}