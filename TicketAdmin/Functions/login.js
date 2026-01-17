
function showToast(message, type = 'success') {
    let bgColor;

    switch (type) {
        case 'success':
            bgColor = "linear-gradient(to right, #004cb0ff, #c93d8aff)";
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


const loader = document.getElementById('pageLoader');

document.getElementById('myForm').addEventListener('submit', function (e) {
    e.preventDefault();

    const formData = new FormData(this);

    fetch('BackEnd/login.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {

        if (data.status === 'success') {
            showToast(data.message, 'success');

            // Show loader
            loader.style.display = 'flex';

            setTimeout(() => {
                window.location.href = './dashboard.php';
            }, 6000);

        } else {
            showToast(data.message || 'Invalid Login! Try Again!', 'error');
        }

    })
    .catch(error => {
        showToast('Server error. Please try again.', 'error');
        console.error(error);
    });
});
