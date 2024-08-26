//Variables
const emailInput = document.getElementById("InputEmail")
const passwordInput = document.getElementById("passwordInput")
const loginButton = document.getElementById('login-button')

// Email Validator
function validateEmail(email) {
    // Correct base URL and endpoint from the documentation
    const apiUrl = `https://api.skrapp.io/v3/verify?email=${encodeURIComponent(email)}`;

    // Your API key (you should store this securely)
    const apiKey = '';

    console.log('Requesting URL:', apiUrl); // Log the URL for debugging

    // Make the API call
    fetch(apiUrl, {
        method: 'GET',
        headers: {
            'X-Access-Key': apiKey,
            'Content-Type': 'application/json'
        }
    })
    .then(response => {
        console.log('Response status:', response.status);
        return response.json();
    })
    .then(data => {
        console.log('API Response:', data);
        if (data.email_status === 'valid') {
            console.log('Email is valid');
        } else {
            console.log('Email is invalid or unverifiable');
        }
        // You can handle other response fields here as needed
    })
    .catch(error => {
        console.error('Error:', error);
    });
}

// Example usage:
emailInput.addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission
    const email = emailInput.value;
    validateEmail(email);
    console.log('it is changing')
});

// loginButton.addEventListener('click', ()=>{
//     console.log('hello')

// });
//  Password validator function
// function validatePassword(){

// }
// passwordInput.addEventListener('input', ()=>{
//     const checkPassword = passwordInput.value
//     const passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/
//     const regexTestPass = passwordRegex.test(checkPassword)
//     if(regexTestPass == false ){
//         // errorPass.style.display = "block";
//         console.log('wrong')
//       }
//       else{
//         // errorPass.style.display = "none";
//         console.log('right')
//       }
    
//       console.log(regexTestPass)
// })