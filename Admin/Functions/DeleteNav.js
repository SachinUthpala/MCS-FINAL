
document.querySelectorAll('.delete-btn').forEach(button => {
    button.addEventListener('click', function () {

        let id = this.dataset.id; // get product id
        let row = this.closest("tr"); // get the table row

        Swal.fire({
            title: 'Are you sure?',
            text: "Do you want to delete this item?",
            icon: 'warning',
            background: '#020000a8',
            color: '#ffffffff',
            showCancelButton: true,
            confirmButtonColor: '#0051ffff',
            cancelButtonColor: '#ff0000',
            confirmButtonText: 'Yes, Delete'
        }).then((result) => {
            if (result.isConfirmed) {

                // Send AJAX request to deleteAdmin\BackEnd\DeleteProducts.php
                fetch("./BackEnd/DeleteNavigation.php", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/x-www-form-urlencoded"
                    },
                    body: "id=" + encodeURIComponent(id)
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
                    // Remove the row visually without reload
                    row.remove();
                });
            }
        });
    });
});
