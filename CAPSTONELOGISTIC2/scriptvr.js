document.addEventListener('DOMContentLoaded', () => {
    const reservationForm = document.getElementById('reservationForm');
    const reservationsList = document.getElementById('reservations');
  
    reservationForm.addEventListener('submit', (event) => {
      event.preventDefault();
  
      // Get form values
      const vehicleType = document.getElementById('vehicleType').value;
      const pickupLocation = document.getElementById('pickupLocation').value;
      const deliveryLocation = document.getElementById('deliveryLocation').value;
      const deliveryDate = document.getElementById('deliveryDate').value;
      const driver = document.getElementById('driver').value;
  
      // Create a new reservation entry
      const reservationItem = document.createElement('li');
      reservationItem.innerHTML = `
        <strong>Vehicle:</strong> ${vehicleType} <br>
        <strong>Pickup Location:</strong> ${pickupLocation} <br>
        <strong>Delivery Location:</strong> ${deliveryLocation} <br>
        <strong>Delivery Date:</strong> ${deliveryDate} <br>
        <strong>Driver:</strong> ${driver}
      `;
  
      // Add new reservation to the list
      reservationsList.appendChild(reservationItem);
  
      // Clear the form
      reservationForm.reset();
    });
  });
  