<?php

function getAmenities($amenity) {
    
    $amenities_list = [
        'Air conditioner' => 'assets/amenitiesIcons/air.svg',
        'Breakfast' => 'assets/amenitiesIcons/breakfast.svg',
        'Cleaning' => 'assets/amenitiesIcons/cleaning.svg',
        'Grocery' => 'assets/amenitiesIcons/grocery.svg',
        'Shop near' => 'assets/amenitiesIcons/shop.svg',
        '24/7 Online Support' => 'assets/amenitiesIcons/support.svg',
        'Smart Security' => 'assets/amenitiesIcons/security.svg',
        'High-speed WiFi' => 'assets/amenitiesIcons/wifi.svg',
        'Kitchen' => 'assets/amenitiesIcons/kitchen.svg',
        'Shower' => 'assets/amenitiesIcons/shower.svg',
        'Single Bed' => 'assets/amenitiesIcons/singlebed.svg',
        'Expert Team' => 'assets/amenitiesIcons/experts.svg',
        'Towels' => 'assets/amenitiesIcons/towels.svg',
        'Strong Locker' => 'assets/amenitiesIcons/locker.svg',
    ];

    return $amenities_list[$amenity];
}