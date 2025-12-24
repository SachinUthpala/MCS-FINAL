
function showToast(message, type = 'success') {
    let bgColor;

    switch (type) {
        case 'success':
            bgColor = "linear-gradient(to right, #00b09b, #96c93d)";
            break;
        case 'error':
            bgColor = "linear-gradient(to right, #ff416c, #ff4b2b)";
            break;
        case 'warning':
            bgColor = "linear-gradient(to right, #f7971e, #ffd200)";
            break;
        default:
            bgColor = "#333";
    }

    Toastify({
        text: message,
        duration: 3500,
        gravity: "top",
        position: "right",
        close: true,
        stopOnFocus: true,
        style: {
            background: bgColor
        }
    }).showToast();
}


/* ===============================
   AJAX Form Submit
================================ */
document.getElementById('signupForm').addEventListener('submit', function (e) {
    e.preventDefault();

    const form = this;
    const submitBtn = form.querySelector('input[type="submit"]');
    const formData = new FormData(form);

    // Disable button + change text
    submitBtn.disabled = true;
    const originalText = submitBtn.value;
    submitBtn.value = "Creating...";

    fetch(form.action, {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            showToast(data.message, 'success');
            form.reset();
        } else {
            showToast(data.message || 'Something went wrong', 'error');
        }
    })
    .catch(error => {
        console.error(error);
        showToast('Server error. Please try again later.', 'error');
    })
    .finally(() => {
        // Restore button
        submitBtn.disabled = false;
        submitBtn.value = originalText;
    });
});

