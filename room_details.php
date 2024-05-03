<?php
require_once(__DIR__ . '/utils/setup.php');
require_once( __DIR__ . '/utils/queries/rooms/getRoomQuery.php');
require_once( __DIR__ . '/utils/queries/rooms/getRelatedRooms.php');


$related = $conn->query($getRelated);
$stmt = $conn->prepare($getRoom);
$id = $_GET['id'];


$stmt->bind_param('i', $id);

$stmt->execute();
$results = $stmt->get_result();

$room = $results->fetch_assoc();


$stmt->close();
$conn->close();


$variables = ['room' => $room, 'related' => $related];
renderTemplate('room_details', $variables);
