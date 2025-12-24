document.getElementById('fileInput').addEventListener('change', function () {
    const file = this.files[0];

    if (!file) return;

    // Allow only images
    if (!file.type.startsWith('image/')) {
        alert('Please select an image file');
        this.value = '';
        return;
    }

    const reader = new FileReader();

    reader.onload = function (e) {
        const previewImg  = document.getElementById('previewImg');
        const previewLink = document.getElementById('previewLink');

        previewImg.src = e.target.result;
        previewLink.href = e.target.result;

        previewLink.style.display = 'inline-block';
    };

    reader.readAsDataURL(file);
});





document.getElementById('myForm').addEventListener('submit', function(e) {
  e.preventDefault();

  const formData = new FormData(this);// FIXED

  fetch('./BackEnd/CreateTicket.php', {
    method: 'POST',
    body: formData
  })
  .then(response => response.text())
  .then(data => {
    Toastify({
      text: data,
      duration: 3000,
      gravity: "top",
      position: "right",
      backgroundColor: "linear-gradient(270deg, #f8274eff 0%, #2a31a8ff 100%)",
      close: true
    }).showToast();

    document.getElementById("myForm").reset();

    // Clear image preview
  const previewImg  = document.getElementById('previewImg');
  const previewLink = document.getElementById('previewLink');

  previewImg.src = '';
  previewLink.href = '';
  previewLink.style.display = 'none';
    
  })
  .catch(error => {
    Toastify({
      text: "Error: " + error,
      duration: 3000,
      gravity: "top",
      position: "right",
      backgroundColor: "linear-gradient(270deg, #ff1640ff 0%, #b6022fff 100%)",
      close: true
    }).showToast();
  });
});




