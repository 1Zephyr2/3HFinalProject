document.getElementById('createAccountForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission

    // Get the values from the input fields
    const fullName = document.getElementById('fullName').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;

    // Simple validation
    if (fullName === '' || email === '' || password === '' || confirmPassword === '') {
        alert('Please fill in all fields.');
    } else if (password !== confirmPassword) {
        alert('Passwords do not match.');
    } else {
        // Here you can add your account creation logic (e.g., API call)
        alert('Account created successfully!'); // Placeholder for successful account creation
    }
});