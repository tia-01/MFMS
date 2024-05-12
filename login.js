// Define a map of predefined usernames and passwords
const users = {
    "Gandakiuniversity2022@gmail.com": "password1",
    

};

// Function to handle form submission
document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent default form submission
    
    // Get input values
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    // Check if username exists and password matches
    if (users[username] && users[username] === password) {
        document.getElementById("loginStatus").textContent = "Login successful!";
        // Redirect to another page or perform additional actions after successful login
         window.location.href = "admin.html";
    } else {
        document.getElementById("loginStatus").textContent = "Login failed. Invalid username or password.";
    }
});
