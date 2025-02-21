document.addEventListener("DOMContentLoaded", function () {
  document.querySelector("form").addEventListener("submit", function (e) {
      let isValid = true;

      let firstName = document.getElementById("first-name");
      let lastName = document.getElementById("last-name");
      let email = document.getElementById("email");
      let phone = document.getElementById("phone");
      let street = document.getElementById("street");
      let postcode = document.getElementById("postcode");
      let city = document.getElementById("city");
      let cardholder = document.getElementById("cardholder");
      let cardNumber = document.getElementById("card-number");
      let expiry = document.getElementById("expiry");
      let cvv = document.getElementById("cvv");

    
      function showError(input, message) {
          alert(message); 
          input.focus();
          isValid = false;
      }

      if (firstName.value.trim() === "") showError(firstName, "First name is required!");
      if (lastName.value.trim() === "") showError(lastName, "Last name is required!");

      let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailPattern.test(email.value)) showError(email, "Please enter a valid email address!");

      let phonePattern = /^\d{7,15}$/;
      if (!phonePattern.test(phone.value)) showError(phone, "Enter a valid phone number!");

 
      if (street.value.trim() === "") showError(street, "Street and No. are required!");
      if (postcode.value.trim() === "") showError(postcode, "Postcode is required!");
      if (city.value.trim() === "") showError(city, "City is required!");

      if (cardholder.value.trim() === "") showError(cardholder, "Cardholder name is required!");

      let cardPattern = /^\d{4} \d{4} \d{4} \d{4}$/;
      if (!cardPattern.test(cardNumber.value)) showError(cardNumber, "Enter a valid 16-digit card number!");

      let expiryPattern = /^(0[1-9]|1[0-2])\/\d{2}$/;
      if (!expiryPattern.test(expiry.value)) showError(expiry, "Expiry date must be in MM/YY format!");


      let cvvPattern = /^\d{3,4}$/;
      if (!cvvPattern.test(cvv.value)) showError(cvv, "CVV must be 3 or 4 digits!");

      if (!isValid) {
          e.preventDefault();
      }
  });


  document.getElementById('card-number').addEventListener('input', function (e) {
      let value = e.target.value.replace(/\D/g, '');  // Remove non-numeric characters
      value = value.replace(/(\d{4})/g, '$1 ').trim(); // Add space every 4 digits
      e.target.value = value;
  });
});
