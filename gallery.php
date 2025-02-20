<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Gallery</title>
    <style>
        body {
            background-color: #1c1c1c;
            color: #ffffff;
            font-family: Arial, sans-serif;
        }
        .gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
        }
        .gallery img {
            width: 300px;
            height: auto;
        }
        .image-section{
          margin-bottom: 50px;
        }
    </style>
</head>
<body>
<?php include 'header.php'; ?>
<div class="image-section">
    <img src="images/hotel12.jpeg" alt="">
  </div>
    <div class="gallery">
      <img src="images/hotel11.jpg" alt="Bedroom with blue bedspread and two lamps">
      <img src="images/hotel14.jpg" alt="Bedroom with yellow bedspread and two lamps">
      <img src="images/hotel13.jpeg" alt="Bedroom with blue bedspread and large windows">
      <img src="images/hotel10.jpeg" alt="Bedroom with blue bedspread and large windows">
      <img src="images/hotel5.png" alt="Bedroom with beige bedspread and multiple pillows">
      <img src="images/hotel6.jpg" alt="Bedroom with beige bedspread and multiple pillows">
      <img src="images/hotel21.jpg" alt="Living area with sofa and desk">
      <img src="images/hotel20.jpg" alt="Bedroom with purple bedspread and multiple pillows">
      <img src="images/hotel19.jpg" alt="Bedroom with purple bedspread and multiple pillows">
      <img src="images/hotel18.jpeg" alt="Bedroom with beige bedspread and large windows">
      <img src="images/hotel12.jpeg" alt="Bedroom with blue bedspread and large windows">
        <img src="images/hotel17.jpg" alt="Bedroom with orange bedspread and large windows">
        <img src="images/hotel15.jpg" alt="Bathroom with large mirror and sink">
        <img src="images/hotel16.jpg" alt="Bedroom with blue bedspread and two lamps">
    </div>
<?php include 'footer.php'; ?>
</body>
</html>
