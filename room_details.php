<?php
require_once(__DIR__ . '/utils/setup.php');
require_once( __DIR__ . '/utils/queries/rooms/getRoomQuery.php');
require_once( __DIR__ . '/utils/queries/rooms/getRelatedRooms.php');
require_once(__DIR__ . '/utils/getAmenities.php');
require_once( __DIR__ . '/utils/queries/bookings/addBookingQuery.php');

$checkin = $_GET['check_in'];
$checkout = $_GET['check_out'];
$firstname = $_GET['first_name'];
$lastname = $_GET['lastname'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$message = $_GET['message'];

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
