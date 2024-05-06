<?php
require_once(__DIR__ . '/utils/setup.php');
require_once(__DIR__ . '/utils/queries/rooms/getRoomsQuery.php');
require_once(__DIR__ . '/utils/getAmenities.php');
require_once(__DIR__ . '/utils/queries/rooms/getAvailableRoomsQuery.php');

if (isset($_GET['arrival']) && isset($_GET['departure'])) {
    $arrival = $_GET['arrival'];
    $departure = $_GET['departure'];

    $query = $getAvailable;
} else {
    $query = $getRooms;
}

$stmt = $conn->prepare($query);

if ($stmt) {
    if (isset($_GET['arrival']) && isset($_GET['departure'])) {
        $stmt->bind_param("ssss", $arrival, $departure, $arrival, $departure);
    }
    $stmt->execute();

    $rooms = $stmt->get_result();

    $stmt->close();
}



$conn->close();

// $name = 'rooms';
$variables = ['title' => 'Rooms', 'rooms' => $rooms];
renderTemplate('rooms', $variables);
