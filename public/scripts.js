document.addEventListener("DOMContentLoaded", function () {
    const contactForm = document.getElementById('contactForm');
    const phoneInput = document.getElementById('phone');
    const phoneError = document.getElementById('phone-error');

    contactForm.addEventListener('submit', function (event) {
        // Get the value of the phone input
        const phoneValue = phoneInput.value;

        // Check if the phone number has at least 12 digits and is numeric
        if (!/^\d{12,}$/.test(phoneValue)) {
            // Prevent form submission
            event.preventDefault();
            event.stopPropagation();

            // Show the error message
            phoneInput.classList.add('is-invalid');
            phoneError.style.display = 'block';
        } else {
            // Clear the error if validation passes
            phoneInput.classList.remove('is-invalid');
            phoneError.style.display = 'none';
        }
    });
});
