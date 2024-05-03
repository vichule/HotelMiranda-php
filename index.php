<?php
require_once(__DIR__ . '/utils/setup.php');
require_once __DIR__ . '/utils/queries/rooms/getRoomsQuery.php';


$rooms = $conn->query($getRooms);



$conn->close();


$variables = ['rooms' => $rooms];
renderTemplate('index', $variables);
