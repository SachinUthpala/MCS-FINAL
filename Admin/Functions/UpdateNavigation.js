const addBtn = document.getElementById("addSubNavBtn");
const container = document.getElementById("subNavContainer");
const removeLastBtn = document.getElementById("removeLastBtn");
const resetFormBtn = document.getElementById("resetFormBtn");

function updatePlaceholders() {
  const inputs = container.querySelectorAll("input[name='SubNav[]']");
  inputs.forEach((input, index) => {
    input.placeholder = "Sub Navigation " + (index + 1);
  });

  // Show remove button only if at least one dynamic input exists
  removeLastBtn.style.display = inputs.length > 0 ? 'inline-block' : 'none';
}

// Add new sub navigation row
addBtn.addEventListener("click", function(e) {
  e.preventDefault();

  const row = document.createElement("div");
  row.classList.add("row", "sub-nav-row");
  row.style.marginBottom = "10px";

  row.innerHTML = `
    <div class="col-12">
      <div class="billing_input_box">
        <input type="text" name="SubNav[]" placeholder="" required>
      </div>
    </div>
  `;

  container.appendChild(row);
  updatePlaceholders();
  container.style.display = "block";
});

// Remove last dynamic row
removeLastBtn.addEventListener("click", function(e) {
  e.preventDefault();
  const rows = container.querySelectorAll(".sub-nav-row");
  if (rows.length > 0) {
    rows[rows.length - 1].remove();
    updatePlaceholders();
  }
});

// Clear dynamic container on form reset (so Reset button clears newly added inputs too)
if (resetFormBtn) {
  resetFormBtn.addEventListener("click", function(e) {
    // form reset happens automatically; just clear dynamic container
    container.innerHTML = "";
    updatePlaceholders();
  });
}

// Submit form via Fetch (this part remains mostly same — FormData will include both SubNavExisting[] and SubNav[])
document.getElementById('myForm').addEventListener('submit', function(e) {
  e.preventDefault();

  const formData = new FormData(this);

  fetch('./BackEnd/UpdateNavigation.php', {
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
      // Toastify doesn't accept CSS gradient directly as a property; keep as color string if needed,
      // but leaving as you had for display. If it doesn't show gradient, change it to a single color.
      backgroundColor: "linear-gradient(270deg, #f8274eff 0%, #2a31a8ff 100%)",
      close: true,
    }).showToast();

    // clear dynamic container after successful update
    if (container) {
      container.innerHTML = "";
      updatePlaceholders();
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
