<?php
include 'database.php';
$sql = "SELECT * FROM bookings";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Bookings</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            background-color: #000000;
            color: #FFD700;
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
        }

        h2 {
            font-size: 24px;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        table, th, td {
            border: 1px solid #FFD700;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #333333;
            color: #FFD700;
        }

        td {
            background-color: #222222;
            color: #FFD700;
        }

        a {
            padding: 8px 15px;
            text-decoration: none;
            color: #fff;
            border-radius: 5px;
            font-weight: bold;
            display: inline-block;
            margin: 5px;
        }

        /* Edit Button (Blue) */
        .edit-btn {
            background-color: #007BFF;
        }

        .edit-btn:hover {
            background-color: #0056b3;
        }

        /* Delete Button (Red) */
        .delete-btn {
            background-color: #FF5733;
        }

        .delete-btn:hover {
            background-color: #c93e29;
        }
    </style>
</head>
<body>

<h2>Customer Bookings</h2>
<table>
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Street</th>
        <th>City</th>
        <th>Country</th>
        <th>Cardholder</th>
        <th>Card Number</th>
        <th>Expiry</th>
        <th>CVV</th>
        <th>Actions</th>
    </tr>

    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>".$row["id"]."</td>
                    <td>".$row["first_name"]."</td>
                    <td>".$row["last_name"]."</td>
                    <td>".$row["email"]."</td>
                    <td>".$row["phone"]."</td>
                    <td>".$row["street"]."</td>
                    <td>".$row["city"]."</td>
                    <td>".$row["country"]."</td>
                    <td>".$row["cardholder"]."</td>
                    <td>".$row["card_number"]."</td>
                    <td>".$row["expiry_date"]."</td>
                    <td>".$row["cvv"]."</td>
                    <td>
                        <a href='edit.php?id=".$row["id"]."' class='edit-btn'>Edit</a> |
                        <a href='delete.php?id=".$row["id"]."' class='delete-btn' onclick='return confirm(\"Are you sure?\")'>Delete</a>
                    </td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='13'>No bookings found</td></tr>";
    }
    ?>
</table>

</body>
</html>

<?php
$conn->close();
?>
