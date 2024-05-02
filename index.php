<?php
require_once(__DIR__ . '/utils/renderTemplate.php');
require_once __DIR__ . '/utils/queries/rooms/getRoomsQuery.php';

$query = $getRooms;

$rooms = $conn->query($query);



$conn->close();


$name = 'index';
$variables = ['rooms' => $rooms, 'title' => 'Home'];
renderTemplate($name, $variables);
