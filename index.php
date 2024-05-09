<?php
require_once(__DIR__ . '/utils/setup.php');
require_once(__DIR__ . '/utils/queries/rooms/getRoomsQuery.php');
require_once(__DIR__ . '/utils/getAmenities.php');


$rooms = $conn->query($getAllRooms);



$conn->close();


$variables = ['rooms' => $rooms];
renderTemplate('index', $variables);
