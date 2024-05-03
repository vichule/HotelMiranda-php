<?php
require_once(__DIR__ . '/utils/setup.php');
require_once( __DIR__ . '/utils/queries/rooms/getRoomsOfferQuery.php');
require_once( __DIR__ . '/utils/queries/rooms/getPopularRoomsQuery.php');


$rooms = $conn->query($getOffers);
$popular = $conn->query($getPopular);



$conn->close();

$variables = ['rooms' => $rooms, 'popular' => $popular];
renderTemplate('offers', $variables);