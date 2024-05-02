<?php
require_once(__DIR__ . '/utils/renderTemplate.php');
require_once __DIR__ . '/utils/queries/rooms/getRoomsOfferQuery.php';

$query = $getOffers;

$rooms = $conn->query($query);



$conn->close();

$name = 'offers';
$variables = ['title' => 'Offers', 'rooms' => $rooms];
renderTemplate($name, $variables);