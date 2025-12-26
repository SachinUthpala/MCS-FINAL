Folder Id

1hUQ-amg3BU6AjHe8Vhsw81B9WV6Ll2dB

Web App Url

https://script.google.com/macros/s/AKfycbxzAMGE5wLCag2jA50S0loC7k4wVgmcpW8avyxzUIW2herKufYdkxGmHQfUT16OMa2P/exec

Diployment Id

AKfycbxzAMGE5wLCag2jA50S0loC7k4wVgmcpW8avyxzUIW2herKufYdkxGmHQfUT16OMa2P





<!-- service accoubt -->
mcs-web-client@mcs-web-481406.iam.gserviceaccount.com



<!-- chat test -->




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chat with Input</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .chat-body {
            height: 350px;
            overflow-y: auto;
        }
        .chat-img {
            width: 120px;
            cursor: pointer;
            border-radius: 6px;
            margin-top: 5px;
        }
        .chat-input {
            border-top: 1px solid #ddd;
        }
    </style>
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card">

        <!-- Header -->
        <div class="card-header text-center fw-bold">
            Chat
        </div>

        <!-- Messages -->
        <div class="card-body chat-body" id="chatBody">

            <!-- Receiver -->
            <div class="d-flex mb-4">
                <div class="bg-secondary text-white p-2 rounded">
                    This is the design image
                    <br>
                    <img src="https://via.placeholder.com/300"
                         class="chat-img"
                         data-bs-toggle="modal"
                         data-bs-target="#imageModal"
                         onclick="showImage(this.src)">
                </div>
            </div>

            <!-- Sender -->
            <div class="d-flex justify-content-end mb-4">
                <div class="bg-primary text-white p-2 rounded text-end">
                    Looks good 👍
                </div>
            </div>

        </div>

        <!-- Input -->
        <div class="card-footer chat-input">
    <div class="input-group">
        <input type="file" id="imageInput" class="form-control d-none" accept="image/*">
        
        <button class="btn btn-outline-secondary" onclick="document.getElementById('imageInput').click()">
            📎
        </button>

        <input type="text" id="messageInput" class="form-control" placeholder="Type a message...">

        <button class="btn btn-primary" onclick="sendMessage()">Send</button>
    </div>

    <!-- Image Preview -->
    <div id="imagePreview" class="mt-2"></div>
</div>


    </div>
</div>

<!-- Image Modal -->
<div class="modal fade" id="imageModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body p-0">
                <img id="modalImage" src="" class="img-fluid w-100">
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    function showImage(src) {
        document.getElementById("modalImage").src = src;
    }
</script>


<script>
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
        <div class="d-flex justify-content-end mb-4">
            <div class="bg-primary text-white p-2 rounded text-end">
                ${message}
                ${imageHTML}
            </div>
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
</script>


</body>
</html>
