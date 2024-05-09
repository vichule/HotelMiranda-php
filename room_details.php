<?php
require_once(__DIR__ . '/utils/setup.php');
require_once(__DIR__ . '/utils/queries/rooms/getRoomQuery.php');
require_once(__DIR__ . '/utils/queries/rooms/getRelatedRooms.php');
require_once(__DIR__ . '/utils/getAmenities.php');
require_once(__DIR__ . '/utils/queries/bookings/addBookingQuery.php');
require_once(__DIR__ . '/utils/forms/formControl.php');


// $roomId = $_POST['room_id'];

$related = $conn->query($getRelatedRooms);
$stmt = $conn->prepare($getOneRoom);
$id = $_GET['id'];


$stmt->bind_param('i', $id);

$stmt->execute();
$results = $stmt->get_result();

$room = $results->fetch_assoc();





$variables = ['room' => $room, 'related' => $related];
renderTemplate('room_details', $variables);

bookingControl($conn, $id, $addBooking);
