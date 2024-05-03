<?php
require_once(__DIR__ . '/utils/setup.php');
require_once( __DIR__ . '/utils/queries/rooms/getRoomsOfferQuery.php');
require_once( __DIR__ . '/utils/queries/rooms/getPopularRoomsQuery.php');


$rooms = $conn->query($getOffers);
$popular = $conn->query($getPopular);



$conn->close();

// $name = 'offers';
$variables = ['title' => 'Offers', 'rooms' => $rooms, 'popular' => $popular];
renderTemplate('offers', $variables);