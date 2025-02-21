<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>
        .sub-nav button{
  background-color: #FFC107;
  border: none;
  color: black;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
  font-family: 'Quicksand', serif;
  font-optical-sizing: auto;
  font-style: normal;
  font-size: 18px;
}

.sub-nav button:hover {
  background-color: #FF5722;
}
.sub-nav {
  text-align: center;
  margin-bottom: 50px;
}
    </style>
  </head>
<body>


<nav class="navbar">
    <div class="logo">
        <img src="logo.png" alt="Hotel Logo">
        <span style=" font-family: 'Quicksand', serif;font-optical-sizing: auto;;font-style: normal;"  
        >Luxury Hotel</span>

    </div>
    <ul class="nav-links">
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="inspiration.php">Inspiration</a></li>
        <li><a href="gallery.php">Gallery</a></li>
    </ul>
</nav>

<div class="sub-nav">
    <button onclick="window.location.href='rooms.php'"
    >Book now</button>
</div>

</body>
</html>
