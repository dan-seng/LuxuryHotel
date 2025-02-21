<?php
// Database connection
$host = "localhost";  
$username = "root";   
$password = "";      
$database = "luxuryhotel"; 

$conn = new mysqli($host, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function clean_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $first_name = clean_input($_POST['first-name']);
    $last_name = clean_input($_POST['last-name']);
    $email = clean_input($_POST['email']);
    $phone = clean_input($_POST['phone']);
    $street = clean_input($_POST['street']);
    $postcode = clean_input($_POST['postcode']);
    $city = clean_input($_POST['city']);
    $country = clean_input($_POST['country']);

    $cardholder = clean_input($_POST['cardholder']);
    $card_number = clean_input($_POST['card-number']);
    $expiry_date = clean_input($_POST['expiry']);
    $cvv = clean_input($_POST['cvv']);

    $sql = "INSERT INTO bookings (first_name, last_name, email, phone, street, postcode, city, country, cardholder, card_number, expiry_date, cvv) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssssss", $first_name, $last_name, $email, $phone, $street, $postcode, $city, $country, $cardholder, $card_number, $expiry_date, $cvv);

    if ($stmt->execute()) {
        echo "<script>alert('Booking successful!'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Error: " . $stmt->error . "');</script>";
    }


    $stmt->close();
    $conn->close();
} else {
    echo "<script>alert('Invalid Request'); window.location.href='index.php';</script>";
}
?>
