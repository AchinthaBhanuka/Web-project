
document.querySelector('.contact-form').addEventListener('submit', function (event) {
   
    event.preventDefault();

    
    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const message = document.getElementById('message').value.trim();

   
    let isValid = true;

   
    if (name === '') {
        alert('Please enter your name.');
        isValid = false;
    } else if (name.length < 3) {
        alert('Name must be at least 3 characters long.');
        isValid = false;
    }

    
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (email === '') {
        alert('Please enter your email.');
        isValid = false;
    } else if (!emailPattern.test(email)) {
        alert('Please enter a valid email address.');
        isValid = false;
    }

    
    if (message === '') {
        alert('Please enter your message.');
        isValid = false;
    } else if (message.length < 10) {
        alert('Message must be at least 10 characters long.');
        isValid = false;
    }

    
    if (isValid) {
        alert('Form submitted successfully!');
        this.submit();
    }
});
