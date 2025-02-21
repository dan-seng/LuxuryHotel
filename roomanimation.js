
document.addEventListener("DOMContentLoaded", function () {
    const roomCards = document.querySelectorAll('.room-cardxx');

    // Initially set position and blur for room cards
    roomCards.forEach((card, index) => {
        card.style.opacity = 0;
        if (index % 2 === 0) {
            // Left side (even index cards)
            card.style.transform = 'translateX(-100px)';
        } else {
            // Right side (odd index cards)
            card.style.transform = 'translateX(100px)';
        }
        card.style.filter = 'blur(5px)'; // Apply blur effect initially
    });

    window.addEventListener('scroll', () => {
        roomCards.forEach((card, index) => {
            const cardPosition = card.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;

            // If the room card is visible in the viewport, apply animations
            if (cardPosition < windowHeight * 0.8) {
                card.style.transition = 'opacity 0.8s, transform 0.8s, filter 0.8s'; // Smooth transition
                card.style.opacity = 1; // Fade in
                
                if (index % 2 === 0) {
                    // For left side cards (even index)
                    card.style.transform = 'translateX(0px)'; // Slide to normal position
                } else {
                    // For right side cards (odd index)
                    card.style.transform = 'translateX(0px)'; // Slide to normal position
                }

                card.style.filter = 'blur(0px)'; // Remove blur effect
            }
        });
    });
});

