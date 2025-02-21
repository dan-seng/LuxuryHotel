<?php
include 'database.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM bookings WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully. <a href='customer.php'>Go back to bookings list</a>";
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
    <title>Delete Record</title>
    <style>
        body {
            background-color: #000000;
            color: #FFD700; 
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
        }

        a {
            color: #FFD700;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 30px;
        }

        .message {
            font-size: 18px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<h1>Delete Booking Record</h1>
<div class="message">
    <?php
    if (isset($id)) {
        echo "Record deleted successfully. <a href='customer.php'>Go back to bookings list</a>";
    } else {
        echo "No booking ID specified. <a href='customer.php'>Go back to bookings list</a>";
    }
    ?>
</div>

</body>
</html>
