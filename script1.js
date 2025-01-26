
const bookingForm = document.getElementById('booking-form');


bookingForm.addEventListener('submit', function (event) {
    event.preventDefault(); 

   
    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const datetime = document.getElementById('datetime').value;
    const people = document.getElementById('people').value;
    const request = document.getElementById('request').value.trim();

    
    if (!name || !email || !datetime || !people) {
        alert('Please fill in all required fields.');
        return;
    }

    if (!validateEmail(email)) {
        alert('Please enter a valid email address.');
        return;
    }

    if (people <= 0) {
        alert('Number of people must be greater than zero.');
        return;
    }

    
    alert(`Thank you, ${name}! Your table for ${people} people has been booked on ${new Date(datetime).toLocaleString()}.`);
    
    
    bookingForm.reset();
});


function validateEmail(email) {
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailPattern.test(email);
}
