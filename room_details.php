<?php
require_once(__DIR__ . '/utils/renderTemplate.php');
require_once __DIR__ . '/utils/queries/rooms/getRoomQuery.php';
require_once __DIR__ . '/utils/queries/rooms/getRelatedRooms.php';

$query = $getRoom;
$relatedQuery = $getRelated;
// $room = $conn->query($query);

$related = $conn->query($relatedQuery);
$stmt = $conn->prepare($query);
$id = $_GET['id'];


$stmt->bind_param('i', $id);

$stmt->execute();
$results = $stmt->get_result();

$room = $results->fetch_assoc();


$stmt->close();
$conn->close();


$name = 'room_details';
$variables = ['title' => 'Room Details', 'room' => $room, 'related' => $related];
renderTemplate($name, $variables);
