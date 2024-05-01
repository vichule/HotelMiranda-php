<?php

$getRooms = "SELECT 
r.id AS room_id, r.room_type, r.room_number, r.description, r.price,
r.offer, r.discount, r.cancellation, r.status,
json_arrayagg(p.photo) AS photo_url,
json_arrayagg(a.name) AS amenity_name
FROM rooms r
LEFT JOIN room_photos rp ON r.id = rp.room_id
LEFT JOIN photos p ON rp.photo_id = p.id
LEFT JOIN room_amenities ra ON r.id = ra.room_id
LEFT JOIN amenities a ON ra.amenities_id = a.id
GROUP BY r.id;";