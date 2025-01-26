// Get the modal, link, and close button
const modal = document.getElementById("contact-modal");
const contactLink = document.getElementById("contact-link");
const closeBtn = document.querySelector(".close");

// Show the modal when "Contact me" is clicked
contactLink.addEventListener("click", (e) => {
    e.preventDefault(); // Prevent default link behavior
    modal.style.display = "flex"; // Show the modal
});

// Hide the modal when the close button is clicked
closeBtn.addEventListener("click", () => {
    modal.style.display = "none";
});

// Hide the modal when clicking outside the modal content
window.addEventListener("click", (e) => {
    if (e.target === modal) {
        modal.style.display = "none";
    }
});
