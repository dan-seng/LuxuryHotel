<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rooms</title>
  <style>
   @import url('https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');  
    body {
      font-family: "Barlow", serif;
  font-weight: 400;
  font-style: normal;
  background-color: black;
    } 
.rooms-containerxx {
  margin-top: 50px;
  font-family: "Barlow", serif;
  font-weight: 400;
  font-style: normal;
  display: grid;
  background-color: black;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 20px;
}

.room-cardxx {
  font-family: "Barlow", serif;
  font-weight: 400;
  font-style: normal;
  background: black;
  color: #FFC107;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
  border: solid 0.5px rgba(207, 206, 206, 0.454);
}

.room-imagexx {
  position: relative;
  width: 100%;
  height: 200px;
}

.room-imagexx img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.room-detailsxx {
  font-family: "Barlow", serif;
  font-weight: 400;
  font-style: normal;
  padding: 15px;
}

.room-detailsxx h2 {
  font-family: "Barlow", serif;
  font-weight: 400;
  font-style: normal;
  font-size: 20px;
  margin-bottom: 5px;
}

.room-detailsxx p {
  font-family: "Barlow", serif;
  font-weight: 400;
  font-style: normal;
  font-size: 14px;
  color: white;
}

.booking-infoxx {
  padding: 15px;
  background:black;
  text-align: center;
}

.booking-infoxx h3 {
  font-family: "Barlow", serif;
  font-weight: 400;
  font-style: normal;
  color: #e69b00;
  font-size: 18px;
}

.breakfast {
  color: green;
  font-weight: bold;
}

.price {
  font-family: "Barlow", serif;
  font-size: 18px;
  color: #e69b00;
  font-weight: bold;
}
  button{
  background-color: #FFC107;
  border: none;
  color: black;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
  transition: 0.5s ease-in-out;
  font-family: "Barlow", serif;
  font-weight: 400;
} button:hover{
  background-color: #FF5722;
  transform: scale(1.05);
  opacity: 0.8;

}


    </style>
