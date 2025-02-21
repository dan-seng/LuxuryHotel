<?php
include 'database.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM bookings WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "No booking found with that ID.";
        exit;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $cardholder = $_POST['cardholder'];
    $card_number = $_POST['card_number'];
    $expiry = $_POST['expiry']; 
    $cvv = $_POST['cvv'];

    $update_sql = "UPDATE bookings SET first_name = '$first_name', last_name = '$last_name', email = '$email', 
                   phone = '$phone', street = '$street', city = '$city', country = '$country', 
                   cardholder = '$cardholder', card_number = '$card_number', expiry_date = '$expiry', cvv = '$cvv' 
                   WHERE id = $id";

    if ($conn->query($update_sql) === TRUE) {
        echo "Record updated successfully. <a href='customer.php'>Go back to bookings list</a>";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Customer Booking</title>
    <style>
        body {
            background-color: #000000;
            color: #FFD700;
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
        }

        form {
            display: inline-block;
            text-align: left;
            padding: 30px;
            background-color: #333333;
            border-radius: 10px;
            width: 300px;
        }

        label {
            font-size: 16px;
            margin-bottom: 8px;
        }

        input {
            padding: 10px;
            margin-bottom: 15px;
            width: 100%;
            border: none;
            border-radius: 5px;
        }

        button {
            padding: 10px 20px;
            background-color: #FFD700;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #FFCC00;
        }

        a {
            color: #FFD700;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        h2 {
            font-size: 24px;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>

<h2>Edit Customer Booking</h2>

<form method="POST" action="edit.php?id=<?php echo $id; ?>">
    <label for="first_name">First Name:</label>
    <input type="text" name="first_name" value="<?php echo $row['first_name']; ?>" required><br>

    <label for="last_name">Last Name:</label>
    <input type="text" name="last_name" value="<?php echo $row['last_name']; ?>" required><br>

    <label for="email">Email:</label>
    <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br>

    <label for="phone">Phone:</label>
    <input type="text" name="phone" value="<?php echo $row['phone']; ?>" required><br>

    <label for="street">Street:</label>
    <input type="text" name="street" value="<?php echo $row['street']; ?>" required><br>

    <label for="city">City:</label>
    <input type="text" name="city" value="<?php echo $row['city']; ?>" required><br>

    <label for="country">Country:</label>
    <input type="text" name="country" value="<?php echo $row['country']; ?>" required><br>

    <label for="cardholder">Cardholder:</label>
    <input type="text" name="cardholder" value="<?php echo $row['cardholder']; ?>" required><br>

    <label for="card_number">Card Number:</label>
    <input type="text" name="card_number" value="<?php echo $row['card_number']; ?>" required><br>

    <label for="expiry">Expiry Date:</label>
    <input type="text" name="expiry" value="<?php echo $row['expiry_date']; ?>" required><br>

    <label for="cvv">CVV:</label>
    <input type="text" name="cvv" value="<?php echo $row['cvv']; ?>" required><br>

    <button type="submit">Update Booking</button>
</form>

</body>
</html>
