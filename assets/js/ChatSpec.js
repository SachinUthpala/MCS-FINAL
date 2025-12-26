
    function showImage(src) {
        document.getElementById("modalImage").src = src;
    }




let selectedImage = null;

// Preview image
document.getElementById('imageInput').addEventListener('change', function () {
    const file = this.files[0];
    if (!file) return;

    selectedImage = file;

    const reader = new FileReader();
    reader.onload = function (e) {
        document.getElementById('imagePreview').innerHTML =
            `<img src="${e.target.result}" class="chat-img">`;
    };
    reader.readAsDataURL(file);
});

// Send message
function sendMessage() {
    const message = document.getElementById('messageInput').value;
    if (message === '' && !selectedImage) return;

    let imageHTML = '';
    if (selectedImage) {
        imageHTML = `
            <br>
            <img src="${URL.createObjectURL(selectedImage)}"
                 class="chat-img"
                 data-bs-toggle="modal"
                 data-bs-target="#imageModal"
                 onclick="showImage(this.src)">
        `;
    }

    document.getElementById('chatBody').innerHTML += `
        <div class="d-flex align-items-start justify-content-end mb-4">
            <div class="bg-primary text-white p-2 rounded text-end chat-message">
                ${message}
                ${imageHTML}
            </div>
            <img src="Images/UserImages/user.png" class="avatar ms-2">
        </div>
    `;

    // Reset
    document.getElementById('messageInput').value = '';
    document.getElementById('imageInput').value = '';
    document.getElementById('imagePreview').innerHTML = '';
    selectedImage = null;

    // Auto scroll
    const chatBody = document.getElementById('chatBody');
    chatBody.scrollTop = chatBody.scrollHeight;
}

// Modal image
function showImage(src) {
    document.getElementById("modalImage").src = src;
}

