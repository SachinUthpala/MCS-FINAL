document.getElementById('myForm').addEventListener('submit', function(e) {
  e.preventDefault();

  const formData = new FormData(this);

  fetch('backend.php', {
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
      background: "linear-gradient(to right, #0032d4ff, #1466ffff)",
      close: true
    }).showToast();
  })
  .catch(error => {
    Toastify({
      text: "Error: " + error,
      duration: 3000,
      gravity: "top",
      position: "right",
      background: "linear-gradient(to right, #f30014ff, #ff002bff)",
      close: true
    }).showToast();
  });
});
