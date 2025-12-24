document.getElementById('myForm').addEventListener('submit', function(e) {
  e.preventDefault();

  const formData = new FormData(this);

  fetch('./BackEnd/AddUser.php', {
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

    // FIXED: no more error
    if (typeof container !== "undefined" && container) {
      container.innerHTML = "";
    }

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
