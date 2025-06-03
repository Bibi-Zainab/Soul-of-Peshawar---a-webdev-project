<?php
// Get form data
$name = $_POST['fullName'];
$pickup = $_POST['pick'];
$drop = $_POST['drop'];
$noOfPersons = $_POST['noOfPersons'];
$phone = $_POST['phone'];
$email= $_POST['email'];

// Database connection settings
$servername = "localhost";
$name = "root";
$phone_no = "";
$dbname = "db1";

// Create connection
$conn = mysqli_connect($servername, $name, $phone_no, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Insert query
$sql = "INSERT INTO bookings (name, pickup_location, destination_location, no_of_persons, phone_no, email)
        VALUES ('$name', '$pickup', '$drop', '$noOfPersons', '$phone', '$email')";

if (mysqli_query($conn, $sql)) {
    echo "Thanks for the booking, $name. Your ride from $pickup to $drop is confirmed.";
    echo " Further details will be shared on your email: $email .";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>