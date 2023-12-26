<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $roomType = $_POST['room_type'];

    if ($roomType === 'custom') {
        $startTime = $_POST['start_time'];
        $endTime = $_POST['end_time'];
        // Perform custom booking logic
        echo json_encode(['message' => "Room booked for custom duration from $startTime to $endTime"]);
    } elseif ($roomType === 'half_day') {
        $bookingDate = $_POST['booking_date'];
        $slot = $_POST['slot'];

        // Perform half-day booking logic with validation
        if (validateHalfDaySlot($bookingDate, $slot)) {
            echo json_encode(['message' => "Room booked for half day on $bookingDate in the $slot slot"]);
        } else {
            echo json_encode(['error' => 'Invalid slot selection.']);
        }
    } else {
        // Perform full day booking logic
        echo json_encode(['message' => "Room booked for $roomType"]);
    }
} else {
    // Handle invalid requests
    echo json_encode(['error' => 'Invalid request.']);
}

function validateHalfDaySlot($bookingDate, $slot) {
    // Implement your validation logic here
    // For example, check if the selected slot is available for the given date
    // Return true if valid, false otherwise
    return true;
}

?>
