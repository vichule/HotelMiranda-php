<?php

function bookingControl($conn, $roomId, $query)
{
    if ($_SERVER["REQUEST_METHOD"] !== "GET") {
        $checkin = $_POST['check_in'];
        $checkout = $_POST['check_out'];
        $firstname = $_POST['first_name'];
        $lastname = $_POST['last_name'];
        // $email = $_POST['email'];
        // $phone = $_POST['phone'];
        $notes = $_POST['message'];
        $discount = 0;
        $orderdate = date('Y-m-d');
        $status = "In progress";

        $stmt = $conn->prepare($query);
        $stmt->bind_param("sssssssii",   $firstname, $lastname, $orderdate, $checkin, $checkout,  $notes, $status, $discount, $roomId);
        $stmt->execute();
    }
}


function contactControl($conn, $query)
{
    if ($_SERVER["REQUEST_METHOD"] !== "GET") {

        $firstname = $_POST['first_name'];
        $lastname = $_POST['last_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $date = date('Y-m-d');
        $photo = 'https://loremflickr.com/640/480/people?lock=4776900773806080';
        // $status = true;

        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssssssss",   $firstname, $lastname, $email, $phone, $subject, $message,  $date, $photo);
        $stmt->execute();
        $stmt->close();
        $conn->close();
    }
}
