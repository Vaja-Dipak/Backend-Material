<!-- PHP Assignment Module-3 (Core PHP) -->

Write a PHP script which decodes the following JSON string. <br><br><br>


<?php
$jsonString = '{"name": "John","age": 30,"city": "Delhi","email": "john@example.com"}';


$data = json_decode($jsonString, true);     // Decode JSON string

if ($data !== null) {           // Accessing decoded data

    echo "Decoded Data : <br><br>";

    echo "Name: " . $data['name'] . "<br>";
    echo "Age: " . $data['age'] . "<br>";
    echo "City: " . $data['city'] . "<br>";
    echo "Email: " . $data['email'] . "<br>";
} else {
    echo "Failed to decode JSON.";
}

?>