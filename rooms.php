<?php
require_once(__DIR__ . '/utils/setup.php');
require_once( __DIR__ . '/utils/queries/rooms/getRoomsQuery.php');
require_once(__DIR__ . '/utils/getAmenities.php');

$rooms = $conn->query($getRooms);



$conn->close();

// $name = 'rooms';
$variables = ['title' => 'Rooms','rooms' => $rooms];
renderTemplate('rooms', $variables);