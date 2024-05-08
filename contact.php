<?php
require_once(__DIR__ . '/utils/setup.php');
require_once(__DIR__ .'/utils/forms/formControl.php');
require_once(__DIR__ .'/utils/queries/contacts/addMessageQuery.php');



$variables = [];
renderTemplate('contact', $variables);

contactControl($conn, $addMessage);