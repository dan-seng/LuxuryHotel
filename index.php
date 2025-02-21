<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Navbar</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Animation for sections */
.rooms-section, .container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    align-items: center;
    opacity: 0;
    animation: fadeIn 1.5s forwards;
    animation-delay: 0.5s;
}

/* Animation for individual boxes */
.room-card, .section {
    opacity: 0;
    transform: translateX(100px); /* Initially off-screen */
    animation: slideIn 1.5s forwards;
}

/* Delay for each room and section */
.room-card:nth-child(1), .section:nth-child(1) {
    animation-delay: 1s;
    animation-direction: normal;
}

.room-card:nth-child(2), .section:nth-child(2) {
    animation-delay: 1.3s;
    animation-direction: normal;
}

.room-card:nth-child(3), .section:nth-child(3) {
    animation-delay: 1.6s;
    animation-direction: normal;
}

.room-card:nth-child(4), .section:nth-child(4) {
    animation-delay: 1.9s;
    animation-direction: normal;
}

/* Keyframes for fading in */
@keyframes fadeIn {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}

/* Keyframes for sliding in from the right */
@keyframes slideIn {
    0% {
        opacity: 0;
        transform: translateX(100px); /* Start from the right */
    }
    100% {
        opacity: 1;
        transform: translateX(0); /* End in original position */
    }
}

    </style>
    
</head>
<body>
<?php include 'header.php'; ?>
<hr>
<main>
  <div class="image-section">
    <img src="images/hotel.jpg" alt="">
  </div>
  <section class="hero">

    <div class="hero-text">
      <h1>ARUNTARA RIVERSIDE BOUTIQUE HOTEL<br>CHIANG MAI HOTEL</h1>
      <p>
       Aruntara Riverside Boutique Hotel in Chiang Mai, Thailand is located on the banks of the Mae Ping River. 
        Enjoy a peaceful and harmonious stay in our quiet oasis, while only being a short distance away from the vibrant inner city of Chiang Mai.</p>
    </div>
</section>
<section class="rooms-section">
  <h2>ROOMS</h2>
  <div class="rooms-container">
      <!-- Deluxe Room -->
      <div class="room-card">
          <img src="images/hotel3.jpg" alt="Deluxe Room" class="room-image">
          <div class="room-content">
              <h3>DELUXE ROOM</h3>
          </div>
      </div>

      <!-- Junior Elephant -->
      <div class="room-card">
          <img src="images/hotel4.png" alt="Junior Elephant Room" class="room-image">
          <div class="room-content">
              <h3>JUNIOR ELEPHANT</h3>
          </div>
      </div>

      <!-- Elephant Suite -->
      <div class="room-card">
          <img src="images/hotel5.png" alt="Elephant Suite" class="room-image">
          <div class="room-content">
              <h3>ELEPHANT SUITE</h3>
          </div>
      </div>

      <!-- White Elephant Suite -->
      <div class="room-card">
          <img src="images/hotel6.jpg" alt="White Elephant Suite" class="room-image">
          <div class="room-content">
              <h3>WHITE ELEPHANT SUITE</h3>
          </div>
      </div>
  </div>
</section>

    <div class="container">
        <div class="section">
            <h2>LUX RESTAURANT</h2>
            <img src="images/hotel7.jpg" alt="Tara Restaurant">
            <p>Guests dining at Tara Restaurant can indulge in a perfect view of the Mae Ping River alongside their delicious meal. 
              An air conditioned seating room is also available, and diners can choose from a wide menu 
              of traditional Thai and international dishes.</p>
        </div>
        <div class="section">
            <h2>THE BAR</h2>
            <img src="images/hotel8.jpg" alt="Four Element Massage">
            <p>Enjoy a wide selection of cocktails, wines, and beers in our elegant bar.
               Unwind with friends or meet new ones in a cozy, sophisticated atmosphere.
                Happy hour specials are available every evening!</p>
        </div>
    </div>
    <div class="testimonial-section">
      <h2 class="testimonial-title">TESTIMONIAL</h2>
      <div class="testimonial">
        <p>
          Aruntara Riverside Hotel charmed from the beginning with authentic northern Thai architecture and artefacts.
           The hotel lobby features some beautiful timber sculptures, suggesting the ancient and contemporary all at once. The air is fragrant with exotic oils.
            We stepped through
           heavy temple doors into a lush courtyard, through an archway and our own garden into an enormous room with king bed and all the expected amenities. 
           As their standard size room, the proportions were very generous. Make the most of happy hour sitting in the garden alongside the Ping River.
            The pool was tucked into a shaded garden corner making the temperature just cool enough to be refreshing and still welcoming. The Aruntara is walking distance from the Old Town and night markets if you like walking.
             If not, they have a free evening shuttle bus or bicycles to borrow. If you prefer accommodation with a local feel, then the Aruntara might be just what you are looking for.</p> 
        <p class="rating">★★★★★</p>
      </div>
     
      <img class="logo" src="logo.png" alt="Arunta Riverside Boutique Logo">
  </div>
<?php include 'footer.php'; ?>

<script src="animations.js">

</script>

</body>
</html>

