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
 // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Intersection Observer for fade-in animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        // Observe all fade-in-up elements
        document.querySelectorAll('.fade-in-up').forEach(el => {
            observer.observe(el);
        });

        // Add parallax effect to hero section
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const hero = document.querySelector('.hero-section');
            if (hero && scrolled < window.innerHeight) {
                hero.style.transform = `translateY(${scrolled * 0.5}px)`;
            }
        });