</head>
<body>
  <?php include 'header.php'; ?>
  <div class="image-section">
    <img src="images/hotel12.jpeg" alt="">
  </div>
  <div class="rooms-containerxx">

        <div class="room-cardxx">
            <div class="room-imagexx">
                <img src="images/hotel4.png" alt="Deluxe Twin Room">
            </div>
            <div class="room-detailsxx">
                <h2>Deluxe Room Twin Beds</h2>
                <p>Experience luxury in our Wind Element Deluxe Rooms. Enjoy a tree-filled courtyard and a smart TV.</p>
            </div>
            <div class="booking-infoxx">
                <h3>Deluxe Twin Room With Breakfast</h3>
                <p class="breakfast"><span>✅</span> Full breakfast Included</p>
                <p class="price">ETB 5,500.00</p>
                <button onclick="window.location.href = 'book.php'">Book Now</button>
     
            </div>
        </div>
        <div class="room-cardxx">
            <div class="room-imagexx">
                <img src="images/hotel27.jpg" alt="Deluxe Twin Room">
            </div>
            <div class="room-detailsxx">
                <h2>Deluxe Room Twin Beds</h2>
                <p>Experience luxury in our Wind Element Deluxe Rooms. Enjoy a tree-filled courtyard and a smart TV.</p>
            </div>
            <div class="booking-infoxx">
                <h3>Deluxe Twin Room With Breakfast</h3>
                <p class="breakfast"><span>✅</span> Full breakfast Included</p>
                <p class="price">ETB 7,800.00</p>
                <button onclick="window.location.href = 'book.php'">Book Now</button>
     
            </div>
        </div>
        <div class="room-cardxx">
            <div class="room-imagexx">
                <img src="images/hotel26.jpg" alt="Deluxe Twin Room">
            </div>
            <div class="room-detailsxx">
                <h2>Deluxe Room Twin Beds</h2>
                <p>Experience luxury in our Wind Element Deluxe Rooms. Enjoy a tree-filled courtyard and a smart TV.</p>
            </div>
            <div class="booking-infoxx">
                <h3>Deluxe Twin Room With Breakfast</h3>
                <p class="breakfast"><span>✅</span> Full breakfast Included</p>
                <p class="price">ETB 8,000.00</p>
                <button onclick="window.location.href = 'book.php'">Book Now</button>
     
            </div>
        </div>
        <div class="room-cardxx">
            <div class="room-imagexx">
                <img src="images/hotel25.jpg" alt="Deluxe Twin Room">
            </div>
            <div class="room-detailsxx">
                <h2>Deluxe Room Twin Beds</h2>
                <p>Experience luxury in our Wind Element Deluxe Rooms. Enjoy a tree-filled courtyard and a smart TV.</p>
            </div>
            <div class="booking-infoxx">
                <h3>Deluxe Twin Room With Breakfast</h3>
                <p class="breakfast"><span>✅</span> Full breakfast Included</p>
                <p class="price">ETB 7,000.00</p>
                <button onclick="window.location.href = 'book.php'">Book Now</button>
     
            </div>
        </div>
        <div class="room-cardxx">
            <div class="room-imagexx">
                <img src="images/hotel24.jpg" alt="Deluxe Twin Room">
            </div>
            <div class="room-detailsxx">
                <h2>Deluxe Room Twin Beds</h2>
                <p>Experience luxury in our Wind Element Deluxe Rooms. Enjoy a tree-filled courtyard and a smart TV.</p>
            </div>
            <div class="booking-infoxx">
                <h3>Deluxe Twin Room With Breakfast</h3>
                <p class="breakfast"><span>✅</span> Full breakfast Included</p>
                <p class="price">ETB 8,700.00</p>
                <button onclick="window.location.href = 'book.php'">Book Now</button>
     
            </div>
        </div>
        <div class="room-cardxx">
            <div class="room-imagexx">
                <img src="images/hotel23.jpg" alt="Deluxe Twin Room">
            </div>
            <div class="room-detailsxx">
                <h2>Deluxe Room Twin Beds</h2>
                <p>Experience luxury in our Wind Element Deluxe Rooms. Enjoy a tree-filled courtyard and a smart TV.</p>
            </div>
            <div class="booking-infoxx">
                <h3>Deluxe Twin Room With Breakfast</h3>
                <p class="breakfast"><span>✅</span> Full breakfast Included</p>
                <p class="price">ETB 7,000.00</p>
                <button onclick="window.location.href = 'book.php'">Book Now</button>
     
            </div>
        </div>
        <div class="room-cardxx">
            <div class="room-imagexx">
                <img src="images/hotel22.jpg" alt="Deluxe Twin Room">
            </div>
            <div class="room-detailsxx">
                <h2>Deluxe Room Twin Beds</h2>
                <p>Experience luxury in our Wind Element Deluxe Rooms. Enjoy a tree-filled courtyard and a smart TV.</p>
            </div>
            <div class="booking-infoxx">
                <h3>Deluxe Twin Room With Breakfast</h3>
                <p class="breakfast"><span>✅</span> Full breakfast Included</p>
                <p class="price">ETB 7,600.00</p>
                <button onclick="window.location.href = 'book.php'">Book Now</button>
     
            </div>
        </div>
        <div class="room-cardxx">
            <div class="room-imagexx">
                <img src="images/hotel5.png" alt="Deluxe Twin Room">
            </div>
            <div class="room-detailsxx">
                <h2>Deluxe Room Twin Beds</h2>
                <p>Experience luxury in our Wind Element Deluxe Rooms. Enjoy a tree-filled courtyard and a smart TV.</p>
            </div>
            <div class="booking-infoxx">
                <h3>Deluxe Twin Room With Breakfast</h3>
                <p class="breakfast"><span>✅</span> Full breakfast Included</p>
                <p class="price">ETB 7,100.00</p>
                <button onclick="window.location.href = 'book.php'">Book Now</button>
     
            </div>
        </div>
        <div class="room-cardxx">
            <div class="room-imagexx">
                <img src="images/hotel6.jpg" alt="Deluxe Twin Room">
            </div>
            <div class="room-detailsxx">
                <h2>Deluxe Room Twin Beds</h2>
                <p>Experience luxury in our Wind Element Deluxe Rooms. Enjoy a tree-filled courtyard and a smart TV.</p>
            </div>
            <div class="booking-infoxx">
                <h3>Deluxe Twin Room With Breakfast</h3>
                <p class="breakfast"><span>✅</span> Full breakfast Included</p>
                <p class="price">ETB 8,000.00</p>
                <button onclick="window.location.href = 'book.php'">Book Now</button>
     
            </div>
        </div>
          <div class="room-cardxx">
            <div class="room-imagexx">
                <img src="images/hotel14.jpg" alt="Deluxe Twin Room">
            </div>
            <div class="room-detailsxx">
                <h2>Deluxe Room Twin Beds</h2>
                <p>Experience luxury in our Wind Element Deluxe Rooms. Enjoy a tree-filled courtyard and a smart TV.</p>
            </div>
            <div class="booking-infoxx">
                <h3>Deluxe Twin Room With Breakfast</h3>
                <p class="breakfast"><span>✅</span> Full breakfast Included</p>
                <p class="price">ETB 8,000.00</p>
                <button onclick="window.location.href = 'book.php'">Book Now</button>
     
            </div>
        </div>
        <div class="room-cardxx">
            <div class="room-imagexx">
                <img src="images/hotel16.jpg" alt="Deluxe Twin Room">
            </div>
            <div class="room-detailsxx">
                <h2>Deluxe Room Twin Beds</h2>
                <p>Experience luxury in our Wind Element Deluxe Rooms. Enjoy a tree-filled courtyard and a smart TV.</p>
            </div>
            <div class="booking-infoxx">
                <h3>Deluxe Twin Room With Breakfast</h3>
                <p class="breakfast"><span>✅</span> Full breakfast Included</p>
                <p class="price">ETB 7,500.00</p>
                <button onclick="window.location.href = 'book.php'">Book Now</button>
     
            </div>
        </div>
        <div class="room-cardxx">
            <div class="room-imagexx">
                <img src="images/hotel17.jpg" alt="Deluxe Twin Room">
            </div>
            <div class="room-detailsxx">
                <h2>Deluxe Room Twin Beds</h2>
                <p>Experience luxury in our Wind Element Deluxe Rooms. Enjoy a tree-filled courtyard and a smart TV.</p>
            </div>
            <div class="booking-infoxx">
                <h3>Deluxe Twin Room With Breakfast</h3>
                <p class="breakfast"><span>✅</span> Full breakfast Included</p>
                <p class="price">ETB 9,000.00</p>
                <button onclick="window.location.href = 'book.php'">Book Now</button>
     
            </div>
        </div>
      
    </div>

  <?php include 'footer.php'; ?>
</body>
</html>