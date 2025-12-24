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
                    <input type="text" name="specHeader[]" placeholder="Product Specification" required>
                </div>
            </div>

            <div class="col-12">
                <div class="billing_input_box">
                    <textarea placeholder="Spec Discription" name="SpecDiscription[]" required ></textarea>
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


// form submit


document.getElementById('myForm').addEventListener('submit', function(e) {
  e.preventDefault();

  const formData = new FormData(this);
  const container = document.getElementById("subNavContainer"); // FIXED

  fetch('./BackEnd/AddProduct.php', {
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
    container.innerHTML = ""; // now works
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

