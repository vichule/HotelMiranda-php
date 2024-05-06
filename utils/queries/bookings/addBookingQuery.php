<?php

$addBooking = "INSERT INTO bookings(
    first_name,last_name,
    order_date,check_in,check_out,notes,status,discount,room_id)
    VALUES(?,?,?,?,?,?,?,?,?);";