<?php
require_once(__DIR__ . '/utils/renderTemplate.php');
require_once __DIR__ . '/utils/queries/rooms/getRoomsQuery.php';

$query = $getRooms;

$rooms = $conn->query($query);



$conn->close();

$name = 'rooms';
$variables = ['title' => 'Rooms','rooms' => $rooms];
renderTemplate($name, $variables);