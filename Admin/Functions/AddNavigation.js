
document.addEventListener("DOMContentLoaded", function() {

    const addBtn = document.querySelector(".main-menu-two__btn-box button");
    const container = document.getElementById("subNavContainer");
    const removeLastBtn = document.getElementById("removeLastBtn");

    function updatePlaceholders() {
        const inputs = container.querySelectorAll("input[name='SubNav[]']");
        inputs.forEach((input, index) => {
            input.placeholder = "Sub Navigation " + (index + 1);
        });

        // Show remove button only if at least one input exists
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
                    <input type="text" name="SubNav[]" placeholder="" required>
                </div>
            </div>
        `;

        container.appendChild(row);
        updatePlaceholders();
        container.style.display = "block"; // ensure container is visible
    });

    removeLastBtn.addEventListener("click", function(e) {
        e.preventDefault();

        const rows = container.querySelectorAll(".sub-nav-row");
        if (rows.length > 0) {
            rows[rows.length - 1].remove();
            updatePlaceholders();
        }
    });

    // Form submission
    document.querySelector(".billing_details_form").addEventListener("submit", function(e) {
        e.preventDefault();

        let mainNav = document.querySelector("input[name='MainNav']").value;
        let subNavs = Array.from(document.querySelectorAll("input[name='SubNav[]']")).map(x => x.value);

        let formData = new FormData();
        formData.append("mainNav", mainNav);
        formData.append("subNavs", JSON.stringify(subNavs));

        fetch("./BackEnd/AddNavigation.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            // Show toast message
            Toastify({
                text: data,
                duration: 3000,
                close: true,
                gravity: "bottom",
                position: "center",
                background: "linear-gradient(270deg, #f8274eff 0%, #2a31a8ff 100%)",
            }).showToast();

            // Reset the form and sub-navigation container
            document.querySelector(".billing_details_form").reset();
            container.innerHTML = "";  // remove all sub-navigation rows
            updatePlaceholders();      // hide remove button
        })
        .catch(err => {
            console.log(err);
            Toastify({
                text: "Something went wrong!",
                duration: 3000,
                close: true,
                gravity: "bottom",
                position: "center",
                background: "linear-gradient(270deg, #ff1640ff 0%, #b6022fff 100%)",
            }).showToast();
        });
    });

});

// document.addEventListener("DOMContentLoaded", function() {

//     const addBtn = document.querySelector(".main-menu-two__btn-box button");
//     const container = document.getElementById("subNavContainer");
//     const removeLastBtn = document.getElementById("removeLastBtn");

//     function updatePlaceholders() {
//         const inputs = container.querySelectorAll("input[name='SubNav[]']");
//         inputs.forEach((input, index) => {
//             input.placeholder = "Sub Navigation " + (index + 1);
//         });

//         // Show remove button only if at least one input exists
//         removeLastBtn.style.display = inputs.length > 0 ? 'inline-block' : 'none';
//     }

//     addBtn.addEventListener("click", function(e) {
//         e.preventDefault();

//         const row = document.createElement("div");
//         row.classList.add("row", "sub-nav-row");
//         row.style.marginBottom = "10px";

//         row.innerHTML = `
//             <div class="col-12">
//                 <div class="billing_input_box">
//                     <input type="text" name="SubNav[]" placeholder="">
//                 </div>
//             </div>
//         `;

//         container.appendChild(row);
//         updatePlaceholders();
//         container.style.display = "block"; // ensure container is visible
//     });

//     removeLastBtn.addEventListener("click", function(e) {
//         e.preventDefault();

//         const rows = container.querySelectorAll(".sub-nav-row");
//         if (rows.length > 0) {
//             rows[rows.length - 1].remove();
//             updatePlaceholders();
//         }
//     });

//     // Form submission
//     document.querySelector(".billing_details_form").addEventListener("submit", function(e) {
//         e.preventDefault();

//         let mainNav = document.querySelector("input[name='MainNav']").value;
//         let subNavs = Array.from(document.querySelectorAll("input[name='SubNav[]']")).map(x => x.value);

//         let formData = new FormData();
//         formData.append("mainNav", mainNav);
//         formData.append("subNavs", JSON.stringify(subNavs));

//         fetch("./BackEnd/AddNavigation.php", {
//             method: "POST",
//             body: formData
//         })
//         .then(response => response.text())
//         .then(data => {
//             // Show toast message
//             Toastify({
//                 text: data,
//                 duration: 3000,
//                 close: true,
//                 gravity: "bottom",
//                 position: "center",
//                 background: "linear-gradient(270deg, #f8274eff 0%, #2a31a8ff 100%)",
//             }).showToast();

//             // Reset the form and sub-navigation container
//             document.querySelector(".billing_details_form").reset();
//             container.innerHTML = "";  // remove all sub-navigation rows
//             updatePlaceholders();      // hide remove button
//         })
//         .catch(err => {
//             console.log(err);
//             Toastify({
//                 text: "Something went wrong!",
//                 duration: 3000,
//                 close: true,
//                 gravity: "bottom",
//                 position: "center",
//                 background: "linear-gradient(270deg, #ff1640ff 0%, #b6022fff 100%)",
//             }).showToast();
//         });
//     });

// });