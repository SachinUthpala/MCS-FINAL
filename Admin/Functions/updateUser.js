const ShowErrorMsg = () => {
    Swal.fire({
        title: 'Error!',
        text: 'You cannot update user Password.',
        icon: 'error',

        // Custom Styling
        background: '#000000cb',       // custom background color
        color: '#ffffff',            // text color
        
        confirmButtonText: 'OK',
        confirmButtonColor: '#fa2032ff',  // red button
        cancelButtonColor: '#457b9d',   // blue button (if you add cancel button)

        // Optional animation
        showClass: {
            popup: 'animate__animated animate__shakeX'
        },
        hideClass: {
            popup: 'animate__animated animate__fadeOut'
        }
    });
};







document.getElementById('myForm').addEventListener('submit', function(e) {
  e.preventDefault();

  const formData = new FormData(this);

  fetch('./BackEnd/UpdateUser.php', {
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
      close: true,
      callback: function() {
        window.location.href = './UpdateUser.php';
    }
    }).showToast();

    // document.getElementById("myForm").reset();
    // location.href = './UpdateUser.php';

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

