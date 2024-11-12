// Get the modal and button elements
const modalEl = document.getElementById('info-popup');
const closeModalEl = document.getElementById('close-modal');
const acceptPrivacyEl = document.getElementById('confirm-button');

// Initially, show the modal
modalEl.classList.remove('hidden'); // Ensure the modal is visible

// Set up the event listeners for closing the modal
closeModalEl.addEventListener('click', function() {
    modalEl.classList.add('hidden'); // Hide the modal on cancel
});

acceptPrivacyEl.addEventListener('click', function() {
    alert('Privacy accepted'); // You can replace this with your action
    modalEl.classList.add('hidden'); // Hide the modal on confirm
});
