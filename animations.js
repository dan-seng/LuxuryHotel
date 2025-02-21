document.addEventListener("DOMContentLoaded", function () {
  console.log("JavaScript is running!"); // Debugging line

  const heroText = document.querySelector('.hero-text');
  const heroImage = document.querySelector('.image-section img');
  heroText.style.opacity = 0;
  heroImage.style.opacity = 0;

  window.addEventListener('scroll', () => {
      console.log("Scrolling..."); // Debugging line

      let heroTextPosition = heroText.getBoundingClientRect().top;
      let heroImagePosition = heroImage.getBoundingClientRect().top;

      if (heroTextPosition < window.innerHeight * 0.7) {
          heroText.style.transition = 'opacity 1s';
          heroText.style.opacity = 1;
      }

      if (heroImagePosition < window.innerHeight * 0.7) {
          heroImage.style.transition = 'opacity 1s';
          heroImage.style.opacity = 1;
      }

      // Sliding in room cards on scroll
      const roomCards = document.querySelectorAll('.room-card');
      roomCards.forEach(card => {
          card.style.opacity = 0;
          card.style.transform = 'translateY(100px)';

          let cardPosition = card.getBoundingClientRect().top;

          if (cardPosition < window.innerHeight * 0.8) {
              card.style.transition = 'opacity 0.8s, transform 0.8s';
              card.style.opacity = 1;
              card.style.transform = 'translateY(0)';
          }
      });

      // Testimonial slide-in animation
      const testimonial = document.querySelector('.testimonial');
      testimonial.style.opacity = 0;

      let testimonialPosition = testimonial.getBoundingClientRect().top;
      if (testimonialPosition < window.innerHeight * 0.7) {
          testimonial.style.transition = 'opacity 1s';
          testimonial.style.opacity = 1;
      }
  });
});