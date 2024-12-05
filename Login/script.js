document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission

    // Get the values from the input fields
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    // Simple validation
    if (username === '' || password === '') {
        alert('Please fill in all fields.');
    } else {
        // Here you can add your login logic (e.g., API call)
        alert('Login successful!'); // Placeholder for successful login
    }
});