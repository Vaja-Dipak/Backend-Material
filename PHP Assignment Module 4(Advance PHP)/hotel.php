<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Room Booking System</title>
    <style>
        label {
            display: block;
            margin-bottom: 10px;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>

<h2>Hotel Room Booking System</h2>

<form id="bookingForm">
    <label for="room_type">Select Room Type:</label>
    <select name="room_type" id="room_type">
        <option value="full_day">Full Day</option>
        <option value="half_day">Half Day</option>
        <option value="custom">Custom</option>
    </select>

    <div id="halfDayOptions" style="display: none;">
        <label for="booking_date">Select Date:</label>
        <input type="date" name="booking_date" id="booking_date">

        <label for="slot">Select Slot:</label>
        <select name="slot" id="slot">
            <option value="morning">Morning (8 AM to 6 PM)</option>
            <option value="evening">Evening (7 PM to 7 AM)</option>
        </select>
    </div>

    <div id="custom_duration" style="display: none;">
        <label for="start_time">Start Time:</label>
        <input type="time" name="start_time" id="start_time">

        <label for="end_time">End Time:</label>
        <input type="time" name="end_time" id="end_time">
    </div>

    <br>

    <input type="submit" value="Book Now">
</form>

<script>
    $(document).ready(function () {
        $('#room_type').change(function () {
            var halfDayOptionsDiv = $('#halfDayOptions');
            if (this.value === 'half_day') {
                halfDayOptionsDiv.show();
            } else {
                halfDayOptionsDiv.hide();
            }
        });

        $('#bookingForm').submit(function (event) {
            event.preventDefault();

            $.ajax({
                type: 'POST',
                url: 'booking_process.php',
                data: $(this).serialize(),
                success: function (response) {
                    alert(response);
                    // You can redirect or perform additional actions based on the response
                },
                error: function () {
                    alert('Error during AJAX request.');
                }
            });
        });
    });
</script>

</body>
</html>
