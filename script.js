// Form validation function
function validateForm(event) {
    // Prevent default form submission
    event.preventDefault();

    // Get form values
    const name = document.getElementById("name").value.trim();
    const birthday = document.getElementById("birthday").value;
    const permitDate = document.getElementById("permit_date").value;

    // Validate required fields
    if (!name) {
        alert("Name must be filled out!");
        return false;
    }
    if (!birthday) {
        alert("Birthday must be selected!");
        return false;
    }
    if (!permitDate) {
        alert("Permit issue date must be selected!");
        return false;
    }

    // If all validations pass, show a success message
    alert("Form submitted successfully!");
    document.querySelector("form").submit(); // Proceed with form submission
}

// Add event listener for form validation
document.addEventListener("DOMContentLoaded", () => {
    const form = document.querySelector("form");
    form.addEventListener("submit", validateForm);
});
