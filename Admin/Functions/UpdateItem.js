const ShowErrorMsg = () => {
    Swal.fire({
        title: 'Error!',
        text: 'You cannot update item category.',
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


// for specs

document.addEventListener("DOMContentLoaded", function() {

    const addBtn = document.querySelector(".main-menu-two__btn-box button");
    const container = document.getElementById("subNavContainer");
    const removeLastBtn = document.getElementById("removeLastBtn");

    function updatePlaceholders() {
        const inputs = container.querySelectorAll("input[name='specHeader[]']");
        inputs.forEach((input, index) => {
            input.placeholder = "Product Spec " + (index + 1);
        });

        removeLastBtn.style.display = inputs.length > 0 ? 'inline-block' : 'none';
    }

    addBtn.addEventListener("click", function(e) {
        e.preventDefault();

        const row = document.createElement("div");
        row.classList.add("row", "sub-nav-row");
        row.style.marginBottom = "10px";

        row.innerHTML = `
            <div class="col-12">
                <div class="billing_input_box">
                    <input type="text" name="specHeader[]" placeholder="Product Specification">
                </div>
            </div>

            <div class="col-12">
                <div class="billing_input_box">
                    <textarea placeholder="Spec Discription" name="SpecDiscription[]"></textarea>
                </div>
            </div>
        `;

        container.appendChild(row);
        updatePlaceholders();
        container.style.display = "block";
    });

    removeLastBtn.addEventListener("click", function(e) {
        e.preventDefault();

        const rows = container.querySelectorAll(".sub-nav-row");
        if (rows.length > 0) {
            rows[rows.length - 1].remove();
            updatePlaceholders();
        }
    });

   
});



document.getElementById("fileInput").addEventListener("change", function () {
    const file = this.files[0];
    if (!file) return;

    const reader = new FileReader();

    reader.onload = function (e) {
        // Set image preview
        const imgSrc = e.target.result;
        document.getElementById("previewImg").src = imgSrc;

        // Set lightbox big preview
        const previewLink = document.getElementById("previewLink");
        previewLink.href = imgSrc;

        // Show image
        previewLink.style.display = "inline-block";
    };

    reader.readAsDataURL(file);
});


document.getElementById("myForm").addEventListener("submit", function (e) {
    e.preventDefault();

    let formData = new FormData(this);

    fetch("./BackEnd/UpdateProduct.php", {
        method: "POST",
        body: formData
    })
    .then(res => res.text())
    .then(data => {
    if (!data.trim()) {
        data = "Product Updated Successfully!";
    }

    Toastify({
      text: data,
      duration: 3000,
      gravity: "top",
      position: "right",
      backgroundColor: "linear-gradient(270deg, #f8274eff 0%, #2a31a8ff 100%)",
      close: true,
      callback: function() {
        location.reload();
    }
    }).showToast();

    if (container) {
      container.innerHTML = "";
      updatePlaceholders();
    }
})

});