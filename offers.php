<?php
require_once(__DIR__ . '/utils/renderTemplate.php');
require_once __DIR__ . '/utils/queries/rooms/getRoomsOfferQuery.php';
require_once __DIR__ . '/utils/queries/rooms/getPopularRoomsQuery.php';

$query = $getOffers;
$popularQuery = $getPopular;

$rooms = $conn->query($query);
$popular = $conn->query($popularQuery);



$conn->close();

$name = 'offers';
$variables = ['title' => 'Offers', 'rooms' => $rooms, 'popular' => $popular];
renderTemplate($name, $variables);