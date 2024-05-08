<?php



function isRoomAvailable($conn, $roomId, $checkin, $checkout)
{
    $query = "SELECT COUNT(*) AS count FROM bookings 
              WHERE room_id = ? AND ((check_in <= ? AND check_out >= ?) OR (check_in <= ? AND check_out >= ?))";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("issss", $roomId, $checkin, $checkin, $checkout, $checkout);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    return $row['count'] == 0;
}

function bookingControl($conn, $roomId, $query)
{
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
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

        //     if (!isRoomAvailable($conn, $roomId, $checkin, $checkout)) {
        //         echo "Room not available in those dates.";
        //         return;
        //     }

        //     $stmt = $conn->prepare($query);
        //     $stmt->bind_param("sssssssii", $firstname, $lastname, $orderdate, $checkin, $checkout, $notes, $status, $discount, $roomId);
        //     $stmt->execute();
        //     echo "Booking done successfully.";
        // }

        if (!isRoomAvailable($conn, $roomId, $checkin, $checkout)) {
            echo "<script defer>
                Swal.fire({
                    icon: 'error',
                    title: 'Room not available in those dates.',
                    showConfirmButton: true,
                    timer: 3500
                })
           </script>";
            exit();
        }

        $stmt = $conn->prepare($query);
        $stmt->bind_param("sssssssii", $firstname, $lastname, $orderdate, $checkin, $checkout, $notes, $status, $discount, $roomId);
        $stmt->execute();
        $stmt->close();
        $conn->close();
        echo "<script defer>
                Swal.fire({
                    icon: 'success',
                    title: 'Booking done successfully.',
                    showConfirmButton: true,
                    timer: 3500
                })
           </script>";
        
        die("<script>location.href = 'index.php'</script>");
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
        echo "<script defer>
                Swal.fire({
                    icon: 'success',
                    title: 'Message sent succesfully. Thanks for your time!',
                    showConfirmButton: true,
                    timer: 1500
                })
           </script>";
        exit();
    }
}
