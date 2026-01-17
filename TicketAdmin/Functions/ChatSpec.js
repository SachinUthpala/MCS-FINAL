
    function showImage(src) {
        document.getElementById("modalImage").src = src;
    }



let selectedImage = null;

/* ====== IMAGE PREVIEW ====== */
document.getElementById('imageInput').addEventListener('change', function () {
    const file = this.files[0];
    if (!file) return;

    if (!file.type.startsWith('image/')) {
        alert('Please select an image file');
        this.value = '';
        return;
    }

    selectedImage = file;

    const reader = new FileReader();
    reader.onload = function (e) {
        document.getElementById('imagePreview').innerHTML =
            `<img src="${e.target.result}" class="chat-img">`;
    };
    reader.readAsDataURL(file);
});

/* ====== SHOW IMAGE IN MODAL ====== */
function showImage(src) {
    document.getElementById('modalImage').src = src;
}

/* ====== SEND MESSAGE FUNCTION ====== */
function sendMessage() {
    const messageInput = document.getElementById('messageInput');
    const chatBody = document.getElementById('chatBody');
    const message = messageInput.value.trim();

    if (message === '' && !selectedImage) return;

    let imageHTML = '';
    if (selectedImage) {
        const imgURL = URL.createObjectURL(selectedImage);
        imageHTML = `
            <br>
            <img src="${imgURL}"
                 class="chat-img"
     data-toggle="modal"
     data-target="#imageModal"
     onclick="showImage(this.src)">
        `;
    }

    chatBody.innerHTML += `
        <div class="d-flex align-items-start mb-4">
            <img src="../assets/images/favicons/favicon-16x16.png" class="avatar me-2 m-2">
            <div class="bg-secondary text-white p-2 rounded chat-message" style="background-color : #3b1d00ff !important ;">
                ${message}
                ${imageHTML}
            </div>
        </div>
    `;

    chatBody.scrollTop = chatBody.scrollHeight;

    /* ===== SEND TO BACKEND ===== */
    const formData = new FormData();
    formData.append('message', message);

    if (selectedImage) {
        formData.append('image', selectedImage);
    }

    fetch('./BackEnd/SaveReply.php', {
        method: 'POST',
        body: formData
    })
    .then(res => res.text())
    .then(response => {
        Toastify({
            text: response,
            duration: 3000,
            gravity: "top",
            position: "right",
            backgroundColor: "linear-gradient(270deg, #f8274e 0%, #2a31a8 100%)",
            close: true
        }).showToast();
    })
    .catch(err => {
        Toastify({
            text: "Error: " + err,
            duration: 3000,
            gravity: "top",
            position: "right",
            backgroundColor: "linear-gradient(270deg, #ff1640 0%, #b6022f 100%)",
            close: true
        }).showToast();
    });

    /* ===== RESET ===== */
    messageInput.value = '';
    document.getElementById('imageInput').value = '';
    document.getElementById('imagePreview').innerHTML = '';
    selectedImage = null;
}
